@extends('layouts.admin')

@section('title') Agregando Articulo @endsection
@section('co-title') - Agregar Articulo @endsection
@section('content')
	<form class="pb-4 pl-4 pr-4" action="{{ route('article-store') }}" method="post" accept-charset="utf-8" enctype="multipart/form-data">
		@csrf
        <div class="form-group">
        	<label>Autor</label>
        	<input class="form-control @error('author') is-invalid @enderror" name="author" type="text" required="" value="{{ old('author') }}">
        	@error('author')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group d-flex flex-column">
        	<label>Imagen</label>
        	<input class="form-control @error('image') is-invalid @enderror" name="image" type="file" required="" value="{{ old('image') }}">
        	@error('image')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group d-flex flex-column">
        	<label>Documento</label>
        	<input class="form-control @error('file') is-invalid @enderror" name="file" type="file" required="" value="{{ old('file') }}">
        	@error('file')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div data-lang="es">
            <h3 style="font-size: 23px;">Español</h3>
            <div class="form-group pl-2">
            	<label>Titulo</label>
            	<input class="form-control @error('title.es') is-invalid @enderror" placeholder="Titulo" name="title[es]" type="text" required="" value="{{ old('title.es') }}">
            </div>
            @error('title[es]')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <div class="form-group pl-2">
            	<label>Resumen</label>
            	<textarea class="form-control @error('text.es') is-invalid @enderror" name="text[es]" placeholder="Resumen" required="">{{ old('text.es') }}</textarea>
            </div>
            @error('text[es]')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div data-lang="en">
            <h3 style="font-size: 23px;">Ingles</h3>
            <div class="form-group pl-2">
            	<label>Titulo</label>
            	<input class="form-control" placeholder="Titulo" name="title[en]" type="text" value="{{ old('title.en') }}">
            </div>
            <div class="form-group pl-2">
            	<label>Resumen</label>
            	<textarea class="form-control" name="text[en]" placeholder="Resumen">{{ old('text.en') }}</textarea>
            </div>
        </div>
        <div data-lang="fr">
            <h3 style="font-size: 23px;">Frances</h3>
            <div class="form-group pl-2">
            	<label>Titulo</label>
            	<input class="form-control" placeholder="Titulo" name="title[fr]" type="text" value="{{ old('title.fr') }}">
            </div>
            <div class="form-group pl-2">
            	<label>Resumen</label>
            	<textarea class="form-control" name="text[fr]" placeholder="Resumen">{{ old('text.fr') }}</textarea>
            </div>
        </div>
        <div data-lang="de">
            <h3 style="font-size: 23px;">Aleman</h3>
            <div class="form-group pl-2">
            	<label>Titulo</label>
            	<input class="form-control" placeholder="Titulo" name="title[de]" type="text" value="{{ old('title.de') }}">
            </div>
            <div class="form-group pl-2">
            	<label>Resumen</label>
            	<textarea class="form-control" name="text[de]" placeholder="Resumen">{{ old('text.de') }}</textarea>
            </div>
        </div>
        <div data-lang="it">
            <h3 style="font-size: 23px;">Italiano</h3>
            <div class="form-group pl-2">
            	<label>Titulo</label>
            	<input class="form-control" placeholder="Titulo" name="title[it]" type="text" value="{{ old('title.it') }}">
            </div>
            <div class="form-group pl-2">
            	<label>Resumen</label>
            	<textarea class="form-control" name="text[it]" placeholder="Resumen">{{ old('text.it') }}</textarea>
            </div>
        </div>
        <button class="btn btn-primary w-100">Salvar</button>
    </form>
@endsection
@section('script')
<script>
</script>
@endsection