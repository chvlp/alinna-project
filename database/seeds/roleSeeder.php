<?php

use Illuminate\Database\Seeder;

class roleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert(
            [
                'name' => 'ເຈົ້າຂອງອາພາດເມັ້ນ'
            ]
        );
        DB::table('roles')->insert(
            [
                'name' => 'ພະນັກງານ'
            ]
        );
        DB::table('roles')->insert(
           
            [
                'name' => 'ຜູ້ເຊົ່າ'
            ]
        );
        DB::table('roles')->insert(
            
            [
                'name' => 'ຜູ້ໃຊ້'
            ]
        );
        DB::table('roles')->insert(
            
            [
                'name' => 'ປິດບັນຊີ'
            ]
        );
    }
}
