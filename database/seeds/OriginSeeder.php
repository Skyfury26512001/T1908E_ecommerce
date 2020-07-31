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

        $origins = [
            [
                'name' => 'Ý',
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Pháp',
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Mỹ',
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        Origin::insert($origins);
    }
}
