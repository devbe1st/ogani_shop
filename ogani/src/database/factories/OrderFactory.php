<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Order;
use App\Models\User;

class OrderFactory extends Factory
{
    protected $model = Order::class;

    public function definition()
    {
        return [
            'user_id' => User::inRandomOrder()->first()->id,
            'order_number' => $this->faker->unique()->numerify('ORD-#####'),
            'total' => $this->faker->randomFloat(2, 20, 500),
            'shipping_address' => $this->faker->address,
            'payment_method' => $this->faker->randomElement(['credit_card', 'paypal', 'cash_on_delivery']),
            'status' => $this->faker->randomElement(['pending', 'completed', 'shipped', 'cancelled']),
        ];
    }
}
