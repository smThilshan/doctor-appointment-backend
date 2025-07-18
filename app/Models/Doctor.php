<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;

class Doctor extends Model
{
    use HasFactory;

        protected $fillable = [
        'doc_id',
        'category',
        'patients',
        'experience',
        'bio_data',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
