<?php

use Illuminate\Database\Seeder;
use App\Models\Animal;
use App\Models\Owner;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Animal::truncate();
        Owner::truncate();

        $owner=Owner::create([
            'code'=>'1593914720',
            'name'=>'owner',
            'gender'=>'male',
            'email'=>'owner@extremelab.tech',
            'phone'=>'-',
            'address'=>'-'
        ]);

        Animal::create([
            'owner_id'=>$owner['id'],
            'code'=>'1593914720',
            'name'=>'animal',
            'gender'=>'male',
            'dob'=>'28-08-1995',
        ]);
    }
}
