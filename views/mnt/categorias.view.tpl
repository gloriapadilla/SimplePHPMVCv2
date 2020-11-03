<section><h1>Mantenimiento de Clientes</h1></section>
<section>Formulario</section>
<section>
    <table>
        <thead>
            <tr>
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Estado</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            {{foreach categorias}}
            <tr>
                <td>{{catecod}}</td>
                <td>{{catenom}}</td>
                <td>{{cateest}}</td>
                <td>
                    <a href="index.php?page=categoria&mode=INS&catecod={{catecod}}">Insertar</a><br/>
                    <a href="index.php?page=categoria&mode=UPD&catecod={{catecod}}">Actualizar</a><br/>
                    <a href="index.php?page=categoria&mode=VS&catecod={{catecod}}">View</a><br/>
                    
                </td>
            </tr>
            {{endfor categorias}}
        </tbody>
    </table>
</section>
//27:53