<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Friendship extends Model
{
    use HasFactory;

    protected $table = 'friendship';

    protected $fillable = ['id', 'user_receive', 'user_id', 'friends'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
