<?php

namespace App\Helpers;
use Log;

class Helper {
	
	public static function ultilFormatDate($date) {
		return \Carbon\Carbon::parse($date)->format(config('constants.formatDateType'));
	}
	
	public static function getFisrtElementOfContentPost($content) {
		$dot = ".";
		$position = stripos ( $content, $dot );
		if ($position) { // if there's a dot in our soruce text do
			$offset = $position + 1; // prepare offset
			$position2 = stripos ( $content, $dot, $offset ); // find second dot using offset
			$first_two = substr ( $content, 0, $position2 ); // put two first sentences under $first_two
			return $first_two . '...'; // add a dot
		}
	}
	
	public static function uploadImage($image) {
		
		$fileName = $image->getClientOriginalName();
		$destinationPath = public_path('/images');
		$image->move($destinationPath, $fileName);
		
		return $fileName;
	}
	
}
