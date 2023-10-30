<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TarjetasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tarjetas')->insert([
            ['numero'=>'67354608','marca'=>'Visa','cliente'=>'Alli Gainsborough','cupo'=>5200000,'utilizado'=>1866566],
            ['numero'=>'73580577','marca'=>'American Express','cliente'=>'Janaye Kobieriecki','cupo'=>6000000,'utilizado'=>4887475],
            ['numero'=>'94670582','marca'=>'MasterCard','cliente'=>'Ambrose Ratray','cupo'=>2600000,'utilizado'=>2190857],
            ['numero'=>'62150020','marca'=>'Visa','cliente'=>'Kristo Yanyushkin','cupo'=>3500000,'utilizado'=>364242],
            ['numero'=>'75008103','marca'=>'American Express','cliente'=>'Lefty Colegate','cupo'=>8000000,'utilizado'=>263783],
            ['numero'=>'99047979','marca'=>'American Express','cliente'=>'Benedetto Steinson','cupo'=>7300000,'utilizado'=>1366991],
            ['numero'=>'61289238','marca'=>'Visa','cliente'=>'Marnie Caesman','cupo'=>9000000,'utilizado'=>8029372],
            ['numero'=>'76898166','marca'=>'MasterCard','cliente'=>'Nicolais Lapides','cupo'=>3300000,'utilizado'=>2994214],

        ]);
    }
}
