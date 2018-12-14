<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Foundation\Auth\User as Authenticatable;

class Folder extends Model
{
   
    protected $guard =['id'];
    protected $table ='folders';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','parent_id','user_id','folder_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    //tabel tujuan
    public function file(){
        return $this->hasMany('File','folder_id');
    }
    public function folderparent(){
        return $this->hasMany('Folder','folder_id');
    }
    
//tabel primary
    public function user(){
        return $this->belongsTo('User','user_id');
    }
    public function admin(){
        return $this->belongsTo('Admin','admin_id');
    }
    public function activitie(){
        return $this->belongsTo('Activitie','activitie_id');
    }
    public function folderparent(){
        return $this->belongsTo('Folder','folder_id');
    }
}
