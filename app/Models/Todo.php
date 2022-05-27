<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 */
class Todo extends Model
{
    use HasFactory;

    protected $table = 'todos';

    protected $fillable = [
        'user_id',
        'text',
        'done',
        'created_at',
        'updated_at',
        'done_at'
    ];
}
