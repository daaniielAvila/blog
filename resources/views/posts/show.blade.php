@extends('plantilla')

@section('titulo', 'Detalles del post')

@section('contenido')

<div class="card mb-3">
    <div class="card-body">
        @if ($post)
            <div class="w-100">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h6 class="text-primary fw-bold mb-0">
                        {{ $post->titulo }}
                        <span class="text-dark ms-2"> {{ $post->Contenido }}</span>
                    </h6>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <p class="small mb-0" style="color: #aaa;">
                    </p>
                    <div class="d-flex flex-row">
                        <i class="fas fa-star text-warning me-2"></i>
                        <i class="far fa-check-circle" style="color: #aaa;"></i>
                    </div>
                </div>
            </div>
        @else
            <p>No se encontró el post.</p>
        @endif
    </div>
</div>

@endsection
