<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Visit extends Model
{
    use LogsActivity;

    public $guarded=[];

    public $appends=['since'];

    public function animal()
    {
        return $this->belongsTo(Animal::class,'animal_id','id')->withTrashed();
    }

    public function getSinceAttribute()
    {
        return $this->created_at->diffForHumans();
    }

    public function getDescriptionForEvent(string $eventName): string
    {
        return "Visit was {$eventName}";
    }
}
