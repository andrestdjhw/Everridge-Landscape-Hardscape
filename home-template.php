<?php
/**
 * Template Name: Home
 *
 * @package everridge
 */
get_header(); ?>

<?php
/* ── Data ─────────────────────────────────────────────────────────────────── */
$slides = [
  [
    'eyebrow' => 'Premium Hardscape',
    'img'     => '/wp-content/uploads/2026/04/HardscapeHero-scaled.jpg', // Replace with actual URL from Media > Copy URL
    'ph'      => 'Paver patio at golden hour — outdoor furniture, polymeric sand finish, wide angle',
  ],
  [
    'eyebrow' => 'Landscape Transformation',
    'img'     => '/wp-content/uploads/2026/04/terrazzo-product-display-podium-in-the-middle-of-t-2026-03-24-07-21-27-utc-scaled.jpg',
    'ph'      => 'Full front yard before & after — mulch, plantings, trimmed hedges, new walkway',
  ],
  [
    'eyebrow' => 'Outdoor Lighting',
    'img'     => '/wp-content/uploads/2026/04/OutdoorLightingSystemHero-scaled.jpg',
    'ph'      => 'Nighttime property — accent lights on trees, pathway illumination, architectural uplighting',
  ],
  [
    'eyebrow' => '3D Design Proof',
    'img'     => '/wp-content/uploads/2026/04/Landscaping3DModeling-.png',
    'ph'      => '3D rendering (left) vs completed project (right) — same angle',
  ],
  [
    'eyebrow' => 'Retaining Walls',
    'img'     => '/wp-content/uploads/2026/04/5213adfe-812c-4809-b290-165966dff344-2026-04-28.jpeg',
    'ph'      => 'Hardscape retaining wall integrated with garden design — multi-element project',
  ],
];

$badges = [
  [ 'label' => 'Licensed & Insured',     'path' => 'M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z' ],
  [ 'label' => '17+ Years Experience',   'path' => 'M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z' ],
  [ 'label' => '3D Design Renderings',   'path' => 'M6.429 9.75L2.25 12l4.179 2.25m0-4.5l5.571 3 5.571-3m-11.142 0L2.25 7.5 12 2.25l9.75 5.25-4.179 2.25m0 0L21.75 12l-4.179 2.25m0 0l4.179 2.25L12 21.75 2.25 16.5l4.179-2.25m11.142 0l-5.571 3-5.571-3' ],
  [ 'label' => '5-Star Rated',           'path' => 'M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.562.562 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z' ],
  [ 'label' => 'Residential & Commercial','path' => 'M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z' ],
];

$services = [
  [ 'href' => '/services/hardscape-patios',   'title' => 'Brick & Hardscapes',               'ph' => 'Close-up of premium paver patio — clean joint lines, polymeric sand, border pattern',          'copy' => 'Paver patios, walkways, driveways, outdoor fireplaces, and retaining walls crafted with premium materials and precision. Built to last. Designed to impress.' ],
  [ 'href' => '/services/landscape-design',   'title' => 'Landscape Design & Installation',  'ph' => 'Lush front yard — fresh mulch, seasonal plantings, trimmed hedges, clean edge line',           'copy' => 'Custom landscape design, seasonal planting, sod installation, and year-round care that keeps your property looking its absolute best. From first impression to lasting impact.' ],
  [ 'href' => '/services/3d-renderings',      'title' => 'Garden Design & 3D Renderings',    'ph' => 'Split: 3D rendering on left, completed project on right — same angle',                          'copy' => 'See your outdoor transformation before it happens. We create photorealistic 3D renderings so you can approve every detail before we break ground.' ],
  [ 'href' => '/services/outdoor-lighting',   'title' => 'Outdoor Lighting Systems',         'ph' => 'Nighttime property — accent lights on trees, pathway illumination, architectural uplighting',   'copy' => 'Professional landscape lighting design and installation. Accent, pathway, and architectural uplighting that transforms your property after dark.' ],
];

$pillars = [
  [ 'title' => 'Visual Certainty',   'path' => 'M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z M15 12a3 3 0 11-6 0 3 3 0 016 0z', 'copy' => 'Every project starts with a custom 3D rendering. You see exactly how your property will look before we begin. You approve the design, materials, and layout before a single stone is placed. What you see is what you get.' ],
  [ 'title' => 'Flawless Execution', 'path' => 'M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z', 'copy' => 'We arrive when we say we will. We finish when we promise. We leave your property cleaner than we found it. Every single time. Our clean site protocol means your plants are protected, your driveway is clear, and your neighbors never have a reason to complain.' ],
  [ 'title' => 'Premium Materials',  'path' => 'M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.562.562 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z', 'copy' => 'We use only top-tier hardscape pavers, natural stone, premium plants, and commercial-grade lighting systems. Your investment deserves to last 20 years, not 5. Every material is chosen for durability, visual impact, and long-term performance.' ],
  [ 'title' => 'Licensed & Insured', 'path' => 'M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z', 'copy' => 'Everridge is fully licensed and insured with general liability and workers compensation coverage. Your property and your investment are completely protected from day one through final walkthrough.' ],
];

$steps = [
  [ 'num' => '01', 'title' => 'Free Consultation',      'side' => 'left',  'ph' => 'Founder meeting with homeowners in their backyard — clipboard in hand, casual but professional',                                             'copy' => 'We visit your property in person. We walk the space with you, listen to your vision, and assess the scope. No obligation, no pressure, no cost. Just a conversation about what is possible for your property and your budget.' ],
  [ 'num' => '02', 'title' => '3D Design & Proposal',   'side' => 'right', 'ph' => '3D rendering displayed on laptop or monitor — software interface or clean export. Alternatively: rendering reviewed at a table with homeowner', 'copy' => 'Within days you receive a photorealistic 3D rendering showing exactly how your property will look when finished — the materials, layout, colors, and proportions from multiple angles. Alongside it: a detailed proposal with clear scope, timeline, and pricing. No hidden costs.' ],
  [ 'num' => '03', 'title' => 'Expert Execution',       'side' => 'left',  'ph' => 'Crew installing pavers or building retaining wall — clean organized site, materials neatly staged, branded Everridge shirts',                 'copy' => 'Our crew mobilizes on the scheduled date with all materials staged and ready. You receive progress updates and photos at the end of each work day. Job sites are clean, organized, and professional. We build exactly what you approved.' ],
  [ 'num' => '04', 'title' => 'Final Walkthrough',      'side' => 'right', 'ph' => 'Completed project hero shot at golden hour — clean, finished, no equipment visible. The kind of photo that makes someone stop scrolling',      'copy' => 'When construction is complete, we walk the entire project with you. The project is not finished until you tell us it is perfect. After your approval, we clean the entire site and leave your property better than you imagined.' ],
];

$ba_projects = [
  [ 'label' => 'Paver Patio',               'city' => 'Birmingham, MI' ],
  [ 'label' => 'Front Yard Transformation', 'city' => 'Troy, MI' ],
  [ 'label' => 'Landscape Lighting',        'city' => 'Rochester Hills, MI' ],
  [ 'label' => 'Retaining Wall & Garden',   'city' => 'Bloomfield Hills, MI' ],
];

$reviews = [
  [ 'name' => 'Michael T.', 'project' => 'Paver Patio · Troy, MI',              'text' => 'Everridge completely transformed our backyard. The 3D rendering process was incredible — we knew exactly what we were getting before they even started. The finished patio exceeded our expectations in every way.' ],
  [ 'name' => 'Sarah L.',   'project' => 'Full Landscape · Birmingham, MI',     'text' => 'From first consultation to final walkthrough, the professionalism was unmatched. They showed up on time every day, kept the site spotless, and delivered exactly what the rendering showed.' ],
  [ 'name' => 'David R.',   'project' => 'Landscape Lighting · Bloomfield Hills, MI', 'text' => 'The lighting system they designed is breathtaking. We had no idea what was possible until we saw the 3D mockup. Now every time we pull into the driveway at night we feel like we live in a luxury home.' ],
  [ 'name' => 'Jennifer K.','project' => 'Retaining Wall · Rochester Hills, MI','text' => 'After getting quotes from five contractors, Everridge stood apart immediately. The 3D rendering gave us confidence no one else could match. The wall turned out perfect and they finished ahead of schedule.' ],
  [ 'name' => 'Robert M.',  'project' => 'Hardscape & Garden · Shelby Township, MI', 'text' => 'I was skeptical about the 3D rendering promise but it is completely real. What we saw on screen is exactly what got built. The craftsmanship is outstanding and the crew was respectful throughout.' ],
];

$cities = [
  [ 'name' => 'Birmingham',        'href' => '/locations/birmingham' ],
  [ 'name' => 'Bloomfield Hills',  'href' => '/locations/bloomfield-hills' ],
  [ 'name' => 'Troy',              'href' => '/locations/troy' ],
  [ 'name' => 'Rochester Hills',   'href' => '/locations/rochester-hills' ],
  [ 'name' => 'Shelby Township',   'href' => '/locations/shelby-township' ],
  [ 'name' => 'Washington Twp.',   'href' => '/locations/washington-township' ],
  [ 'name' => 'Farmington Hills',  'href' => '/locations/farmington-hills' ],
  [ 'name' => 'Clinton Township',  'href' => '/locations/clinton-township' ],
];
?>


<!-- ════════════════════════════════════════════════
     SECTION 1 — HERO SLIDER
     ════════════════════════════════════════════════ -->
<section id="ev-hero" class="relative w-full overflow-hidden bg-[#0e0e0e] -mt-[104px]" style="height:100vh;min-height:600px;">

  <?php foreach ( $slides as $i => $slide ) : ?>
  <div class="ev-slide absolute inset-0 bg-cover bg-center transition-opacity duration-[1200ms] <?php echo $i === 0 ? 'opacity-100' : 'opacity-0'; ?>"
       style="background-color:#0e0e0e;<?php if ( ! empty( $slide['img'] ) ) echo 'background-image:url(' . esc_url( $slide['img'] ) . ');'; ?>"
       data-index="<?php echo $i; ?>">

    <?php if ( empty( $slide['img'] ) ) : ?>
    <!-- Placeholder — visible only when no image URL is set -->
    <div class="absolute inset-0 flex items-center justify-center text-[#5a5a54] text-xs tracking-widest uppercase text-center px-8 pointer-events-none">
      <?php echo esc_html( $slide['ph'] ); ?>
    </div>
    <?php endif; ?>

    <!-- Dark overlay for text readability over the photo -->
    <div class="absolute inset-0" style="background:linear-gradient(to right,rgba(0,0,0,.60) 0%,rgba(0,0,0,.28) 60%,rgba(0,0,0,.10) 100%);"></div>

    <!-- Slide content -->
    <div class="absolute inset-0 flex flex-col justify-center px-[8vw] max-w-3xl pt-[104px]">
      <div class="flex items-center gap-3 mb-5">
        <span class="block w-9 h-px bg-[#d4aa6a]"></span>
        <span class="text-[10px] font-semibold tracking-[.22em] uppercase text-[#d4aa6a]"><?php echo $slide['eyebrow']; ?></span>
      </div>
      <h1 class="font-['Playfair_Display'] text-[clamp(40px,6vw,78px)] font-bold text-[#f0ece6] leading-[1.07] tracking-tight mb-5">
        Your Property,<br>
        <em class="italic text-[#d4aa6a]">Redesigned.</em>
      </h1>
      <p class="text-[clamp(14px,1.6vw,17px)] font-light text-[rgba(240,236,230,.72)] leading-relaxed max-w-lg mb-9">
        Premium outdoor transformation across Southeast Michigan. Hardscape, landscape design, 3D renderings, and lighting systems built for properties that demand more.
      </p>
      <div class="flex flex-wrap gap-3">
        <a href="/contact" class="inline-flex items-center gap-2 text-[11px] font-bold tracking-[.1em] uppercase text-[#0f0f0f] px-7 py-4 rounded-[5px]" style="background:linear-gradient(135deg,#d4aa6a,#c4983e);">
          Request a Free Estimate
          <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
        </a>
        <a href="/our-work" class="inline-flex items-center gap-2 text-[11px] font-medium tracking-[.08em] uppercase text-[rgba(240,236,230,.75)] border border-[rgba(240,236,230,.2)] px-7 py-4 rounded-[5px] hover:text-[#d4aa6a] hover:border-[#d4aa6a] transition-colors">
          View Our Work
        </a>
      </div>
    </div>
  </div>
  <?php endforeach; ?>

  <!-- Prev / Next arrows -->
  <button class="ev-arrow-prev absolute left-6 top-1/2 -translate-y-1/2 z-10 w-11 h-11 rounded-full flex items-center justify-center border border-[rgba(255,255,255,.12)] bg-[rgba(0,0,0,.4)] text-[rgba(255,255,255,.7)] hover:bg-[rgba(201,169,110,.25)] hover:border-[#d4aa6a] hover:text-[#d4aa6a] transition-all">
    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5"/></svg>
  </button>
  <button class="ev-arrow-next absolute right-6 top-1/2 -translate-y-1/2 z-10 w-11 h-11 rounded-full flex items-center justify-center border border-[rgba(255,255,255,.12)] bg-[rgba(0,0,0,.4)] text-[rgba(255,255,255,.7)] hover:bg-[rgba(201,169,110,.25)] hover:border-[#d4aa6a] hover:text-[#d4aa6a] transition-all">
    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/></svg>
  </button>

  <!-- Dots -->
  <div id="ev-dots" class="absolute bottom-8 left-[8vw] z-10 flex gap-2"></div>

  <!-- Progress bar -->
  <div class="absolute bottom-0 left-0 right-0 h-[2px] bg-[rgba(255,255,255,.07)] z-10">
    <div id="ev-progress" class="h-full bg-[#d4aa6a] w-0"></div>
  </div>
</section>


<!-- ════════════════════════════════════════════════
     TRUST BADGE BAR
     ════════════════════════════════════════════════ -->
<div class="bg-[#f7f3ee] border-b border-[#e8e2da] overflow-hidden">

  <!-- Desktop -->
  <div class="hidden md:flex items-center justify-between max-w-[1280px] mx-auto px-10 h-14">
    <?php foreach ( $badges as $i => $badge ) : ?>
      <div class="flex items-center gap-2">
        <svg class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="#d4aa6a" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="<?php echo $badge['path']; ?>"/></svg>
        <span class="text-[11px] font-medium text-[#4a4542] tracking-[.04em]"><?php echo $badge['label']; ?></span>
      </div>
      <?php if ( $i < count( $badges ) - 1 ) : ?>
        <span class="w-px h-5 bg-[#d8d2ca]"></span>
      <?php endif; ?>
    <?php endforeach; ?>
  </div>

  <!-- Mobile ticker -->
  <div class="md:hidden py-3 overflow-hidden">
    <div class="flex gap-10 w-max animate-[ticker_18s_linear_infinite]">
      <?php foreach ( array_merge( $badges, $badges ) as $badge ) : ?>
      <div class="flex items-center gap-2 whitespace-nowrap">
        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="#d4aa6a" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="<?php echo $badge['path']; ?>"/></svg>
        <span class="text-[10px] font-medium text-[#4a4542]"><?php echo $badge['label']; ?></span>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>

<style>@keyframes ticker { from{transform:translateX(0)} to{transform:translateX(-50%)} }</style>


<!-- ════════════════════════════════════════════════
     SECTION 2 — ESTIMATE FORM
     ════════════════════════════════════════════════ -->
<section class="bg-white py-20">
  <div class="max-w-[1280px] mx-auto px-6">
    <div class="grid grid-cols-1 md:grid-cols-2 border border-[#e8e2da] rounded-xl overflow-hidden">

      <!-- Left — image + stats -->
      <div class="relative min-h-[400px] md:min-h-[580px] flex items-center justify-center" style="background:linear-gradient(135deg,#2d4a35,#1a2e20);">
        {{-- Replace div above with: <img src="<?php echo get_template_directory_uri(); ?>/assets/images/crew-work.jpg" class="absolute inset-0 w-full h-full object-cover" alt="Everridge crew"> --}}
        <span class="text-[11px] text-[#b0aaa2] tracking-widest text-center px-10 uppercase">
          Crew working on premium project —<br>clean uniforms, organized material staging
        </span>
        <!-- Right-edge fade -->
        <div class="absolute inset-0 hidden md:block" style="background:linear-gradient(to right,transparent 70%,#1a1a1a 100%);"></div>
        <!-- Stat cards -->
        <div class="absolute bottom-8 left-8 right-8 grid grid-cols-2 gap-3">
          <div class="bg-[rgba(255,255,255,.9)] backdrop-blur-sm border border-[#e8e2da] rounded-lg p-4">
            <div class="font-['Playfair_Display'] text-2xl font-bold text-[#d4aa6a]">17+</div>
            <div class="text-[10px] text-[#7a7670] mt-1">Years of Experience</div>
          </div>
          <div class="bg-[rgba(255,255,255,.9)] backdrop-blur-sm border border-[#e8e2da] rounded-lg p-4">
            <div class="font-['Playfair_Display'] text-2xl font-bold text-[#d4aa6a]">500+</div>
            <div class="text-[10px] text-[#7a7670] mt-1">Projects Completed</div>
          </div>
        </div>
      </div>

      <!-- Right — form -->
      <div class="bg-[#f7f3ee] p-10 md:p-12">
        <span class="block text-[10px] font-semibold tracking-[.22em] uppercase text-[#d4aa6a] mb-3">Get Started</span>
        <h2 class="font-['Playfair_Display'] text-3xl md:text-4xl font-bold text-[#1a1814] leading-tight mb-2">Request a Free Estimate</h2>
        <p class="text-[13px] text-[#7a7670] mb-8 leading-relaxed">Tell us about your project and we'll reach out within 24–48 hours.</p>

        <form id="ev-form" novalidate class="space-y-4">

          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <!-- Name -->
            <div>
              <label class="block text-[10px] font-semibold tracking-[.08em] uppercase text-[#7a7670] mb-1.5">Full Name *</label>
              <input type="text" name="full_name" placeholder="John Smith"
                class="w-full bg-white border border-[#d8d2ca] rounded-md text-[#1a1814] text-sm px-4 py-3 placeholder-[#787870] focus:outline-none focus:border-[#d4aa6a] transition-colors" required>
              <p class="ev-err hidden text-[11px] text-red-400 mt-1">Please enter your name.</p>
            </div>
            <!-- Phone -->
            <div>
              <label class="block text-[10px] font-semibold tracking-[.08em] uppercase text-[#7a7670] mb-1.5">Phone Number *</label>
              <input type="tel" name="phone" placeholder="(248) 555-0100"
                class="w-full bg-white border border-[#d8d2ca] rounded-md text-[#1a1814] text-sm px-4 py-3 placeholder-[#787870] focus:outline-none focus:border-[#d4aa6a] transition-colors" required>
              <p class="ev-err hidden text-[11px] text-red-400 mt-1">Please enter your phone number.</p>
            </div>
          </div>

          <!-- Email -->
          <div>
            <label class="block text-[10px] font-semibold tracking-[.08em] uppercase text-[#7a7670] mb-1.5">Email Address *</label>
            <input type="email" name="email" placeholder="john@email.com"
              class="w-full bg-white border border-[#d8d2ca] rounded-md text-[#1a1814] text-sm px-4 py-3 placeholder-[#787870] focus:outline-none focus:border-[#d4aa6a] transition-colors" required>
            <p class="ev-err hidden text-[11px] text-red-400 mt-1">Please enter a valid email.</p>
          </div>

          <!-- Service -->
          <div>
            <label class="block text-[10px] font-semibold tracking-[.08em] uppercase text-[#7a7670] mb-1.5">Service Needed *</label>
            <select name="service" required
              class="w-full bg-white border border-[#d8d2ca] rounded-md text-[#1a1814] text-sm px-4 py-3 focus:outline-none focus:border-[#d4aa6a] transition-colors">
              <option value="" disabled selected>Select a service...</option>
              <option>Hardscape</option>
              <option>Landscaping</option>
              <option>Garden Design</option>
              <option>Outdoor Lighting</option>
              <option>Full Transformation</option>
              <option>Other</option>
            </select>
            <p class="ev-err hidden text-[11px] text-red-400 mt-1">Please select a service.</p>
          </div>

          <!-- Address -->
          <div>
            <label class="block text-[10px] font-semibold tracking-[.08em] uppercase text-[#7a7670] mb-1.5">Property Address or City *</label>
            <input type="text" name="address" placeholder="Troy, MI or 1234 Oak St, Birmingham MI"
              class="w-full bg-white border border-[#d8d2ca] rounded-md text-[#1a1814] text-sm px-4 py-3 placeholder-[#787870] focus:outline-none focus:border-[#d4aa6a] transition-colors" required>
            <p class="ev-err hidden text-[11px] text-red-400 mt-1">Please enter your address or city.</p>
          </div>

          <!-- Message -->
          <div>
            <label class="block text-[10px] font-semibold tracking-[.08em] uppercase text-[#7a7670] mb-1.5">Tell Us About Your Project</label>
            <textarea name="message" rows="4" placeholder="Describe your vision, timeline, or any specific requirements..."
              class="w-full bg-white border border-[#d8d2ca] rounded-md text-[#1a1814] text-sm px-4 py-3 placeholder-[#787870] focus:outline-none focus:border-[#d4aa6a] transition-colors resize-y min-h-[96px]"></textarea>
          </div>

          <button type="submit"
            class="w-full flex items-center justify-center gap-2 text-[12px] font-bold tracking-[.1em] uppercase text-[#0f0f0f] py-4 rounded-md transition-opacity hover:opacity-85"
            style="background:linear-gradient(135deg,#d4aa6a,#c4983e);">
            Send My Request
            <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
          </button>

          <!-- Success -->
          <div id="ev-form-success" class="hidden text-center py-8">
            <div class="w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-4 border border-[#2d4a35] bg-[rgba(45,74,53,.08)]">
              <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="#d4aa6a" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
            </div>
            <div class="font-['Playfair_Display'] text-xl text-[#1a1814] mb-2">Request Received</div>
            <p class="text-[13px] text-[#6a6560] leading-relaxed">We'll review your request and reach out within<br><strong class="text-[#4a4542]">24 to 48 business hours.</strong></p>
          </div>

        </form>

        <p class="text-[11px] text-[#8a8680] mt-5 text-center leading-relaxed">
          No pressure. Just clarity. · Licensed · Insured · 17+ Years Experience
        </p>
      </div>
    </div>
  </div>
</section>


<!-- ════════════════════════════════════════════════
     SECTION 3 — WHO WE ARE
     ════════════════════════════════════════════════ -->
<section class="bg-[#f7f3ee] border-t border-b border-[#e8e2da] py-24">
  <div class="max-w-[1280px] mx-auto px-10">
    <div class="grid grid-cols-1 md:grid-cols-[1.5fr_1fr] gap-16 md:gap-24 items-center">

      <!-- Text -->
      <div class="ev-reveal-left">
        <span class="block text-[10px] font-semibold tracking-[.22em] uppercase text-[#d4aa6a] mb-4">Our Story</span>
        <h2 class="font-['Playfair_Display'] text-[clamp(28px,3.5vw,46px)] font-bold text-[#1a1814] leading-[1.12] mb-7">
          Designed Before We Build.<br>
          <em class="italic text-[#d4aa6a]">Executed Beyond Expectation.</em>
        </h2>
        <div class="space-y-4">
          <p class="text-[15px] font-light text-[#4a4542] leading-[1.75]">Everridge Landscape & Hardscape is a premium outdoor transformation company based in Clinton Township, Michigan. For over 17 years, our team has been designing and building outdoor spaces that elevate the presence, value, and curb appeal of homes across the Oakland-Macomb corridor.</p>
          <p class="text-[15px] font-light text-[#6a6560] leading-[1.75]">We are not a lawn care company. We are a design and build firm specializing in four core disciplines: custom hardscape construction, landscape design and installation, photorealistic 3D renderings, and professional outdoor lighting systems.</p>
          <p class="text-[15px] font-light text-[#6a6560] leading-[1.75]">Every project begins with a personalized 3D rendering that shows you exactly how your property will look when we are finished. No guesswork. No anxiety about the outcome. Just certainty.</p>
        </div>

        <!-- Stats -->
        <div class="grid grid-cols-3 gap-5 mt-11 pt-9 border-t border-[#e0dad2]">
          <?php foreach ( [ ['17+','Years in Business'], ['500+','Projects Delivered'], ['5★','Google Rated'] ] as $stat ) : ?>
          <div>
            <div class="font-['Playfair_Display'] text-3xl font-bold text-[#d4aa6a] leading-none"><?php echo $stat[0]; ?></div>
            <div class="text-[10px] text-[#8a8680] mt-1.5 tracking-[.06em] uppercase"><?php echo $stat[1]; ?></div>
          </div>
          <?php endforeach; ?>
        </div>

        <a href="/about" class="inline-flex items-center gap-2 mt-9 text-[11px] font-medium tracking-[.08em] uppercase text-[#1a1814] border border-[#c8c0b4] px-7 py-3.5 rounded-md hover:text-[#d4aa6a] hover:border-[#d4aa6a] transition-colors">
          Learn Our Story
          <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
        </a>
      </div>

      <!-- Image stack -->
      <div class="ev-reveal-right flex flex-col gap-3">
        <div class="rounded-xl border border-[#e8e2da] overflow-hidden aspect-video flex items-center justify-center bg-[#e8ede6] text-[11px] text-[#b0aaa2] text-center px-6">
          {{-- Replace with: <img src="<?php echo get_template_directory_uri(); ?>/assets/images/rendering-preview.jpg" class="w-full h-full object-cover" alt="3D Rendering"> --}}
          3D Rendering — project visualization
        </div>
        <div class="rounded-xl border border-[#e8e2da] overflow-hidden flex items-center justify-center bg-[#e8e4de] text-[11px] text-[#b0aaa2] text-center px-6 py-16">
          {{-- Replace with: <img src="<?php echo get_template_directory_uri(); ?>/assets/images/completed-match.jpg" class="w-full h-full object-cover" alt="Completed project"> --}}
          Completed project — same angle as rendering
        </div>
      </div>

    </div>
  </div>
</section>


<!-- ════════════════════════════════════════════════
     SECTION 4 — SERVICES
     ════════════════════════════════════════════════ -->
<section class="bg-white py-24">
  <div class="max-w-[1280px] mx-auto px-10">

    <div class="text-center mb-14 ev-reveal">
      <span class="block text-[10px] font-semibold tracking-[.22em] uppercase text-[#d4aa6a] mb-3">What We Do</span>
      <h2 class="font-['Playfair_Display'] text-[clamp(28px,3.5vw,44px)] font-bold text-[#1a1814] leading-[1.15]">
        Everything Your Property Needs.<br>
        <span class="text-[#d4aa6a]">One Team You Can Trust.</span>
      </h2>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
      <?php foreach ( $services as $i => $svc ) : ?>
      <div class="ev-reveal group bg-[#f7f3ee] border border-[#e8e2da] rounded-xl overflow-hidden cursor-pointer transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_20px_60px_rgba(0,0,0,.5)]"
           style="transition-delay:<?php echo $i * 120; ?>ms;">
        <!-- Image -->
        <div class="overflow-hidden">
          <div class="aspect-video bg-[#ddd8d0] flex items-center justify-center text-[10px] text-[#b0aaa2] text-center px-4 transition-transform duration-500 group-hover:scale-105">
            {{-- Replace with: <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service-<?php echo $i + 1; ?>.jpg" class="w-full h-full object-cover" alt="<?php echo $svc['title']; ?>"> --}}
            <?php echo $svc['ph']; ?>
          </div>
        </div>
        <!-- Body -->
        <div class="p-5 pb-6">
          <h3 class="font-['Playfair_Display'] text-[17px] font-bold text-[#1a1814] mb-2.5 leading-snug"><?php echo $svc['title']; ?></h3>
          <p class="text-[13px] font-light text-[#6a6560] leading-[1.7] mb-4"><?php echo $svc['copy']; ?></p>
          <a href="<?php echo $svc['href']; ?>" class="inline-flex items-center gap-1.5 text-[10px] font-semibold tracking-[.08em] uppercase text-[#d4aa6a] hover:opacity-70 transition-opacity">
            Learn More
            <svg class="w-2.5 h-2.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
          </a>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ════════════════════════════════════════════════
     SECTION 5 — WHY EVERRIDGE
     ════════════════════════════════════════════════ -->
<section class="bg-[#f7f3ee] border-t border-b border-[#e8e2da] py-24">
  <div class="max-w-[1280px] mx-auto px-10">

    <div class="text-center mb-14 ev-reveal">
      <span class="block text-[10px] font-semibold tracking-[.22em] uppercase text-[#d4aa6a] mb-3">Why Choose Us</span>
      <h2 class="font-['Playfair_Display'] text-[clamp(26px,3.5vw,42px)] font-bold text-[#1a1814] leading-[1.18]">
        In a Market Full of Contractors,<br>
        <span class="text-[#d4aa6a]">We Deliver Certainty.</span>
      </h2>
    </div>

    <div id="ev-pillars" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
      <?php foreach ( $pillars as $i => $p ) : ?>
      <div class="ev-pillar ev-reveal border border-[#e0dad2] rounded-xl p-8 bg-white transition-all duration-500 <?php echo $i === 0 ? 'ev-pillar-lit' : ''; ?>"
           style="transition-delay:<?php echo $i * 100; ?>ms;" data-pillar="<?php echo $i; ?>">
        <div class="w-10 h-10 rounded-lg bg-white border border-[#d8d2ca] flex items-center justify-center mb-5">
          <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="#d4aa6a" stroke-width="1.6"><path stroke-linecap="round" stroke-linejoin="round" d="<?php echo $p['path']; ?>"/></svg>
        </div>
        <h3 class="font-['Playfair_Display'] text-[17px] font-bold text-[#1a1814] mb-3"><?php echo $p['title']; ?></h3>
        <p class="text-[13px] font-light text-[#6a6560] leading-[1.75]"><?php echo $p['copy']; ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<style>
.ev-pillar-lit {
  border-color: rgba(180,140,50,.6) !important;
  box-shadow: 0 0 40px rgba(201,169,110,.07);
  background: #fdf8ee !important;
}
</style>


<!-- ════════════════════════════════════════════════
     SECTION 6 — PROCESS
     ════════════════════════════════════════════════ -->
<section class="bg-white py-24">
  <div class="max-w-[1100px] mx-auto px-10">

    <div class="text-center mb-20 ev-reveal">
      <span class="block text-[10px] font-semibold tracking-[.22em] uppercase text-[#d4aa6a] mb-3">Our Process</span>
      <h2 class="font-['Playfair_Display'] text-[clamp(26px,3.5vw,42px)] font-bold text-[#1a1814] leading-[1.18]">
        A Clear Process.<br>
        <span class="text-[#d4aa6a]">No Guesswork. No Surprises.</span>
      </h2>
    </div>

    <!-- Timeline -->
    <div class="relative">
      <!-- Center line (desktop) -->
      <div class="hidden md:block absolute left-1/2 top-0 bottom-0 w-px bg-[#2a2a2a] -translate-x-1/2"></div>

      <?php foreach ( $steps as $i => $step ) : ?>
      <div class="ev-step relative grid grid-cols-1 md:grid-cols-[1fr_52px_1fr] items-center gap-0 <?php echo $i < 3 ? 'mb-16' : ''; ?>"
           data-step="<?php echo $i; ?>">

        <?php if ( $step['side'] === 'left' ) : ?>
          <!-- Content LEFT -->
          <div class="md:pr-14 md:text-right mb-6 md:mb-0">
            <div class="text-[10px] font-semibold tracking-[.18em] uppercase text-[#d4aa6a] mb-2">Step <?php echo $step['num']; ?></div>
            <h3 class="font-['Playfair_Display'] text-xl font-bold text-[#1a1814] mb-3"><?php echo $step['title']; ?></h3>
            <p class="text-[13px] font-light text-[#6a6560] leading-[1.75]"><?php echo $step['copy']; ?></p>
          </div>
          <!-- Dot -->
          <div class="ev-step-dot hidden md:flex w-[52px] h-[52px] flex-shrink-0 rounded-full items-center justify-center bg-[#f7f3ee] border-2 border-[#e8e2da] z-10 transition-all duration-500 mx-auto">
            <span class="font-['Playfair_Display'] text-[13px] font-bold text-[#d4aa6a]"><?php echo $step['num']; ?></span>
          </div>
          <!-- Image RIGHT -->
          <div class="md:pl-14">
            <div class="rounded-xl border border-[#e8e2da] bg-white h-44 flex items-center justify-center text-[10px] text-[#b0aaa2] text-center px-6">
              {{-- Replace: <img src="<?php echo get_template_directory_uri(); ?>/assets/images/step-<?php echo $i+1; ?>.jpg" class="w-full h-full object-cover rounded-xl"> --}}
              <?php echo $step['ph']; ?>
            </div>
          </div>

        <?php else : ?>
          <!-- Image LEFT -->
          <div class="md:pr-14 mb-6 md:mb-0">
            <div class="rounded-xl border border-[#e8e2da] bg-white h-44 flex items-center justify-center text-[10px] text-[#b0aaa2] text-center px-6">
              {{-- Replace: <img src="<?php echo get_template_directory_uri(); ?>/assets/images/step-<?php echo $i+1; ?>.jpg" class="w-full h-full object-cover rounded-xl"> --}}
              <?php echo $step['ph']; ?>
            </div>
          </div>
          <!-- Dot -->
          <div class="ev-step-dot hidden md:flex w-[52px] h-[52px] flex-shrink-0 rounded-full items-center justify-center bg-[#f7f3ee] border-2 border-[#e8e2da] z-10 transition-all duration-500 mx-auto">
            <span class="font-['Playfair_Display'] text-[13px] font-bold text-[#d4aa6a]"><?php echo $step['num']; ?></span>
          </div>
          <!-- Content RIGHT -->
          <div class="md:pl-14">
            <div class="text-[10px] font-semibold tracking-[.18em] uppercase text-[#d4aa6a] mb-2">Step <?php echo $step['num']; ?></div>
            <h3 class="font-['Playfair_Display'] text-xl font-bold text-[#1a1814] mb-3"><?php echo $step['title']; ?></h3>
            <p class="text-[13px] font-light text-[#6a6560] leading-[1.75]"><?php echo $step['copy']; ?></p>
          </div>
        <?php endif; ?>

      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ════════════════════════════════════════════════
     SECTION 7 — BEFORE & AFTER
     ════════════════════════════════════════════════ -->
<section class="bg-[#f7f3ee] border-t border-b border-[#e8e2da] py-24">
  <div class="max-w-[1280px] mx-auto px-10">

    <div class="text-center mb-14 ev-reveal">
      <span class="block text-[10px] font-semibold tracking-[.22em] uppercase text-[#d4aa6a] mb-3">Portfolio</span>
      <h2 class="font-['Playfair_Display'] text-[clamp(26px,3.5vw,42px)] font-bold text-[#1a1814]">
        Real Projects. <span class="text-[#d4aa6a]">Real Results.</span>
      </h2>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
      <?php foreach ( $ba_projects as $i => $proj ) : ?>
      <div class="ev-reveal" style="transition-delay:<?php echo ( $i % 2 ) * 120; ?>ms;">
        <!-- B&A drag wrapper -->
        <div class="ev-ba relative overflow-hidden rounded-xl border border-[#e8e2da] cursor-col-resize select-none" data-ba="<?php echo $i; ?>">
          <!-- Before -->
          <div class="aspect-video bg-[#ddd8d0] flex items-center justify-center text-[10px] text-[#b0aaa2] text-center px-6">
            {{-- Before image: background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/before-<?php echo $i+1; ?>.jpg') --}}
            BEFORE — <?php echo $proj['label']; ?>
          </div>
          <!-- After (clipped) -->
          <div class="ev-ba-after absolute inset-0 bg-[#c8d4b8] flex items-center justify-center text-[10px] text-[#b0aaa2] text-center px-6"
               style="clip-path:inset(0 50% 0 0);background-size:cover;background-position:center;">
            {{-- After image: background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/after-<?php echo $i+1; ?>.jpg') --}}
            AFTER — <?php echo $proj['label']; ?>
          </div>
          <!-- Handle -->
          <div class="ev-ba-handle absolute top-0 bottom-0 w-0.5 bg-[#d4aa6a] left-1/2 -translate-x-1/2 flex items-center justify-center pointer-events-none">
            <div class="w-9 h-9 rounded-full bg-[#d4aa6a] flex items-center justify-center shadow-[0_2px_12px_rgba(201,169,110,.4)]">
              <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="#0f0f0f" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15M15.75 9L12 5.25 8.25 9"/></svg>
            </div>
          </div>
          <!-- Labels -->
          <span class="absolute top-3 left-4 text-[9px] font-bold tracking-[.12em] uppercase text-[rgba(255,255,255,.4)]">Before</span>
          <span class="absolute top-3 right-4 text-[9px] font-bold tracking-[.12em] uppercase text-[rgba(255,255,255,.4)]">After</span>
        </div>
        <div class="flex items-center justify-between pt-3 px-1">
          <span class="font-['Playfair_Display'] text-[15px] font-semibold text-[#1a1814]"><?php echo $proj['label']; ?></span>
          <span class="text-[11px] text-[#8a8680]"><?php echo $proj['city']; ?></span>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

    <div class="text-center mt-12">
      <a href="/our-work" class="inline-flex items-center gap-2 text-[11px] font-medium tracking-[.08em] uppercase text-[rgba(240,236,230,.72)] border border-[rgba(240,236,230,.15)] px-8 py-3.5 rounded-md hover:text-[#d4aa6a] hover:border-[#d4aa6a] transition-colors">
        View Full Portfolio
      </a>
    </div>
  </div>
</section>


<!-- ════════════════════════════════════════════════
     SECTION 8 — TESTIMONIALS
     ════════════════════════════════════════════════ -->
<section class="bg-white py-24">
  <div class="max-w-[1280px] mx-auto px-10">

    <div class="text-center mb-12 ev-reveal">
      <span class="block text-[10px] font-semibold tracking-[.22em] uppercase text-[#d4aa6a] mb-3">Client Reviews</span>
      <h2 class="font-['Playfair_Display'] text-[clamp(26px,3.5vw,42px)] font-bold text-[#1a1814] mb-4">What Our Clients Say</h2>
      <div class="flex items-center justify-center gap-2">
        <div class="flex gap-1">
          <?php for ( $s = 0; $s < 5; $s++ ) : ?>
          <svg class="w-4 h-4" viewBox="0 0 24 24" fill="#d4aa6a"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
          <?php endfor; ?>
        </div>
        <span class="text-[13px] text-[#7a7670]">5.0 · 80+ Google Reviews</span>
      </div>
    </div>

    <div class="overflow-hidden" id="ev-reviews-vp">
      <div id="ev-reviews-track" class="flex gap-5 transition-transform duration-500 ease-[cubic-bezier(.25,.46,.45,.94)] will-change-transform">
        <?php foreach ( $reviews as $r ) : ?>
        <div class="min-w-[calc(33.333%-14px)] bg-white border border-[#e8e2da] rounded-xl p-8 flex-shrink-0">
          <div class="flex gap-1 mb-4">
            <?php for ( $s = 0; $s < 5; $s++ ) : ?>
            <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="#d4aa6a"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <?php endfor; ?>
          </div>
          <p class="font-['Playfair_Display'] italic text-[15px] text-[#4a4542] leading-[1.7] mb-6">"<?php echo $r['text']; ?>"</p>
          <div class="flex items-center justify-between pt-4 border-t border-[#e0dad2]">
            <div>
              <div class="text-[13px] font-semibold text-[#1a1814]"><?php echo $r['name']; ?></div>
              <div class="text-[11px] text-[#8a8680] mt-0.5"><?php echo $r['project']; ?></div>
            </div>
            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="#9a9690"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/></svg>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
    <div id="ev-review-dots" class="flex justify-center gap-2 mt-8"></div>

    <div class="text-center mt-7">
      <a href="https://g.page/r/everridge" target="_blank" rel="noopener" class="text-[11px] font-medium text-[#8a8680] border-b border-[#e8e2da] pb-px hover:text-[#7a7670] transition-colors">
        Read all reviews on Google ↗
      </a>
    </div>
  </div>
</section>


<!-- ════════════════════════════════════════════════
     SECTION 9 — SERVICE AREAS
     ════════════════════════════════════════════════ -->
<section class="bg-[#f7f3ee] border-t border-b border-[#e8e2da] py-24">
  <div class="max-w-[1280px] mx-auto px-10">

    <div class="text-center mb-14 ev-reveal">
      <span class="block text-[10px] font-semibold tracking-[.22em] uppercase text-[#d4aa6a] mb-3">Where We Work</span>
      <h2 class="font-['Playfair_Display'] text-[clamp(24px,3vw,40px)] font-bold text-[#1a1814]">
        Serving Southeast Michigan's<br>
        <span class="text-[#d4aa6a]">Most Valued Communities</span>
      </h2>
    </div>

    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
      <?php foreach ( $cities as $i => $city ) : ?>
      <a href="<?php echo $city['href']; ?>"
         class="ev-reveal group relative overflow-hidden rounded-lg aspect-[4/3] block"
         style="transition-delay:<?php echo ( $i % 4 ) * 80; ?>ms;"
         aria-label="<?php echo $city['name']; ?>">
        <!-- BG image placeholder -->
        <div class="absolute inset-0 bg-[#c8c0b0] transition-transform duration-500 group-hover:scale-105">
          {{-- Replace with: <img src="<?php echo get_template_directory_uri(); ?>/assets/images/city-<?php echo $i+1; ?>.jpg" class="w-full h-full object-cover"> --}}
        </div>
        <!-- Overlay -->
        <div class="absolute inset-0 bg-[rgba(0,0,0,.55)] group-hover:bg-[rgba(0,0,0,.42)] transition-colors duration-300 flex flex-col items-start justify-end p-5">
          <span class="text-[9px] font-semibold tracking-[.18em] uppercase text-[#d4aa6a] mb-1">Michigan</span>
          <span class="font-['Playfair_Display'] text-base font-bold text-[#1a1814]"><?php echo $city['name']; ?></span>
          <span class="text-[10px] text-[rgba(240,236,230,.35)] mt-1">Premium hardscape & landscape</span>
        </div>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ════════════════════════════════════════════════
     SECTION 10 — FINAL CTA
     ════════════════════════════════════════════════ -->
<section class="relative overflow-hidden py-28 md:py-36">
  <!-- BG image placeholder -->
  <div class="absolute inset-0 bg-[#080808]" style="background-attachment:fixed;background-size:cover;background-position:center;">
    {{-- Replace: background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/cta-hero.jpg') --}}
    <div class="absolute inset-0 flex items-center justify-center text-[11px] text-[#2a2a2a] tracking-widest uppercase">Most impressive completed project — golden hour hero shot</div>
  </div>
  <div class="absolute inset-0 bg-[rgba(0,0,0,.68)]"></div>

  <div class="relative z-10 max-w-[760px] mx-auto px-10 text-center">
    <span class="block text-[10px] font-semibold tracking-[.22em] uppercase text-[#d4aa6a] mb-4">Get Started Today</span>
    <h2 class="font-['Playfair_Display'] text-[clamp(30px,5vw,58px)] font-bold text-[#1a1814] leading-[1.1] mb-5">
      Ready to See Your Property<br>
      <em class="italic text-[#d4aa6a]">Redesigned?</em>
    </h2>
    <p class="text-[15px] font-light text-[rgba(240,236,230,.62)] leading-relaxed mb-10 max-w-lg mx-auto">
      Whether you're planning a paver patio, a complete landscape transformation, or want to see what outdoor lighting can do for your home — request a free estimate and see your project in 3D before we break ground.
    </p>

    <a href="tel:+17705550192"
       class="block font-['Playfair_Display'] font-bold text-[#d4aa6a] text-[clamp(28px,4vw,44px)] tracking-tight mb-9 hover:opacity-75 transition-opacity">
      (770) 555-0192
    </a>

    <div class="flex flex-wrap gap-3 justify-center">
      <a href="/contact"
         class="inline-flex items-center gap-2 text-[12px] font-bold tracking-[.1em] uppercase text-[#0f0f0f] px-9 py-4 rounded-md hover:opacity-85 transition-opacity"
         style="background:linear-gradient(135deg,#d4aa6a,#c4983e);">
        Request a Free Estimate
        <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
      </a>
      <a href="/our-work"
         class="inline-flex items-center gap-2 text-[12px] font-medium tracking-[.08em] uppercase text-[rgba(240,236,230,.82)] border border-[rgba(240,236,230,.18)] px-8 py-4 rounded-md hover:text-[#d4aa6a] hover:border-[#d4aa6a] transition-colors">
        View Our Work
      </a>
    </div>

    <div class="flex items-center justify-center gap-6 flex-wrap mt-10">
      <?php foreach ( [ 'Licensed & Insured', '17+ Years Experience', '5-Star Rated', 'SE Michigan' ] as $b ) : ?>
      <span class="text-[10px] text-[rgba(240,236,230,.22)] tracking-[.06em]"><?php echo $b; ?></span>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ════════════════════════════════════════════════
     JAVASCRIPT
     ════════════════════════════════════════════════ -->
<script>
(function () {

  /* ── HERO SLIDER ─────────────────────── */
  const hero     = document.getElementById('ev-hero');
  const slides   = hero.querySelectorAll('.ev-slide');
  const dotsWrap = document.getElementById('ev-dots');
  const progress = document.getElementById('ev-progress');
  const INTERVAL = 5000;
  let cur = 0, paused = false, timer;

  // Build dots
  slides.forEach((_, i) => {
    const d = document.createElement('button');
    d.className = 'h-[3px] rounded-[2px] border-none p-0 cursor-pointer transition-all duration-300 ' + (i === 0 ? 'w-11 bg-[#d4aa6a]' : 'w-7 bg-[rgba(255,255,255,.25)]');
    d.setAttribute('aria-label', 'Slide ' + (i + 1));
    d.addEventListener('click', () => { go(i); reset(); });
    dotsWrap.appendChild(d);
  });

  function go(n) {
    slides[cur].classList.replace('opacity-100', 'opacity-0');
    dotsWrap.children[cur].style.cssText = 'width:28px;background:rgba(255,255,255,.25)';
    cur = (n + slides.length) % slides.length;
    slides[cur].classList.replace('opacity-0', 'opacity-100');
    dotsWrap.children[cur].style.cssText = 'width:44px;background:#d4aa6a';
    startProgress();
  }

  function startProgress() {
    if (!progress) return;
    progress.style.transition = 'none'; progress.style.width = '0';
    requestAnimationFrame(() => requestAnimationFrame(() => {
      progress.style.transition = 'width ' + INTERVAL + 'ms linear';
      progress.style.width = '100%';
    }));
  }

  function reset() { clearInterval(timer); timer = setInterval(() => { if (!paused) go(cur + 1); }, INTERVAL); }

  hero.querySelector('.ev-arrow-prev').addEventListener('click', () => { go(cur - 1); reset(); });
  hero.querySelector('.ev-arrow-next').addEventListener('click', () => { go(cur + 1); reset(); });
  hero.addEventListener('mouseenter', () => paused = true);
  hero.addEventListener('mouseleave', () => paused = false);

  // Touch swipe
  let tx = 0;
  hero.addEventListener('touchstart', e => tx = e.touches[0].clientX, { passive: true });
  hero.addEventListener('touchend',   e => { if (Math.abs(e.changedTouches[0].clientX - tx) > 44) { go(cur + (e.changedTouches[0].clientX < tx ? 1 : -1)); reset(); } });

  startProgress();
  reset();


  /* ── SCROLL REVEAL ───────────────────── */
  const ro = new IntersectionObserver(entries => {
    entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add('opacity-100', 'translate-y-0', 'translate-x-0'); e.target.classList.remove('opacity-0', 'translate-y-7', '-translate-x-8', 'translate-x-8'); ro.unobserve(e.target); } });
  }, { threshold: 0.12 });

  document.querySelectorAll('.ev-reveal').forEach(el => {
    el.classList.add('opacity-0', 'translate-y-7', 'transition-all', 'duration-700');
    ro.observe(el);
  });
  document.querySelectorAll('.ev-reveal-left').forEach(el => {
    el.classList.add('opacity-0', '-translate-x-8', 'transition-all', 'duration-700');
    ro.observe(el);
  });
  document.querySelectorAll('.ev-reveal-right').forEach(el => {
    el.classList.add('opacity-0', 'translate-x-8', 'transition-all', 'duration-700');
    ro.observe(el);
  });


  /* ── PROCESS STEP LIGHTS ─────────────── */
  const stepEls  = document.querySelectorAll('.ev-step');
  const stepDots = document.querySelectorAll('.ev-step-dot');
  const so = new IntersectionObserver(entries => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        const i = e.target.dataset.step;
        if (stepDots[i]) { stepDots[i].style.borderColor = '#d4aa6a'; stepDots[i].style.background = 'rgba(201,169,110,.12)'; }
        so.unobserve(e.target);
      }
    });
  }, { threshold: 0.4 });
  stepEls.forEach(s => so.observe(s));


  /* ── PILLAR CYCLING ──────────────────── */
  const pillars = document.querySelectorAll('.ev-pillar');
  let ap = 0;
  if (pillars.length) setInterval(() => {
    pillars[ap].classList.remove('ev-pillar-lit');
    ap = (ap + 1) % pillars.length;
    pillars[ap].classList.add('ev-pillar-lit');
  }, 4000);


  /* ── BEFORE / AFTER DRAG ─────────────── */
  document.querySelectorAll('.ev-ba').forEach(wrap => {
    const after  = wrap.querySelector('.ev-ba-after');
    const handle = wrap.querySelector('.ev-ba-handle');
    let drag = false;

    const setPos = x => {
      const r   = wrap.getBoundingClientRect();
      const pct = Math.min(Math.max((x - r.left) / r.width, 0), 1) * 100;
      after.style.clipPath = 'inset(0 ' + (100 - pct) + '% 0 0)';
      handle.style.left    = pct + '%';
    };

    wrap.addEventListener('mousedown',  e => { drag = true; setPos(e.clientX); });
    wrap.addEventListener('touchstart', e => { drag = true; setPos(e.touches[0].clientX); }, { passive: true });
    window.addEventListener('mousemove',  e => { if (drag) setPos(e.clientX); });
    window.addEventListener('touchmove',  e => { if (drag) setPos(e.touches[0].clientX); }, { passive: true });
    window.addEventListener('mouseup',   () => drag = false);
    window.addEventListener('touchend',  () => drag = false);
  });


  /* ── TESTIMONIAL CAROUSEL ────────────── */
  const rvp   = document.getElementById('ev-reviews-vp');
  const track = document.getElementById('ev-reviews-track');
  const rdots = document.getElementById('ev-review-dots');
  if (track && rdots) {
    const cards   = track.querySelectorAll(':scope > div');
    const vis     = window.innerWidth < 768 ? 1 : 3;
    const pages   = Math.ceil(cards.length / vis);
    let rp = 0, rpaused = false, rtimer;

    for (let i = 0; i < pages; i++) {
      const d = document.createElement('button');
      d.style.cssText = 'height:3px;border-radius:2px;border:none;padding:0;cursor:pointer;transition:all .3s;background:rgba(0,0,0,.15);width:' + (i === 0 ? '42px' : '28px');
      d.addEventListener('click', () => rGo(i));
      rdots.appendChild(d);
    }

    function rGo(n) {
      rp = (n + pages) % pages;
      const w = (cards[0].offsetWidth + 20) * vis;
      track.style.transform = 'translateX(-' + (rp * w) + 'px)';
      rdots.querySelectorAll('button').forEach((d, i) => {
        d.style.background = i === rp ? '#d4aa6a' : 'rgba(0,0,0,.15)';
        d.style.width      = i === rp ? '42px'    : '28px';
      });
    }

    function rReset() { clearInterval(rtimer); rtimer = setInterval(() => { if (!rpaused) rGo(rp + 1); }, 6000); }

    rvp.addEventListener('mouseenter', () => rpaused = true);
    rvp.addEventListener('mouseleave', () => rpaused = false);
    let rtx = 0;
    rvp.addEventListener('touchstart', e => rtx = e.touches[0].clientX, { passive: true });
    rvp.addEventListener('touchend',   e => { if (Math.abs(e.changedTouches[0].clientX - rtx) > 44) { rGo(rp + (e.changedTouches[0].clientX < rtx ? 1 : -1)); rReset(); } });

    rReset();
  }


  /* ── FORM VALIDATION ─────────────────── */
  const form = document.getElementById('ev-form');
  if (form) {
    const rules = {
      full_name: { test: v => v.length > 1,                         msg: 'Please enter your name.' },
      phone:     { test: v => v.replace(/\D/g,'').length >= 7,      msg: 'Please enter your phone number.' },
      email:     { test: v => /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(v), msg: 'Please enter a valid email.' },
      service:   { test: v => v !== '',                              msg: 'Please select a service.' },
      address:   { test: v => v.length > 2,                         msg: 'Please enter your address or city.' },
    };

    form.addEventListener('submit', e => {
      e.preventDefault();
      let ok = true;
      Object.entries(rules).forEach(([name, rule]) => {
        const el  = form.querySelector('[name="' + name + '"]');
        const err = el?.nextElementSibling;
        if (!el) return;
        if (!rule.test(el.value.trim())) {
          el.classList.add('border-red-500'); el.classList.remove('border-[#e8e2da]');
          if (err) { err.textContent = rule.msg; err.classList.remove('hidden'); }
          ok = false;
        } else {
          el.classList.remove('border-red-500'); el.classList.add('border-[#e8e2da]');
          if (err) err.classList.add('hidden');
        }
      });

      if (ok) {
        form.querySelector('button[type="submit"]').style.display = 'none';
        document.getElementById('ev-form-success').classList.remove('hidden');
        // TODO: submit via fetch to admin-ajax.php or CF7 / WPForms endpoint
      }
    });

    form.querySelectorAll('input, select, textarea').forEach(el => {
      el.addEventListener('input', () => {
        el.classList.remove('border-red-500');
        const err = el.nextElementSibling;
        if (err?.classList.contains('ev-err')) err.classList.add('hidden');
      });
    });
  }

})();
</script>

<?php get_footer(); ?>