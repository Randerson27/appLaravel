@extends('site.layout')
@section('title', 'Essa é a página Produto')
@section('produto')

<section class="produtos">
    <div class="container">
        <div class="row">
            <div class="produtos col s6">
              <h2 class="col s6 left">Produtos</h2>
            </div>
            <div class="carrinho col s6 right">
              <h2 class="col s6 right">
                <a href="">
                  Carrinho
                </a>
              </h2>
            </div>
            <div class="produtos-wrapper col s12">
                
            @foreach ($produtos as $produto)

                <div class="boxProduto card">
                    <div class="card-image">
                    <img src="{{ $produto->Imagem }}">
                    <span class="card-title">{{ $produto->NomeProduto }}</span>
                    <a href="{{ route('site.details', $produto->slug) }}" class="btn-floating halfway-fab waves-effect waves-light red"><i class="fa-solid fa-plus"></i></a>
                    </div>
                    <div class="card-content">
                    <p>Descrição: {{$produto->Descricao}}</p>
                    <br><br>
                    <p>Valor: {{$produto->Preco}}</p>
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