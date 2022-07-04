<?php

namespace App\Helpers\Constants;

interface OptionInterface {

    # Site options
    const SITE_TITLE_VALUE = "Clube Desportivo e Cultural de Priscos";
    CONST SITE_TITLE_VARIABLE = "SITE_TITLE";

    const SITE_DESCRIPTION_VALUE = "Estamos em atualização";
    const SITE_DESCRIPTION_VARIABLE = "SITE_DESCRIPTION";

    CONST SITE_RESPONSE_CODE_VALUE = 235; // Development mode
    CONST SITE_RESPONSE_CODE_VARIABLE = "SITE_RESPONSE_CODE";

    # Homepage variables options
    const OPTION_ADS_HOMEPAGE_STATUS_VARIABLE       = "OPTION_ADS_HOMEPAGE_STATUS";
    const OPTION_POSTS_HOMEPAGE_STATUS_VARIABLE     = "OPTION_POSTS_HOMEPAGE_STATUS";
    const OPTION_SLIDER_HOMEPAGE_STATUS_VARIABLE    = "OPTION_SLIDER_HOMEPAGE_STATUS";
    const OPTION_VIDEOS_HOMEPAGE_STATUS_VARIABLE    = "OPTION_VIDEOS_HOMEPAGE_STATUS";
    const OPTION_SOCIAL_HOMEPAGE_STATUS_VARIABLE    = "OPTION_SOCIAL_HOMEPAGE_STATUS";
    const OPTION_LASTNEWS_HOMEPAGE_STATUS_VARIABLE  = "OPTION_LASTNEWS_HOMEPAGE_STATUS";
    const OPTION_CALENDAR_HOMEPAGE_STATUS_VARIABLE  = "OPTION_CALENDAR_HOMEPAGE_STATUS";
    const OPTION_LAST_RESULTS_HOMEPAGE_STATUS_VARIABLE  = "OPTION_LAST_RESULTS_HOMEPAGE_STATUS";

    # Homepage values options
    const OPTION_ADS_HOMEPAGE_STATUS_VALUE_ENABLED          = "OPTION_ADS_HOMEPAGE_STATUS_VALUE_ENABLED";
    const OPTION_ADS_HOMEPAGE_STATUS_VALUE_DISABLED         = "OPTION_ADS_HOMEPAGE_STATUS_VALUE_DISABLED";

    const OPTION_POSTS_HOMEPAGE_STATUS_VALUE_ENABLED        = "OPTION_POSTS_HOMEPAGE_STATUS_VALUE_ENABLED";
    const OPTION_POSTS_HOMEPAGE_STATUS_VALUE_DISABLED       = "OPTION_POSTS_HOMEPAGE_STATUS_VALUE_DISABLED";

    const OPTION_SLIDER_HOMEPAGE_STATUS_VALUE_ENABLED       = "OPTION_SLIDER_HOMEPAGE_STATUS_VALUE_ENABLED";
    const OPTION_SLIDER_HOMEPAGE_STATUS_VALUE_DISABLED      = "OPTION_SLIDER_HOMEPAGE_STATUS_VALUE_DISABLED";

    const OPTION_VIDEOS_HOMEPAGE_STATUS_VALUE_ENABLED       = "OPTION_VIDEOS_HOMEPAGE_STATUS_VALUE_ENABLED";
    const OPTION_VIDEOS_HOMEPAGE_STATUS_VALUE_DISABLED      = "OPTION_VIDEOS_HOMEPAGE_STATUS_VALUE_DISABLED";

    const OPTION_SOCIAL_HOMEPAGE_STATUS_VALUE_ENABLED       = "OPTION_SOCIAL_HOMEPAGE_STATUS_VALUE_ENABLED";
    const OPTION_SOCIAL_HOMEPAGE_STATUS_VALUE_DISABLED      = "OPTION_SOCIAL_HOMEPAGE_STATUS_VALUE_DISABLED";

    const OPTION_LASTNEWS_HOMEPAGE_STATUS_VALUE_ENABLED     = "OPTION_LASTNEWS_HOMEPAGE_STATUS_VALUE_ENABLED";
    const OPTION_LASTNEWS_HOMEPAGE_STATUS_VALUE_DISABLED    = "OPTION_LASTNEWS_HOMEPAGE_STATUS_VALUE_DISABLED";

    const OPTION_CALENDAR_HOMEPAGE_STATUS_VALUE_ENABLED     = "OPTION_CALENDAR_HOMEPAGE_STATUS_VALUE_ENABLED";
    const OPTION_CALENDAR_HOMEPAGE_STATUS_VALUE_DISABLED     = "OPTION_CALENDAR_HOMEPAGE_STATUS_VALUE_DISABLED";

    const OPTION_LAST_RESULTS_HOMEPAGE_STATUS_VALUE_ENABLED     = "OPTION_LAST_RESULTS_HOMEPAGE_STATUS_VALUE_ENABLED";
    const OPTION_LAST_RESULTS_HOMEPAGE_STATUS_VALUE_DISABLED     = "OPTION_LAST_RESULTS_HOMEPAGE_STATUS_VALUE_DISABLED";
}
