<?php

namespace Modules\ClassManagement\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClassManagement extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'classmanagements';

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\ClassManagement\database\factories\ClassManagementFactory::new();
    }
}
