@extends('site.layout')
@section('title', 'Essa é a página Sobre')
@section('sobre')

<section class="sobre">
    <div class="container">
        <div class="row">
            <div class="sobreWrapper col s12 center">
                <h5>Sobre</h5>
                <div class="col s6 right boxText">
                    <p>Eu sou o José, e como um entusiasta apaixonado por tecnologia, 
                        dediquei minha carreira ao constante aprimoramento em linguagens 
                        de programação e técnicas de desenvolvimento, transformando 
                        desafios em oportunidades de crescimento. Minha trajetória é 
                        marcada pela busca incansável por inovação e excelência, sempre 
                        alinhada às demandas do mercado e às tendências tecnológicas mais 
                        avançadas. Estou determinado a enfrentar novos desafios que me 
                        permitam aplicar minhas habilidades de forma impactante, contribuindo 
                        para o sucesso de empresas visionárias e disruptivas. Se você busca 
                        um profissional comprometido, criativo e com um olhar estratégico para 
                        o desenvolvimento de sistemas, estou pronto para fazer a diferença. 
                        Vamos construir o futuro juntos!
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="habilidades">
    <div class="container">
        <div class="row">
            <div class="habilidadesWrapper col s12 center">
                <h5>Habilidades</h5>
                <div class="boxHabilidades col s12 center">
                    <div class="lineOne">
                        <div class="lineBox">
                            
                            <img src="{{URL::asset('/img/yellow-line-x.png')}}" alt="yellow-line-x">
                        </div>
                    </div>
                    <div class="lineTwo">
                        <div class="lineBox">
                            
                            <img src="{{URL::asset('/img/yellow-line-x.png')}}" alt="yellow-line-x">
                        </div>
                    </div>
                    {{-- <hr class="lineTwo">  --}}
                    <div class="first-area center">
                           
                        <div class="areaHtml">
                            <div>
                                <img src="{{URL::asset('/img/icons/Html.png')}}" alt="Html-icon">
                                <h6>Html</h6>
                            </div>
                        </div>
    
                        <div class="areaCss">
                            <div>
                                <img src="{{URL::asset('/img/icons/Css.png')}}" alt="Css-icon">
                                <h6>Css</h6>
                            </div>
                        </div>
    
                        <div class="areaJavascript">
                            <div>
                                <img src="{{URL::asset('/img/icons/Js.png')}}" alt="Javascript-icon">
                                <h6>Javascript</h6>
                            </div>
                        </div>
    
                        <div class="areaPhp">
                            <div>
                                <img src="{{URL::asset('/img/icons/Php.png')}}" alt="Php-icon">
                                <h6>Php</h6>
                            </div>
                        </div>
                    </div>

                    <div class="second-area center">
                        <div class="areaMysql">
                            <div>
                                <img src="{{URL::asset('/img/icons/Mysql.png')}}" alt="MySql-icon">
                                <h6>MySql</h6>
                            </div>
                        </div>
                        
                        <div class="areaLaravel">
                            <div>
                                <img src="{{URL::asset('/img/icons/Laravel.png')}}" alt="Laravel-icon">
                                <h6>Laravel</h6>
                            </div>
                        </div>
    
                        <div class="areaFigma">
                            <div>
                                <img src="{{URL::asset('/img/icons/Figma.png')}}" alt="Figma-icon">
                                <h6>Figma</h6>
                            </div>
                        </div>
    
                        <div class="areaWordpress">
                            <div>
                                <img src="{{URL::asset('/img/icons/wordpress.png')}}" alt="Wordpress-icon">
                                <h6>Wordpress</h6>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="conhecimentos">
    <div class="container">
        <div class="row">
            <div class="conhecimentos-wrapper col s12">
                <h5>Conhecimentos</h5>
                {{-- <img class="col s12 center" src="{{asset('/img/yellow-line-y.png')}}" alt=""> --}}
                <div class="firstBox col s12 ">
                   <div class="firstBoxText col s6 left">
                        <h2>Código</h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Accusantium, similique hic odio pariatur necessitatibus 
                            laboriosam veniam perspiciatis rem, soluta omnis laudantium 
                            veritatis dicta quod impedit perferendis facere quas sunt suscipit.
                        </p>
                        
                   </div>
                </div>

                <div class="secondBox col s12 ">
                   <div class="secondBoxText col s6 right">
                        <h2>Designe</h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Accusantium, similique hic odio pariatur necessitatibus 
                            laboriosam veniam perspiciatis rem, soluta omnis laudantium 
                            veritatis dicta quod impedit perferendis facere quas sunt suscipit.
                        </p>
                   </div>
                </div>

                <div class="thirdBox col s12 ">
                   <div class="thirdBoxText col s6 left">
                        <h2>Marketing digital</h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Accusantium, similique hic odio pariatur necessitatibus 
                            laboriosam veniam perspiciatis rem, soluta omnis laudantium 
                            veritatis dicta quod impedit perferendis facere quas sunt suscipit.
                        </p>
                   </div>
                </div>

                <div class="fourtyBox col s12 ">
                   <div class="fourtyBoxText col s6 right">
                        <h2>Banco de dados</h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Accusantium, similique hic odio pariatur necessitatibus 
                            laboriosam veniam perspiciatis rem, soluta omnis laudantium 
                            veritatis dicta quod impedit perferendis facere quas sunt suscipit.
                        </p>
                   </div>
                </div>

            </div>
        </div>
    </div>
</section>

@endsection