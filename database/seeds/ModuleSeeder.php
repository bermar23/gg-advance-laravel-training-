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
        factory(Module::class, 1)->create([
            'code' => 'SI',
            'name' => 'Sales Invoice'
        ]);

        factory(Module::class, 1)->create([
            'code' => 'PO',
            'name' => 'Purchase Order'
        ]);
    }
}
