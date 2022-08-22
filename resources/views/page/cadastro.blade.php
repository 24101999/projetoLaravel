@extends('page.layout')

<article class="cadastro">
    <form method="POST">
        @csrf
        <input type="email" name="email" placeholder="email">
        <input type="password" name="senha" placeholder="senha">
        <button type="submit">cadastrar</button>
    </form>
</article>