<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate';
    protected $description = 'Generate the sitemap.';

    public function handle()
    {
        $sitemap = Sitemap::create();

        // Add URLs dynamically
        $sitemap->add(Url::create('/'));

        // // Example: if you have dynamic pages
        // foreach (\App\Models\Page::all() as $page) {
        //     $sitemap->add(Url::create('/pages/' . $page->slug));
        // }

        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('Sitemap generated successfully.');
    }
}
