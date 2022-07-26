<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Passport\HasApiTokens;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Owner extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;
    use HasApiTokens;
    use LogsActivity;
    
    public $guarded=[];
    public $appends=['total','paid','due'];

    public function animals()
    {
        return $this->hasMany(Animal::class,'owner_id','id')->withTrashed();
    }

    public function getTotalAttribute()
    {
        return Group::whereHas('animal',function($q){
            return $q->where('owner_id',$this->id);
        })->sum('total');
    }

    public function getPaidAttribute()
    {
        return Group::whereHas('animal',function($q){
            return $q->where('owner_id',$this->id);
        })->sum('paid');
    }

    public function getDueAttribute()
    {
        return Group::whereHas('animal',function($q){
            return $q->where('owner_id',$this->id);
        })->sum('due');
    }

    public function getDescriptionForEvent(string $eventName): string
    {
        return "Animal owner was {$eventName}";
    }


    
}
