<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Foundation\Auth\User as Authenticatable;

class Activitie extends Model
{
    
    protected $guard =['id'];
    protected $table ='activities';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','date','time','location','description','user_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
      //tabel tujuan
    public function folder(){
        return $this->hasMany('Folder','activitie_id');
    }
  
//tabel primary
    public function user(){
        return $this->belongsTo('User','user_id');
    }
    public function admin(){
        return $this->belongsTo('Admin','admin_id');
    }
    public function tag(){
        return $this->belongsToMany('Tag','tag_activitie_id','tag_id','activitie_id');
    }
}
