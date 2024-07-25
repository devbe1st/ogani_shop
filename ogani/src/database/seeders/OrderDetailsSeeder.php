<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Lấy tất cả các đơn hàng và sản phẩm có sẵn
        $orders = Order::all();
        $products = Product::all();

        foreach ($orders as $order) {
            foreach ($products->random(3) as $product) { // Giả sử mỗi đơn hàng có 3 sản phẩm ngẫu nhiên
                DB::table('order_details')->insert([
                    'order_id' => $order->id,
                    'product_id' => $product->id,
                    'price' => $product->price, // Giả sử mỗi sản phẩm có thuộc tính giá
                    'quantity' => rand(1, 5), // Số lượng ngẫu nhiên từ 1 đến 5
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
