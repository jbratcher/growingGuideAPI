<?php

namespace App\Console\Commands;

use App\Plant;
use Goutte\Client;
use Illuminate\Console\Command;

class ScrapePlants extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'scrape:plants';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Scrape plant names from world-crops.com';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //
        $client = new Client();

        $crawler = $client->request(
            'GET',
            'https://world-crops.com/category/crops/vegetables//'
        );

        $crawler->filter('h2[class=entry-title]')->each(function ($node) {
            $name = trim($node->text());
            Plant::firstOrCreate([
                "name" => $name,
            ]);
        });

    }
}
