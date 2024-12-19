<?php

namespace Database\Factories;

use App\Models\Congty;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Congty>
 */
class CongtyFactory extends Factory
{
    protected $model = Congty::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ten' => $this->faker->company,
            'ten_viet_tat' => $this->faker->companySuffix,
            'dia_chi' => $this->faker->address,
            'sdt' => $this->faker->phoneNumber,
            'trang_thai' => $this->faker->randomElement([true, false]),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
