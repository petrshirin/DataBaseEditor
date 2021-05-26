<?php

namespace App\Models;

use Carbon\Traits\Creator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Work extends Model
{
    use HasFactory;

    protected $fillable = [
        'date_start',
        'date_end',
        'work_type_id',
        'employee_id',
        'car_id',
    ];
    protected $visible = [
        'id',
        'work_type',
        'employee',
        'car',
        'date_start',
        'date_end',
    ];

    public function work_type(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo('App\Models\WorkType');
    }

    public function employee(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo('App\Models\Employee');
    }

    public function car(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo('App\Models\Car');
    }

    public function __toString()
    {
        return "{$this->car} {$this->work_type} {$this->employee}";
    }

    public function getColNames(): array
    {
        return $this->visible;
    }

    public function  getYearStart(): int
    {
        $date = new Carbon( $this->date_start );
        return $date->year;
    }

    public function  getYearEnd(): int
    {
        $date = new Carbon( $this->date_end );
        return $date->year;
    }

}
