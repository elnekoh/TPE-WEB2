<div class="tabla">
    <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Correo</th>
            <th scope="col">Rol</th>
            <th scope="col">Eliminar</th>
            <th scope="col">Admin</th>
            
            </tr>
        </thead>
        <tbody>
        {$contador=1}
        {foreach from= $usuarios item=usuario}
            <tr>
                <th scope="row">{$contador++}</th>
                <td>{$usuario->nombre}</td>
                <td>{$usuario->email}</td>
                <td>{$usuario->rol}</td>
                <td><a href="borrar/usuario/{$usuario->id_user}"><button type="button" class="btn btn-danger">Borrar</button></a></td>
                {if $usuario->rol neq 'admin'}
                    <td><a href="hacerAdmin/{$usuario->id_user}"><button type="button" class="btn btn-success">hacer admin</button></a></td>
                {else}
                    <td><a href="quitarAdmin/{$usuario->id_user}"><button type="button" class="btn btn-secondary">quitar admin</button></a></td>
                {/if}
            </tr>
        {/foreach}

        </tbody>
    </table>
</div>