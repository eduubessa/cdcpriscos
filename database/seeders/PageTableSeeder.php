<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $page = new Page();
        $page->title = "Inicio";
        $page->description = "Página de inicio";
        $page->content = "";
        $page->slug = "home";
        $page->save();
    }
}
