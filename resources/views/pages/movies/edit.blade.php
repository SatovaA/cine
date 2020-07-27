@extends('layouts.app')

@section('style')
@endsection

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Actores</h6>
            </div>
            <div class="card-body">
                <form action="{{route('put_update_actor')}}" method="POST">
                    @csrf
                    <input type="hidden" name="idActor" value="{{$actor->id}}">
                    <input type="hidden" name="_method" value="PUT">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nombre</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{$actor->name}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Apellido</label>
                        <input type="text" class="form-control" id="surname" name="surname" value="{{$actor->surname}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Estado</label>
                        <select class="form-control" id="status" name="status" required>
                            @if($actor->status == 1)
                                <option value="1" selected>Activo</option>
                                <option value="0">Inactivo</option>
                            @else
                                <option value="1">Activo</option>
                                <option value="0" selected>Inactivo</option>
                            @endif
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Fin Page Content -->

@endsection

@section('script')

@endsection


