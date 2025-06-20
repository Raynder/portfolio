<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = ['tenant_id', 'name', 'profession', 'email', 'phone', 'address', 'bio', 'photo_url'];
}
