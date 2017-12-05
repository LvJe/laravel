<?php

use Illuminate\Database\Seeder;

class TicketsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private function gene_phone_number()
    {
        $_number = '1';
        for ($i = 0; $i < 10; $i++) {
            $_number .= random_int(0,9);
        }
        return $_number;
    }

    private function gene_id_number(){
        return str_random(18);
    }

    public function run()
    {
        DB::table('tickets')->insert([
            'name' => str_random(3),
            'sex' => random_int(1, 2),
            'phone_number' => $this->gene_phone_number(),
            'id_number' => $this->gene_id_number()
        ]);
    }
}
