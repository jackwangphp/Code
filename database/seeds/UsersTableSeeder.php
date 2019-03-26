<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 40; $i++) {
            DB::table('users')->insert([
                'name' => str_random(5),
                'userid' => rand(10000000000,100000000000),
                'email' => str_random(10) . '@gmail.com',
                'password' => bcrypt('cucipm'),
                'info' => '{"sex": "男", "name": "test", "email": "", "grade": "2015", "major": "计算机科学与技术", "idcard": "0", "nation": "中国", "college": "计算机", "birthday": "1993-03-07", "division": "", "cellphone": "", "department": "理工", "english_name": ""}',
                'type' => ($i % 10)?1:2,
                'cellphone' => rand(10000000, 100000000)
            ]);
        }

    }
}
