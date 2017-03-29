<?php

use Illuminate\Database\Seeder;
use App\Application;

class ApplicationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $application = new Application();
        $application->form = 'application1.pdf';
        $application->title = 'Application Form I';
        $application->slug = str_slug($application->title,'-');
        $application->status = 'published';
        $application->user_id = 1;
        $application->save();
    }
}
