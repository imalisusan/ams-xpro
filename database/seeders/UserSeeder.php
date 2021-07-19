<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Imali Susan',
                'reg_id' => '109459',
                'email' => 'imali.lungaho@strathmore.edu',
                'phone_no' => '+254712345678', 
                'dob' => '1999-06-07',
                'course_name' => 'Informatics and Computer Science',
                'password' => '12345678',
            ],
            [
                'name' => 'Susan Gicheha',
                'reg_id' => '119988',
                'email' => 'susan.gicheha@strathmore.edu',
                'phone_no' => '+254712345678', 
                'dob' => '1999-06-07',
                'course_name' => 'Informatics and Computer Science',
                'password' => '12345678',
            ],
            [
                'name' => 'Katherine Mungayi',
                'reg_id' => '121195',
                'email' => 'katherine.mungayi@strathmore.edu',
                'phone_no' => '+254712345678', 
                'dob' => '1999-06-07',
                'course_name' => 'Informatics and Computer Science',
                'password' => '12345678',
            ],
            [
                'name' => 'Maya Bororio',
                'reg_id' => '115878',
                'email' => 'maya.bororio@strathmore.edu',
                'phone_no' => '+254712345678', 
                'dob' => '1999-06-07',
                'course_name' => 'Informatics and Computer Science',
                'password' => '12345678',
            ],
            [
                'name' => 'Victor Mutuku',
                'reg_id' => '121471',
                'email' => 'victor.mutuku@strathmore.edu',
                'phone_no' => '+254712345678', 
                'dob' => '1999-06-07',
                'course_name' => 'Informatics and Computer Science',
                'password' => '12345678',
            ],
            [
                'name' => 'Lucien Makutano',
                'reg_id' => '114970',
                'email' => 'nzalinzali.makutano@strathmore.edu',
                'phone_no' => '+254712345678', 
                'dob' => '1999-06-07',
                'course_name' => 'Informatics and Computer Science',
                'password' => '12345678',
            ],
            [
                'name' => 'Rosy Waruku',
                'reg_id' => '120749',
                'email' => 'rosy.waruku@strathmore.edu',
                'phone_no' => '+254712345678', 
                'dob' => '1999-06-07',
                'course_name' => 'Informatics and Computer Science',
                'password' => '12345678',
            ],
            [
                'name' => 'Richard Jeremy',
                'reg_id' => '115862',
                'email' => 'richard.githuba@strathmore.edu',
                'phone_no' => '+254712345678', 
                'dob' => '1999-06-07',
                'course_name' => 'Informatics and Computer Science',
                'password' => '12345678',
            ],
            [
                'name' => 'Caroline Mwangi',
                'reg_id' => '120690',
                'email' => 'caroline.mwangi319@strathmore.edu',
                'phone_no' => '+254712345678', 
                'dob' => '1999-06-07',
                'course_name' => 'Informatics and Computer Science',
                'password' => '12345678',
            ],
            [
                'name' => 'Brian Muriithi', 
                'reg_id' => '115238',
                'email' => 'brian.muriithi@strathmore.edu',
                'phone_no' => '+254712345678', 
                'dob' => '1999-06-07',
                'course_name' => 'Informatics and Computer Science',
                'password' => '12345678',
            ],
        ];

        foreach ($users as $user) {
            $user = User::create([
                   'name' => $user['name'],
                   'reg_id' => $user['reg_id'],
                   'email' => $user['email'],
                   'phone_no' => $user['phone_no'],
                   'dob' => $user['dob'],
                   'course_name' => $user['course_name'],
                   'password' => Hash::make($user['password']),
                 ]);
                 
                 $user->attachRole('student');
        }

    }
}
