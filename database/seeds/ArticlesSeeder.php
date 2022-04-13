<?php

use Illuminate\Database\Seeder;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $articles = [
              0 => [
                  'Title'   => 'O meu primeiro artigo!',
                  'Image'   => 'http://2.bp.blogspot.com/_c0oIaPWGajM/TTQVFr9s-lI/AAAAAAAABHM/KCZg2e7Ukrk/s1600/cart+5+-+priscos+2.jpg',
                  'Body'    => 'Bem-vindos este é o primeiro artigo, deste site, aqui apresentará todas as noticias!',
                  'Url'     => 'o-meu-primeiro-artigo',
                  'Publish' => 1
              ],

              1 => [
                  'Title'   => 'O meu segundo artigo',
                  'Image'   => 'http://desportivovaledohomem.com/imagens/135937461371325.jpg',
                  'Body'    => 'Ola tudo bem',
                  'Url'     => 'o-meu-segundo-artigo',
                  'Publish' => 1
              ],

              2 => [
                  'Title'   => 'O meu terceiro artigo',
                  'Image'   => 'http://2.bp.blogspot.com/-W1oAokfhr-M/UKzSN5WkRMI/AAAAAAAABP4/-7JsHq6Bsu4/s1600/1.png',
                  'Body'    => 'Ola tudo bem',
                  'Url'     => 'o-meu-terceiro-artigo',
                  'Publish' => 1
              ],
              3 => [
                 'Title'   => 'O meu quarto artigo!',
                 'Image'   => 'http://2.bp.blogspot.com/_c0oIaPWGajM/TTQVFr9s-lI/AAAAAAAABHM/KCZg2e7Ukrk/s1600/cart+5+-+priscos+2.jpg',
                 'Body'    => 'Bem-vindos este é o primeiro artigo, deste site, aqui apresentará todas as noticias!',
                 'Url'     => 'o-meu-quarto-artigo',
                 'Publish' => 1
              ],

              4 => [
                'Title'   => 'O meu quinto artigo',
                'Image'   => 'http://desportivovaledohomem.com/imagens/135937461371325.jpg',
                'Body'    => 'Ola tudo bem',
                'Url'     => 'o-meu-quinto-artigo',
                'Publish' => 1
              ],

              5 => [
                'Title'   => 'O meu sexto artigo',
                'Image'   => 'http://2.bp.blogspot.com/-W1oAokfhr-M/UKzSN5WkRMI/AAAAAAAABP4/-7JsHq6Bsu4/s1600/1.png',
                'Body'    => 'Ola tudo bem',
                'Url'     => 'o-meu-sexto-artigo',
                'Publish' => 1
              ]
        ];

        DB::table('articles')->insert($articles);
    }
}
