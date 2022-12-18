<?php

use Illuminate\Database\Seeder;
use App\Models\Branch;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Branch::truncate();

           Branch::create([
            'name'=>'Main Branch',
            'address'=>'Ecuador',
            'phone'=>'+593996535731',
            'lat'=>'-1.6643752',
            'lng'=>'78.6596817',
            'zoom_level'=>8
        ]);
    }
}
