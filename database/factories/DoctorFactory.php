<?php

namespace Database\Factories;

use App\Models\Doctor;
use App\Models\Section;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Doctor>
 */
class DoctorFactory extends Factory
{

    protected $model = Doctor::class;
    public function definition(): array
    {
        return [
            
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => bcrypt('password'), // password
            'phone' => $this->faker->phoneNumber,
            'section_id' => Section::all()->random()->id,
        ];
    }




}










// namespace Database\Factories;

// use App\Models\Doctor;
// use App\Models\Section;
// use Illuminate\Database\Eloquent\Factories\Factory;

// /**
//  * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Doctor>
//  */
// class DoctorFactory extends Factory
// {
//     protected $model = Doctor::class;

//     public function definition(): array
//     {
//         return [
//             'email' => $this->faker->unique()->safeEmail(),
//             'email_verified_at' => now(),
//             'password' => bcrypt('password'), // password
//             'phone' => $this->faker->phoneNumber,
//             'price' => $this->faker->randomElement([100,200,300,400,500]),
//             'section_id' => Section::all()->random()->id,
//             'status' => 1,
//         ];
//     }

//     public function configure()
//     {
//         return $this->afterCreating(function (Doctor $doctor) {
//             // تعيين الترجمات للحقول القابلة للترجمة
//             $doctor->name = [
//                 'en' => $this->faker->name,
//                 'ar' => 'اسم بالعربية'
//             ];
//             $doctor->appointments = [
//                 'en' => $this->faker->randomElement(['Saturday','Sunday','Monday','Tuesday','Wednesday','Thursday','Friday']),
//                 'ar' => 'موعد بالعربية'
//             ];
//             $doctor->save();
//         });
//     }
// }
