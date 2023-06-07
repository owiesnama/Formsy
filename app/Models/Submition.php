<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submition extends Model
{
    use HasFactory;

    protected $fillable = ['body'];

    public function form()
    {
        return $this->belongsTo(Form::class);
    }
}
