<?php


namespace App\Models;


use App\Models\Event;
use Illuminate\Support\Facades\Date;
use Illuminate\Database\Eloquent\Model;

class Workshop extends Model
{
    public function events()
    {
        return $this->hasMany(Event::class);
    }
}
