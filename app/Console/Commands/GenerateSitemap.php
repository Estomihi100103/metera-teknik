<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate';
    protected $description = 'Generate the sitemap.';

    public function handle()
    {
        // Base URL for your sitemap
        $baseUrl = 'https://meterateknikindonesia.com';

        $sitemap = Sitemap::create();

        // Static URLs
        $sitemap->add(Url::create($baseUrl . '/')
            ->setLastModificationDate(now())
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
            ->setPriority(1.0));

        $sitemap->add(Url::create($baseUrl . '/search')
            ->setLastModificationDate(now())
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
            ->setPriority(0.8));

        $sitemap->add(Url::create($baseUrl . '/contact')
            ->setLastModificationDate(now())
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
            ->setPriority(0.8));

        // Fetch dynamic URLs from database

        // Products
        $products = Product::all();
        foreach ($products as $product) {
            $sitemap->add(Url::create($baseUrl . '/product/' . $product->slug)
                ->setLastModificationDate($product->updated_at)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                ->setPriority(0.8));
        }

        // Categories
        $categories = Category::all();
        foreach ($categories as $category) {
            $sitemap->add(Url::create($baseUrl . '/category/' . $category->slug)
                ->setLastModificationDate($category->updated_at)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                ->setPriority(0.8));
        }

        // Brands
        $brands = Brand::all();
        foreach ($brands as $brand) {
            $sitemap->add(Url::create($baseUrl . '/brands/' . $brand->slug)
                ->setLastModificationDate($brand->updated_at)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                ->setPriority(0.8));
        }

        // Write the sitemap to a file
        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('Sitemap generated successfully.');
    }
}
