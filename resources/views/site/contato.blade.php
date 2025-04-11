@extends('site.layout')
@section('title', 'Essa é a página Contato')
@section('contato')

    <section class="contatos">
        <div class="container">
            <div class="row">
               <div class="boxMainText">
                    <h2>Fale comigo!</h2>
                    <p>"Neque porro quisquam est qui dolorem ipsum 
                        quia dolor sit amet, consectetur, adipisci velit..."
                        "There is no one who loves pain itself, who seeks 
                        after it and wants to have it, simply because it is pain..."
                    </p>
               </div>
               <div class="boxWrapper">
                    <div class="boxContatoLeft">

                        <h6>Informações de contato</h6>

                        <div class="box-telefone">
                            <a href="https://wa.link/el1sac">
                                <div class="telefone">
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                            </a>
                            <div class="telefoneText">
                                <h6>Telefone</h6>
                                <p>(11) 98322-8610</p>
                            </div>
                        </div>
                        
                        <div class="box-email">
                            <a href="">
                                <div class="email">
                                    <i class="fa-solid fa-envelope"></i>
                                </div>
                            </a>
                            <div class="emailText">
                                <h6>E-mail</h6>
                                <p>randerson.ghoul@gmail.com</p>
                            </div>
                        </div>

                        <div class="boxRedesSociais">
                            <h6>Redes sociais</h6>
                            <div class="redesSociais-wrapper">
                                <div class="box-github">
                                    <a href="">
                                        <div class="github">
                                            <i class="fa-brands fa-github"></i>
                                        </div>
                                    </a>
                                </div>
    
                                {{-- <div class="box-whatsapp">
                                    <a href="">
                                        <div class="whatsapp">
                                            <i class="fa-brands fa-square-whatsapp"></i>
                                        </div>
                                    </a>
                                </div>   --}}
    
                                <div class="box-linkedin">
                                   <a href="">
                                        <div class="linkedin">
                                            <i class="fa-brands fa-linkedin-in"></i>
                                        </div>
                                   </a>
                                </div>                           
    
                                <div class="box-tiktok">
                                    <a href="">
                                        <div class="tiktok">
                                            <i class="fa-brands fa-tiktok"></i>
                                        </div>
                                    </a>
                                </div>
    
                                <div class="box-instagram">
                                    <a href="">
                                        <div class="instagram">
                                            <i class="fa-brands fa-square-instagram"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="boxContatoRight">
                        <h6>Envie uma mensagem</h6>
                        <div class="boxInputs">
                            <form action="send_email.php" method="post">
                                <label for="name">Nome:</label>
                                <input type="text" id="name" name="name" required>
                                <br>
                               
                                <label for="email">Endereço de Email:</label>
                                <input type="email" id="email" name="email" required>
                                <br><br>
                               
                                <label for="message">Mensagem:</label>
                                <textarea class="textarea" id="message" name="message" required></textarea>
                                <br>
                                
                                <div class="button-wrapper">
                                    <a class="button-bate-papo" href="">
                                        <button class="button" type="submit">
                                            Enviar
                                        </button>
                                    </a>
                                </div>
                                
                            </form>
                        </div>
                    </div>
               </div>
            </div>
        </div>

    </section>


@endsection
