@extends('adminlte::page')

@section('title', 'Montechelo')

@section('content_header')
<h1>Montechelo</h1>
@stop

@section('content')
<p>HOLA DESDE LA VISTA PERSONAS EDITAR</p>
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
        {!! Form::model($persona,['route' => ['admin.personas.update',$persona], 'method' => 'put']) !!}

        <!--0 vamos a escribir los campos que necesitamos en los formularios -->
        <div class="form-group col-md-6">
            {!! Form::label('sexo','Sexo : ') !!}<br>
            
            {!! Form::radio('sexo','Femenino', ['class' => 'form-control']) !!}<span>   Femenino</span>
            {!! Form::radio('sexo','Masculino', ['class' => 'form-control']) !!}<span>  Masculino</span>

            <!-- Ahora por medio de esta directiva de blade vamos a imprimir el mensaje de validación si existe un error al enviar el campo descripción -->
            @error('sexo')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <!--001 vamos a escribir los campos que necesitamos en los formularios -->
        <div class="form-group col-md-6">
            {!! Form::label('rol','Tipo de usario') !!}
            {!! Form::text('rol', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el role del Usuario']) !!}

            <!-- Ahora por medio de esta directiva de blade vamos a imprimir el mensaje de validación si existe un error al enviar el campo name -->
            @error('name')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <!--1 vamos a escribir los campos que necesitamos en los formularios -->
        <div class="form-group">
            {!! Form::label('name','Nombre') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del Usuario']) !!}

            <!-- Ahora por medio de esta directiva de blade vamos a imprimir el mensaje de validación si existe un error al enviar el campo name -->
            @error('name')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <!--2 vamos a escribir los campos que necesitamos en los formularios -->
        <div class="form-group">
            {!! Form::label('cedula','Cédula') !!}
            {!! Form::number('cedula', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el número de su cedula']) !!}

            <!-- Ahora por medio de esta directiva de blade vamos a imprimir el mensaje de validación si existe un error al enviar el campo name -->
            @error('cedula')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <!--3 vamos a escribir los campos que necesitamos en los formularios -->
        <div class="form-group">
            {!! Form::label('email','Email') !!}
            {!! Form::email('email',null, ['class' => 'form-control', 'placeholder' => 'Ingrese el email']) !!}

            <!-- Ahora por medio de esta directiva de blade vamos a imprimir el mensaje de validación si existe un error al enviar el campo descripción -->
            @error('email')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <!--4 vamos a escribir los campos que necesitamos en los formularios -->
        <div class="form-group">
            {!! Form::label('fecha','Fecha de nacimiento') !!}
            {!! Form::date('fecha',\Carbon\Carbon::now(), ['class' => 'form-control', 'placeholder' => 'Ingrese su fecha de nacimiento']) !!}

            <!-- Ahora por medio de esta directiva de blade vamos a imprimir el mensaje de validación si existe un error al enviar el campo descripción -->
            @error('fecha')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        
        <!--5 vamos a escribir los campos que necesitamos en los formularios -->
        <div class="form-group">
            {!! Form::label('area','Área') !!}
            {!! Form::text('area',null, ['class' => 'form-control', 'placeholder' => 'Área de trabajo']) !!}

            <!-- Ahora por medio de esta directiva de blade vamos a imprimir el mensaje de validación si existe un error al enviar el campo descripción -->
            @error('area')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <!--6 vamos a escribir los campos que necesitamos en los formularios -->
        {{-- <div class="form-group">
            {!! Form::label('password','password') !!}
            {!! Form::password('password',null, ['class' => 'form-control', 'placeholder' => 'Digite su password']) !!}

            <!-- Ahora por medio de esta directiva de blade vamos a imprimir el mensaje de validación si existe un error al enviar el campo descripción -->
            @error('password')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div> --}}
        <!--7 vamos a escribir los campos que necesitamos en los formularios -->
        <div class="form-group">
            {!! Form::label('pais','Pais') !!}
            {!! Form::text('pais',null, ['class' => 'form-control', 'placeholder' => 'Pais de residencia']) !!}

            <!-- Ahora por medio de esta directiva de blade vamos a imprimir el mensaje de validación si existe un error al enviar el campo descripción -->
            @error('pais')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <!--8 vamos a escribir los campos que necesitamos en los formularios -->
        <div class="form-group">
            {!! Form::label('comentarios','Comentarios') !!}
            {!! Form::text('comentarios',null, ['class' => 'form-control', 'placeholder' => 'Comentarios/Opcional']) !!}

            <!-- Ahora por medio de esta directiva de blade vamos a imprimir el mensaje de validación si existe un error al enviar el campo descripción -->
            @error('comentarios')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        {!! Form::submit('Modificar Usuario', ['class' => 'btn btn-primary']) !!}
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