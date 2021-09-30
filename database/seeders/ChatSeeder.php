<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ChatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = 'City';

        DB::table('chat_rooms')->insert([
            'name' => $name,
            'slug' => Str::slug($name)
        ]);
    }
}
