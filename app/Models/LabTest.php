<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LabTest extends Model
{
    //
    public function category()
    {
        return $this->belongsTo(LabTestCategory::class, 'category_id');
    }
}
