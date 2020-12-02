{include file="header.tpl"}
{if $rol neq "public"}
    <div class="alert alert-danger" role="alert">
        Ya estas logueado!
    </div>
{else}    
<div class="login">
{if $mensaje neq ""}
    <div class="alert alert-danger" role="alert">
        {$mensaje}
    </div>
{/if}
    <form method="post" action="verificar">
        <div class="form-group">
            <label for="exampleInputEmail1">Nombre de usuario</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
            <small id="emailHelp" class="form-text text-muted">uwu.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Contraseña</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
</div>
{/if}
{include file="footer.tpl"}