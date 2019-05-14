<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;


class TodosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('todos')->truncate();
        DB::table('todos')->insert([
            [
                'title'      => 'Laravel todo',
                'created_at' => Carbon::create(2019, 5, 14),
                'updated_at' => Carbon::create(2019, 5, 14),
            ],
            [
                'title'      => 'Laravel todo done',
                'created_at' => Carbon::create(2019, 5, 14),
                'updated_at' => Carbon::create(2019, 5, 14),
            ],
        ]);
    }
}
