<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'sector',
        'province',
        'district',
        'gs_division',
        'gn_division',
        'land_area',
        'land_location',
        'ownership_details',
        'land_purchase',
        'land_cost',
    ];
}

