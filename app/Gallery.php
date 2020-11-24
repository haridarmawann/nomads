<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Gallery extends Model
{
    use softDeletes;

    protected $fillable = [
        'image','travel_packages_id'
    ];

    protected $hidden=[
        
    ];

    public function travel_package(){
        return $this->belongsTo(TravelPackage::class, 'travel_packages_id','id');
    }
    
}
