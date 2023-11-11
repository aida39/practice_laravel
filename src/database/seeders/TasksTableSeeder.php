<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $param = [
      'name' => '鈴木',
      'detail' => '確認テスト合格',
      'deadline' => '2023-12-30',
      'remark' => '各課の売上目標を明記すること'
    ];
    DB::table('tasks')->insert($param);
     $param = [
      'name' => '本田',
      'detail' => '模擬案件１完了',
      'deadline' => '2024-02-29',
      'remark' => '各課の売上目標を明記すること'
    ];
    DB::table('tasks')->insert($param);
     $param = [
      'name' => '松田',
      'detail' => '来模擬案件2完了',
      'deadline' => '2024-04-30',
      'remark' => '各課の売上目標を明記すること'
    ];
    DB::table('tasks')->insert($param);
     $param = [
      'name' => '日産',
      'detail' => 'プロテスト合格',
      'deadline' => '2024-06-30',
      'remark' => ''
    ];
    DB::table('tasks')->insert($param);
    }
}
