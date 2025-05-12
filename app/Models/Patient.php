<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Patient extends Model
{
    use HasFactory;
    protected $table = 'patients';

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'medium_acquisition',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
