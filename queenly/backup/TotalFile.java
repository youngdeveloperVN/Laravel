package test.totallesson;

import java.io.File;
import java.util.ArrayList;
import java.util.List;

public class TotalFile {
	
	
	public static void main(String[] args) {
		int total = getTotalFile();
	}
	
	public static int getTotalFilePHP() {
		String FILE_PAGES = "C:\\Users\\HuyPN\\git\\Laravel\\queenly\\resources\\views\\layouts\\pages";
		int total = 0;
		try {
			File file = new File(FILE_PAGES);
			File[] files = file.listFiles();
			for (File file2 : files) {
				File[] fileElement = file2.listFiles();
				total += fileElement.length;
			}
		} catch (Exception e) {
			// TODO: handle exception
			e.printStackTrace();
		}
		
		System.out.println("Total File : " + total);
		return total;
	}
	
	public static int getTotalFile() {
		String contentWebRouter = "Route::get('/premiumdress/tut{id}', 'PostController@premiumdress');\r\n" + 
				"Route::get('/dresswithwholepiecetrain/tut{id}', 'PostController@dresswithwholepiecetrain');\r\n" + 
				"Route::get('/crewneckdresswithfullskirt/tut{id}', 'PostController@crewneckdresswithfullskirt');\r\n" + 
				"Route::get('/gownwithbareskineffect/tut{id}', 'PostController@gownwithbareskineffect');\r\n" + 
				"Route::get('/gownwithbareskineffect2/tut{id}', 'PostController@gownwithbareskineffect2');\r\n" + 
				"Route::get('/openbackdresswithbodysuitbase/tut{id}', 'PostController@openbackdresswithbodysuitbase');\r\n" + 
				"Route::get('/openbackdressbodicebase/tut{id}', 'PostController@openbackdressbodicebase');\r\n" + 
				"Route::get('/weddingdresswithoutseseams/tut{id}', 'PostController@weddingdresswithoutseseams');\r\n" + 
				"Route::get('/dresssleeves/tut{id}', 'PostController@dresssleeves');\r\n" + 
				"Route::get('/weddingdressfullskirt/tut{id}', 'PostController@weddingdressfullskirt');\r\n" + 
				"Route::get('/cropgown/tut{id}', 'PostController@cropgown');\r\n" + 
				"Route::get('/princesswedding/tut{id}', 'PostController@princesswedding');\r\n" + 
				"Route::get('/ruffleskirt/tut{id}', 'PostController@ruffleskirt');\r\n" + 
				"Route::get('/mermaweddingskirt/tut{id}', 'PostController@mermaweddingskirt');\r\n" + 
				"Route::get('/steampunkcorset/tut{id}', 'PostController@steampunkcorset');\r\n" + 
				"Route::get('/leathercorset/tut{id}', 'PostController@leathercorset');\r\n" + 
				"Route::get('/dresslacing/tut{id}', 'PostController@dresslacing');\r\n" + 
				"Route::get('/plusstrap/tut{id}', 'PostController@plusstrap');\r\n" + 
				"Route::get('/corsetsleeves/tut{id}', 'PostController@corsetsleeves');\r\n" + 
				"Route::get('/corsetmakingabc/tut{id}', 'PostController@corsetmakingabc');\r\n" + 
				"Route::get('/mustknow/tut{id}', 'PostController@mustknow');\r\n" + 
				"Route::get('/corsetday/tut{id}', 'PostController@corsetday');\r\n" + 
				"Route::get('/tipstricks/tut{id}', 'PostController@tipstricks');\r\n" + 
				"Route::get('/sewingreviews/tut{id}', 'PostController@sewingreviews');\r\n" + 
				"Route::get('/cocktaildress/tut{id}', 'PostController@cocktaildress');\r\n" + 
				"Route::get('/transparenthours/tut{id}', 'PostController@transparenthours');\r\n" + 
				"Route::get('/corsettechnique/tut{id}', 'PostController@corsettechnique');\r\n" + 
				"Route::get('/quiltedcups/tut{id}', 'PostController@quiltedcups');\r\n" + 
				"Route::get('/dresscutcups/tut{id}', 'PostController@dresscutcups');\r\n" + 
				"Route::get('/bodysuitcorsetcups/tut{id}', 'PostController@bodysuitcorsetcups');\r\n" + 
				"Route::get('/partydress/tut{id}', 'PostController@partydress');\r\n" + 
				"Route::get('/corsetwithdrapery/tut{id}', 'PostController@corsetwithdrapery');\r\n" + 
				"Route::get('/corsetintegralstraps/tut{id}', 'PostController@corsetintegralstraps');\r\n" + 
				"Route::get('/corsetpartcups/tut{id}', 'PostController@corsetpartcups');\r\n" + 
				"Route::get('/corsetcutout/tut{id}', 'PostController@corsetcutout');\r\n" + 
				"Route::get('/rhinestonesdecoration/tut{id}', 'PostController@rhinestonesdecoration');\r\n" + 
				"Route::get('/additionaldecoration/tut{id}', 'PostController@additionaldecoration');\r\n" + 
				"Route::get('/thickdecorationelements/tut{id}', 'PostController@thickdecorationelements');\r\n" + 
				"Route::get('/weddingdressdecoration/tut{id}', 'PostController@weddingdressdecoration');\r\n" + 
				"Route::get('/sequinsdecoration/tut{id}', 'PostController@sequinsdecoration');\r\n" + 
				"Route::get('/casualgarmentdecoration/tut{id}', 'PostController@casualgarmentdecoration');\r\n" + 
				"Route::get('/epaulettesskirt/tut{id}', 'PostController@epaulettesskirt');\r\n" + 
				"Route::get('/tambourluneville/tut{id}', 'PostController@tambourluneville');\r\n" + 
				"Route::get('/thelawproportionschildren/tut{id}', 'PostController@thelawproportionschildren');\r\n" + 
				"Route::get('/dressyearsoldgirl/tut{id}', 'PostController@dressyearsoldgirl');\r\n" + 
				"Route::get('/fancydressyearsoldgirl/tut{id}', 'PostController@fancydressyearsoldgirl');\r\n" + 
				"Route::get('/dressfancyoldgirl/tut{id}', 'PostController@dressfancyoldgirl');\r\n" + 
				"Route::get('/thebuttonloopclosure/tut{id}', 'PostController@thebuttonloopclosure');\r\n" + 
				"\r\n" + 
				"Route::get('/weddingeveningdressestheoretical/tut{id}', 'PostController@weddingeveningdressestheoretical');\r\n" + 
				"Route::get('/weddingeveningdressespractical/tut{id}', 'PostController@weddingeveningdressespractical');\r\n" + 
				"Route::get('/weddingskirtspetticoatstheoretical/tut{id}', 'PostController@weddingskirtspetticoatstheoretical');\r\n" + 
				"Route::get('/weddingskirtspetticoatspractical/tut{id}', 'PostController@weddingskirtspetticoatspractical');\r\n" + 
				"Route::get('/structureddesignerskirt/tut{id}', 'PostController@structureddesignerskirt');\r\n" + 
				"Route::get('/fancydresstwentyyearsoldgirl/tut{id}', 'PostController@fancydresstwentyyearsoldgirl')";
		String FILE_PAGES = "C:\\Users\\HuyPN\\git\\Laravel\\queenly\\resources\\views\\layouts\\pages";
		int total = 0;
		try {
			List<String> strings  = new ArrayList<>();
			File file = new File(FILE_PAGES);
			File[] files = file.listFiles();
			for (File file2 : files) {
				String name = file2.getName();
				if (contentWebRouter.indexOf(name) == -1) {
					System.out.println("Miss: " + name);
				}
				
			}
		} catch (Exception e) {
			// TODO: handle exception
			e.printStackTrace();
		}
		
		System.out.println("Total File : " + total);
		return total;
	}
	
	
	
}
