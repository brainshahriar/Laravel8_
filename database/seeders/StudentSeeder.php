<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('students')->insert([
      'name' => 'shahriar',
      'email' => 'shahriarmehedi94@gmail.com',
      'phone' => '12345567',
      'address'=>'Bashundhora,Dhaka'
]);
    }
}
