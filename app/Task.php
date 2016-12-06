<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['name'];

    public function reminders()
    {
    return $this->belongsTo('App\Reminder');
    }
}
