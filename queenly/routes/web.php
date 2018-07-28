<?php

/*
 * |--------------------------------------------------------------------------
 * | Web Routes
 * |--------------------------------------------------------------------------
 * |
 * | Here is where you can register web routes for your application. These
 * | routes are loaded by the RouteServiceProvider within a group which
 * | contains the "web" middleware group. Now create something great!
 * |
 */
Route::get('/', function () {
	return view('layouts.introduction');
});

Route::get('/premiumdress/tut{id}', 'PostController@premiumdress');
Route::get('/dresswithwholepiecetrain/tut{id}', 'PostController@dresswithwholepiecetrain');
Route::get('/crewneckdresswithfullskirt/tut{id}', 'PostController@crewneckdresswithfullskirt');
Route::get('/gownwithbareskineffect/tut{id}', 'PostController@gownwithbareskineffect');
Route::get('/gownwithbareskineffect2/tut{id}', 'PostController@gownwithbareskineffect2');
Route::get('/openbackdresswithbodysuitbase/tut{id}', 'PostController@openbackdresswithbodysuitbase');
Route::get('/openbackdressbodicebase/tut{id}', 'PostController@openbackdressbodicebase');
Route::get('/weddingdresswithoutseseams/tut{id}', 'PostController@weddingdresswithoutseseams');
Route::get('/dresssleeves/tut{id}', 'PostController@dresssleeves');
Route::get('/weddingdressfullskirt/tut{id}', 'PostController@weddingdressfullskirt');
Route::get('/cropgown/tut{id}', 'PostController@cropgown');
Route::get('/princesswedding/tut{id}', 'PostController@princesswedding');
Route::get('/ruffleskirt/tut{id}', 'PostController@ruffleskirt');
Route::get('/mermaweddingskirt/tut{id}', 'PostController@mermaweddingskirt');
Route::get('/steampunkcorset/tut{id}', 'PostController@steampunkcorset');
Route::get('/leathercorset/tut{id}', 'PostController@leathercorset');
Route::get('/dresslacing/tut{id}', 'PostController@dresslacing');
Route::get('/plusstrap/tut{id}', 'PostController@plusstrap');
Route::get('/corsetsleeves/tut{id}', 'PostController@corsetsleeves');
Route::get('/corsetmakingabc/tut{id}', 'PostController@corsetmakingabc');
Route::get('/mustknow/tut{id}', 'PostController@mustknow');
Route::get('/corsetday/tut{id}', 'PostController@corsetday');
Route::get('/tipstricks/tut{id}', 'PostController@tipstricks');
Route::get('/sewingreviews/tut{id}', 'PostController@sewingreviews');
Route::get('/cocktaildress/tut{id}', 'PostController@cocktaildress');
Route::get('/transparenthours/tut{id}', 'PostController@transparenthours');
Route::get('/corsettechnique/tut{id}', 'PostController@corsettechnique');
Route::get('/quiltedcups/tut{id}', 'PostController@quiltedcups');
Route::get('/dresscutcups/tut{id}', 'PostController@dresscutcups');
Route::get('/bodysuitcorsetcups/tut{id}', 'PostController@bodysuitcorsetcups');
Route::get('/partydress/tut{id}', 'PostController@partydress');
Route::get('/corsetwithdrapery/tut{id}', 'PostController@corsetwithdrapery');
Route::get('/corsetintegralstraps/tut{id}', 'PostController@corsetintegralstraps');
Route::get('/corsetpartcups/tut{id}', 'PostController@corsetpartcups');
Route::get('/corsetcutout/tut{id}', 'PostController@corsetcutout');
Route::get('/rhinestonesdecoration/tut{id}', 'PostController@rhinestonesdecoration');
Route::get('/additionaldecoration/tut{id}', 'PostController@additionaldecoration');
Route::get('/thickdecorationelements/tut{id}', 'PostController@thickdecorationelements');
Route::get('/weddingdressdecoration/tut{id}', 'PostController@weddingdressdecoration');
Route::get('/sequinsdecoration/tut{id}', 'PostController@sequinsdecoration');
Route::get('/casualgarmentdecoration/tut{id}', 'PostController@casualgarmentdecoration');
Route::get('/epaulettesskirt/tut{id}', 'PostController@epaulettesskirt');
Route::get('/tambourluneville/tut{id}', 'PostController@tambourluneville');
Route::get('/thelawproportionschildren/tut{id}', 'PostController@thelawproportionschildren');
Route::get('/dressyearsoldgirl/tut{id}', 'PostController@dressyearsoldgirl');
Route::get('/fancydressyearsoldgirl/tut{id}', 'PostController@fancydressyearsoldgirl');
Route::get('/dressfancyoldgirl/tut{id}', 'PostController@dressfancyoldgirl');
Route::get('/thebuttonloopclosure/tut{id}', 'PostController@thebuttonloopclosure');

Route::get('/weddingeveningdressestheoretical/tut{id}', 'PostController@weddingeveningdressestheoretical');
Route::get('/weddingeveningdressespractical/tut{id}', 'PostController@weddingeveningdressespractical');
Route::get('/weddingskirtspetticoatstheoretical/tut{id}', 'PostController@weddingskirtspetticoatstheoretical');
Route::get('/weddingskirtspetticoatspractical/tut{id}', 'PostController@weddingskirtspetticoatspractical');

Route::get('/structureddesignerskirt/tut{id}', 'PostController@structureddesignerskirt');
Route::get('/fancydresstwentyyearsoldgirl/tut{id}', 'PostController@fancydress12yearsoldgirl');



