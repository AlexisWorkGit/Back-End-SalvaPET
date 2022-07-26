<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;

class Animal extends Model
{
    use SoftDeletes;
    use LogsActivity;
    
    public $guarded=[];
    public $appends=['age'];

    public function owner()
    {
        return $this->belongsTo(Owner::class,'owner_id','id')->withTrashed();
    }

    public function groups()
    {
        return $this->hasMany(Group::class,'animal_id','id');
    }

    public function getAgeAttribute()
    {
        $date = new \DateTime($this->dob);
        $now = new \DateTime();
        $interval = $now->diff($date);

        // dd($interval);
        if($interval->y==0)
        {
            if($interval->m==0)
            {
                return $interval->d." ".__('Days');
            }
            else{
                return $interval->m." ".__('Months');
            }
        }
        else{
            return $interval->y." ".__('Years');
        }
    }


    public function getDescriptionForEvent(string $eventName): string
    {
        return "Animal was {$eventName}";
    }
}
