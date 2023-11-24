<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;
    protected $fillable=['title', 'artist'];

    //Getter function for title field
    public function getTitle(){
        return $this->title;
    }

    //Getter function for artist field
    public function getArtist(){
        return $this->artist;
    }
}
