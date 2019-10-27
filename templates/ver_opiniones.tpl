<section class="text-center">
    <article>
        <h1>Tabla De Opiniones</h1>
        <table class="table" name="tabla">
            <thead class="bg-primary ">
            <tr id="m-header">
                <th scope="col">Cliente</th>
                <th scope="col">Servicio</th>
                <th scope="col">Opinion sobre el servicio</th>
                <th scope="col">Ver mas</th>
                
            </tr>
        </thead>
        <tbody>
            {foreach from=$lista_opiniones item=opinion}
                <tr>
                    <td>{$opinion->cliente}</td>
                    <td>{$opinion->nombre}</td>
                    <td>{$opinion->opinion}</td>
                    <td><a href='verMasOpinion/{$opinion->id}'>Ver Mas</a></td>
                </tr>
            {/foreach}
        </tbody>
        </table>
    </article>
    <article>
        <div class="container">
            <div class="row">
                <div class="col">
                    <form action="listarOpinion" method="post">
                        <input type="submit" class="btn btn-primary" value="Mostrar opiniones ordenadas por categoria">
                    </form>
                </div>
            </div>
        </div> 
    </article>
</section>
{include file="footer.tpl"}
