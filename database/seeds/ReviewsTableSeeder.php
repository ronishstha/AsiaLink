<?php

use Illuminate\Database\Seeder;
use App\Review;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $review = new Review();
        $review->name = 'Mr. Girish Raman, MD, Alpine Facilties Management';
        $review->description = 'Asia Link Services has been providing human resouce to us for years. We have no complains in any ways. They have the best team in recruiting right people in the right place. We wish them all the best.';
        $review->slug = str_slug($review->name, '-');
        $review->status = 'published';
        $review->user_id = 1;
        $review->save();

        $review = new Review();
        $review->name = 'Mr. Zaafir Ali Khan, GM, IIBM';
        $review->description = 'Recruiting people abroad  had always been hectic with some news laws been imposed in different nationalities. Choosing Asia Link Services has always been a  better decision for us since all the  process and procedures in recruitment and legal issues are settled by the expertise at Asia Link Services.';
        $review->slug = str_slug($review->name, '-');
        $review->status = 'published';
        $review->user_id = 1;
        $review->save();
    }
}
