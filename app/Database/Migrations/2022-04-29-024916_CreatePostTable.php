<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePostTable extends Migration
{
    public function up()
    {
        $fields = [
            "post_id" => [
                "type"=> "INT",
                "unsigned"=> true,
                "auto_increment"=> true,
            ],
            "foto" => [
                "type"=> "VARCHAR",
                "constraint" => "200",
            ],
            "caption" => [
                "type"=> "VARCHAR",
                "constraint" => "400",
            ],
            "created_at" => [
                "type"=> "DATETIME",
                "null" => true,
                "default" => null,
            ],
            "deleted_at" => [
                "type"=> "DATETIME",
                "null" => true,
                "default" => null,
            ],
        ];
        $this->forge->addKey('post_id', true);
        $this->forge->addField($fields);
        $this->forge->createTable('post', true); 
    }

    public function down()
    {
        $this->forge->dropTable('post', true); 
    }
}
