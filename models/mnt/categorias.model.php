<?php
require_once "libs/dao.php";
function getAllCategorias(){
    $sqlstr="SELECT * from categorias;";
    $resultSet=array();
    $resultSet=obtenerRegistros($sqlstr);
    return $resultSet;
}
function getAllCategoriaById($catecod){
    $sqlstr="SELECT * from categorias WHERE catecod=%d;";
    return obtenerUnRegistro(sprintf($sqlstr,$catecod));
}
function getAllCategoriaByName($catenom){
    $sqlstr = sprintf("SELECT * from categorias WHERE catenom LIKE '%s%';");
    return obtenerRegistros(sprintf($sqlstr,$catenom));
}

function addNewCategoria($catenom,$cateest){
    $insSql="INSERT INTO `categorias`(`catenom`,`cateest`) VALUES ('%s','%s');";
    return ejecutarNonQuery(
        sprintf(
            $insSql,
            $catenom,
            $cateest
        )
    );
}
function updateCategoria($catenom,$cateest,$catecod){
    $insSql="UPDATE `categorias` SET `catenom`='%s',`cateest`='%s'  WHERE `catecod`='%d';";
        return ejecutarNonQuery(
            sprintf(
                $insSql,
                $catenom,
                $cateest,
                $catecod
            )
        );
    }
?>