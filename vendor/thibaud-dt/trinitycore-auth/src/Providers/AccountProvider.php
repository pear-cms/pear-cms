<?php

namespace ThibaudDT\TrinityCoreAuth\Providers;

use Illuminate\Auth\EloquentUserProvider;
use Illuminate\Contracts\Auth\Authenticatable as UserContract;
use Illuminate\Contracts\Hashing\Hasher;
use Illuminate\Foundation\Auth\User;
use ThibaudDT\TrinityCoreAuth\Models\Auth\Account;

/**
 * Class AccountProvider
 *
 * @category Provider
 * @package  ThibaudDT\TrinityCoreAuth\Providers
 * @author   Thibaud DELOBELLE TOUSSAINT <thibaud@d-t.fr>
 * @license  GNU
 * @link     https://github.com/Thibaud-DT/trinitycore-auth
 */
class AccountProvider extends EloquentUserProvider
{
    public function __construct(Hasher $hasher, UserContract $model)
    {
        parent::__construct($hasher, $model);
    }
    /**
     * Validate a user against the given credentials.
     *
     * @param  \Illuminate\Contracts\Auth\Authenticatable  $user
     * @param  array  $credentials
     * @return bool
     */
    public function validateCredentials(UserContract $user, array $credentials)
    {

        $password = $credentials['password'];
        $username = array_key_exists('username', $credentials) ? $credentials['username'] : $this->model->whereEmail($credentials['email'])->FirstOrFail()->username;

        return $this->hasher->check(compact('username', 'password'), $user->getAuthPassword());
    }


    /**
     * Create a new instance of the model.
     *
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function createModel()
    {
        return $this->model;
    }

}