<h1>{{modedsc}}</h1>
<section>
  <form method="post" action="index.php?page=comunicacion&mode={{mode}}&cmnid={{cmnid}}&clientid={{clientid}}&clientname={{clientname}}">
    <input type="hidden" name="mode" value="{{mode}}"/>
    <input type="hidden" name="cmnid" value="{{cmnid}}"/>
    <input type="hidden" name="xsstoken" value="{{xsstoken}}"/>
    <div>
    <label for="clientid">Id Cliente</label>
    <input {{readonlyid}} type="text" name="clientid" id="clientid" value="{{clientid}}" placeholder="Id Cliente" />
    </div>
    <div>
      <label for="cmnnotas">Notas</label>
      <input {{readonly}} type="text" name="cmnnotas" id="cmnnotas" value="{{cmnnotas}}" placeholder="Notas" />
    </div>
    <div>
      <label for="cmntags">Etiquetas</label>
      <input {{readonly}} type="text" name="cmntags" id="cmntags" value="{{cmntags}}" placeholder="Etiquetas" />
    </div>

    <div>
      <label for="cmnusring">Usuario </label>
      <input {{readonlyuser}} type="text" name="cmnusring" id="cmnusring" value="{{cmnusring}}" placeholder="Usuario" />
    </div>
    <div>
      <label for="cmntipo">Tipo comunicacion</label>
      <input {{readonly}} type="text" name="cmntipo" id="cmntipo" value="{{cmntipo}}" placeholder="Tipo comunicacion" />
    </div>
    
    {{if deletemsg}}
      <div class="alert">
        {{deletemsg}}
      </div>
    {{endif deletemsg}}
    <button id="btnsubmit" name="btnsubmit" type="submit">Enviar</button>
    <button id="btncancel">Cancelar</button>
  </form>
</section>

<script>
  $().ready(function(){
    $("#btncancel").click(function(e){
      e.preventDefault();
      e.stopPropagation();
      location.assign("index.php?page=comunicaciones&clientid={{clientid}}&clientname={{clientname}}");
    });
  });
  
</script>