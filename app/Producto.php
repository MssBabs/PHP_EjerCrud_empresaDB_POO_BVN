<?php
    /*  CREATE TABLE `PRODUCTOS`(
            `PRODUCTO_NO`      int(4)      NOT NULL,
            `DESCRIPCION`      varchar(30) DEFAULT NULL,
            `PRECIO_ACTUAL`    float(8,2)  DEFAULT NULL,
            `STOCK_DISPONIBLE` int(9)      DEFAULT NULL 
        )*/

    class Producto{
        /* ATRIBUTOS */
        private $PRODUCTO_NO;
        private $DESCRIPCION;
        private $PRECIO_ACTUAL;
        private $STOCK_DISPONIBLE;




        /* FUNCIONES */
        public function __get($atributo){           // Getter con método mágico
            if(property_exists($this, $atributo)) {
                return $this->$atributo;
            }
        }
        
        public function __set($atributo,$valor){    // Setter con método mágico
            if(property_exists($this, $atributo)) {
                $this->$atributo = $valor;
            }
        }
    }
?>