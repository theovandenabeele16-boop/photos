<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $table = "photos";
    public $timestamps = false;

    public function album() {
        return $this->belongsTo(Album::class, "album_id"); //SELECT * FROM film WHERE idRealisateur=$this->id
    }
}