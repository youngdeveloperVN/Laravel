var listIdUl = [ "idPremiumdress", "idDressWithWholePieceTrain",
		"idCrewNeckDressWithFullSkirt", "idGownWithBareSkinEffect",
		"idGownWithBareSkinEffect2", "idOpenBackDressWithBodysuitBase",
		"idOpenBackDressBodiceBase", "idWeddingDressWithoutSeSeams",
		"idDressSleeves", "idWeddingDressFullSkirt", "idCropGown",
		"idPrincessWedding", "idRuffleSkirt", "idMermaWeddingSkirt",
		"idSteampunkCorset", "idLeatherCorset", "idDressLacing", "idPlusStrap",
		"idCorsetSleeves", "idCorsetMakingABC", "idMustKnow", "idCorsetDay",
		"idTipsTricks", "idSewingReviews", "idCocktailDress",
		"idTransparentHours", "idCorsetTechnique", "idQuiltedCups",
		"idDressCutCups", "idBodysuitCorsetCups", "idPartyDress",
		"idCorsetWithDrapery", "idCorsetIntegralStraps", "idCorsetPartCups",
		"idCorsetCutOut", "idRhinestonesDecoration", "idAdditionalDecoration",
		"idThickDecorationElements", "idWeddingDressDecoration",
		"idSequinsDecoration", "idCasualGarmentDecoration",
		"idEpaulettesSkirt", "idTambourLuneville",
		"idTheLawProportionsChildren", "idDressYearsOldGirl",
		"idFancyDressYearsOldGirl", "idDressFancyOldGirl" ];

addIdToUl = function() {
	listIdUl.forEach(function(entry){
		
		var selectorId = "#"+entry;
		if ($(selectorId)) {
			var itemList = $(selectorId).find('a');
			
			//generateMethodControler(getMethodController(entry));
			
			for (var i = 0; i < itemList.length; i++) {
				var item  = itemList.get(i);
				var hrefNew = '/' + entry.toLowerCase().replace('id', '') + '/' + 'tut' + (i + 1); 
				$(item).attr('href', hrefNew);
				//console.log($(item).attr('href'));
			}
		} else {
			console.log('Can not find ' + entry);
		}
	});
}

getMethodController = function(entry){
	var folder = entry.toLowerCase().replace('id', '');  //premiumdress
	var pathService = '/' + folder + '/' + 'tut{id}';  // /premiumdress/tut{id}
	var methodController = "PostController@" + folder;
	var routerString = "Route::get('"+ pathService +"', '"+ methodController +"');";
	//console.log(folder);
	return folder;
}

generateMethodControler = function (methodName){
	var line1 = "public function "+ methodName +"($id) {";
	var line2 = "	return view('layouts.pages."+ methodName +".tut'.$id);";
	var line3 = "}";
	console.log(line1 + line2 + line3);
}

createFolder = function(nameFolder){
	
	
}

$(document).ready(function() {
	addIdToUl();
});
