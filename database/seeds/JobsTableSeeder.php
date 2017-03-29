<?php

use Illuminate\Database\Seeder;
use App\Job;

class JobsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $job = new Job();
        $job->title = 'Storekeeper';
        $job->company = 'Al Shilrawi Enterprises';
        $job->location = 'Dubai';
        $job->country = 'U.A.E';
        $job->required_no = 10;
        $job->image = '';
        $job->salary = 'AED 1500 per month';
        $job->requirement = 'This position will require facilitating the physical and time consuming aspects of storekeeping that allows the Storekeeper space to facilitate proper administration.';
        $job->description = 'All candidates will have strong organization skills, ability to work effectively in a difficult environment and be flexible in demanding situations. You will have proficiency in English and good interpersonal and team working skills. Your commitment to the values including gender equity in all that we do is essential.';
        $job->slug = str_slug($job->title,'-');
        $job->status = 'published';
        $job->user_id = 1;
        $job->save();

        $job = new Job();
        $job->title = 'Sales';
        $job->company = 'AlShaya Enterprises';
        $job->location = 'Dubai';
        $job->country = 'U.A.E';
        $job->required_no = 10;
        $job->image = '';
        $job->salary = 'AED 1500 per month';
        $job->requirement = 'This position will require facilitating the physical and time consuming aspects of storekeeping that allows the Storekeeper space to facilitate proper administration.';
        $job->description = 'All candidates will have strong organization skills, ability to work effectively in a difficult environment and be flexible in demanding situations. You will have proficiency in English and good interpersonal and team working skills. Your commitment to the values including gender equity in all that we do is essential.';
        $job->slug = str_slug($job->title,'-');
        $job->status = 'published';
        $job->user_id = 1;
        $job->save();

        $job = new Job();
        $job->title = 'Cleaner';
        $job->company = 'Dolphon Facilites';
        $job->location = 'Doha';
        $job->country = 'Qatar';
        $job->required_no = 10;
        $job->image = '';
        $job->salary = 'AED 1500 per month';
        $job->requirement = 'This position will require facilitating the physical and time consuming aspects of storekeeping that allows the Storekeeper space to facilitate proper administration.';
        $job->description = 'All candidates will have strong organization skills, ability to work effectively in a difficult environment and be flexible in demanding situations. You will have proficiency in English and good interpersonal and team working skills. Your commitment to the values including gender equity in all that we do is essential.';
        $job->slug = str_slug($job->title,'-');
        $job->status = 'published';
        $job->user_id = 1;
        $job->save();
    }
}
