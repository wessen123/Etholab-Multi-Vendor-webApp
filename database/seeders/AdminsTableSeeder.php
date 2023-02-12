<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;
class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $adminRecord=[ 
                        ['id'=>1, 'name'=>'Supper Admin', 'type'=>'Superadmin','vendor_id'=>0,'mobile'=>'0913002809','email'=>'wessen333@gmail.com',
                        'password'=>'$2a$12$wmGPANdBFC5ZjejIgZ4amOSihs0I/CY6U4FbSmhS/OsVlfjgx1L72', 'image'=>'','status'=>1 
                        
                    ],
           
                ];
        Admin::insert($adminRecord);
    }
}
