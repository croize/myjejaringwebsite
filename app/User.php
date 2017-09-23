<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'akses' , 'status' , 'number', 'image',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function akses($akses){
      if ($this->akses == $akses) {
        return true;
      }else{
        return false;
      }
    }
    public function status($status){
      if ($this->status == $status) {
        return true;
      }else{
        return false;
      }
    }
}
