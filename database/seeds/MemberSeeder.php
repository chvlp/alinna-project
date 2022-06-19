<?php

use Illuminate\Database\Seeder;
use App\members;
use App\User;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('name','ລຳເງິນ')->first();
 

        $members = members::create([
            'user_id' => $user->id,
            'idcard' => '224N038820',
            'village' => 'ບ້ານ ໂພນທັນ',
            'distric' => 'ເມືອງ ໄຊເສດຖາ',
            'province' => 'ນະຄອນຫຼວງວຽງຈັນ',
            'country' => 'ປະເທດລາວ',
            'status' => 'ກຳລັງເຊົ່າ',
        ]);
        
    }
}
