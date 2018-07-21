<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    const VERIFIED_USER     = 1;
    const UNVERIFIED_USER   = 0;
    const ADMIN_USER        = 1;
    const REGULAR_USER      = 0;
    const ACTIVE_USER       = 1;
    const INACTIVE_USER     = 0;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email', 'password', 'is_admin', 'is_verified', 'is_active',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function UserVerification()
    {
        return $this->hasOne('App\UserVerification');
    }

    /**
     * Check if the user is an admin
     * @return bool
     */
    public function isAdmin()
    {
        return $this->is_admin === self::ADMIN_USER;
    }

    /**
     * check if the user is verified their account via email
     * @return bool
     */
    public function isVerified()
    {
        return $this->is_verified === self::VERIFIED_USER;
    }

    /**
     * Check if the user is an active user
     * @return bool
     */
    public function isActive()
    {
        return $this->is_active === self::ACTIVE_USER;
    }

    /**
     * generate the code to attache in the link in the email verification
     * @return string
     */
    public function generateVerificationCaode()
    {
        return str_random(40);
    }
}
