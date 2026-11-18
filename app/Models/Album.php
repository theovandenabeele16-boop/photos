<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $table = "albums";

    public $timestamps = false;

    //un album a autant de photos
    public function photos() {
        return $this->hasMany(Photo::class, "album_id"); //SELECT * FROM personne here id=$this->idRealisateur;
        //$this 
    }
}