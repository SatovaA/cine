@extends('layouts.app')

@section('style')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
@endsection

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Crear peliculas</h6>
            </div>
            <div class="card-body">
                <form action="{{route('post_store_movie')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nombre pelicula</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Tipo pelicula</label>
                        <select class="form-control" id="type_id" name="type_id" required>
                            <option value="">Seleccione un tipo de pelicula</option>
                            @foreach($typeMovies as $type)
                                <option value="{{$type->id}}">{{$type->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Actores</label>
                        <select class="form-control js-example-basic-single" id="actors_id" name="actors_id[]"
                                data-placeholder="Busqueda actores" multiple class="chosen-select">
                            <option value="">Seleccione un actor</option>
                            @foreach($actors as $actor)
                                <option value="{{$actor->id}}">{{$actor->name.' '.$actor->surname}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Fin Page Content -->

@endsection

@section('script')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });
</script>
@endsection


