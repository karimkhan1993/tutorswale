<?php

namespace Modules\TutorManagement\database\factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TutorManagementFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \Modules\TutorManagement\Models\TutorManagement::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'full_name'        => $this->faker->name,
            'phone_number'     => $this->faker->phoneNumber,
            'email'            => $this->faker->unique()->safeEmail,
            'password'         => bcrypt('password'), // Default password
            'date_of_birth'    => $this->faker->date(),
            'age'              => $this->faker->numberBetween(25, 60),
            'gender'           => $this->faker->randomElement(['Female', 'Male', 'Other']),
            'street_address'   => $this->faker->streetAddress,
            'area'             => $this->faker->word,
            'city'             => $this->faker->city,
            'pincode'          => $this->faker->postcode,
            'qualification'    => $this->faker->sentence(3), // Random qualification
            'description'      => $this->faker->paragraph,
            'experience'       => $this->faker->numberBetween(1, 20), // Experience in years
            'is_verified'      => $this->faker->randomElement(['Yes', 'No']),
            'availability'     => $this->faker->randomElement(['Online', 'Offline']),
            'status'           => $this->faker->randomElement(['Active', 'Inactive']),
            'created_at'       => Carbon::now(),
            'updated_at'       => Carbon::now()
        ];
    }
}
