{include file="header.tpl"}
<div class="container">
    <div class="row">
        <div class="col">
            <form action='editarOpinion/{$opinion->id}' method="post">
                <input type="text" name="nombre_cliente" value="{$opinion->cliente}" placeholder="Titulo">
                <input type="text" name="opinion" value="{$opinion->opinion}" placeholder="Descripcion">
                <input type="submit" value="Actualizar">
            </form>
        </div>
    </div>
</div>
{include file="footer.tpl"}






 