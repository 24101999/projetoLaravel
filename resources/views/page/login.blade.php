@extends('page.layout')

<article class="login">
    <div class="form-login">
    <form action="" method="POST">
        @csrf
        <input type="email" name="email" placeholder="email">
        <input type="password" name="senha" placeholder="senha">
        <button type="submit">ENTRAR</button>
        <a href="cadastro">cadastre-se</a>
    </form>
    </div>
</article>