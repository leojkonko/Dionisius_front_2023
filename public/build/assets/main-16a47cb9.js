new Swiper(".banner-swiper",{rewind:!1,navigation:{nextEl:".banner-swiper .swiper-button-next",prevEl:".banner-swiper .swiper-button-prev"},pagination:{el:".banner-swiper .swiper-pagination",type:"bullets",clickable:!0}});new Swiper(".cardapio-swiper",{slidesPerView:2,spaceBetween:20,breakpoints:{1200:{slidesPerView:6},992:{slidesPerView:5},767:{slidesPerView:4},576:{slidesPerView:3}},rewind:!1,navigation:{nextEl:".cardapio-swiper .swiper-button-next",prevEl:".cardapio-swiper .swiper-button-prev"},pagination:{el:".cardapio-swiper .swiper-pagination",type:"bullets",clickable:!0}});new Swiper(".gallery-swiper",{rewind:!1,slidesPerView:1,spaceBetween:1,navigation:{nextEl:".gallery-swiper .swiper-button-next",prevEl:".gallery-swiper .swiper-button-prev"},pagination:{el:".gallery-swiper .swiper-pagination",type:"bullets",dynamicBullets:!0,clickable:!0}});(function(){document.querySelectorAll('a[href^="#"]').forEach(t=>{t.addEventListener("click",function(i){if(i.preventDefault(),this.getAttribute("href")!=="#"){let e=document.querySelector(this.getAttribute("href"));e&&e.scrollIntoView({behavior:"smooth",block:"center",inline:"center"})}})})})();(function(){var t=document.querySelectorAll("img[data-src]");if(t){const i=new IntersectionObserver((e,r)=>{e.forEach(a=>{if(a.isIntersecting){let s=a.target;s.src=s.dataset.src,a.target.addEventListener("load",function(){let n=this.nextElementSibling;n&&n.classList.contains("loader")&&n.remove()}),r.unobserve(a.target)}})},{rootMargin:"50% 50% 50% 50%"});t.forEach(e=>{i.observe(e)})}})();$(document).ready(function(){$(".btn-whatsapp").click(function(){$(this).addClass("active"),$(".whatsapp-form").toggleClass("show")}),$(".whatsapp-form-close").click(function(){$(".whatsapp-form").removeClass("show"),$(".btn-whatsapp").removeClass("active")}),$(".timeline-image").css({"margin-top":-$(".timeline-title").height()})});$(document).on("ready resize load",function(){$(".timeline-image").css({"margin-top":-$(".timeline-title").height()})});var l=function(t){return t.replace(/\D/g,"").length===11?"(00) 00000-0000":"(00) 0000-00009"},o={onKeyPress:function(t,i,e,r){e.mask(l.apply({},arguments),r)},clearIfNotMatch:!0};$(".mask-telefone").mask(l,o);$(".mask-cpf").mask("000.000.000-00");$(".mask-data").mask("00/00/0000");$(".mask-horario").mask("00:00:00");$(".mask-cep").mask("00000-000");$(".mask-porcentagem").mask("##0,00%",{reverse:!0});
