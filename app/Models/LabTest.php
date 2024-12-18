<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LabTest extends Model
{
    //
    protected $table = 'lab_tests';
    public function category()
    {
        return $this->belongsTo(LabTestCategory::class, 'category_id');
    }
}
