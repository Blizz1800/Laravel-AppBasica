@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Editar Curriculum</div>
          <div class="card-body">
            <form method="POST" action="{{ route('resumes.update', $resume->id) }}" enctype="multipart/form-data">
              @csrf
              @method('PUT')

              <div class="row mb-3">
                <label for="title" class="col-md-4 col-form-label text-md-end">Titulo</label>
                <div class="col-md-6">
                  <input id="title" type="text"
                    class="form-control @error('title') is-invalid @enderror" name="title"
                    value="{{ old('title') ?? $resume->title }}" required autocomplete="title" autofocus>
                  @error('title')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="row mb-3">
                <label for="name" class="col-md-4 col-form-label text-md-end">Nombre</label>
                <div class="col-md-6">
                  <input id="name" type="text"
                    class="form-control @error('name') is-invalid @enderror" name="name"
                    value="{{ old('name') ?? $resume->user->name }}" required autocomplete="name" >
                  @error('name')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="row mb-3">
                <label for="email" class="col-md-4 col-form-label text-md-end">E-Mail</label>
                <div class="col-md-6">
                  <input id="email" type="email"
                    class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') ?? $resume->user->email }}" required autocomplete="email" >
                  @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="row mb-3">
                <label for="website" class="col-md-4 col-form-label text-md-end">Sitio Web</label>
                <div class="col-md-6">
                  <input id="website" type="text"
                    class="form-control @error('website') is-invalid @enderror" name="website"
                    value="{{ old('website') ?? $resume->website }}" autocomplete="website" >
                  @error('website')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="row mb-3">
                <label for="picture" class="col-md-4 col-form-label text-md-end">Foto</label>
                <div class="col-md-6">
                  <input id="picture" type="file"
                    class="form-control @error('picture') is-invalid @enderror" name="picture"
                    value="{{ old('picture') }}" autocomplete="picture" >
                  @error('picture')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              
              <div class="row mb-3">
                <label for="about" class="col-md-4 col-form-label text-md-end">Descripcion</label>
                <div class="col-md-6">
                  <textarea id="about" name="about"
                    class="form-control @error('about') is-invalid @enderror"
                    value="{{ old('about') ?? $resume->about }}"></textarea>
                  @error('about')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="row mb-0">
                <div class="col-md-8 offset-md-4">
                  <button type="submit" class="btn btn-primary">
                    Actualizar Curriculum
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
