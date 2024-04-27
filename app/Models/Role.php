<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Role extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public const Is_Patient = 1; 
    public const Is_Staff = 2; 
    public const Is_Admin = 3; 

    public function user(): BelongsTo {

        return $this->belongsTo(User::class);
    }
}
