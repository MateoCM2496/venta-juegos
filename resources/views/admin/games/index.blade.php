@extends('layouts.admin')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-10">
                <h1 class="m-0">Juegos</h1>
            </div>
            <div class="flex items-end justify-end">
                <a>
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
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection