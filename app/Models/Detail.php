<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Detail extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'year',
        'used'
    ];
    protected $visible = [
        'id',
        'name',
        'year',
        'used'
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
