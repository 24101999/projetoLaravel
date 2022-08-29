@extends("page.layout")

{{-- @dd($id) --}}

<form action="{{route('up' , $dados[0]->id)}}" method="POST">
    @csrf
    @method('put')
    <input type="file" name="file" value="{{$dados[0]->title}}">
    <button type="submit">update</button>
</form>