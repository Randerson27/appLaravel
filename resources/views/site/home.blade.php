@extends('site.layout')
@section('title', 'Essa é a página Home')
@section('home')

<section class="hero">
    <div class="container hero-wrapper" style="width:85%">
        <div class="row">
            <div class="boxHero">
                <div class="boxHeroText">
                    <h2>Desenvolvedor web<br> + <br><span>Designer</span></h2>
            
                    <p>Landing Pages que Convertem com Designers incriveis!</p>
                    
                </div>
                <div class="button-wrapper">
                    <a class="button-bate-papo" href="https://wa.link/el1sac">
                        <button class="button">
                            Bate papo
                        </button>
                    </a>
                </div>
                <div class="seta">
                    <a href="#projetoLink">
                        <img src="{{URL::asset('/img/icons/subway_down.png')}}" alt="subway_down">
                    </a>
                </div>

            </div>
           
            
            
        </div>
        <div class="iconsSide col s12 right">
            <a href="">
                {{-- <img src="{{URL::asset('/img/icons/linkedinIcon.svg')}}" alt="icob-linkedin"> --}}
                <i class="fa-brands fa-linkedin"></i>
            </a>
            <a href="">
                {{-- <img src="{{URL::asset('/img/icons/tiktokIcon.svg')}}" alt="icon-tiktok"> --}}
                <i class="fa-brands fa-tiktok"></i>
            </a>
            <a href="">
                {{-- <img src="{{URL::asset('/img/icons/instagranIcon.png')}}" alt="icon-instagran"> --}}
                <i class="fa-brands fa-instagram"></i>
            </a>
        </div>
    </div>
    
</section>

<section class="projetos" id="projetoLink">
    <div class="container projetos-wrapper">
        <div class="row">
            <div class="boxProjetos col s12 center">
                {{-- <img src="{{URL::asset('/img/bannerHome.png')}}" alt=""> --}}

                <h5>Projetos realizados</h5>

                <div class="boxCenter col s12">

                    @foreach ($projetos as $projeto)
    
                        <div class="boxShowProjeto">
                            <img src="{{ $projeto->Imagem }}" alt="">
                        </div>

                    @endforeach

                    {{-- <div class="boxShowProjeto">
                        <img src="{{URL::asset('/img/VetDomusNotebook.png')}}" alt="">
                    </div>
                    <div class="boxShowProjeto">
                        <img src="{{URL::asset('/img/LandPagePortfolio.png')}}" alt="">
                    </div>
                    <div class="boxShowProjeto">
                        <img src="{{URL::asset('/img/sumup-nK9w3J8cSxU-unsplash.png')}}" alt="">
                    </div>
                    <div class="boxShowProjeto">
                        <img src="{{URL::asset('/img/VetDomusNotebook.png')}}" alt="">
                    </div>
                    <div class="boxShowProjeto">
                        <img src="{{URL::asset('/img/LandPagePortfolio.png')}}" alt="">
                    </div>
                    <div class="boxShowProjeto">
                        <img src="{{URL::asset('/img/sumup-nK9w3J8cSxU-unsplash.png')}}" alt="">
                    </div>
                    <div class="boxShowProjeto">
                        <img src="{{URL::asset('/img/sumup-nK9w3J8cSxU-unsplash.jpg')}}" alt="">
                    </div> --}}
                    
                </div>

            </div>
        </div>
    </div>
</section>

<div class="servicos">
    <div class="container servicos-wrapper">
        <h5 class="col s12 center">Serviços</h5>
       <div class="boxServicos">

            <div class="boxDev">
               <div class="boxImg">
                    <img src="{{URL::asset('/img/icons/web-development.png')}}" alt="web-development">
               </div>
                <div class="boxText">
                    <h2>Developer</h2>
                    <p> Com habilidades incríveis na criação de landing pages, 
                        transformo ideias em designs criativos e funcionais que 
                        capturam a atenção e convertem visitantes em clientes.
                    </p>
                    
                </div>
                <a href="sobre">Saiba mais...</a>
            </div>

            <div class="boxDesigner">
                <div class="boxImg">
                    <img src="{{URL::asset('/img/icons/web-design.png')}}" alt="web-design">
               </div>
               <div class="boxText">
                    <h2>Designer</h2>
                    <p> Como designer, uso a criatividade para transformar conceitos 
                        em peças visuais únicas e impactantes. Minha abordagem 
                        inovadora garante soluções que encantam e comunicam de 
                        forma eficaz.
                    </p>
                    
                </div>
                <a href="sobre">Saiba mais...</a>
                {{-- <a href="{{route('site.sobre')}}">Saiba mais...</a> --}}
            </div>

            <div class="boxMarketing">
                <div class="boxImg">
                    <img src="{{URL::asset('/img/icons/rocket.png')}}" alt="rocket">
               </div>
               <div class="boxText">
                    <h2>Marketing Digital</h2>
                    <p>Especialista em Marketing Digital com expertise em Google Ads, 
                        Google Analytics e estratégias de tráfego pago. Transformo dados 
                        em resultados, otimizando campanhas para maximizar ROI e impulsionar 
                        negócios.
                    </p>
                   
                </div>
                <a href="sobre">Saiba mais...</a>
            </div>

       </div>
    </div>
</div>

<div class="informacoes">
    <div class="container informacoes-wrapper">
        <hr>
        <h5>Informações</h5>
        <div class="boxInformacoes">
            
            <div class="boxProjetos">
                <div>
                    <h2>+10</h2>
                    <p>Projetos</p> 
                </div>              
            </div>
            <div class="boxExperiencia">
                <div>
                    <h2>+3</h2>
                    <p>Anos de Experiência</p> 
                </div>              
            </div>
            <div class="boxCoffe">
                <div>
                    <img src="{{URL::asset('/img/icons/infinity.png')}}" alt="infinity">
                    <p>Café</p>    
                </div>           
            </div>
        </div>
    </div>
</div>


{{-- @component('components.sidebar')
    @slot('paragrafo')
        texto qualquer
    @endslot
@endcomponent --}}




@endsection