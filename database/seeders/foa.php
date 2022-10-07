<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class foa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('studentclass')->insert([
// 'id'=>Str::random(10),
'cname'=>Str::random(20),
'cname'=>Str::random(20)

        ]);
    }
}
