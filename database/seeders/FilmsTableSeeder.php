<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FilmsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('films')->delete();
        
        \DB::table('films')->insert(array (
            0 => 
            array (
                'created_at' => '2023-01-03 09:12:00',
                'id' => 1,
                'image' => 'https://flxt.tmsimg.com/assets/p22804_p_v8_av.jpg',
                'release' => '1999-03-24',
                'summary' => 'When a beautiful stranger leads computer hacker Neo to a forbidding underworld, he discovers the shocking truth--the life he knows is the elaborate deception of an evil cyber-intelligence.',
                'title' => 'The Matrix',
                'updated_at' => '2023-01-03 09:12:00',
                'user_id' => 1,
            ),
            1 => 
            array (
                'created_at' => '2023-01-03 09:14:15',
                'id' => 2,
                'image' => 'https://m.media-amazon.com/images/I/912AErFSBHL._AC_SL1500_.jpg',
                'release' => '2010-07-08',
                'summary' => 'A thief who steals corporate secrets through the use of dream-sharing technology is given the inverse task of planting an idea into the mind of a C.E.O., but his tragic past may doom the project and his team to disaster.',
                'title' => 'Inception',
                'updated_at' => '2023-01-03 09:14:15',
                'user_id' => 1,
            ),
            2 => 
            array (
                'created_at' => '2023-01-03 09:15:17',
                'id' => 3,
                'image' => 'https://m.media-amazon.com/images/I/61pyUElLh7L._AC_SY780_.jpg',
                'release' => '2014-11-07',
                'summary' => 'A team of explorers travel through a wormhole in space in an attempt to ensure humanity\'s survival.',
                'title' => 'Interstellar',
                'updated_at' => '2023-01-03 09:15:17',
                'user_id' => 1,
            ),
            3 => 
            array (
                'created_at' => '2023-01-03 09:36:31',
                'id' => 4,
                'image' => 'https://m.media-amazon.com/images/M/MV5BNzQzMzJhZTEtOWM4NS00MTdhLTg0YjgtMjM4MDRkZjUwZDBlXkEyXkFqcGdeQXVyNjU0OTQ0OTY@._V1_.jpg',
                'release' => '1982-09-09',
                'summary' => 'A blade runner must pursue and terminate four replicants who stole a ship in space and have returned to Earth to find their creator.',
                'title' => 'Blade Runner',
                'updated_at' => '2023-01-03 09:36:31',
                'user_id' => 1,
            ),
            4 => 
            array (
                'created_at' => '2023-01-03 09:37:29',
                'id' => 5,
                'image' => 'https://m.media-amazon.com/images/M/MV5BMzg4MDJhMDMtYmJiMS00ZDZmLThmZWUtYTMwZDM1YTc5MWE2XkEyXkFqcGdeQXVyNjU0OTQ0OTY@._V1_FMjpg_UX1000_.jpg',
                'release' => '2007-02-14',
                'summary' => 'When Officer Angel transfers to Sandford, trouble bubbles over in the quiet village as a cloaked stranger begins attacking the residents.',
                'title' => 'Hot Fuzz',
                'updated_at' => '2023-01-03 09:37:29',
                'user_id' => 1,
            ),
            5 => 
            array (
                'created_at' => '2023-01-03 09:38:03',
                'id' => 6,
                'image' => 'https://m.media-amazon.com/images/M/MV5BMTg5Mjk2NDMtZTk0Ny00YTQ0LWIzYWEtMWI5MGQ0Mjg1OTNkXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_.jpg',
                'release' => '2004-04-09',
                'summary' => 'Shaun is a salesman whose life has no direction. However, his uneventful life takes a sudden turn when he has to singlehandedly deal with an entire community of zombies.',
                'title' => 'Shaun of the Dead',
                'updated_at' => '2023-01-03 09:38:03',
                'user_id' => 1,
            ),
        ));
        
        
    }
}