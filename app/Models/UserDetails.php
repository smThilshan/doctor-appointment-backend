<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class UserDetails extends Model
{
    use HasFactory;

        protected $fillable = [
        'user_id',
        'bio_data',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
