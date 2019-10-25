{include file="header.tpl"}
<div class="container">
    <div class="row">
        <div class="col">
            <form action="editar/{$servicio->id}" method="post">
                <input type="text" name="nombre" value="{$servicio->nombre}" placeholder="Servicio">
                <input type="text" name="informacion" value="{$servicio->info}" placeholder="Descripcion">
                <input type="submit" value="Actualizar">
            </form>
        </div>
    </div>
</div>
{include file="footer.tpl"}






 