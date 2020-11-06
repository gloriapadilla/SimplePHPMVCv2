<?php
require_once "libs/dao.php";
function getAllClientes(){
    $sqlstr="SELECT * from clients;";
    $resultSet=array();
    $resultSet=obtenerRegistros($sqlstr);
    return $resultSet;
}

function addNewClient($clientname,$clientgender,$clientphone1,$clientphone2,$clientmail,$clientidnumber,$clientbio,$clientstatus){
$insSql="INSERT INTO `clients`(`clientname`,`clientgender`,`clientphone1`,`clientphone2`,`clientmail`,`clientidnumber`)";
}
function getAllCategoriaById($clientid){
    $sqlstr="SELECT * from clients WHERE clientid=%d;";
    return obtenerUnRegistro(sprintf($sqlstr,$clientid));
}

?>