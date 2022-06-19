<?php

use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rooms')->insert(
            [
                'type_id' => 1,
                'number' => '201',
                'floor' => 'ຊັ້ນ 2',
                'price' => '250',
                'image' => 'room1.jpg',
            ]
        );

        DB::table('rooms')->insert(
            [
                'type_id' => 2,
                'number' => '302',
                'floor' => 'ຊັ້ນ 3',
                'price' => '300',
                'image' => 'room2.jpg',
            ]
        );

        DB::table('rooms')->insert(
            [
                'type_id' => 3,
                'number' => '405',
                'floor' => 'ຊັ້ນ 4',
                'price' => '350',
                'image' => 'room3.jpg',
            ]
        );

    }
}
