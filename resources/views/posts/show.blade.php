@extends('plantilla')

@section('titulo', 'Detalles del post')

@section('contenido')
<div class="card mb-3">
    <div class="card-body">
      
        <div class="w-100">
          <div class="d-flex justify-content-between align-items-center mb-3">
            <h6 class="text-primary fw-bold mb-0">
                {{ $post['Titulo'] }}
            </h6>

          </div>

            <p class="small mb-0" style="color: #aaa;">            </p>
            <h6 class="mb-5">              {{($post->Contenido)}}</h6>

                <h6 class="mb-5">              {{($post->created_at)}}</h6>

              <h6><a href="{{ route('posts.index')}}" class="link-grey">Volver</a></h6>                </h6>

            <div class="d-flex flex-row">
              <i class="fas fa-star text-warning me-2"></i>
              <i class="far fa-check-circle" style="color: #aaa;"></i>
            </div>
          </div>
        </div>
      </div>

    </div>

@endsection
