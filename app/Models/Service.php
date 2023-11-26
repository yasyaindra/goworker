<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Service extends Model
{
    use HasFactory, Uuids;

    protected $guarded = ['id'];

    public function users(): HasMany {
        return $this->hasMany(User::class);
    }
}
