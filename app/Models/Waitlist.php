<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Waitlist extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'name',
        'clientId',
        'customer_id',
        'party_size',
        'quoted_wait',
        'phone_number',
        'user_id',
        'status',
        'is_served',
        'visit_count',
        'is_deleted',
        'email'
    ];
}
