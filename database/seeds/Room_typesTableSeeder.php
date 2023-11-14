<?php

use Illuminate\Database\Seeder;

class Room_typesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'room_type_id'=>1,
            'room_name'=>'和室',
            'capacity'=>1
        ];
        DB::table('room_types')->insert($param);

        $param = [
            'room_type_id'=>2,
            'room_name'=>'和室',
            'capacity'=>2
        ];
        DB::table('room_types')->insert($param);

        $param = [
            'room_type_id'=>3,
            'room_name'=>'和室',
            'capacity'=>3
        ];
        DB::table('room_types')->insert($param);

        $param = [
            'room_type_id'=>4,
            'room_name'=>'洋室',
            'capacity'=>1
        ];
        DB::table('room_types')->insert($param);

        $param = [
            'room_type_id'=>5,
            'room_name'=>'洋室',
            'capacity'=>2
        ];
        DB::table('room_types')->insert($param);

        $param = [
            'room_type_id'=>6,
            'room_name'=>'洋室',
            'capacity'=>3
        ];
        DB::table('room_types')->insert($param);
    }
}
