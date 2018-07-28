<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use File;
use App\Category;

class PostController extends Controller {

	public function createFolderAndFile() {
		//
		$localdirectory = public_path() . '/pages/';
		
		$categories = array(
		
				"structureddesignerskirt" => "17",
				"fancydress12yearsoldgirl" => "14",
				"weddingeveningdressestheoretical" => "35",
				"weddingeveningdressespractical" => "12",
				"weddingskirtspetticoatstheoretical" => "19",
				"weddingskirtspetticoatspractical" => "30",
				
				"premiumdress" => "54",
				"dresswithwholepiecetrain" => "34",
				"crewneckdresswithfullskirt" => "25",
				"gownwithbareskineffect" => "31",
				"gownwithbareskineffect2" => "22",
				"openbackdresswithbodysuitbase" => "23",
				"openbackdressbodicebase" => "22",
				"weddingdresswithoutseseams" => "29",
				"dresssleeves" => "33",
				"weddingdressfullskirt" => "42",
				"cropgown" => "43",
				"princesswedding" => "13",
				"ruffleskirt" => "22",
				"mermaweddingskirt" => "26",
				"steampunkcorset" => "27",
				"leathercorset" => "22",
				"dresslacing" => "24",
				"plusstrap" => "31",
				"corsetsleeves" => "28",
				"corsetmakingabc" => "8",
				"mustknow" => "7",
				"corsetday" => "4",
				"tipstricks" => "6",
				"sewingreviews" => "5",
				"cocktaildress" => "25",
				"transparenthours" => "1",
				"corsettechnique" => "10",
				"quiltedcups" => "14",
				"dresscutcups" => "15",
				"bodysuitcorsetcups" => "9",
				"partydress" => "17",
				"corsetwithdrapery" => "20",
				"corsetintegralstraps" => "27",
				"corsetpartcups" => "22",
				"corsetcutout" => "22",
				"rhinestonesdecoration" => "5",
				"additionaldecoration" => "5",
				"thickdecorationelements" => "5",
				"weddingdressdecoration" => "5",
				"sequinsdecoration" => "11",
				"casualgarmentdecoration" => "5",
				"epaulettesskirt" => "8",
				"tambourluneville" => "5",
				"thelawproportionschildren" => "3",
				"dressyearsoldgirl" => "9",
				"fancydressyearsoldgirl" => "16",
				"dressfancyoldgirl" => "14",
				"thebuttonloopclosure" => "2"
		);
		
		foreach ($categories as $category => $total) {
			//create folder
			$folderNameCatefory = $category ;
			$directory = $localdirectory . $folderNameCatefory . '/';
			
			if (! File::exists($directory)) {
				File::makeDirectory($directory, 0755, true, true);
			}
			for ($i = 1;$i <= $total; $i ++) {
				// create file
				$pathFile = $directory . 'tut' . $i . '.blade.php';
				if (! File::exists($pathFile)) {
					File::put($pathFile, "@extends('index')@section('content') video-sc @endsection");
				}
			}
		}
	}
	
    public function weddingeveningdressestheoretical($id) {
		return view('layouts.pages.weddingeveningdressestheoretical.tut' . $id);
	}
    public function weddingeveningdressespractical($id) {
		return view('layouts.pages.weddingeveningdressespractical.tut' . $id);
	}
    public function weddingskirtspetticoatstheoretical($id) {
		return view('layouts.pages.weddingskirtspetticoatstheoretical.tut' . $id);
	}
    public function weddingskirtspetticoatspractical($id) {
		return view('layouts.pages.weddingskirtspetticoatspractical.tut' . $id);
	}
	
    public function structureddesignerskirt($id) {
		return view('layouts.pages.structureddesignerskirt.tut' . $id);
	}
    public function fancydress12yearsoldgirl($id) {
		return view('layouts.pages.fancydress12yearsoldgirl.tut' . $id);
	}
    
	public function premiumdress($id) {
		//PostController::createFolderAndFile();
		return view('layouts.pages.premiumdress.tut' . $id);
	}

	public function dresswithwholepiecetrain($id) {
		return view('layouts.pages.dresswithwholepiecetrain.tut' . $id);
	}

	public function crewneckdresswithfullskirt($id) {
		return view('layouts.pages.crewneckdresswithfullskirt.tut' . $id);
	}

	public function gownwithbareskineffect($id) {
		return view('layouts.pages.gownwithbareskineffect.tut' . $id);
	}

	public function gownwithbareskineffect2($id) {
		return view('layouts.pages.gownwithbareskineffect2.tut' . $id);
	}

	public function openbackdresswithbodysuitbase($id) {
		return view('layouts.pages.openbackdresswithbodysuitbase.tut' . $id);
	}

	public function openbackdressbodicebase($id) {
		return view('layouts.pages.openbackdressbodicebase.tut' . $id);
	}

	public function weddingdresswithoutseseams($id) {
		return view('layouts.pages.weddingdresswithoutseseams.tut' . $id);
	}

	public function dresssleeves($id) {
		return view('layouts.pages.dresssleeves.tut' . $id);
	}

	public function weddingdressfullskirt($id) {
		return view('layouts.pages.weddingdressfullskirt.tut' . $id);
	}

	public function cropgown($id) {
		return view('layouts.pages.cropgown.tut' . $id);
	}

	public function princesswedding($id) {
		return view('layouts.pages.princesswedding.tut' . $id);
	}

	public function ruffleskirt($id) {
		return view('layouts.pages.ruffleskirt.tut' . $id);
	}

	public function mermaweddingskirt($id) {
		return view('layouts.pages.mermaweddingskirt.tut' . $id);
	}

	public function steampunkcorset($id) {
		return view('layouts.pages.steampunkcorset.tut' . $id);
	}

	public function leathercorset($id) {
		return view('layouts.pages.leathercorset.tut' . $id);
	}

	public function dresslacing($id) {
		return view('layouts.pages.dresslacing.tut' . $id);
	}

	public function plusstrap($id) {
		return view('layouts.pages.plusstrap.tut' . $id);
	}

	public function corsetsleeves($id) {
		return view('layouts.pages.corsetsleeves.tut' . $id);
	}

	public function corsetmakingabc($id) {
		return view('layouts.pages.corsetmakingabc.tut' . $id);
	}

	public function mustknow($id) {
		return view('layouts.pages.mustknow.tut' . $id);
	}

	public function corsetday($id) {
		return view('layouts.pages.corsetday.tut' . $id);
	}

	public function tipstricks($id) {
		return view('layouts.pages.tipstricks.tut' . $id);
	}

	public function sewingreviews($id) {
		return view('layouts.pages.sewingreviews.tut' . $id);
	}

	public function cocktaildress($id) {
		return view('layouts.pages.cocktaildress.tut' . $id);
	}

	public function transparenthours($id) {
		return view('layouts.pages.transparenthours.tut' . $id);
	}

	public function corsettechnique($id) {
		return view('layouts.pages.corsettechnique.tut' . $id);
	}

	public function quiltedcups($id) {
		return view('layouts.pages.quiltedcups.tut' . $id);
	}

	public function dresscutcups($id) {
		return view('layouts.pages.dresscutcups.tut' . $id);
	}

	public function bodysuitcorsetcups($id) {
		return view('layouts.pages.bodysuitcorsetcups.tut' . $id);
	}

	public function partydress($id) {
		return view('layouts.pages.partydress.tut' . $id);
	}

	public function corsetwithdrapery($id) {
		return view('layouts.pages.corsetwithdrapery.tut' . $id);
	}

	public function corsetintegralstraps($id) {
		return view('layouts.pages.corsetintegralstraps.tut' . $id);
	}

	public function corsetpartcups($id) {
		return view('layouts.pages.corsetpartcups.tut' . $id);
	}

	public function corsetcutout($id) {
		return view('layouts.pages.corsetcutout.tut' . $id);
	}

	public function rhinestonesdecoration($id) {
		return view('layouts.pages.rhinestonesdecoration.tut' . $id);
	}

	public function additionaldecoration($id) {
		return view('layouts.pages.additionaldecoration.tut' . $id);
	}

	public function thickdecorationelements($id) {
		return view('layouts.pages.thickdecorationelements.tut' . $id);
	}

	public function weddingdressdecoration($id) {
		return view('layouts.pages.weddingdressdecoration.tut' . $id);
	}

	public function sequinsdecoration($id) {
		return view('layouts.pages.sequinsdecoration.tut' . $id);
	}

	public function casualgarmentdecoration($id) {
		return view('layouts.pages.casualgarmentdecoration.tut' . $id);
	}

	public function epaulettesskirt($id) {
		return view('layouts.pages.epaulettesskirt.tut' . $id);
	}

	public function tambourluneville($id) {
		return view('layouts.pages.tambourluneville.tut' . $id);
	}

	public function thelawproportionschildren($id) {
		return view('layouts.pages.thelawproportionschildren.tut' . $id);
	}

	public function dressyearsoldgirl($id) {
		return view('layouts.pages.dressyearsoldgirl.tut' . $id);
	}

	public function fancydressyearsoldgirl($id) {
		return view('layouts.pages.fancydressyearsoldgirl.tut' . $id);
	}

	public function dressfancyoldgirl($id) {
		return view('layouts.pages.dressfancyoldgirl.tut' . $id);
	}
	public function thebuttonloopclosure($id) {
		return view('layouts.pages.thebuttonloopclosure.tut' . $id);
	}
}
