@extends('page.layout')

{{-- @dump($dados[$id]->nome) --}}

{{-- <section class="body">
    <article class="update" >
@foreach($dados as $dado)
        <form action="{{route('up' , $dado->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <img src="/arquivos/{{$dado->title}}" alt="">
            <input type="file" name="arquivo">
            <button type="submit" name="submit">update</button>
        </form>
        @endforeach
    </article>
</section>     --}}

<section class="body">
    <article class="update" >
        <form action="{{route('up' , $dados[0]->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <img src="/arquivos/{{$dados[0]->title}}" alt="">
            <input type="file" name="arquivo">
            <button type="submit" name="submit">update</button>
        </form>
    </article>
</section>