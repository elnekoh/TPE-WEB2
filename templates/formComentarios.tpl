{if $rol neq "public"}    
<div class="containerForm comentariosForm">
    {include file="datosUsuario.tpl"}
    <form id="comentariosForm">
        <div class="form-group">
            <label for="puntuacion">Puntuacion</label>
            <select class="form-control" id="puntuacion" name="puntuacion">
                <option value ="1">1</option>
                <option value ="2">2</option>
                <option value ="3">3</option>
                <option value ="4">4</option>
                <option value ="5">5</option>
                <option value ="sin puntuar">sin puntuar</option>
            </select>
        </div>
        <div class="form-group">
            <label for="contenido">Contenido</label>
            <textarea class="form-control" id="contenido" rows="3" name= "contenido"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
{/if}