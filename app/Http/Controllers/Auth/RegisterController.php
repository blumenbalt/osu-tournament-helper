<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $user = [
            'username' => $data['username'],
            'osu_id' => $data['id'],
            'pp' => $data['statistics']['pp'],
            'updated_rank' => $data['statistics']['global_rank'],
            'country' => $data['country']['name'],
        ];

        return Validator::make($user, [
            'username' => ['required', 'string', 'max:255'],
            'osu_id' => ['required', 'numeric'],
            'pp' => ['required', 'numeric'],
            'updated_rank' => ['required', 'numeric'],
            'country' => ['required', 'string'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $user = User::firstWhere('osu_id', $data['id']);

        if ($user) {
            return $user;
        }

        return User::create([
            'username' => $data['username'],
            'osu_id' => $data['id'],
            'pp' => $data['statistics']['pp'],
            'updated_rank' => $data['statistics']['global_rank'],
            'country' => $data['country']['name'],
        ]);
    }
}
