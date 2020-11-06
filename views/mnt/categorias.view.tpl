<section><h1>Mantenimiento de Categoria</h1></section>
<section>Formulario</section>
<div class="row depth-1 m-padding">
  <form action="index.php?page=categorias" method="post" class="col-md-8 col-offset-2">
      <div class="row s-padding">
        <label class="col-md-1" for="fltNombre">Nombre:&nbsp;</label>
        <input type="text" name="cln_txtfilter"  class="col-md-8"
              id="cln_txtfilter" placeholder="Nombre" value="{{cln_txtfilter}}" />
         <button type="submit" class="col-md-3" id="btnFiltro" name="btnFiltro"><span class="ion-refresh">&nbsp;Actualizar</span></button>
    </div>
   
  </form>
  
</div>

<section>
    <table>
        <thead>
            <tr>
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Estado</th>
                <th><a href="index.php?page=categoria&mode=INS&catecod=0">Insertar</a><br/></th>
            </tr>
        </thead>
        <tbody>
            {{foreach categorias}}
            <tr>
                <td>{{catecod}}</td>
                <td>{{catenom}}</td>
                <td>{{cateest}}</td>
                <td>
                    <a href="index.php?page=categoria&mode=UPD&catecod={{catecod}}">Actualizar</a><br/>
                    <a href="index.php?page=categoria&mode=VS&catecod={{catecod}}">View</a><br/>
                    
                </td>
            </tr>
            {{endfor categorias}}
        </tbody>
    </table>
</section>

<script>
    $().ready(
    function(){
      $("#btnFiltro").click(
        function(e){
          e.preventDefault();
          e.stopPropagation();
          document.forms[0].submit();
        }
      );
    }

    );
</script>