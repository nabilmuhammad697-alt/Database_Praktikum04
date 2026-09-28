<?php
namespace Database\Factories;
use App\Models\Role; use Illuminate\Database\Eloquent\Factories\Factory; use Illuminate\Support\Facades\Hash;
class UserFactory extends Factory {
    public function definition(): array {
        return ['role_id'=>Role::query()->inRandomOrder()->value('id_role'),'nama'=>$this->faker->name(),'email'=>$this->faker->unique()->safeEmail(),'password'=>Hash::make('password')];
    }
}
