<h1>{{modedsc}}</h1>
<section>
    <form method="POST" action="index.php?page=cliente&mode={{mode}}&clientid={{clientid}}">
        <input type="hidden" name="mode" value="{{mode}}" />
        <input type="hidden" name="clientid" value="{{clientid}}"/>
        <div>
            <label for="clientname">Nombre Cliente:</label>
            <input  name="clientname" id="clientname" value="{{clientname}}" placeholder="Nombre Completo"/>
        </div>
        <div>
            <label for="clientgender">Genero:</label>
            <select name="clientgender" id="clientgender">
                <option value="FEM" {{clientgender_FEM}}>Femenino</option>
                <option value="MAS" {{clientgender_MAS}}>Masculino</option>
            </select>
        </div>
        <div>
            <label for="clientphone1">Telefono Principal:</label>
            <input type="text" name="clientphone1" id="clientphone1" value="{{clientphone1}}" placeholder="9999-9999"/>
        </div>
        <div>
            <label for="clientphone2">Telefono Secundaria</label>
            <input type="text" name="clientphone2" id="clientphone2" value="{{clientphone2}}" placeholder="9999-9999"/>
        </div>
        <div>
            <label for="clientmail">Correo:</label>
            <input type="text" name="clientmail" id="clientmail" value="{{clientmail}}" placeholder="mail@mail.com"/>
        </div>
        <div>
            <label for="clientidnumber">Identidad:</label>
            <input type="text" name="clientidnumber" id="clientidnumber" value="{{clientidnumber}}" placeholder="xxxx-xxxx-xxxx"/>
        </div>
        <div>
            <label for="clientbio">Bio:</label>
            <input type="text" name="clientbio" id="clientbio" value="{{clientbio}}" placeholder="Bio"/>
        </div>
        <div>
            <label for="clientstatus">Estado:</label>
            <select name="clientstatus" id="clientstatus">
                <option value="ACT" {{clientstatus_ACT}}>Activo</option>
                <option value="INA"{{clientstatus_INA}}>Inactivo</option>
            <select/>
        </div>
        <div>
            <label for="clientdatecrt">Date:</label>
            <input type="text" name="clientdatecrt" id="clientdatecrt" value="{{clientdatecrt}}" placeholder="10/10/2020"/>
        </div>
              <div>
            <label for="clientusercreate">Id usuario:</label>
            <input type="text" name="clientusercreate" id="clientusercreate" value="{{clientusercreate}}" placeholder="user"/>
        </div>
        <button id="btnsubmit" type="submit">Enviar</button>
        <button id="btncancel">Cancelar</button>
    </form>
</section>

<script>
    $().ready(function(){
        $("#btncancel").click(fuction(e){
            e.preventDefault();
            e.stopPropagation();
            location.assign("index.php?page=clientes");
        });
    });
</script>