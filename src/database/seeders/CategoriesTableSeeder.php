<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CategoriesTableSeeder extends Seeder
{
  public function run()
  {
    DB::table('categories')->insert([
      [
        'content' => '仕事',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
      ],
      [
        'content' => '勉強',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
      ],
      [
        'content' => '趣味',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
      ],
    ]);
  }
}
