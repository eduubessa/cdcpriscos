@include('layout.website._header')
@include('layout.website._footer')
<!-- SLIDER -->
<div id="slider" class="carousel slide" data-ride="carousel">
    <!-- Wrapper slider -->
    <div class="carousel-inner" role="listbox">
        @foreach($slides as $slide)
            @if($slide->Published == 1 && $slide->Active == 1)
            <div class="item active">
                <img src="{{ url($slide->Image) }}" />
                <div class="carousel-caption">
                    <h3 style="position: absolute; top: {{ $slide->TitlePositionTop }}; left: {{ $slide->TitlePositionLeft }}; {{ $slide->TitleStyleCSS }}">{{ $slide->Title }}</h3>
                    @if(isset($slide->Text) and !empty($slide->Text))
                        <p style="position: absolute; top: {{ $slide->TextPositionTop }}; left: {{ $slide->TextPositionLeft }}; {{ $slide->TextStyleCSS }}">{{ $slide->Text }}</p>
                    @endif
                </div>
                @if($slide->Button == 1)
                    <button class="button button-read-more" style="position: absolute; top: {{ $slide->ButtonPositionTop }}; left: {{ $slide->ButtonPositionLeft }}; {{ $slide->ButtonStyleCSS }}">Ler mais</button>
                @endif
            </div>
            @elseif($slide->Published == 1)
            <div class="item">
                <img src="{{ url($slide->Image) }}" />
                <div class="carousel-caption">
                    <h3 style="position: absolute; top: {{ $slide->TitlePositionTop }}; left: {{ $slide->TitlePositionLeft }}; {{ $slide->TitleStyleCSS }}">{{ $slide->Title }}</h3>
                    @if(isset($slide->Text) and !empty($slide->Text))
                        <p style="position: absolute; top: {{ $slide->TextPositionTop }}; left: {{ $slide->TextPositionLeft }}; {{ $slide->TextStyleCSS }}">{{ $slide->Text }}</p>
                    @endif
                </div>
                @if($slide->Button == 1)
                    <button class="button button-read-more" style="position: absolute; top: {{ $slide->ButtonPositionTop }}; left: {{ $slide->ButtonPositionLeft }}; {{ $slide->ButtonStyleCSS }}">Ler mais</button>
                @endif
            </div>
            @endif;
        @endforeach
    </div>
</div>
<!-- Wrapper slider -->
</div>
<!-- SLIDER -->

<!-- LAST NEWS -->
<section class="last-news">
    <p><i class="fa fa-newspaper-o fa-1x"></i> Últimas notícias:</p>
    <p class="news news-writting">Noticia de ultima hora sobre o CDC Priscos</p>
</section>
<!-- LAST NEWS -->

<main class="main">
    <section class="home">
        <section class="news">
            @forelse($articles as $article)
                <div class="new">
                    <button target="{{ url('/article/' . $article->Url) }})"><i class="fa fa-chevron-right fa-1x"></i> Ler mais</button>
                    <div style="background: white url('{{ url($article->Image) }}') 50% 50% no-repeat; background-size: 100% 100%;"></div>
                    <p>{{ $article->Title }}</p>
                </div>
            @empty
                <div class="error">
                    Neste momento não temos noticias adicionadas à nossa base de dados!
                </div>
            @endforelse
        </section>

        <!-- SECÇÂO DO ADS -->
        <section class="ads">
            <img src="http://placehold.it/1150x160" border="0" />
        </section>
        <!-- SECÇÂO DO ADS -->

        <!-- SECÇÂO DOS VIDEOS -->
        <section class="videos">
            <h3>Vídeos</h3>
            <hr class="left" />
            <hr class="center" />
            <hr class="right" />
            <div class="videos">
                @forelse($videos as $video)
                    <div class="video">
                        <iframe src="{{ $video->Url }}?modestbranding=1autoplay=0&showinfo=0&controls=0&rel=0&autohide=1;" frameborder="0" allowfullscreen></iframe>
                        <div class="video-caption">{{ $video->Title }}</div>
                    </div>
                @empty
                    <div class="error">
                        Neste momento não temos vídeos adicionadas à nossa base de dados!
                    </div>
                @endforelse
            </div>
            <div class="buttons">
                <button class="button button-videos-prev"><i class="fa fa-angle-left fa-fw fa-1x"></i></button>
                <button class="button button-videos-next"><i class="fa fa-angle-right fa-fw fa-1x"></i></button>
            </div>
        </section>
        <!-- SECÇÂO SOCIAL MEDIA -->
        <section class="social">
            <h3>Social Media</h3>
            <div class="search">
                <hr />
                <div class="buttons">
                    <button>Tudo</button>
                    <button><i class="fa fa-facebook-f fa-fw"></i></button>
                    <button><i class="fa fa-twitter fa-fw"></i></button>
                    <button><i class="fa fa-google-plus fa-fw"></i></button>
                    <button><i class="fa fa-play fa-fw"></i></button>
                </div>
                <input placeholder="Pesquisar" name="input-social-search" type="text" />
            </div>
            <div class="social-post">
                <img src="https://images1-focus-opensocial.googleusercontent.com/gadgets/proxy?container=focus&resize_w=260&refresh=86400&url=https%3A%2F%2Fpbs.twimg.com%2Fmedia%2FCdryotXWwAIzX2u.jpg" border="0" />
                <p class="post">Posted on facebook, making social news !</p>
                <p class="page">
                    <a href="#">CDC PRISCOS</a><br />
                    <span class="dateofpost">3h</span>
                </p>
            </div>
            <div class="buttons">
                <button class="button button-more-socials"><img src="{{ url('images/shapes.png') }}" border="0" /></button>
            </div>
        </section>
        <!-- SECÇÂO SOCIAL MEDIA -->

        <!-- SECÇÂO DO ADS -->
        <section class="ads">
            <img src="http://placehold.it/1150x160" border="0" />
        </section>
        <!-- SECÇÂO DO ADS -->

        <!-- SECÇÂO FOOTER -->
        <section class="footer">
            <hr><div class="branding"></div><hr /><br />
            <section class="partners">
                <div class="partners-branding">

                </div>
            </section>
        </section>
        <!-- SECÇÂO FOOTER -->
    </section>
</main>
@yield('footer')