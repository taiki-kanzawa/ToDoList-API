<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
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
            'started_at' => date('Y-m-d H:i:s', strtotime('+1 day')),
            'completed_at' => date('Y-m-d H:i:s', strtotime('+1 week')),
            'title' => 'タイトル_' . (string)mt_rand(),
            'detail' => 'タスク詳細内容_' . (string)mt_rand(),
        ];
    }
}
