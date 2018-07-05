<?php

namespace ThibaudDT\TrinityCoreAuth\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Contracts\Hashing\Hasher as IlluminateHasher;
use Illuminate\Support\Str;

use Illuminate\Http\Request;

/**
 * Class ResetPasswordController
 *
 * @category Controller
 * @package  ThibaudDT\TrinityCoreAuth\Http\Controllers\Auth
 * @author   Thibaud DELOBELLE TOUSSAINT <thibaud@d-t.fr>
 * @license  GNU
 * @link     https://github.com/Thibaud-DT/trinitycore-auth
 */
class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;


    /**
     * Instance of the TrinityCore password hasher
     *
     *
     * @var SHA1Hasher
     */
    protected $hasher;



    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = '/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(IlluminateHasher $hasher)
    {
        $this->hasher = $hasher;
        $this->middleware('guest');
    }

    protected function resetPassword($user, $password){
        $data = [
            'sha_pass_hash'  => $this->hasher->make([
                'username' => $user->username,
                'password' => $password]),
            'remember_token' => Str::random(60),
        ];

        if(config('trinitycore-auth.passport')){
            $data['password'] = md5($password);
        }

        $user->forceFill($data)->save();
    }

}
