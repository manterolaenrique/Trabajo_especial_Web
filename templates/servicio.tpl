<section class="text-center">
    <article>
        <h1>PANEL DE ADMINISTRACION</h1>
        <form action="cerrarSesion" method="post">
            <input type="submit" class="btn btn-primary" value="Cerrar Sesion">
        </form>
        <h1 class="text-center titulo">Tabla De Servicios</h1>
            <table class="table" name="tabla">
                <thead class="bg-primary ">
                    <tr id="m-header">
                        <th scope="col">Nombre Servicio</th>
                        <th scope="col">Informacion</th>
                        <th scope="col">Borrar</th>
                        <th scope="col">Editar</th>
                    </tr>
                    </thead>
                    <tbody>
                        {foreach from=$lista_servicios item=servicio}
                            <tr>
                                <td>{$servicio->nombre}</td>
                                <td>{$servicio->info}</td>
                                <td><a href='borrar/{$servicio->id}'>Borrar</a></td>
                                <td><a href='mostrarEditarServicio/{$servicio->id}'>Editar</a></td>
                            </tr>
                        {/foreach}
                    </tbody>
            </table>
    </article>
    <article>
        <div class="container">
            <div class="row">
                <div class="col">
                    <form action="insertarServicio" method="post">
                        <input type="text" class="form-control" name="nombre_servicio" id="nom" placeholder="Servicio">
                        <input type="text" class="form-control form-control-lg" name="info_servicio" placeholder="Descripcion">
                        <input type="submit" class="btn btn-primary" value="Insertar">
                    </form>
                </div>
            </div>
        </div>
    </article>
</section>



    
