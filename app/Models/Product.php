<?php

namespace App\Models;

use App\Models\Review;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;


    protected $fillable = ['name','detail','stock','price','discount'];
    // protected $guarded = array(); //for all fillable




    public function reviews(){
        return $this->hasMany(Review::class);
    }
}
