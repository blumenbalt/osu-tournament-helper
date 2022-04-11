<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\CookieController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class OsuAuthController extends Controller
{
    public function oauth(Request $request)
    {
        $client = new Client();
        $response = $client->request('POST', 'https://osu.ppy.sh/oauth/token', [
            'form_params' => [
                'client_id' => '6689',
                'client_secret' => 'gfFFuM3EJO2p4gKOdBpklqYQB7V3BmOBQpMTVAuj',
                'redirect_uri' => 'http://localhost:8000/callback',
                'code' => $request->code,
                'grant_type' => 'authorization_code',
            ]
        ]);
        $result = json_decode($response->getBody());
        CookieController::setCookieAccessToken($result);
        return $this->getUserData($result->access_token);
    }

    public function getUserData($token = null)
    {
        $token = !$token ? CookieController::getCookieAccessToken() : $token;

        $client = new Client();
        $osu_data_request = $client->request('GET', 'https://osu.ppy.sh/api/v2/me/osu', [
            'headers' => [
                'Authorization' => 'Bearer ' . $token,
                'Content-Type'  => 'application/json',
                'Accept' => 'application/json',
            ]
        ]);

        $result = json_decode($osu_data_request->getBody(), true);

        $request = new Request();
        $request->setMethod('POST');
        $request->request->add($result);

        $register_controller = new RegisterController();
        $register_controller->register($request);

        return redirect('/');
    }
}