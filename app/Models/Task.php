<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    /**
     * 複数代入可能な属性
     *
     * @var array
     */
    protected $fillable = ['started_at', 'completed_at', 'title', 'detail'];
}
