@extends('layouts.app')
@section('title','NovaTV - Ver usuario')


@section('content')
    
    <div class="row px-4 py-4">
        <div class="col-md-10 offset-md-1">
            <h1 style="color: #336180;">
                <i class="fa fa-search"></i>Ver usuario
            </h1>
            <hr>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ url('home') }}">
                            <i class="fa fa-clipboard-list"></i>
                        Escritorio
                        </a>
                    </li>

                    <li class="breadcrumb-item">
                        <a href="{{ route('users.index') }}">
                            <i class="fa fa-list-alt"></i>
                        Módulo usuarios
                        </a>
                    </li>

                    <li class="breadcrumb-item active" aria-current="page">
                            <i class="fa fa-search"></i>
                        Ver usuario
                    </li>
                </ol>
            </nav>

            <form>
                <div class="mb-3">
                    <label for="name">Nombre completo</label>

                    <div class="">
                        <input id="fullname" type="text" class="form-control @error('fullname') is-invalid @enderror" name="fullname" value="{{ $user->fullname }}" disabled>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="email">Email</label>

                    <div class="">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" disabled>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="phone">Teléfono</label>

                    <div class="">
                        <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ $user->phone }}" disabled>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="photo">Foto</label>
                    <div class="text-center my-3">
                        <img id="photo" src="{{ asset($user->photo) }}" alt="no-photo" class="img-thumbmail" id="preview" width="120px">
                    </div>
                </div>

                <div class="mb-3">
                <div class="">
                    <label for="photo">Rol</label>
                    <input id="role" type="text" class="form-control @error('role') is-invalid @enderror" name="role" value="{{ $user->role->name }}" disabled>
                </div>
            </div>


                <div class="d-grid gap-2 mb-3">
                    <a href="{{ route('users.index') }}" class="btn btn-primary btn-block" style="background-color: #336180 "><i class="fa fa-arrow-left mx-2"></i> Volver</a>
                </div>

            </form>

        </div>
    </div>


@endsection