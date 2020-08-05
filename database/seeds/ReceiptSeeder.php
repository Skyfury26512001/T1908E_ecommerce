<?php

use App\Receipt;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;
class ReceiptSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data_check = Receipt::all()->first();
        if ($data_check != null) {
            Schema::disableForeignKeyConstraints();
            Receipt::truncate();
            Schema::enableForeignKeyConstraints();
        }
        $faker = \Faker\Factory::create();

        $receipts = array();
        $products = \App\Product::all();
        $product_list_item = '';
        for ($i = 1; $i < 10; $i++){
            $product_list_item .= $faker->randomElement($products)->name;
            for($y = 0 ; $y < 2 ; $y++){
                $product_list_item .= ','.$faker->randomElement($products)->name;
            }
            $item = [
                'codeName' => $faker->asciify('******'),
                'product_list_item' => $product_list_item,
                'total_price' => $faker->randomNumber(4) * 100,
                'buyer_name' => $faker->name,
                'buyer_address' => $faker->address,
                'buyer_phone' => $faker->phoneNumber,
                'status' => $faker->numberBetween(0,2),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        array_push($receipts,$item);
        }

        Receipt::insert($receipts);
    }
}
