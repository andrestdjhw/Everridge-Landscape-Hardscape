<?php
/**
 * Template Name: Service - Brick + Hardscapes
 *
 * @package everridge
 */
get_header(); ?>

<?php
/* ── Data ─────────────────────────────────────────────────────────────────── */
$project_types = [
  [ 'label' => 'Paver Patio',        'city' => 'Birmingham, MI',      'ph' => 'Paver patio with outdoor furniture — clean lines, polymeric sand finish' ],
  [ 'label' => 'Curved Walkway',     'city' => 'Troy, MI',            'ph' => 'Curved paver walkway — border pattern, clean edge lines' ],
  [ 'label' => 'Retaining Wall',     'city' => 'Bloomfield Hills, MI','ph' => 'Multi-level retaining wall with natural stone cap' ],
  [ 'label' => 'Driveway',           'city' => 'Rochester Hills, MI', 'ph' => 'Brussels Block driveway with contrasting border apron' ],
  [ 'label' => 'Outdoor Fireplace',  'city' => 'Shelby Township, MI', 'ph' => 'Custom outdoor fireplace with paver surround' ],
  [ 'label' => 'Paver Detail',       'city' => 'Clinton Township, MI','ph' => 'Close-up — paver texture, joint lines, polymeric sand finish' ],
];

$ba_projects = [
  [ 'label' => 'Backyard Patio',     'city' => 'Birmingham, MI',      'ph_b' => 'Before — cracked concrete slab, no definition',         'ph_a' => 'After — premium paver patio with seating wall' ],
  [ 'label' => 'Front Walkway',      'city' => 'Troy, MI',            'ph_b' => 'Before — overgrown path, damaged steps',                'ph_a' => 'After — new paver walkway and stoop' ],
  [ 'label' => 'Retaining Wall',     'city' => 'Rochester Hills, MI', 'ph_b' => 'Before — eroding slope, drainage failure',              'ph_a' => 'After — tiered retaining wall, integrated drainage' ],
  [ 'label' => 'Driveway',           'city' => 'Bloomfield Hills, MI','ph_b' => 'Before — cracked asphalt, no border definition',        'ph_a' => 'After — Brussels Block driveway with border' ],
];

$steps = [
  [
    'num'   => '01',
    'title' => 'Site Assessment & Consultation',
    'copy'  => 'We visit your property and walk the site with you. We assess the existing grade, drainage patterns, soil conditions, and any structural considerations. We measure the space and document the current state with photos. We discuss your vision, budget, timeline, and material preferences. There is no cost and no obligation.',
    'ph'    => 'Founder reviewing site conditions with homeowner — measuring and photographing the existing space',
  ],
  [
    'num'   => '02',
    'title' => '3D Design & Material Selection',
    'copy'  => 'Within days of our consultation you receive a photorealistic 3D rendering showing the exact paver pattern, border detail, colors, and layout from multiple angles. We walk you through material options — paver styles, colors, textures — and provide a detailed proposal with line-item pricing, timeline, and scope. You approve everything before we order a single paver.',
    'ph'    => '3D rendering of hardscape project displayed on monitor — paver pattern, borders, colors clearly visible',
  ],
  [
    'num'   => '03',
    'title' => 'Base Preparation & Installation',
    'copy'  => 'We excavate to the required depth, install a compacted aggregate base, set edge restraints, and lay each paver by hand to the approved pattern. Every cut is made precisely. Every joint is aligned. We apply polymeric sand and compact the entire installation before final cleanup. Your existing landscaping is protected throughout construction.',
    'ph'    => 'Crew installing pavers — organized site, materials staged, base compaction in progress',
  ],
  [
    'num'   => '04',
    'title' => 'Final Walkthrough & Handoff',
    'copy'  => 'When installation is complete we walk every square foot of the project with you. We check every joint line, every cut edge, every grade transition. We review the polymeric sand application and confirm proper drainage. The project is not complete until you are fully satisfied. Then we clean the site and hand you the property.',
    'ph'    => 'Completed paver patio at golden hour — no equipment visible, perfectly finished, ready for furniture',
  ],
];

$faqs = [
  [
    'q' => 'How long does a paver patio last?',
    'a' => 'A properly installed paver patio with a compacted aggregate base can last 25 to 50 years or more. Individual pavers can be replaced if damaged without disturbing the rest of the installation — which is a major advantage over poured concrete. The key to longevity is base preparation and proper drainage, which is where most contractors cut corners. We do not.',
  ],
  [
    'q' => 'What is the difference between pavers and poured concrete?',
    'a' => 'Poured concrete is a single monolithic slab that will eventually crack due to freeze-thaw cycles, soil movement, and tree root pressure. When it cracks, the only repair option is full replacement. Interlocking pavers are individual units that flex with the ground, resist cracking, allow for drainage between joints, and can be individually replaced. They also offer far more design options in terms of color, texture, and pattern.',
  ],
  [
    'q' => 'Do you handle drainage issues as part of the project?',
    'a' => 'Yes. Drainage assessment is part of every site consultation. We grade all hardscape surfaces away from the home and integrate drainage solutions — including channel drains, catch basins, and French drains — where necessary. Proper drainage is not optional. It is the foundation of a hardscape installation that performs for decades.',
  ],
  [
    'q' => 'How long does a typical hardscape project take?',
    'a' => 'A standard paver patio (400 to 800 sq ft) typically takes 3 to 5 days for installation once materials are on site. Larger projects including retaining walls, driveways, or multi-element designs may take 1 to 3 weeks. We provide a specific timeline in your proposal and commit to it. Weather delays are communicated immediately.',
  ],
  [
    'q' => 'Do you offer a warranty on your work?',
    'a' => 'Yes. We provide a workmanship warranty on all hardscape installations. Manufacturer warranties apply to the paver products themselves and vary by product. We use products from Unilock and Techo-Bloc, both of which offer transferable limited lifetime warranties on their pavers. We will walk you through the full warranty coverage during your proposal review.',
  ],
  [
    'q' => 'What maintenance is required after installation?',
    'a' => 'Pavers require minimal maintenance. We recommend re-applying polymeric sand to joints every 3 to 5 years, or sooner if erosion is visible. An annual rinse with a garden hose keeps the surface clean. Pressure washing is effective for deeper cleaning but should be followed by polymeric sand reapplication. We provide a complete maintenance guide at the final walkthrough.',
  ],
];
?>


<!-- ════════════════════════════════════════════════
     PAGE HERO
     ════════════════════════════════════════════════ -->
<section class="relative overflow-hidden -mt-[104px]" style="min-height:88vh;">
  <div class="absolute inset-0 bg-[#141008]" style="background-size:cover;background-position:center;">
    {{-- Replace: background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/hardscape-hero.jpg') --}}
    <div class="absolute inset-0 flex items-center justify-center text-[#3a3a34] text-xs tracking-widest uppercase text-center px-10">
      Hero — wide angle multi-element hardscape project at golden hour (patio + walkway + retaining wall)
    </div>
  </div>
  <div class="absolute inset-0" style="background:linear-gradient(105deg,rgba(0,0,0,.78) 0%,rgba(0,0,0,.48) 55%,rgba(0,0,0,.18) 100%);"></div>

  <!-- Content -->
  <div class="relative z-10 max-w-[1280px] mx-auto px-6 md:px-10 flex flex-col justify-center" style="min-height:88vh;padding-top:140px;padding-bottom:80px;">
    <div class="max-w-2xl">
      <div class="flex items-center gap-3 mb-5">
        <span class="block w-9 h-px bg-[#8a6a45]"></span>
        <span class="text-[10px] font-semibold tracking-[.22em] uppercase text-[#8a6a45]">Brick + Hardscapes</span>
      </div>
      <h1 class="font-['Articulat_CF'] text-[clamp(38px,6vw,72px)] font-bold text-[#e6e3df] leading-[1.06] tracking-tight mb-5">
        Crafted to Last.<br>
        <em class="italic text-[#8a6a45]">Designed to Impress.</em>
      </h1>
      <p class="text-[clamp(15px,1.8vw,18px)] font-light text-[rgba(240,236,230,.65)] leading-relaxed max-w-xl mb-10">
        Premium hardscape construction for homeowners who value craftsmanship, materials, and results that stand the test of time.
      </p>
      <div class="flex flex-wrap gap-3">
        <a href="/contact" class="inline-flex items-center gap-2 text-[12px] font-bold tracking-[.1em] uppercase text-[#0f0f0f] px-7 py-4 hover:opacity-85 transition-opacity"
           style="background:linear-gradient(135deg,#8a6a45,#7a5c38);">
          Request a Free Estimate
          <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
        </a>
        <a href="#ev-gallery" class="inline-flex items-center gap-2 text-[12px] font-medium tracking-[.08em] uppercase text-[rgba(240,236,230,.75)] border border-[rgba(240,236,230,.2)] px-7 py-4 hover:text-[#8a6a45] hover:border-[#8a6a45] transition-colors">
          View Our Work
        </a>
      </div>
    </div>

    <!-- Floating stats -->
    <div class="absolute bottom-10 right-6 md:right-10 hidden md:flex flex-col gap-3">
      <?php foreach ( [['$3K–$60K+','Project Range'],['25–50 yrs','Paver Lifespan'],['500+','Projects Built']] as $s ) : ?>
      <div class="bg-[rgba(10,10,8,.75)] backdrop-blur-md border border-[rgba(255,255,255,.08)] px-5 py-3 text-right">
        <div class="font-['Articulat_CF'] text-[22px] font-bold text-[#8a6a45] leading-none"><?php echo $s[0]; ?></div>
        <div class="text-[10px] text-[rgba(240,236,230,.45)] mt-1 tracking-[.06em]"><?php echo $s[1]; ?></div>
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
     SECTION 1 — WHAT WE BUILD
     ════════════════════════════════════════════════ -->
<section class="bg-white py-24">
  <div class="max-w-[1280px] mx-auto px-6 md:px-10">

    <div class="grid grid-cols-1 lg:grid-cols-[1fr_420px] gap-16 items-start">

      <!-- Text -->
      <div class="ev-reveal-left">
        <span class="block text-[10px] font-semibold tracking-[.22em] uppercase text-[#8a6a45] mb-4">What We Build</span>
        <h2 class="font-['Articulat_CF'] text-[clamp(28px,3.5vw,44px)] font-bold text-[#0b0b0c] leading-[1.12] mb-7">
          Outdoor Structures Built<br>
          <span class="text-[#8a6a45]">to Perform for Decades.</span>
        </h2>
        <div class="space-y-5 text-[15px] font-light text-[#7a7f85] leading-[1.8]">
          <p>Everridge designs and constructs outdoor structures that transform how you use and experience your property. Our hardscape services include <strong class="font-semibold text-[#0b0b0c]">paver patios, walkways, driveways, and entryways</strong> using premium interlocking pavers from leading manufacturers. We build outdoor fireplaces and fire pit areas that extend your living space into the outdoors year round. Our retaining walls solve grading and drainage challenges while adding visual depth and structure to your landscape.</p>
          <p>We also provide <strong class="font-semibold text-[#0b0b0c]">paver repair and restoration</strong> services — including releveling, joint sand replacement, and polymeric sand application — to bring existing installations back to like-new condition.</p>
          <p>Every hardscape project we build is designed to last. We use proper base preparation, compaction techniques, and drainage integration to ensure that your patio, walkway, or wall performs as well in year 15 as it does on day one. <strong class="font-semibold text-[#0b0b0c]">We do not cut corners on the work you cannot see</strong> — because that is the work that determines how long your investment lasts.</p>
        </div>

        <!-- Services list -->
        <div class="mt-10 grid grid-cols-1 sm:grid-cols-2 gap-3">
          <?php
          $services = [
            'Paver Patios & Outdoor Living',
            'Driveways & Entryways',
            'Walkways & Front Stoops',
            'Retaining Walls',
            'Outdoor Fireplaces & Fire Pits',
            'Paver Repair & Restoration',
            'Drainage Integration',
            'Seating Walls & Borders',
          ];
          foreach ( $services as $svc ) : ?>
          <div class="flex items-center gap-3 bg-[#f5f2ef] border border-[#e6e3df] px-4 py-3">
            <svg class="w-4 h-4 text-[#8a6a45] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/>
            </svg>
            <span class="text-[13px] font-medium text-[#0b0b0c]"><?php echo $svc; ?></span>
          </div>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- Side image + badge -->
      <div class="ev-reveal-right flex flex-col gap-4 lg:sticky lg:top-32">
        <div class="overflow-hidden border border-[#e6e3df] aspect-[4/5] bg-[#e0ddd6] flex items-center justify-center text-[11px] text-[#7a7f85] text-center px-8">
          {{-- Replace: <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hardscape-detail.jpg" class="w-full h-full object-cover" alt="Hardscape detail — paver texture and craftsmanship"> --}}
          Close-up of premium paver installation — joint lines, texture, border pattern at golden hour
        </div>
        <!-- Material badge -->
        <div class="bg-[#f5f2ef] border border-[#e6e3df] p-5 flex items-start gap-4">
          <div class="w-10 h-10 bg-white border border-[#d8d4ce] flex items-center justify-center flex-shrink-0">
            <svg class="w-5 h-5 text-[#8a6a45]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.562.562 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"/>
            </svg>
          </div>
          <div>
            <div class="text-[12px] font-semibold text-[#0b0b0c] mb-1">Premium Materials Only</div>
            <p class="text-[12px] font-light text-[#7a7f85] leading-relaxed">We work exclusively with Unilock, Techo-Bloc, and natural stone products rated for Michigan's freeze-thaw cycles.</p>
          </div>
        </div>
      </div>

    </div>

    <!-- Project type photo grid -->
    <div id="ev-gallery" class="mt-20">
      <div class="text-center mb-10 ev-reveal">
        <span class="block text-[10px] font-semibold tracking-[.22em] uppercase text-[#8a6a45] mb-3">Project Gallery</span>
        <h3 class="font-['Articulat_CF'] text-[clamp(24px,3vw,36px)] font-bold text-[#0b0b0c]">Our Hardscape Work</h3>
      </div>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
        <?php foreach ( $project_types as $i => $pt ) : ?>
        <div class="ev-reveal group relative overflow-hidden border border-[#e6e3df] aspect-[4/3] cursor-pointer bg-[#e0ddd6]"
             style="transition-delay:<?php echo $i * 80; ?>ms;">
          {{-- Replace: <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hs-<?php echo $i+1; ?>.jpg" class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" loading="lazy" alt="<?php echo esc_attr($pt['label']); ?> - <?php echo esc_attr($pt['city']); ?>"> --}}
          <div class="absolute inset-0 flex items-center justify-center text-[10px] text-[#7a7f85] text-center px-6 transition-transform duration-500 group-hover:scale-105">
            <?php echo $pt['ph']; ?>
          </div>
          <div class="absolute inset-0 bg-gradient-to-t from-[rgba(0,0,0,.65)] via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-0 left-0 right-0 p-4 translate-y-2 group-hover:translate-y-0 opacity-0 group-hover:opacity-100 transition-all duration-300">
            <div class="text-[13px] font-semibold text-white"><?php echo $pt['label']; ?></div>
            <div class="text-[11px] text-[rgba(255,255,255,.6)] mt-0.5"><?php echo $pt['city']; ?></div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>

  </div>
</section>


<!-- ════════════════════════════════════════════════
     SECTION 2 — MATERIALS
     ════════════════════════════════════════════════ -->
<section class="bg-[#f5f2ef] border-t border-b border-[#e6e3df] py-24">
  <div class="max-w-[1280px] mx-auto px-6 md:px-10">

    <div class="text-center mb-14 ev-reveal">
      <span class="block text-[10px] font-semibold tracking-[.22em] uppercase text-[#8a6a45] mb-3">Materials</span>
      <h2 class="font-['Articulat_CF'] text-[clamp(26px,3.5vw,42px)] font-bold text-[#0b0b0c] leading-[1.15]">
        We Only Use Materials That<br>
        <span class="text-[#8a6a45]">Last the Michigan Winter.</span>
      </h2>
      <p class="mt-4 text-[15px] text-[#7a7f85] font-light max-w-2xl mx-auto leading-relaxed">
        We work exclusively with premium materials rated for freeze-thaw cycles. No compromises on the products that determine how long your investment lasts.
      </p>
    </div>

    <?php
    $materials = [
      [
        'title' => 'Interlocking Concrete Pavers',
        'brands'=> 'Unilock · Techo-Bloc',
        'copy'  => 'Industry-leading paver manufacturers with transferable limited lifetime warranties. Available in dozens of styles, colors, and textures. Engineered for Michigan\'s extreme freeze-thaw cycles.',
        'ph'    => 'Close-up — paver texture samples: Brussels Block, Beacon Hill, Blu 60',
        'icon'  => 'M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z',
      ],
      [
        'title' => 'Natural Stone',
        'brands'=> 'Bluestone · Fieldstone · Limestone',
        'copy'  => 'Bluestone, fieldstone, and limestone for a natural, timeless aesthetic. Ideal for walkways, coping, caps, and accent elements. Each piece is unique. No two installations look the same.',
        'ph'    => 'Natural stone samples — bluestone, fieldstone, limestone cuts',
        'icon'  => 'M2.25 12l8.954-8.955a1.126 1.126 0 011.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75',
      ],
      [
        'title' => 'Polymeric Sand',
        'brands'=> 'Techniseal · Alliance Gator',
        'copy'  => 'Applied to all paver joints to prevent weed growth, insect intrusion, and joint erosion. Activates with water to form a firm, flexible bond. The difference between a patio that looks good in year 5 and one that looks neglected.',
        'ph'    => 'Polymeric sand application — joint filling and compaction process',
        'icon'  => 'M9.75 3.104v5.714a2.25 2.25 0 01-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 014.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082',
      ],
      [
        'title' => 'Base Materials',
        'brands'=> 'Compacted Limestone · Graded Aggregate',
        'copy'  => 'The foundation you never see but determines everything. We excavate to the correct depth, install graded aggregate, and compact to specification. Proper base preparation is why our installations do not sink, shift, or crack.',
        'ph'    => 'Base preparation layers — aggregate, compaction, edge restraint installation',
        'icon'  => 'M6.429 9.75L2.25 12l4.179 2.25m0-4.5l5.571 3 5.571-3m-11.142 0L2.25 7.5 12 2.25l9.75 5.25-4.179 2.25m0 0L21.75 12l-4.179 2.25',
      ],
    ];
    ?>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
      <?php foreach ( $materials as $i => $m ) : ?>
      <div class="ev-reveal bg-white border border-[#e6e3df] overflow-hidden hover:shadow-md hover:-translate-y-0.5 transition-all duration-300"
           style="transition-delay:<?php echo $i * 100; ?>ms;">
        <!-- Image -->
        <div class="aspect-video bg-[#e0ddd6] flex items-center justify-center text-[10px] text-[#7a7f85] text-center px-8">
          {{-- Replace: <img src="<?php echo get_template_directory_uri(); ?>/assets/images/material-<?php echo $i+1; ?>.jpg" class="w-full h-full object-cover" loading="lazy" alt="<?php echo esc_attr($m['title']); ?>"> --}}
          <?php echo $m['ph']; ?>
        </div>
        <!-- Body -->
        <div class="p-6">
          <div class="flex items-start gap-4">
            <div class="w-9 h-9 bg-[#f5f2ef] border border-[#e6e3df] flex items-center justify-center flex-shrink-0 mt-0.5">
              <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="#8a6a45" stroke-width="1.6">
                <path stroke-linecap="round" stroke-linejoin="round" d="<?php echo $m['icon']; ?>"/>
              </svg>
            </div>
            <div>
              <h3 class="font-['Articulat_CF'] text-[17px] font-bold text-[#0b0b0c] mb-1"><?php echo $m['title']; ?></h3>
              <div class="text-[10px] font-semibold tracking-[.1em] uppercase text-[#8a6a45] mb-2"><?php echo $m['brands']; ?></div>
              <p class="text-[13px] font-light text-[#7a7f85] leading-[1.7]"><?php echo $m['copy']; ?></p>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>


<!-- ════════════════════════════════════════════════
     SECTION 3 — BEFORE & AFTER
     ════════════════════════════════════════════════ -->
<section class="bg-white py-24">
  <div class="max-w-[1280px] mx-auto px-6 md:px-10">

    <div class="text-center mb-14 ev-reveal">
      <span class="block text-[10px] font-semibold tracking-[.22em] uppercase text-[#8a6a45] mb-3">Transformations</span>
      <h2 class="font-['Articulat_CF'] text-[clamp(26px,3.5vw,42px)] font-bold text-[#0b0b0c]">
        See the Difference<br>
        <span class="text-[#8a6a45]">We Make.</span>
      </h2>
      <p class="mt-3 text-[14px] text-[#7a7f85] font-light">Drag the handle left and right to reveal the transformation.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
      <?php foreach ( $ba_projects as $i => $p ) : ?>
      <div class="ev-reveal" style="transition-delay:<?php echo ($i%2)*100; ?>ms;">
        <div class="ev-ba relative overflow-hidden border border-[#e6e3df] cursor-col-resize select-none" data-ba="<?php echo $i; ?>">
          <!-- Before -->
          <div class="aspect-[4/3] bg-[#ddd8d0] flex items-center justify-center text-[10px] text-[#7a7f85] text-center px-8">
            {{-- Before img: background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/hs-before-<?php echo $i+1; ?>.jpg') --}}
            <?php echo $p['ph_b']; ?>
          </div>
          <!-- After (clipped) -->
          <div class="ev-ba-after absolute inset-0 bg-[#c8d4b8] flex items-center justify-center text-[10px] text-[#7a7f85] text-center px-8"
               style="clip-path:inset(0 50% 0 0);background-size:cover;background-position:center;">
            {{-- After img: background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/hs-after-<?php echo $i+1; ?>.jpg') --}}
            <?php echo $p['ph_a']; ?>
          </div>
          <!-- Handle -->
          <div class="ev-ba-handle absolute top-0 bottom-0 w-0.5 bg-white left-1/2 -translate-x-1/2 flex items-center justify-center pointer-events-none">
            <div class="w-9 h-9 bg-white flex items-center justify-center shadow-[0_2px_12px_rgba(0,0,0,.2)]">
              <svg class="w-4 h-4 text-[#0b0b0c]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15M15.75 9L12 5.25 8.25 9"/>
              </svg>
            </div>
          </div>
          <span class="absolute top-3 left-4 text-[9px] font-bold tracking-widest uppercase text-[rgba(255,255,255,.65)]">Before</span>
          <span class="absolute top-3 right-4 text-[9px] font-bold tracking-widest uppercase text-[rgba(255,255,255,.65)]">After</span>
        </div>
        <div class="flex items-center justify-between pt-3 px-1">
          <span class="font-['Articulat_CF'] text-[15px] font-semibold text-[#0b0b0c]"><?php echo $p['label']; ?></span>
          <span class="text-[11px] text-[#7a7f85]"><?php echo $p['city']; ?></span>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>


<!-- ════════════════════════════════════════════════
     SECTION 4 — PROCESS
     ════════════════════════════════════════════════ -->
<section class="bg-[#f5f2ef] border-t border-b border-[#e6e3df] py-24">
  <div class="max-w-[1100px] mx-auto px-6 md:px-10">

    <div class="text-center mb-20 ev-reveal">
      <span class="block text-[10px] font-semibold tracking-[.22em] uppercase text-[#8a6a45] mb-3">How It Works</span>
      <h2 class="font-['Articulat_CF'] text-[clamp(26px,3.5vw,42px)] font-bold text-[#0b0b0c] leading-[1.18]">
        Your Project, Step by Step.<br>
        <span class="text-[#8a6a45]">No Surprises. No Shortcuts.</span>
      </h2>
    </div>

    <div class="relative">
      <!-- Center line -->
      <div class="hidden md:block absolute left-1/2 top-0 bottom-0 w-px bg-[#e0dad2] -translate-x-1/2"></div>

      <?php foreach ( $steps as $i => $step ) : ?>
      <?php $left = $i % 2 === 0; ?>
      <div class="ev-step relative grid grid-cols-1 md:grid-cols-[1fr_52px_1fr] items-center <?php echo $i < 3 ? 'mb-16' : ''; ?>"
           data-step="<?php echo $i; ?>">

        <?php if ( $left ) : ?>
          <!-- Content left -->
          <div class="md:pr-14 md:text-right mb-6 md:mb-0">
            <div class="inline-flex items-center gap-2 mb-3 <?php echo $left ? 'md:flex-row-reverse' : ''; ?>">
              <span class="text-[10px] font-bold tracking-[.18em] uppercase text-[#8a6a45]">Step <?php echo $step['num']; ?></span>
            </div>
            <h3 class="font-['Articulat_CF'] text-xl font-bold text-[#0b0b0c] mb-3"><?php echo $step['title']; ?></h3>
            <p class="text-[13px] font-light text-[#7a7f85] leading-[1.75]"><?php echo $step['copy']; ?></p>
          </div>
          <!-- Dot -->
          <div class="ev-step-dot hidden md:flex w-[52px] h-[52px] flex-shrink-0 items-center justify-center bg-white border-2 border-[#d8d4ce] z-10 transition-all duration-500 mx-auto shadow-sm">
            <span class="font-['Articulat_CF'] text-[13px] font-bold text-[#8a6a45]"><?php echo $step['num']; ?></span>
          </div>
          <!-- Image right -->
          <div class="md:pl-14">
            <div class="border border-[#e6e3df] bg-[#e8e4de] h-48 flex items-center justify-center text-[10px] text-[#7a7f85] text-center px-6">
              {{-- Replace: <img src="<?php echo get_template_directory_uri(); ?>/assets/images/process-hs-<?php echo $i+1; ?>.jpg" class="w-full h-full object-cover" loading="lazy"> --}}
              <?php echo $step['ph']; ?>
            </div>
          </div>

        <?php else : ?>
          <!-- Image left -->
          <div class="md:pr-14 mb-6 md:mb-0">
            <div class="border border-[#e6e3df] bg-[#e8e4de] h-48 flex items-center justify-center text-[10px] text-[#7a7f85] text-center px-6">
              {{-- Replace: <img src="<?php echo get_template_directory_uri(); ?>/assets/images/process-hs-<?php echo $i+1; ?>.jpg" class="w-full h-full object-cover" loading="lazy"> --}}
              <?php echo $step['ph']; ?>
            </div>
          </div>
          <!-- Dot -->
          <div class="ev-step-dot hidden md:flex w-[52px] h-[52px] flex-shrink-0 items-center justify-center bg-white border-2 border-[#d8d4ce] z-10 transition-all duration-500 mx-auto shadow-sm">
            <span class="font-['Articulat_CF'] text-[13px] font-bold text-[#8a6a45]"><?php echo $step['num']; ?></span>
          </div>
          <!-- Content right -->
          <div class="md:pl-14">
            <div class="text-[10px] font-bold tracking-[.18em] uppercase text-[#8a6a45] mb-3">Step <?php echo $step['num']; ?></div>
            <h3 class="font-['Articulat_CF'] text-xl font-bold text-[#0b0b0c] mb-3"><?php echo $step['title']; ?></h3>
            <p class="text-[13px] font-light text-[#7a7f85] leading-[1.75]"><?php echo $step['copy']; ?></p>
          </div>
        <?php endif; ?>

      </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>


<!-- ════════════════════════════════════════════════
     SECTION 5 — TESTIMONIAL
     ════════════════════════════════════════════════ -->
<section class="bg-white py-24">
  <div class="max-w-[860px] mx-auto px-6 md:px-10 ev-reveal">
    <div class="bg-[#f5f2ef] border border-[#e6e3df] p-10 md:p-14 text-center relative overflow-hidden">
      <!-- Decorative quote mark -->
      <div class="absolute top-6 left-8 opacity-[.06]">
        <svg class="w-24 h-24 text-[#0b0b0c]" fill="currentColor" viewBox="0 0 24 24">
          <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
        </svg>
      </div>

      <!-- Stars -->
      <div class="flex justify-center gap-1 mb-6">
        <?php for ( $s = 0; $s < 5; $s++ ) : ?>
        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="#8a6a45"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
        <?php endfor; ?>
      </div>

      <p class="font-['Articulat_CF'] italic text-[clamp(17px,2.5vw,22px)] text-[#0b0b0c] leading-[1.65] mb-8 relative z-10">
        "The patio Everridge built for us is absolutely stunning. We had three other quotes and Everridge was the only company that showed us a 3D rendering before asking us to sign anything. When it was done, we stood outside looking at it and it matched the rendering exactly. Every neighbor who sees it asks who built it. Worth every dollar."
      </p>

      <div class="flex items-center justify-center gap-4">
        <div class="w-12 h-12 bg-[#e0ddd6] flex items-center justify-center flex-shrink-0">
          <span class="font-['Articulat_CF'] text-[15px] font-bold text-[#8a7a6a]">DM</span>
        </div>
        <div class="text-left">
          <div class="font-semibold text-[14px] text-[#0b0b0c]">David M.</div>
          <div class="text-[11px] text-[#7a7f85]">Paver Patio + Seating Wall · Birmingham, MI</div>
        </div>
        <!-- Google badge -->
        <div class="ml-4 flex items-center gap-1.5 bg-white border border-[#e6e3df] px-3 py-1.5">
          <svg class="w-4 h-4" viewBox="0 0 24 24" fill="#8a8680"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/></svg>
          <span class="text-[10px] text-[#7a7f85] font-medium">Google Review</span>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ════════════════════════════════════════════════
     SECTION 6 — FAQ
     ════════════════════════════════════════════════ -->
<section class="bg-[#f5f2ef] border-t border-b border-[#e6e3df] py-24">
  <div class="max-w-[800px] mx-auto px-6 md:px-10">

    <div class="text-center mb-14 ev-reveal">
      <span class="block text-[10px] font-semibold tracking-[.22em] uppercase text-[#8a6a45] mb-3">FAQ</span>
      <h2 class="font-['Articulat_CF'] text-[clamp(26px,3.5vw,40px)] font-bold text-[#0b0b0c] leading-[1.15]">
        Common Questions About<br>
        <span class="text-[#8a6a45]">Hardscape Projects</span>
      </h2>
    </div>

    <div id="ev-faq" class="flex flex-col gap-3 ev-reveal">
      <?php foreach ( $faqs as $i => $faq ) : ?>
      <div class="ev-faq-item bg-white border border-[#e6e3df] overflow-hidden transition-all duration-300 hover:border-[#8a6a45]">
        <button class="ev-faq-btn w-full flex items-center justify-between gap-4 px-6 py-5 text-left"
                aria-expanded="<?php echo $i === 0 ? 'true' : 'false'; ?>">
          <span class="font-semibold text-[14px] text-[#0b0b0c] leading-snug"><?php echo $faq['q']; ?></span>
          <span class="ev-faq-icon flex-shrink-0 w-7 h-7 border border-[#d8d4ce] flex items-center justify-center transition-all duration-300 <?php echo $i === 0 ? 'bg-[#1a1814] border-[#1a1814]' : 'bg-white'; ?>">
            <svg class="w-3.5 h-3.5 transition-transform duration-300 <?php echo $i === 0 ? 'rotate-45 text-white' : 'text-[#7a7f85]'; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"/>
            </svg>
          </span>
        </button>
        <div class="ev-faq-body overflow-hidden transition-all duration-300 <?php echo $i === 0 ? '' : 'max-h-0'; ?>"
             style="<?php echo $i === 0 ? '' : 'max-height:0;'; ?>">
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
     SECTION 7 — CTA
     ════════════════════════════════════════════════ -->
<section class="relative overflow-hidden py-24 md:py-32">
  <div class="absolute inset-0 bg-[#0e140c]" style="background-size:cover;background-position:center;background-attachment:fixed;">
    {{-- Replace: background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/hardscape-cta.jpg') --}}
    <div class="absolute inset-0 flex items-center justify-center text-[#2a2a24] text-xs tracking-widest uppercase">
      Completed hardscape project — golden hour, clean, no equipment
    </div>
  </div>
  <div class="absolute inset-0" style="background:rgba(0,0,0,.67);"></div>

  <div class="relative z-10 max-w-[720px] mx-auto px-6 md:px-10 text-center">
    <span class="block text-[10px] font-semibold tracking-[.22em] uppercase text-[#8a6a45] mb-4">Get Started</span>
    <h2 class="font-['Articulat_CF'] text-[clamp(30px,5vw,54px)] font-bold text-[#e6e3df] leading-[1.1] mb-5">
      Ready to Build Something<br>
      <em class="italic text-[#8a6a45]">That Lasts?</em>
    </h2>
    <p class="text-[15px] font-light text-[rgba(240,236,230,.58)] leading-relaxed mb-10 max-w-lg mx-auto">
      Request a free estimate and see your project in 3D before we break ground. No pressure. No obligation.
    </p>
    <a href="tel:+17705550192"
       class="block font-['Articulat_CF'] font-bold text-[#8a6a45] text-[clamp(26px,4vw,42px)] mb-9 hover:opacity-75 transition-opacity tracking-tight">
      (770) 555-0192
    </a>
    <div class="flex flex-wrap gap-3 justify-center">
      <a href="/contact"
         class="inline-flex items-center gap-2 text-[12px] font-bold tracking-[.1em] uppercase text-[#0f0f0f] px-9 py-4 hover:opacity-85 transition-opacity"
         style="background:linear-gradient(135deg,#8a6a45,#7a5c38);">
        Request a Free Estimate
        <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
      </a>
      <a href="/our-work"
         class="inline-flex items-center gap-2 text-[12px] font-medium tracking-[.08em] uppercase text-[rgba(240,236,230,.75)] border border-[rgba(240,236,230,.2)] px-8 py-4 hover:text-[#8a6a45] hover:border-[#8a6a45] transition-colors">
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
    el.classList.add('opacity-0','translate-y-7','transition-all','duration-700');
    ro.observe(el);
  });
  document.querySelectorAll('.ev-reveal-left').forEach(el => {
    el.classList.add('opacity-0','-translate-x-8','transition-all','duration-700');
    ro.observe(el);
  });
  document.querySelectorAll('.ev-reveal-right').forEach(el => {
    el.classList.add('opacity-0','translate-x-8','transition-all','duration-700');
    ro.observe(el);
  });


  /* ── PROCESS STEPS ─────────────────────────────── */
  const stepDots = document.querySelectorAll('.ev-step-dot');
  const so = new IntersectionObserver(entries => {
    entries.forEach(e => {
      if (!e.isIntersecting) return;
      const i = e.target.dataset.step;
      if (stepDots[i]) {
        stepDots[i].style.borderColor  = '#8a6a45';
        stepDots[i].style.background   = 'rgba(138,106,69,.1)';
        stepDots[i].style.boxShadow    = '0 0 0 4px rgba(138,106,69,.12)';
      }
      so.unobserve(e.target);
    });
  }, { threshold: 0.4 });
  document.querySelectorAll('.ev-step').forEach(s => so.observe(s));


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
      const item    = btn.closest('.ev-faq-item');
      const body    = item.querySelector('.ev-faq-body');
      const icon    = item.querySelector('.ev-faq-icon');
      const svg     = icon.querySelector('svg');
      const isOpen  = btn.getAttribute('aria-expanded') === 'true';

      // Close all
      document.querySelectorAll('.ev-faq-item').forEach(i => {
        const b = i.querySelector('.ev-faq-btn');
        const d = i.querySelector('.ev-faq-body');
        const ic = i.querySelector('.ev-faq-icon');
        const s  = ic.querySelector('svg');
        b.setAttribute('aria-expanded','false');
        d.style.maxHeight = '0';
        ic.classList.remove('bg-[#1a1814]','border-[#1a1814]');
        ic.classList.add('bg-white');
        s.classList.remove('rotate-45','text-white');
        s.classList.add('text-[#7a7f85]');
      });

      // Open clicked (if it was closed)
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

  // Open first FAQ on load
  const firstBody = document.querySelector('.ev-faq-body');
  if (firstBody) firstBody.style.maxHeight = firstBody.scrollHeight + 'px';

})();
</script>

<?php get_footer(); ?>