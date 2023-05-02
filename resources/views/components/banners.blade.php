
    <section class="banner ratio ratio-6x9 ratio-md-16x9 ratio-xl-21x9 overflow-hidden">
        <div class="banner-swiper">
            <div class="swiper-wrapper">
                @foreach (range(1,5) as $banner)
                    <div class="swiper-slide banner-slide position-relative">

                        <picture>
                            {{-- Desktop --}}
                            <source srcset="{{ asset("front/images/backgrounds/banner.png") }}" media="(min-width: 767px)">
                                <div class="conteudo-banner position-absolute top-50 start-50 text-center w-100">
                                    <h2 class="text-white h2 p-400">Conheça nosso incrível buffet</h2>
                                    <p class="text-white mt-1 p-16 p-400">Variedade, qualidade e muito sabor!</p>
                                    <button class="btn btn-outline-light mt-1 p-16 p-400">Saiba mais
                                        <svg class="ms-0-50 mb-0-25" width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 7.5H14M14 7.5L7 0.5M14 7.5L7 14.5" stroke="white" stroke-width="1.2"/>
                                        </svg>                                            
                                    </button>
                                </div>
                            {{-- Mobile --}}
                            <img class="object-fit-cover w-100 h-100" src="{{ asset("front/images/backgrounds/banner.png") }}" alt="">
                        </picture>
                        
                        @php /*
                        @if ($banner->link_1)
                            <a href="{{ $banner->link_1 }}" class="stretched-link"></a>
                        @endif*/
                        @endphp

                    </div>
                @endforeach
            </div>
            <div class="swiper-button-prev bg-laranja rounded-circle top-55 start-5">
                <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15 8L1 8M1 8L8 15M1 8L8 1" stroke="white" stroke-opacity="0.3" stroke-width="1.2"/>
                </svg>                                    
            </div>
            <div class="swiper-button-next bg-laranja rounded-circle top-55 end-5">
                <svg class="" width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 8H14M14 8L7 1M14 8L7 15" stroke="white" stroke-width="1.2"/>
                </svg>                    
            </div>
        </div>
    </section>
