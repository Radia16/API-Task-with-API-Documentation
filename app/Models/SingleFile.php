<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SingleFile extends Model
{
    use HasFactory;

    protected $guarded = [];

    // public function files(){
    //     return $this->belongsTo(File::class,'file_id','id');
    // }
}
