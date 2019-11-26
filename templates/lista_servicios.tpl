<article>
<div class="container">
    <div class="row">
        <div class="col">
            <form action="insertarOpinion" method="post" enctype="multipart/form-data">
            <select name="servicio">
                {foreach from=$lista_servicios item=servicio}
                    <option value="{$servicio->id}">{$servicio->nombre}</option> 
                {/foreach}
            </select> 
                <input type="text" class="form-control" name="nombre_cliente"  placeholder="Nombre">
                <input type="text" class="form-control form-control-lg" name="opinion_servicio" placeholder="Descripcion">
                <input type="file" name="imagen" id="">
                <input type="submit" class="btn btn-primary" value="Insertar">
            </form>
        </div>
    </div>
</div> 
</article>
</section>
 
