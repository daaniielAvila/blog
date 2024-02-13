@extends('plantilla')

@section('titulo', 'Listado de posts')
@vite(['resources/sass/app.scss', 'resources/js/app.js'])@section('contenido')

    <h1>Listado de Posts</h1>

    
@foreach ($posts as $post)

<div class="card mb-3">
<div class="card-body">
  
    <div class="w-100">
      <div class="d-flex justify-content-between align-items-center mb-3">
        <h6 class="text-primary fw-bold mb-0">
            {{ $post['Titulo'] }}
          <span class="text-dark ms-2"> {{$post['Contenido']}}</span>
        </h6>
        <p class="mb-0"> {{$post['created_at']}}</p>
      </div>
      <div class="d-flex justify-content-between align-items-center">
        <p class="small mb-0" style="color: #aaa;">
          <a href="#!" class="link-grey">Remove</a> •
          <a href="{{route('posts.show', 'id')}}" class="link-grey">Ver mas</a>
        </p>
        <div class="d-flex flex-row">
          <i class="fas fa-star text-warning me-2"></i>
          <i class="far fa-check-circle" style="color: #aaa;"></i>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
  @endforeach
  @endsection
