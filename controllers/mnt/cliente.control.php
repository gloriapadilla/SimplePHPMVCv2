<?php
/*idclient bigint(15) AI PK 
clientname varchar(128) 
clientgender char(3) 
clientphone1 varchar(225) 
clientphone2 varchar(225) 
clientmail varchar(225) 
clientidnumber varchar(45) 
clientbio varchar(500) 
clientstatus varchar(45) 
clientdatecrt datetime 
clientusercreate bigint(10)*/
require_once 'models/mnt/clientes.model.php';
    function run(){
        $viewData=array();
        $viewData["mode"]="";
        $viewData["modedsc"]="";
        $viewData["clientid"]=0;
        $viewData["clientname"]="";
        $viewData["clientgender"]="FEM";
        $viewData["clientphone1"]="";
        $viewData["clientphone2"]="";
        $viewData["clientmail"]="";
        $viewData["clientidnumber"]="";
        $viewData["clientbio"]="";
        $viewData["clientstatus"]="ACT";
        $viewData["clientdatecrt"]="";
        $viewData["clientusercreate"]="";
        $modedsc=array(
            "INS"=>"Nuevo Cliente",
            "UPD"=>"Actualizar Cliente %s",
            "DEL"=>"Eliminar Cliente %s",
            "DSP"=>"Detalle de Cliente %s"
        );
        if(isset($_GET["mode"])){
            $viewData["mode"]=$_GET["mode"];
            $viewData["clientid"]=intval($_GET["clientid"]);
            if(!isset($modedsc[$viewData["mode"]])){
                redirectWithMessage("No se puede realizar esta operación.","index.php?page=clientes");
                die();
            }
        }
        if(isset($_POST["btnsubmit"])){
            mergeFullArrayTo($_POST, $viewData);
            switch ($viewData["mode"]) {
                case "INS":
                    $result=addNewClient(
                        $viewData["clientname"],
                        $viewData["clientgender"],
                        $viewData["clientphone1"],
                        $viewData["clientphone2"],
                        $viewData["clientmail"],
                        $viewData["clientidnumber"],
                        $viewData["clientbio"],
                        $viewData["clientstatus"],
                        $viewData["clientdatecrt"],
                        $viewData["clientusercreate"]
                    );
                break;
            }
        }
        if($viewData["mode"]=="INS"){
            $viewData["modedsc"]=$modedsc[$viewData["mode"]];
        }else{
            $clientDBData=getClientesById($viewData["catecod"]);
            mergeFullArrayTo($clientDBData,$viewData);
            $viewData["modedsc"]=sprintf($modedsc[$viewData["mode"]]);
        }
        renderizar("mnt/cliente",$viewData);
    }
    run();

?>