<?php

// - Para que este archivo sea reconocido en el proyecto debe volver a compilar dicho proyecto con el siguiente comando:
    //composer dumpautoload

    function setActivo($ruta){
        return request()->routeIs($ruta)? 'activo':'';
    }
?>