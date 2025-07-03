<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppliedJobDocument extends Model
{
    use HasFactory;
    
    public function appliedJob()
    {
        return $this->belongsTo(AppliedJob::class);
    }
}
