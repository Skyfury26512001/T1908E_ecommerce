<?php

use App\Origin;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class OriginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data_check = Origin::all()->first();
        if ($data_check != null) {
            Schema::disableForeignKeyConstraints();
            Origin::query()->truncate();
            Schema::enableForeignKeyConstraints();
        }

        $origins =  [
            [
              'name' => 'Italian',
              'status' => 1,
              'slug' => 'italian',
              'created_at' => Carbon::now(),
              'updated_at' => Carbon::now(),
            ],
            [
              'name' => 'French',
              'status' => 1,
              'slug' => 'french',
              'created_at' => Carbon::now(),
              'updated_at' => Carbon::now(),
            ],
            [
              'name' => 'Greek',
              'status' => 1,
              'slug' => 'greek',
              'created_at' => Carbon::now(),
              'updated_at' => Carbon::now(),
            ],
            [
              'name' => 'Britain',
              'status' => 1,
              'slug' => 'britain',
              'created_at' => Carbon::now(),
              'updated_at' => Carbon::now(),
            ],
          ];

          Origin::insert($origins);
    }
}
