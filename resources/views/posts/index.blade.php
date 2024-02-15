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
            {{ $post['Titulo']}} | {{$post->usuario->login}}

        </h6>
      </div>
      <div class="d-flex justify-content-between align-items-center">
        <p class="small mb-0" style="color: #aaa;">

         <form action="{{route('posts.destroy' , $post->id)}}" method="POST">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger btn-rounded" data-mdb-ripple-init>Borrar</button>
          </form>
          <form action="{{ route('posts.show', $post->id) }}" method="GET">
            <button type="submit" class="btn btn-info btn-rounded" data-mdb-ripple-init>Ver más</button>
        </form>
        
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
  {{$posts->links()}}

  @endsection
