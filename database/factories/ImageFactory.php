<?php

namespace Database\Factories;

use App\Models\Doctor;
use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{

    protected $model = Image::class;
    public function definition(): array
    {
        return [
            
            // 'filename' =>  $this->faker->randomElement(['1.jpg', '2.jpg', '3.jpg', '4.jpg']),
            'filename' => $this->faker->imageUrl(640, 480, 'people'), // توليد URL عشوائي لصورة شخص
            'imageable_id' => Doctor::all()->random()->id,
            'imageable_type' => 'App\Models\Doctor',
        ];
    }
}



