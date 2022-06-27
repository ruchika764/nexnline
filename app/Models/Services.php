<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'service_name',
        'display_name',
        'description',
        'duration',
        'price',
        'availaible_for',
        'status',
        'is_deleted',
        'image',
        'user_id'
    ];
}
