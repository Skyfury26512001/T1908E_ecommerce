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

        $brands =  array(
            array(
                'name' => 'Gucci',
                'status' => 1,
                'slug' => 'gucci',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array(
                'name' => 'Bvlgari',
                'status' => 1,
                'slug' => 'bvlgari',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array(
                'name' => 'Chanel',
                'status' => 1,
                'slug' => 'chanel',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array(
                'name' => 'Dior',
                'status' => 1,
                'slug' => 'dior',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array(
                'name' => 'Burberry',
                'status' => 1,
                'slug' => 'burberry',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
        );

          Brand::insert($brands);
    }
}
