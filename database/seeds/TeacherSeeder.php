<?php

use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Teacher::class, 50)->create()->each(function($teacher) {
            $teacher->students()->createMany(
                factory(Student::class,3)->make()->toArray()
            );
        });
    }
}
