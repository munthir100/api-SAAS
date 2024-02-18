<?php

namespace Database\Factories;

use App\Models\Tenant;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        $tenants = Tenant::pluck('id')->toArray();
        return [
            'name' => $this->faker->word,
            'price' => $this->faker->randomFloat(2, 1, 100),
            'tenant_id' => $this->faker->randomElement($tenants),
        ];
    }
}
