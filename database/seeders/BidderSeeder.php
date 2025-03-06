<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Bidder;

class BidderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $bidders = [
            ['last_name' => 'Pangan', 
            'first_name' => 'Ian', 
            'address' => 'cabulijan', 
            'email' => 'ian@example.com'],

            ['last_name' => 'Pangan',
             'first_name' => 'Dan',
              'address' => 'cabulijan',
               'email' => 'dan@example.com'],

            ['last_name' => 'Alampayan', 
            'first_name' => 'jose',
             'address' => 'ubujan', 
             'email' => 'ubujan@example.com'],

            ['last_name' => 'Deloy',
             'first_name' => 'Lian',
              'address' => 'calape',
              'email' => 'lian@example.com'],

            ['last_name' => 'lofranco', 
            'first_name' => 'rasille', 
            'address' => 'clarin', 
            'email' => 'jhones@example.com'],
        ];

        foreach ($bidders as $bidder) {
            Bidder::create($bidder);
        }
    }
}
