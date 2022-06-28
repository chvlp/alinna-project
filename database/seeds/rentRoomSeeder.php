<?php

use App\rentRoom;
use App\rooms;
use App\User;
use Illuminate\Database\Seeder;

class rentRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('name','ລຳເງິນ')->first();
        $room = rooms::where('number','201')->first();


        $rentRoom = rentRoom::create([
            'room_id' => 1,
            'member_id' => 1,
            'intodate' => '2022-06-01 23:11:14',
            'outdate' => '2022-06-01 23:11:14',
            'image' => 'contract.jpg',
            'noContact' => '1233NO',
            'status' => 'ກຳລັງເຊົ່າ',
        ]);
    }
}
