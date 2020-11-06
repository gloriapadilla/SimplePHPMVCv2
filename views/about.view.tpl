<h1>Ficha de Desarrollo</h1>
<section>
    <h2>{{cuenta}} {{nombre}}</h2>
    <em>{{correo}}</em>
</section>
<section>
    <h2>Certificados</h2>
    <table>
    <tr>
        <td>ID</td>
        <td>Nombre</td>
    </tr>
    {{foreach proyectos}}
    <tr>
        <td>{{id}}</td>
        <td>{{name}}</td>
    </tr>
    {{endfor proyectos}}
    </table>
</section>