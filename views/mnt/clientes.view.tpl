<section><h1>Mantenimiento de clientes</h1></section>
<section>Aqui va el formulario del filtro</section>
<section>
    <table>
        <thead>
            <tr>
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Telefono</th>
                <th>Correo</th>
                <th><a href="index.php?page=cliente&mode=INS&clientid=0">Nuevo</a><br/></th>
            </tr>
        </thead>
        <tbody>
            {{foreach clientes}}
            <tr>
                <td>{{clientid}}</td>
                <td>{{clientname}}</td>
                <td>{{clientphone1}} {{clientphone2}}</td>
                <td>{{clientmail}}</td>
                <td>
                    <a href="index.php?page=cliente&mode=UPD&clientid={{clientid}}">Editar</a><br/>
                    <a href="index.php?page=cliente&mode=DSP&clientid={{clientid}}">Mostrar</a><br/>
                    <a href="index.php?page=cliente&mode=DEL&clientid={{clientid}}">Eliminar</a><br/>
                </td>
            </tr>
            {{endfor clientes}}
        </tbody>
        <tfoot>
        </tfoot>
    </table>
</section>