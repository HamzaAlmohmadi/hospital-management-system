<?php

namespace Database\Seeders;

use App\Models\LaboratorieEmployee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class LaboratorieEmployeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $laboratorie_Employee = new LaboratorieEmployee();
        $laboratorie_Employee->name = ' الدكتور حمزة الفقي  ';
        $laboratorie_Employee->email = 'hamza@gmail.com';
        $laboratorie_Employee->password = Hash::make('12345678');
        $laboratorie_Employee->save();
    }
}
