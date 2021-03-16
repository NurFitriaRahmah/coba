<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penulis extends Model
{
    protected $table = "penulis";
    protected $fillable = ['nama', 'email', 'alamat'];
    protected $timestamp = "false";
}
