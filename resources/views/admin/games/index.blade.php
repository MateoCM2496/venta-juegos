@extends('layouts.admin')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-10">
                <h1 class="m-0">Juegos</h1>
            </div>
            <div class="flex items-end justify-end">
                <a href="{{ route('admin.games.create')}}">
                <button class="btn btn-primary">
                    + Nuevo Producto
                </button>
                </a>
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
                        <h5 class="card-title">Lista de juegos disponibles</h5>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Genero</th>
                                <th>Precio</th>
                                <th>Cantidad</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($games as $game)
                            <tr>
                                <td>{{ $game->id }}</td>
                                <td>{{ $game->name }}</td>
                                <td>{{ $game->gender }}</td>
                                <td>{{ $game->price }}</td>
                                <td>{{ $game->stock }}</td>
                                <td>
                                    <a class="btn btn-success" href="{{route('admin.games.edit', $game->id)}}">Editar</a>
                                    <form action="{{ route('admin.games.destroy', $game->id) }}" id="delete_form" method="POST" onsubmit="return confirm('Esta seguro que desea eliminar el registro?')" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-danger" value="Eliminar">
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection