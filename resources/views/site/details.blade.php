@extends('site.layout')
@section('title', 'Essa é a página Detalhes')
@section('details')

<section class="details">
    <div class="container">
        <div class="col s12 m6">
            <img src="{{ $produto->Imagem }}" class="responsive-img" alt="">
        </div>

        <div class="col s12 m6 center">

            <h2>R${{ number_format($produto->Preco, 2, ',', '.' ) }}</h2>
            <h6>{{$produto->NomeProduto}}</h6>
            <p>{{$produto->Descricao}}</p>
            <button class="btn orange btn-large">Comprar</button>
        </div>
        {{-- <h2>deu certo</h2> --}}
    </div>
</section>

@endsection
    {{-- <div class="row container">
        <div class="col s12 m6">
            <img src="{{$produto->Imagem}}" alt="">
        </div>

        <div class="col s12 m6">
            <h2>{{$produto->NomeProduto}}</h2>
            <p>{{$produto->Descricao}}</p>
            <button class="btn orange btn-large">Comprar</button>
        </div>
    </div> --}}


