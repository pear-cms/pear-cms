<?php

namespace ThibaudDT\TrinityCoreAuth\Models\Auth;

use Illuminate\Database\Query\Builder;
use Illuminate\Notifications\Notifiable;
use ThibaudDT\TrinityCoreModels\Auth\Account as AccountTrinityCore;
use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

/**
 * Class Account
 *
 * @category Eloquent Model
 * @package  ThibaudDT\TrinityCoreAuth\Models\Auth
 * @author   Thibaud DELOBELLE TOUSSAINT <thibaud@d-t.fr>
 * @license  GNU
 * @link     https://github.com/Thibaud-DT/trinitycore-auth
 */

class Account extends AccountTrinityCore implements
    AuthenticatableContract,
    AuthorizableContract,
    CanResetPasswordContract
{
    use Notifiable, Authenticatable, Authorizable, CanResetPassword;



    function __construct(array $attributes = [])
    {
        $this->hidden[] ='remember_token';

        if(config('trinitycore-auth.passport')){
            $this->hidden[] ='password';
            $this->fillable[] ='password';
        }

        parent::__construct($attributes);

    }

    /**
     * Resolved a User instance by Username
     * @param  Builder $query
     * @param  string $username
     * @return ModelContract
     */
    public function scopeFindByUsername(Builder $query, $username)
    {
        return $query->where('username', '=', $username)->FirstOrFail();
    }

    public function getAuthPassword(){
        return $this->sha_pass_hash;
    }
}