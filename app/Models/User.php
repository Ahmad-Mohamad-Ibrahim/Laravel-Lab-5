<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;


class User extends Model implements AuthenticatableContract
{
    // use HasFactory;
    use Authenticatable;
    protected $fillable = ['name', 'email', 'password'];
    protected $table = "users";

    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }
}
