<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filedata extends Model
{
    use HasFactory;

    protected $table = 'filedatas';
    protected $primaryKey = 'id';

    protected $fillable =
    [
        'file_name',
        'text',
        'user_id'
    ];
}
