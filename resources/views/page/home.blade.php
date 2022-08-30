@extends('page.layout')


<a class="adm" href="/admin">admin</a>
<header>
<h1 class="h1-header">Henrique developer</h1>
<h2 class="h2-blocks-header">tecnologias usadas nesse site</h2>
<div class="blocks-header">
    <div class="block-header"><h2>PHP</h2></div>
    <div class="block-header"><h2>Laravel</h2></div>
    <div class="block-header"><h2>JavaScript</h2></div>
    <div class="block-header"><h2>Sql</h2></div>
</div>
</header>

<h2 class="h2-title-responsive">Sites responsivos</h2>

<article class="responsive">
    @foreach ($items as $img)    
    <div class="responsive-imgs">
    <img class="img-responsive" src="/arquivos/{{$img->title}}" alt="" >
    </div>
    @endforeach
</article>


    <article class="img-dinamic">
        <div class="arrows">
            <img class="img-right" src="imagens/arrow-right-square.svg" alt="">
            <img class="img-left" src="imagens/arrow-left-square.svg" alt="">
        </div>
    </article>

<footer>
    <h2>Henrique da silva costa</h2>
    <h2>Full stack</h2>
    <h2>PHP/Laravel/javascript</h2>
    <a href="https://github.com/24101999" target="_blank">GitHub</a>
    <a href="https://www.linkedin.com/in/henrique-da-silva-costa-7172521a2/" target="_blank">Linkedin</a>
</footer>

<script>
    let item = '<?= json_encode($items) ?>'
    let imgs = JSON.parse(item)
</script>

<script src="js/home.js"></script>


