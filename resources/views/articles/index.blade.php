@extends('layouts.app')

@section('co-title') - Articulos @endsection
@section('content')
    <div class="container" style="margin-top: 15px;">
        <div class="row">
            <div class="col-12">
                <h1>Todos los Articulos</h1>
                <hr>
            </div>
            @foreach($Articles as $article)
                @include('components.article', ['article' => $article])
            @endforeach
        </div>
        {!! $Articles->render() !!}
    </div>
@endsection