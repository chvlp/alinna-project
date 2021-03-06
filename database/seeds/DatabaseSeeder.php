<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(roleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(TypeRoomSeeder::class);
        $this->call(RoomSeeder::class);
        $this->call(MemberSeeder::class);
        // $this->call(ElectricSeeder::class);
        $this->call(rentRoomSeeder::class);

    }
}
