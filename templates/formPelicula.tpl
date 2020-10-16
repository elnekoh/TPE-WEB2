<div class="containerForm">
    <h1 class="tituloForm">{$textoForm} pelicula:</h2>
    <form action="{$action}" method="post">
        <div class="row">
        <div class="col">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" name="nombre">
        </div>
        <div class="col">
            <label for="precio">Precio</label>
            <input type="text" class="form-control" name="precio">
        </div>
        </div>
        <div class="form-group">
        <label for="genero">Genero</label>
        <select class="form-control" id="genero" name="id_genero">
            {foreach from=$generos item=genero}
                <option value="{$genero->id_genero}">{$genero->nombre}</option>
            {/foreach}
        </select>
        </div>
        <div class="form-group">
        <label for="descrpcion">Descripcion</label>
        <textarea class="form-control" id="descripcion" placeholder="Agrega una descrpcion..." rows="3" name ="descripcion"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>