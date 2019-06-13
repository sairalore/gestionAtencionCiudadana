@extends('layouts.app')
<!--@section('titulo')
Administrar Servicio
@endsection-->
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Administración Servicio</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{route('servicio.crear')}}"> Crear Servicio</a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif

        <table class="table table-bordered">
            <tr>
                <th>Nombre</th>
                <th>Código</th>
                <th>Categoría</th>
                <th>Subcategoría</th>
                <th width="280px">Acción</th>
            </tr>
            @foreach ($servicios as $srv)
            <tr>
                <td>{{ $servicios->nombre_servicio}}</td>
                <td>{{ $servicios->codigo}}</td>
                <td>{{ $servicios->categoria}}</td>
                <td>{{ $servicios->subcategoria}}</td>
                <td>
                    <form action="{{ route('servicio.borrar',$srv->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('servicio.consultar',$srv->id) }}">Consultar</a>
                        <a class="btn btn-primary" href="{{ route('servicio.editar',$srv->id) }}">Editar</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div> 
</div> 
@endsection


