<?php

use App\Brand;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data_check = Brand::all()->first();
        if ($data_check != null) {
            Schema::disableForeignKeyConstraints();
            Brand::query()->truncate();
            Schema::enableForeignKeyConstraints();
        }

        Brand::truncate();

        $brands =  array(
            array(
                'name' => 'Gucci',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array(
                'name' => 'Bvlgari',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array(
                'name' => 'Chanel',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array(
                'name' => 'Dior',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array(
                'name' => 'Burberry',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
        );

          Brand::insert($brands);
    }
}
