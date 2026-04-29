<?php
/**
 * Template Name: Service - Outdoor Lighting Systems
 *
 * @package everridge
 */
get_header(); ?>

<?php
$gallery_items = [
  [ 'label' => 'Architectural Uplighting', 'city' => 'Bloomfield Hills, MI', 'ph' => 'Home facade — warm architectural uplighting on stone columns and gable ends' ],
  [ 'label' => 'Tree Accent Lighting',     'city' => 'Birmingham, MI',       'ph' => 'Mature oak trees — dramatic uplighting from base, crown against night sky' ],
  [ 'label' => 'Pathway Illumination',     'city' => 'Troy, MI',             'ph' => 'Front walkway — brass pathway lights, warm white glow, leading to entry' ],
  [ 'label' => 'Patio Ambient Lighting',   'city' => 'Rochester Hills, MI',  'ph' => 'Paver patio at night — ambient glow from step lights and perimeter fixtures' ],
  [ 'label' => 'Garden Accent Lights',     'city' => 'Shelby Township, MI',  'ph' => 'Garden bed — premium brass fixture at plant base, directional beam' ],
  [ 'label' => 'Day vs Night Comparison',  'city' => 'Clinton Township, MI', 'ph' => 'Same property: daytime (left) vs nighttime fully lit (right). Same angle.' ],
];

$impact_pillars = [
  [ 'stat' => '15-20%', 'label' => 'Property Value Increase',    'copy' => 'Professional outdoor lighting consistently increases perceived property value by 15 to 20 percent — one of the highest-ROI exterior improvements a homeowner can make.',                                                                              'icon' => 'M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941' ],
  [ 'stat' => '4-6',    'label' => 'More Hours of Outdoor Use',  'copy' => 'A properly lit outdoor space extends usable living hours by 4 to 6 hours per day from late spring through fall. Your patio, garden, and walkway become inviting after dark — not just during daylight.',                                            'icon' => 'M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z' ],
  [ 'stat' => '80%',    'label' => 'Less Energy Than Halogen',   'copy' => 'Every system we install uses commercial-grade LED fixtures that consume up to 80% less energy than halogen alternatives. A full property system typically runs on the equivalent of two standard light bulbs. Monthly operating cost: under $10.',         'icon' => 'M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z' ],
  [ 'stat' => '360°',   'label' => 'Security Coverage',          'copy' => 'Strategically placed lighting eliminates dark zones around your property. A lit property is a deterrent. Motion-activated zones and perimeter illumination add an active security layer to an already beautiful system.',                              'icon' => 'M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z' ],
];

$light_types = [
  [ 'title' => 'Architectural Uplighting',   'copy' => 'Fixtures at the base of your home facade, columns, or structural features wash the architecture with warm light from below. Creates depth, dimension, and a street presence that makes your home visible and impressive after dark.',                                       'icon' => 'M2.25 12l8.954-8.955a1.126 1.126 0 011.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75' ],
  [ 'title' => 'Tree & Canopy Accent Lights', 'copy' => 'Uplights and moonlights positioned to illuminate mature trees from below and above. A lit canopy creates dramatic shadows on the ground and transforms your trees from daytime features into nighttime landmarks.',                                                         'icon' => 'M12 3v1m0 16v1m-8-9H3m18 0h-1m-2.05-5.95l-.707.707M6.757 17.243l-.707.707m12.193 0l-.707-.707M6.757 6.757l-.707-.707M12 7a5 5 0 100 10A5 5 0 0012 7z' ],
  [ 'title' => 'Pathway Illumination',        'copy' => 'Brass pathway lights installed along walkways, driveways, and garden paths. Provide safe navigation, define the geometry of your hardscape, and create a welcoming visual corridor from the street to your front door.',                                                       'icon' => 'M9 6.75V15m6-6v8.25m.503 3.498l4.875-2.437c.381-.19.622-.58.622-1.006V4.82c0-.836-.88-1.38-1.628-1.006l-3.869 1.934c-.317.159-.69.159-1.006 0L9.503 3.252a1.125 1.125 0 00-1.006 0L3.622 5.689C3.24 5.88 3 6.27 3 6.695V19.18c0 .836.88 1.38 1.628 1.006l3.869-1.934c.317-.159.69-.159 1.006 0l4.994 2.497c.317.158.69.158 1.006 0z' ],
  [ 'title' => 'Garden & Planting Bed Lights','copy' => 'Directional spotlights within planting beds highlight specimen plants, ornamental grasses, and seasonal color. The same garden that impresses during the day becomes a curated visual display at night.',                                                                    'icon' => 'M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25' ],
  [ 'title' => 'Patio & Step Lighting',       'copy' => 'Recessed step lights, wall-mounted fixtures, and low-voltage ambient lighting that extends your patio into an outdoor living room after dark. Every step is safe, every edge is defined, and the space glows with a warm, inviting ambiance.',                                'icon' => 'M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25z' ],
  [ 'title' => 'Smart Controls & Timers',     'copy' => 'Dusk-to-dawn photocell sensors, programmable timers, and smart zone controllers automate your entire system. Lights come on as the sun sets and turn off on schedule. No manual switches. No wasted energy.',                                                                'icon' => 'M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z' ],
];

$faqs = [
  [ 'q' => 'What type of lighting fixtures do you install?',             'a' => 'We install commercial-grade brass and aluminum LED fixtures from professional landscape lighting manufacturers including Kichler, FX Luminaire, and VOLT. Brass is our preferred material for ground-level fixtures — it develops a natural patina that blends with the landscape and outperforms plastic fixtures in Michigan climate by decades. We do not install hardware store products. The difference in light output, color temperature, and longevity is significant.' ],
  [ 'q' => 'How energy efficient are outdoor lighting systems?',         'a' => 'Extremely efficient. Every system uses LED lamps that consume 75 to 80 percent less energy than comparable halogen fixtures. A complete property lighting system covering the facade, trees, and pathways typically runs on 150 to 200 watts total — less than two standard light bulbs. With a dusk-to-dawn timer running 6 hours per night, the monthly energy cost for a full system is typically under $10.' ],
  [ 'q' => 'How long does a lighting installation take?',                'a' => 'Most residential installations are completed in one day. Larger properties or multi-zone systems with extensive wiring may take two days. There is no concrete work, no excavation, and no significant disruption to your landscaping. Fixture placement, wire routing, and transformer installation are all completed cleanly without damage to your existing plantings or hardscape.' ],
  [ 'q' => 'Do you handle all the wiring and electrical work?',          'a' => 'Yes. We handle the complete installation including low-voltage wire routing, transformer installation, and all fixture connections. Low-voltage landscape lighting operates on 12 volts and does not require a licensed electrician. The transformer connects to a standard exterior outlet. We handle everything from design to final testing.' ],
  [ 'q' => 'Can lighting be added to an existing hardscape or landscape?','a' => 'Yes, and this is one of our most common projects. Retrofit installations are completely feasible on existing patios, walkways, and established landscapes. We route low-voltage wire along existing edges, under mulch, and through planting beds without disturbing hardscape or root systems. If you have an existing patio or mature trees you want lit, we can design and install without modifying anything you already have.' ],
  [ 'q' => 'What maintenance does a lighting system require?',            'a' => 'Minimal. LED lamps have a rated lifespan of 50,000 hours — roughly 20+ years of nightly use. Annual maintenance involves cleaning fixture lenses, checking wire connections, adjusting fixture aim as plants mature, and replacing any failed bulbs. We offer an annual maintenance visit to keep your system performing at its best. Timer adjustments may be needed twice per year as daylight hours change.' ],
];
?>


<!-- ════════ PAGE HERO ════════ -->
<section class="relative overflow-hidden -mt-[104px]" style="min-height:100vh;">
  <div class="absolute inset-0 bg-[#080810]" style="background-size:cover;background-position:center;">
    {{-- Replace: background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/lighting-hero.jpg') --}}
    <div class="absolute inset-0 flex items-center justify-center text-[#2a2838] text-xs tracking-widest uppercase text-center px-10">
      Hero — stunning nighttime property: facade uplighting, tree accents, pathway illumination, patio ambient glow. Warm white tones. Emotional impact.
    </div>
  </div>
  <div class="absolute top-0 left-0 right-0 h-48 pointer-events-none" style="background:linear-gradient(to bottom,rgba(0,0,0,.85),transparent);"></div>
  <div class="absolute bottom-0 left-0 right-0 h-64 pointer-events-none" style="background:linear-gradient(to top,rgba(0,0,0,.85),transparent);"></div>
  <div class="absolute inset-0 pointer-events-none" style="background:rgba(0,0,0,.35);"></div>

  <div class="relative z-10 max-w-[1280px] mx-auto px-6 md:px-10 flex flex-col justify-center" style="min-height:100vh;padding-top:140px;padding-bottom:80px;">
    <div class="max-w-2xl">
      <div class="flex items-center gap-3 mb-6">
        <span class="block w-9 h-px bg-[#d4aa6a]"></span>
        <span class="text-[10px] font-semibold tracking-[.22em] uppercase text-[#d4aa6a]">Outdoor Lighting Systems</span>
      </div>
      <h1 class="font-['Playfair_Display'] text-[clamp(38px,6vw,74px)] font-bold text-[#f0ece6] leading-[1.05] tracking-tight mb-6">
        Illuminate Your<br>
        <em class="italic text-[#d4aa6a]">Outdoor Living.</em>
      </h1>
      <p class="text-[clamp(15px,1.8vw,18px)] font-light text-[rgba(240,236,230,.65)] leading-relaxed max-w-xl mb-3">
        Professional landscape lighting design and installation that transforms your property after dark.
      </p>
      <p class="text-[14px] font-light text-[rgba(240,236,230,.42)] leading-relaxed max-w-lg mb-10">
        Security, ambiance, and visual impact — in one system designed specifically for your property.
      </p>
      <div class="flex flex-wrap gap-3">
        <a href="/contact" class="inline-flex items-center gap-2 text-[12px] font-bold tracking-[.1em] uppercase text-[#0f0f0f] px-7 py-4 rounded-md hover:opacity-85 transition-opacity" style="background:linear-gradient(135deg,#d4aa6a,#c4983e);">
          Schedule a Lighting Consultation
          <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
        </a>
        <a href="#ev-impact" class="inline-flex items-center gap-2 text-[12px] font-medium tracking-[.08em] uppercase text-[rgba(240,236,230,.7)] border border-[rgba(240,236,230,.18)] px-7 py-4 rounded-md hover:text-[#d4aa6a] hover:border-[#d4aa6a] transition-colors">
          Why Lighting Matters
        </a>
      </div>
    </div>
    <div class="absolute bottom-12 right-6 md:right-10 hidden lg:flex flex-col gap-3">
      <?php foreach ( [['LED','Commercial-grade fixtures'],['80%','Less energy than halogen'],['20yr','Fixture lifespan']] as $s ) : ?>
      <div class="bg-[rgba(8,8,16,.8)] backdrop-blur-md border border-[rgba(212,170,106,.2)] rounded-xl px-5 py-3 text-right">
        <div class="font-['Playfair_Display'] text-[22px] font-bold text-[#d4aa6a] leading-none"><?php echo $s[0]; ?></div>
        <div class="text-[10px] text-[rgba(240,236,230,.38)] mt-1 tracking-[.04em]"><?php echo $s[1]; ?></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  <div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 opacity-30">
    <span class="text-[9px] tracking-[.2em] uppercase text-white">Scroll</span>
    <div class="w-px h-8 bg-[#d4aa6a] animate-pulse"></div>
  </div>
</section>


<!-- ════════ SECTION 1 — WHAT WE INSTALL ════════ -->
<section class="bg-white py-24">
  <div class="max-w-[1280px] mx-auto px-6 md:px-10">
    <div class="grid grid-cols-1 lg:grid-cols-[1fr_420px] gap-16 items-start">

      <!-- Text -->
      <div class="ev-reveal-left">
        <span class="block text-[10px] font-semibold tracking-[.22em] uppercase text-[#d4aa6a] mb-4">What We Install</span>
        <h2 class="font-['Playfair_Display'] text-[clamp(28px,3.5vw,44px)] font-bold text-[#1a1814] leading-[1.12] mb-7">
          Lighting Is a Design Discipline.<br>
          <span class="text-[#d4aa6a]">We Treat It That Way.</span>
        </h2>
        <div class="space-y-5 text-[15px] font-light text-[#6a6560] leading-[1.8]">
          <p>Everridge designs and installs complete outdoor lighting systems for residential properties across Southeast Michigan. Our services include landscape lighting design, professional installation, <strong class="font-semibold text-[#1a1814]">accent lighting for trees and garden features</strong>, pathway illumination, architectural uplighting for home facades, and energy-efficient LED systems built for Michigan's climate.</p>
          <p>We approach lighting as a design discipline, not an afterthought. Every lighting plan is custom designed to complement your property's architecture, landscaping, and hardscape. <strong class="font-semibold text-[#1a1814]">We consider sight lines from the street, from the front door, and from inside the home looking out.</strong> The goal is not just to add light — it is to create a visual experience that transforms how your property looks and feels after the sun goes down.</p>
          <p>Lighting is also the service that elevates everything else we do. A paver patio looks good during the day. At night, with the right lighting, <strong class="font-semibold text-[#1a1814]">it becomes an outdoor living room.</strong> A garden looks beautiful in sunlight. Under carefully placed accent lights, it becomes a work of art. Lighting is the visual signature that separates an ordinary property from an extraordinary one.</p>
        </div>
        <div class="mt-8 flex items-start gap-4 bg-[#f7f3ee] border border-[#e8e2da] rounded-xl p-5">
          <div class="w-10 h-10 rounded-lg bg-white border border-[#e0dad2] flex items-center justify-center flex-shrink-0">
            <svg class="w-5 h-5 text-[#d4aa6a]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6"><path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.562.562 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"/></svg>
          </div>
          <div>
            <div class="text-[12px] font-semibold text-[#1a1814] mb-1">Commercial-Grade Fixtures Only</div>
            <p class="text-[12px] font-light text-[#6a6560] leading-relaxed">We work exclusively with professional brass and aluminum fixtures from Kichler, FX Luminaire, and VOLT. No hardware store products. The difference in light quality, color temperature, and 20-year performance is significant.</p>
          </div>
        </div>
      </div>

      <!-- Day / Night drag slider -->
      <div class="ev-reveal-right flex flex-col gap-4 lg:sticky lg:top-32">
        <p class="text-[11px] text-[#8a8680] text-center">Drag to reveal the nighttime transformation</p>
        <div class="ev-ba relative overflow-hidden rounded-2xl border border-[#e8e2da] cursor-col-resize select-none">
          <div class="aspect-[4/3] bg-[#d8e0d0] flex items-center justify-center text-[10px] text-[#b0aaa2] text-center px-6">
            {{-- Replace: <img src="<?php echo get_template_directory_uri(); ?>/assets/images/property-day.jpg" class="absolute inset-0 w-full h-full object-cover" loading="lazy"> --}}
            Property daytime — before lighting
          </div>
          <div class="ev-ba-after absolute inset-0 bg-[#0c0c18] flex items-center justify-center text-[10px] text-[#4a4868] text-center px-6" style="clip-path:inset(0 50% 0 0);background-size:cover;background-position:center;">
            {{-- Replace: <img src="<?php echo get_template_directory_uri(); ?>/assets/images/property-night.jpg" class="absolute inset-0 w-full h-full object-cover" loading="lazy"> --}}
            Same property at night — full system active
          </div>
          <div class="ev-ba-handle absolute top-0 bottom-0 w-0.5 bg-white left-1/2 -translate-x-1/2 flex items-center justify-center pointer-events-none">
            <div class="w-9 h-9 rounded-full bg-white flex items-center justify-center shadow-[0_2px_12px_rgba(0,0,0,.25)]">
              <svg class="w-4 h-4 text-[#1a1814]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15M15.75 9L12 5.25 8.25 9"/></svg>
            </div>
          </div>
          <span class="absolute top-3 left-3 bg-[rgba(0,0,0,.45)] backdrop-blur-sm text-[9px] font-bold tracking-widest uppercase text-white px-2.5 py-1 rounded-full">Day</span>
          <span class="absolute top-3 right-3 bg-[rgba(0,0,0,.45)] backdrop-blur-sm text-[9px] font-bold tracking-widest uppercase text-[#d4aa6a] px-2.5 py-1 rounded-full">Night</span>
        </div>
        <div class="bg-[#0f0f18] border border-[#1e1e2a] rounded-xl p-5">
          <p class="font-['Playfair_Display'] italic text-[13px] text-[rgba(240,236,230,.6)] leading-[1.7]">
            "A patio looks good during the day. At night, with the right lighting, it becomes an outdoor living room."
          </p>
          <div class="mt-3 text-[10px] text-[#4a4a5a] tracking-[.05em]">— Hernan Chavarin, Founder</div>
        </div>
      </div>
    </div>

    <!-- Light types grid -->
    <div class="mt-20">
      <div class="text-center mb-10 ev-reveal">
        <span class="block text-[10px] font-semibold tracking-[.22em] uppercase text-[#d4aa6a] mb-3">System Components</span>
        <h3 class="font-['Playfair_Display'] text-[clamp(22px,3vw,34px)] font-bold text-[#1a1814]">Every Element of a Complete System</h3>
      </div>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
        <?php foreach ( $light_types as $i => $lt ) : ?>
        <div class="ev-reveal group bg-[#f7f3ee] border border-[#e8e2da] rounded-2xl p-7 hover:bg-white hover:border-[#d4aa6a] hover:shadow-[0_8px_32px_rgba(212,170,106,.1)] transition-all duration-300" style="transition-delay:<?php echo $i * 80; ?>ms;">
          <div class="w-10 h-10 rounded-xl bg-white border border-[#e0dad2] flex items-center justify-center mb-5 group-hover:bg-[#0f0f18] group-hover:border-[#1e1e2a] transition-all duration-300">
            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="#d4aa6a" stroke-width="1.6"><path stroke-linecap="round" stroke-linejoin="round" d="<?php echo $lt['icon']; ?>"/></svg>
          </div>
          <h3 class="font-['Playfair_Display'] text-[17px] font-bold text-[#1a1814] mb-3 leading-snug"><?php echo $lt['title']; ?></h3>
          <p class="text-[13px] font-light text-[#6a6560] leading-[1.75]"><?php echo $lt['copy']; ?></p>
        </div>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- Nighttime gallery -->
    <div class="mt-16">
      <div class="text-center mb-10 ev-reveal">
        <h3 class="font-['Playfair_Display'] text-[clamp(22px,2.8vw,34px)] font-bold text-[#1a1814]">Lighting in Action</h3>
      </div>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
        <?php foreach ( $gallery_items as $i => $g ) : ?>
        <div class="ev-reveal group relative overflow-hidden rounded-xl border border-[#e8e2da] bg-[#0c0c18]"
             style="transition-delay:<?php echo $i * 80; ?>ms;aspect-ratio:<?php echo ($i === 0 || $i === 5) ? '16/9' : '4/3'; ?>">
          {{-- Replace: <img src="<?php echo get_template_directory_uri(); ?>/assets/images/lighting-<?php echo $i+1; ?>.jpg" class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" loading="lazy"> --}}
          <div class="absolute inset-0 flex items-center justify-center text-[10px] text-[#3a3a58] text-center px-6 transition-transform duration-500 group-hover:scale-105"><?php echo $g['ph']; ?></div>
          <div class="absolute inset-0 bg-gradient-to-t from-[rgba(0,0,0,.7)] via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute bottom-0 left-0 right-0 p-4 translate-y-2 group-hover:translate-y-0 opacity-0 group-hover:opacity-100 transition-all duration-300">
            <div class="text-[13px] font-semibold text-white"><?php echo $g['label']; ?></div>
            <div class="text-[11px] text-[rgba(255,255,255,.55)] mt-0.5"><?php echo $g['city']; ?></div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>


<!-- ════════ SECTION 2 — THE IMPACT ════════ -->
<section id="ev-impact" class="bg-[#0f0f18] py-24">
  <div class="max-w-[1280px] mx-auto px-6 md:px-10">
    <div class="text-center mb-16 ev-reveal">
      <span class="block text-[10px] font-semibold tracking-[.22em] uppercase text-[#d4aa6a] mb-3">The Investment Case</span>
      <h2 class="font-['Playfair_Display'] text-[clamp(26px,3.5vw,44px)] font-bold text-[#f0ece6] leading-[1.15]">
        Lighting Is Not an Expense.<br>
        <span class="text-[#d4aa6a]">It Is an Investment.</span>
      </h2>
      <p class="mt-4 text-[15px] text-[rgba(240,236,230,.45)] font-light max-w-2xl mx-auto leading-relaxed">
        The right outdoor lighting system delivers measurable returns: higher property value, extended outdoor living hours, reduced energy costs, and a property that makes an impression every single night.
      </p>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 mb-10">
      <?php foreach ( $impact_pillars as $i => $p ) : ?>
      <div class="ev-reveal group border border-[#1e1e2a] rounded-2xl p-8 hover:border-[rgba(212,170,106,.3)] hover:bg-[#14141e] transition-all duration-300"
           style="background:#131320;transition-delay:<?php echo $i * 100; ?>ms;">
        <div class="flex items-start gap-5 mb-5">
          <div class="w-11 h-11 rounded-xl bg-[#0c0c18] border border-[#1e1e2a] flex items-center justify-center flex-shrink-0 group-hover:border-[rgba(212,170,106,.3)] transition-colors">
            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="#d4aa6a" stroke-width="1.6"><path stroke-linecap="round" stroke-linejoin="round" d="<?php echo $p['icon']; ?>"/></svg>
          </div>
          <div>
            <div class="font-['Playfair_Display'] text-[clamp(26px,3vw,36px)] font-bold text-[#d4aa6a] leading-none mb-1"><?php echo $p['stat']; ?></div>
            <div class="text-[11px] font-semibold tracking-[.08em] uppercase text-[rgba(240,236,230,.4)]"><?php echo $p['label']; ?></div>
          </div>
        </div>
        <p class="text-[13px] font-light text-[rgba(240,236,230,.5)] leading-[1.75]"><?php echo $p['copy']; ?></p>
      </div>
      <?php endforeach; ?>
    </div>
    <!-- Retrofit pitch -->
    <div class="ev-reveal border border-[rgba(212,170,106,.2)] rounded-2xl p-8 md:p-10 grid grid-cols-1 md:grid-cols-[1fr_auto] gap-6 items-center" style="background:linear-gradient(135deg,#141420 0%,#1a1428 100%);">
      <div>
        <div class="text-[10px] font-semibold tracking-[.22em] uppercase text-[#d4aa6a] mb-3">Pairs Perfectly With Any Existing Hardscape</div>
        <h3 class="font-['Playfair_Display'] text-[clamp(20px,2.5vw,28px)] font-bold text-[#f0ece6] leading-[1.2] mb-3">
          Already Have a Patio or Garden?<br>
          Lighting Makes It 10x More Impressive.
        </h3>
        <p class="text-[14px] font-light text-[rgba(240,236,230,.5)] leading-relaxed max-w-xl">
          We retrofit complete lighting systems to existing installations without touching hardscape or disturbing landscaping. If you have a patio, mature trees, or an established garden you want lit, we can design and install a full system around it.
        </p>
      </div>
      <a href="/contact" class="flex-shrink-0 inline-flex items-center gap-2 text-[12px] font-bold tracking-[.1em] uppercase text-[#0f0f0f] px-7 py-4 rounded-md hover:opacity-85 transition-opacity whitespace-nowrap" style="background:linear-gradient(135deg,#d4aa6a,#c4983e);">
        Add Lighting to My Property
        <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
      </a>
    </div>
  </div>
</section>


<!-- ════════ SECTION 3A — TESTIMONIAL ════════ -->
<section class="bg-white py-24">
  <div class="max-w-[860px] mx-auto px-6 md:px-10 ev-reveal">
    <div class="bg-[#0f0f18] border border-[#1e1e2a] rounded-2xl p-10 md:p-14 text-center relative overflow-hidden">
      <div class="absolute top-0 left-1/2 -translate-x-1/2 w-64 h-px" style="background:linear-gradient(90deg,transparent,#d4aa6a,transparent);"></div>
      <div class="absolute -top-16 left-1/2 -translate-x-1/2 w-48 h-48 rounded-full blur-3xl opacity-10" style="background:#d4aa6a;"></div>
      <div class="flex justify-center gap-1 mb-6 relative z-10">
        <?php for ( $s = 0; $s < 5; $s++ ) : ?>
        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="#d4aa6a"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
        <?php endfor; ?>
      </div>
      <p class="font-['Playfair_Display'] italic text-[clamp(16px,2.5vw,21px)] text-[rgba(240,236,230,.85)] leading-[1.65] mb-8 relative z-10">
        "I've had the patio for two years. The lighting went in last fall. I can tell you without hesitation that the lighting changed everything. I come home every night and it genuinely surprises me. It looks like a hotel. My wife went from 'is it really worth it?' to 'why didn't we do this sooner?' The whole neighborhood slows down to look. Hernan designed the system perfectly."
      </p>
      <div class="flex items-center justify-center gap-4 relative z-10">
        <div class="w-12 h-12 rounded-full border border-[#2a2a38] flex items-center justify-center" style="background:#131320;">
          <span class="font-['Playfair_Display'] text-[15px] font-bold text-[#d4aa6a]">RB</span>
        </div>
        <div class="text-left">
          <div class="font-semibold text-[14px] text-[#f0ece6]">Robert B.</div>
          <div class="text-[11px] text-[rgba(240,236,230,.3)] mt-0.5">Full Property Lighting System · Bloomfield Hills, MI</div>
        </div>
        <div class="ml-4 flex items-center gap-1.5 border border-[#2a2a38] rounded-full px-3 py-1.5" style="background:#131320;">
          <svg class="w-4 h-4" viewBox="0 0 24 24" fill="#4a4a5a"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/></svg>
          <span class="text-[10px] font-medium" style="color:#4a4a5a;">Google Review</span>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ════════ SECTION 3B — FAQ ════════ -->
<section class="bg-[#f7f3ee] border-t border-[#e8e2da] py-24">
  <div class="max-w-[800px] mx-auto px-6 md:px-10">
    <div class="text-center mb-14 ev-reveal">
      <span class="block text-[10px] font-semibold tracking-[.22em] uppercase text-[#d4aa6a] mb-3">FAQ</span>
      <h2 class="font-['Playfair_Display'] text-[clamp(24px,3.5vw,38px)] font-bold text-[#1a1814] leading-[1.15]">
        Questions About<br>
        <span class="text-[#d4aa6a]">Outdoor Lighting Systems</span>
      </h2>
    </div>
    <div id="ev-faq" class="flex flex-col gap-3 ev-reveal">
      <?php foreach ( $faqs as $i => $faq ) : ?>
      <div class="ev-faq-item bg-white border border-[#e8e2da] rounded-xl overflow-hidden hover:border-[#d4aa6a] transition-colors">
        <button class="ev-faq-btn w-full flex items-center justify-between gap-4 px-6 py-5 text-left" aria-expanded="<?php echo $i === 0 ? 'true' : 'false'; ?>">
          <span class="font-semibold text-[14px] text-[#1a1814] leading-snug"><?php echo $faq['q']; ?></span>
          <span class="ev-faq-icon flex-shrink-0 w-7 h-7 rounded-full border border-[#e0dad2] flex items-center justify-center transition-all duration-300 <?php echo $i === 0 ? 'bg-[#1a1814] border-[#1a1814]' : 'bg-[#f7f3ee]'; ?>">
            <svg class="w-3.5 h-3.5 transition-transform duration-300 <?php echo $i === 0 ? 'rotate-45 text-white' : 'text-[#8a8680]'; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"/></svg>
          </span>
        </button>
        <div class="ev-faq-body overflow-hidden transition-all duration-300" style="max-height:<?php echo $i === 0 ? '500px' : '0'; ?>;">
          <div class="px-6 pb-5 pt-1"><p class="text-[13px] font-light text-[#6a6560] leading-[1.8]"><?php echo $faq['a']; ?></p></div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ════════ SECTION 3C — CTA ════════ -->
<section class="relative overflow-hidden py-24 md:py-32">
  <div class="absolute inset-0 bg-[#060610]" style="background-size:cover;background-position:center;background-attachment:fixed;">
    {{-- Replace: background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/lighting-cta.jpg') --}}
    <div class="absolute inset-0 flex items-center justify-center text-[#1a1a2a] text-xs tracking-widest uppercase">Most dramatic nighttime property — architectural uplighting, tree accents, pathway glow</div>
  </div>
  <div class="absolute bottom-0 left-1/2 -translate-x-1/2 w-96 h-64 blur-[80px] opacity-15 pointer-events-none" style="background:radial-gradient(ellipse,#c9a96e 0%,transparent 70%);"></div>
  <div class="absolute inset-0" style="background:rgba(0,0,0,.72);"></div>
  <div class="relative z-10 max-w-[720px] mx-auto px-6 md:px-10 text-center">
    <span class="block text-[10px] font-semibold tracking-[.22em] uppercase text-[#d4aa6a] mb-4">See Your Property at Night</span>
    <h2 class="font-['Playfair_Display'] text-[clamp(28px,5vw,52px)] font-bold text-[#f0ece6] leading-[1.1] mb-5">
      Ready to See What Your<br>
      <em class="italic text-[#d4aa6a]">Property Can Look Like?</em>
    </h2>
    <p class="text-[15px] font-light text-[rgba(240,236,230,.52)] leading-relaxed mb-10 max-w-lg mx-auto">
      Schedule a free lighting consultation. We walk your property at dusk, assess your architecture and landscaping, and design a custom system that makes your home look like it belongs in a magazine — every night.
    </p>
    <a href="tel:+17705550192" class="block font-['Playfair_Display'] font-bold text-[#d4aa6a] text-[clamp(24px,4vw,40px)] mb-9 hover:opacity-75 transition-opacity">(770) 555-0192</a>
    <div class="flex flex-wrap gap-3 justify-center">
      <a href="/contact" class="inline-flex items-center gap-2 text-[12px] font-bold tracking-[.1em] uppercase text-[#0f0f0f] px-9 py-4 rounded-md hover:opacity-85 transition-opacity" style="background:linear-gradient(135deg,#d4aa6a,#c4983e);">
        Schedule a Lighting Consultation
        <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
      </a>
      <a href="/our-work" class="inline-flex items-center gap-2 text-[12px] font-medium tracking-[.08em] uppercase text-[rgba(240,236,230,.7)] border border-[rgba(240,236,230,.18)] px-8 py-4 rounded-md hover:text-[#d4aa6a] hover:border-[#d4aa6a] transition-colors">
        See Lighting Projects
      </a>
    </div>
  </div>
</section>


<!-- ════════ JAVASCRIPT ════════ -->
<script>
(function () {
  document.querySelectorAll('.ev-ba').forEach(wrap => {
    const after = wrap.querySelector('.ev-ba-after');
    const handle = wrap.querySelector('.ev-ba-handle');
    let drag = false;
    const setPos = x => {
      const r = wrap.getBoundingClientRect();
      const pct = Math.min(Math.max((x - r.left) / r.width, 0), 1) * 100;
      after.style.clipPath = `inset(0 ${100 - pct}% 0 0)`;
      handle.style.left = pct + '%';
    };
    wrap.addEventListener('mousedown', e => { drag = true; setPos(e.clientX); });
    wrap.addEventListener('touchstart', e => { drag = true; setPos(e.touches[0].clientX); }, { passive: true });
    window.addEventListener('mousemove', e => { if (drag) setPos(e.clientX); });
    window.addEventListener('touchmove', e => { if (drag) setPos(e.touches[0].clientX); }, { passive: true });
    window.addEventListener('mouseup', () => drag = false);
    window.addEventListener('touchend', () => drag = false);
  });

  const ro = new IntersectionObserver(entries => {
    entries.forEach(e => {
      if (!e.isIntersecting) return;
      e.target.classList.add('opacity-100','translate-y-0','translate-x-0');
      e.target.classList.remove('opacity-0','translate-y-7','-translate-x-8','translate-x-8');
      ro.unobserve(e.target);
    });
  }, { threshold: 0.1 });
  document.querySelectorAll('.ev-reveal').forEach(el => { el.classList.add('opacity-0','translate-y-7','transition-all','duration-700'); ro.observe(el); });
  document.querySelectorAll('.ev-reveal-left').forEach(el => { el.classList.add('opacity-0','-translate-x-8','transition-all','duration-700'); ro.observe(el); });
  document.querySelectorAll('.ev-reveal-right').forEach(el => { el.classList.add('opacity-0','translate-x-8','transition-all','duration-700'); ro.observe(el); });

  document.querySelectorAll('.ev-faq-btn').forEach(btn => {
    btn.addEventListener('click', () => {
      const item = btn.closest('.ev-faq-item');
      const body = item.querySelector('.ev-faq-body');
      const icon = item.querySelector('.ev-faq-icon');
      const svg  = icon.querySelector('svg');
      const isOpen = btn.getAttribute('aria-expanded') === 'true';
      document.querySelectorAll('.ev-faq-item').forEach(i => {
        i.querySelector('.ev-faq-btn').setAttribute('aria-expanded','false');
        i.querySelector('.ev-faq-body').style.maxHeight = '0';
        const ic = i.querySelector('.ev-faq-icon'); const s = ic.querySelector('svg');
        ic.classList.remove('bg-[#1a1814]','border-[#1a1814]'); ic.classList.add('bg-[#f7f3ee]');
        s.classList.remove('rotate-45','text-white'); s.classList.add('text-[#8a8680]');
      });
      if (!isOpen) {
        btn.setAttribute('aria-expanded','true');
        body.style.maxHeight = body.scrollHeight + 'px';
        icon.classList.add('bg-[#1a1814]','border-[#1a1814]'); icon.classList.remove('bg-[#f7f3ee]');
        svg.classList.add('rotate-45','text-white'); svg.classList.remove('text-[#8a8680]');
      }
    });
  });
})();
</script>

<?php get_footer(); ?>