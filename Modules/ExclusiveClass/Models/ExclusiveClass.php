<?php

namespace Modules\ExclusiveClass\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class ExclusiveClass extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'exclusiveclasses';

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\ExclusiveClass\database\factories\ExclusiveClassFactory::new();
    }
}
