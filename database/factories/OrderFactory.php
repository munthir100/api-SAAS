<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Order;
use App\Models\Tenant;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;


class OrderFactory extends Factory
{
    protected $model = Order::class;

    public function definition()
    {
        $tenants = Tenant::pluck('id')->toArray();
        $users = User::pluck('id')->toArray();
        $products = Product::pluck('id')->toArray();

        return [
            'quantity' => $this->faker->numberBetween(1, 10),
            'tenant_id' => $this->faker->randomElement($tenants),
            'user_id' => $this->faker->randomElement($users),
            'product_id' => $this->faker->randomElement($products),
        ];
    }
}
