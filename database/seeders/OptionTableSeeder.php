<?php

namespace Database\Seeders;

use App\Helpers\Constants\SliderInterface;
use App\Models\Option;
use Illuminate\Database\Seeder;
use App\Helpers\Constants\OptionInterface;
use App\Helpers\Constants\PageInterface;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OptionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $option = new Option();
        $option->name = "Título";
        $option->description = "Título que irá aparecer em todas as páginas";
        $option->variable = OptionInterface::SITE_TITLE_VARIABLE;
        $option->value = OptionInterface::SITE_TITLE_VALUE;
        $option->save();

        $option = new Option();
        $option->name = "Descrição";
        $option->description = "Descrição que irá aparecer em todas as páginas";
        $option->variable = OptionInterface::SITE_DESCRIPTION_VARIABLE;
        $option->value = OptionInterface::SITE_DESCRIPTION_VALUE;
        $option->save();

        $option = new Option();
        $option->name = "Estado do site";
        $option->description = "Em que estado se encontra a plataforma";
        $option->variable = OptionInterface::SITE_RESPONSE_CODE_VARIABLE;
        $option->value = OptionInterface::SITE_RESPONSE_CODE_VALUE;
        $option->save();

        $option = new Option();
        $option->name = "Slider";
        $option->description = "Ativar e desativar o slider na homepage";
        $option->variable = OptionInterface::OPTION_SLIDER_HOMEPAGE_STATUS_VARIABLE;
        $option->value = OptionInterface::OPTION_SLIDER_HOMEPAGE_STATUS_VALUE_ENABLED;
        $option->save();

        $option = new Option();
        $option->name = "Artigos na página inicial";
        $option->description = "Mostrar ou esconder os artigos mais recentes na página inicial";
        $option->variable = OptionInterface::OPTION_POSTS_HOMEPAGE_STATUS_VARIABLE;
        $option->value = OptionInterface::OPTION_POSTS_HOMEPAGE_STATUS_VALUE_ENABLED;
        $option->save();

        $option = new Option();
        $option->name = "Videos na página inicial";
        $option->description = "Mostrar ou esconder os videos mais recentes na página inicial";
        $option->variable = OptionInterface::OPTION_VIDEOS_HOMEPAGE_STATUS_VARIABLE;
        $option->value = OptionInterface::OPTION_VIDEOS_HOMEPAGE_STATUS_VALUE_ENABLED;
        $option->save();

        $option = new Option();
        $option->name = "Social na página inicial";
        $option->description = "Mostrar ou esconder posts das redes sociais na página inicial";
        $option->variable = OptionInterface::OPTION_SOCIAL_HOMEPAGE_STATUS_VARIABLE;
        $option->value = OptionInterface::OPTION_SOCIAL_HOMEPAGE_STATUS_VALUE_DISABLED;
        $option->save();

        $option = new Option();
        $option->name = "Anúncios na página inicial";
        $option->description = "Mostrar ou esconder anúncios na página inicial";
        $option->variable = OptionInterface::OPTION_ADS_HOMEPAGE_STATUS_VARIABLE;
        $option->value = OptionInterface::OPTION_ADS_HOMEPAGE_STATUS_VALUE_ENABLED;
        $option->save();

        $option = new Option();
        $option->name = "Notícias ao minuto";
        $option->description = "Mostrar ou esconder notícias ao minuto na página inicial";
        $option->variable = OptionInterface::OPTION_LASTNEWS_HOMEPAGE_STATUS_VARIABLE;
        $option->value = OPtionInterface::OPTION_LASTNEWS_HOMEPAGE_STATUS_VALUE_ENABLED;
        $option->save();

        $option = new Option();
        $option->name = "Limitador do slider";
        $option->description = "Número de slides a apresentar no slider";
        $option->variable = SliderInterface::SLIDE_LIMITER_VARIABLE;
        $option->value = SliderInterface::SLIDE_LIMITER_VALUE;
        $option->save();

        $option = new Option();
        $option->name = "Calendário na página inicial";
        $option->description = "Apresentar calendários com os eventos na página inicial";
        $option->variable = OptionInterface::OPTION_CALENDAR_HOMEPAGE_STATUS_VARIABLE;
        $option->value = OptionInterface::OPTION_CALENDAR_HOMEPAGE_STATUS_VALUE_ENABLED;
        $option->save();

        $option = new Option();
        $option->name = "Resultados na página inicial";
        $option->description = "Apresentar o último resultado do último jogo na pagina inicial.";
        $option->variable = OptionInterface::OPTION_LAST_RESULTS_HOMEPAGE_STATUS_VARIABLE;
        $option->value = OptionInterface::OPTION_LAST_RESULTS_HOMEPAGE_STATUS_VALUE_ENABLED;
        $option->save();
    }
}
