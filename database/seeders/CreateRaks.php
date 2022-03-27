<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Racks;

class CreateRaks extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <=182; $i++) {
             Racks::create([
                 'num_rack' => $i,
                 'estatus' => 0,
             ]);
        }
    }
}
