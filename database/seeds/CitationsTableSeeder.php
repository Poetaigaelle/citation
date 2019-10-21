<?php

use Illuminate\Database\Seeder;

class CitationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('citations')->insert([
            ['citation'=>'"La beauté de la nature éveille et emplit les sens"'],

            ['citation'=>'"La nature à ce pouvoir unique de nous apaiser"'],

            ['citation'=>'"La nature ne fait rien en vain"'],

            ['citation'=>'"La nature fait bien les choses"'],

            ['citation'=>'"La raison nous trompe plus souvent que la nature"'],

            ['citation'=>'"Il est impossible de progresser en spiritualité sans aimer la nature"'],

            ['citation'=>'"La nature, tellement belle et vrai"'],

            ['citation'=>'"La nature, un paradis" '],
        ]);
    }
}
