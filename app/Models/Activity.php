<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_id', 'pre_feasibility', 'feasibility', 'detailed_design', 'sea', 'iee', 'eia',
        'disaster_risk', 'nbro_clearance', 'archeological_clearance', 'land_clearance', 'social_impact', 'other'
    ];
}


