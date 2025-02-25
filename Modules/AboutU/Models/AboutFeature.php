<?php

namespace Modules\AboutU\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AboutFeature extends Model
{
    use HasFactory;

    protected $table = 'aboutfeature';

    protected $fillable = [
        'title',
        'icon',
        'description',
    ];

    // /**
    //  * Define the relationship with the AboutU model.
    //  */
    // public function aboutUs()
    // {
    //     return $this->belongsTo(AboutU::class, 'about_us_id');
    // }
}
