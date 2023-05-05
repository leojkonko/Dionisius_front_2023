<footer id="footer" class="overflow-hidden rounded-90-top" style="background-image: url({{ asset('front/images/backgrounds/footer.png') }});">
    <div class="container">
        <div class="row gy-2 gy-lg-0 text-center text-lg-start align-items-center justify-content-between py-2 py-lg-4">
            <div class="col-lg-4 d-flex justify-content-center align-items-center d-lg-none pt-1">
                <a href="{{ route_lang('home') }}" class="d-block logo m-auto m-lg-0">
                    <img class="object-fit-contain w-100 h-100" src="{{ asset('front/images/logos/logoa.svg') }}" title="Página principal" alt="Logo {{ env('APP_NAME') }}">
                </a>
            </div>
            <div class="col-lg-2 d-flex justify-content-center align-items-center">
                <ul class="list-unstyled">
                    <li class="mt-1">
                        <a href="{{ route('company') }}" class="text-decoration-none text-white p-16 p-400">O restaurante</a>
                    </li>
                    <li class="mt-1">
                        <a href="{{ route('products') }}" class="text-decoration-none text-white p-16 p-400">Buffet</a>
                    </li>
                    <li class="mt-1">
                        <a href="{{ route('event') }}" class="text-decoration-none text-white p-16 p-400">Eventos</a>
                    </li>
                    <li class="mt-1">
                        <a href="{{ route('contact') }}" class="text-decoration-none text-white p-16 p-400">Contato</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-2 d-flex justify-content-center align-items-start flex-column mb-lg-3">
                <div class="w-100 text-lg-start text-center">
                    <p class="p-400 p-16 text-white">Acesse nossas redes sociais:</p>
                    <div class="d-flex gap-0-50 w-100 justify-content-lg-start justify-content-center redes-sociais">
                        <a href="" target="_blank" class="border border-warning p-0-50 rounded-circle">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M24 12.0729C24 18.0983 19.606 23.0935 13.87 24V15.5862H16.659L17.19 12.1051H13.87V9.84649C13.87 8.89373 14.334 7.96613 15.82 7.96613H17.329V5.00222C17.329 5.00222 15.959 4.7668 14.65 4.7668C11.916 4.7668 10.13 6.43387 10.13 9.4511V12.1041H7.091V15.5852H10.13V23.999C4.395 23.0915 0 18.0973 0 12.0729C0 5.40566 5.373 0 12 0C18.627 0 24 5.40465 24 12.0729Z" fill="#FFAC30"/>
                            </svg>                            
                        </a>
                        <a href="" target="_blank" class="border border-warning p-0-50 rounded-circle">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20.4496 20.4505H16.8933V14.8811C16.8933 13.5529 16.8697 11.8439 15.0436 11.8439C13.1915 11.8439 12.9077 13.2904 12.9077 14.7853V20.4505H9.35259V8.9971H12.767V10.5618H12.8143C13.5109 9.37202 14.8047 8.6612 16.1825 8.71206C19.7873 8.71206 20.4508 11.0834 20.4508 14.1668L20.4496 20.4505ZM5.33977 7.43118C4.19968 7.43118 3.27601 6.50747 3.27601 5.36733C3.27601 4.2272 4.19968 3.30349 5.33977 3.30349C6.47987 3.30349 7.40354 4.2272 7.40354 5.36733C7.40354 6.50747 6.47987 7.43118 5.33977 7.43118ZM7.11733 20.4505H3.55748V8.9971H7.11733V20.4505ZM22.2224 0.00134427H1.77046C0.804218 -0.00930019 0.0118267 0.76538 0 1.73166V22.2684C0.0118267 23.2358 0.804218 24.0105 1.77046 23.9999H22.2224C23.1911 24.0117 23.987 23.237 24 22.2684V1.73048C23.9858 0.761832 23.1899 -0.0128484 22.2224 0.000161495" fill="#FFAC30"/>
                            </svg>                                                       
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex justify-content-center align-items-center d-none d-lg-flex">
                <a href="{{ route_lang('home') }}" class="d-block logo m-auto m-lg-0">
                    <img class="object-fit-contain w-100 h-100" src="{{ asset('front/images/logos/logoa.svg') }}" title="Página principal" alt="Logo {{ env('APP_NAME') }}">
                </a>
            </div>
            <div class="col-lg-4 d-flex justify-content-center align-items-center">
                <ul class="list-unstyled">
                    <li class="mt-1">
                        <a href="" target="_blank" class="text-decoration-none text-white infos">
                            <svg class="me-1" width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 0C3.58297 0 0 3.23436 0 7.22163C0 13.6161 8 20 8 20C8 20 16 13.6161 16 7.22163C16 3.23436 12.417 0 8 0ZM8 10.3287C6.09692 10.3287 4.558 8.93955 4.558 7.22163C4.558 5.50371 6.09692 4.11453 8 4.11453C9.90308 4.11453 11.442 5.50371 11.442 7.22163C11.442 8.93955 9.90308 10.3287 8 10.3287Z" fill="#FFAC30"/>
                            </svg>
                            Rua Italo Vitor Bersani, 1134 <br> Jardim América, Caxias Do Sul-RS                         
                        </a>
                    </li>
                    <li class="mt-1">
                        <a href="" target="_blank" class="text-decoration-none text-white infos">
                            <svg class="me-1"  width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M18.9669 12.8199C18.4911 12.5892 16.0777 11.4357 15.6358 11.271C15.16 11.1062 14.854 11.0073 14.5141 11.5016C14.1742 11.963 13.2565 13.0506 12.9505 13.3801C12.6786 13.6767 12.3727 13.7427 11.8968 13.479C11.387 13.2483 9.82338 12.754 7.91989 11.1062C6.45828 9.85385 5.47254 8.27196 5.16662 7.81057C4.89469 7.31623 5.13263 7.08554 5.37057 6.82189C5.6085 6.62416 5.84644 6.26164 6.11837 5.99799C6.3563 5.73435 6.45828 5.53661 6.62823 5.20705C6.79819 4.91045 6.7302 4.61384 6.59424 4.38315C6.49227 4.15246 5.50653 1.77962 5.09864 0.8239C4.69075 -0.098868 4.28286 0.032956 3.97694 0C3.70501 0 3.3651 0 3.02519 0C2.71927 0 2.17542 0.131824 1.73354 0.593208C1.25766 1.08755 0 2.24101 0 4.58088C0 6.92076 1.76753 9.19473 2.00546 9.52429C2.2434 9.85385 5.47254 14.6654 10.4012 16.7417C11.5909 17.236 12.5087 17.5326 13.2225 17.7303C14.4122 18.0928 15.4659 18.0269 16.3156 17.8951C17.2674 17.7633 19.2389 16.7416 19.6468 15.6211C20.0546 14.5336 20.0546 13.5779 19.9187 13.3801C19.8167 13.1824 19.4768 13.0506 18.9669 12.8199Z" fill="#FFAC30"/>
                             </svg>
                                
                             (54) 3028-4800                        
                        </a>
                    </li>
                    <li class="mt-1">
                        <a href="" target="_blank" class="text-decoration-none text-white infos">
                            <svg class="me-1" width="22" height="18" viewBox="0 0 22 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.46565 4.76L10.1145 8.968C10.6641 9.384 11.3511 9.384 11.9008 8.968L17.5496 4.76M1 2.936V15.064C1 16.136 1.71756 17 2.61832 17H19.3817C20.2672 17 21 16.136 21 15.064V2.936C21 1.864 20.2824 1 19.3817 1H2.61832C1.71756 1 1 1.864 1 2.936Z" stroke="#FFAC30" stroke-width="2" stroke-miterlimit="10"/>
                            </svg>
                                
                                
                             eventos@sica.net.br                        
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="py-1 copyright bg-laranja">
        <div class="container">
            <div class="d-flex flex-column flex-lg-row text-center text-lg-start gap-1 justify-content-center align-items-center justify-content-sm-between">
                <small class="small text-white">Copyright &copy{{ date('Y') }} {{ env('APP_NAME') }}. Todos os direitos reservados. CNPJ 00.000.000/0000-00</small>
                <div class="col-12 col-md-6 col-lg-auto">
                    @inject('site', 'App\\Services\\SiteService')
                    @if ($site->hasPrivacy())
                        <a href="{{ route_lang('privacy') }}" class="small text-white" title="Política de privacidade">Política de privacidade</a>
                    @elseif ($site->useLgpd())
                        <button onClick="ElliteLgpdApi.showModal()" class="btn btn-link p-0 text-white text-decoration-none">Gerenciar preferências de cookies</button>
                    @endif
                </div>
                <div class="col-12  col-md-6 col-lg-auto d-flex justify-content-center justify-content-lg-end">
                    <a href="https://www.ellitedigital.com.br" target="_blank">
                        <svg width="78" height="17" viewBox="0 0 78 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.168 14.0833H5.42779C4.35236 14.0833 3.47947 13.2078 3.47947 12.1291V9.57514C3.47947 8.49646 4.35236 7.62095 5.42779 7.62095H13.2162C14.7136 7.62095 15.9265 6.40442 15.9265 4.9025C15.9265 4.79366 15.8397 4.70417 15.7312 4.70417H4.30654C1.92902 4.70176 0 6.6366 0 9.02129V12.6733C0 15.058 1.92902 16.9928 4.30654 16.9928H6.55385C6.63825 16.9953 6.72264 17.0001 6.80945 17.0001H10.653C12.1504 17.0001 13.3633 15.7836 13.3633 14.2816C13.3633 14.1728 13.2765 14.0833 13.168 14.0833Z" fill="white"/>
                            <path d="M16.5269 0.0170213H14.2796C14.1952 0.0146027 14.1108 0.00976562 14.024 0.00976562H10.1804C8.68301 0.00976562 7.47014 1.2263 7.47014 2.72822C7.47014 2.83705 7.55694 2.92654 7.66545 2.92654H15.4057C16.4811 2.92654 17.354 3.80205 17.354 4.88073V7.43472C17.354 8.51339 16.4811 9.38891 15.4057 9.38891H7.61723C6.11982 9.38891 4.90695 10.6054 4.90695 12.1074C4.90695 12.2162 4.99376 12.3057 5.10226 12.3057H16.5245C18.902 12.3057 20.831 10.3708 20.831 7.98615V4.33414C20.8334 1.95186 18.9068 0.0170213 16.5269 0.0170213Z" fill="white"/>
                            <path d="M42.6917 0H42.3613C40.7434 0 39.434 1.31569 39.434 2.93612V15.2683C39.434 15.3917 39.5353 15.4932 39.6583 15.4932H39.9886C41.6066 15.4932 42.9159 14.1776 42.9159 12.5571V0.224925C42.9159 0.101579 42.8147 0 42.6917 0Z" fill="white"/>
                            <path d="M37.7944 0.0120928H28.0552C25.6729 0.0120928 23.7415 1.94935 23.7415 4.33888V11.164C23.7415 13.5536 25.6729 15.4908 28.0552 15.4908H30.3074C30.3918 15.4932 30.4762 15.4981 30.563 15.4981H34.4114C35.9112 15.4981 37.1265 14.2791 37.1265 12.7772C37.1265 12.6684 37.0397 12.5789 36.9311 12.5789H29.1765C28.0986 12.5789 27.2233 11.7034 27.2233 10.6199V9.20743C27.2233 9.1518 27.2692 9.10585 27.3246 9.10585H32.668C34.1437 9.10585 35.3373 7.90625 35.3373 6.42851C35.3373 6.31968 35.2505 6.23019 35.142 6.23019H27.3246C27.2692 6.23019 27.2233 6.18424 27.2233 6.12861V4.89273C27.2233 3.81164 28.0962 2.9337 29.1765 2.9337H35.277C36.7768 2.9337 37.9921 1.71475 37.9921 0.212833C37.9897 0.0991606 37.9029 0.0120928 37.7944 0.0120928Z" fill="white"/>
                            <path d="M52.561 3.46578H53.9909C54.9024 3.46578 55.6403 2.72571 55.6403 1.8115V0.377294C55.6403 0.169299 55.4715 0 55.2641 0H53.8342C52.9227 0 52.1849 0.740077 52.1849 1.65429V3.08849C52.1849 3.29649 52.3537 3.46578 52.561 3.46578Z" fill="white"/>
                            <path d="M49.0816 0H48.7512C47.1333 0 45.8239 1.31569 45.8239 2.93612V15.2683C45.8239 15.3917 45.9252 15.4932 46.0482 15.4932H46.3785C47.9965 15.4932 49.3058 14.1776 49.3058 12.5571V0.224925C49.3058 0.101579 49.2045 0 49.0816 0Z" fill="white"/>
                            <path d="M72.2154 3.46578C70.3273 3.46578 68.7624 4.08977 67.6894 5.27486C66.7201 6.34386 66.1872 7.8482 66.1872 9.51217C66.1872 12.9973 68.8758 15.6263 72.4396 15.6263C75.6249 15.6263 77.1537 13.6793 77.4358 13.2779C77.4599 13.2416 77.4527 13.1908 77.4213 13.1642L77.3128 13.0723C76.3411 12.2524 75.0269 11.9888 73.8092 12.3491C73.3631 12.4821 72.8327 12.5765 72.2226 12.5765C70.9422 12.5765 69.862 11.8727 69.3604 10.8327H76.6811C77.4093 10.8327 77.9976 10.2426 78 9.51217C77.9976 6.12136 75.4585 3.46578 72.2154 3.46578ZM69.2567 8.32466C69.6474 7.2218 70.6071 6.33419 72.0996 6.33419C74.1203 6.33419 74.7014 7.93043 74.8147 8.32466H69.2567Z" fill="white"/>
                            <path d="M55.4281 4.20828H55.0977C53.4797 4.20828 52.1704 5.52397 52.1704 7.1444V15.2683C52.1704 15.3917 52.2717 15.4932 52.3947 15.4932H52.725C54.343 15.4932 55.6523 14.1776 55.6523 12.5571V4.43321C55.6523 4.30986 55.5534 4.20828 55.4281 4.20828Z" fill="white"/>
                            <path d="M64.5981 3.31825H62.3557V0.522407C62.3557 0.413572 62.305 0.31683 62.2206 0.251529C62.1338 0.186228 62.0253 0.16688 61.924 0.198321L61.355 0.370038C60.0457 0.766681 59.1631 1.94935 59.1462 3.31583H57.4969C57.3113 3.31583 57.1618 3.46579 57.1618 3.65201V6.08266C57.1618 6.26889 57.3113 6.41884 57.4969 6.41884H59.1462V11.5534C59.1462 13.1642 59.5827 14.3009 60.4435 14.9346C61.068 15.3941 62.0229 15.6238 63.2936 15.6238C63.706 15.6238 64.1496 15.5997 64.6271 15.5513C64.8007 15.5344 64.9333 15.3892 64.9333 15.2151V12.9344C64.9333 12.8401 64.8971 12.7554 64.8296 12.6901C64.7621 12.6273 64.6753 12.5934 64.5837 12.5982C64.1231 12.62 63.7229 12.62 63.3925 12.6007C63.0453 12.5789 62.7825 12.487 62.6088 12.3274C62.4401 12.1726 62.3557 11.9114 62.3557 11.5558V6.42367H64.5981C64.7838 6.42367 64.9333 6.27372 64.9333 6.0875V3.65443C64.9333 3.4682 64.7838 3.31825 64.5981 3.31825Z" fill="white"/>
                        </svg>                            
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>

{{-- Whatsapp fixed button --}}
<x-whatsapp-fixed />

{{-- Jquery --}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

{{-- Swiper.js --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.2.0/swiper-bundle.min.js" integrity="sha512-KBCt3sdFOcFtYTgEfE3uJckVpvPr1w8HPugyPgHFE/4iJOwhwj6eSaF27bDJTHRX2jyAFOgV3Ve9vOD97rbjrg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

{{-- Fancybox --}}
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>

{{-- GSAP (caso necessário) --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/gsap.min.js"></script> --}}

{{-- Front js --}}
@vite(['resources/front/js/vendors/bootstrap.bundle.min.js', 'resources/front/js/main.js'])

@livewireScripts

<script>
    $(document).ready(function() {
     const offCanvas = $('#offcanvasRight'); // Seleciona o off canvas
     const main = $('#main'); // Seleciona a tag main
   
     offCanvas.on('show.bs.offcanvas', function() { // Adiciona um listener para o evento "show" do off canvas
       main.css('filter', 'blur(3px)'); // Adiciona o estilo à tag main
       console.log('show event fired');
     });
   
     offCanvas.on('hide.bs.offcanvas', function() { // Adiciona um listener para o evento "hide" do off canvas
       main.css('filter', ''); // Remove o estilo da tag main
     });

     const modal = $('#staticBackdrop'); // Seleciona o off canvas
     const body = $('#body'); // Seleciona a tag body
   
     modal.on('show.bs.modal', function() { // Adiciona um listener para o evento "show" do off canvas
     body.css('paddin-right', '0px'); // Adiciona o estilo à tag body
       console.log('show event fired');
     });
   
     modal.on('hide.bs.modal', function() { // Adiciona um listener para o evento "hide" do off canvas
     body.css('paddin-right', ''); // Remove o estilo da tag main
     });
})
   
   </script>
</body>

</html>
