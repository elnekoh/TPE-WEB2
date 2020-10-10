{include file="header.tpl"}
<div class="container">
    <div class="item">
        <h1 class="titulo_item">{$pelicula[0]->nombre}</h1>
        <h2 class="precio_item">${$pelicula[0]->precio}</h2>
        <p class="descripcion">{$pelicula[0]->descripcion}</p>
    </div>
</div>
{include file="footer.tpl"}