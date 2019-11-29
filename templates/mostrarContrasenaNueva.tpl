
              
<article>
<div class="container">
    <div class="row">
        <div class="col">
                    <h1> La Contraseña nueva es : </h1>
                {foreach from=$usuario_ver item=contra}
                    <li> {$contra->contrasena}</li>
                {/foreach}
            </form>
        </div>
    </div>
</div> 
</article>
</section>

<form action="nuevaContraseña" method="post">
    <input type="hidden" class="form-control" name="id" value= "{$contra->id}">
    <input type="text" class="form-control" name="contraseñaActual" value="{$contra->contrasena}" placeholder="Contraseña Actual">
    <input type="text" class="form-control form-control-lg" name="nuevaContraseña" placeholder="Contraseña nueva">
    <input type="text" class="form-control form-control-lg" name="confirmContraseña" placeholder="Confirma Contraseña">
    <input type="submit" class="btn btn-primary" value="Aceptar Cambios">
</form>
               
       
    

