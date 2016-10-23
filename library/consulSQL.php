<?php
/* Clase para ejecutar las consultas a la Base de Datos*/
class ejecutarSQL {
    public static function conectar(){
        if(!$con=  mysql_connect(SERVER,USER,PASS)){
            die("Error en el servidor, verifique sus datos");
        }
        if (!mysql_select_db(BD)) {
            die("Error al conectar con la base de datos, verifique el nombre de la base de datos");
        }
        /* Codificar la información de la base de datos a UTF8*/
        mysql_set_charset('utf8',$con);
        return $con;  
    }
    public static function consultar($query) {
        if (!$consul = mysql_query($query, ejecutarSQL::conectar())) {
            die(mysql_error().'Error en la consulta SQL ejecutada');
        }
        return $consul;
    }  
}
/* Clase para hacer las consultas Insertar, Eliminar y Actualizar */
class consultasSQL{
    public static function InsertSQL($tabla, $campos, $valores) {
        if (!$consul = ejecutarSQL::consultar("insert into $tabla ($campos) VALUES($valores)")) {
            die("Ha ocurrido un error al insertar los datos en la tabla $tabla");
        }
        return $consul;
    }
    public static function DeleteSQL($tabla, $condicion) {
        if (!$consul = ejecutarSQL::consultar("delete from $tabla where $condicion")) {
            die("Ha ocurrido un error al eliminar los registros en la tabla $tabla");
        }
        return $consul;
    }
    public static function UpdateSQL($tabla, $campos, $condicion) {
        if (!$consul = ejecutarSQL::consultar("update $tabla set $campos where $condicion")) {
            die("Ha ocurrido un error al actualizar los datos en la tabla $tabla");
        }
        return $consul;
    }
}
