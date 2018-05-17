<?php

/*
	Author : Nazish Fraz
	Email : nfraz007@gmail.com
	Website : nfraz.co.nf
	Date : 2018-03-15
	Description : This file is basically for formatting the text in another format
*/

class Format
{
	function __construct(){

	}

	public static function index(){
		return 1;
	}

	public static function commaSeprate($number = ""){
		
	}

	public static function mask($string = "", $mask = ""){
		$pattern = array();
		$replacement = array();
		
		$string_mask = preg_replace($pattern, $replacement, $string);
		return $string_mask;
	}
}