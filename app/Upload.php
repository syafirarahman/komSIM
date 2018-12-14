<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    // 
    protected $table = 'uploads'; //optional. karena kadang laravel bisa mendeteksi tabel sendiri tanpa perlu didefinisikan
	public $fillable = ['name', 'image', 'file']; // untuk mendefinisikan yang akan diisikan
}
