<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class church extends Model
{
    protected $fillable = [
        'name', 'address', 'contact_number', 'capacity'
    ];

    public function activities()
    {
        return $this->hasMany(ChurchActivity::class);
    }
  

}
