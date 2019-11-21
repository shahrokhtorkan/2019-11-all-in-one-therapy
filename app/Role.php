<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function users() {
        return $this->belongsToMany('App\user');
    }

    public function permissions() {
        return $this->belongsToMany('App\permission');
    }

    public function hasPermission(string $permissionName): bool {

        $hasPermission = false;

        foreach($this->permissions as $permission) {
            if($permission->name == $permissionName) {
                $hasPermission=true;
                break;
            }
        }

        return $hasPermission;
    }
}
