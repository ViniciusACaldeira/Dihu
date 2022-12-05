<?php

class Resultado{

    const OK = 200;
    const ERROR = 400;
    CONST WARNING = 600;

    public $status;
    public $texto;

    public function coletaStatus( )
    {
        $textoStatus = "";

        switch( $this->status )
        {
            case $this::OK:
                $textoStatus = "success";
                break;
            case $this::ERROR:
                $textoStatus = "danger";
                break;
            case $this::WARNING:
            default:
                $textoStatus = "warning";
                break;
        }

        return $textoStatus;
    }
}

?>