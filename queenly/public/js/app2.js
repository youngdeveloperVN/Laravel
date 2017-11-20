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
	var arrayCategories = '';
	
	listIdUl.forEach(function(entry){
		
		var selectorId = "#"+entry;
		
		if ($(selectorId)) {
			var itemList = $(selectorId).find('a');
			
			generateMethodControler(getMethodController(entry));
			var total = itemList.length;
			
			var folders = getMethodController(entry);
			
			arrayCategories = arrayCategories + generateCategory(folders, total);
			for (var i = 0; i < itemList.length; i++) {
				var item  = itemList.get(i);
				var hrefNew = '/' + entry.toLowerCase().replace('id', '') + '/' + 'tut' + (i + 1); 
				$(item).attr('href', hrefNew);
				//console.log($(item).attr('href'));
			}
		} else {
			console.log('Can not find ' + entry);
		}
		//rename id 
		$(selectorId).attr('id', folders);
	});
	
	var codePHP = '$categories = array('+ arrayCategories +');';
	console.log('Generate Code PHP : ' + codePHP);
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
	//console.log(line1 + line2 + line3);
}

// generate item of list
generateCategory= function(folder, total){
	/*var exp = '$categories = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");';
	console.log(exp);*/
	var item  = '"'+ folder + '"=>"'+ total +'",';
	//console.log(item);
	return item
}

refreshTabNav= function(){
	$('a.faq-tab').parent().css("display", "none");
	$('a#diploma').parent().css("display", "none");
	var listLiOfTab = $('div.lesson-tab ul.nav-tabs li');
	$(listLiOfTab[3]).css('display', 'none');
	$(listLiOfTab[4]).css('display', 'none');
	//console.log(listLiOfTab.length);
	console.log($(listLiOfTab[3]).text() + ' ' + $(listLiOfTab[4]).text() + ' is display none');
}

activeURLCurrent = function(){
	//remove all active
	var current = location.pathname;
	var totalTut = 0;
	//console.log(current+ ' is active');
	$('#courses a.access').each(function(){
        // if the current path is like this link, make it active
        if($(this).attr('href') === current){
        	//
        	$(this).parent().css("display", "block");
        	$(this).parent().parent('ul').css("display", "block");
        	$(this).parents('li').addClass('active');
        	console.log(current+ ' is active');
        	console.log($(this).parent().html() + ' is active');
        	totalTut = $(this).parent().parent().children().length;
        }
    });
	return totalTut;
}

//reset
resetActive = function(){
	$('ul#courses>li>ul>li').removeClass('active');
	//change icon
	$('li>a.nav-sub').click(function(){
		var parent = $(this).parent();
		if (!$(parent).hasClass('active')) {
			$(parent).addClass('active');
		} else{
			$(parent).removeClass('active');
		}
		roleShow();
	});
}

roleShow = function(){
	$('ul#courses>li>ul>li>ul').css("display", "none");
	$('ul#courses li.active>ul').css("display", "block");
}

navigatorTut = function(){
	
	var totalTut = activeURLCurrent();
	
	var current = location.pathname;
	var tutNumberCurrent = parseInt(current.replace ( /[^\d.]/g, '' ));
	
	var nextTut = current.replace(tutNumberCurrent,(tutNumberCurrent + 1));
	var previousTut = current.replace(tutNumberCurrent,(tutNumberCurrent - 1));
	
	console.log('Total Tut : '+ totalTut);
	console.log('Current Tut : '+ tutNumberCurrent);
	console.log('Path Next Tut : '+ nextTut);
	console.log('Path Previous Tut : '+ previousTut);s
	
	//add url
	$('div.next>a').first().attr('href', nextTut);
	$('div.previous>a').first().attr('href', previousTut);
	
	//show hide
	if (tutNumberCurrent === 1) {
		//show next, hide prevrious
		$('div.next').css('display', 'block');
		$('div.previous').css('display', 'none');
	} else if (tutNumberCurrent === totalTut) {
		//show next, hide prevrious
		$('div.next').css('display', 'none');
		$('div.previous').css('display', 'block');
	} else if (tutNumberCurrent === totalTut) {
		//show next, hide prevrious
		$('div.next').css('display', 'block');
		$('div.previous').css('display', 'block');
	}
	
}

$(document).ready(function() {
	addIdToUl();
	resetActive();
	roleShow();
	navigatorTut();
	refreshTabNav();
	
});