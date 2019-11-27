{include file="header.tpl"}

    <article class="text-center">
        <form action="usuarioAplica" method="post">
            <select name="usuario">
                    <option value=" "> </option> 
                {foreach from=$lista_usuarios item=usuario}
                    <option value="{$usuario->id}" >{$usuario->email}</option> 
                {/foreach}
            </select> 
            <select name="prioridad">
                    <option value=" "> </option> 
                    <option value="1">1</option> 
                    <option value="2">2</option> 
            </select> 
            <input type="submit" class="btn btn-primary" value="aplicar">
        </form>

         <form action="usuarioBorrar" method="post">
         <select name="usuario">
                    <option value=" "> </option> 
                {foreach from=$lista_usuarios item=usuario}
                    <option value="{$usuario->id}" >{$usuario->email}</option> 
                {/foreach}
            </select> 
            <input type="submit" class="btn btn-primary" value="Borrar">
        </form>
    </article>
