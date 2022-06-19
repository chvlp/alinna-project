<?php

use Illuminate\Database\Seeder;

class TypeRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_rooms')->insert(
            [
                'name' => 'ຫ້ອງນ້ອຍ (Sweet Room)',
                'detail' => '1 ຫ້ອງນອນ, 1 ຫ້ອງຄົວ,1 ຫ້ອງຮັບເເຂກ,1 ຫ້ອງນ້ຳ, ຫ້ອງລະບຽງນອກ, 1ຕູ້ເຢັນ, 1 TV, 2 ເເອເຢັນ, 1 ໝໍນ້ຳຮ້ອນ, 1 ເຕົາລີດ, ມີອຸປະກອນເຮືອນຄົວຄົບ',
            ]
        );

        DB::table('type_rooms')->insert(
            [
                'name' => 'ຫ້ອງກາງ (Sweet Family Room)',
                'detail' => '1 ຫ້ອງນອນ, 1 ຫ້ອງຄົວ,1 ຫ້ອງຮັບເເຂກ,1 ຫ້ອງນ້ຳ, ຫ້ອງລະບຽງນອກ, 1ຕູ້ເຢັນ, 1 TV, 2 ເເອເຢັນ, 1 ໝໍນ້ຳຮ້ອນ, 1 ເຕົາລີດ, ມີອຸປະກອນເຮືອນຄົວຄົບ',
            ]
        );

        DB::table('type_rooms')->insert(
            [
                'name' => 'ຫ້ອງໃຫຍ່ (VIP Room)',
                'detail' => '1 ຫ້ອງນອນ, 1 ຫ້ອງຄົວ,1 ຫ້ອງຮັບເເຂກ,1 ຫ້ອງນ້ຳ, ຫ້ອງລະບຽງນອກ, 1ຕູ້ເຢັນ, 1 TV, 2 ເເອເຢັນ, 1 ໝໍນ້ຳຮ້ອນ, 1 ເຕົາລີດ, ມີອຸປະກອນເຮືອນຄົວຄົບ',
            ]
        );

    }
}
