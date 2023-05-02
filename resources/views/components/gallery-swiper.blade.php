@php
    $thumbnail = $thumbnail[0] ?? false;
    $video = $video ?? false;
@endphp

<div class="gallery-swiper overflow-hidden">
    <div class="swiper-wrapper">

        <!--@if ($video)
            <a href="{{ $video }}" data-fancybox="gallery" class="d-block video-slide swiper-slide">
                @if ($thumbnail)
                    <img class="w-100 h-100 object-fit-cover" data-src="{{ $thumbnail->url() }}"alt="{{ $thumbnail->alt }}" title="{{ $thumbnail->description }}">
                    <div class="loader position-absolute top-0 start-0 w-100 h-100 d-flex flex-column align-items-center justify-content-center">
                        <div class="spinner-border fs-4 text-secondary"></div>
                        <span class="fw-normal text-secondary">
                            Carregando imagem...
                        </span>
                    </div>
                @endif
                <div class="position-absolute top-0 start-0 d-flex align-items-center justify-content-center h-100 w-100">
                    <svg class="play" width="1em" height="1em" viewBox="0 0 120 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="60" cy="60" r="59" stroke="white" stroke-width="2"></circle>
                        <path d="M87 60L46.5 83.3827L46.5 36.6173L87 60Z" fill="transparent" stroke="white" stroke-width="2"></path>
                    </svg>
                </div>
            </a>
        @endif-->
@foreach (range(0,5) as $item)
            <a href="#" data-fancybox="gallery" class="d-block swiper-slide">
                <div class="ratio ratio-15x1">
                    <img class="w-100 h-100 object-fit-cover rounded-20" src="{{ asset("front/images/backgrounds/empresa-swiper.png") }}" alt="">
                </div>
                <!--<div class="loader position-absolute top-0 start-0 w-100 h-100 d-flex flex-column align-items-center justify-content-center">
                    <div class="spinner-border fs-4 text-secondary"></div>
                    <span class="fw-normal text-secondary">
                        Carregando imagem...
                    </span>
                </div>-->
            </a>
@endforeach
    </div>
    <div class="swiper-button-prev start--5 bg-warning rounded-circle">
        <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M15 8L1 8M1 8L8 15M1 8L8 1" stroke="white" stroke-width="1.2"/>
        </svg>
    </div> 
    <div class="swiper-button-next end--5 bg-warning rounded-circle">
        <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 8H14M14 8L7 1M14 8L7 15" stroke="white" stroke-width="1.2"/>
        </svg>
    </div> 
    <!--<div class="swiper-pagination h-auto"></div>-->
</div>
