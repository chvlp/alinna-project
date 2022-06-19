<?php

use Illuminate\Database\Seeder;
use App\electric;
use App\rooms;
use App\members;

class ElectricSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $member = members::where('id', 1)->first();
        $room = rooms::where('id', 1)->first();
        $rooms = rooms::where('id', 2)->first();
 

        $electric = electric::create([
            'room_id' => $room->id,
            'member_id' => $member->id,
            'IDwater' => 'NO025212',
            'price' => '10000',
            'image' => 'bill1.jpg',
            'dateLine' => '2022-06-01 23:11:14',
        ]);

        $electric = electric::create([
            'room_id' => $rooms->id,
            'member_id' => $member->id,
            'IDwater' => 'NO025212',
            'price' => '10000',
            'image' => 'bill1.jpg',
            'dateLine' => '2022-06-01 23:11:14',
        ]);
    }
}
