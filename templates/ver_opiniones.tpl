<section class="text-center">
    <article>
        <h1>Tabla De Opiniones</h1>
        <table class="table" name="tabla">
            <thead class="bg-primary ">
            <tr id="m-header">
                <th scope="col">Cliente</th>
                <th scope="col">Servicio</th>
                <th scope="col">Opinion sobre el servicio</th>
            </tr>
        </thead>
        <tbody>
            {foreach from=$lista_opiniones item=opinion}
                <tr>
                    <td>{$opinion->cliente}</td>
                    <td>{$opinion->opinion}</td>
                </tr>
            {/foreach}
        </tbody>
        </table>
    </article>
</section>
{include file="footer.tpl"}
