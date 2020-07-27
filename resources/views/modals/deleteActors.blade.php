<div class="modal" tabindex="-1" role="dialog" id="delete_actors_{{$actor->id}}">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Eliminar actor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>¿Está seguro de eliminar el actor?</p>
            </div>
            <div class="modal-footer">
                <a href="{{route('delete_actor',$actor->id)}}" class="btn btn-primary">Guardar</a>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
