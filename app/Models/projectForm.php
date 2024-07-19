<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class projectForm extends Model
{
    protected $table = 'projects_form';
    protected $fillable = [
        'category',
        'project_id',
        'project_name',
        'submitted_by',
        'submitted_date',
        'closing_date',
        'status',
    ];
}
