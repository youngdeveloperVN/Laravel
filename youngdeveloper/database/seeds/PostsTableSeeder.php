<?php
use Illuminate\Database\Seeder;
use \Carbon\Carbon;
class PostsTableSeeder extends Seeder {

	public function run() {
		
		$thumbnailItem = array (
				'item1',
				'item2',
				'item3',
				'item4',
				'item5',
				'item6',
				'item7' 
		);
		
		$content = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus numquam facilis enim eaque, tenetur nam id qui vel velit similique nihil iure molestias aliquam, voluptatem totam quaerat, magni commodi quisquam.';
		
		$titleItem = array (
				'Sau Tất Cả',
				'Phai Dấu Cuộc Tình',
				'Dấu Mưa',
				'Tri kỉ',
				'Nơi Bắt Đầu 1 Tình Yêu',
				'Chuyện Đời',
				'Cơn Gió Lạ',
				'Nơi Tình Yêu Kết Thúc',
				'Tự Dưng',
				'Nơi Ta Chờ Em',
				'Em chưa 18',
				'Craze',
				'Khi Phải Cố Quên',
				'Người Yêu Cũ',
				'Mùa Yêu Cũ'
		);
		
		$userId = array (
				'1',
				'2'
		);
		
		$categoryId = array (
				'1',
				'2',
				'3',
				'4',
				'5' 
		
		);
		
		for($x = 0; $x <= 14; $x ++) {
			
			$itemthumbnail = array_rand ( $thumbnailItem );
			$itemTitle = array_rand ( $titleItem );
			
			$itemUser = array_rand ( $userId );
			$itemCategory = array_rand ( $categoryId );
			
			DB::table ( 'posts' )->insert ( [ 
					'title' => $titleItem [$x],
					'content' => $content,
					'thumbnail' => $thumbnailItem [$itemthumbnail].'.jpg',
					'idUser' => $userId [$itemUser],
					'idCategory' => $categoryId [$itemCategory],
					'created_at' => Carbon::now () 
			] );
		}
	}
}