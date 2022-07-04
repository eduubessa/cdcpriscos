@extends('layouts.app')

@section('content')

    <main class="main">
        <!-- SLIDER -->
        @if(SITE_OPTION(\App\Helpers\Constants\OptionInterface::OPTION_SLIDER_HOMEPAGE_STATUS_VARIABLE) === \App\Helpers\Constants\OptionInterface::OPTION_SLIDER_HOMEPAGE_STATUS_VALUE_ENABLED)
            <section class="slider" id="slider">
                <slider-component data="{{ $slides }}"></slider-component>
            </section>
        @endif
        <!-- SLIDER -->

        <!-- LAST RESULTS -->
        @if(SITE_OPTION(\App\Helpers\Constants\OptionInterface::OPTION_LAST_RESULTS_HOMEPAGE_STATUS_VARIABLE) === \App\Helpers\Constants\OptionInterface::OPTION_LAST_RESULTS_HOMEPAGE_STATUS_VALUE_ENABLED)
            <section class="last-results pt-5">
                <div class="container">
                    <h4>{{ __('pages.home.titles.results') }}</h4>
                    <hr class="mb-3" />
                    <last-results-component class="mt-5"></last-results-component>
                </div>
            </section>
        @endif
        <!-- LAST RESULTS -->

        <!-- LAST NEWS -->
        @if(SITE_OPTION(\App\Helpers\Constants\OptionInterface::OPTION_SLIDER_HOMEPAGE_STATUS_VARIABLE) === \App\Helpers\Constants\OptionInterface::OPTION_SLIDER_HOMEPAGE_STATUS_VALUE_ENABLED)
            <section class="last-news pt-5">
                <div class="container">
                    <h4>{{ __('pages.home.titles.news') }}</h4>
                    <hr class="mb-3" />
                    <last-news-component class="mt-5" data="{{ $lastnews }}"></last-news-component>
                </div>
            </section>
        @endif
        <!-- LAST NEWS -->

        <!-- LAST NEWS -->
        @if(SITE_OPTION(\App\Helpers\Constants\OptionInterface::OPTION_CALENDAR_HOMEPAGE_STATUS_VARIABLE) === \App\Helpers\Constants\OptionInterface::OPTION_CALENDAR_HOMEPAGE_STATUS_VALUE_ENABLED)
            <section class="schedule pt-5">
                <div class="container">
                   <calendar-component></calendar-component>
                </div>
            </section>
        @endif
        <!-- LAST NEWS -->
    </main>
@endsection
