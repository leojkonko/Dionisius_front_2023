@inject('site', 'App\\Services\\SiteService')

<section class="bg-cinza bread">
    <div class="container-start">
        <div class="row g-0">
            <div class="col-lg-4 justify-content-start align-items-center bg-cinza d-none d-lg-flex">
                <nav aria-label="breadcrumb" class=" flex-column gap-0-50">
                    @if ($site->getBreadTitle())
                        <h1 class="h2 p-400 text-success mb-0">
                            {{ $site->getBreadTitle() }}
                        </h1>
                    @endif
                    <ul class="breadcrumb ps-lg-0-25">
                        @foreach ($site->getBreadCrumbs() as $bread)
                            @if ($loop->last)
                                <li class="breadcrumb-item active text-decoration-none text-secondary" aria-current="{{ $bread->getText() }}">
                                    <a href="" class="text-decoration-none text-secondary">{{ $bread->getText() }}</a>
                                </li>
                            @else
                                <li class="breadcrumb-item">
                                    <a class="text-decoration-none text-secondary" href="{{ $bread->getUrl() }}">{{ $bread->getText() }}</a>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </nav>
            </div>
            <div class="col-lg-8">
                <div class="ratio ratio-21x9 ratio-sm-30x9">
                    <div class="col-lg-4 d-flex justify-content-center align-items-center z-index-1 d-lg-none">
                        <nav aria-label="breadcrumb" class=" flex-column gap-0-50">
                            @if ($site->getBreadTitle())
                                <h1 class="h2 p-400 text-success mb-0">
                                    {{ $site->getBreadTitle() }}
                                </h1>
                            @endif
                            <ul class="breadcrumb ps-lg-0-25">
                                @foreach ($site->getBreadCrumbs() as $bread)
                                    @if ($loop->last)
                                        <li class="breadcrumb-item active text-secondary" aria-current="{{ $bread->getText() }}">{{ $bread->getText() }}</li>
                                    @else
                                        <li class="breadcrumb-item">
                                            <a class="text-secondary" href="{{ $bread->getUrl() }}">{{ $bread->getText() }}</a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </nav>
                    </div>
                    <img class="w-100 h-100 object-fit-cover" src="{{ asset('front/images/backgrounds/breadcrumb.png') }}" alt="Logo {{ env('APP_NAME') }}">
                    <img class="w-100 h-100 object-fit-cover bg-cinza-breadcrumb" src="{{ asset('front/images/backgrounds/breadcrumb2.png') }}" alt="Logo {{ env('APP_NAME') }}">
                </div>
            </div>
        </div>
    </div>
</section>
