@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('servicio.index') }}"> Regresar</a>
        </div>
    </div>
</div>
@if ($errors->any())
<div class="alert alert-danger">
    <strong>Error!</strong> al registrar servicio.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<div>
<!-- Horizontal Form -->
<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title">Registrar servicio</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form action="{{ route('servicio.guardar') }}" method="POST">
        @csrf
        <div class="box-body">
            <div class="form-group">
                <label for="txtServicio" class="col-sm-2 control-label">Nombre servicio:</label>
                <div class="col-sm-10">
                    <input type="text" name="nombre_servicio" class="form-control" id="txtServicio" placeholder="Nombre">
                </div>
            </div>
            <div class="form-group">
                <label for="txtCodigo" class="col-sm-2 control-label">Código:</label>
                <div class="col-sm-10">
                    <select class="form-control select2" style="width: 100%;">
                        <option selected="selected" value="{{}}"></option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="txtCategoria" class="col-sm-2 control-label">Categoría:</label>
                <div class="col-sm-10">
                    <input type="text" name="categoria" class="form-control" id="txtCategoria" placeholder="Categoría">
                </div>
            </div>
            <div class="form-group">
                <label for="txtSubcategoria" class="col-sm-2 control-label">Subcategoría:</label>
                <div class="col-sm-10">
                    <input type="text" name="subcategoria" class="form-control" id="txtSubcategoria" placeholder="Subcategoría">
                </div>
            </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <button type="submit" class="btn btn-default">Cancelar</button>
            <button type="submit" class="btn btn-primary pull-right">Aceptar</button>
        </div>
        <!-- /.box-footer -->
    </form>
</div>
</div>
@endsection
