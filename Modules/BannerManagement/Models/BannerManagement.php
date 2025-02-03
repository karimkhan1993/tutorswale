<?php

namespace Modules\BannerManagement\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class BannerManagement extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'bannermanagements';


    protected $fillable = [
        'title',
        'description',
        'image',
        'status',
        'order'
    ];

    protected $casts = [
        'status' => 'boolean'
    ];

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\BannerManagement\database\factories\BannerManagementFactory::new();
    }
}
