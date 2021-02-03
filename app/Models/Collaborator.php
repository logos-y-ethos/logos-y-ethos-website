<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Collaborator extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'code',
        'title',
        'cover',
        'date',
        'author',
        'description',
        'type',
        'file',
        'url',
        'number_pages',
    ];

    protected $hidden = [
    ];

}
