{include file="header.tpl"}
<section class="text-center">
    <article>
        <div class="container">
            <div class="row">
                <div class="col">
                    <form action="usuarioAplica" method="post">
                        <p>Usuario: <select name="usuario"></p>
                            {foreach from=$lista_usuarios item=usuario}
                                <option value="{$usuario->id}" >{$usuario->email}</option> 
                            {/foreach}
                        </select> 
                        <p>Prioridad: <select name="prioridad"></p>
                                <option value=" "> </option> 
                                <option value="1">1</option> 
                                <option value="2">2</option> 
                        </select> 
                        <input type="submit" class="btn btn-primary" value="aplicar">
                    </form>
                    <p>Nivel de acceso 1: Permite tener acceso a todo, te hace Administrador.</p>
                    <p>Nivel de acceso 2: Permite tener acceso a poder modicar las tablas.</p>
                </div>
                <div class="col">
                    <form action="usuarioBorrar" method="post">
                       <p>Usuario: <select name="usuario"></p>
                            {foreach from=$lista_usuarios item=usuario}
                                <option value="{$usuario->id}" >{$usuario->email}</option> 
                            {/foreach}
                        </select> 
                        <input type="submit" class="btn btn-primary" value="Borrar">
                    </form>
                </div>
            </div>
        </div>
    </article>
</section>