@extends('page.layout')
<?php $imagens = DB::table('imagens')->get(); ?>
<?php $items = DB::table('imagens')->get(); ?>

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
                <form action="{{route('delete', $img->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                        <button type="submit" name="delete">excluir</button>
                    </form>
                    <a href="{{route('edit',$img->id)}}"><button type="button">atualizar</button></a>
            </div>
        </article>
        @endforeach
    </section>
</section>
s