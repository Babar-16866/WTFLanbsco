<?php
/**
 * Industries content - used by industries.php and every industry inner page.
 *
 * Images: drop industry-{slug}-1.webp ... industry-{slug}-4.webp into /assets/images
 * and they replace the fallback photos automatically.
 */

if (!function_exists('industry_image')) {
  function industry_image(array $industry, int $n): string
  {
    $path = '/assets/images/industry-' . $industry['slug'] . '-' . $n . '.webp';
    return is_file(dirname(__DIR__) . $path) ? $path : $industry['fallback'][$n - 1];
  }
}

// Second-level tabs on the Industries page (same for every industry)
$industry_subs = [
  'websites'   => 'Websites',
  'local-seo'  => 'Local SEO',
  'google-ads' => 'Google Ads',
  'social-ads' => 'Social Ads',
];

$industries = [
  'remodelers' => [
    'name'  => 'Remodelers',
    'label' => 'remodeling',
    'short' => 'Websites and lead gen that help remodeling companies win bigger kitchen, bath, and whole-home projects.',
    'bullets' => ['Portfolio-led project galleries', 'Quote forms that qualify budgets', 'Local SEO for high-value jobs'],
    'h1' => 'Remodeling marketing that wins',
    'h1_accent' => 'bigger jobs',
    'lead' => 'Websites, local SEO, and ads that show off your craftsmanship and bring in homeowners ready to invest in a kitchen, bath, or full remodel.',
    'card' => 'Portfolios that sell the next remodel.',
    'work_lead' => 'Project galleries, quote funnels, and campaigns built to attract homeowners with real budgets.',
    'cases' => [
      ['USA · Website & SEO', 'Kitchen & bath studio', 'A portfolio-first site with before/after galleries that doubled qualified quote requests in six months.'],
      ['Regional · Google Ads', 'Design-build contractor', 'Search campaigns focused on whole-home remodels, cutting cost per lead while raising average job size.'],
      ['Local · Brand refresh', 'Basement finishing crew', 'A sharper brand and review strategy that made a small crew look like the obvious local choice.'],
    ],
    'process' => [
      ['Discovery → Market', 'We map your service area, ideal project size, and the competitors homeowners compare you to.'],
      ['Portfolio & site', 'Before/after galleries, project stories, and a quote flow that filters out tire-kickers.'],
      ['Local visibility', 'Google Business Profile, service-area pages, and reviews that put you in the map pack.'],
      ['Ads & reporting', 'Search and social campaigns tied to booked consultations, not just clicks.'],
    ],
    'excel' => [
      'Homeowners spend weeks comparing remodelers before they call. We make sure your work, reviews, and process are the first thing they see - and the reason they pick you.',
      'From project galleries to financing callouts and consultation booking, every page is built to move a browser toward a signed contract.',
    ],
    'chip' => 'Galleries · Quotes · Reviews',
    'faqs' => [
      ['Can you showcase our past projects?', 'Yes. We build project galleries with before/after sliders, project details, and short stories so homeowners can see the quality of your work.'],
      ['How do you filter out low-budget leads?', 'Quote forms ask about project type, timeline, and budget range up front, so your team spends time on jobs worth quoting.'],
      ['Do you help with reviews and Houzz-style profiles?', 'We set up review requests after each project and keep your Google Business Profile and directory listings consistent.'],
    ],
    'subs' => [
      'websites'   => ['Portfolio-led sites that turn project photos into consultation requests.', ['Before/after galleries', 'Project story pages', 'Consultation booking']],
      'local-seo'  => ['Rank for kitchen, bath, and remodel searches across your service area.', ['Service-area landing pages', 'Google Business Profile', 'Review generation']],
      'google-ads' => ['Search campaigns aimed at high-value remodel projects.', ['Project-type ad groups', 'Budget-qualified landing pages', 'Call & form tracking']],
      'social-ads' => ['Visual campaigns that put your finished projects in front of local homeowners.', ['Before/after creatives', 'Homeowner audience targeting', 'Retargeting site visitors']],
    ],
    'fallback' => ['/assets/images/people-workshop.jpg', '/assets/images/why-craft.jpg', '/assets/images/mockup-main.webp', '/assets/images/people-collab.jpg'],
  ],

  'hvac' => [
    'name'  => 'HVAC',
    'label' => 'HVAC',
    'short' => 'Websites and campaigns that keep HVAC techs booked through peak season and the slow months.',
    'bullets' => ['Emergency & seasonal service pages', 'Online booking and call tracking', 'Maintenance plan sign-ups'],
    'h1' => 'HVAC marketing that keeps your trucks',
    'h1_accent' => 'booked',
    'lead' => 'From emergency AC repair to furnace installs and maintenance plans - we build the site, search presence, and ads that fill your schedule year-round.',
    'card' => 'More service calls, fewer empty slots.',
    'work_lead' => 'Booking-ready websites and campaigns built around how homeowners search when the AC quits.',
    'cases' => [
      ['USA · Website & booking', 'Heating & cooling company', 'A fast, mobile-first site with online scheduling that turned late-night visits into booked morning calls.'],
      ['Regional · Google Ads', 'Multi-truck HVAC outfit', 'Seasonal search campaigns that shifted budget between AC and heating demand as the weather changed.'],
      ['Local · Maintenance plans', 'Family-owned HVAC shop', 'A membership landing page and email flow that grew recurring maintenance revenue.'],
    ],
    'process' => [
      ['Discovery → Demand', 'We look at your service mix, seasonality, and which calls actually make you money.'],
      ['Site & booking', 'Clear service pages, emergency CTAs, and scheduling that works on a phone at 2am.'],
      ['Local visibility', 'Map pack rankings, city pages, and a steady flow of fresh reviews.'],
      ['Ads & tracking', 'Seasonal campaigns with call tracking so you know which dollars booked jobs.'],
    ],
    'excel' => [
      'When a system breaks, homeowners call whoever shows up first and looks trustworthy. We make sure that is you - on Google, on Maps, and on their phone.',
      'We tie your website, local SEO, and paid campaigns to booked jobs and maintenance plan sign-ups, so every season is easier to plan.',
    ],
    'chip' => 'Repairs · Installs · Plans',
    'faqs' => [
      ['Can customers book service online?', 'Yes. We connect your site to scheduling tools like ServiceTitan, Housecall Pro, or Jobber so homeowners can book without calling.'],
      ['How do you handle seasonal demand?', 'Campaigns and homepage offers shift between cooling and heating, with budgets adjusted as call volume changes.'],
      ['Can you help sell maintenance plans?', 'We build membership pages, sign-up flows, and reminder emails that turn one-time customers into recurring revenue.'],
    ],
    'subs' => [
      'websites'   => ['Fast, mobile-first HVAC sites built around emergency and install calls.', ['Emergency service CTAs', 'Online scheduling', 'Financing & rebate pages']],
      'local-seo'  => ['Map pack visibility for AC repair, furnace, and heat pump searches.', ['City & service pages', 'Google Business Profile', 'Review velocity']],
      'google-ads' => ['Search and Local Services Ads that follow the weather.', ['Seasonal campaign switching', 'LSA management', 'Call tracking']],
      'social-ads' => ['Local campaigns for tune-ups, installs, and maintenance plans.', ['Seasonal promo creatives', 'Homeowner targeting', 'Plan sign-up retargeting']],
    ],
    'fallback' => ['/assets/images/people-office.jpg', '/assets/images/service-web-design.jpg', '/assets/images/service-seo.jpg', '/assets/images/service-google-ads.jpg'],
  ],

  'plumbing' => [
    'name'  => 'Plumbing',
    'label' => 'plumbing',
    'short' => 'Websites and ads that make your plumbing company the first call for leaks, clogs, and water heaters.',
    'bullets' => ['24/7 emergency call paths', 'Water heater & repipe landing pages', 'Local SEO for every service area'],
    'h1' => 'Plumbing marketing that makes you the',
    'h1_accent' => 'first call',
    'lead' => 'Burst pipes and backed-up drains do not wait. We build the site, local rankings, and campaigns that put your number in front of homeowners the moment they need it.',
    'card' => 'Emergency calls straight to your phone.',
    'work_lead' => 'Call-first websites and campaigns built for urgent searches and high-ticket installs.',
    'cases' => [
      ['USA · Website & SEO', 'Residential plumbing company', 'A call-first site and city pages that pushed the brand into the map pack across three counties.'],
      ['Regional · Google Ads', 'Drain & sewer specialists', 'Emergency-focused search campaigns that lowered cost per call while running 24/7.'],
      ['Local · Installs', 'Water heater installer', 'Dedicated install landing pages and financing offers that lifted average ticket size.'],
    ],
    'process' => [
      ['Discovery → Services', 'We identify your most profitable jobs and the areas you want to own.'],
      ['Call-first site', 'Click-to-call everywhere, clear pricing cues, and trust signals above the fold.'],
      ['Local visibility', 'Service-area pages, map rankings, and review requests after every job.'],
      ['Ads & tracking', 'Emergency and install campaigns with calls tracked back to real revenue.'],
    ],
    'excel' => [
      'Most plumbing jobs start with a panicked search on a phone. We make your company the easiest one to find, trust, and call in that moment.',
      'Beyond emergencies, we build pages and offers for water heaters, repipes, and remodel plumbing - the jobs that grow your margins.',
    ],
    'chip' => 'Emergencies · Drains · Installs',
    'faqs' => [
      ['Do you focus on calls or form leads?', 'Both, but plumbing is call-heavy, so we design for click-to-call first and track every call by source.'],
      ['Can you run ads 24/7 for emergencies?', 'Yes. We schedule emergency campaigns around your dispatch hours and pause them when no one can answer.'],
      ['Can you target specific cities or zip codes?', 'We build service-area pages and geo-targeted campaigns so you only pay for leads where your trucks go.'],
    ],
    'subs' => [
      'websites'   => ['Call-first plumbing sites that convert urgent visitors in seconds.', ['Click-to-call on every page', 'Emergency service pages', 'Trust badges & reviews']],
      'local-seo'  => ['Own the map pack for leak, drain, and water heater searches.', ['Service-area pages', 'Google Business Profile', 'Review requests']],
      'google-ads' => ['Emergency and install campaigns tuned for cost per call.', ['24/7 call campaigns', 'Local Services Ads', 'Geo & zip targeting']],
      'social-ads' => ['Local awareness and install offers that stay top of mind.', ['Water heater promos', 'Neighborhood targeting', 'Past-customer retargeting']],
    ],
    'fallback' => ['/assets/images/people-main.jpg', '/assets/images/service-web-development.jpg', '/assets/images/why-design.jpg', '/assets/images/service-digital-marketing.jpg'],
  ],

  'roofing' => [
    'name'  => 'Roofing',
    'label' => 'roofing',
    'short' => 'Websites and lead gen that help roofing contractors win replacements, repairs, and storm work.',
    'bullets' => ['Free inspection booking', 'Storm & insurance claim pages', 'Financing and warranty callouts'],
    'h1' => 'Roofing marketing that fills your',
    'h1_accent' => 'pipeline',
    'lead' => 'From storm season to full replacements, we build the website, search presence, and campaigns that get your crews on more roofs.',
    'card' => 'More inspections, more signed roofs.',
    'work_lead' => 'Inspection funnels, storm pages, and campaigns built for high-ticket roofing jobs.',
    'cases' => [
      ['USA · Website & SEO', 'Residential roofing contractor', 'A trust-heavy site with inspection booking that raised signed replacements quarter over quarter.'],
      ['Regional · Storm response', 'Storm restoration team', 'Rapid-launch storm pages and ads that captured demand in the days after hail hit.'],
      ['Local · Brand & reviews', 'Family roofing company', 'A refreshed brand and review system that helped them compete with bigger regional names.'],
    ],
    'process' => [
      ['Discovery → Market', 'We look at your service area, job mix, and how homeowners compare roofers.'],
      ['Site & inspections', 'Free inspection offers, warranty info, and financing that ease big decisions.'],
      ['Local visibility', 'City pages, map rankings, and reviews that prove you finish the job.'],
      ['Ads & storm plans', 'Always-on search plus storm-ready campaigns you can switch on fast.'],
    ],
    'excel' => [
      'A new roof is one of the biggest checks a homeowner writes. We help you earn their trust early with proof, clear process, and easy inspection booking.',
      'When storms roll through, your site and campaigns are ready to capture demand before the competition even updates their ads.',
    ],
    'chip' => 'Inspections · Replacements · Storms',
    'faqs' => [
      ['Can you help us with storm season leads?', 'Yes. We prepare storm landing pages and campaigns in advance so they can go live within hours of a weather event.'],
      ['Do you build insurance claim pages?', 'We create clear pages that explain the claim process and position your team as the guide homeowners need.'],
      ['How do you build trust for big-ticket jobs?', 'Reviews, certifications, warranties, financing options, and real project photos - placed where homeowners make decisions.'],
    ],
    'subs' => [
      'websites'   => ['Roofing sites that turn visitors into booked inspections.', ['Free inspection booking', 'Warranty & financing pages', 'Project photo galleries']],
      'local-seo'  => ['Rank for roof repair and replacement across every city you serve.', ['City landing pages', 'Google Business Profile', 'Review strategy']],
      'google-ads' => ['Search campaigns for replacements, repairs, and storm demand.', ['Replacement-focused ad groups', 'Storm-ready campaigns', 'Lead quality tracking']],
      'social-ads' => ['Neighborhood campaigns that build awareness before homeowners need a roof.', ['Job-site proof creatives', 'Neighborhood targeting', 'Inspection offers']],
    ],
    'fallback' => ['/assets/images/enterprise-team.jpg', '/assets/images/device-1.webp', '/assets/images/service-seo.jpg', '/assets/images/excel-landing.webp'],
  ],

  'pest-control' => [
    'name'  => 'Pest Control',
    'label' => 'pest control',
    'short' => 'Websites and campaigns that turn one-time pest calls into recurring service plans.',
    'bullets' => ['Pest-specific service pages', 'Recurring plan sign-ups', 'Seasonal campaign planning'],
    'h1' => 'Pest control marketing that builds',
    'h1_accent' => 'recurring revenue',
    'lead' => 'We help pest control companies win the first call and keep the customer - with a clear website, strong local rankings, and campaigns built around the seasons.',
    'card' => 'From one-time calls to quarterly plans.',
    'work_lead' => 'Service pages, plan funnels, and campaigns that grow routes and recurring accounts.',
    'cases' => [
      ['USA · Website & plans', 'Residential pest company', 'A plan-focused site that turned more first-time treatments into quarterly service agreements.'],
      ['Regional · Local SEO', 'Termite & rodent specialists', 'Pest-specific pages that ranked for high-intent searches across a growing service area.'],
      ['Local · Seasonal ads', 'Mosquito control service', 'Spring campaigns launched ahead of the season to lock in customers before competitors.'],
    ],
    'process' => [
      ['Discovery → Routes', 'We map your routes, target pests, and the plans you want to sell more of.'],
      ['Site & plans', 'Pest-by-pest pages and a simple flow to pick a plan and book.'],
      ['Local visibility', 'Map pack rankings, city pages, and review requests after every visit.'],
      ['Ads & seasons', 'Campaigns timed to pest season with offers that lead to recurring service.'],
    ],
    'excel' => [
      'Homeowners search by the pest they see - ants, termites, rodents, mosquitoes. We build pages and campaigns around each one so you show up for the right problem.',
      'Then we make it easy to move from a one-time treatment to a recurring plan, so every new customer adds to your monthly revenue.',
    ],
    'chip' => 'Treatments · Plans · Routes',
    'faqs' => [
      ['Can you help us sell more recurring plans?', 'Yes. We build plan comparison pages, sign-up flows, and follow-up emails that convert one-time customers.'],
      ['Do you create pages for each type of pest?', 'We create dedicated pages for your key pests so you rank for the exact problems homeowners search for.'],
      ['When should we start seasonal campaigns?', 'Usually four to six weeks before peak season, so your rankings and ads are warm when demand spikes.'],
    ],
    'subs' => [
      'websites'   => ['Clear pest control sites with pest pages and plan sign-ups.', ['Pest-by-pest pages', 'Plan comparison tables', 'Online booking']],
      'local-seo'  => ['Show up for termite, rodent, and mosquito searches near you.', ['City & pest pages', 'Google Business Profile', 'Review requests']],
      'google-ads' => ['Search campaigns for urgent pest problems and recurring plans.', ['Pest-specific ad groups', 'Local Services Ads', 'Seasonal budgets']],
      'social-ads' => ['Seasonal campaigns that reach homeowners before pests show up.', ['Pre-season promos', 'Neighborhood targeting', 'Plan upgrade retargeting']],
    ],
    'fallback' => ['/assets/images/people-collab.jpg', '/assets/images/mockup-2.webp', '/assets/images/why-influence.jpg', '/assets/images/service-social-media.jpg'],
  ],

  'pool-services' => [
    'name'  => 'Pool Services',
    'label' => 'pool service',
    'short' => 'Websites and marketing that grow weekly pool routes, repairs, and seasonal openings.',
    'bullets' => ['Weekly service plan sign-ups', 'Repair & equipment pages', 'Opening and closing campaigns'],
    'h1' => 'Pool service marketing that grows your',
    'h1_accent' => 'routes',
    'lead' => 'We help pool companies fill weekly routes, sell equipment upgrades, and stay booked through openings, closings, and repair season.',
    'card' => 'Fuller routes, steadier revenue.',
    'work_lead' => 'Route-building websites and campaigns for weekly service, repairs, and upgrades.',
    'cases' => [
      ['USA · Website & plans', 'Pool cleaning company', 'A clear service-plan site that added new weekly accounts in the neighborhoods they already serviced.'],
      ['Regional · Google Ads', 'Pool repair & equipment', 'Search campaigns for pump, filter, and heater repairs that raised average ticket size.'],
      ['Local · Seasonal', 'Openings & closings crew', 'Pre-season campaigns that filled the opening calendar weeks ahead of time.'],
    ],
    'process' => [
      ['Discovery → Routes', 'We study your routes, service mix, and where you want more density.'],
      ['Site & plans', 'Simple weekly plan options, repair pages, and quote requests that are easy to act on.'],
      ['Local visibility', 'Neighborhood-level SEO and reviews that make you the trusted local pool pro.'],
      ['Ads & seasons', 'Campaigns for openings, closings, and repairs - timed to the calendar.'],
    ],
    'excel' => [
      'Pool owners want someone reliable who shows up every week. We present your team as exactly that, with clear plans, real reviews, and easy sign-up.',
      'We also build demand for repairs and equipment upgrades, so your routes turn into higher-value work over time.',
    ],
    'chip' => 'Cleaning · Repairs · Upgrades',
    'faqs' => [
      ['Can you help us add accounts on existing routes?', 'Yes. We target neighborhoods you already service so new accounts improve route density and margins.'],
      ['Do you promote equipment and repair work?', 'We build pages and campaigns for pumps, filters, heaters, and automation - the jobs with the best margins.'],
      ['Can you run campaigns for openings and closings?', 'We launch seasonal campaigns ahead of time so your calendar fills before the rush.'],
    ],
    'subs' => [
      'websites'   => ['Pool service sites with clear plans and simple sign-up.', ['Weekly plan options', 'Repair & equipment pages', 'Quote requests']],
      'local-seo'  => ['Rank for pool cleaning and repair in the neighborhoods you serve.', ['Neighborhood pages', 'Google Business Profile', 'Review generation']],
      'google-ads' => ['Search campaigns for repairs, equipment, and weekly service.', ['Repair-focused ad groups', 'Seasonal budgets', 'Call & form tracking']],
      'social-ads' => ['Local campaigns that keep your brand in front of pool owners.', ['Before/after pool creatives', 'Route-area targeting', 'Opening season offers']],
    ],
    'fallback' => ['/assets/images/why-design.jpg', '/assets/images/device-2.webp', '/assets/images/people-office.jpg', '/assets/images/mockup-1.webp'],
  ],

  'landscaping' => [
    'name'  => 'Landscaping',
    'label' => 'landscaping',
    'short' => 'Websites and lead gen that help landscapers win design-build projects and maintenance contracts.',
    'bullets' => ['Project galleries & design showcases', 'Maintenance contract sign-ups', 'Seasonal lead campaigns'],
    'h1' => 'Landscaping marketing that grows',
    'h1_accent' => 'every season',
    'lead' => 'From hardscapes and outdoor living to weekly maintenance, we build the website, local rankings, and campaigns that keep your crews busy all year.',
    'card' => 'Design-build projects and steady contracts.',
    'work_lead' => 'Visual portfolios and campaigns that win bigger installs and recurring maintenance.',
    'cases' => [
      ['USA · Website & SEO', 'Design-build landscaper', 'A photo-driven portfolio that attracted larger hardscape and outdoor living projects.'],
      ['Regional · Google Ads', 'Commercial grounds crew', 'Search campaigns aimed at property managers that grew maintenance contracts.'],
      ['Local · Seasonal', 'Residential lawn care', 'Spring and fall campaigns that filled the schedule before peak weeks arrived.'],
    ],
    'process' => [
      ['Discovery → Services', 'We separate install work from maintenance and plan for both.'],
      ['Portfolio & site', 'Project galleries, design consultations, and simple estimate requests.'],
      ['Local visibility', 'City pages, map rankings, and reviews that show your work in the neighborhood.'],
      ['Ads & seasons', 'Seasonal campaigns for installs, cleanups, and maintenance plans.'],
    ],
    'excel' => [
      'Great landscaping sells itself when people can see it. We put your best projects front and center and make it easy to request a design consultation.',
      'At the same time, we build steady demand for maintenance and seasonal work, so the slow months are not so slow.',
    ],
    'chip' => 'Design · Hardscape · Maintenance',
    'faqs' => [
      ['Can you showcase our landscape projects?', 'Yes. We build galleries and project pages that highlight your design work, materials, and results.'],
      ['Do you market to commercial clients too?', 'We can run separate pages and campaigns for property managers and HOAs alongside residential work.'],
      ['How do you handle the slow season?', 'We plan campaigns for snow removal, holiday lighting, or early booking offers to keep leads flowing.'],
    ],
    'subs' => [
      'websites'   => ['Photo-driven landscaping sites that sell your design work.', ['Project galleries', 'Design consultation booking', 'Maintenance plan pages']],
      'local-seo'  => ['Rank for landscaping, hardscape, and lawn care across your area.', ['City & service pages', 'Google Business Profile', 'Review strategy']],
      'google-ads' => ['Search campaigns for installs, cleanups, and maintenance.', ['Project-type ad groups', 'Seasonal budgets', 'Lead quality tracking']],
      'social-ads' => ['Visual campaigns that show off outdoor spaces you have built.', ['Project showcase creatives', 'Homeowner targeting', 'Seasonal offers']],
    ],
    'fallback' => ['/assets/images/people-workshop.jpg', '/assets/images/excel-graphic-design.webp', '/assets/images/why-craft.jpg', '/assets/images/team-2.jpg'],
  ],

  'handyman' => [
    'name'  => 'Handyman',
    'label' => 'handyman',
    'short' => 'Websites and local marketing that keep handyman businesses booked with repeat customers.',
    'bullets' => ['Clear service lists & pricing cues', 'Easy online booking', 'Repeat customer campaigns'],
    'h1' => 'Handyman marketing that keeps your calendar',
    'h1_accent' => 'full',
    'lead' => 'We help handyman businesses look professional, show up in local searches, and turn one small fix into a customer who calls you for everything.',
    'card' => 'Small jobs, loyal customers.',
    'work_lead' => 'Simple, trustworthy websites and campaigns built for the jobs on every homeowner\'s list.',
    'cases' => [
      ['USA · Website & booking', 'Handyman service', 'A clean site with online booking that cut phone tag and filled the weekly calendar.'],
      ['Regional · Local SEO', 'Multi-tech handyman team', 'Service and city pages that ranked for dozens of small-job searches across the metro.'],
      ['Local · Repeat business', 'Solo handyman pro', 'A review and email system that turned one-off jobs into steady repeat customers.'],
    ],
    'process' => [
      ['Discovery → Services', 'We list the jobs you want more of and the areas you want to work in.'],
      ['Site & booking', 'Clear service lists, trust signals, and booking that takes a minute.'],
      ['Local visibility', 'Map rankings, service pages, and reviews that make you look established.'],
      ['Ads & repeat', 'Local campaigns plus follow-ups that bring past customers back.'],
    ],
    'excel' => [
      'Homeowners want someone reliable for the long to-do list. We make your business look professional and trustworthy from the first search.',
      'Then we help you stay top of mind, so every finished job leads to the next call and a referral to the neighbors.',
    ],
    'chip' => 'Repairs · Installs · Odd jobs',
    'faqs' => [
      ['Do we need a big website?', 'No. Most handyman businesses need a clear, fast site with service lists, reviews, and easy booking - and we keep it that way.'],
      ['Can you help us get more repeat customers?', 'We set up review requests and simple follow-up emails that bring past customers back for the next job.'],
      ['Can you show our prices online?', 'We can add starting prices or pricing cues that set expectations and pre-qualify leads.'],
    ],
    'subs' => [
      'websites'   => ['Clean handyman sites that look professional and book fast.', ['Service list pages', 'Online booking', 'Reviews & trust badges']],
      'local-seo'  => ['Show up for the small-job searches homeowners make every day.', ['Service & city pages', 'Google Business Profile', 'Review generation']],
      'google-ads' => ['Focused local campaigns that bring in the jobs you want.', ['Job-type ad groups', 'Tight geo targeting', 'Call tracking']],
      'social-ads' => ['Neighborhood campaigns that build a loyal local following.', ['Before/after creatives', 'Neighborhood targeting', 'Repeat customer offers']],
    ],
    'fallback' => ['/assets/images/team-1.jpg', '/assets/images/device-1.webp', '/assets/images/people-main.jpg', '/assets/images/why-influence.jpg'],
  ],

  'power-washing' => [
    'name'  => 'Power Washing',
    'label' => 'power washing',
    'short' => 'Websites and campaigns that fill power washing schedules with homes, driveways, and commercial jobs.',
    'bullets' => ['Instant quote forms', 'Before/after galleries', 'Residential & commercial pages'],
    'h1' => 'Power washing marketing that shows',
    'h1_accent' => 'real results',
    'lead' => 'Nothing sells power washing like a clean before/after. We build the website, local rankings, and ads that turn those results into a full schedule.',
    'card' => 'Before/after proof that books jobs.',
    'work_lead' => 'Visual websites and campaigns built around the before/after results customers love.',
    'cases' => [
      ['USA · Website & quotes', 'Residential pressure washing', 'A before/after-driven site with instant quote forms that doubled weekly bookings in spring.'],
      ['Regional · Commercial', 'Commercial exterior cleaning', 'Dedicated pages and campaigns for storefronts and property managers that won recurring contracts.'],
      ['Local · Social ads', 'Owner-operated washing crew', 'Short video ads of real jobs that kept the calendar full through peak season.'],
    ],
    'process' => [
      ['Discovery → Services', 'We map house washing, driveways, roofs, and commercial work by value.'],
      ['Site & quotes', 'Before/after galleries and quick quote forms that capture leads fast.'],
      ['Local visibility', 'City pages, map rankings, and reviews with photos of real jobs.'],
      ['Ads & seasons', 'Visual campaigns timed to spring and summer demand.'],
    ],
    'excel' => [
      'Power washing is one of the most visual services there is. We put your before/after results everywhere customers look - your site, Google, and social feeds.',
      'We also separate residential and commercial marketing, so you can grow recurring contracts alongside one-time house washes.',
    ],
    'chip' => 'Houses · Driveways · Commercial',
    'faqs' => [
      ['Can customers get a quote online?', 'Yes. We build quick quote forms that capture the details you need, so you can price jobs without a site visit.'],
      ['Do you create video ads from our jobs?', 'We turn your before/after photos and short clips into social ads that perform well in local feeds.'],
      ['Can you help us win commercial contracts?', 'We build commercial pages and targeted campaigns for storefronts, HOAs, and property managers.'],
    ],
    'subs' => [
      'websites'   => ['Visual power washing sites with instant quote forms.', ['Before/after galleries', 'Instant quote forms', 'Residential & commercial pages']],
      'local-seo'  => ['Rank for pressure washing, house washing, and driveway cleaning near you.', ['City & service pages', 'Google Business Profile', 'Photo-rich reviews']],
      'google-ads' => ['Search campaigns for homes, driveways, and commercial jobs.', ['Service-type ad groups', 'Seasonal budgets', 'Quote form tracking']],
      'social-ads' => ['Short before/after video ads that stop the scroll.', ['Before/after video creatives', 'Neighborhood targeting', 'Seasonal offers']],
    ],
    'fallback' => ['/assets/images/work-kia.webp', '/assets/images/mockup-3.webp', '/assets/images/people-collab.jpg', '/assets/images/service-social-media.jpg'],
  ],
];

foreach ($industries as $slug => &$industry) {
  $industry['slug'] = $slug;
}
unset($industry);

return $industries;
