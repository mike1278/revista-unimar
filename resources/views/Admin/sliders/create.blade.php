@extends('layouts.admin')

@section('title') Agregando Slider @endsection
@section('co-title') - Agregar Slider @endsection
@section('content')
	<form class="pb-4 pl-4 pr-4" action="{{ route('slider-store') }}" method="post" accept-charset="utf-8" enctype="multipart/form-data">
		@csrf
        <div class="form-group">
        	<label>Texto</label>
        	<input class="form-control @error('author') is-invalid @enderror" name="text" type="text" required="" value="{{ old('text') }}">
        	@error('text')
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
        <button class="btn btn-primary w-100">Salvar</button>
    </form>
@endsection
@section('script')
<script>
</script>
@endsection