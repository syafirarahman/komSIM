<?php

namespace App;
use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
     use HasApiTokens, Notifiable;
    protected $table ='users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'nip','phone','email','email_verified_at', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    //tabel tujuan
    public function folder(){
        return $this->hasMany('Folder','user_id');
    }
    public function file(){
        return $this->hasMany('File','user_id');
    }
    public function activitie(){
        return $this->hasMany('Activitie','user_id');
    }

}
