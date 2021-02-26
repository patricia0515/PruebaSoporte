@extends('adminlte::page')

@section('title', 'Montechelo')

@section('content_header')
<h1>Gestión de Áreas</h1>
@stop

@section('content')

<!-- Con este if vamos a preguntar si existe algún mensaje de sesión y lo imprimimos por pantalla -->
@if(session('info'))
<div class="alert alert-success">
    <strong>{{session('info')}}</strong>
</div>
@endif

<div class="card">
    <div class="card-header">
        <a class="btn btn-secondary" href="{{route('admin.areas.create')}}">Agregar Área</a>
    </div>
    <div class="card">
        <div class="card-header">
            <div class = "card-body" > 
                <form action = "{{route ('importAreas')}}" method = "POST" enctype = "multipart / form-data" >   
                    @csrf
                    <input type = "file" name = "file" class = "form-control" >   
                    <br>
                    <button class = "btn btn-success" > Importar datos de áreas </button> 
                    <a class = "btn btn-warning" href = "{{ route('exportAreas') }}"> Generar lista de áreas </a>  
                </form>
            </div>
        </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>DESCRIPCIÓN</th>
                    <th colspan="2"></th><!-- el colspan me esta ocupando dos columnas -->
                </tr>

            </thead>

            <tbody>

                <!-- Conla siguente estructura de control vamos a mostrar en una tabla los registros existentes -->
                @foreach($areas as $area)
                <tr>
                    <td>{{$area->id}}</td>
                    <td>{{$area->name}}</td>
                    <td>{{$area->descripcion}}</td>
                    <td width="10px">
                        <a class="btn btn-primary btn-sm" href="{{route('admin.areas.edit', $area)}}">Actualizar</a>
                    </td>
                    <td width="10px">
                        <!-- no podemos apuntar a la ruta con un enlace, porque los entaces
                        solo hacen peticiones de tipo get y para enviar a la ruta destroy debemos 
                        enviar una petición de tipo delete. Entonces vamos a hacerlo por medio de un formulario  -->
                        <form action="{{route('admin.areas.destroy',$area)}}" method="POST">
                            @csrf
                            <!-- como es un formulario le pasamos el token -->
                            @method('delete')
                            <!-- debemos cambiar el metodo por medio de una directiva de blade para simular la petición de tipo delete  -->
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach

            </tbody>

        </table>


    </div>
    
</div>
@stop