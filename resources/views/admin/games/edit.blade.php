@extends('layouts.admin')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Editar Juegos</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <form method="POST" action="{{ route('admin.games.update', $game->id) }}">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="name" class="required">Nombre</label>
                                    <input id="name" name="name" type="text" class="form-control"
                                        placeholder="Ingrese Nombre del juego" value="{{ old('name', $game->name) }}">
                                    @if ($errors->has('name'))
                                        <span class="text-danger">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <div class="mb-4">
                                        <label for="description"
                                            class="required block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descripcion</label>
                                        <textarea id="description" name="description" rows="6" class="form-control"
                                            value ="{{ old('description', $game->description) }}" placeholder="Descripcion del juego...."></textarea>
                                        @if ($errors->has('email'))
                                            <span class="text-danger">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="image" class="required">Portada </label>
                                    <input id="image" name="image" type="file" class="form-control"
                                        value="{{ old('Portada', $game->image) }}"
                                        accept=".jfif,.pjpeg,.jpeg,.pjp,.jpg,.png,.heic,heif">
                                    @if ($errors->has('password'))
                                        <span class="text-danger">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="gender" class="required">Genero </label>
                                    <input id="gender" name="gender" type="text" class="form-control" value="{{old('Genero', $game->gender)}}" placeholder="Genero del juego">
                                </div>
                                <div class="form-group">
                                    <label for="price" class="required">Precio </label>
                                    <input id="price" name="price" type="double" class="form-control" value="{{old('Precio', $game->price)}}" placeholder="Precio del juego">
                                </div>
                                <div class="form-group">
                                    <label for="stock" class="required">Cantidad </label>
                                    <input id="stock" name="stock" type="integer" class="form-control" value="{{old('Cantidad', $game->stock)}}" placeholder="Cantidad">
                                </div>
                                <div class="row d-print-none mt-2">
                                    <div class="col-12 text-right">
                                        <a class="btn btn-danger" href="{{route('admin.games.index')}}">
                                            <i class="fa fa-fw fa-lg fa-arrow-left"></i>
                                            Regresar
                                        </a>
                                        <button class="btn btn-success" type="submit">
                                            <i class="fa fa-fw fa-lg fa-check-circle"></i>Guardar
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
