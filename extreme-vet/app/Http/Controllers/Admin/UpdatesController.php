<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UpdatesController extends Controller
{
    public function update($version)
    {
        if($version==2.4)
        {
            \Artisan::call('db:seed --class=SettingSeeder');
        }
    }
}
