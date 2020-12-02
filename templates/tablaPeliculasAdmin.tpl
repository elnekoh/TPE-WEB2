<div class="tabla">
    <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Precio</th>
            <th scope="col">Genero</th>
            <th scope="col">ID</th>
            <th scope="col">Editar</th>
            <th scope="col">Borrar</th>
            </tr>
        </thead>
        <tbody>
        {$contador=1}
        {foreach from= $peliculas item=pelicula}
            <tr>
                <th scope="row">{$contador++}</th>
                <a href="pelicula/{$pelicula->id_pelicula}"><td>{$pelicula->nombre}</td></a>
                <td>{$pelicula->precio}</td>
                <td>{$pelicula->nombreGenero}</td>
                <td>{$pelicula->id_pelicula}</td>
                <td><a href="editar/pelicula/{$pelicula->id_pelicula}"><button type="button" class="btn btn-primary">Editar</button></a></td>
                <td><a href="borrar/pelicula/{$pelicula->id_pelicula}"><button type="button" class="btn btn-danger">Borrar</button></a></td>
            </tr>
        {/foreach}

        </tbody>
    </table>
</div>