<?php

use Illuminate\Database\Seeder;
use App\Client;

class ClientsTableSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $client = new Client();
        $client->image = '1.jpg';
        $client->title = 'China Harbour Engineering Company';
        $client->slug = str_slug($client->title,'-');
        $client->status = 'published';
        $client->user_id = 1;
        $client->save();

        $client = new Client();
        $client->image = '2.jpg';
        $client->title = 'KAEFER';
        $client->slug = str_slug($client->title,'-');
        $client->status = 'published';
        $client->user_id = 1;
        $client->save();

        $client = new Client();
        $client->image = '3.jpg';
        $client->title = 'Fahad Bin Abdulla Readi Mix';
        $client->slug = str_slug($client->title,'-');
        $client->status = 'published';
        $client->user_id = 1;
        $client->save();

        $client = new Client();
        $client->image = '4.jpg';
        $client->title = 'Brookfield Multiplex';
        $client->slug = str_slug($client->title,'-');
        $client->status = 'published';
        $client->user_id = 1;
        $client->save();

        $client = new Client();
        $client->image = '5.jpg';
        $client->title = 'MedGulf Construction Co.';
        $client->slug = str_slug($client->title,'-');
        $client->status = 'published';
        $client->user_id = 1;
        $client->save();

        $client = new Client();
        $client->image = '6.jpg';
        $client->title = 'Qatar Insulation Factory';
        $client->slug = str_slug($client->title,'-');
        $client->status = 'published';
        $client->user_id = 1;
        $client->save();

        $client = new Client();
        $client->image = '7.jpg';
        $client->title = 'Q-Tec Engineering W.L.L';
        $client->slug = str_slug($client->title,'-');
        $client->status = 'published';
        $client->user_id = 1;
        $client->save();

        $client = new Client();
        $client->image = '8.jpg';
        $client->title = 'Q-Tec Facilities W.L.L';
        $client->slug = str_slug($client->title,'-');
        $client->status = 'published';
        $client->user_id = 1;
        $client->save();

        $client = new Client();
        $client->image = '9.jpg';
        $client->title = 'NAFFCO';
        $client->slug = str_slug($client->title,'-');
        $client->status = 'published';
        $client->user_id = 1;
        $client->save();
    }
}
