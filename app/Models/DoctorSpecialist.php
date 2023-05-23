<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorSpecialist extends Model
{
    use HasFactory;

    public function doctorList() {
        return $this->belongsTo(Doctor::class);
    }
}

