<?php

namespace App\Models;

use Auth;
use Cache;
use Avatar;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laratrust\Traits\LaratrustUserTrait;
use OwenIt\Auditing\Contracts\Auditable;

class User extends Authenticatable implements Auditable
{
    use LaratrustUserTrait;
    use HasFactory, Notifiable;
    use \OwenIt\Auditing\Auditable;
    use \HighIdeas\UsersOnline\Traits\UsersOnlineTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'image'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

     protected $appends = [
        'allPermissions',
    ];

    public function getAllPermissionsAttribute()
    {
        return $this->allPermissions();
    }

    public function adminlte_profile_url(){
        return "form/editprofile";
    }

    public function adminlte_image(){
        return Auth::user()->image ? Auth::user()->image: Avatar::create(preg_match('/^[A-Za-z]/',Auth::user()->name) ? Auth::user()->name: "Guest")->toBase64();
    }

    public function isOnline()
    {
        return Cache::has('user-is-online-' . $this->id);
    }


}
