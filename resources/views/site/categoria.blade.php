@extends('site.layout')
@section('title', 'Essa é a página Produto')
@section('produto')

<section class="produtos">
    <div class="container">
        {{-- <div class="row">
          <!-- Dropdown Structure -->
            <ul id="dropdown1" class="dropdown-content">
              @foreach ($categoriasMenu as $categoriasM)
                <li><a href="#!">{{ $categoriasM->name }}</a></li>
              @endforeach
              
              
            </ul>
          <nav class="nav-produto">
            <div class="nav-wrapper">
              <a href="#!" class="title-produto">Produto</a>
              <ul class="right hide-on-med-and-down">
                <li><a href="">Carrinho</a></li>
                <!-- Dropdown Trigger -->
                <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Categorias<i class="fa-solid fa-down-long"></i></a></li>
              </ul>
            </div>
          </nav> --}}
          @component('components.navProduto')@endcomponent
          <h5>Categorias: {{ $categoria->name }}</h5>
          <div class="produtos-wrapper col s12">
            
                
            @foreach ($produtos as $produto)

                <div class="boxProduto card">
                    <div class="card-image">
                        <img src="{{ $produto->Imagem }}">
                        <span class="card-title">{{ $produto->NomeProduto }}</span>
                        <a href="{{ route('site.details', $produto->slug) }}" class="btn-floating halfway-fab waves-effect waves-light red"><i class="fa-solid fa-plus"></i></a>
                    </div>
                    <div class="card-content">
                        <p>Descrição: {{ Str::limit($produto->Descricao, 20) }}</p>
                        <br><br>
                        <p>Valor: {{$produto->Preco}}</p><br>
                        <p>Postado por: {{$produto->user->firstName}}</p><br>
                        <p>Categoria: {{$produto->categoria->name}}</p>
                    </div>
                </div>
                
            @endforeach  

          </div>

          
          <div class="paginacao col s12 center">
            {{ $produtos->links('custom.pagination')}}
          </div>

        </div>
    </div>
</section>



@endsection