<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
     
       \DB::table('tbl_user')->delete();
        \DB::table('tbl_user')->insert(
           [
                "id"=>1,
                "name"=>"Admin",
                "email"=>"vishal.du123@gmail.com",
                "phone"=>"9827530980",
                "image"=>"",
                "password"=>Hash::make("123456"),
           ]
        );
        \DB::table('tbl_role')->delete();
        \DB::table('tbl_role')->insert(
            [
                    "id"=>1,
                    "name"=>"Super Admin"
            ],
            [
                    "id"=>2,
                    "name"=>"Admin"
            ],
            [
                    "id"=>3,
                    "name"=>"Editor"
            ]
        );
        \DB::table('tbl_role_user')->delete();
        \DB::table('tbl_role_user')->insert(
            [
                "id"=>1,
                "userid"=>"1",
                "roleid"=>"1"
            ],
            [
                "id"=>2,
                "userid"=>"1",
                "roleid"=>"2"
            ],
            [
                "id"=>3,
                "userid"=>"1",
                "roleid"=>"3"
            ]
        );
    }
}
