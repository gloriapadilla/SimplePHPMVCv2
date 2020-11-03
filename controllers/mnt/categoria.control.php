<?php
require_once 'models/mnt/categorias.model.php'
function run(){
    $viewData=array();
    $viewData["mode"]="";
    $viewData["modedsc"]="";
    $viewData["catecod"]=0;
    $viewData["catenom"]="";
    $viewData["cateest"]="";
    $modedsc=array(
        "INS"=>"Nuevo Categoria",
        "UPD"=>"Actualizar",
        "VS"=> "View"
    );
    if(isset($_GET["mode"])){
        $viewData["mode"]=$_GET["mode"];
        $viewData["catecod"]=intval($_GET["catecod"]);
        if(!isset($modedsc[$viewData["mode"]])){
            redirectWithMessage("No se puede realizar esta operacion.", "index.php?page=categorias");
            die();
        }
    }
    if(isset($_POST["btnsubmit"])){
        mergeFullArrayTo($_POST,$viewData);
        switch($viewData["mode"]){
            case "INS":
                $result=addNewCategoria(
                    $viewData["catenom"],
                    $viewData["cateest"]
                );
                if($result>0){
                    redirectWithMessage("Guardado Exitosamente","index.php?page=categorias");
                    die();
                }
            break;
        }
    }
    if($viewData["mode"]==="INS"){
        $viewData["modedsc"]=$modedsc[$viewData["mode"]];

    }else{
        $clientDBData=getCategoriaById($viewData["catecod"]);
        mergeFullArrayTo($clientDBData,$viewData);
        $viewData["modedsc"]=sprintf($modedsc[$viewData["mode"]])
    }
    renderizar("mnt/cliente",$viewData);
}
run();

?>