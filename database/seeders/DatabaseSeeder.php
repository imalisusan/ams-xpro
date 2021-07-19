<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        $this->call(LaratrustSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(LecturerSeeder::class);
        $this->call(CourseSeeder::class);
        $this->call(CourseModuleSeeder::class);
        $this->call(CourseUserSeeder::class);
        $this->call(CourseLecturerSeeder::class);
        $this->call(CourseMarkSeeder::class);
        $this->call(AttendanceSeeder::class);
        $this->call(FeeStatementSeeder::class);
        $this->call(FeeStructureSeeder::class);

    }
}
