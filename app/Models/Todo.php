<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Todo extends Model
{
    use HasFactory;
    protected $table = 'todolist';
    protected $fillable = [
        'user_id',
        'todo',
        'label',
        'done',
    ];
    protected $hiddden = [
        'user_id',
    ];
    protected $casts = [
        'done' => 'boolean',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
