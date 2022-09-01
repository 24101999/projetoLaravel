@extends('page.layout')



<article class="login">
    <div class="form-login">
    <form action="" method="POST">
        @csrf
        <input class="input" type="email" name="email" placeholder="email">
        <input class="input" type="password" name="senha" placeholder="senha">
        <button type="submit" class="button">ENTRAR</button>
        <a href="cadastro">cadastre-se</a>
    </form>
    </div>
</article>

<script src="/js/login.js"></script>