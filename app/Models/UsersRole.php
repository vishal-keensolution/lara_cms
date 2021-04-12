<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class UsersRole extends Model
{
    protected $table = 'tbl_role_user';
    use HasFactory, Notifiable;
}
