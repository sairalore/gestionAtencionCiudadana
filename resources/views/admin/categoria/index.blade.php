@extends('theme/'.$theme.'/layout')
@section('titulo')
Categorías
@endsection
@section('contenido')
<div class="row">
    <div class="col-lg-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Categorías</h3>
            </div>
            <div class="box-body table-responsive no-padding">              
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categorias as $cat)
                        <tr>
                            <td>{{$cat->id}}</td>
                            <td>{{$cat->nombre}}</td>
                            <td></td>
                        </tr>
                        @endforeach
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection