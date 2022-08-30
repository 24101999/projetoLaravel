@extends("page.layout")

{{-- @dd($id) --}}

<form action="{{route('up' , $dados[0]->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('put')
    <input type="file" name="arquivo" value="{{$dados[0]->title}}">
    <button type="submit" name="submit">update</button>
</form>