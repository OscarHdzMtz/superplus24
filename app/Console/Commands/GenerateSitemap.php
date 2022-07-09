<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\SitemapGenerator; 

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generando el sitemap de la web';
    /**
     * Execute the console command.
     *
     * @return mixed 
     */
    public function handle()
    { 
        // modify this to your own needs 

        SitemapGenerator::create(config('app.url'))
              ->writeToFile(public_path('sitemap.xml'));
         }
}
