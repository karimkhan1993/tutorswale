<?php

namespace Modules\AboutU\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AboutU extends Model
{
    use HasFactory;

    protected $table = 'aboutus';

    protected $fillable = [
        'successfully_trained',
        'classes_completed',
        'satisfaction_rate',
        'student_community',
        'popular_course_title1',
        'popular_course_description1',
        'popular_course_cta_text1',
        'popular_course_cta_link1',
        'popular_course_title2',
        'popular_course_description2',
        'popular_course_cta_text2',
        'popular_course_cta_link2',
        'banner_image',
        'student_image_1',
        'student_image_2',
        'created_by',
        'updated_by',
        'deleted_by'
    ];

    public static function storeFeatures($featuresData)
    {
        foreach ($featuresData as $feature) {
            AboutFeature::create([
                'title'         => $feature['title'],
                'icon'          => $feature['icon'] ?? null,
                'description'   => $feature['description'],
            ]);
        }
    }
    

    public static function updateFeatures($featuresData)
    {
        foreach ($featuresData as $feature) {
            if (isset($feature['id'])) {
                $featureModel = AboutFeature::find($feature['id']);
                if ($featureModel) {
                    $featureModel->update([
                        'title'       => $feature['title'],
                        'icon'        => $feature['icon'] ?? $featureModel->icon, // Keep existing icon if not uploaded
                        'description' => $feature['description'],
                    ]);
                }
            }
        }
    }
    
}
