<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TermAndPrivacy extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('privacies')->insert([
            'id' => 1,
            'deskripsi' => 'Privacy',
        ]);
        DB::table('privacies')->insert([
            'id' => 2,
            'deskripsi' => 'Term',
        ]);
    }
}
