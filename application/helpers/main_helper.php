<?php defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists('formatted_date')) {
    function formatted_date($timestamp, $format = "d/m/Y - H:i"){
        return date($format, strtotime($timestamp));
    }
}

if (!function_exists('formatted_date_indo')) {
    function formatted_date_indo($date){
    	$date = formatted_date($date,"Y-m-d");
		$month = array (
			1 =>   
			'Januari',
			'Februari',
			'Maret',
			'April',
			'Mei',
			'Juni',
			'Juli',
			'Agustus',
			'September',
			'Oktober',
			'November',
			'Desember'
		);

		$array = explode('-', $date);
		return $array[2] . ' ' . $month[ (int)$array[1] ] . ' ' . $array[0];
	}
}

if (!function_exists('clean_str')) {
    function clean_str($str)
    {
        $ci =& get_instance();
        $str = $ci->security->xss_clean($str);
        $str = remove_special_characters($str, false);
        return $str;
    }
}

if (!function_exists('remove_special_characters')) {
    function remove_special_characters($str, $is_slug = false)
    {

        $str = trim($str);

        $str = str_replace('#', '', $str);

        $str = str_replace(';', '', $str);

        $str = str_replace('!', '', $str);

        $str = str_replace('"', '', $str);

        $str = str_replace('$', '', $str);

        $str = str_replace('%', '', $str);

        $str = str_replace('(', '', $str);

        $str = str_replace(')', '', $str);

        $str = str_replace('*', '', $str);

        $str = str_replace('+', '', $str);

        $str = str_replace('/', '', $str);

        $str = str_replace('\'', '', $str);

        $str = str_replace('<', '', $str);

        $str = str_replace('>', '', $str);

        $str = str_replace('=', '', $str);

        $str = str_replace('?', '', $str);

        $str = str_replace('[', '', $str);

        $str = str_replace(']', '', $str);

        $str = str_replace('\\', '', $str);

        $str = str_replace('^', '', $str);

        $str = str_replace('`', '', $str);

        $str = str_replace('{', '', $str);

        $str = str_replace('}', '', $str);

        $str = str_replace('|', '', $str);

        $str = str_replace('~', '', $str);

        if ($is_slug == true) {

            $str = str_replace(" ", '-', $str);

            $str = str_replace("'", '', $str);

        }

        return $str;
    }
}
