<?php

use App\Peserta;
use Illuminate\Database\Seeder;

class PesertasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        Peserta::truncate();

        Peserta::create([
            'nama' => "Nama Kamu",
        ]);
    }
}
