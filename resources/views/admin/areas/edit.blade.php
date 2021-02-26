@extends('adminlte::page')

@section('title', 'Montechelo')

@section('content_header')
<h1>Editar Área</h1>
@stop

@section('content')

<!-- Con este if vamos a preguntar si esxiste algún mensaje de sesión y lo imprimimos por pantalla -->
@if(session('info'))
<div class="alert alert-success">
    <strong>{{session('info')}}</strong>
</div>
@endif
<!-- con laravel collective no necesitamos enviar el token csrf por que el se encarga de agregarlo
    ademas, no debemos poner el metodo old en los input para que se mantenga el valor de los input 
    para que se mantenga el valor de los input en el caso de que falle la validación, tambien cuando
    queramos editar laravel collective se encargar de recuperar la información de la base de datos y ponerla 
    en los input   -->
<div class="card">
    <div class="card-body">
        <!--ponemos la ruta donde vamos a enviar el formulario que para este caso necesitamos acceder al metodo update del controlador AreaController -->
        {!! Form::model($area,['route' => ['admin.areas.update',$area], 'method' => 'put']) !!}


        <!-- vamos a escribir los campos que necesitamos en los formularios -->
        <div class="form-group">
            {!! Form::label('name','Nombre') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del Área']) !!}

            <!-- Ahora por medio de esta directiva de blade vamos a imprimir el mensaje de validación si existe un error al enviar el campo name -->
            @error('name')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="form-group">
            {!! Form::label('descripcion','Descripción') !!}
            {!! Form::text('descripcion',null, ['class' => 'form-control', 'placeholder' => 'Ingrese una descripción']) !!}

            <!-- Ahora por medio de esta directiva de blade vamos a imprimir el mensaje de validación si existe un error al enviar el campo descripción -->
            @error('descripcion')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        {!! Form::submit('Modificar Área', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop