<?php
/**
 * Template Name: Locations
 *
 * @package everridge
 */
get_header(); ?>

<?php
/* ── Location data ────────────────────────────────────────────────────────── */
$locations = [
  [
    'name'        => 'Birmingham',
    'state'       => 'MI',
    'description' => 'Premium hardscape and landscape services in Birmingham, MI. Serving one of Southeast Michigan\'s most prestigious communities with custom paver patios, landscape design, 3D renderings, and outdoor lighting.',
    'maps_embed'  => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d47330.!2d-83.2113!3d42.5467!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8824c0e4a2e3b4a5%3A0x1234567890abcdef!2sBirmingham%2C%20MI!5e0!3m2!1sen!2sus!4v1700000000000',
    'maps_link'   => 'https://maps.google.com/?q=Birmingham+MI',
    'img'         => '', // /wp-content/uploads/2026/05/city-birmingham.jpg
  ],
  [
    'name'        => 'Bloomfield Hills',
    'state'       => 'MI',
    'description' => 'Luxury outdoor transformation in Bloomfield Hills, MI. Our most discerning clients expect perfection — and that\'s exactly what Everridge delivers on every project in this community.',
    'maps_embed'  => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23660.!2d-83.2452!3d42.5842!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8824c1b2c3d4e5f6%3A0xabcdef1234567890!2sBloomfield+Hills%2C+MI!5e0!3m2!1sen!2sus!4v1700000000001',
    'maps_link'   => 'https://maps.google.com/?q=Bloomfield+Hills+MI',
    'img'         => '', // /wp-content/uploads/2026/05/city-bloomfield.jpg
  ],
  [
    'name'        => 'Troy',
    'state'       => 'MI',
    'description' => 'Expert hardscape and landscape design in Troy, MI. From paver driveways and outdoor kitchens to full property transformations, Everridge brings premium quality to every project in Troy.',
    'maps_embed'  => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d47325.!2d-83.1499!3d42.6064!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8824d0a1b2c3d4e5%3A0xfedcba9876543210!2sTroy%2C+MI!5e0!3m2!1sen!2sus!4v1700000000002',
    'maps_link'   => 'https://maps.google.com/?q=Troy+MI',
    'img'         => '', // /wp-content/uploads/2026/05/city-troy.jpg
  ],
  [
    'name'        => 'Rochester Hills',
    'state'       => 'MI',
    'description' => 'Trusted outdoor design and build firm in Rochester Hills, MI. Everridge serves homeowners across Rochester Hills with photorealistic 3D renderings, premium hardscape, and professional lighting systems.',
    'maps_embed'  => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d47300.!2d-83.1499!3d42.6584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8824d1e2f3a4b5c6%3A0x0987654321fedcba!2sRochester+Hills%2C+MI!5e0!3m2!1sen!2sus!4v1700000000003',
    'maps_link'   => 'https://maps.google.com/?q=Rochester+Hills+MI',
    'img'         => '', // /wp-content/uploads/2026/05/city-rochester.jpg
  ],
  [
    'name'        => 'Shelby Township',
    'state'       => 'MI',
    'description' => 'Full-service outdoor construction in Shelby Township, MI. Retaining walls, paver patios, landscape installations, and lighting systems — Everridge handles every detail from 3D design to final walkthrough.',
    'maps_embed'  => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d47310.!2d-83.0338!3d42.6820!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8824e2f3a4b5c6d7%3A0x1234abcd5678ef90!2sShelby+Township%2C+MI!5e0!3m2!1sen!2sus!4v1700000000004',
    'maps_link'   => 'https://maps.google.com/?q=Shelby+Township+MI',
    'img'         => '', // /wp-content/uploads/2026/05/city-shelby.jpg
  ],
  [
    'name'        => 'Washington Township',
    'state'       => 'MI',
    'description' => 'Premium landscape and hardscape services in Washington Township, MI. From custom garden design to outdoor lighting and hardscape construction, Everridge brings craftsmanship to every project.',
    'maps_embed'  => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d47295.!2d-82.9974!3d42.7342!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8824f3a4b5c6d7e8%3A0xabcd1234ef567890!2sWashington+Township%2C+MI!5e0!3m2!1sen!2sus!4v1700000000005',
    'maps_link'   => 'https://maps.google.com/?q=Washington+Township+MI',
    'img'         => '', // /wp-content/uploads/2026/05/city-washington.jpg
  ],
  [
    'name'        => 'Farmington Hills',
    'state'       => 'MI',
    'description' => 'Expert outdoor transformation in Farmington Hills, MI. Everridge designs and builds premium outdoor environments for homeowners in Farmington Hills who expect quality, precision, and results that last.',
    'maps_embed'  => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d47340.!2d-83.3766!3d42.4989!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8824b3c4d5e6f7a8%3A0x9876543210fedcba!2sFarmington+Hills%2C+MI!5e0!3m2!1sen!2sus!4v1700000000006',
    'maps_link'   => 'https://maps.google.com/?q=Farmington+Hills+MI',
    'img'         => '', // /wp-content/uploads/2026/05/city-farmington.jpg
  ],
  [
    'name'        => 'Clinton Township',
    'state'       => 'MI',
    'description' => 'Based in Clinton Township, MI — Everridge\'s home community. We have been designing and building outdoor spaces across Clinton Township and the surrounding Oakland-Macomb corridor for over 17 years.',
    'maps_embed'  => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d47315.!2d-82.9196!3d42.5884!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8824e8a9b0c1d2e3%3A0xfedcba0987654321!2sClinton+Township%2C+MI!5e0!3m2!1sen!2sus!4v1700000000007',
    'maps_link'   => 'https://maps.google.com/?q=Clinton+Township+MI',
    'img'         => '', // /wp-content/uploads/2026/05/city-clinton.jpg
    'badge'       => 'Our Home Base',
  ],
];

/*
 ── HOW TO GET REAL GOOGLE MAPS EMBED URLs ──────────────────────────────────
 1. Go to maps.google.com
 2. Search the city name (e.g. "Birmingham, MI")
 3. Click Share → Embed a map
 4. Copy the src="..." URL from the iframe code
 5. Replace the 'maps_embed' value above with your copied URL
 ─────────────────────────────────────────────────────────────────────────────
*/
?>


<!-- ════════════════════════════════════════════════
     PAGE HERO
     ════════════════════════════════════════════════ -->
<section class="relative overflow-hidden -mt-[104px]" style="min-height:38vh;">
  <div class="absolute inset-0 bg-[#0b0b0c]"></div>
  <div class="absolute inset-0" style="background:linear-gradient(to right,rgba(0,0,0,.8) 0%,rgba(0,0,0,.5) 60%,rgba(0,0,0,.2) 100%);"></div>

  <div class="relative z-10 max-w-[1280px] mx-auto px-6 md:px-10 flex flex-col justify-end pb-14"
       style="min-height:38vh;padding-top:130px;">
    <div class="flex items-center gap-3 mb-4">
      <span class="block w-9 h-px bg-[#8a6a45]"></span>
      <span class="text-[10px] font-semibold tracking-[.22em] uppercase text-[#8a6a45]">Service Areas</span>
    </div>
    <h1 class="font-['Playfair_Display'] text-[clamp(30px,5vw,58px)] font-bold text-[#e6e3df] leading-[1.08] max-w-2xl">
      Serving Southeast Michigan's<br>
      <em class="italic text-[#8a6a45]">Most Valued Communities</em>
    </h1>
    <p class="mt-4 text-[14px] font-light text-[rgba(230,227,223,.55)] max-w-lg leading-relaxed">
      Based in Clinton Township — reaching every corner of the Oakland-Macomb corridor with the same premium quality, premium materials, and 3D design process on every project.
    </p>
  </div>
</section>


<!-- ════════════════════════════════════════════════
     STATS BAR
     ════════════════════════════════════════════════ -->
<div class="bg-[#f5f2ef] border-b border-[#e6e3df]">
  <div class="max-w-[1280px] mx-auto px-6 md:px-10">
    <div class="hidden md:flex items-center justify-between h-14">
      <?php
      $stats = [
        [ 'val' => '8',    'label' => 'Communities Served' ],
        [ 'val' => '30mi', 'label' => 'Service Radius'     ],
        [ 'val' => '17+',  'label' => 'Years in the Field' ],
        [ 'val' => '500+', 'label' => 'Projects Delivered' ],
      ];
      foreach ( $stats as $i => $s ) : ?>
      <div class="flex items-center gap-3">
        <span class="font-['Playfair_Display'] text-[20px] font-bold text-[#8a6a45]"><?php echo $s['val']; ?></span>
        <span class="text-[11px] font-medium text-[#7a7f85] tracking-[.04em]"><?php echo $s['label']; ?></span>
      </div>
      <?php if ( $i < count($stats) - 1 ) : ?>
      <span class="w-px h-5 bg-[#d8d4ce]"></span>
      <?php endif; ?>
      <?php endforeach; ?>
    </div>
  </div>
</div>


<!-- ════════════════════════════════════════════════
     LOCATIONS GRID
     ════════════════════════════════════════════════ -->
<section class="bg-white py-20">
  <div class="max-w-[1280px] mx-auto px-6 md:px-10">

    <div class="text-center mb-14 ev-reveal">
      <span class="block text-[10px] font-semibold tracking-[.22em] uppercase text-[#8a6a45] mb-3">Where We Work</span>
      <h2 class="font-['Playfair_Display'] text-[clamp(26px,3.5vw,40px)] font-bold text-[#0b0b0c] leading-[1.15]">
        Find Your Community
      </h2>
      <p class="mt-4 text-[14px] text-[#7a7f85] font-light max-w-xl mx-auto leading-relaxed">
        Click any location to open it in Google Maps, or request a free estimate for your property below.
      </p>
    </div>

    <!-- Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      <?php foreach ( $locations as $i => $loc ) : ?>
      <div class="ev-reveal group border border-[#e6e3df] rounded-2xl overflow-hidden bg-white hover:shadow-[0_8px_40px_rgba(0,0,0,.08)] hover:-translate-y-0.5 transition-all duration-300"
           style="transition-delay:<?php echo ( $i % 2 ) * 80; ?>ms;"
           id="location-<?php echo sanitize_title( $loc['name'] ); ?>">

        <!-- Map embed -->
        <div class="relative" style="height:220px;">

          <?php if ( ! empty( $loc['img'] ) ) : ?>
          <!-- City photo (optional, shown when map not customized) -->
          <img src="<?php echo esc_url( $loc['img'] ); ?>"
               alt="<?php echo esc_attr( $loc['name'] ); ?>, <?php echo esc_attr( $loc['state'] ); ?>"
               class="absolute inset-0 w-full h-full object-cover">
          <div class="absolute inset-0" style="background:rgba(0,0,0,.3);"></div>
          <?php else : ?>
          <!-- Google Maps iframe embed -->
          <iframe
            title="<?php echo esc_attr( $loc['name'] . ', ' . $loc['state'] ); ?> Map"
            src="<?php echo esc_url( $loc['maps_embed'] ); ?>"
            width="100%"
            height="220"
            style="border:0;display:block;"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
          <?php endif; ?>

          <!-- Location badge overlay -->
          <?php if ( ! empty( $loc['badge'] ) ) : ?>
          <div class="absolute top-3 left-3 z-10">
            <span class="text-[9px] font-bold tracking-[.12em] uppercase text-[#0f0f0f] px-2.5 py-1 rounded-full"
                  style="background:linear-gradient(135deg,#8a6a45,#7a5c38);">
              <?php echo esc_html( $loc['badge'] ); ?>
            </span>
          </div>
          <?php endif; ?>

          <!-- Open in Google Maps button — always visible on the map -->
          <a href="<?php echo esc_url( $loc['maps_link'] ); ?>"
             target="_blank" rel="noopener noreferrer"
             class="absolute bottom-3 right-3 z-10 flex items-center gap-1.5 bg-white text-[#0b0b0c] text-[10px] font-bold tracking-[.08em] uppercase px-3 py-2 rounded-lg shadow-md hover:bg-[#8a6a45] hover:text-white transition-colors">
            <svg class="w-3.5 h-3.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0zM19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/>
            </svg>
            Open in Maps
          </a>
        </div>

        <!-- Card body -->
        <div class="p-6 md:p-7">
          <div class="flex items-start justify-between gap-4 mb-3">
            <div>
              <h3 class="font-['Playfair_Display'] text-[20px] font-bold text-[#0b0b0c] leading-snug">
                <?php echo esc_html( $loc['name'] ); ?>
                <span class="text-[#8a6a45]">, <?php echo esc_html( $loc['state'] ); ?></span>
              </h3>
              <div class="flex items-center gap-1.5 mt-1">
                <svg class="w-3 h-3 text-[#8a6a45] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0zM19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/>
                </svg>
                <span class="text-[11px] text-[#7a7f85]">Southeast Michigan</span>
              </div>
            </div>
            <!-- Direction button (icon only, large) -->
            <a href="<?php echo esc_url( $loc['maps_link'] ); ?>"
               target="_blank" rel="noopener noreferrer"
               title="Get directions to <?php echo esc_attr( $loc['name'] ); ?>"
               class="flex-shrink-0 w-10 h-10 rounded-xl border border-[#e6e3df] bg-[#f5f2ef] flex items-center justify-center text-[#7a7f85] hover:bg-[#8a6a45] hover:border-[#8a6a45] hover:text-white transition-all">
              <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 6.75V15m6-6v8.25m.503 3.498l4.875-2.437c.381-.19.622-.58.622-1.006V4.82c0-.836-.88-1.38-1.628-1.006l-3.869 1.934c-.317.159-.69.159-1.006 0L9.503 3.252a1.125 1.125 0 00-1.006 0L3.622 5.689C3.24 5.88 3 6.27 3 6.695V19.18c0 .836.88 1.38 1.628 1.006l3.869-1.934c.317-.159.69-.159 1.006 0l4.994 2.497c.317.158.69.158 1.006 0z"/>
              </svg>
            </a>
          </div>

          <p class="text-[13px] font-light text-[#7a7f85] leading-[1.75] mb-5">
            <?php echo esc_html( $loc['description'] ); ?>
          </p>

          <!-- Services tags -->
          <div class="flex flex-wrap gap-2 mb-5">
            <?php
            $tags = ['Brick + Hardscapes', 'Landscape Design', '3D Renderings', 'Outdoor Lighting'];
            foreach ( $tags as $tag ) : ?>
            <span class="text-[10px] font-medium text-[#2f3133] bg-[#f5f2ef] border border-[#e6e3df] rounded-full px-3 py-1">
              <?php echo $tag; ?>
            </span>
            <?php endforeach; ?>
          </div>

          <!-- CTAs -->
          <div class="flex items-center gap-3 pt-4 border-t border-[#e6e3df]">
            <a href="/contact"
               class="flex-1 text-center text-[11px] font-bold tracking-[.08em] uppercase text-white py-3 rounded-lg hover:opacity-85 transition-opacity"
               style="background:linear-gradient(135deg,#8a6a45,#7a5c38);">
              Free Estimate
            </a>
            <a href="<?php echo esc_url( $loc['maps_link'] ); ?>"
               target="_blank" rel="noopener noreferrer"
               class="flex-1 text-center text-[11px] font-bold tracking-[.08em] uppercase text-[#0b0b0c] py-3 rounded-lg border border-[#d8d4ce] hover:border-[#8a6a45] hover:text-[#8a6a45] transition-colors">
              Open in Google Maps
            </a>
          </div>
        </div>

      </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>


<!-- ════════════════════════════════════════════════
     SERVICE AREA MAP — Full width
     ════════════════════════════════════════════════ -->
<section class="bg-[#f5f2ef] border-t border-[#e6e3df] py-16">
  <div class="max-w-[1280px] mx-auto px-6 md:px-10">
    <div class="text-center mb-10 ev-reveal">
      <span class="block text-[10px] font-semibold tracking-[.22em] uppercase text-[#8a6a45] mb-3">Full Coverage</span>
      <h2 class="font-['Playfair_Display'] text-[clamp(22px,3vw,34px)] font-bold text-[#0b0b0c]">
        Our Complete Service Area
      </h2>
      <p class="mt-3 text-[13px] text-[#7a7f85] font-light">
        Clinton Township, MI — serving a 30-mile radius across Southeast Michigan
      </p>
    </div>

    <!-- Full width map centered on Clinton Township -->
    <div class="rounded-2xl overflow-hidden border border-[#e6e3df] shadow-sm ev-reveal">
      <iframe
        title="Everridge Landscape Service Area — Clinton Township, MI"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d188730.!2d-83.0338!3d42.5884!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8824e8a9b0c1d2e3%3A0xfedcba0987654321!2sClinton+Township%2C+MI!5e0!3m2!1sen!2sus!4v1700000000007"
        width="100%"
        height="480"
        style="border:0;display:block;"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade">
      </iframe>
      <?php
      /*
       * REPLACE the src above with your actual embed URL:
       * 1. Go to maps.google.com → search "Clinton Township, MI"
       * 2. Click Share → Embed a map → Copy Link → paste the src URL here
       */
      ?>
    </div>

    <!-- City quick links below map -->
    <div class="mt-8 flex flex-wrap items-center justify-center gap-2">
      <?php foreach ( $locations as $loc ) : ?>
      <a href="#location-<?php echo sanitize_title( $loc['name'] ); ?>"
         class="text-[12px] font-medium text-[#2f3133] bg-white border border-[#e6e3df] rounded-full px-4 py-2 hover:border-[#8a6a45] hover:text-[#8a6a45] transition-colors">
        <?php echo esc_html( $loc['name'] ); ?>, MI
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ════════════════════════════════════════════════
     CTA
     ════════════════════════════════════════════════ -->
<section class="bg-[#0b0b0c] py-20">
  <div class="max-w-[760px] mx-auto px-6 md:px-10 text-center">
    <span class="block text-[10px] font-semibold tracking-[.22em] uppercase text-[#8a6a45] mb-4">Don't See Your City?</span>
    <h2 class="font-['Playfair_Display'] text-[clamp(26px,4vw,44px)] font-bold text-[#e6e3df] leading-[1.15] mb-5">
      We May Still Serve<br>
      <em class="italic text-[#8a6a45]">Your Area.</em>
    </h2>
    <p class="text-[14px] font-light text-[rgba(230,227,223,.52)] leading-relaxed mb-10 max-w-lg mx-auto">
      If your property is within 30 miles of Clinton Township, MI, we likely serve your area. Reach out and we'll confirm during your free consultation.
    </p>
    <div class="flex flex-wrap gap-3 justify-center">
      <a href="/contact"
         class="inline-flex items-center gap-2 text-[12px] font-bold tracking-[.1em] uppercase text-white px-9 py-4 rounded-md hover:opacity-85 transition-opacity"
         style="background:linear-gradient(135deg,#8a6a45,#7a5c38);">
        Request a Free Estimate
        <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
      </a>
      <a href="tel:+17705550192"
         class="inline-flex items-center gap-2 text-[12px] font-medium tracking-[.04em] text-[rgba(230,227,223,.75)] border border-[rgba(230,227,223,.2)] px-8 py-4 rounded-md hover:text-[#8a6a45] hover:border-[#8a6a45] transition-colors">
        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor"><path fill-rule="evenodd" d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z" clip-rule="evenodd"/></svg>
        (770) 555-0192
      </a>
    </div>
  </div>
</section>


<!-- ════════════════════════════════════════════════
     JAVASCRIPT — scroll reveal + smooth anchor scroll
     ════════════════════════════════════════════════ -->
<script>
(function () {

  /* ── SCROLL REVEAL ─────────────────────── */
  const ro = new IntersectionObserver(entries => {
    entries.forEach(e => {
      if (!e.isIntersecting) return;
      e.target.classList.add('opacity-100', 'translate-y-0');
      e.target.classList.remove('opacity-0', 'translate-y-7');
      ro.unobserve(e.target);
    });
  }, { threshold: 0.1 });

  document.querySelectorAll('.ev-reveal').forEach(el => {
    el.classList.add('opacity-0', 'translate-y-7', 'transition-all', 'duration-700');
    ro.observe(el);
  });

  /* ── SMOOTH ANCHOR SCROLL (city quick links) ── */
  document.querySelectorAll('a[href^="#location-"]').forEach(a => {
    a.addEventListener('click', e => {
      e.preventDefault();
      const target = document.querySelector(a.getAttribute('href'));
      if (target) {
        const offset = 120; // account for sticky navbar
        const top = target.getBoundingClientRect().top + window.scrollY - offset;
        window.scrollTo({ top, behavior: 'smooth' });
      }
    });
  });

})();
</script>

<?php get_footer(); ?>