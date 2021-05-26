<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkType extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price'
    ];
    protected $visible = [
        'id',
        'name',
        'price',
    ];

    public function __toString()
    {
        return "{$this->name} {$this->price}";
    }

    public function getColNames(): array
    {
        return $this->visible;
    }
}
