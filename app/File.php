<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

//use Illuminate\Foundation\Auth\User as Authenticatable;

class File extends Model
{
    
    protected $guard =['id'];
    protected $table ='files';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','file','user_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    
    //tabel primary
    public function user(){
        return $this->belongsTo('User','user_id');
    }
    public function admin(){
        return $this->belongsTo('Admin','admin_id');
    }
    public function folder(){
        return $this->belongsTo('Folder','folder_id');
    }
}
