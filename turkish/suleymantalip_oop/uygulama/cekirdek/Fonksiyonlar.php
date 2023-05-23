<?php

class myFunc {

    public function __construct() {

    }

    public static function haftanin_kacinci_gunu() {
        $hafta = date('w');
        $hafta == 0 ? $hafta = 7 : null;
        return $hafta;
    }

}
