<?php

namespace App;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 2; $i < 11; $i++) {
            for ($j = 1; $j < 100; $j++) {
                \DB::table('school_staff')->insert([
                    'staff_id' => $j,
                    'school_id' => $i,
                ]);
            }
        }

//        for ($i = 1; $i < 11; $i++) {
//            for ($j = 1; $j < 100; $j++) {
//                \DB::table('staff_student')->insert([
//                    'person_id' => $i+3,
//                    'staff_id' => $i,
//                    'student_id' => $j,
//                    'student_num' => str_random(10),
//                    'teacher_owner' => rand(0,1),
//                    'student_owner' => rand(0,1),
//                    'student_confirmed' => rand(0,1),
//                ]);
//            }
//        }
    }
}