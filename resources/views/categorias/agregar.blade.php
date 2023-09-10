@extends('layouts/agenda')

@section('tituloPagina', 'Agregar categoria')

@section('contenido')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <h2>Agregar nueva categoria</h2>
                        
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <form action="{{ route('categorias.store') }}" method="POST">
                                @csrf
                                @method('POST')
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" required>
                                <label for="descripcion">Descripcion</label>
                                <textarea name="descripcion" 
                                id="descripcion" 
                                cols="30" 
                                rows="5" class="form-control"></textarea>
                                <br>
                                <button class="btn btn-primary">
                                   <span class="fas fa-plus-square"></span> Agregar
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection