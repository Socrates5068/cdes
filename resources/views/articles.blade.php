@extends('layout')
@section('content')
    <div class="section text-center">
        <h2 class="title">Articulos</h2>
        <div class="team">
            <div class="row">
                @foreach($posts as $post)
                    <div class="col-md-4">
                        <div class="team-player">
                            <div class="card card-plain">
                                @if($post->photos->count() === 1)
                                    <div class="col-md-12 ml-auto mr-auto">

                                        <img src="{{ url($post->photos->first()->url) }}" alt="Thumbnail Image" class="img-raised img-fluid">
                                    </div>
                                @elseif($post->photos->count() > 1)
                                    <div class="row justify-content-center">
                                        <div class="col-md-12">
                                            <div class="row">
                                                @foreach($post->photos->take(1) as $photo)
                                                    <div class="col-md-12">
                                                        @if($loop->iteration === 1)
                                                            <div class="overlay">{{ $post->photos->count() }} Imagenes</div>
                                                        @endif
                                                        <img src="{{ url($photo->url) }}" class="img-fluid">
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                @elseif($post->iframe)
                                    <div class="embed-responsive embed-responsive-16by9">
                                        {!! $post->iframe !!}
                                    </div>
                                @endif
                                <h4 class="card-title">
                                    <a class="nav-link" href="blog/{{ $post->url }}" target="_blank">{{ $post->title }}
                                    </a></h4>
                                <span class="text-muted">Autor: {{ $post->owner->name }}</span>
                                <br>
                                <small class="card-description text-muted">{{ $post->published_at->format('d M Y') }} -
                                    <a href="{{ route('categories.show', $post->category) }}">{{ $post->category->name }}
                                    </a>
                                </small>

                                <div class="card-body">
                                    <p class="card-description">
                                        {{ $post->excerpt }}
                                    </p>
                                    <a href="blog/{{ $post->url }}"><button class="btn btn-primary btn-round btn-sm">Leer Más</button></a>
                                </div>
                                <div class="card-footer justify-content-center">
                                    @foreach($post->tags as $tag)
                                        <span class="text-muted ml-1" style="font-size: smaller"><a href="{{ route('tags.show', $tag) }}" style="color:inherit">#{{ $tag->name }}</a></span>
                                    @endforeach
                                    {{--<a href="#pablo" class="btn btn-link">{{ $post->tags }}</a>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{ $posts->links() }}
        </div>
    </div>
@endsection