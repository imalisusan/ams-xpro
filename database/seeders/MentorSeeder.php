<?php

namespace Database\Seeders;

use App\Models\Mentor;
use Illuminate\Database\Seeder;

class MentorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mentors = [
            [
                'name' => 'Imali Susan',
                'user_id' => '1',
                'email' => 'imali.lungaho@strathmore.edu',
                'phone' => '+254712345678', 
                'address' => 'Ole Sangale Road, off Langata Road, Madaraka',
            ],
            [
                'name' => 'Susan Gicheha',
                'user_id' => '2',
                'email' => 'susan.gicheha@strathmore.edu',
                'phone' => '+254712345678', 
                'address' => 'Ole Sangale Road, off Langata Road, Madaraka',
            ],
            [
                'name' => 'Katherine Mungayi',
                'user_id' => '3',
                'email' => 'katherine.mungayi@strathmore.edu',
                'phone' => '+254712345678', 
                'address' => 'Ole Sangale Road, off Langata Road, Madaraka',
            ],
            [
                'name' => 'Maya Bororio',
                'user_id' => '4',
                'email' => 'maya.bororio@strathmore.edu',
                'phone' => '+254712345678', 
                'address' => 'Ole Sangale Road, off Langata Road, Madaraka',
            ],
            [
                'name' => 'Victor Mutuku',
                'user_id' => '5',
                'email' => 'victor.mutuku@strathmore.edu',
                'phone' => '+254712345678', 
                'address' => 'Ole Sangale Road, off Langata Road, Madaraka',
            ],
            [
                'name' => 'Lucien Makutano',
                'user_id' => '6',
                'email' => 'nzalinzali.makutano@strathmore.edu',
                'phone' => '+254712345678', 
                'address' => '1999-06-07',
            ],
            [
                'name' => 'Rosy Waruku',
                'user_id' => '7',
                'email' => ' rosy.waruku@strathmore.edu',
                'phone' => '+254712345678', 
                'address' => '1999-06-07',
            ],
            [
                'name' => 'Richard Jeremy',
                'user_id' => '8',
                'email' => 'richard.githuba@strathmore.edu',
                'phone' => '+254712345678', 
                'address' => '1999-06-07',
            ],
            [
                'name' => 'Caroline Mwangi',
                'user_id' => '9',
                'email' => 'caroline.mwangi319@strathmore.edu',
                'phone' => '+254712345678', 
                'address' => '1999-06-07',
            ],
            [
                'name' => 'Brian Muriithi', 
                'user_id' => '10',
                'email' => 'brian.muriithi@strathmore.edu',
                'phone' => '+254712345678', 
                'address' => '1999-06-07',
            ],
        ];

        foreach ($mentors as $mentor) {
            Mentor::create([
                   'name' => $mentor['name'],
                   'user_id' => $mentor['user_id'],
                   'email' => $mentor['email'],
                   'phone' => $mentor['phone'],
                   'address' => $mentor['address'],
                 ]);
        }
    }
}
