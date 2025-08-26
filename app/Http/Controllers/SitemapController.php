<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Carbon\Carbon;

class SitemapController extends Controller
{
    /**
     * Generate XML sitemap for the website
     */
    public function index()
    {
        $urls = collect();

        // Main pages with high priority
        $mainPages = [
            ['url' => route('home'), 'priority' => '1.0', 'changefreq' => 'daily'],
            ['url' => route('features'), 'priority' => '0.9', 'changefreq' => 'weekly'],
            ['url' => route('pricing'), 'priority' => '0.9', 'changefreq' => 'weekly'],
            ['url' => route('about'), 'priority' => '0.8', 'changefreq' => 'monthly'],
            ['url' => route('contact.show'), 'priority' => '0.8', 'changefreq' => 'monthly'],
            ['url' => route('demo.booking'), 'priority' => '0.9', 'changefreq' => 'weekly'],
        ];

        // Legal pages
        $legalPages = [
            ['url' => route('privacy'), 'priority' => '0.3', 'changefreq' => 'yearly'],
            ['url' => route('terms'), 'priority' => '0.3', 'changefreq' => 'yearly'],
            ['url' => route('privacy-portal'), 'priority' => '0.2', 'changefreq' => 'yearly'],
        ];

        // Solution pages with high SEO value
        $solutionPages = [
            ['url' => route('solutions.real-estate'), 'priority' => '0.8', 'changefreq' => 'monthly'],
            ['url' => route('solutions.spa-massage'), 'priority' => '0.8', 'changefreq' => 'monthly'],
            ['url' => route('solutions.healthcare'), 'priority' => '0.8', 'changefreq' => 'monthly'],
            ['url' => route('solutions.finance-banking'), 'priority' => '0.8', 'changefreq' => 'monthly'],
            ['url' => route('solutions.retail-ecommerce'), 'priority' => '0.8', 'changefreq' => 'monthly'],
            ['url' => route('solutions.education'), 'priority' => '0.8', 'changefreq' => 'monthly'],
            ['url' => route('solutions.government'), 'priority' => '0.8', 'changefreq' => 'monthly'],
        ];

        // Combine all URLs
        $allPages = array_merge($mainPages, $legalPages, $solutionPages);

        foreach ($allPages as $page) {
            $urls->push([
                'url' => $page['url'],
                'lastmod' => Carbon::now()->toISOString(),
                'priority' => $page['priority'],
                'changefreq' => $page['changefreq']
            ]);
        }

        $xml = $this->generateSitemapXml($urls);

        return response($xml, 200)
            ->header('Content-Type', 'application/xml');
    }

    /**
     * Generate sitemap index for multiple sitemaps
     */
    public function sitemapIndex()
    {
        $sitemaps = [
            [
                'url' => url('/sitemap.xml'),
                'lastmod' => Carbon::now()->toISOString()
            ]
        ];

        $xml = view('sitemaps.index', compact('sitemaps'))->render();

        return response($xml, 200)
            ->header('Content-Type', 'application/xml');
    }

    /**
     * Generate robots.txt
     */
    public function robots()
    {
        $content = "User-agent: *\n";
        $content .= "Allow: /\n\n";
        
        // Disallow admin and private areas
        $content .= "Disallow: /admin/\n";
        $content .= "Disallow: /login\n";
        $content .= "Disallow: /register\n";
        $content .= "Disallow: /password/\n\n";
        
        // Allow important directories
        $content .= "Allow: /assets/\n";
        $content .= "Allow: /images/\n";
        $content .= "Allow: /css/\n";
        $content .= "Allow: /js/\n\n";
        
        // Sitemap location
        $content .= "Sitemap: " . url('/sitemap.xml') . "\n";
        $content .= "Sitemap: " . url('/sitemap-index.xml') . "\n\n";
        
        // Crawl delay for politeness
        $content .= "Crawl-delay: 1\n";

        return response($content, 200)
            ->header('Content-Type', 'text/plain');
    }

    /**
     * Generate XML content for sitemap
     */
    private function generateSitemapXml($urls)
    {
        $xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

        foreach ($urls as $url) {
            $xml .= '  <url>' . "\n";
            $xml .= '    <loc>' . htmlspecialchars($url['url'], ENT_XML1, 'UTF-8') . '</loc>' . "\n";
            $xml .= '    <lastmod>' . $url['lastmod'] . '</lastmod>' . "\n";
            $xml .= '    <changefreq>' . $url['changefreq'] . '</changefreq>' . "\n";
            $xml .= '    <priority>' . $url['priority'] . '</priority>' . "\n";
            $xml .= '  </url>' . "\n";
        }

        $xml .= '</urlset>';

        return $xml;
    }
}