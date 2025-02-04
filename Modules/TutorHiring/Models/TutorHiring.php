<?php

namespace Modules\TutorHiring\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class TutorHiring extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'tutorhirings';

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\TutorHiring\database\factories\TutorHiringFactory::new();
    }
}
