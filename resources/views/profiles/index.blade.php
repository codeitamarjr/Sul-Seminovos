@extends('layouts.app')
@section('content')
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.6/jquery.inputmask.min.js"></script>

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                @include('sidebar')
            </div>

            <div class="col-md-5">
                <div class="card">
                    <div class="card-header">
                        Meu Cadastro
                    </div>
                    <div class="card-body">
                        <x-profiles :profiles="$profiles" :form="true" />
                        <div class="form-group d-flex justify-content-center mt-2">
                            <label for="submit">&nbsp;</label>
                            <a href="{{ route('profiles.edit', auth()->user()->profiles) }}" class="btn btn-primary">Editar
                                Cadastro</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                @if (session('status') === 'password-updated')
                    <div class="alert alert-success">
                        Senha alterada com sucesso!
                    </div>
                @endif
                <form action="{{ route('user-password.update', auth()->user()->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="card">
                        <div class="card-header">
                            Alterar Senha
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="current_password">Senha Atual</label>
                                <input type="password" class="form-control @error('current_password') is-invalid @enderror"
                                    name="current_password" id="current_password">
                                @error('current_password')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col mt-2">
                                        <label for="password">Nova Senha</label>
                                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                                            name="password" id="password">
                                        @error('password')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col mt-2">
                                        <label for="password_confirmation">Confirmar Nova Senha</label>
                                        <input type="password"
                                            class="form-control @error('password_confirmation') is-invalid @enderror"
                                            name="password_confirmation" id="password_confirmation">
                                        @error('password_confirmation')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="form-group d-flex justify-content-center mt-2">
                                <label for="submit">&nbsp;</label>
                                <button class="btn btn-primary">Alterar Senha</button>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
