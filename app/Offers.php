<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offers extends Model
{
    //
    protected $fillable = ['offer_title', 'offer_type', 'offer_description', 'offer_price', 'offer_image'];
}
