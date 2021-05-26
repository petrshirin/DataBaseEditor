<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailHistory extends Model
{
    use HasFactory;

    protected $fillable = [
        'detail_id',
        'car_id',
    ];
    protected $visible = [
        'id',
        'detail',
        'car',
    ];

    public function detail(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo('App\Models\Detail');
    }

    public function car(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo('App\Models\Car');
    }

    public function __toString()
    {
        return "{$this->detail} {$this->car}";
    }

    public function getColNames(): array
    {
        return $this->visible;
    }
}
