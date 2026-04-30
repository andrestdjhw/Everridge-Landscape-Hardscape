<?php
/**
 * Template Name: Service - Landscape Design & Installation
 *
 * @package everridge
 */
get_header(); ?>

<?php
/* ── Data ─────────────────────────────────────────────────────────────────── */
$gallery_items = [
  [ 'label' => 'Seasonal Planting',     'city' => 'Birmingham, MI',      'ph' => 'Seasonal color planting installation — annuals and perennials in layered beds' ],
  [ 'label' => 'Mulch Bed & Edging',    'city' => 'Bloomfield Hills, MI','ph' => 'Fresh mulch bed with clean-cut steel edging — polished, defined appearance' ],
  [ 'label' => 'Sod Installation',      'city' => 'Troy, MI',            'ph' => 'Sod installation in progress — freshly laid lawn with clean seams' ],
  [ 'label' => 'Front Yard Refresh',    'city' => 'Rochester Hills, MI', 'ph' => 'Before & after front yard refresh — new shrubs, mulch, trimmed hedges' ],
  [ 'label' => 'Premium Plant Detail',  'city' => 'Shelby Township, MI', 'ph' => 'Close-up of premium plant selection — ornamental grasses and flowering shrubs' ],
  [ 'label' => 'Finished Landscape',    'city' => 'Clinton Township, MI','ph' => 'Completed front yard — layered plantings, sod, clean entry walk' ],
];

$ba_projects = [
  [ 'label' => 'Full Front Yard',       'city' => 'Birmingham, MI',      'ph_b' => 'Before — bare, patchy lawn with no planting beds or definition',     'ph_a' => 'After — lush layered landscape, fresh mulch, clean edging' ],
  [ 'label' => 'Side Yard Beds',        'city' => 'Troy, MI',            'ph_b' => 'Before — overgrown shrubs, faded mulch, no seasonal color',           'ph_a' => 'After — pruned shrubs, fresh mulch, seasonal annual plantings' ],
  [ 'label' => 'Backyard Lawn Reno',    'city' => 'Bloomfield Hills, MI','ph_b' => 'Before — thin, patchy, uneven turf with bare patches',                'ph_a' => 'After — fresh sod installation, defined edges, vibrant green' ],
];

$seasonal = [
  'spring' => [
    'icon'  => '🌱',
    'label' => 'Spring',
    'color' => '#4a7c59',
    'items' => [
      'Spring cleanup — debris removal, bed cleanup, edge definition',
      'Pruning and trimming of shrubs and ornamental grasses',
      'Pre-emergent weed control application',
      'Mulch replenishment — fresh 2-inch layer in all beds',
      'Seasonal annual planting — pansies, snapdragons, and spring color',
      'Lawn assessment and treatment recommendations',
      'Irrigation system startup and inspection',
    ],
  ],
  'summer' => [
    'icon'  => '☀️',
    'label' => 'Summer',
    'color' => '#b8924a',
    'items' => [
      'Monthly or bi-weekly lawn maintenance visits',
      'Deadheading and trimming of perennials and annuals',
      'Weed control in all planting beds',
      'Deep watering recommendations and drought monitoring',
      'Summer annual color rotation — petunias, impatiens, vinca',
      'Pest and disease monitoring and treatment',
      'Spot treatments and plant health assessments',
    ],
  ],
  'fall' => [
    'icon'  => '🍂',
    'label' => 'Fall',
    'color' => '#8a5a2a',
    'items' => [
      'Fall cleanup — leaf removal, bed clearing, final edging',
      'Fall perennial cutback and winterization',
      'Fall annual planting — mums, ornamental kale, pansies',
      'Overseeding and lawn fertilization for spring density',
      'Shrub winterization and burlap wrapping where needed',
      'Irrigation system winterization and blowout',
      'Final mulch layer for winter insulation and weed suppression',
    ],
  ],
];

$faqs = [
  [
    'q' => 'How do you select plants for my property?',
    'a' => 'Plant selection is based on four factors: your property\'s sun and shade conditions, your soil type, your aesthetic preferences, and the mature size of each plant. We never install plants that will outgrow their space or that are not suited to Michigan\'s hardiness zone. Every planting plan we design is intended to look intentional and well-maintained for years, not just at installation.',
  ],
  [
    'q' => 'What is the best time of year to start a landscape project?',
    'a' => 'Spring is the most popular time to begin — the ground is workable, plants establish quickly, and the results are visible throughout the growing season. However, fall planting is excellent for trees, shrubs, and perennials because cooler temperatures reduce transplant stress. We accept projects year-round and will advise you on the optimal timing based on your specific plants and goals.',
  ],
  [
    'q' => 'How often does my property need maintenance visits?',
    'a' => 'For most residential properties, we recommend bi-weekly visits from May through September and monthly visits in April and October. Fall cleanup is a single dedicated visit. Frequency depends on your lawn size, planting bed coverage, and how manicured you want the property to look. We customize every maintenance program and you can adjust frequency at any time.',
  ],
  [
    'q' => 'Do you guarantee the plants you install?',
    'a' => 'Yes. We provide a one-year warranty on all plants we install, covering replacement if a plant fails due to installation error or product quality. Plants lost due to drought, extreme weather events, or improper watering after our recommended care instructions are not covered, but we will always discuss your situation and work to find a fair resolution.',
  ],
  [
    'q' => 'Can you work around existing plants and trees I want to keep?',
    'a' => 'Absolutely. We assess your existing plantings during the consultation and design around anything you want to preserve. In many cases, we will recommend relocating plants rather than removing them. Mature trees and established shrubs are assets we work with, not obstacles.',
  ],
  [
    'q' => 'Do maintenance clients get priority for larger projects?',
    'a' => 'Yes. Existing maintenance clients receive priority scheduling for all larger project work — hardscape additions, lighting installations, and full landscape refreshes. You also get first access to our seasonal planting schedule, which fills up quickly in spring. Building a long-term relationship with Everridge means you are never waiting at the back of the line.',
  ],
];
?>


<!-- ════════════════════════════════════════════════
     PAGE HERO
     ════════════════════════════════════════════════ -->
<section class="relative overflow-hidden -mt-[104px]" style="min-height:88vh;">
  <div class="absolute inset-0 bg-[#0e1a0c]" style="background-size:cover;background-position:center;">
    {{-- Replace: background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/landscape-hero.jpg') --}}
    <div class="absolute inset-0 flex items-center justify-center text-[#3a3a34] text-xs tracking-widest uppercase text-center px-10">
      Hero — lush vibrant front yard, layered plantings, fresh mulch, clean edges. Magazine quality. Bloomfield Hills aesthetic.
    </div>
  </div>
  <div class="absolute inset-0" style="background:linear-gradient(105deg,rgba(0,0,0,.76) 0%,rgba(0,0,0,.44) 55%,rgba(0,0,0,.14) 100%);"></div>

  <div class="relative z-10 max-w-[1280px] mx-auto px-6 md:px-10 flex flex-col justify-center" style="min-height:88vh;padding-top:140px;padding-bottom:80px;">
    <div class="max-w-2xl">
      <div class="flex items-center gap-3 mb-5">
        <span class="block w-9 h-px bg-[#8a6a45]"></span>
        <span class="text-[10px] font-semibold tracking-[.22em] uppercase text-[#8a6a45]">Landscape Design & Installation</span>
      </div>
      <h1 class="font-['Playfair_Display'] text-[clamp(36px,5.5vw,70px)] font-bold text-[#e6e3df] leading-[1.06] tracking-tight mb-5">
        Premium Outdoor Living<br>
        <em class="italic text-[#8a6a45]">Starts Here.</em>
      </h1>
      <p class="text-[clamp(14px,1.7vw,18px)] font-light text-[rgba(240,236,230,.65)] leading-relaxed max-w-xl mb-10">
        Custom landscape design, seasonal care, and year-round maintenance for homeowners who want their property to make a statement.
      </p>
      <div class="flex flex-wrap gap-3">
        <a href="/contact"
           class="inline-flex items-center gap-2 text-[12px] font-bold tracking-[.1em] uppercase text-[#0f0f0f] px-7 py-4 rounded-md hover:opacity-85 transition-opacity"
           style="background:linear-gradient(135deg,#8a6a45,#7a5c38);">
          Request a Free Estimate
          <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
        </a>
        <a href="#ev-seasonal"
           class="inline-flex items-center gap-2 text-[12px] font-medium tracking-[.08em] uppercase text-[rgba(240,236,230,.75)] border border-[rgba(240,236,230,.2)] px-7 py-4 rounded-md hover:text-[#8a6a45] hover:border-[#8a6a45] transition-colors">
          Maintenance Programs
        </a>
      </div>
    </div>

    <!-- Floating trust badges -->
    <div class="absolute bottom-10 right-6 md:right-10 hidden md:flex flex-col gap-3">
      <?php foreach ( [['Year-Round','Maintenance Programs'],['Michigan','Climate Expertise'],['Priority','For Maintenance Clients']] as $b ) : ?>
      <div class="bg-[rgba(10,10,8,.75)] backdrop-blur-md border border-[rgba(255,255,255,.08)] rounded-xl px-5 py-3 text-right">
        <div class="font-['Playfair_Display'] text-[16px] font-bold text-[#8a6a45] leading-none"><?php echo $b[0]; ?></div>
        <div class="text-[10px] text-[rgba(240,236,230,.45)] mt-1 tracking-[.04em]"><?php echo $b[1]; ?></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

  <!-- Scroll indicator -->
  <div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 opacity-40">
    <span class="text-[9px] tracking-[.2em] uppercase text-white">Scroll</span>
    <div class="w-px h-8 bg-white animate-pulse"></div>
  </div>
</section>


<!-- ════════════════════════════════════════════════
     SECTION 1 — WHAT WE DO
     ════════════════════════════════════════════════ -->
<section class="bg-white py-24">
  <div class="max-w-[1280px] mx-auto px-6 md:px-10">

    <div class="grid grid-cols-1 lg:grid-cols-[1fr_400px] gap-16 items-start">

      <!-- Text -->
      <div class="ev-reveal-left">
        <span class="block text-[10px] font-semibold tracking-[.22em] uppercase text-[#8a6a45] mb-4">What We Do</span>
        <h2 class="font-['Playfair_Display'] text-[clamp(28px,3.5vw,44px)] font-bold text-[#0b0b0c] leading-[1.12] mb-7">
          Not Just Landscaping.<br>
          <span class="text-[#8a6a45]">Designed Outdoor Environments.</span>
        </h2>
        <div class="space-y-5 text-[15px] font-light text-[#7a7f85] leading-[1.8]">
          <p>Everridge provides complete landscape design, installation, and seasonal maintenance for residential properties across Southeast Michigan. Our landscaping work includes <strong class="font-semibold text-[#0b0b0c]">custom planting designs</strong> using trees, shrubs, perennials, and seasonal annuals selected specifically for Michigan's climate and your property's sun, shade, and soil conditions.</p>
          <p>We install sod for new lawns and lawn renovation projects. We design and install mulch beds with <strong class="font-semibold text-[#0b0b0c]">clean, defined edging</strong> that gives your property a polished, well-maintained appearance year round. Our seasonal maintenance programs cover spring cleanups, fall leaf removal, mulch replenishment, trimming and pruning, lawn treatment, and debris removal.</p>
          <p>What separates Everridge from a typical landscaping company is that we approach every project as a design opportunity. <strong class="font-semibold text-[#0b0b0c]">We do not just plant shrubs and spread mulch.</strong> We design outdoor environments that complement your home's architecture, enhance your curb appeal, and increase your property's value. Every planting plan is intentional. Every material is selected with purpose.</p>
        </div>

        <!-- Services checklist -->
        <div class="mt-10 grid grid-cols-1 sm:grid-cols-2 gap-3">
          <?php
          $services = [
            'Custom Planting Design',
            'Tree & Shrub Installation',
            'Perennial & Annual Beds',
            'Sod Installation & Lawn Renovation',
            'Mulch Beds & Defined Edging',
            'Seasonal Color Programs',
            'Spring & Fall Cleanup',
            'Trimming & Pruning',
            'Weed Control & Bed Maintenance',
            'Irrigation Coordination',
          ];
          foreach ( $services as $svc ) : ?>
          <div class="flex items-center gap-3 bg-[#f5f2ef] border border-[#e6e3df] rounded-lg px-4 py-3">
            <svg class="w-4 h-4 text-[#8a6a45] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/>
            </svg>
            <span class="text-[13px] font-medium text-[#0b0b0c]"><?php echo $svc; ?></span>
          </div>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- Side image + value prop card -->
      <div class="ev-reveal-right flex flex-col gap-4 lg:sticky lg:top-32">
        <div class="rounded-2xl overflow-hidden border border-[#e6e3df] aspect-[3/4] bg-[#d8e8d0] flex items-center justify-center text-[11px] text-[#7a7f85] text-center px-8">
          {{-- Replace: <img src="<?php echo get_template_directory_uri(); ?>/assets/images/landscape-detail.jpg" class="w-full h-full object-cover" alt="Premium landscape planting detail"> --}}
          Layered planting beds — trees, shrubs, perennials, and seasonal color with fresh mulch and clean steel edging
        </div>

        <!-- Design-first card -->
        <div class="bg-[#f5f2ef] border border-[#e6e3df] rounded-xl p-5">
          <div class="flex items-start gap-4">
            <div class="w-10 h-10 rounded-lg bg-white border border-[#d8d4ce] flex items-center justify-center flex-shrink-0">
              <svg class="w-5 h-5 text-[#8a6a45]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9.53 16.122a3 3 0 00-5.78 1.128 2.25 2.25 0 01-2.4 2.245 4.5 4.5 0 008.4-2.245c0-.399-.078-.78-.22-1.128zm0 0a15.998 15.998 0 003.388-1.62m-5.043-.025a15.994 15.994 0 011.622-3.395m3.42 3.42a15.995 15.995 0 004.764-4.648l3.876-5.814a1.151 1.151 0 00-1.597-1.597L14.146 6.32a15.996 15.996 0 00-4.649 4.763m3.42 3.42a6.776 6.776 0 00-3.42-3.42"/>
              </svg>
            </div>
            <div>
              <div class="text-[12px] font-semibold text-[#0b0b0c] mb-1">Design-First Approach</div>
              <p class="text-[12px] font-light text-[#7a7f85] leading-relaxed">Every landscape project starts with an intentional design. We consider your home's architecture, sight lines, sun patterns, and how you use your outdoor space before recommending a single plant.</p>
            </div>
          </div>
        </div>

        <!-- Maintenance upsell card -->
        <div class="bg-[#1a1814] rounded-xl p-5">
          <div class="text-[10px] font-semibold tracking-[.15em] uppercase text-[#8a6a45] mb-2">Maintenance Clients</div>
          <p class="text-[13px] font-light text-[rgba(240,236,230,.7)] leading-relaxed mb-3">Get priority scheduling for hardscape, lighting, and larger project additions — plus first access to spring planting slots.</p>
          <a href="#ev-seasonal" class="inline-flex items-center gap-1.5 text-[11px] font-semibold text-[#8a6a45] tracking-[.06em]">
            See Maintenance Programs
            <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
          </a>
        </div>
      </div>

    </div>

    <!-- Photo grid -->
    <div class="mt-20">
      <div class="text-center mb-10 ev-reveal">
        <span class="block text-[10px] font-semibold tracking-[.22em] uppercase text-[#8a6a45] mb-3">Project Gallery</span>
        <h3 class="font-['Playfair_Display'] text-[clamp(22px,3vw,34px)] font-bold text-[#0b0b0c]">Our Landscape Work</h3>
      </div>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
        <?php foreach ( $gallery_items as $i => $g ) : ?>
        <div class="ev-reveal group relative overflow-hidden rounded-xl border border-[#e6e3df] aspect-[4/3] cursor-pointer bg-[#d8e8d0]"
             style="transition-delay:<?php echo $i * 80; ?>ms;">
          {{-- Replace: <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ls-<?php echo $i+1; ?>.jpg" class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" loading="lazy" alt="<?php echo esc_attr($g['label']); ?> - <?php echo esc_attr($g['city']); ?>"> --}}
          <div class="absolute inset-0 flex items-center justify-center text-[10px] text-[#7a9a7a] text-center px-6 transition-transform duration-500 group-hover:scale-105">
            <?php echo $g['ph']; ?>
          </div>
          <div class="absolute inset-0 bg-gradient-to-t from-[rgba(0,0,0,.65)] via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-0 left-0 right-0 p-4 translate-y-2 group-hover:translate-y-0 opacity-0 group-hover:opacity-100 transition-all duration-300">
            <div class="text-[13px] font-semibold text-white"><?php echo $g['label']; ?></div>
            <div class="text-[11px] text-[rgba(255,255,255,.6)] mt-0.5"><?php echo $g['city']; ?></div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>

  </div>
</section>


<!-- ════════════════════════════════════════════════
     SECTION 2 — BEFORE & AFTER
     ════════════════════════════════════════════════ -->
<section class="bg-[#f5f2ef] border-t border-b border-[#e6e3df] py-24">
  <div class="max-w-[1280px] mx-auto px-6 md:px-10">

    <div class="text-center mb-14 ev-reveal">
      <span class="block text-[10px] font-semibold tracking-[.22em] uppercase text-[#8a6a45] mb-3">Transformations</span>
      <h2 class="font-['Playfair_Display'] text-[clamp(26px,3.5vw,42px)] font-bold text-[#0b0b0c]">
        The Everridge Difference,<br>
        <span class="text-[#8a6a45]">Side by Side.</span>
      </h2>
      <p class="mt-3 text-[14px] text-[#7a7f85] font-light">Drag the handle to reveal the transformation.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      <?php foreach ( $ba_projects as $i => $p ) : ?>
      <div class="ev-reveal" style="transition-delay:<?php echo $i * 100; ?>ms;">
        <div class="ev-ba relative overflow-hidden rounded-2xl border border-[#e6e3df] cursor-col-resize select-none" data-ba="<?php echo $i; ?>">
          <!-- Before -->
          <div class="aspect-[4/3] bg-[#d8d4cc] flex items-center justify-center text-[10px] text-[#7a7f85] text-center px-6">
            {{-- Before: background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/ls-before-<?php echo $i+1; ?>.jpg') --}}
            <?php echo $p['ph_b']; ?>
          </div>
          <!-- After (clipped) -->
          <div class="ev-ba-after absolute inset-0 bg-[#b8d4a8] flex items-center justify-center text-[10px] text-[#7a9a7a] text-center px-6"
               style="clip-path:inset(0 50% 0 0);background-size:cover;background-position:center;">
            {{-- After: background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/ls-after-<?php echo $i+1; ?>.jpg') --}}
            <?php echo $p['ph_a']; ?>
          </div>
          <!-- Handle -->
          <div class="ev-ba-handle absolute top-0 bottom-0 w-0.5 bg-white left-1/2 -translate-x-1/2 flex items-center justify-center pointer-events-none">
            <div class="w-9 h-9 rounded-full bg-white flex items-center justify-center shadow-[0_2px_12px_rgba(0,0,0,.2)]">
              <svg class="w-4 h-4 text-[#0b0b0c]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15M15.75 9L12 5.25 8.25 9"/>
              </svg>
            </div>
          </div>
          <span class="absolute top-3 left-3 text-[9px] font-bold tracking-widest uppercase text-[rgba(255,255,255,.65)]">Before</span>
          <span class="absolute top-3 right-3 text-[9px] font-bold tracking-widest uppercase text-[rgba(255,255,255,.65)]">After</span>
        </div>
        <div class="flex items-center justify-between pt-3 px-1">
          <span class="font-['Playfair_Display'] text-[15px] font-semibold text-[#0b0b0c]"><?php echo $p['label']; ?></span>
          <span class="text-[11px] text-[#7a7f85]"><?php echo $p['city']; ?></span>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>


<!-- ════════════════════════════════════════════════
     SECTION 3 — SEASONAL MAINTENANCE
     ════════════════════════════════════════════════ -->
<section id="ev-seasonal" class="bg-white py-24">
  <div class="max-w-[1280px] mx-auto px-6 md:px-10">

    <div class="text-center mb-14 ev-reveal">
      <span class="block text-[10px] font-semibold tracking-[.22em] uppercase text-[#8a6a45] mb-3">Maintenance Programs</span>
      <h2 class="font-['Playfair_Display'] text-[clamp(26px,3.5vw,42px)] font-bold text-[#0b0b0c] leading-[1.15]">
        Your Property, Looked After<br>
        <span class="text-[#8a6a45]">Through Every Season.</span>
      </h2>
      <p class="mt-4 text-[15px] text-[#7a7f85] font-light max-w-2xl mx-auto leading-relaxed">
        We handle everything so your property looks its best year round — without you having to think about it. Maintenance clients get priority scheduling for all larger project work.
      </p>
    </div>

    <!-- Season tabs -->
    <div class="flex justify-center gap-2 mb-10 ev-reveal">
      <?php foreach ( $seasonal as $key => $season ) : ?>
      <button class="ev-season-btn flex items-center gap-2 text-[12px] font-semibold tracking-[.06em] uppercase px-6 py-3 rounded-full border transition-all duration-200
        <?php echo $key === 'spring' ? 'bg-[#1a1814] text-white border-[#1a1814]' : 'bg-white text-[#7a7f85] border-[#d8d4ce] hover:border-[#1a1814] hover:text-[#0b0b0c]'; ?>"
             data-season="<?php echo $key; ?>">
        <span><?php echo $season['icon']; ?></span>
        <?php echo $season['label']; ?>
      </button>
      <?php endforeach; ?>
    </div>

    <!-- Season panels -->
    <?php foreach ( $seasonal as $key => $season ) : ?>
    <div class="ev-season-panel <?php echo $key !== 'spring' ? 'hidden' : ''; ?>" data-panel="<?php echo $key; ?>">
      <div class="grid grid-cols-1 lg:grid-cols-[1fr_420px] gap-10 items-start">

        <!-- Items list -->
        <div class="bg-[#f5f2ef] border border-[#e6e3df] rounded-2xl p-8 md:p-10">
          <div class="flex items-center gap-3 mb-6">
            <span class="text-3xl"><?php echo $season['icon']; ?></span>
            <h3 class="font-['Playfair_Display'] text-[22px] font-bold text-[#0b0b0c]"><?php echo $season['label']; ?> Services</h3>
          </div>
          <div class="space-y-3">
            <?php foreach ( $season['items'] as $item ) : ?>
            <div class="flex items-start gap-3">
              <svg class="w-4 h-4 flex-shrink-0 mt-0.5 text-[#8a6a45]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/>
              </svg>
              <span class="text-[14px] text-[#2f3133] leading-relaxed"><?php echo $item; ?></span>
            </div>
            <?php endforeach; ?>
          </div>
          <div class="mt-8 pt-6 border-t border-[#d8d4ce]">
            <a href="/contact"
               class="inline-flex items-center gap-2 text-[11px] font-bold tracking-[.1em] uppercase text-[#0f0f0f] px-6 py-3 rounded-md hover:opacity-85 transition-opacity"
               style="background:linear-gradient(135deg,#8a6a45,#7a5c38);">
              Schedule <?php echo $season['label']; ?> Service
              <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
            </a>
          </div>
        </div>

        <!-- Season property photo -->
        <div class="flex flex-col gap-4">
          <div class="rounded-2xl overflow-hidden border border-[#e6e3df] aspect-[4/3] flex items-center justify-center text-[11px] text-[#7a7f85] text-center px-8"
               style="background:<?php echo $key === 'spring' ? '#d0e8c0' : ($key === 'summer' ? '#c8e4b0' : '#d4c8a0'); ?>">
            {{-- Replace: <img src="<?php echo get_template_directory_uri(); ?>/assets/images/season-<?php echo $key; ?>.jpg" class="w-full h-full object-cover" alt="Property in <?php echo $season['label']; ?>"> --}}
            Property in <?php echo $season['label']; ?> — showing the same home looking maintained and polished
          </div>
          <!-- Maintenance value prop -->
          <div class="bg-[#f5f2ef] border border-[#e6e3df] rounded-xl p-5">
            <div class="text-[11px] font-semibold text-[#8a6a45] tracking-[.1em] uppercase mb-2">Why Ongoing Maintenance Matters</div>
            <p class="text-[13px] font-light text-[#7a7f85] leading-relaxed">Regular maintenance protects your landscape investment, prevents weed and pest damage, and ensures your property looks its best when you pull into your driveway — and when a buyer or guest does too. Maintenance clients also receive <strong class="font-semibold text-[#0b0b0c]">priority scheduling</strong> for hardscape and lighting additions.</p>
          </div>
        </div>

      </div>
    </div>
    <?php endforeach; ?>

  </div>
</section>


<!-- ════════════════════════════════════════════════
     SECTION 4A — TESTIMONIAL
     ════════════════════════════════════════════════ -->
<section class="bg-[#f5f2ef] border-t border-[#e6e3df] py-24">
  <div class="max-w-[860px] mx-auto px-6 md:px-10 ev-reveal">
    <div class="bg-white border border-[#e6e3df] rounded-2xl p-10 md:p-14 text-center relative overflow-hidden">
      <div class="absolute top-6 left-8 opacity-[.05]">
        <svg class="w-24 h-24 text-[#0b0b0c]" fill="currentColor" viewBox="0 0 24 24">
          <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
        </svg>
      </div>
      <div class="flex justify-center gap-1 mb-6">
        <?php for ( $s = 0; $s < 5; $s++ ) : ?>
        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="#8a6a45"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
        <?php endfor; ?>
      </div>
      <p class="font-['Playfair_Display'] italic text-[clamp(16px,2.5vw,21px)] text-[#0b0b0c] leading-[1.65] mb-8 relative z-10">
        "Our front yard was embarrassing before Everridge. Now I genuinely look forward to pulling into my driveway every day. They came out, walked the space with us, showed us a planting plan, and executed it exactly as promised. The edging alone makes the whole property look like it belongs in a magazine. We signed up for their maintenance program the same week."
      </p>
      <div class="flex items-center justify-center gap-4">
        <div class="w-12 h-12 rounded-full bg-[#e8f0e4] flex items-center justify-center flex-shrink-0">
          <span class="font-['Playfair_Display'] text-[15px] font-bold text-[#4a7a4a]">KL</span>
        </div>
        <div class="text-left">
          <div class="font-semibold text-[14px] text-[#0b0b0c]">Karen L.</div>
          <div class="text-[11px] text-[#7a7f85]">Front Yard Redesign + Maintenance Program · Bloomfield Hills, MI</div>
        </div>
        <div class="ml-4 flex items-center gap-1.5 bg-[#f5f2ef] border border-[#e6e3df] rounded-full px-3 py-1.5">
          <svg class="w-4 h-4" viewBox="0 0 24 24" fill="#8a8680"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/></svg>
          <span class="text-[10px] text-[#7a7f85] font-medium">Google Review</span>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ════════════════════════════════════════════════
     SECTION 4B — FAQ
     ════════════════════════════════════════════════ -->
<section class="bg-white border-t border-[#e6e3df] py-24">
  <div class="max-w-[800px] mx-auto px-6 md:px-10">

    <div class="text-center mb-14 ev-reveal">
      <span class="block text-[10px] font-semibold tracking-[.22em] uppercase text-[#8a6a45] mb-3">FAQ</span>
      <h2 class="font-['Playfair_Display'] text-[clamp(24px,3.5vw,38px)] font-bold text-[#0b0b0c] leading-[1.15]">
        Common Questions About<br>
        <span class="text-[#8a6a45]">Landscape Design & Care</span>
      </h2>
    </div>

    <div id="ev-faq" class="flex flex-col gap-3 ev-reveal">
      <?php foreach ( $faqs as $i => $faq ) : ?>
      <div class="ev-faq-item bg-[#f5f2ef] border border-[#e6e3df] rounded-xl overflow-hidden hover:border-[#8a6a45] transition-colors">
        <button class="ev-faq-btn w-full flex items-center justify-between gap-4 px-6 py-5 text-left"
                aria-expanded="<?php echo $i === 0 ? 'true' : 'false'; ?>">
          <span class="font-semibold text-[14px] text-[#0b0b0c] leading-snug"><?php echo $faq['q']; ?></span>
          <span class="ev-faq-icon flex-shrink-0 w-7 h-7 rounded-full border border-[#d8d4ce] flex items-center justify-center transition-all duration-300 <?php echo $i === 0 ? 'bg-[#1a1814] border-[#1a1814]' : 'bg-white'; ?>">
            <svg class="w-3.5 h-3.5 transition-transform duration-300 <?php echo $i === 0 ? 'rotate-45 text-white' : 'text-[#7a7f85]'; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"/>
            </svg>
          </span>
        </button>
        <div class="ev-faq-body overflow-hidden transition-all duration-300" style="max-height:<?php echo $i === 0 ? '400px' : '0'; ?>;">
          <div class="px-6 pb-5 pt-1">
            <p class="text-[13px] font-light text-[#7a7f85] leading-[1.8]"><?php echo $faq['a']; ?></p>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>


<!-- ════════════════════════════════════════════════
     SECTION 4C — CTA
     ════════════════════════════════════════════════ -->
<section class="relative overflow-hidden py-24 md:py-32">
  <div class="absolute inset-0 bg-[#0c1a0a]" style="background-size:cover;background-position:center;background-attachment:fixed;">
    {{-- Replace: background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/landscape-cta.jpg') --}}
    <div class="absolute inset-0 flex items-center justify-center text-[#2a3a28] text-xs tracking-widest uppercase">
      Completed landscape — lush, vibrant, golden hour, magazine quality
    </div>
  </div>
  <div class="absolute inset-0" style="background:rgba(0,0,0,.66);"></div>

  <div class="relative z-10 max-w-[720px] mx-auto px-6 md:px-10 text-center">
    <span class="block text-[10px] font-semibold tracking-[.22em] uppercase text-[#8a6a45] mb-4">Get Started</span>
    <h2 class="font-['Playfair_Display'] text-[clamp(28px,5vw,52px)] font-bold text-[#e6e3df] leading-[1.1] mb-5">
      Ready to Make Your Property<br>
      <em class="italic text-[#8a6a45]">Look Its Absolute Best?</em>
    </h2>
    <p class="text-[15px] font-light text-[rgba(240,236,230,.58)] leading-relaxed mb-10 max-w-lg mx-auto">
      Request a free consultation. We'll walk your property, discuss your vision, and provide a custom planting plan and estimate.
    </p>
    <a href="tel:+17705550192"
       class="block font-['Playfair_Display'] font-bold text-[#8a6a45] text-[clamp(24px,4vw,40px)] mb-9 hover:opacity-75 transition-opacity">
      (770) 555-0192
    </a>
    <div class="flex flex-wrap gap-3 justify-center">
      <a href="/contact"
         class="inline-flex items-center gap-2 text-[12px] font-bold tracking-[.1em] uppercase text-[#0f0f0f] px-9 py-4 rounded-md hover:opacity-85 transition-opacity"
         style="background:linear-gradient(135deg,#8a6a45,#7a5c38);">
        Request a Free Estimate
        <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
      </a>
      <a href="/our-work"
         class="inline-flex items-center gap-2 text-[12px] font-medium tracking-[.08em] uppercase text-[rgba(240,236,230,.75)] border border-[rgba(240,236,230,.2)] px-8 py-4 rounded-md hover:text-[#8a6a45] hover:border-[#8a6a45] transition-colors">
        View Our Work
      </a>
    </div>
  </div>
</section>


<!-- ════════════════════════════════════════════════
     JAVASCRIPT
     ════════════════════════════════════════════════ -->
<script>
(function () {

  /* ── SCROLL REVEAL ─────────────────────────────── */
  const ro = new IntersectionObserver(entries => {
    entries.forEach(e => {
      if (!e.isIntersecting) return;
      e.target.classList.add('opacity-100','translate-y-0','translate-x-0');
      e.target.classList.remove('opacity-0','translate-y-7','-translate-x-8','translate-x-8');
      ro.unobserve(e.target);
    });
  }, { threshold: 0.1 });
  document.querySelectorAll('.ev-reveal').forEach(el => {
    el.classList.add('opacity-0','translate-y-7','transition-all','duration-700'); ro.observe(el);
  });
  document.querySelectorAll('.ev-reveal-left').forEach(el => {
    el.classList.add('opacity-0','-translate-x-8','transition-all','duration-700'); ro.observe(el);
  });
  document.querySelectorAll('.ev-reveal-right').forEach(el => {
    el.classList.add('opacity-0','translate-x-8','transition-all','duration-700'); ro.observe(el);
  });


  /* ── SEASON TABS ───────────────────────────────── */
  document.querySelectorAll('.ev-season-btn').forEach(btn => {
    btn.addEventListener('click', () => {
      const key = btn.dataset.season;

      // Buttons
      document.querySelectorAll('.ev-season-btn').forEach(b => {
        const active = b.dataset.season === key;
        b.className = b.className.replace('bg-[#1a1814] text-white border-[#1a1814]','bg-white text-[#7a7f85] border-[#d8d4ce] hover:border-[#1a1814] hover:text-[#0b0b0c]');
        if (active) {
          b.classList.remove('bg-white','text-[#7a7f85]','border-[#d8d4ce]','hover:border-[#1a1814]','hover:text-[#0b0b0c]');
          b.classList.add('bg-[#1a1814]','text-white','border-[#1a1814]');
        }
      });

      // Panels
      document.querySelectorAll('.ev-season-panel').forEach(p => {
        p.classList.toggle('hidden', p.dataset.panel !== key);
      });
    });
  });


  /* ── BEFORE / AFTER DRAG ───────────────────────── */
  document.querySelectorAll('.ev-ba').forEach(wrap => {
    const after  = wrap.querySelector('.ev-ba-after');
    const handle = wrap.querySelector('.ev-ba-handle');
    let drag = false;
    const setPos = x => {
      const r   = wrap.getBoundingClientRect();
      const pct = Math.min(Math.max((x - r.left) / r.width, 0), 1) * 100;
      after.style.clipPath = `inset(0 ${100 - pct}% 0 0)`;
      handle.style.left    = pct + '%';
    };
    wrap.addEventListener('mousedown',  e => { drag = true; setPos(e.clientX); });
    wrap.addEventListener('touchstart', e => { drag = true; setPos(e.touches[0].clientX); }, { passive: true });
    window.addEventListener('mousemove',  e => { if (drag) setPos(e.clientX); });
    window.addEventListener('touchmove',  e => { if (drag) setPos(e.touches[0].clientX); }, { passive: true });
    window.addEventListener('mouseup',    () => drag = false);
    window.addEventListener('touchend',   () => drag = false);
  });


  /* ── FAQ ACCORDION ─────────────────────────────── */
  document.querySelectorAll('.ev-faq-btn').forEach(btn => {
    btn.addEventListener('click', () => {
      const item   = btn.closest('.ev-faq-item');
      const body   = item.querySelector('.ev-faq-body');
      const icon   = item.querySelector('.ev-faq-icon');
      const svg    = icon.querySelector('svg');
      const isOpen = btn.getAttribute('aria-expanded') === 'true';

      // Close all
      document.querySelectorAll('.ev-faq-item').forEach(i => {
        i.querySelector('.ev-faq-btn').setAttribute('aria-expanded','false');
        i.querySelector('.ev-faq-body').style.maxHeight = '0';
        const ic = i.querySelector('.ev-faq-icon');
        const s  = ic.querySelector('svg');
        ic.classList.remove('bg-[#1a1814]','border-[#1a1814]');
        ic.classList.add('bg-white');
        s.classList.remove('rotate-45','text-white');
        s.classList.add('text-[#7a7f85]');
      });

      if (!isOpen) {
        btn.setAttribute('aria-expanded','true');
        body.style.maxHeight = body.scrollHeight + 'px';
        icon.classList.add('bg-[#1a1814]','border-[#1a1814]');
        icon.classList.remove('bg-white');
        svg.classList.add('rotate-45','text-white');
        svg.classList.remove('text-[#7a7f85]');
      }
    });
  });

})();
</script>

<?php get_footer(); ?>