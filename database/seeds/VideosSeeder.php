<?php

use Illuminate\Database\Seeder;

class VideosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $videos = [
            0 => [
                'Title'         => 'O meu primeiro video',
                'Description'   => 'Este é o primeiro video deste site, apenas está a ser usado para testes',
                'Url'           => 'https://www.youtube.com/embed/7cY0-CeZkc4',
                'Published'     => 1
            ],
            1 => [
                'Title'         => 'O meu segundo video',
                'Description'   => 'Este é o segundo video deste site, apenas está a ser usado para testes',
                'Url'           => 'https://www.youtube.com/embed/7cY0-CeZkc4',
                'Published'     => 1
            ],
            2 => [
                'Title'         => 'O meu terceiro video',
                'Description'   => 'Este é o terceiro video deste site, apenas está a ser usado para testes',
                'Url'           => 'https://www.youtube.com/embed/7cY0-CeZkc4',
                'Published'     => 1
            ],
        ];

        DB::table('videos')->insert($videos);
    }
}
