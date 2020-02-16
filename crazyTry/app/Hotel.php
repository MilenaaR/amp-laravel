<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model {

    protected $fillable = [
        'name'
    ];

    public function country() {
        return $this->hasMany(Country::class);
    }
}
