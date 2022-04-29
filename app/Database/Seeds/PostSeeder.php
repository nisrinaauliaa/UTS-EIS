<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PostSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'foto' => 'foto1.jpg',
            'caption'    => 'netflix and chills',
            'slug'    => "post-1",
        ];

        // Simple Queries
        $this->db->table('post')->insert($data);
        
        $data = [
            'foto' => 'foto1.jpg',
            'caption'    => 'vitamin sea',
            'slug'    => "post-2",
        ];
        // Using Query Builder
        $this->db->table('post')->insert($data);
    }
}