@extends('layouts.app')

@section('co-title') - Inicio @endsection
@section('content')
    <div class="carousel slide" data-ride="carousel" id="carousel-1" style="max-height: 613px;">
        <div class="carousel-inner" role="listbox" style="max-height: 613px;">
            @foreach($Sliders as $slider)
            <div class="carousel-item @if($loop->first) active @endif" style="max-height: 100%;">
                <img class="w-100 d-block" src="{{ Storage::url($slider->image) }}" alt="Slide Image" style="height: 613px;">
                <div class="carousel-caption d-none d-md-block">
                    <p>{{ $slider->text }}</p>
                </div>
            </div>
            @endforeach
        </div>
        <div>
            <a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next">
                <span class="carousel-control-next-icon"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <ol class="carousel-indicators">
            @foreach($Sliders as $slider)
            <li data-target="#carousel-1" data-slide-to="{{ $loop->index }}" class="@if($loop->first)active @endif"></li>
            @endforeach
        </ol>
    </div>
    <div class="container" style="margin-top: 15px;">
        <div class="row">
            <div class="col-12">
                <h1>@lang('data.recent-articles')</h1>
                <hr>
            </div>
            @foreach($Articles as $article)
                @include('components.article', ['article' => $article])
            @endforeach
        </div>
        {!! $Articles->render() !!}
    </div>
@endsection