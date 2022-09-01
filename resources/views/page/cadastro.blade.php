@extends('page.layout')

<article class="cadastro">
    <form method="POST">
        @csrf
        <input class="input" type="email" name="email" placeholder="email">
        <input class="input" type="password" name="senha" placeholder="senha">
        <button class="button" type="submit">cadastrar</button>
    </form>
</article>

<script src="/js/login.js"></script>