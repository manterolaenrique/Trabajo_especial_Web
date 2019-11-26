{include file="header.tpl"}

<div class="text-center">
    {* {foreach from=$lista_imagen item=imagen}
            <img src="{$imagen->img}">
    {/foreach} *}

    <section class="text-center">
    <article>
        <h1>Imagenes</h1>
        <table class="table" name="tabla">
        <thead class="bg-primary ">
           <tr id="m-header">
                <th scope="col">Imagenes</th>
                <th scope="col">Borrar</th>
            </tr>
        </thead>
            <tbody>
                <div class = "row">
                    <div class = "col">
                          {foreach from=$lista_imagen item=imagen}
                            <tr>
                                 <td><img src="{$imagen->img}" class="img-fluid " width= "300"   alt= "Responsive image"></td>
                                 <td><a href='borrarImagen/{$imagen->id}'>Borrar</a></td>
                             </tr>
                        {/foreach}
                    </div>
                </div>
            </tbody>
        </table>
    </article> 
</div>
{include file="footer.tpl"}



 