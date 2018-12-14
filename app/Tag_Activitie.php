<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Foundation\Auth\User as Authenticatable;

class Tag_Activitie extends Model
{
    
    protected $guard =['id'];
    protected $table ='tag_activities';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tag_id','activitie_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    
     //tabel primary
    // public function tag(){
    //     return $this->belongsTo('Tag','tag_id');
    // }
    // public function activitie(){
    //     return $this->belongsTo('Tag_Activitie','tag_activitie_id');
    // }

}
