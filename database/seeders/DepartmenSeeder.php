<?php

namespace Database\Seeders;

use App\Models\Departmen;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        departmen::create(['name'=>'Sistem Informasi']);
        departmen::create(['name'=>'Teknik Informatika']);
        departmen::create(['name'=>'Teknologi Informasi']);
        departmen::create(['name'=>'Pendidikan Teknologi Informasi']);
        departmen::create(['name'=>'Bisnis Digital']);
        departmen::create(['name'=>'Magister Komputer']);
        
        
    }
}
