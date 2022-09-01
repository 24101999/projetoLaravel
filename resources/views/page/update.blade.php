@extends('page.layout')

<section class="body">
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
</section>    