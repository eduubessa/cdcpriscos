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

        <!-- LAST NEWS -->
        @if(SITE_OPTION(\App\Helpers\Constants\OptionInterface::OPTION_SLIDER_HOMEPAGE_STATUS_VARIABLE) === \App\Helpers\Constants\OptionInterface::OPTION_SLIDER_HOMEPAGE_STATUS_VALUE_ENABLED)
            <section class="last-news pt-5">
                <div class="container">
                    <h3 class="title mb-5">{{ __('pages.home.titles.news') }}</h3>
                    <last-news-component data="{{ $lastnews }}"></last-news-component>
                </div>
            </section>
        @endif
        <!-- LAST NEWS -->

        <!-- LAST NEWS -->
        @if(SITE_OPTION(\App\Helpers\Constants\OptionInterface::OPTION_CALENDAR_HOMEPAGE_STATUS_VARIABLE) === \App\Helpers\Constants\OptionInterface::OPTION_CALENDAR_HOMEPAGE_STATUS_VALUE_ENABLED)
            <section class="shedule pt-5">
                <div class="container">
                    <div class="row">
                        <h4>Agenda</h4>
                        <hr/>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <calendar-component></calendar-component>
                        </div>
                        <div class="col-md-4 bg-blue text-white py-5 text-center">
                            <h1>26</h1>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">

                </div>
            </section>
        @endif
        <!-- LAST NEWS -->
    </main>

    {{--    <main class="main">--}}
    {{--        <section class="home">--}}
    {{--            <section class="news">--}}
    {{--                @forelse($posts as $post)--}}
    {{--                    <div class="new">--}}
    {{--                        <button target="{{ route('posts.show', $post->slug) }})"><i class="fa fa-chevron-right fa-1x"></i> Ler mais</button>--}}
    {{--                        <div></div>--}}
    {{--                        <p>{{ $post->title }}</p>--}}
    {{--                    </div>--}}
    {{--                @empty--}}
    {{--                    <div class="error">--}}
    {{--                        Neste momento não temos noticias adicionadas à nossa base de dados!--}}
    {{--                    </div>--}}
    {{--                @endforelse--}}
    {{--            </section>--}}

    {{--            <!-- SECÇÂO DO ADS -->--}}
    {{--            <section class="ads">--}}
    {{--                <img src="http://placehold.it/1150x160" border="0" />--}}
    {{--            </section>--}}
    {{--            <!-- SECÇÂO DO ADS -->--}}

    {{--            <!-- SECÇÂO DOS VIDEOS -->--}}
    {{--            <section class="videos">--}}
    {{--                <h3>Vídeos</h3>--}}
    {{--                <hr class="left" />--}}
    {{--                <hr class="center" />--}}
    {{--                <hr class="right" />--}}
    {{--                <div class="videos">--}}
    {{--                    @forelse($videos as $video)--}}
    {{--                        <div class="video">--}}
    {{--                            <iframe src="{{ $video->Url }}?modestbranding=1autoplay=0&showinfo=0&controls=0&rel=0&autohide=1;" frameborder="0" allowfullscreen></iframe>--}}
    {{--                            <div class="video-caption">{{ $video->Title }}</div>--}}
    {{--                        </div>--}}
    {{--                    @empty--}}
    {{--                        <div class="error">--}}
    {{--                            Neste momento não temos vídeos adicionadas à nossa base de dados!--}}
    {{--                        </div>--}}
    {{--                    @endforelse--}}
    {{--                </div>--}}
    {{--                <div class="buttons">--}}
    {{--                    <button class="button button-videos-prev"><i class="fa fa-angle-left fa-fw fa-1x"></i></button>--}}
    {{--                    <button class="button button-videos-next"><i class="fa fa-angle-right fa-fw fa-1x"></i></button>--}}
    {{--                </div>--}}
    {{--            </section>--}}
    {{--            <!-- SECÇÂO SOCIAL MEDIA -->--}}
    {{--            <section class="social">--}}
    {{--                <h3>Social Media</h3>--}}
    {{--                <div class="search">--}}
    {{--                    <hr />--}}
    {{--                    <div class="buttons">--}}
    {{--                        <button>Tudo</button>--}}
    {{--                        <button><i class="fa fa-facebook-f fa-fw"></i></button>--}}
    {{--                        <button><i class="fa fa-twitter fa-fw"></i></button>--}}
    {{--                        <button><i class="fa fa-google-plus fa-fw"></i></button>--}}
    {{--                        <button><i class="fa fa-play fa-fw"></i></button>--}}
    {{--                    </div>--}}
    {{--                    <input placeholder="Pesquisar" name="input-social-search" type="text" />--}}
    {{--                </div>--}}
    {{--                <div class="social-post">--}}
    {{--                    <img src="https://images1-focus-opensocial.googleusercontent.com/gadgets/proxy?container=focus&resize_w=260&refresh=86400&url=https%3A%2F%2Fpbs.twimg.com%2Fmedia%2FCdryotXWwAIzX2u.jpg" border="0" />--}}
    {{--                    <p class="post">Posted on facebook, making social news !</p>--}}
    {{--                    <p class="page">--}}
    {{--                        <a href="#">CDC PRISCOS</a><br />--}}
    {{--                        <span class="dateofpost">3h</span>--}}
    {{--                    </p>--}}
    {{--                </div>--}}
    {{--                <div class="buttons">--}}
    {{--                    <button class="button button-more-socials"><img src="{{ url('images/shapes.png') }}" border="0" /></button>--}}
    {{--                </div>--}}
    {{--            </section>--}}
    {{--            <!-- SECÇÂO SOCIAL MEDIA -->--}}

    {{--            <!-- SECÇÂO DO ADS -->--}}
    {{--            <section class="ads">--}}
    {{--                <img src="http://placehold.it/1150x160" border="0" />--}}
    {{--            </section>--}}
    {{--            <!-- SECÇÂO DO ADS -->--}}

    {{--            <!-- SECÇÂO FOOTER -->--}}
    {{--            <section class="footer">--}}
    {{--                <hr><div class="branding"></div><hr /><br />--}}
    {{--                <section class="partners">--}}
    {{--                    <div class="partners-branding">--}}

    {{--                    </div>--}}
    {{--                </section>--}}
    {{--            </section>--}}
    {{--            <!-- SECÇÂO FOOTER -->--}}
    {{--        </section>--}}
    {{--    </main>--}}
@endsection
