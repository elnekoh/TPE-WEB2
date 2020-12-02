{if $rol neq "public"}
    <div class="alert alert-danger" role="alert">
        Ya estas logueado!
    </div>  
{else}    
<div class="containerForm">
    <form action="registrar" method="post">
        <div class="row">
            <div class="col">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" name="nombre">
            </div>
            <div class="col">
                <label for="correo">Correo</label>
                <input type="text" class="form-control" name="email">
            </div>
        </div>
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password">
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
<div/>
{/if}