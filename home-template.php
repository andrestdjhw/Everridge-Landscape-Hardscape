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
    'img'     => '/wp-content/uploads/2026/05/PremiunHardscapeHero-scaled.jpg',
    'ph'      => 'Paver patio at golden hour — outdoor furniture, polymeric sand finish, wide angle',
  ],
  [
    'eyebrow' => 'Landscape Transformation',
    'img'     => '/wp-content/uploads/2026/05/LandscapeTransformationHero-scaled.jpg',
    'ph'      => 'Full front yard before & after — mulch, plantings, trimmed hedges, new walkway',
  ],
  [
    'eyebrow' => 'Outdoor Lighting',
    'img'     => '/wp-content/uploads/2026/05/OutdoorLightningHero-scaled.jpg',
    'ph'      => 'Nighttime property — accent lights on trees, pathway illumination, architectural uplighting',
  ],
  [
    'eyebrow' => '3D Design Proof',
    'img'     => '/wp-content/uploads/2026/05/3DRenderingHero-scaled.jpg',
    'ph'      => '3D rendering (left) vs completed project (right) — same angle',
  ],
  [
    'eyebrow' => 'Retaining Walls',
    'img'     => '/wp-content/uploads/2026/05/RetainingWalls-scaled.jpg',
    'ph'      => 'Hardscape retaining wall integrated with garden design — multi-element project',
  ],
];

$who_imgs = [
  '/wp-content/uploads/2026/05/rendering-preview.png',
  '/wp-content/uploads/2026/05/completed-match.png',
];

$services = [
  [
    'href'  => '/services/hardscape-patios',
    'title' => 'Brick & Hardscapes',
    'img'   => '/wp-content/uploads/2026/05/BrickandHardscapesService-scaled.jpg',
    'ph'    => 'Close-up of premium paver patio — clean joint lines, polymeric sand, border pattern',
    'copy'  => 'Paver patios, walkways, driveways, outdoor fireplaces, and retaining walls crafted with premium materials and precision. Built to last. Designed to impress.',
  ],
  [
    'href'  => '/services/landscape-design',
    'title' => 'Landscape Design & Installation',
    'img'   => '/wp-content/uploads/2026/04/terrazzo-product-display-podium-in-the-middle-of-t-2026-03-24-07-21-27-utc-scaled.jpg',
    'ph'    => 'Lush front yard — fresh mulch, seasonal plantings, trimmed hedges, clean edge line',
    'copy'  => 'Custom landscape design, seasonal planting, sod installation, and year-round care that keeps your property looking its absolute best. From first impression to lasting impact.',
  ],
  [
    'href'  => '/services/3d-renderings',
    'title' => 'Garden Design & 3D Renderings',
    'img'   => '/wp-content/uploads/2026/04/Landscaping3DModeling-.png',
    'ph'    => 'Split: 3D rendering on left, completed project on right — same angle',
    'copy'  => 'See your outdoor transformation before it happens. We create photorealistic 3D renderings so you can approve every detail before we break ground.',
  ],
  [
    'href'  => '/services/outdoor-lighting',
    'title' => 'Outdoor Lighting Systems',
    'img'   => '/wp-content/uploads/2026/04/OutdoorLightingSystemHero-scaled.jpg',
    'ph'    => 'Nighttime property — accent lights on trees, pathway illumination, architectural uplighting',
    'copy'  => 'Professional landscape lighting design and installation. Accent, pathway, and architectural uplighting that transforms your property after dark.',
  ],
];

$steps = [
  [
    'num'  => '01',
    'title'=> 'Free Consultation',
    'side' => 'left',
    'img'  => '/wp-content/uploads/2026/05/Process1-scaled.jpg',
    'ph'   => 'Founder meeting with homeowners in their backyard — clipboard in hand, casual but professional',
    'copy' => 'We visit your property in person. We walk the space with you, listen to your vision, and assess the scope. No obligation, no pressure, no cost. Just a conversation about what is possible for your property and your budget.',
  ],
  [
    'num'  => '02',
    'title'=> '3D Design & Proposal',
    'side' => 'right',
    'img'  => '/wp-content/uploads/2026/05/Process2-scaled.jpg',
    'ph'   => '3D rendering displayed on laptop or monitor — software interface or clean export',
    'copy' => 'Within days you receive a photorealistic 3D rendering showing exactly how your property will look when finished — the materials, layout, colors, and proportions from multiple angles. Alongside it: a detailed proposal with clear scope, timeline, and pricing. No hidden costs.',
  ],
  [
    'num'  => '03',
    'title'=> 'Expert Execution',
    'side' => 'left',
    'img'  => '/wp-content/uploads/2026/05/crew-work-scaled.jpg',
    'ph'   => 'Crew installing pavers — clean organized site, materials neatly staged',
    'copy' => 'Our crew mobilizes on the scheduled date with all materials staged and ready. You receive progress updates and photos at the end of each work day. Job sites are clean, organized, and professional. We build exactly what you approved.',
  ],
  [
    'num'  => '04',
    'title'=> 'Final Walkthrough',
    'side' => 'right',
    'img'  => '/wp-content/uploads/2026/05/3DRenderingComparison-e1778351002474.png',
    'ph'   => 'Completed project hero shot at golden hour — clean, finished, no equipment visible',
    'copy' => 'When construction is complete, we walk the entire project with you. The project is not finished until you tell us it is perfect. After your approval, we clean the entire site and leave your property better than you imagined.',
  ],
];

$ba_projects = [
  [
    'label'      => 'Paver Patio',
    'city'       => 'Birmingham, MI',
    'img_before' => '/wp-content/uploads/2026/05/BeforeAfter-1-e1778352789260.png',
    'img_after'  => '/wp-content/uploads/2026/05/BeforeAfter-e1778352619870.png',
  ],
  [
    'label'      => 'Front Yard Transformation',
    'city'       => 'Troy, MI',
    'img_before' => '/wp-content/uploads/2026/05/BeforeAfter-1-e1778352789260.png',
    'img_after'  => '/wp-content/uploads/2026/05/BeforeAfter-e1778352619870.png',
  ],
  [
    'label'      => 'Landscape Lighting',
    'city'       => 'Rochester Hills, MI',
    'img_before' => '/wp-content/uploads/2026/05/BeforeAfter-1-e1778352789260.png',
    'img_after'  => '/wp-content/uploads/2026/05/BeforeAfter-e1778352619870.png',
  ],
  [
    'label'      => 'Retaining Wall & Garden',
    'city'       => 'Bloomfield Hills, MI',
    'img_before' => '/wp-content/uploads/2026/05/BeforeAfter-1-e1778352789260.png',
    'img_after'  => '/wp-content/uploads/2026/05/BeforeAfter-e1778352619870.png',
  ],
];

$cities = [
  [ 'name' => 'Birmingham',       'href' => '', 'img' => '' ],
  [ 'name' => 'Bloomfield Hills', 'href' => '', 'img' => '' ],
  [ 'name' => 'Troy',             'href' => '', 'img' => '' ],
  [ 'name' => 'Rochester Hills',  'href' => '', 'img' => '' ],
  [ 'name' => 'Shelby Township',  'href' => '', 'img' => '' ],
  [ 'name' => 'Washington Twp.',  'href' => '', 'img' => '' ],
  [ 'name' => 'Farmington Hills', 'href' => '', 'img' => '' ],
  [ 'name' => 'Clinton Township', 'href' => '', 'img' => '' ],
];

$cta_img = '';

$badges = [
  [ 'label' => 'Licensed & Insured',      'path' => 'M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z' ],
  [ 'label' => '17+ Years Experience',    'path' => 'M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z' ],
  [ 'label' => '3D Design Renderings',    'path' => 'M6.429 9.75L2.25 12l4.179 2.25m0-4.5l5.571 3 5.571-3m-11.142 0L2.25 7.5 12 2.25l9.75 5.25-4.179 2.25m0 0L21.75 12l-4.179 2.25m0 0l4.179 2.25L12 21.75 2.25 16.5l4.179-2.25m11.142 0l-5.571 3-5.571-3' ],
  [ 'label' => '5-Star Rated',            'path' => 'M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.562.562 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z' ],
  [ 'label' => 'Residential & Commercial','path' => 'M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z' ],
];

$pillars = [
  [ 'title' => 'Visual Certainty',   'path' => 'M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z M15 12a3 3 0 11-6 0 3 3 0 016 0z', 'copy' => 'Every project starts with a custom 3D rendering. You see exactly how your property will look before we begin. You approve the design, materials, and layout before a single stone is placed. What you see is what you get.' ],
  [ 'title' => 'Flawless Execution', 'path' => 'M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z', 'copy' => 'We arrive when we say we will. We finish when we promise. We leave your property cleaner than we found it. Every single time.' ],
  [ 'title' => 'Premium Materials',  'path' => 'M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.562.562 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z', 'copy' => 'We use only top-tier hardscape pavers, natural stone, premium plants, and commercial-grade lighting systems. Every material is chosen for durability, visual impact, and long-term performance.' ],
  [ 'title' => 'Licensed & Insured', 'path' => 'M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z', 'copy' => 'Everridge is fully licensed and insured with general liability and workers compensation coverage. Your property and your investment are completely protected from day one through final walkthrough.' ],
];

$reviews = [
  [ 'name' => 'Michael T.', 'project' => 'Paver Patio · Troy, MI',                    'text' => 'Everridge completely transformed our backyard. The 3D rendering process was incredible — we knew exactly what we were getting before they even started. The finished patio exceeded our expectations in every way.' ],
  [ 'name' => 'Sarah L.',   'project' => 'Full Landscape · Birmingham, MI',            'text' => 'From first consultation to final walkthrough, the professionalism was unmatched. They showed up on time every day, kept the site spotless, and delivered exactly what the rendering showed.' ],
  [ 'name' => 'David R.',   'project' => 'Landscape Lighting · Bloomfield Hills, MI',  'text' => 'The lighting system they designed is breathtaking. We had no idea what was possible until we saw the 3D mockup. Now every time we pull into the driveway at night we feel like we live in a luxury home.' ],
  [ 'name' => 'Jennifer K.','project' => 'Retaining Wall · Rochester Hills, MI',       'text' => 'After getting quotes from five contractors, Everridge stood apart immediately. The 3D rendering gave us confidence no one else could match. The wall turned out perfect and they finished ahead of schedule.' ],
  [ 'name' => 'Robert M.',  'project' => 'Hardscape & Garden · Shelby Township, MI',   'text' => 'I was skeptical about the 3D rendering promise but it is completely real. What we saw on screen is exactly what got built. The craftsmanship is outstanding and the crew was respectful throughout.' ],
];

function ev_img( $url, $alt = '', $classes = 'absolute inset-0 w-full h-full object-cover', $ph = '', $ph_bg = '#ddd8d0' ) {
  if ( ! empty( $url ) ) {
    echo '<img src="' . esc_url( $url ) . '" alt="' . esc_attr( $alt ) . '" class="' . esc_attr( $classes ) . '" loading="lazy">';
  } else {
    echo '<div class="absolute inset-0 flex items-center justify-center text-[10px] text-[#7a7f85] text-center px-6 pointer-events-none" style="background:' . esc_attr( $ph_bg ) . ';">' . esc_html( $ph ) . '</div>';
  }
}

function ev_bg_style( $url, $fallback_color = '#0e0e0e' ) {
  if ( ! empty( $url ) ) {
    return 'background-image:url(' . esc_url( $url ) . ');background-size:cover;background-position:center;';
  }
  return 'background-color:' . $fallback_color . ';';
}
?>


<!-- ════════════════════════════════════════════════
     SECTION 1 — HERO: FORM LEFT / SLIDER RIGHT
     ════════════════════════════════════════════════ -->
<section id="ev-hero" class="relative w-full overflow-hidden bg-[#0b0b0c] -mt-[104px]" style="min-height:100vh;">

  <!-- ── SLIDER — full bleed background ───────────────────────────────── -->
  <?php foreach ( $slides as $i => $slide ) : ?>
  <div class="ev-slide absolute inset-0 bg-cover bg-center transition-opacity duration-[1200ms] <?php echo $i === 0 ? 'opacity-100' : 'opacity-0'; ?>"
       style="background-color:#141414;<?php if ( ! empty( $slide['img'] ) ) echo 'background-image:url(' . esc_url( $slide['img'] ) . ');'; ?>"
       data-index="<?php echo $i; ?>">
  </div>
  <?php endforeach; ?>

  <!-- Global dark overlay -->
  <div class="absolute inset-0" style="background:linear-gradient(to right,rgba(0,0,0,.72) 0%,rgba(0,0,0,.42) 50%,rgba(0,0,0,.20) 100%);"></div>

  <!-- ── CONTENT LAYER ─────────────────────────────────────────────────── -->
  <div class="relative z-10 max-w-[1280px] mx-auto px-6 md:px-10 flex flex-col lg:flex-row items-center justify-between gap-10"
       style="min-height:100vh;padding-top:calc(104px + 48px);padding-bottom:56px;">

    <!-- LEFT — headline -->
    <div class="flex-1 max-w-xl">
      <div class="flex items-center gap-3 mb-5">
        <span class="block w-9 h-px bg-[#8a6a45]"></span>
        <span class="text-[10px] font-semibold tracking-[.22em] uppercase text-[#8a6a45]" id="ev-eyebrow">Premium Hardscape</span>
      </div>
      <h1 class="font-['Articulat_CF'] text-[clamp(38px,5.5vw,70px)] font-bold text-[#e6e3df] leading-[1.08] tracking-tight mb-5">
        Your Property,<br>
        <span class="text-[#8a6a45]">Redesigned.</span>
      </h1>
      <p class="text-[clamp(14px,1.6vw,17px)] font-light text-[rgba(230,227,223,.65)] leading-relaxed max-w-md mb-8">
        Premium outdoor transformation across Southeast Michigan. Hardscape, landscape design, 3D renderings, and lighting systems built for properties that demand more.
      </p>
      <a href="/our-work" class="inline-flex items-center gap-2 text-[11px] font-medium tracking-[.08em] uppercase text-[rgba(230,227,223,.75)] border border-[rgba(230,227,223,.25)] px-7 py-3.5 hover:text-[#8a6a45] hover:border-[#8a6a45] transition-colors">
        View Our Work
        <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
      </a>
    </div>

    <!-- RIGHT — translucent form panel -->
    <div class="w-full lg:w-[420px] flex-shrink-0"
         style="background:rgba(8,8,10,.28);backdrop-filter:blur(24px);-webkit-backdrop-filter:blur(24px);border:1px solid rgba(255,255,255,.06);border-top:2px solid #8a6a45;padding:32px 32px 28px;">

      <div class="mb-5">
        <span class="block text-[10px] font-semibold tracking-[.22em] uppercase text-[#8a6a45] mb-2">Free Estimate</span>
        <h2 class="font-['Articulat_CF'] text-[20px] font-bold text-[#e6e3df] leading-snug">
          Request a Free Estimate
        </h2>
        <p class="text-[12px] font-light text-[rgba(230,227,223,.45)] mt-1.5 leading-relaxed">
          We respond within 24–48 hours. No pressure.
        </p>
      </div>

      <!-- ContactForm React mount — dark mode for translucent hero panel -->
      <div id="render-contact-form-here"
           data-compact="true"
           data-show-title="false"
           data-dark-mode="true"
           class="w-full">
      </div>

    </div><!-- /form panel -->

  </div><!-- /content layer -->

  <!-- Arrows -->
  <button class="ev-arrow-prev absolute left-5 top-1/2 -translate-y-1/2 z-10 w-10 h-10 flex items-center justify-center border border-[rgba(255,255,255,.15)] bg-[rgba(0,0,0,.45)] text-[rgba(255,255,255,.7)] hover:bg-[rgba(138,106,69,.25)] hover:border-[#8a6a45] hover:text-[#8a6a45] transition-all">
    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5"/></svg>
  </button>
  <button class="ev-arrow-next absolute right-5 top-1/2 -translate-y-1/2 z-10 w-10 h-10 flex items-center justify-center border border-[rgba(255,255,255,.15)] bg-[rgba(0,0,0,.45)] text-[rgba(255,255,255,.7)] hover:bg-[rgba(138,106,69,.25)] hover:border-[#8a6a45] hover:text-[#8a6a45] transition-all">
    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/></svg>
  </button>

  <!-- Dots + eyebrow sync -->
  <div id="ev-dots" class="absolute bottom-6 left-[8vw] z-10 flex gap-2"></div>

  <!-- Progress bar -->
  <div class="absolute bottom-0 left-0 right-0 h-[2px] bg-[rgba(255,255,255,.07)] z-10">
    <div id="ev-progress" class="h-full bg-[#8a6a45] w-0"></div>
  </div>

</section>


<!-- ════════════════════════════════════════════════
     TRUST BADGE BAR — continuous marquee
     ════════════════════════════════════════════════ -->
<div class="bg-[#f5f2ef] border-b border-[#e6e3df] overflow-hidden" style="height:48px;">
  <div class="flex items-center h-full w-max animate-[badge-ticker_22s_linear_infinite]">
    <?php foreach ( array_merge( $badges, $badges, $badges ) as $badge ) : ?>
    <div class="flex items-center gap-2.5 whitespace-nowrap px-8">
      <svg class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="#8a6a45" stroke-width="1.8">
        <path stroke-linecap="round" stroke-linejoin="round" d="<?php echo $badge['path']; ?>"/>
      </svg>
      <span class="text-[11px] font-medium text-[#2f3133] tracking-[.04em]"><?php echo $badge['label']; ?></span>
    </div>
    <span class="w-px h-4 bg-[#d8d4ce] flex-shrink-0"></span>
    <?php endforeach; ?>
  </div>
</div>
<style>
@keyframes badge-ticker {
  0%   { transform: translateX(0); }
  100% { transform: translateX(-33.333%); }
}
</style>


<!-- ════════════════════════════════════════════════
     SECTION 3 — WHO WE ARE
     ════════════════════════════════════════════════ -->
<section class="bg-[#f5f2ef] border-t border-b border-[#e6e3df] py-24">
  <div class="max-w-[1280px] mx-auto px-10">
    <div class="grid grid-cols-1 md:grid-cols-[1.5fr_1fr] gap-16 md:gap-24 items-center">

      <div class="ev-reveal-left">
        <span class="block text-[10px] font-semibold tracking-[.22em] uppercase text-[#8a6a45] mb-4">Our Story</span>
        <h2 class="font-['Articulat_CF'] text-[clamp(28px,3.5vw,46px)] font-bold text-[#0b0b0c] leading-[1.12] mb-7">
          Designed Before We Build.<br>
          <span class="text-[#8a6a45]">Executed Beyond Expectation.</span>
        </h2>
        <div class="space-y-4">
          <p class="text-[15px] font-light text-[#2f3133] leading-[1.75]">Everridge Landscape & Hardscape is a premium outdoor transformation company based in Clinton Township, Michigan. For over 17 years, our team has been designing and building outdoor spaces that elevate the presence, value, and curb appeal of homes across the Oakland-Macomb corridor.</p>
          <p class="text-[15px] font-light text-[#7a7f85] leading-[1.75]">We are not a lawn care company. We are a design and build firm specializing in four core disciplines: custom hardscape construction, landscape design and installation, photorealistic 3D renderings, and professional outdoor lighting systems.</p>
          <p class="text-[15px] font-light text-[#7a7f85] leading-[1.75]">Every project begins with a personalized 3D rendering that shows you exactly how your property will look when we are finished. No guesswork. No anxiety about the outcome. Just certainty.</p>
        </div>
        <div class="grid grid-cols-3 gap-5 mt-11 pt-9 border-t border-[#d8d4ce]">
          <?php foreach ( [ ['17+','Years in Business'], ['500+','Projects Delivered'], ['5★','Google Rated'] ] as $stat ) : ?>
          <div>
            <div class="font-['Articulat_CF'] text-3xl font-bold text-[#8a6a45] leading-none"><?php echo $stat[0]; ?></div>
            <div class="text-[10px] text-[#7a7f85] mt-1.5 tracking-[.06em] uppercase"><?php echo $stat[1]; ?></div>
          </div>
          <?php endforeach; ?>
        </div>
        <a href="/about" class="inline-flex items-center gap-2 mt-9 text-[11px] font-medium tracking-[.08em] uppercase text-[#0b0b0c] border border-[#c8c3bc] px-7 py-3.5 hover:text-[#8a6a45] hover:border-[#8a6a45] transition-colors">
          Learn Our Story
          <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
        </a>
      </div>

      <div class="ev-reveal-right flex flex-col gap-3">
        <div class="border border-[#e6e3df] overflow-hidden aspect-video relative bg-[#e8ede6]">
          <?php ev_img( $who_imgs[0], '3D Rendering', 'absolute inset-0 w-full h-full object-cover', '3D Rendering — project visualization', '#e8ede6' ); ?>
        </div>
        <div class="border border-[#e6e3df] overflow-hidden relative bg-[#e8e4de]" style="min-height:160px;">
          <?php ev_img( $who_imgs[1], 'Completed project', 'absolute inset-0 w-full h-full object-cover', 'Completed project — same angle as rendering', '#e8e4de' ); ?>
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
      <span class="block text-[10px] font-semibold tracking-[.22em] uppercase text-[#8a6a45] mb-3">What We Do</span>
      <h2 class="font-['Articulat_CF'] text-[clamp(28px,3.5vw,44px)] font-bold text-[#0b0b0c] leading-[1.15]">
        Everything Your Property Needs.<br>
        <span class="text-[#8a6a45]">One Team You Can Trust.</span>
      </h2>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
      <?php foreach ( $services as $i => $svc ) : ?>
      <div class="ev-reveal group bg-[#f5f2ef] border border-[#e6e3df] overflow-hidden cursor-pointer transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_12px_40px_rgba(0,0,0,.1)]"
           style="transition-delay:<?php echo $i * 120; ?>ms;">
        <div class="overflow-hidden aspect-video relative bg-[#ddd8d0]">
          <?php if ( ! empty( $svc['img'] ) ) : ?>
          <img src="<?php echo esc_url( $svc['img'] ); ?>" alt="<?php echo esc_attr( $svc['title'] ); ?>"
               class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" loading="lazy">
          <?php else : ?>
          <div class="absolute inset-0 flex items-center justify-center text-[10px] text-[#7a7f85] text-center px-4">
            <?php echo esc_html( $svc['ph'] ); ?>
          </div>
          <?php endif; ?>
        </div>
        <div class="p-5 pb-6">
          <h3 class="font-['Articulat_CF'] text-[17px] font-bold text-[#0b0b0c] mb-2.5 leading-snug"><?php echo $svc['title']; ?></h3>
          <p class="text-[13px] font-light text-[#7a7f85] leading-[1.7] mb-4"><?php echo $svc['copy']; ?></p>
          <a href="<?php echo esc_url( $svc['href'] ); ?>" class="inline-flex items-center gap-1.5 text-[10px] font-semibold tracking-[.08em] uppercase text-[#8a6a45] hover:opacity-70 transition-opacity">
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
<section class="bg-[#f5f2ef] border-t border-b border-[#e6e3df] py-24">
  <div class="max-w-[1280px] mx-auto px-10">
    <div class="text-center mb-14 ev-reveal">
      <span class="block text-[10px] font-semibold tracking-[.22em] uppercase text-[#8a6a45] mb-3">Why Choose Us</span>
      <h2 class="font-['Articulat_CF'] text-[clamp(26px,3.5vw,42px)] font-bold text-[#0b0b0c] leading-[1.18]">
        In a Market Full of Contractors,<br>
        <span class="text-[#8a6a45]">We Deliver Certainty.</span>
      </h2>
    </div>
    <div id="ev-pillars" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
      <?php foreach ( $pillars as $i => $p ) : ?>
      <div class="ev-pillar ev-reveal border border-[#d8d4ce] p-8 bg-white transition-all duration-500 <?php echo $i === 0 ? 'ev-pillar-lit' : ''; ?>"
           style="transition-delay:<?php echo $i * 100; ?>ms;" data-pillar="<?php echo $i; ?>">
        <div class="w-10 h-10 bg-[#f5f2ef] border border-[#d8d4ce] flex items-center justify-center mb-5">
          <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="#8a6a45" stroke-width="1.6"><path stroke-linecap="round" stroke-linejoin="round" d="<?php echo $p['path']; ?>"/></svg>
        </div>
        <h3 class="font-['Articulat_CF'] text-[17px] font-bold text-[#0b0b0c] mb-3"><?php echo $p['title']; ?></h3>
        <p class="text-[13px] font-light text-[#7a7f85] leading-[1.75]"><?php echo $p['copy']; ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<style>
.ev-pillar-lit { border-color:rgba(138,106,69,.55)!important; box-shadow:0 0 40px rgba(138,106,69,.08); background:#fdf8f4!important; }
</style>


<!-- ════════════════════════════════════════════════
     SECTION 6 — PROCESS
     ════════════════════════════════════════════════ -->
<section class="bg-white py-24">
  <div class="max-w-[1100px] mx-auto px-10">
    <div class="text-center mb-20 ev-reveal">
      <span class="block text-[10px] font-semibold tracking-[.22em] uppercase text-[#8a6a45] mb-3">Our Process</span>
      <h2 class="font-['Articulat_CF'] text-[clamp(26px,3.5vw,42px)] font-bold text-[#0b0b0c] leading-[1.18]">
        A Clear Process.<br>
        <span class="text-[#8a6a45]">No Guesswork. No Surprises.</span>
      </h2>
    </div>
    <div class="relative">
      <div class="hidden md:block absolute left-1/2 top-0 bottom-0 w-px bg-[#e6e3df] -translate-x-1/2"></div>
      <?php foreach ( $steps as $i => $step ) : ?>
      <div class="ev-step relative grid grid-cols-1 md:grid-cols-[1fr_52px_1fr] items-center <?php echo $i < 3 ? 'mb-16' : ''; ?>"
           data-step="<?php echo $i; ?>">
        <?php if ( $step['side'] === 'left' ) : ?>
          <div class="md:pr-14 md:text-right mb-6 md:mb-0">
            <div class="text-[10px] font-semibold tracking-[.18em] uppercase text-[#8a6a45] mb-2">Step <?php echo $step['num']; ?></div>
            <h3 class="font-['Articulat_CF'] text-xl font-bold text-[#0b0b0c] mb-3"><?php echo $step['title']; ?></h3>
            <p class="text-[13px] font-light text-[#7a7f85] leading-[1.75]"><?php echo $step['copy']; ?></p>
          </div>
          <div class="ev-step-dot hidden md:flex w-[52px] h-[52px] flex-shrink-0 items-center justify-center bg-[#f5f2ef] border-2 border-[#e6e3df] z-10 transition-all duration-500 mx-auto">
            <span class="font-['Articulat_CF'] text-[13px] font-bold text-[#8a6a45]"><?php echo $step['num']; ?></span>
          </div>
          <div class="md:pl-14">
            <div class="border border-[#e6e3df] overflow-hidden h-44 relative bg-white">
              <?php ev_img( $step['img'], $step['title'], 'absolute inset-0 w-full h-full object-cover', $step['ph'], '#f0ece8' ); ?>
            </div>
          </div>
        <?php else : ?>
          <div class="md:pr-14 mb-6 md:mb-0">
            <div class="border border-[#e6e3df] overflow-hidden h-44 relative bg-white">
              <?php ev_img( $step['img'], $step['title'], 'absolute inset-0 w-full h-full object-cover', $step['ph'], '#f0ece8' ); ?>
            </div>
          </div>
          <div class="ev-step-dot hidden md:flex w-[52px] h-[52px] flex-shrink-0 items-center justify-center bg-[#f5f2ef] border-2 border-[#e6e3df] z-10 transition-all duration-500 mx-auto">
            <span class="font-['Articulat_CF'] text-[13px] font-bold text-[#8a6a45]"><?php echo $step['num']; ?></span>
          </div>
          <div class="md:pl-14">
            <div class="text-[10px] font-semibold tracking-[.18em] uppercase text-[#8a6a45] mb-2">Step <?php echo $step['num']; ?></div>
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
     SECTION 7 — BEFORE & AFTER
     ════════════════════════════════════════════════ -->
<section class="bg-[#f5f2ef] border-t border-b border-[#e6e3df] py-24">
  <div class="max-w-[1280px] mx-auto px-10">
    <div class="text-center mb-14 ev-reveal">
      <span class="block text-[10px] font-semibold tracking-[.22em] uppercase text-[#8a6a45] mb-3">Portfolio</span>
      <h2 class="font-['Articulat_CF'] text-[clamp(26px,3.5vw,42px)] font-bold text-[#0b0b0c]">
        Real Projects. <span class="text-[#8a6a45]">Real Results.</span>
      </h2>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
      <?php foreach ( $ba_projects as $i => $proj ) : ?>
      <div class="ev-reveal" style="transition-delay:<?php echo ( $i % 2 ) * 120; ?>ms;">
        <div class="ev-ba relative overflow-hidden border border-[#e6e3df] cursor-col-resize select-none" data-ba="<?php echo $i; ?>">
          <div class="aspect-video relative bg-[#ddd8d0]">
            <?php ev_img( $proj['img_before'], 'Before — ' . $proj['label'], 'absolute inset-0 w-full h-full object-cover', 'BEFORE — ' . $proj['label'], '#ddd8d0' ); ?>
          </div>
          <div class="ev-ba-after absolute inset-0 bg-[#c8d4b8]"
               style="clip-path:inset(0 50% 0 0);background-size:cover;background-position:center;<?php if ( ! empty( $proj['img_after'] ) ) echo 'background-image:url(' . esc_url( $proj['img_after'] ) . ');'; ?>">
            <?php if ( empty( $proj['img_after'] ) ) : ?>
            <div class="absolute inset-0 flex items-center justify-center text-[10px] text-[#7a7f85] text-center px-6">
              AFTER — <?php echo esc_html( $proj['label'] ); ?>
            </div>
            <?php endif; ?>
          </div>
          <div class="ev-ba-handle absolute top-0 bottom-0 w-0.5 bg-[#8a6a45] left-1/2 -translate-x-1/2 flex items-center justify-center pointer-events-none">
            <div class="w-9 h-9 bg-[#8a6a45] flex items-center justify-center shadow-[0_2px_12px_rgba(138,106,69,.4)]">
              <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="white" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15M15.75 9L12 5.25 8.25 9"/></svg>
            </div>
          </div>
          <span class="absolute top-3 left-4 text-[9px] font-bold tracking-[.12em] uppercase text-[rgba(255,255,255,.55)]">Before</span>
          <span class="absolute top-3 right-4 text-[9px] font-bold tracking-[.12em] uppercase text-[rgba(255,255,255,.55)]">After</span>
        </div>
        <div class="flex items-center justify-between pt-3 px-1">
          <span class="font-['Articulat_CF'] text-[15px] font-semibold text-[#0b0b0c]"><?php echo $proj['label']; ?></span>
          <span class="text-[11px] text-[#7a7f85]"><?php echo $proj['city']; ?></span>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
    <div class="text-center mt-12">
      <a href="/our-work" class="inline-flex items-center gap-2 text-[11px] font-medium tracking-[.08em] uppercase text-[#0b0b0c] border border-[#d8d4ce] px-8 py-3.5 hover:text-[#8a6a45] hover:border-[#8a6a45] transition-colors">
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
      <span class="block text-[10px] font-semibold tracking-[.22em] uppercase text-[#8a6a45] mb-3">Client Reviews</span>
      <h2 class="font-['Articulat_CF'] text-[clamp(26px,3.5vw,42px)] font-bold text-[#0b0b0c] mb-4">What Our Clients Say</h2>
      <div class="flex items-center justify-center gap-2">
        <div class="flex gap-1">
          <?php for ( $s = 0; $s < 5; $s++ ) : ?>
          <svg class="w-4 h-4" viewBox="0 0 24 24" fill="#8a6a45"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
          <?php endfor; ?>
        </div>
        <span class="text-[13px] text-[#7a7f85]">5.0 · 80+ Google Reviews</span>
      </div>
    </div>
    <div class="overflow-hidden" id="ev-reviews-vp">
      <div id="ev-reviews-track" class="flex gap-5 transition-transform duration-500 ease-[cubic-bezier(.25,.46,.45,.94)] will-change-transform">
        <?php foreach ( $reviews as $r ) : ?>
        <div class="min-w-[calc(33.333%-14px)] bg-white border border-[#e6e3df] p-8 flex-shrink-0">
          <div class="flex gap-1 mb-4">
            <?php for ( $s = 0; $s < 5; $s++ ) : ?>
            <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="#8a6a45"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <?php endfor; ?>
          </div>
          <p class="font-['Articulat_CF'] italic text-[15px] text-[#2f3133] leading-[1.7] mb-6">"<?php echo $r['text']; ?>"</p>
          <div class="flex items-center justify-between pt-4 border-t border-[#d8d4ce]">
            <div>
              <div class="text-[13px] font-semibold text-[#0b0b0c]"><?php echo $r['name']; ?></div>
              <div class="text-[11px] text-[#7a7f85] mt-0.5"><?php echo $r['project']; ?></div>
            </div>
            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="#9a9690"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/></svg>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
    <div id="ev-review-dots" class="flex justify-center gap-2 mt-8"></div>
    <div class="text-center mt-7">
      <a href="https://g.page/r/everridge" target="_blank" rel="noopener" class="text-[11px] font-medium text-[#7a7f85] border-b border-[#e6e3df] pb-px hover:text-[#8a6a45] transition-colors">
        Read all reviews on Google ↗
      </a>
    </div>
  </div>
</section>


<!-- ════════════════════════════════════════════════
     SECTION 9 — SERVICE AREAS
     ════════════════════════════════════════════════ -->
<section class="bg-[#f5f2ef] border-t border-b border-[#e6e3df] py-24">
  <div class="max-w-[1280px] mx-auto px-10">
    <div class="text-center mb-14 ev-reveal">
      <span class="block text-[10px] font-semibold tracking-[.22em] uppercase text-[#8a6a45] mb-3">Where We Work</span>
      <h2 class="font-['Articulat_CF'] text-[clamp(24px,3vw,40px)] font-bold text-[#0b0b0c]">
        Serving Southeast Michigan's<br>
        <span class="text-[#8a6a45]">Most Valued Communities</span>
      </h2>
    </div>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
      <?php foreach ( $cities as $i => $city ) : ?>
      <a href="<?php echo esc_url( $city['href'] ); ?>"
         class="ev-reveal group relative overflow-hidden aspect-[4/3] block"
         style="transition-delay:<?php echo ( $i % 4 ) * 80; ?>ms;"
         aria-label="<?php echo esc_attr( $city['name'] ); ?>">
        <div class="absolute inset-0 bg-[#c8c0b0] transition-transform duration-500 group-hover:scale-105 bg-cover bg-center"
             style="<?php if ( ! empty( $city['img'] ) ) echo 'background-image:url(' . esc_url( $city['img'] ) . ');'; ?>">
        </div>
        <div class="absolute inset-0 bg-[rgba(0,0,0,.52)] group-hover:bg-[rgba(0,0,0,.38)] transition-colors duration-300 flex flex-col items-start justify-end p-5">
          <span class="text-[9px] font-semibold tracking-[.18em] uppercase text-[#8a6a45] mb-1">Michigan</span>
          <span class="font-['Articulat_CF'] text-base font-bold text-[#e6e3df]"><?php echo $city['name']; ?></span>
          <span class="text-[10px] text-[rgba(230,227,223,.38)] mt-1">Premium hardscape & landscape</span>
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
  <div class="absolute inset-0 bg-[#0b0b0c]"
       style="background-size:cover;background-position:center;background-attachment:fixed;<?php if ( ! empty( $cta_img ) ) echo 'background-image:url(' . esc_url( $cta_img ) . ');'; ?>">
    <?php if ( empty( $cta_img ) ) : ?>
    <div class="absolute inset-0 flex items-center justify-center text-[11px] text-[#2a2a2a] tracking-widest uppercase">
      Most impressive completed project — golden hour hero shot
    </div>
    <?php endif; ?>
  </div>
  <div class="absolute inset-0 bg-[rgba(0,0,0,.68)]"></div>
  <div class="relative z-10 max-w-[760px] mx-auto px-10 text-center">
    <span class="block text-[10px] font-semibold tracking-[.22em] uppercase text-[#8a6a45] mb-4">Get Started Today</span>
    <h2 class="font-['Articulat_CF'] text-[clamp(30px,5vw,58px)] font-bold text-[#e6e3df] leading-[1.1] mb-5">
      Ready to See Your Property<br>
      <span class="text-[#8a6a45]">Redesigned?</span>
    </h2>
    <p class="text-[15px] font-light text-[rgba(230,227,223,.62)] leading-relaxed mb-10 max-w-lg mx-auto">
      Whether you're planning a paver patio, a complete landscape transformation, or want to see what outdoor lighting can do for your home — request a free estimate and see your project in 3D before we break ground.
    </p>
    <a href="tel:+17705550192" class="block font-['Articulat_CF'] font-bold text-[#8a6a45] text-[clamp(28px,4vw,44px)] tracking-tight mb-9 hover:opacity-75 transition-opacity">
      (770) 555-0192
    </a>
    <div class="flex flex-wrap gap-3 justify-center">
      <a href="/contact" class="inline-flex items-center gap-2 text-[12px] font-bold tracking-[.1em] uppercase text-white px-9 py-4 hover:opacity-85 transition-opacity" style="background:linear-gradient(135deg,#8a6a45,#7a5c38);">
        Request a Free Estimate
        <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
      </a>
      <a href="/our-work" class="inline-flex items-center gap-2 text-[12px] font-medium tracking-[.08em] uppercase text-[rgba(230,227,223,.82)] border border-[rgba(230,227,223,.18)] px-8 py-4 hover:text-[#8a6a45] hover:border-[#8a6a45] transition-colors">
        View Our Work
      </a>
    </div>
    <div class="flex items-center justify-center gap-6 flex-wrap mt-10">
      <?php foreach ( [ 'Licensed & Insured', '17+ Years Experience', '5-Star Rated', 'SE Michigan' ] as $b ) : ?>
      <span class="text-[10px] text-[rgba(230,227,223,.22)] tracking-[.06em]"><?php echo $b; ?></span>
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
  const eyebrow  = document.getElementById('ev-eyebrow');
  const INTERVAL = 5000;
  let cur = 0, paused = false, timer;

  const eyebrows = [<?php foreach($slides as $s) echo '"'.esc_js($s['eyebrow']).'",'; ?>];

  slides.forEach((_, i) => {
    const d = document.createElement('button');
    d.style.cssText = 'height:3px;border:none;padding:0;cursor:pointer;transition:all .3s;' + (i === 0 ? 'width:44px;background:#8a6a45' : 'width:28px;background:rgba(255,255,255,.25)');
    d.setAttribute('aria-label', 'Slide ' + (i + 1));
    d.addEventListener('click', () => { go(i); reset(); });
    dotsWrap.appendChild(d);
  });

  function go(n) {
    slides[cur].classList.replace('opacity-100', 'opacity-0');
    dotsWrap.children[cur].style.cssText = 'height:3px;border:none;padding:0;cursor:pointer;transition:all .3s;width:28px;background:rgba(255,255,255,.25)';
    cur = (n + slides.length) % slides.length;
    slides[cur].classList.replace('opacity-0', 'opacity-100');
    dotsWrap.children[cur].style.cssText = 'height:3px;border:none;padding:0;cursor:pointer;transition:all .3s;width:44px;background:#8a6a45';
    if (eyebrow && eyebrows[cur]) eyebrow.textContent = eyebrows[cur];
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
  let tx = 0;
  hero.addEventListener('touchstart', e => tx = e.touches[0].clientX, { passive: true });
  hero.addEventListener('touchend',   e => { if (Math.abs(e.changedTouches[0].clientX - tx) > 44) { go(cur + (e.changedTouches[0].clientX < tx ? 1 : -1)); reset(); } });
  startProgress();
  reset();


  /* ── SCROLL REVEAL ───────────────────── */
  const ro = new IntersectionObserver(entries => {
    entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add('opacity-100','translate-y-0','translate-x-0'); e.target.classList.remove('opacity-0','translate-y-7','-translate-x-8','translate-x-8'); ro.unobserve(e.target); } });
  }, { threshold: 0.12 });
  document.querySelectorAll('.ev-reveal').forEach(el => { el.classList.add('opacity-0','translate-y-7','transition-all','duration-700'); ro.observe(el); });
  document.querySelectorAll('.ev-reveal-left').forEach(el => { el.classList.add('opacity-0','-translate-x-8','transition-all','duration-700'); ro.observe(el); });
  document.querySelectorAll('.ev-reveal-right').forEach(el => { el.classList.add('opacity-0','translate-x-8','transition-all','duration-700'); ro.observe(el); });


  /* ── PROCESS STEP LIGHTS ─────────────── */
  const stepEls  = document.querySelectorAll('.ev-step');
  const stepDots = document.querySelectorAll('.ev-step-dot');
  const so = new IntersectionObserver(entries => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        const i = e.target.dataset.step;
        if (stepDots[i]) { stepDots[i].style.borderColor = '#8a6a45'; stepDots[i].style.background = 'rgba(138,106,69,.12)'; }
        so.unobserve(e.target);
      }
    });
  }, { threshold: 0.4 });
  stepEls.forEach(s => so.observe(s));


  /* ── PILLAR CYCLING ──────────────────── */
  const pillars = document.querySelectorAll('.ev-pillar');
  let ap = 0;
  if (pillars.length) setInterval(() => { pillars[ap].classList.remove('ev-pillar-lit'); ap = (ap + 1) % pillars.length; pillars[ap].classList.add('ev-pillar-lit'); }, 4000);


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
    window.addEventListener('mousemove', e => { if (drag) setPos(e.clientX); });
    window.addEventListener('touchmove', e => { if (drag) setPos(e.touches[0].clientX); }, { passive: true });
    window.addEventListener('mouseup',   () => drag = false);
    window.addEventListener('touchend',  () => drag = false);
  });


  /* ── TESTIMONIAL CAROUSEL ────────────── */
  const rvp   = document.getElementById('ev-reviews-vp');
  const track = document.getElementById('ev-reviews-track');
  const rdots = document.getElementById('ev-review-dots');
  if (track && rdots) {
    const cards = track.querySelectorAll(':scope > div');
    const vis   = window.innerWidth < 768 ? 1 : 3;
    const pages = Math.ceil(cards.length / vis);
    let rp = 0, rpaused = false, rtimer;
    for (let i = 0; i < pages; i++) {
      const d = document.createElement('button');
      d.style.cssText = 'height:3px;border:none;padding:0;cursor:pointer;transition:all .3s;background:rgba(0,0,0,.15);width:' + (i === 0 ? '42px' : '28px');
      d.addEventListener('click', () => rGo(i));
      rdots.appendChild(d);
    }
    function rGo(n) {
      rp = (n + pages) % pages;
      const w = (cards[0].offsetWidth + 20) * vis;
      track.style.transform = 'translateX(-' + (rp * w) + 'px)';
      rdots.querySelectorAll('button').forEach((d, i) => { d.style.background = i === rp ? '#8a6a45' : 'rgba(0,0,0,.15)'; d.style.width = i === rp ? '42px' : '28px'; });
    }
    function rReset() { clearInterval(rtimer); rtimer = setInterval(() => { if (!rpaused) rGo(rp + 1); }, 6000); }
    rvp.addEventListener('mouseenter', () => rpaused = true);
    rvp.addEventListener('mouseleave', () => rpaused = false);
    let rtx = 0;
    rvp.addEventListener('touchstart', e => rtx = e.touches[0].clientX, { passive: true });
    rvp.addEventListener('touchend',   e => { if (Math.abs(e.changedTouches[0].clientX - rtx) > 44) { rGo(rp + (e.changedTouches[0].clientX < rtx ? 1 : -1)); rReset(); } });
    rReset();
  }

})();
</script>

<?php get_footer(); ?>