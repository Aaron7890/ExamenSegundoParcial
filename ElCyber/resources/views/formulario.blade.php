@extends('plantilla')
@section('contenido')

@if(session()->has('confirmacion'))
    {!! "<script> Swal.fire('Listo','Tu recuerdo llego al controlador','success')</script>" !!}
    <div class="alert alert-primary alert-dimissible fade show text-center" role="alert">
        <strong>{{session('confirmacion')}}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<h1 class="mt-4 display-1 text-center">Formulario</h1>
<br>
<div class="container mt-5 col-md-6">
    <div>
        <div class="card-header text-center text-primary">
            Bienvenido a ElCyber <i class="bi bi-wechat"></i>
        </div>

        @if($errors->any())
            @foreach($errors->all() as $error)
                <div class="alert alert-warning alert-dimissible fade show text-center" role="alert">
                    <strong>Formulario Incompleto! </strong>{{$error}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endforeach
        @endif

    <div>
        <form method="post" action="guardarFormulario">
            @csrf
            <div>
                <label class="form-label" name="labelUsuario">Usuario: </label>
                <input type="text" class="form-control" name="txtUsuario" value="{{ old('txtUsuario')}}">
                <p class="fw-bold text-danger"> {{$errors->first('txtUsuario')}}</p>
            </div>

            <div>
                <label class="form-label" name="labelNComputadora">No.Computadora: </label>
                <textarea class="form-control" name="NComputadora" row="3" value="{{ old('NComputadora')}}"></textarea>
                <p class="fw-bold text-danger"> {{$errors->first('NComputadora')}}</p>
            </div>

            <div>
                <label class="form-label" name="labelTiempo">Tiempo: </label>
                <textarea class="form-control" name="txtTiempo" row="3" value="{{ old('txtTiempo')}}"></textarea>
                <p class="fw-bold text-danger"> {{$errors->first('txtTiempo')}}</p>
            </div>

            <div>
                <label class="form-label" name="labelFecha">Fecha: </label>
                <textarea type="date" class="form-control" name="dFecha" row="3" value="{{ old('dFecha')}}"></textarea>
                <p class="fw-bold text-danger"> {{$errors->first('dFecha')}}</p>
            </div>
        </div>
        <div>
            <button type="submit" name="btnGuardar">Guardar</button>
        </div>
        </form>
    </div>
</div>
@stop