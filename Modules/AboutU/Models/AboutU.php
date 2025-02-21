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
        'student_image_2'
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
                $aboutFeature = AboutFeature::findOrFail($feature['id']);
                
                // Preserve existing icon if none is uploaded
                $icon = $feature['icon'] ?? $aboutFeature->icon;
                $aboutFeature->update([
                    'title'       => $feature['title'],
                    'icon'        => $icon,
                    'description' => $feature['description']
                ]);
            }
        }
    }
    public static function getTableColumns()
    {
        $tableName = (new self())->getTable();
        return \DB::select("SHOW COLUMNS FROM {$tableName}");
    }
    
}