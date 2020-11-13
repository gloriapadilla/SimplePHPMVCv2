<?php

require_once "libs/dao.php";

function getAllcomunicaciones(){
    $sqlstr = "SELECT comunicaciones.cmnid,comunicaciones.clientid, comunicaciones.cmnnotas, comunicaciones.cmntags,comunicaciones.cmnfching,comunicaciones.cmnusring,comunicaciones.cmntipo,clients.clientname from comunicaciones INNER JOIN clients ON comunicaciones.clientid=clients.clientid;";
    $resultSet = array();
    $resultSet = obtenerRegistros($sqlstr);
    return $resultSet;
}
function getcomunicacionesById($cmnid) {
    $sqlstr = "SELECT * from comunicaciones where cmnid = %d;";
    return obtenerUnRegistro(sprintf($sqlstr, $cmnid));
}

function getcomunicacionesPorFiltro($filtro) {
    $ffiltro = $filtro.'%';
    $sqlstr = "SELECT * from comunicaciones where cmnid like '%s' or clientid like '%s';";
    return obtenerRegistros(sprintf($sqlstr, $ffiltro, $ffiltro));
}

function addNewcomunicacion($clientid, $cmnnotas, $cmntags,$cmnusring, $cmntipo){
    $insSql = "INSERT INTO `comunicaciones` (`clientid`, `cmnnotas`, `cmntags`,`cmnfching`,`cmnusring`,`cmntipo`)
VALUES ( '%s', '%s','%s', NOW(),'%s', '%s');";
    return ejecutarNonQuery(
        sprintf(
            $insSql,
            $clientid,
            $cmnnotas,
            $cmntags,

            $cmnusring, 
            $cmntipo
        )
    );
}

?>