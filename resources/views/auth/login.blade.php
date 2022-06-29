@extends('layouts.app-slim')

@section('content')
    <main class="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 offset-4 border-1 mt-5">
                    <div class="container py-4">
                        <div class="col-md-12">
                            <button class="btn btn-social btn-facebook">
                                Iniciar sessão com o Facebook
                            </button>
                            <button class="btn btn-social btn-twitter">
                                Iniciar sessão com o Twitter
                            </button>
                            <button class="btn btn-social btn-google">
                                Iniciar sessão com o Google
                            </button>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-3 offset-1"><hr /></div>
                                <div class="col-md-2 offset-1">ou</div>
                                <div class="col-md-3"><hr /></div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <input class="form-control input-login-register" type="text" placeholder="Endereço de e-mail" />
                            <input class="form-control input-login-register mt-3" type="password" placeholder="Palavra-passe" />
                            <button class="btn btn-social btn-email mt-2">Iniciar sessão com o email</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
