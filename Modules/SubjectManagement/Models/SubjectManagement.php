<?php

namespace Modules\SubjectManagement\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubjectManagement extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'subjectmanagements';

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\SubjectManagement\database\factories\SubjectManagementFactory::new();
    }
}
