<?php

namespace Database\Seeders;

use App\Models\Highpoint;
use App\Models\User;
use App\Models\HighpointUser;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

final class HighpointUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();
        $highpoints = Highpoint::all();

        foreach ($users as $user) {
            foreach ($highpoints as $highpoint) {
                $completed = fake()->boolean();

                HighpointUser::create([
                    'user_id' => $user->id,
                    'highpoint_id' => $highpoint->id,
                    'completed' => $completed,
                    'completion_date' => $completed ? fake()->dateTimeBetween('-2 years', 'now') : null,
                    'notes' => null,
                ]);
            }
        }
    }
}
