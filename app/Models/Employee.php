<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'FIO',
        'salary'
    ];
    protected $visible = [
        'id',
        'FIO',
        'salary',
    ];

    public function __toString()
    {
        return $this->FIO;
    }

    public function workTypes(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(WorkType::class, 'employee_work_type');
    }

    public function getColNames(): array
    {

        return array_merge($this->visible, array('workTypes'));
    }
}
