<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles =Role::select('id')->where('name','ເຈົ້າຂອງອາພາດເມັ້ນ')->first();
        $role =Role::select('id')->where('name','ພະນັກງານ')->first();
        $rol =Role::select('id')->where('name','ຜູ້ເຊົ່າ')->first();
 

        $user = User::create([
            'name' => 'Admin',
            'surname' => 'Superadmin',
            'gender' => 'ທ້າວ',
            'phone' => '+856 20 789 060 35',
            'email' => 'admin@admin.com',
            'image' => 'Profile.png',
            'password' => Hash::make('admin123'),
        ]);
        

        $user->roles()->attach($roles);

        $user = User::create([
            'name' => 'ທອງເພັດ',
            'surname' => 'ຈິດວິລະພົນ',
            'gender' => 'ທ້າວ',
            'phone' => '+856 20 789 060 35',
            'email' => 'chvlp1297@gmail.com',
            'image' => 'phet.jpg',
            'password' => Hash::make('admin123'),
        ]);

        $user->roles()->attach($role);

        $user = User::create([
            'name' => 'ທິນນະກອນ',
            'surname' => 'ສີມະວົງ',
            'gender' => 'ທ້າວ',
            'phone' => '+856 20 956 256 25',
            'email' => 'thinakone@gmail.com',
            'image' => 'kone.jpg',
            'password' => Hash::make('admin123'),
        ]);

        $user->roles()->attach($role);

        $user = User::create([
            'name' => 'ລຳເງິນ',
            'surname' => 'ລຳເງິນ',
            'gender' => 'ທ້າວ',
            'phone' => '+856 20 545 552 52',
            'email' => 'lumngern@gmail.com',
            'image' => 'noy.jpg',
            'password' => Hash::make('admin123'),
        ]);

        $user->roles()->attach($rol);
        return $user;
    }
}
