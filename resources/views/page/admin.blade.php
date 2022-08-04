@extends('page.layout')

<form action="/add" method="POST" enctype="multipart/form-data">
    <input type="text" name="title">
    <input type="file" name="file">

    <button type="submit" name="send">enviar</button>
</form>