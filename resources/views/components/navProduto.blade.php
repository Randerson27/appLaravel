 <!-- Dropdown Structure -->
 <ul id="dropdown1" class="dropdown-content">
    @foreach ($categoriasMenu as $categoriasM)
      <li><a href="{{ route('site.categoria', $categoriasM->id) }}">{{ $categoriasM->name }}</a></li>
    @endforeach
    
    
  </ul>
<nav class="nav-produto">
  <div class="nav-wrapper">
    <a href="" class="title-produto">Produto</a>
    <ul class="right hide-on-med-and-down">
      <li><a href="">Carrinho</a></li>
      <!-- Dropdown Trigger -->
      <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Categorias<i class="fa-solid fa-down-long"></i></a></li>
    </ul>
  </div>
</nav>