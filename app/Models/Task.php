<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $guarded = false;
    protected $table = 'tasks';

    const STATUS_PROCESS = 1;
    const STATUS_SUCCESS = 2;
    const STATUS_ERROR = 3;

    public static function getStatuses()
    {
        return [
            self::STATUS_PROCESS => 'Щас-щас-щас',
            self::STATUS_SUCCESS => 'ПРАВИЛЬНА!',
            self::STATUS_ERROR => 'ПИДОРАС, ОБОСРАЛСЯ, УААААААААААААААААААААААААААААААААААА!',
        ];
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function file(){
        return $this->belongsTo(File::class, 'file_id', 'id');
    }

    public function failedRows(){
        return $this->hasMany(FailedRow::class, 'task_id', 'id');
    }

}
