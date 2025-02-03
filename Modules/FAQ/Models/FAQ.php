<?php

namespace Modules\FAQ\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class FAQ extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'faqs';

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\FAQ\database\factories\FAQFactory::new();
    }
}
