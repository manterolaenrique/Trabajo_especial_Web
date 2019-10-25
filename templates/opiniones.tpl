<section class="text-center">
    <article>
        <h1>Tabla De Opiniones</h1>
        <table class="table" name="tabla">
        <thead class="bg-primary ">
           <tr id="m-header">
                <th scope="col">Cliente</th>
                <th scope="col">Servicio</th>
                <th scope="col">Opinion sobre el servicio</th>
                <th scope="col">Borrar</th>
                <th scope="col">Editar</th>
            </tr>
        </thead>
            <tbody>
                {foreach from=$lista_opiniones item=opinion}
                   <tr>
                        <td>{$opinion->cliente}</td>
                        <td>{$opinion->nombre}</td>
                        <td>{$opinion->opinion}</td>
                        <td><a href='borrarOpinion/{$opinion->id}'>Borrar</a></td>
                        <td><a href='mostrarEditarOpinion/{$opinion->id}'>Editar</a></td>
                    </tr>
                {/foreach}
            </tbody>
        </table>
    </article> 
{include file="footer.tpl"}
