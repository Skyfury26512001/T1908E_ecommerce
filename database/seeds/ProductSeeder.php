<?php

use App\Product;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data_check = Product::all()->first();
        if ($data_check != null) {
            Schema::disableForeignKeyConstraints();
            Product::query()->truncate();
            Schema::enableForeignKeyConstraints();
        }
        $product = [
          [
              'name' => '',
              'brand_id' => '',
              'type' => '',
              'volumn' => '',
              'origin_id' => '',
              'release_year' => '',
              'incense_group' => '',
              'incense' => '',
              'price' => '',
              'description' => '',
              'thumbnail' => '',
              'status' => '',
              'created_at' => Carbon::now(),
              'updated_at' => Carbon::now(),
          ],
        ];
    }
}
