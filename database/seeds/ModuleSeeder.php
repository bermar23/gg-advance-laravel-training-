<?php

use App\Models\Module;
use Illuminate\Database\Seeder;

class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Module::create([
            'code' => 'SI',
            'name' => 'Sales Invoice'
        ]);

        Module::create([
            'code' => 'PO',
            'name' => 'Purchase Order'
        ]);
    }
}
