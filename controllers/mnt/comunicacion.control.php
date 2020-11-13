<?php 

require_once "models/mnt/comunicaciones.model.php";

require_once 'controllers/mw/autorizar.mw.php';

function run() {
   
    $viewData=array();
    $viewData["mode"] = "";
    $viewData["modedsc"] = "";
    $viewData["cmnid"] = 0;
 
    $viewData["cmnnotas"] = "";
    $viewData["cmntags"] = "";
    $viewData["cmnfching"] = "";
    $viewData["cmnusring"] = $_SESSION["userCode"];
    $viewData["cmntipo"] = "";
    
    $viewData["readonly"] = "";
    $viewData["deletemsg"] = "";
    $viewData["readonlyid"] = "";
    $viewData["readonlyuser"] = "";
    $viewData["clientid"]=0;
    $viewData["clientname"]="";
    

    $modedsc = array(
      "INS"=>"Nueva Comunicacion",
      "DSP"=>"Detalle de Comunicacion %s"
    );
    if (isset($_GET["mode"])) {
        $viewData["mode"] = $_GET["mode"];
        $viewData["cmnid"] = intval($_GET["cmnid"]);
        $viewData["clientid"] = intval($_GET["clientid"]);
        $viewData["clientname"] = $_GET["clientname"];
        if (!isset($modedsc[$viewData["mode"]])) {
            redirectWithMessage("No se puede realizar esta operación.", "index.php?page=comunicaciones&clientid=". strval($viewData["clientid"])."&clientname=".$viewData["clientname"]);
        }
    }

    if (isset($_POST["btnsubmit"])) {
        mergeFullArrayTo($_POST, $viewData);
        //Verificacion de XSS_Token
        if (!(isset($_SESSION["cln_csstoken"]) && $_SESSION["cln_csstoken"] == $viewData["xsstoken"])) {
            redirectWithMessage("No se puede realizar esta operación.", "index.php?page=comunicaciones&clientid=". strval($viewData["clientid"])."&clientname=".$viewData["clientname"]);
            die();
        }

        // Validaciones de Entrada de Datos


        switch ($viewData["mode"]){
        case "INS":
            $result = addNewcomunicacion(   
                $viewData["clientid"],
                $viewData["cmnnotas"],
                $viewData["cmntags"],
             
                $viewData["cmnusring"],
                $viewData["cmntipo"] 

            );
            if ($result > 0) {
                redirectWithMessage("Guardado Exitosamente", "index.php?page=comunicaciones&clientid=". strval($viewData["clientid"])."&clientname=".$viewData["clientname"]);

                die();
            }
            break;
            case "DSP":
                redirectWithMessage("", "index.php?page=comunicaciones&clientid=". strval($viewData["clientid"])."&clientname=".$viewData["clientname"]);
            break;
        }
    }
    if ($viewData["mode"] === "INS") {
        $viewData["modedsc"] = $modedsc[$viewData["mode"]];
        $viewData["readonlyid"] = "readonly";
        $viewData["readonlyuser"] = "readonly";

    } else {
        $cmnDBData = getcomunicacionesById($viewData["cmnid"]);
        mergeFullArrayTo($cmnDBData, $viewData);

        $viewData["modedsc"] = sprintf($modedsc[$viewData["mode"]], $viewData["cmnid"]);

        // Sacar la data de la DB
        if ($viewData["mode"] != 'INS') {
            $viewData["readonlyid"] = "readonly";
            $viewData["readonly"] = "readonly";
            $viewData["readonlyuser"] = "readonly";
        }

    }
    // Crear un token unico
    // Guardar en sesión ese token unico para su verificación posterior
    $viewData["xsstoken"] = uniqid("cln", true);
    $_SESSION["cln_csstoken"] = $viewData["xsstoken"];
    renderizar("mnt/comunicacion", $viewData);
}

run();
?>