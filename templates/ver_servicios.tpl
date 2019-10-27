{include file="header.tpl"}
{include file="login.tpl"}
<section class="text-center">
    <article>
        <h1>Tabla De Servicios</h1>
        <table class="table" name="tabla">
            <thead class="bg-primary ">
                <tr id="m-header">
                    <th scope="col">Nombre Servicio</th>
                    <th scope="col">Informacion</th>
                    <th scope="col">Ver Opiniones</th>
                </tr>
            </thead>
            <tbody>
                {foreach from=$lista_servicios item=servicio}
                    <tr>
                        <td>{$servicio->nombre}</td>
                        <td>{$servicio->info}</td>
                        <td><a href='verMasServicios/{$servicio->id}'>Ver opiniones</a></td>
                    </tr>
                {/foreach}
            </tbody>
        </table>
    </article>
</section>

    
