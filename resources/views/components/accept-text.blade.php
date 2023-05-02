@inject('site', 'App\\Services\\SiteService')

@if ($site->hasPrivacy())
    <p class="p-400 p-16">
        Li e aceito a <a class="text-decoration-none" href="{{ route_lang('privacy') }}" target="_blank">política de privacidade</a> da {{ env('APP_NAME') }}    
    </p>   
@else
    <p class="p-400 p-16">
        Aceito com a utilização de meus dados pela {{ env('APP_NAME') }}
    </p>
@endif