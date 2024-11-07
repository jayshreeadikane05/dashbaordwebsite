<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class VgnpagesSeeder extends Seeder
{
    public function run()
    {
        $adminId = 4; // Set this to the default admin ID you want to use

        $pages = [
            [
                'pagename' => 'Home',
                'pageurl' => 'https://vgenmedia.com/',
                'author_id' => $adminId,  
            ],
            [
                'pagename' => 'About Us',
                'pageurl' => 'https://vgenmedia.com/about-us',
                'author_id' => $adminId,
            ],
            [
                'pagename' => 'Contact Us',
                'pageurl' => 'https://vgenmedia.com/contact',
                'author_id' => $adminId,
            ],
            [
                'pagename' => 'Services',
                'pageurl' => 'https://vgenmedia.com/services',
                'author_id' => $adminId,
            ],
            [
                'pagename' => 'Digital Marketing',
                'pageurl' => 'https://vgenmedia.com/services/digital-marketing',
                'author_id' => $adminId,
            ],
            [
                'pagename' => 'Advertising Operation',
                'pageurl' => 'https://vgenmedia.com/services/advertising-operation',
                'author_id' => $adminId,
            ],
            [
                'pagename' => 'Visual Content',
                'pageurl' => 'https://vgenmedia.com/services/visual-content',
                'author_id' => $adminId,
            ],
            [
                'pagename' => 'Enhanced Marketing',
                'pageurl' => 'https://vgenmedia.com/services/enhanced-marketing',
                'author_id' => $adminId,
            ],
            [
                'pagename' => 'Subscription',
                'pageurl' => 'https://vgenmedia.com/subscription',
                'author_id' => $adminId,
            ],
            [
                'pagename' => 'Privacy',
                'pageurl' => 'https://vgenmedia.com/privacy',
                'author_id' => $adminId,
            ],
            [
                'pagename' => 'Cookies',
                'pageurl' => 'https://vgenmedia.com/cookies',
                'author_id' => $adminId,
            ],
        ];

        foreach ($pages as $page) {
            // Check if the pageurl already exists
            $exists = DB::table('vgnpages')->where('pageurl', $page['pageurl'])->exists();

            if (!$exists) {
                DB::table('vgnpages')->insert($page);
            }
        }
    }
}
