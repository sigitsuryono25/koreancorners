<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Etc
 *
 * @author sigit
 */
class Etc extends CI_Model {

    //put your code here

    function yeardate($date) {
        $year = explode("-", $date)[0];
        $month = explode("-", $date)[1];
        return $year . "/" . $month . "/";
    }

    function truncatedText($params, $truncatedCount) {
        $string = strip_tags($params);
        if (strlen($params) > $truncatedCount) {

            // truncate string
            $stringCut = substr($params, 0, $truncatedCount);
            $endPoint = strrpos($stringCut, ' ');

            //if the string doesn't contain any space then it will cut without word basis.
            $string = $endPoint ? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
        }
        return $string;
    }

}
