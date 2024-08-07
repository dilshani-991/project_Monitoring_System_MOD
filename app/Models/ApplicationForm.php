<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicationForm extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_title',
        'sector',
        'category',
        'district',
        'file_path'
    ];
    public function getFilePathAttribute($value)
    {
        // Ensure the path is relative to storage/app
        return 'uploads/' . $value;
    }
}
