<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\CookieController;
use App\Http\Controllers\Auth\OsuAuthController;
use GuzzleHttp\Client;

class MusicController extends Controller
{
    //
    public function index()
    {
        return view('musics.index');
    }

    public function register()
    {
        return view('musics.register');
    }

    public function getBeatmap(Request $request)
    {
        $token = CookieController::getCookieClientAccessToken();

        if (!$token) {
            $osuController = new OsuAuthController();
            $token = $osuController->clientOauth();
        }

        $beatmap = $this->getBeatmapData($request->all()['beatmap_id'], $token);
        return view('musics.register');
    }

    public function getBeatmapData($beatmapId, $token)
    {

        $client = new Client();
        $osu_data_request = $client->request('GET', "https://osu.ppy.sh/api/v2/beatmaps/$beatmapId", [
            'headers' => [
                'Authorization' => "Bearer $token",
                'Content-Type'  => 'application/json',
                'Accept' => 'application/json',
            ]
        ]);

        $result = json_decode($osu_data_request->getBody(), true);
        dd($result);
        return $result;
    }
}
