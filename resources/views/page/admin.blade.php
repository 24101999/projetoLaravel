@extends('page.layout')
<?php $imagens = DB::table('imagens')->get(); ?>

<section class="admin-dad">
    <article class="admin">
        <form action="/add" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="text" name="title">
            <input type="file" name="file">
        
            <button type="submit" name="send">enviar</button>
        </form>
    </article>
    
    <section class="admin-imagens">
        @foreach ($imagens as $img)
        {{-- <p>{{$img->title}}</p> --}}
        <article class="dad-img">
            <div class="img">
                <img src="arquivos/{{$img->title}}" alt="">
            </div>
            <div class="buttons">
                <button>atualizar</button>
                <button>excluir</button>
            </div>
        </article>
        @endforeach
    </section>
</section>
