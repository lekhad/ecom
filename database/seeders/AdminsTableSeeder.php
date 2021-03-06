<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


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
        DB::table('admins')->delete();
        $adminRecords = [
            [
                'id'=>1, 'name'=> 'admin', 'type'=> 'admin', 'mobile'=> '0830909099', 'email'=> 'lekhad19@gmail.com', 'password'=> '$2y$10$yDGUizcHMb/TwHAVDQLR9.N0eiQA5nv3HuZAA52koQ3BXCLSLfqA2', 'image'=> '', 'status'=> 1
            ], 
            [
                'id'=>2, 'name'=> 'john', 'type'=> 'subadmin', 'mobile'=> '0830909099', 'email'=> 'john@gmail.com', 'password'=> '$$2y$10$yDGUizcHMb/TwHAVDQLR9.N0eiQA5nv3HuZAA52koQ3BXCLSLfqA2', 'image'=> '', 'status'=> 1
            ],
            [
                'id'=>3, 'name'=> 'steve', 'type'=> 'admin', 'mobile'=> '0830909099', 'email'=> 'steve@gmail.com', 'password'=> '$$2y$10$yDGUizcHMb/TwHAVDQLR9.N0eiQA5nv3HuZAA52koQ3BXCLSLfqA2', 'image'=> '', 'status'=> 1
            ],
            [
                'id'=>4, 'name'=> 'amit', 'type'=> 'subadmin', 'mobile'=> '0830909099', 'email'=> 'amit@gmail.com', 'password'=> '$$2y$10$yDGUizcHMb/TwHAVDQLR9.N0eiQA5nv3HuZAA52koQ3BXCLSLfqA2', 'image'=> '', 'status'=> 1
            ],
            [
                'id'=>5, 'name'=> 'mary', 'type'=> 'admin', 'mobile'=> '0830909099', 'email'=> 'mary@gmail.com', 'password'=> '$$2y$10$yDGUizcHMb/TwHAVDQLR9.N0eiQA5nv3HuZAA52koQ3BXCLSLfqA2', 'image'=> '', 'status'=> 1
            ],
            
        ];
        
        DB::table('admins')->insert($adminRecords);
        
        // For inserting one admin records
        // foreach ($adminRecords as $key => $record) {
        //     \App\Admin::create($record);
        // }
    }
}
