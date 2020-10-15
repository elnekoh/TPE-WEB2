{include file="header.tpl"}
<!-- Tabla-->
<div class="tabla">
    <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Precio</th>
            <th scope="col">Genero</th>
            </tr>
        </thead>
        <tbody>
        {$contador=1}
        {foreach from= $peliculas item=pelicula}
            <tr>
                <th scope="row">{$contador++}</th>
                <td><a href="pelicula/{$pelicula->id_pelicula}">{$pelicula->nombre}</a></td>
                <td>{$pelicula->precio}</td>
                <td>{$pelicula->id_genero}</td>
            </tr>
        {/foreach}

        </tbody>
    </table>
</div>

{include file="footer.tpl"}