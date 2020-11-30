<div class="col-md-6" style="padding: 15px;">
    <div class="border rounded" style="background-color: rgba(224, 224, 224, .5);padding: 15px;">
        <div class="d-flex">
            <img style="width: 45%;max-height: 100%;height: 100%;" src="{{ Storage::url($article->image) }}">
            <div style="width: 50%;margin-left: 5%;">
                <h2>
                    {{ $article->translate(App::getLocale())['title'] ?
                        $article->translate(App::getLocale())['title'] :
                        $article->title
                    }}
                </h2>
                <p>
                    {{ $article->translate(App::getLocale())['text'] ?
                        substr($article->translate(App::getLocale())['text'], 0, 222) :
                        substr($article->text, 0, 222)
                    }} ...<br>
                </p>
                <p><strong>Autor/a:</strong>&nbsp;{{ $article->author }}</p>
            </div>
        </div>
        <a class="btn btn-primary" href="/articulo/{{ $article->id }}" style="margin-top: 20px;background-color: rgb(18, 54, 91);width: 100%;">Seguir Leyendo</a>
    </div>
</div>