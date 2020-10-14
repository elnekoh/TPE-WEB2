<table class="table">
    <thead class="thead-dark">
        <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">ID</th>
        <th scope="col">Editar</th>
        <th scope="col">Borrar</th>
        </tr>
    </thead>
    <tbody>
    {$contador=1}
    {foreach from= $generos item=genero}
        <tr>
            <th scope="row">{$contador++}</th>
            <a href="pelicula/{$genero->id_genero}"><td>{$genero->nombre}</td></a>
            <td>{$genero->id_genero}</td>
            <td><a href="editar/genero/{$genero->id_genero}"><button type="button" class="btn btn-primary">Editar</button></a></td>
            <td><a href="borrar/genero/{$genero->id_genero}"><button type="button" class="btn btn-danger">Borrar</button></a></td>
        </tr>
    {/foreach}

    </tbody>
</table>