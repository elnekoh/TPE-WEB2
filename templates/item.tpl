{include file="header.tpl"}
<script src="{BASE_URL}/app/view/js/comentarios.js"></script>
<div class="container">
    <div class="item">
        <h1 class="titulo_item">{$pelicula[0]->nombre}</h1>
        <h2 class="precio_item">${$pelicula[0]->precio}</h2>
        <p class="descripcion">{$pelicula[0]->descripcion}</p>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>
{include file="cajaDeComentarios.tpl"}
{include file="formComentarios.tpl"}
{include file="footer.tpl"}