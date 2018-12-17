<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

//use Illuminate\Foundation\Auth\User as Authenticatable;

class Tag extends Model
{

    protected $guard =['id'];
    protected $table ='tags';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
     //tabel tujuan
    // public function tag_activitie(){
    //     return $this->hasMany('Tag','tag_id');
    // }
    public function activitie(){
        return $this->belongsToMany('Activitie','tag_activitie_id','activitie_id','tag_id');
    }
}
