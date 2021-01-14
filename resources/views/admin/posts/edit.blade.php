@extends('admin.layout')

@section('header')
    <h1>
        Artículo
        <small>Crear Nuevo</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li><a href="{{ route('admin.posts.index') }}"><i class="fa fa-list"></i> Artículos</a></li>
        <li class="active">Crear</li>
    </ol>
@endsection

@section('content')
    <div class="row">
        @if($post->photos->count())
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-body">

                        @foreach($post->photos as $photo)
                            <form method="post" action="{{ route('admin.photos.destroy', $photo) }}">
                                {{ method_field('DELETE') }} {{ csrf_field() }}
                                <div class="col-md-1">
                                    <button class="btn btn-danger btn-xs" style="position: absolute"><i class="fa fa-remove"></i></button>
                                    <img class="img-responsive" src="{{ url($photo->url) }}" alt="">
                                </div>
                            </form>
                        @endforeach
                    </div>
                </div>
            </div>
        @endif
        <form method="post" action="{{ route('admin.posts.update', $post) }}">
            {{ csrf_field() }} {{ method_field('PUT') }}
            <div class="col-md-8">
                <div class="box box-primary">

                    <div class="box-body">
                        <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                            <label for="title">Titulo de la publicación</label>
                            <input type="text" name="title" id="title" class="form-control"
                                   value="{{ old('title', $post->title) }}"
                                   placeholder="Ingresa aqui el titulo de la publicacion">
                            {!! $errors->first('title', '<span class="help-block">:message</span>') !!}

                        </div>
                        <div class="form-group {{ $errors->has('body') ? 'has-error' : '' }}">
                            <label for="editor">Contenido de la publicación</label>
                            <textarea name="body" class="form-control" id="editor" placeholder="Ingresa el contenido completo de la publicacion" rows="10">{{ old('body', $post->body) }}</textarea>
                            {!! $errors->first('body', '<span class="help-block">:message</span>') !!}
                        </div>
                        <div class="form-group {{ $errors->has('iframe') ? 'has-error' : '' }}">
                            <label for="editor">Contenido embebido (iframe)</label>
                            <textarea name="iframe" class="form-control" id="editor" placeholder="Ingresa contenido embebido (iframe) de audio o video" rows="2">{{ old('iframe', $post->iframe) }}</textarea>
                            {!! $errors->first('iframe', '<span class="help-block">:message</span>') !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box box-primary">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="datepicker">Fecha de Publicación</label>

                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input name="published_at"
                                       value="{{ old('published_at', $post->published_at ? $post->published_at->format('m/d/Y') : null) }}"
                                       type="text" class="form-control pull-right" id="datepicker" required>
                            </div>
                            <!-- /.input group -->
                        </div>
                        <div class="form-group {{ $errors->has('category') ? 'has-error' : '' }}">
                            <label for="category">Categorias</label>
                            <select name="category_id" id="category" class="form-control select2" required>
                                <option value="">Selecciona una Categoria</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}"
                                            {{ old('category_id', $post->category_id) == $category->id ? 'selected' : '' }}
                                    >{{ $category->name }}</option>
                                @endforeach
                            </select>
                            {!! $errors->first('category_id', '<span class="help-block">:message</span>') !!}
                        </div>
                        <div class="form-group {{ $errors->has('tags') ? 'has-error' : '' }}">
                            <label for="tags">Etiquetas</label>
                            <select class="form-control select2"
                                    name="tags[]"
                                    id="tags"
                                    multiple="multiple"
                                    data-placeholder="Selecciona una o más etiquetas"
                                    style="width: 100%;"
                                    required>
                                @foreach($tags as $tag)
                                    <option {{ collect(old('tags', $post->tags->pluck('id')))->contains($tag->id) ? 'selected' : '' }} value="{{ $tag->id }}">{{ $tag->name }}</option>
                                @endforeach
                            </select>
                            {!! $errors->first('tags', '<span class="help-block">:message</span>') !!}
                        </div>
                        <div class="form-group {{ $errors->has('excerpt') ? 'has-error' : '' }}">
                            <label for="excerpt">Extracto de la publicación</label>
                            <textarea name="excerpt" class="form-control" id="excerpt" placeholder="Ingresa el extracto de la publicacion">{{ old('excerpt', $post->excerpt) }}</textarea>
                            {!! $errors->first('excerpt', '<span class="help-block">:message</span>') !!}
                        </div>
                        <div class="form-group">
                            <div class="dropzone"></div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">
                                Guardar Publicación
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </form>
        </div>
    </div>

@endsection

@push('styles')
<!-- DroopZone -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css">
<!-- bootstrap datepicker -->
<link rel="stylesheet" href="/adminlte/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
<!-- Select2 -->
<link rel="stylesheet" href="/adminlte/bower_components/select2/dist/css/select2.min.css">
@endpush

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
<script src="https://cdn.ckeditor.com/4.10.0/standard/ckeditor.js"></script>
<!-- bootstrap datepicker -->
<script src="/adminlte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Select2 -->
<script src="/adminlte/bower_components/select2/dist/js/select2.full.min.js"></script>
<script>
    //Date picker
    $('#datepicker').datepicker({
        autoclose: true
    });
    $('.select2').select2({
        tags: true
    });
    CKEDITOR.replace( 'editor' );
    CKEDITOR.config.height = 330;
    var myDropzone =new Dropzone('.dropzone',{
        url: '/admin/posts/{{ $post->url }}/photos',
        acceptedFiles: 'image/*',
        paramName: 'photo',
        maxFilesize: 2,
        headers:{
           'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        dictDefaultMessage: 'Arrastra las imagenes aquí para subirlas'
    });
    myDropzone.on('error', function (file, res) {
//        console.log(res.errors.photo[0]);
        var msg = res.errors.photo[0];
        $('.dz-error-message:last > span').text(msg);
    });
    Dropzone.autoDiscover = false;
</script>
@endpush


