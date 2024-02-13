
{{-- <nav class="nav nav-pills flex-column flex-sm-row">
  <a class="flex-sm-fill text-sm-center nav-link" aria-current="page" href="{{route('partials.inicio')}}">Página de inicio</a>
  <a class="flex-sm-fill text-sm-center nav-link" href="{{ route('posts.index') }}">Listado de posts</a>
  <a class="flex-sm-fill text-sm-center nav-link" href="#">Link</a>
  <a class="flex-sm-fill text-sm-center nav-link disabled" aria-disabled="true">Disabled</a>
</nav> --}}

<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link" aria-current="page" href="{{route('partials.inicio')}}">Página de inicio</a>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Posts</a>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="{{route('posts.index')}}">Listado de posts</a></li>
      <li><a class="dropdown-item" href="{{route('posts.create')}}">Crear posts</a></li>
      <li><a class="dropdown-item" href="{{route('posts.show',['id'])}}">posts por id</a></li>
      <li><a class="dropdown-item" href="{{route('posts.edit',['id'])}}">editar posts</a></li>
</ul>