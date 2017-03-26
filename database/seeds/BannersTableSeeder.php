<?php

use Illuminate\Database\Seeder;
use App\Banner;

class BannersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $banner = new Banner();
        $banner->image = 'bg1.jpg';
        $banner->title = 'banner1';
        $banner->description1 = 'Helping You';
        $banner->description2 = 'Find the best job GlOBALLY.';
        $banner->slug = str_slug($banner->title,'-');
        $banner->status = 'published';
        $banner->user_id = 1;
        $banner->save();

        $banner = new Banner();
        $banner->image = 'bg2.jpg';
        $banner->title = 'banner2';
        $banner->description1 = 'We provide JOB that suits YOU.';
        $banner->description2 = 'We understand the skills of people...';
        $banner->slug = str_slug($banner->title,'-');
        $banner->status = 'published';
        $banner->user_id = 1;
        $banner->save();

        $banner = new Banner();
        $banner->image = 'bg3.jpg';
        $banner->title = 'banner3';
        $banner->description1 = 'Serving YOU..';
        $banner->description2 = 'The best services across...';
        $banner->slug = str_slug($banner->title,'-');
        $banner->status = 'published';
        $banner->user_id = 1;
        $banner->save();
    }
}
