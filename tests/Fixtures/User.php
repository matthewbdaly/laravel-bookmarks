<?php

namespace Tests\Fixtures;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Matthewbdaly\LaravelBookmarks\Eloquent\Traits\Bookmarkable;

/**
 * Generic user implementation purely for testing
 *
 * As this package is designed to work with any existing user model, it doesn't make sense
 * to include one except solely for testing. This is basically the default Laravel user model.
 */
class User extends Authenticatable
{
    use Notifiable, Bookmarkable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public $url = 'http://example.com';
}
