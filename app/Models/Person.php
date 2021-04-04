<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Person extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'type',
        'position',
        'name',
        'last_name',
        'mail',
        'order',
        'photo',
        'secretary_id',
    ];

    protected $hidden = [
    ];

    protected $table = 'persons';

}
