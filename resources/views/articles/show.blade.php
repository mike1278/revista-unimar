@extends('layouts.app')

@section('co-title') - Articulos @endsection
@section('content')
    <div class="article-clean mt-4">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="intro d-flex flex-column align-items-center">
                        <h2 class="text-center">{{
                                $article->translate(App::getLocale())['title'] ?
                                $article->translate(App::getLocale())['title'] :
                                $article->title
                            }}
                        </h2>
                        <p class="text-center">
                            <span class="by">by</span> <span class="text-capitalize">{{ $article->author }}</span>
                            <span class="date text-capitalize">{{ $article->created_at->toFormattedDateString() }}</span>
                        </p>
                        <img class="img-fluid" src="{{ Storage::url($article->image) }}">
                    </div>
                    <div class="text">
                        <p>{{
                            $article->translate(App::getLocale())['text'] ?
                            substr($article->translate(App::getLocale())['text'], 0, 222) :
                            substr($article->text, 0, 222)
                        }}</p>
                    </div>
                    <a href="/articulo/{{ $article->id }}/file" class="btn" style="background-color: #12365BFF; color:white;">Descargar Documento Completo</a>
                </div>
            </div>
            <div class="row no-gutters mb-4 mt-4">
                <div class="col-12">
                    <h3>Comentarios</h3>
                    <button class="btn pos-a comentary">Agregar Comentario</button>
                    <hr>
                </div>
                <div class="col-12" style="padding-left: 20px;">
                    <h4 style="font-size: 20px;">Adriana Aguilar</h4>
                    <p style="padding-left: 10px;">Sed lobortis mi. Suspendisse vel placerat ligula.&nbsp;<span style="text-decoration: underline;">Vivamus</span>&nbsp;ac sem lac. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum
                        vel in justo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.<br></p>
                    <hr>
                </div>
                <div class="col-12" style="padding-left: 20px;">
                    <h4 style="font-size: 20px;">Georgelis Marcano</h4>
                    <p style="padding-left: 10px;">Sed lobortis mi. Suspendisse vel placerat ligula.&nbsp;<span style="text-decoration: underline;">Vivamus</span>&nbsp;ac sem lac. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum
                        vel in justo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.<br></p>
                    <hr>
                </div>
                <div class="col-12" style="padding-left: 20px;">
                    <h4 style="font-size: 20px;">Andres Pedrosa</h4>
                    <p style="padding-left: 10px;">Sed lobortis mi. Suspendisse vel placerat ligula.&nbsp;<span style="text-decoration: underline;">Vivamus</span>&nbsp;ac sem lac. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum
                        vel in justo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.<br></p>
                    <hr>
                </div>
            </div>
        </div>
    </div>
@endsection