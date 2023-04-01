<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    protected $guarded = [];
    use HasFactory;
    public function path()
    {
        return route('listings.show', $this);
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
