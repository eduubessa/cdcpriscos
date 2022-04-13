<?php

use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $slider = [
            1 => [
                'Name'      => 'O meu primeiro slider',
                'Title'     => 'O primeiro slider',
                'Text'      => 'O primeiro slider criado no laravel',
                'Image'     => 'http://cart.pt/Blog/plantelsenioresfutsal.jpg',
                'Button'    => '0'
            ]
        ];

        DB::table('slider')->insert($slider);
    }
}
