<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonalDetails extends Model
{
    protected $fillable = [
        'contact','user_id',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}