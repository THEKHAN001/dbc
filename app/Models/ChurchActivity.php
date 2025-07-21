<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChurchActivity extends Model
{
    protected $fillable = [
        'church_id', 'activity_type', 'attendance',
        'offerings', 'activity_date', 'notes'
    ];
    public function church()
    {
        return $this->belongsTo(Church::class);
    }
}
