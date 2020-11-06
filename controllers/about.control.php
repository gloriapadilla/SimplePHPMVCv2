<?php
function run(){
    $viewData=array(
        "cuenta"=>"0801200008918",
        "nombre"=>"Elieth Aracely Colindres Sevilla",
        "correo"=>"eliethara@gmail.com"
    );
    $proyectos=array(
        array("id"=>1,"name"=>"Escuela Primaria: Instituto Evangelico Virginia Sapp"),
        array("id"=>2,"name"=>"Secundaria: Bachiller en Ciencias y Humanidades"),
        array("id"=>3,"name"=>"Congreso de innovación y tecnología “InnovaTE HN”"),
        array("id"=>4,"name"=>"Voluntariado en la Primera Olimpiada Nacional de
        Robótica WRO"),
        array("id"=>5,"name"=>"Taller de Power BI "),
        array("id"=>6,"name"=>"Ciclo de conferencias orientado en Educación Financiera,
        Estrategias de Mercadeo Digital y Modelos de Negocios ")
        
    );
    $viewData["proyectos"]=$proyectos;
    renderizar("about",$viewData);
}

run();



?>