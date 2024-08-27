<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Carbon\Carbon;

class Employees extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'location_code', 'birth_date'];
    
    public function scopeAge(Builder $query, int $age): Builder
    {
        return $query->whereRaw('TIMESTAMPDIFF(YEAR, birth_date, CURDATE()) = ?', [$age]);
    }
}
