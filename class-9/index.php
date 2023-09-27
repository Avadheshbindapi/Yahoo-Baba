<?php
    class bace {
        protected static $name = "Yahoo";
        public function show(){
            echo static::$name;
            echo self::$name;
        }
    }
    class dervied extends bace{
        protected static $name = "Baba";
    }

    $test = new dervied();
    $test->show();
?>