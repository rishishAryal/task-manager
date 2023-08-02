<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id'=> User::factory() ,
            'title'=>fake()->title(),
            'description'=>'abcdefghijklmnopqrstuvwxyz',
            'created_at'=>now(),
            'updated_at'=>now()
        ];
    }
}
