<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $table = 'accounts';

    protected $fillable = [
        'name',
        'phone',
        'email',
    ];

    public function getAllAccount()
    {
        return Account::get();
    }
}
