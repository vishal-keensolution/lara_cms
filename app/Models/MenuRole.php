<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class MenuRole extends Model
{
    protected $table = 'tbl_role_menu';
    use HasFactory, Notifiable;
}
