<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Http\Request;
use App\Models\EntegralApiData;
use App\Models\Job;

class SitemapController extends Controller
{

    public function index()
    {

        $jobs = Job::where('job_status', 1)->get();

        $page = EntegralApiData::get();
        return response()->view('sitemap_xml', ['page' => $page, 'jobs' => $jobs])->header('Content-Type', 'text/xml');
    }

    public function regenerate()
    {
        Artisan::call('sitemap:generate');
        return back()->with('success', 'Sitemap regenerated successfully.');
    }

    public function generateSitemap()
    {

        $sitemap = Sitemap::create();
        // Add static GET routes
        foreach (Route::getRoutes() as $route) {
            // Only GET routes
            if (in_array('GET', $route->methods())) {
                // Only routes without parameters
                if (!str_contains($route->uri(), '{')) {
                    // Only routes without auth middleware
                    $middlewares = $route->middleware();
                    if (!in_array('auth', $middlewares)) {
                        $sitemap->add(
                            Url::create(url($route->uri()))
                                ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
                                ->setPriority(0.7)
                        );
                    }
                }
            }
        }

        // Add dynamic job detail pages (still manually)
        foreach (Job::select('job_title_slug', 'updated_at')->cursor() as $job) {
            $sitemap->add(
                Url::create(url('/job/' . $job->job_title_slug))
                    ->setLastModificationDate($job->updated_at)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                    ->setPriority(0.8)
            );
        }

        // Save sitemap
        $sitemap->writeToFile(public_path('sitemap.xml'));

        return redirect()->back()->with('success', 'sitemap regenerated successfully');
    }


    public function updatedSitemap()
    {
        $path = public_path('sitemap.xml');

        if (!file_exists($path)) {
            abort(404, 'Sitemap not found');
        }
        return response()->file($path, [
            'Content-Type' => 'application/xml',
        ]);
    }
}
