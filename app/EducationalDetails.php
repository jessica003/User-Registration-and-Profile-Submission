<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EducationalDetails extends Model
{
    protected $fillable = [
        'passed_out_year', 'branch', 'college','user_id',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
