<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'VIN',
        'year',
        'number'
    ];
    protected $visible = [
        'id',
        'name',
        'VIN',
        'year',
        'number'
    ];

    public function __toString()
    {
        return "{$this->name} {$this->getYear()}";
    }

    public function  getYear(): int
    {
        $date = new Carbon( $this->year );
        return $date->year;
    }

    public function getColNames(): array
    {
        return $this->visible;
    }
}
