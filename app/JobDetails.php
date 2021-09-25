<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobDetails extends Model
{
    protected $fillable = [
        'current_company_name', 'designation', 'location','user_id',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
