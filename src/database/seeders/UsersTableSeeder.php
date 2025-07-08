<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash; // ← パスワード暗号化用
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('users')->insert([
      'name' => 'とわちゃん',
      'email' => 'towa2@example.com',
      'password' => Hash::make('password123'), // パスワードは暗号化
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now(),
    ]);
  }
}
