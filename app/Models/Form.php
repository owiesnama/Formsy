<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    protected $fillable = ['form'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function submitions()
    {
        return $this->hasMany(Submition::class);
    }

    public function publish($publish = true)
    {
        $this->published_at = $publish ? Carbon::now() : null;
        $this->save();
    }
}
