@extends('layouts.app-slim')

@section('content')
    <main class="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 offset-4 border-1 mt-5">
                    <div class="container py-4">
                        <div class="col-md-12">
                            <button class="btn btn-social btn-facebook">Registar-me com o Facebook</button>
                            <button class="btn btn-social btn-twitter">Registar-me com o Twitter</button>
                            <button class="btn btn-social btn-google">Registar-me com o Google</button>
                        </div>
                        @if($mode === "dev")
                            <div class="col-md-12">
                                <button class="btn btn-social btn-github">Registar-me com o Github</button>
                            </div>
                        @endif
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-3 offset-1"><hr /></div>
                                <div class="col-md-2 offset-1">ou</div>
                                <div class="col-md-3"><hr /></div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button class="btn btn-social btn-email">Registar-me com o email</button>
                        </div>
                        <div class="col-md-12 mt-3 py-2">
                            <p class="text-justify">
                                Ao fazer o registo, concorda com os <a href="{{ url('/service-terms') }}">Termos de Serviço</a>,
                                <a href="{{ url('/use-terms') }}}">Termos de utilização</a> e <a href="{{ url('privacy-policy') }}">Politica de Privacidade</a>,
                                dos utilizadores do Portal {{ SITE_OPTION(\App\Helpers\Constants\OptionInterface::SITE_TITLE_VARIABLE) }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
