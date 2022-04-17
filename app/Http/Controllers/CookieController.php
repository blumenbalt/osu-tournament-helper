<?php

namespace App\Http\Controllers;

use Cookie;

class CookieController extends Controller
{
    /**
     * 
     * gets the access_token from the cookie to get data from user 
     * 
     */

    public static function getCookieUserAccessToken()
    {
        return Cookie::get('access_token');
    }

    /**
     * 
     * 
     * sets the token data on the cookie for retrieval of user data later
     * 
     */

    public static function setCookieUserAccessToken($result)
    {
        $minutes = $result->expires_in / 60;
        Cookie::queue('token_type', $result->token_type, $minutes);
        Cookie::queue('expires_in',  $result->expires_in, $minutes);
        Cookie::queue('access_token',  $result->access_token, $minutes);
        Cookie::queue('refresh_token', $result->refresh_token, $minutes);
    }

    /**
     * 
     * gets the access_token from the cookie to get data from client 
     * 
     */

    public static function getCookieClientAccessToken()
    {
        return Cookie::get('access_token');
    }

    /**
     * 
     * 
     * sets the token data on the cookie for retrieval of user data later
     * 
     */

    public static function setCookieClientAccessToken($result)
    {
        $minutes = $result->expires_in / 60;
        Cookie::queue('token_type', $result->token_type, $minutes);
        Cookie::queue('expires_in',  $result->expires_in, $minutes);
        Cookie::queue('access_token',  $result->access_token, $minutes);
    }
}
