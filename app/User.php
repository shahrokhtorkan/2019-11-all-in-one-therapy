<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

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

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function documentations() {
        return $this->hasMany('App\Documentation');
    }

    public function roles() {
        return $this->belongsToMany('App\Role');
    }

    public function addRole(string $roleName) {
        $role = Role::where('name',$roleName)->first();
        $this->roles()->save($role);
    }

    public function hasPermission(string $permissionName): bool {

        $hasPermission = false;

        foreach($this->roles as $role) {
            if($role->hasPermssion('permissionName')) {
                $hasPermission=true;
                break;
            }
        }

        return $hasPermission;
    }
}
