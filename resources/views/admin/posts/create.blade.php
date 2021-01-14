<!-- Modal -->
<div class="modal fade" id="mymodal" tabindex="-1" role="dialog" aria-labelledby="exampleModal3Label" aria-hidden="true">
    <form method="post" action="{{ route('admin.posts.store', '#create') }}">
        {{ csrf_field() }}
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h5 class="modal-title" id="exampleModal3Label">Agrega el titulo de tu nueva publicación</h5>
                </div>
                <div class="modal-body">
                    <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                        {{--<label for="title">Titulo de la publicación</label>--}}
                        <input type="text" name="title" id="post-title" class="form-control"
                               value="{{ old('title') }}"
                               placeholder="Ingresa aqui el titulo de la publicacion" autofocus required>
                        {!! $errors->first('title', '<span class="help-block">:message</span>') !!}

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button class="btn btn-primary">Crear Nuevo</button>
                </div>
            </div>
        </div>
    </form>
</div>

@push('scripts')
    <script>
        if (window.location.hash === '#create')
        {
            $('#mymodal').modal('show');
        }
        $('#mymodal').on('hide.bs.modal', function () {
            window.location.hash = '#';
        });
        $('#mymodal').on('shown.bs.modal', function () {
            $('#post-title').focus();
            window.location.hash = '#create';

        });
    </script>
@endpush