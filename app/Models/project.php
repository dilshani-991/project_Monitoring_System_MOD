<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class project extends Model
{
    use HasFactory;

    protected $fillable=[
        'project_title',
        'sector',
        'province',
        'district',
        'ds_division',
        'dn_division',
        'land_area',
        'land_location',
        'land_ownership_details',
        'land_purchase','land_cost'
    ];
}
