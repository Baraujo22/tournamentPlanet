<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Target extends Model
{
    use HasFactory;
    public function target() 
    {
        $fillable = [
            'Modality_Id',
            'targetName',
            'targetLevel',
            'targetType',
            'targetDistance',
            'targetMaxShots',
            'created_at',
        ];
    }
}