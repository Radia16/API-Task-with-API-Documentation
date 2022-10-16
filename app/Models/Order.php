<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Location;

class Order extends Model
{
    use HasFactory;

    protected $guarded =[];

    public function location(){
        return $this->belongsTo(Location::class, 'location_id', 'id');
    }

    public function added_by(){
        return $this->belongsTo(AddedBy::class, 'user_id', 'id');
    }

    public function files(){
        return $this->hasMany(File::class,'item_id','id');
    }

    public function product(){
        return $this->hasOne(Product::class,'item_id','id');
    }
}
