<?php

namespace Modules\AboutU\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class AboutU extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'aboutus';

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\AboutU\database\factories\AboutUFactory::new();
    }
}
