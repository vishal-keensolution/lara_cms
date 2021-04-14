<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class MenuAccess extends Model
{
    protected $table = 'tbl_menu_access';
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];


    public function roles(){
        return $this->belongsToMany('App\Role','tbl_role_menu','roleid','userid');
    }
}