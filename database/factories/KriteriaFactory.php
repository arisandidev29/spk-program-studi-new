<?php

namespace Database\Factories;

use App\Service\BobotServiceInterface;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\App;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kriteria>
 */
class KriteriaFactory extends Factory
{
    protected $bobotService;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $this->bobotService = App::make(BobotServiceInterface::class);

        return [
            "kriteria" => fake()->title(),
            "desc" => fake()->text(),
            'note' => fake()->text(),
            "bobot_id" => $this->bobotService->getAllBobots()->first()->id,
            'kategori' => 'benefit'
        ];
    }
}
