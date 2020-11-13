<section><h1 for="clientname" id="clientname" name="clientname"> Comunicaciones Cliente: {{clientname}}</h1>
</section>
<form action="index.php?page=comunicaciones&clientid={{clientid}}&clientname={{clientname}}" method="post">

<section class="row">
  <h2>Filtrar por</h2>
  <div class="col-sm-12 col-md-10">
    <label class="col-sm-12 col-md-3" for="cmn_txtfilter">Id Comunicacion | Id Cliente</label>
    <input type="text" name="cmn_txtfilter" id="cmn_txtfilter" value="{{cmn_txtfilter}}"
      placeholder="Id Comunicacion | Id Cliente" class="col-sm-12 col-md-9"/>
  </div>
  <div class="col-sm-12 col-md-2">
    <button type="submit" name="btnFiltrar">Actualizar</button>
  </div>
</section>
</form>
<hr/>
<section class="row">
  <table class="col-sm-12">
    <thead class="zebra">
      <tr>
        <th>
          Código Comunicación
        </th>
        <th>
          Código Cliente
        </th>
        <th>
          Notas 
        </th>
        <th>
          Etiquetas
        </th>
        <th>
          Fecha Ingreso 
        </th>
        <th>
          Usuario Ingreso 
        </th>
        <th>
          Tipo Comunicación
        </th>
        <th>
          <a class="btn depth-1 s-margin" href="index.php?page=comunicacion&mode=INS&cmnid=0&clientid={{clientid}}&clientname={{clientname}}"><span class="ion-plus-circled"></span></a>
        </th>
      </tr>
    </thead>
    <tbody>
      {{foreach comunicaciones}}
        <tr>
          <td>
            {{cmnid}}
          </td>
          <td>
            {{clientid}}
          </td>
          <td>
            {{cmnnotas}} 
          </td>
          <td>
            {{cmntags}}
          </td>
            <td>
            {{cmnfching}}
          </td>
          <td>
            {{cmnusring}} 
          </td>
          <td>
            {{cmntipo}}
          </td>
            <td class="center">
           <a class="btn depth-1 s-margin" href="index.php?page=comunicacion&mode=DSP&cmnid={{cmnid}}&clientid={{clientid}}&clientname={{clientname}}"><span class="ion-eye"></a>
          </td>
        </tr>
        {{endfor comunicaciones}}
    </tbody>
    <tfoot>
    </tfoot>
  </table>
</section>