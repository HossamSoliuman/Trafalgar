<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
      @php  $date = \Carbon\Carbon::now(); @endphp
            <loc>{{ route('/') }}</loc>
            <lastmod>{{ gmdate('Y-m-d\TH:i:s\Z',strtotime($date->format('Y-m-d H:i:s'))) }}</lastmod>
            <changefreq>daily</changefreq>
            <priority>0.9</priority>
        </url>
         <url>
            <loc>{{ route('contact-us') }}</loc>
            <lastmod>{{ gmdate('Y-m-d\TH:i:s\Z',strtotime($date->format('Y-m-d H:i:s'))) }}</lastmod>
            <changefreq>daily</changefreq>
            <priority>0.9</priority>
        </url>
         <url>
            <loc>{{ route('about-us') }}</loc>
            <lastmod>{{ gmdate('Y-m-d\TH:i:s\Z',strtotime($date->format('Y-m-d H:i:s'))) }}</lastmod>
            <changefreq>daily</changefreq>
            <priority>0.9</priority>
        </url>
         <url>
            <loc>{{ route('agent-search') }}</loc>
            <lastmod>{{ gmdate('Y-m-d\TH:i:s\Z',strtotime($date->format('Y-m-d H:i:s'))) }}</lastmod>
            <changefreq>daily</changefreq>
            <priority>0.9</priority>
        </url>
         <url>
            <loc>{{ route('property-management.sectional-title-and-hoa-management.developer-services') }}</loc>
            <lastmod>{{ gmdate('Y-m-d\TH:i:s\Z',strtotime($date->format('Y-m-d H:i:s'))) }}</lastmod>
            <changefreq>daily</changefreq>
            <priority>0.9</priority>
        </url>
         <url>
            <loc>{{ route('email-property-alert') }}</loc>
            <lastmod>{{ gmdate('Y-m-d\TH:i:s\Z',strtotime($date->format('Y-m-d H:i:s'))) }}</lastmod>
            <changefreq>daily</changefreq>
            <priority>0.9</priority>
        </url>
        
         <url>
            <loc>{{ route('jobs') }}</loc>
            <lastmod>{{ gmdate('Y-m-d\TH:i:s\Z',strtotime($date->format('Y-m-d H:i:s'))) }}</lastmod>
            <changefreq>daily</changefreq>
            <priority>0.9</priority>
        </url>
         <url>
            <loc>{{ route('useful-links') }}</loc>
            <lastmod>{{ gmdate('Y-m-d\TH:i:s\Z',strtotime($date->format('Y-m-d H:i:s'))) }}</lastmod>
            <changefreq>daily</changefreq>
            <priority>0.9</priority>
        </url>
         <url>
            <loc>{{ route('manage') }}</loc>
            <lastmod>{{ gmdate('Y-m-d\TH:i:s\Z',strtotime($date->format('Y-m-d H:i:s'))) }}</lastmod>
            <changefreq>daily</changefreq>
            <priority>0.9</priority>
        </url>
         <url>
            <loc>{{ route('disclaimer') }}</loc>
            <lastmod>{{ gmdate('Y-m-d\TH:i:s\Z',strtotime($date->format('Y-m-d H:i:s'))) }}</lastmod>
            <changefreq>daily</changefreq>
            <priority>0.9</priority>
        </url>
         <url>
            <loc>{{ route('finance') }}</loc>
            <lastmod>{{ gmdate('Y-m-d\TH:i:s\Z',strtotime($date->format('Y-m-d H:i:s'))) }}</lastmod>
            <changefreq>daily</changefreq>
            <priority>0.9</priority>
        </url>
         <url>
            <loc>{{ route('terms-conditions') }}</loc>
            <lastmod>{{ gmdate('Y-m-d\TH:i:s\Z',strtotime($date->format('Y-m-d H:i:s'))) }}</lastmod>
            <changefreq>daily</changefreq>
            <priority>0.9</priority>
        </url>
         <url>
            <loc>{{ route('privacy-policy') }}</loc>
            <lastmod>{{ gmdate('Y-m-d\TH:i:s\Z',strtotime($date->format('Y-m-d H:i:s'))) }}</lastmod>
            <changefreq>daily</changefreq>
            <priority>0.9</priority>
        </url>
         <url>
            <loc>{{ route('property-management.sectional-title-and-hoa-management') }}</loc>
            <lastmod>{{ gmdate('Y-m-d\TH:i:s\Z',strtotime($date->format('Y-m-d H:i:s'))) }}</lastmod>
            <changefreq>daily</changefreq>
            <priority>0.9</priority>
        </url>
         <url>
            <loc>{{ route('property-management.commercial-property-management') }}</loc>
            <lastmod>{{ gmdate('Y-m-d\TH:i:s\Z',strtotime($date->format('Y-m-d H:i:s'))) }}</lastmod>
            <changefreq>daily</changefreq>
            <priority>0.9</priority>
        </url>
         <url>
            <loc>{{ route('property-management.estate-management') }}</loc>
            <lastmod>{{ gmdate('Y-m-d\TH:i:s\Z',strtotime($date->format('Y-m-d H:i:s'))) }}</lastmod>
            <changefreq>daily</changefreq>
            <priority>0.9</priority>
        </url>
         <url>
            <loc>{{ route('online-services') }}</loc>
            <lastmod>{{ gmdate('Y-m-d\TH:i:s\Z',strtotime($date->format('Y-m-d H:i:s'))) }}</lastmod>
            <changefreq>daily</changefreq>
            <priority>0.9</priority>
        </url>
         <url>
            <loc>{{ route('register') }}</loc>
            <lastmod>{{ gmdate('Y-m-d\TH:i:s\Z',strtotime($date->format('Y-m-d H:i:s'))) }}</lastmod>
            <changefreq>daily</changefreq>
            <priority>0.9</priority>
        </url>
         <url>
            <loc>{{ route('login') }}</loc>
            <lastmod>{{ gmdate('Y-m-d\TH:i:s\Z',strtotime($date->format('Y-m-d H:i:s'))) }}</lastmod>
            <changefreq>daily</changefreq>
            <priority>0.9</priority>
        </url>
        
    @foreach ($page as $pages)
    
    
    @php
                                $suburb = str_replace(" ","-",$pages->suburb);
                                $town = str_replace(" ","-",$pages->town);
                                $province = str_replace(" ","-",$pages->province);
                                $mandate_saletype = str_replace(" ","-",$pages->mandate_saletype);
                                
                                 $basePath = route('/');
                                $customUrl = $basePath."/"."property-".$mandate_saletype."/".$suburb."/".$town."/".$province."/".$pages->id."/".$pages->property_id;
                                
                                
                              
                               @endphp
        <url>
            <loc>{{$customUrl}}</loc>
            <lastmod>{{ gmdate('Y-m-d\TH:i:s\Z',strtotime($pages->updated_at)) }}</lastmod>
            <changefreq>daily</changefreq>
            <priority>0.9</priority>
        </url>
    @endforeach
    
     @foreach ($jobs as $job)
      <url>
            <loc>{{ route('job',["job_title" => $job->job_title_slug]) }}</loc>
            <lastmod>{{ gmdate('Y-m-d\TH:i:s\Z',strtotime($job->updated_at)) }}</lastmod>
            <changefreq>daily</changefreq>
            <priority>0.9</priority>
        </url>
      @endforeach
</urlset>