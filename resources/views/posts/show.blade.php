@extends('layout')
@section('meta-title', $post->title)
@section('meta-description', $post->excerpt)

@section('metas')
    <meta property="og:url"                content="{{ request()->fullUrl() }}" />
    <meta property="og:type"               content="article" />
    <meta property="og:title"              content="{{ $post->title }}" />
    <meta property="og:description"        content="{{ $post->excerpt }}" />
    @if($post->photos->count() === 1)
        <meta property="og:image"              content="https://sedespotosi.com/{{ $post->photos->first()->url }}" />
        <meta property="og:image:secure_url" content="https://sedespotosi.com/{{ $post->photos->first()->url }}" />
    @endif
    <meta property="og:image:width" content="980" />
    <meta property="og:image:height" content="735" />
    <meta property="og:image:alt" content="{{ $post->excerpt }}" />
@endsection
@section('noticia')

    <div id="blog" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-xs-12">

                    <div class="blog-post single-post">
                        @if($post->photos->count() === 1)
                                <a href="{{ url($post->photos->first()->url) }}" class="example-image-link post-img" data-lightbox="single" data-title="{{ $post->title }} ">
                                    <img src="{{ url($post->photos->first()->url) }}" alt="Thumbnail Image" class="img-raised img-fluid">
                                </a>
                        @elseif($post->photos->count() > 1)
						<section class="container-nota">
							<div class="container c-section view-with-slide">
								<article class="nota">
									<div class="swiper-container gallery-top swiper-container-initialized swiper-container-horizontal">
										<!-- Additional required wrapper -->
										<div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
											<!-- Slides -->
											@foreach($post->photos as $photo)
											<div class="swiper-slide swiper-slide-active" style="width: 435px; margin-right: 5px;">
												<div class="swiper-zoom-container image-container" data-swiper-zoom="3">
													<a href="{{ url($photo->url) }}" data-lightbox="galery" data-title="{{ $post->title }}">
														<img src="{{ url($photo->url) }}" alt="" class="img-responsive img-main image-complete" title="">
													</a>
												</div>
											</div>
											@endforeach
										</div>
										<!-- If we need pagination -->
										<div class="swiper-pagination"></div>
										<!-- If we need navigation buttons -->
										<div class="swiper-button-prev swiper-button-disabled" tabindex="0" role="button" aria-label="Previous slide" aria-disabled="true"></div>
										<div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-disabled="false"></div>
										<!-- If we need scrollbar -->
										<!-- <div class="swiper-scrollbar"></div> -->
										<span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
									</div>
									<div class="swiper-container gallery-thumbs swiper-container-initialized swiper-container-horizontal swiper-container-free-mode swiper-container-thumbs">
										<div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
											@foreach($post->photos as $photo)
											<div class="swiper-slide swiper-slide-visible swiper-slide-active swiper-slide-thumb-active" style="width: 105px; margin-right: 5px;">
												<img src="{{ url($photo->url) }}" alt="" class="img-responsive img-main" title="">
											</div>
											@endforeach
										</div>
										<span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
									</div>
								</article>
							</div>
						</section>
                        @elseif($post->iframe)
                            <div class="embed-responsive embed-responsive-16by9">
                                {!! $post->iframe !!}
                            </div>
                        @endif
                        <div class="content">
                            <h2>
                                <a href="{{ $post->url }}">{{ $post->title }}</a>
                            </h2>
                            <ul class="post-meta">
                                <li>{{ optional($post->published_at)->format('M d') }}</li>
                                <li><a href="#">{{ $post->category->name }}</a></li>
                                <li><a href="#">Area</a></li>
                            </ul>
                            <p class="mb-2">{!! $post->body !!}</p>
                            <hr>
                            @include('partials.social-links', ['description' => $post->title])
                        </div>
                    </div>


                </div>
                <div class="col-lg-4 col-md-12 col-xs-12">
                    <div class="sidebar right">
{{--                        <div class="widget">--}}
{{--                            <h3 class="sidebar-title">Buscar Noticia</h3>--}}
{{--                            <div class="search-blog-input">--}}
{{--                                <div class="input">--}}
{{--                                    <input class="form-control" type="text" placeholder="Escriba y presione Enter. " value="">--}}
{{--                                    <i class="lni-search"></i>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="clearfix"></div>--}}
{{--                        </div>--}}
                        <div class="widget">
                            <h3 class="sidebar-title">Más Noticias</h3>
                            <ul class="widget-tabs">
                                @foreach($posts as $po)

                                    <li>
                                        <div class="widget-content">
                                            @if($po->photos->count() >= 1)
                                                <div class="widget-thumb">
                                                    <a href="{{ $po->url }}"><img src="{{ url($po->photos->first()->url) }}" alt=""></a>
                                                </div>
                                            @elseif($po->photos->count() > 1)
                                                <div class="widget-thumb">
                                                    <a href="noticia/{{ $po->url }}"><img src="{{ url($po->photos->first()->url) }}" alt=""></a>
                                                </div>
                                            @endif
                                            <div class="widget-text">
                                                <h5><a href="{{ $po->url }}">{{ $po->title }}</a></h5>
                                                <span>{{ $po->published_at->format('M/d/Y') }}</span>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('styles')
<link href="/css/normalize.css" rel="stylesheet">
<link href="/css/framework.css" rel="stylesheet">
<link href="/css/style.css" rel="stylesheet">
<link href="/css/responsive.css" rel="stylesheet">
{{--<link href="/css/lightbox.min.css" rel="stylesheet">--}}

@endpush

@push('scripts')
    {{--<script id="dsq-count-scr" src="//zendero.disqus.com/count.js" async></script>--}}
    {{--<script src="/js/lightbox-plus-jquery.min.js" type="text/javascript"></script>--}}
@endpush