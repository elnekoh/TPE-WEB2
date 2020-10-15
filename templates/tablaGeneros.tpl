{include file="header.tpl"}
<table class="table">
    <thead class="thead-dark">
        <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        </tr>
    </thead>
    <tbody>
    {$contador=1}
    {foreach from= $generos item=genero}
        <tr>
            <th scope="row">{$contador++}</th>
            <td><a href="peliculas/{$genero->nombre}">{$genero->nombre}</a></td>
        </tr>
    {/foreach}

    </tbody>
</table>
{include file="footer.tpl"}