<?php
    function run(){
        $viewData = array(
            "cuenta"=>"0801200016415",
            "nombre"=>"Gloria M Padilla",
            "correo"=>"gtorres2164@gmail.com"
        );
        $proyectos = array(
            array("id"=>"1", "name"=>"Bachiller en Ciencias y Humanidades"),
            array("id"=>"2", "name"=>"Congreso de Innovacion y Tecnologia InnovaTE HN (2017)"),
            array("id"=>"3", "name"=>"Congreso de Innovacion y Tecnologia InnovaTE HN (2018)"),
            array("id"=>"4", "name"=>"Taller de Power BI"),
            array("id"=>"5", "name"=>"Ciclo de Conferencias en Educacion Financiera, Estrategias de Mercadeo Digital y Modelos de Negocios"),
            array("id"=>"6", "name"=>"Analisis de Datos con Python (JovianML)"),
        );
        $viewData["proyectos"] = $proyectos;
        renderizar("about", $viewData);
    }
    run();
?>