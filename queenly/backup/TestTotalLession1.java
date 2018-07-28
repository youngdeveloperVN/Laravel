package test.totallesson;

public class TestTotalLession1 {

	public static void main(String[] args) {
		int totalLesson = getTotalLesson();
		int totalFile = TotalFile.getTotalFilePHP();
		System.out.println("Missing lesson: " + (totalLesson - totalFile));
	}

	private static int getTotalLesson() {
		// copy menu lesson of corsetacademy.net
		//
		String input = " \r\n" + 
				"Wedding and Evening Dresses. Theoretical Part. (35)\r\n" + 
				"Wedding and Evening Dresses. Practical Part. (12)\r\n" + 
				"Wedding Skirts and Petticoats. Theoretical Part. (19)\r\n" + 
				"Wedding Skirts and Petticoats. Practical Part. (30)\r\n" + 
				"\r\n" + 
				"Premium Dress (54)\r\n" + 
				"\r\n" + 
				"Dress with Whole-Piece Train (34)\r\n" + 
				"Crew-Neck Dress with Full Skirt (25)\r\n" + 
				"Gown with Bare-Skin Effect (31)\r\n" + 
				"Gown with Bare-Skin Effect II (22)\r\n" + 
				"Open-Back Dress with a Bodysuit Base (23)\r\n" + 
				"Open-Back Dress with a Bodice Base (22)\r\n" + 
				"Wedding Dress Without Side Seams (29)\r\n" + 
				"Wedding Dress with Sleeves (33)\r\n" + 
				"Wedding Dress with Lace Straps and Full Skirt (42)\r\n" + 
				"Crop Top Wedding Gown (43)\r\n" + 
				" \r\n" + 
				"Princess Wedding Skirt (13)\r\n" + 
				"Ruffle Fish Tail Wedding Skirt (22)\r\n" + 
				"Mermaid Wedding Skirt (26)\r\n" + 
				"Structured Designer Skirt (17)\r\n" + 
				" \r\n" + 
				"Steampunk Corset (27)\r\n" + 
				"Leather Corset (22)\r\n" + 
				"\r\n" + 
				"Plus-Size Dress with Hidden Lacing (24)\r\n" + 
				"Plus-Size Dress with a Strap (31)\r\n" + 
				"Corset-Dress with Sleeves (28)\r\n" + 
				" \r\n" + 
				"ABC of Corset-making (8)\r\n" + 
				"Must Know (7)\r\n" + 
				"Corset in Just 1 Day (4)\r\n" + 
				"Tips and Tricks (6)\r\n" + 
				"Sewing Techniques Reviews (5)\r\n" + 
				"Cocktail Dress (25)\r\n" + 
				"Transparent Corset in 3 Hours (1)\r\n" + 
				" \r\n" + 
				"Corset in a Simplified Technique (10)\r\n" + 
				"Corset with Quilted Cups (14)\r\n" + 
				"Dress with Separately Cut Cups (15)\r\n" + 
				"Bodysuit with Corset Cups (9)\r\n" + 
				"Party Dress (17)\r\n" + 
				" \r\n" + 
				"Corset with Drapery (20)\r\n" + 
				"Corset with Integral Straps (27)\r\n" + 
				"Corset with 3-Part Cups (22)\r\n" + 
				"Corset with a Fancy Cut-Out (22)\r\n" + 
				" \r\n" + 
				"Rhinestones Decoration (5)\r\n" + 
				"Additional Decoration (5)\r\n" + 
				"Thick Decoration Elements (5)\r\n" + 
				"Wedding Dress Decoration (5)\r\n" + 
				"Sequins Decoration (11)\r\n" + 
				"Casual Garment Decoration (5)\r\n" + 
				"Epaulettes (8)\r\n" + 
				"Tambour or Luneville Embroidery (5)\r\n" + 
				"The Button Loop Closure (2)\r\n" + 
				" \r\n" + 
				"The Law of Proportions in Children's Wear (3)\r\n" + 
				"Fancy Dress for 3 Years Old Girl (9)\r\n" + 
				"Fancy Dress for 6 Years Old Girl (16)\r\n" + 
				"Fancy Dress for 9 Years Old Girl (14)\r\n" + 
				"Fancy Dress for 12 Years Old Girl (14)";
		// find (14) => 14
		int beginIndex = -1;
		int endIndex = -1;

		beginIndex = input.indexOf('(');
		endIndex = input.indexOf(')', beginIndex);
		String item = input.substring(beginIndex + 1, endIndex);
		int lessionItem = Integer.parseInt(item);

		while (beginIndex != -1 && endIndex != -1) {
			beginIndex = input.indexOf('(', beginIndex + 1);
			if (beginIndex == -1) {
				//System.out.println(input.substring(endIndex - 38, endIndex));
				//System.out.println(item);
				break;
			}
			endIndex = input.indexOf(')', beginIndex);
			item = input.substring(beginIndex + 1, endIndex);
			lessionItem += Integer.parseInt(item);
		}
		System.out.println("Total Lesson: " + lessionItem);
		return lessionItem;
	}

}