var listIdUl = [ 
		"idStructureddesignerskirt",
		"idFancydress12yearsoldgirl",
		"idWeddingeveningdressestheoretical", 
		"idWeddingeveningdressespractical", 
		"idWeddingskirtspetticoatstheoretical", 
		"idWeddingskirtspetticoatspractical", 
		"idPremiumdress", "idDressWithWholePieceTrain",
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
		"idFancyDressYearsOldGirl", "idDressFancyOldGirl", "idTheButtonLoopClosure" ];

addIdToUl = function() {
	var arrayCategories = '';
	
	listIdUl.forEach(function(entry){
		
		var selectorId = "#"+entry;
		
		if ($(selectorId)) {
			var itemList = $(selectorId).find('a');
			
			//generateMethodControler(getMethodController(entry));
			var total = itemList.length;
			
			var folders = getMethodController(entry);
			
			//arrayCategories = arrayCategories + generateCategory(folders, total);
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
	
	//trans html from Desktpop to Mobile list
	var htmlExpected = $('#list-content').html();
	$('#content_mobile').html(htmlExpected);
	
	//var codePHP = '$categories = array('+ arrayCategories +');';
	//console.log('Generate Code PHP : ' + codePHP);
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
	//console.log($(listLiOfTab[3]).text() + ' ' + $(listLiOfTab[4]).text() + ' is display none');
}

activeURLCurrent = function(){
	//remove all active
	var current = location.pathname;
	var totalTut = 0;
	//console.log(current+ ' is active');
	$('#courses a.access').each(function(){
        // if the current path is like this link, make it active
        if($(this).attr('href') === current){
        	$(this).parent().css("display", "block");
        	$(this).parent().parent('ul').css("display", "block");
        	$(this).parents('li').addClass('active');
        	//console.log(current+ ' is active');
        	//console.log($(this).parent().html() + ' is active');
        	totalTut = $(this).parent().parent().children().length;
        }
    });
	return totalTut;
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
	console.log('Path Previous Tut : '+ previousTut);
	
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

roleShow = function(){
	$('#courses li > ul').css('display', 'none');
	$('#courses li.active>ul').css('display', 'block');
}

roleActive = function(){
	//$('#courses>li').addClass('active');
	$('#courses>li>ul>li').removeClass('active');
	$('li>a.nav-sub, li>a.second').click(function(){
		var parent = $(this).parent();
		if (!$(parent).hasClass('active')) {
			$(parent).addClass('active');
		} else{
			$(parent).removeClass('active');
			$(parent).find('ul li.active').removeClass('active');
			//console.log($(parent).find('ul li.active').length);
		}
		roleShow();
	});
}
	
$(document).ready(function() {
	addIdToUl();
	navigatorTut();
	refreshTabNav();
	roleActive();
	roleShow();
	activeURLCurrent();
});