<?php

namespace Modules\TutorManagement\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class TutorManagement extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'tutormanagements';

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\TutorManagement\database\factories\TutorManagementFactory::new();
    }
}
