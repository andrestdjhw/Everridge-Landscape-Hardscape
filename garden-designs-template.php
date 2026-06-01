<?php
/**
 * Template Name: Service - Garden Design & 3D Renderings
 *
 * @package everridge
 */
get_header(); ?>

<?php
/* ── 3D Renderings — IMAGE URLS ────────────────────────────────────────────────────
 * Paste URLs from: WP Admin → Media → click image → Copy URL to clipboard
 * ─────────────────────────────────────────────────────────────────────────── */

// Hero background image
$threed_hero_img = '/wp-content/uploads/2026/04/Landscaping3DModeling-.png'; // e.g. /wp-content/uploads/2026/05/threed-hero.jpg

// Process step images — one per step
$threed_process_imgs = [
  '/wp-content/uploads/2026/05/Process1-scaled.jpg', // image 1
  '/wp-content/uploads/2026/05/3DRenderingHero-scaled.jpg', // image 2
  '/wp-content/uploads/2026/05/Process2-scaled.jpg', // image 3
  '/wp-content/uploads/2026/05/PremiunHardscapeHero-scaled.jpg', // image 4
];
?>

<?php
/* ── Data ─────────────────────────────────────────────────────────────────── */
$process_steps = [
  [
    'num'   => '01',
    'title' => 'On-Site Consultation',
    'copy'  => 'We visit your property, photograph every angle, take precise measurements, and walk the space with you. We discuss your vision, aesthetic preferences, material options, and budget. This conversation becomes the brief that drives the entire design.',
    'ph'    => 'Founder photographing the property exterior — measuring and documenting every detail',
  ],
  [
    'num'   => '02',
    'title' => '3D Design in Progress',
    'copy'  => 'Back in the studio, we build a photorealistic 3D model of your property. We place every paver, plant, lighting fixture, and structural element. We render the project from multiple angles — front elevation, aerial view, eye level — so you see the full scope of the transformation.',
    'ph'    => 'Design workstation — 3D model of property being built in software, multiple angles visible',
  ],
  [
    'num'   => '03',
    'title' => 'Your Approved Rendering',
    'copy'  => 'You receive the completed rendering along with a detailed proposal. This is not a rough sketch. It is a photorealistic visualization with exact materials, colors, layouts, and proportions. You can request revisions — swap paver colors, adjust planting density, move structural elements — until the design is exactly right. You sign off before we order a single material.',
    'ph'    => 'Final 3D rendering — photorealistic, multiple angles, exact materials and colors visible',
  ],
  [
    'num'   => '04',
    'title' => 'The Completed Project',
    'copy'  => 'Our crew builds exactly what you approved. Same materials. Same layout. Same proportions. When the project is complete, you can stand at the same spot you saw in the rendering and compare. The match is intentional. It is the entire point of the process.',
    'ph'    => 'Completed project at golden hour — same angle as the rendering, perfect match',
  ],
];

/* ── RENDERING vs REALITY — 4 proyectos, URL por cada uno ───────────────────────────
 * Para cada proyecto pega DOS URLs:
 *   'img_r' → la imagen del RENDERING (3D)
 *   'img_c' → la imagen del proyecto COMPLETED (terminado)
 * Si dejas una vacía, se muestra el placeholder con el texto de 'ph_r' / 'ph_c'.
 * ─────────────────────────────────────────────────────────────────────────── */
$render_pairs = [
  [
    'label' => 'Paver Patio & Seating Wall',
    'city'  => 'Birmingham, MI',
    'img_r' => '/wp-content/uploads/2026/05/BackyardTransformationCompleted.png', // URL rendering
    'img_c' => '/wp-content/uploads/2026/05/BackyardTransformation3DRenderings.jpg', // URL completed
    'ph_r'  => '3D Rendering — paver patio with seating wall and plantings, front-elevation angle',
    'ph_c'  => 'Completed project — same angle, exact match to rendering',
  ],
  [
    'label' => 'Front Yard Landscape',
    'city'  => 'Bloomfield Hills, MI',
    'img_r' => '/wp-content/uploads/2026/05/FrontYard3DCompleted.png', // URL rendering
    'img_c' => '/wp-content/uploads/2026/05/FontYard3DRendering.jpg', // URL completed
    'ph_r'  => '3D Rendering — full front yard redesign, layered plantings, new walkway',
    'ph_c'  => 'Completed project — same angle, same plantings, same walkway',
  ],
  [
    'label' => 'Retaining Wall',
    'city'  => 'Troy, MI',
    'img_r' => '/wp-content/uploads/2026/05/RetainingWallCompleted.png', // URL rendering
    'img_c' => '/wp-content/uploads/2026/05/RetainingWall3dRendering.jpg', // URL completed
    'ph_r'  => '3D Rendering — backyard with retaining wall, patio, and garden beds, aerial angle',
    'ph_c'  => 'Completed backyard — same aerial angle, retaining wall and patio delivered',
  ],
  [
    'label' => 'Landscape Transformation',
    'city'  => 'Rochester Hills, MI',
    'img_r' => '/wp-content/uploads/2026/05/LandscapeTransformationCompleted.png', // URL rendering
    'img_c' => '/wp-content/uploads/2026/05/LandscapeTransformation3D.jpg', // URL completed
    'ph_r'  => '3D Rendering — nighttime lighting simulation, accent lights and pathway illumination',
    'ph_c'  => 'Completed property at night — lighting matches simulation exactly',
  ],
];

$whats_included = [
  [ 'title' => 'On-Site Consultation',        'copy' => 'A dedicated site visit where we photograph, measure, and document your property. We interview you about your vision, lifestyle, and aesthetic goals. No cost. No obligation.' ],
  [ 'title' => 'Photorealistic 3D Rendering', 'copy' => 'A full photorealistic visualization of your transformed property from multiple angles. Not a sketch, not a mood board — a rendering that shows exactly what will be built.' ],
  [ 'title' => 'Plant & Material Selection',  'copy' => 'We select every plant, paver, stone, and material with purpose. Every choice is justified by climate compatibility, visual appeal, long-term performance, and your stated preferences.' ],
  [ 'title' => 'Design Revisions',            'copy' => 'You can request changes to the rendering — paver colors, plant species, layout adjustments — until the design reflects exactly what you want. We do not charge per revision.' ],
  [ 'title' => 'Material Specifications',     'copy' => 'A complete material specification document listing every product, manufacturer, SKU, and quantity used in the design. This becomes part of your proposal and your project record.' ],
  [ 'title' => 'Construction Coordination',   'copy' => 'We manage the entire project from design approval to final installation. The same team that designed your project builds it. No handoffs. No miscommunication. No surprises.' ],
];

$faqs = [
  [
    'q' => 'How long does the 3D design process take?',
    'a' => 'From the initial site consultation to delivery of your first 3D rendering, the typical timeline is 5 to 10 business days. Larger or more complex projects may take up to 2 weeks. We will give you a specific timeline at the consultation. Revisions to the rendering are typically turned around in 2 to 3 business days.',
  ],
  [
    'q' => 'Can I request changes to the rendering after I see it?',
    'a' => 'Absolutely. The rendering is a design tool, not a take-it-or-leave-it presentation. We expect revisions. Change the paver color, swap out a plant species, move the fire pit, adjust the wall height — we revise until the design is exactly what you want. We do not start construction until you approve the final design in writing.',
  ],
  [
    'q' => 'Is there a separate fee for the 3D design service?',
    'a' => 'For project proposals, the 3D rendering is included as part of our standard process at no additional cost. For clients who want a standalone design consultation and rendering without committing to construction, we charge a design fee that is fully credited toward the project if you proceed with us. Ask about our current design fee schedule during your consultation.',
  ],
  [
    'q' => 'What software do you use for the 3D renderings?',
    'a' => 'We use professional landscape and architectural visualization software that produces photorealistic output. The renderings include accurate material textures, lighting conditions, and plant representations at mature size. We show you what the project will look like at day one and can also show you what it will look like as plants mature over 3 to 5 years.',
  ],
  [
    'q' => 'Can you show me the project at different times of day?',
    'a' => 'Yes. We can render your project in daylight, at dusk, and at night. Night renderings are particularly powerful for lighting projects — you see exactly how the accent lights, pathway lights, and architectural uplighting will perform before any fixtures are installed. Many clients find the nighttime rendering to be the most compelling version.',
  ],
  [
    'q' => 'Do the completed projects always match the rendering?',
    'a' => 'Yes — that is the entire purpose of the process. We build exactly what was approved in the rendering. The same pavers, the same plant species, the same layout, the same proportions. Our rendering-to-reality pairs on this page are not cherry-picked showcase examples. Every Everridge project is built to match its rendering. That is the standard.',
  ],
];
?>


<!-- ════════════════════════════════════════════════
     PAGE HERO
     ════════════════════════════════════════════════ -->
<section class="relative overflow-hidden -mt-[104px]" style="min-height:88vh;">
  <div class="absolute inset-0 bg-[#141018]"
       style="background-size:cover;background-position:center;<?php if($threed_hero_img) echo 'background-image:url('.esc_url($threed_hero_img).');'; ?>">
    <?php if ( ! $threed_hero_img ) : ?>
    <div class="absolute inset-0 flex items-center justify-center text-[#5a5868] text-xs tracking-widest uppercase text-center px-10">
      Hero — photorealistic 3D rendering vs completed project
    </div>
    <?php endif; ?>
  </div>
  <div class="absolute inset-0" style="background:linear-gradient(105deg,rgba(0,0,0,.78) 0%,rgba(0,0,0,.48) 55%,rgba(0,0,0,.18) 100%);"></div>

  <div class="relative z-10 max-w-[1280px] mx-auto px-6 md:px-10 flex flex-col justify-center" style="min-height:88vh;padding-top:140px;padding-bottom:80px;">
    <div class="max-w-2xl">
      <div class="flex items-center gap-3 mb-5">
        <span class="block w-9 h-px bg-[#8a6a45]"></span>
        <span class="text-[10px] font-semibold tracking-[.22em] uppercase text-[#ecebea]">Garden Design & 3D Renderings</span>
      </div>
      <h1 class="font-['Articulat_CF'] text-[clamp(38px,6vw,72px)] font-bold text-[#e6e3df] leading-[1.06] tracking-tight mb-5">
        Your Vision,<br>
        <span class="text-[#dcc6ad]">Realized in 3D.</span>
      </h1>
      <p class="text-[clamp(15px,1.8vw,18px)] font-light text-[rgba(240,236,230,.65)] leading-relaxed max-w-xl mb-10">
        We do not ask you to imagine the result. We show it to you. Every Everridge project begins with a photorealistic 3D rendering of your property, fully transformed.
      </p>
      <div class="flex flex-wrap gap-3">
        <a href="/contact"
           class="inline-flex items-center gap-2 text-[12px] font-bold tracking-[.1em] uppercase text-[#0f0f0f] px-7 py-4 hover:opacity-85 transition-opacity"
           style="background:linear-gradient(135deg,#8a6a45,#7a5c38);">
          Schedule a Design Consultation
          <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
        </a>
        <a href="#ev-gallery"
           class="inline-flex items-center gap-2 text-[12px] font-medium tracking-[.08em] uppercase text-[rgba(240,236,230,.75)] border border-[rgba(240,236,230,.2)] px-7 py-4 hover:text-[#8a6a45] hover:border-[#8a6a45] transition-colors">
          See Rendering Examples
        </a>
      </div>
    </div>
  </div>
</section>


<!-- ════════════════════════════════════════════════
     DIFFERENTIATOR STATEMENT
     ════════════════════════════════════════════════ -->
<div class="bg-[#1a1814] border-b border-[#2a2520]">
  <div class="max-w-[1280px] mx-auto px-6 md:px-10 py-10">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
      <?php
      $facts = [
        [ 'stat' => '100%',   'label' => 'of projects receive a 3D rendering before construction begins' ],
        [ 'stat' => '0',      'label' => 'surprises at project completion — what you approve is what gets built' ],
        [ 'stat' => 'Only',   'label' => 'contractor in the area combining 3D design, hardscape, landscape, and lighting' ],
      ];
      foreach ( $facts as $f ) : ?>
      <div class="ev-reveal">
        <div class="font-['Articulat_CF'] text-[clamp(36px,4vw,52px)] font-bold text-[#8a6a45] leading-none mb-2"><?php echo $f['stat']; ?></div>
        <p class="text-[13px] font-light text-[rgba(240,236,230,.55)] leading-relaxed max-w-[220px] mx-auto"><?php echo $f['label']; ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>


<!-- ════════════════════════════════════════════════
     SECTION 1 — HOW THE PROCESS WORKS
     ════════════════════════════════════════════════ -->
<section class="bg-white py-24">
  <div class="max-w-[1280px] mx-auto px-6 md:px-10">

    <div class="text-center mb-16 ev-reveal">
      <span class="block text-[10px] font-semibold tracking-[.22em] uppercase text-[#8a6a45] mb-3">The Process</span>
      <h2 class="font-['Articulat_CF'] text-[clamp(28px,3.5vw,44px)] font-bold text-[#0b0b0c] leading-[1.12] mb-5">
        How the 3D Design<br>
        <span class="text-[#8a6a45]">Process Works</span>
      </h2>
      <p class="text-[15px] text-[#7a7f85] font-light max-w-2xl mx-auto leading-relaxed">
        The number one reason homeowners hesitate to invest in outdoor projects is the fear of aesthetic regret — the worry that the final result will not match their expectations. Our 3D process eliminates that fear entirely.
      </p>
    </div>

    <div class="relative">
      <div class="hidden lg:block absolute top-[72px] left-[12.5%] right-[12.5%] h-px bg-[#e8e2da] z-0"></div>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
        <?php foreach ( $process_steps as $i => $step ) : ?>
        <div class="ev-reveal text-center relative" style="transition-delay:<?php echo $i * 120; ?>ms;">
          <div class="relative mb-6">
            <!-- FIX: relative wrapper + absolute img + else for placeholder -->
            <div class="overflow-hidden border border-[#e6e3df] aspect-[4/3] bg-[#e8e4de] relative mb-4">
              <?php if(!empty($threed_process_imgs[$i])):?>
              <img src="<?php echo esc_url($threed_process_imgs[$i]);?>" class="absolute inset-0 w-full h-full object-cover" loading="lazy" alt="">
              <?php else:?>
              <div class="absolute inset-0 flex items-center justify-center text-[10px] text-[#7a7f85] text-center px-4"><?php echo $step['ph']; ?></div>
              <?php endif;?>
            </div>
            <div class="relative z-10 w-14 h-14 bg-white border-2 border-[#d8d4ce] flex items-center justify-center mx-auto shadow-sm transition-all duration-500 ev-step-dot" data-step="<?php echo $i; ?>">
              <span class="font-['Articulat_CF'] text-[15px] font-bold text-[#8a6a45]"><?php echo $step['num']; ?></span>
            </div>
          </div>
          <h3 class="font-['Articulat_CF'] text-[17px] font-bold text-[#0b0b0c] mb-2"><?php echo $step['title']; ?></h3>
          <p class="text-[13px] font-light text-[#7a7f85] leading-[1.7]"><?php echo $step['copy']; ?></p>
        </div>
        <?php endforeach; ?>
      </div>
    </div>

    <div class="mt-20 ev-reveal">
      <div class="bg-[#f5f2ef] border border-[#e6e3df] p-10 md:p-14 grid grid-cols-1 md:grid-cols-[1fr_1fr] gap-10 items-center">
        <div>
          <span class="block text-[10px] font-semibold tracking-[.22em] uppercase text-[#8a6a45] mb-4">Why This Matters</span>
          <h3 class="font-['Articulat_CF'] text-[clamp(22px,3vw,32px)] font-bold text-[#0b0b0c] leading-[1.2] mb-5">
            You Approve the Design<br>
            Before We Touch Your Property.
          </h3>
          <p class="text-[14px] font-light text-[#7a7f85] leading-[1.8] mb-4">This process exists because we believe you should never have to wonder how your project will turn out. With Everridge, you see what you are getting. You approve what you are getting. And then we build exactly what you approved.</p>
          <p class="text-[14px] font-light text-[#7a7f85] leading-[1.8]">No guesswork. No anxiety. No surprises at the final reveal. Just certainty — from the moment you see your first rendering to the moment we hand you the property.</p>
        </div>
        <div class="relative">
          <svg class="absolute -top-3 -left-2 w-10 h-10 text-[#8a6a45] opacity-25" fill="currentColor" viewBox="0 0 24 24">
            <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
          </svg>
          <blockquote class="font-['Articulat_CF'] italic text-[18px] text-[#2f3133] leading-[1.65] relative z-10 pl-4">
            "We can request changes, swap materials, adjust layouts, and approve the final design before any construction begins. You see exactly what you are getting — from multiple angles — before a single paver is placed."
          </blockquote>
          <div class="mt-5 pl-4 flex items-center gap-2">
            <div class="w-1 h-8 bg-[#8a6a45] flex-shrink-0"></div>
            <div>
              <div class="text-[12px] font-semibold text-[#0b0b0c]">The Everridge Design Standard</div>
              <div class="text-[11px] text-[#7a7f85]">Applied to every project, every time</div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>


<!-- ════════════════════════════════════════════════
     SECTION 2 — RENDERING VS REALITY GALLERY (4 proyectos, URL por cada uno)
     ════════════════════════════════════════════════ -->
<section id="ev-gallery" class="bg-[#f5f2ef] border-t border-b border-[#e6e3df] py-24">
  <div class="max-w-[1280px] mx-auto px-6 md:px-10">

    <div class="text-center mb-14 ev-reveal">
      <span class="block text-[10px] font-semibold tracking-[.22em] uppercase text-[#8a6a45] mb-3">Proof</span>
      <h2 class="font-['Articulat_CF'] text-[clamp(26px,3.5vw,42px)] font-bold text-[#0b0b0c] leading-[1.15]">
        Rendering vs. Reality.<br>
        <span class="text-[#8a6a45]">See the Match for Yourself.</span>
      </h2>
      <p class="mt-4 text-[14px] text-[#7a7f85] font-light">Each pair shows the 3D rendering on the left and the completed project on the right — same angle, same perspective.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      <?php foreach ( $render_pairs as $i => $pair ) : ?>
      <div class="ev-reveal" style="transition-delay:<?php echo ($i%2)*100; ?>ms;">

        <div class="ev-rv-pair relative group" data-pair="<?php echo $i; ?>">

          <!-- Desktop: drag slider -->
          <div class="hidden md:block ev-ba relative overflow-hidden border border-[#e6e3df] cursor-col-resize select-none" data-ba="<?php echo $i; ?>">
            <!-- Rendering (base) -->
            <div class="aspect-[16/9] bg-[#dcd8e0] relative overflow-hidden">
              <?php if(!empty($pair['img_r'])):?>
              <img src="<?php echo esc_url($pair['img_r']);?>" class="absolute inset-0 w-full h-full object-cover" loading="lazy" alt="3D Rendering - <?php echo esc_attr($pair['label']); ?>">
              <?php else:?>
              <div class="absolute inset-0 flex items-center justify-center text-[10px] text-[#7a7f85] text-center px-8"><?php echo $pair['ph_r']; ?></div>
              <?php endif;?>
            </div>
            <!-- Completed (clipped) -->
            <div class="ev-ba-after absolute inset-0 bg-[#c8d4b8]"
                 style="clip-path:inset(0 50% 0 0);background-size:cover;background-position:center;<?php if(!empty($pair['img_c'])) echo 'background-image:url('.esc_url($pair['img_c']).');'; ?>">
              <?php if(empty($pair['img_c'])):?>
              <div class="absolute inset-0 flex items-center justify-center text-[10px] text-[#7a9a7a] text-center px-8"><?php echo $pair['ph_c']; ?></div>
              <?php endif;?>
            </div>
            <!-- Handle -->
            <div class="ev-ba-handle absolute top-0 bottom-0 w-0.5 bg-white left-1/2 -translate-x-1/2 flex items-center justify-center pointer-events-none">
              <div class="w-9 h-9 bg-white flex items-center justify-center shadow-[0_2px_12px_rgba(0,0,0,.2)]">
                <svg class="w-4 h-4 text-[#0b0b0c]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15M15.75 9L12 5.25 8.25 9"/>
                </svg>
              </div>
            </div>
            <span class="absolute top-3 left-3 bg-[rgba(0,0,0,.5)] backdrop-blur-sm text-[9px] font-bold tracking-[.12em] uppercase text-white px-2.5 py-1">Rendering</span>
            <span class="absolute top-3 right-3 bg-[rgba(0,0,0,.5)] backdrop-blur-sm text-[9px] font-bold tracking-[.12em] uppercase text-white px-2.5 py-1">Completed</span>
          </div>

          <!-- Mobile: stacked side-by-side -->
          <div class="md:hidden grid grid-cols-2 gap-2 overflow-hidden border border-[#e6e3df]">
            <div class="aspect-[4/3] bg-[#dcd8e0] relative overflow-hidden">
              <?php if(!empty($pair['img_r'])):?>
              <img src="<?php echo esc_url($pair['img_r']);?>" class="absolute inset-0 w-full h-full object-cover" loading="lazy" alt="3D Rendering - <?php echo esc_attr($pair['label']); ?>">
              <?php else:?>
              <div class="absolute inset-0 flex items-center justify-center text-[9px] text-[#7a7f85] text-center px-3"><?php echo $pair['ph_r']; ?></div>
              <?php endif;?>
              <span class="absolute top-2 left-2 bg-[rgba(0,0,0,.5)] text-[8px] font-bold text-white px-2 py-0.5">Rendering</span>
            </div>
            <div class="aspect-[4/3] bg-[#c8d4b8] relative overflow-hidden">
              <?php if(!empty($pair['img_c'])):?>
              <img src="<?php echo esc_url($pair['img_c']);?>" class="absolute inset-0 w-full h-full object-cover" loading="lazy" alt="Completed - <?php echo esc_attr($pair['label']); ?>">
              <?php else:?>
              <div class="absolute inset-0 flex items-center justify-center text-[9px] text-[#7a9a7a] text-center px-3"><?php echo $pair['ph_c']; ?></div>
              <?php endif;?>
              <span class="absolute top-2 right-2 bg-[rgba(0,0,0,.5)] text-[8px] font-bold text-white px-2 py-0.5">Completed</span>
            </div>
          </div>

        </div>

        <div class="flex items-center justify-between mt-3 px-1">
          <span class="font-['Articulat_CF'] text-[15px] font-semibold text-[#0b0b0c]"><?php echo $pair['label']; ?></span>
          <span class="text-[11px] text-[#7a7f85]"><?php echo $pair['city']; ?></span>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>


<!-- ════════════════════════════════════════════════
     SECTION 3 — WHAT IS INCLUDED
     ════════════════════════════════════════════════ -->
<section class="bg-white py-24">
  <div class="max-w-[1280px] mx-auto px-6 md:px-10">

    <div class="text-center mb-14 ev-reveal">
      <span class="block text-[10px] font-semibold tracking-[.22em] uppercase text-[#8a6a45] mb-3">The Service</span>
      <h2 class="font-['Articulat_CF'] text-[clamp(26px,3.5vw,42px)] font-bold text-[#0b0b0c] leading-[1.15]">
        What Is Included in<br>
        <span class="text-[#8a6a45]">Every Garden Design Package</span>
      </h2>
      <p class="mt-4 text-[15px] text-[#7a7f85] font-light max-w-2xl mx-auto leading-relaxed">
        This is not a basic sketch on a napkin. It is a professional design service backed by years of horticultural knowledge and construction experience.
      </p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
      <?php foreach ( $whats_included as $i => $item ) : ?>
      <div class="ev-reveal group bg-[#f5f2ef] border border-[#e6e3df] p-7 hover:bg-white hover:border-[#8a6a45] hover:shadow-[0_8px_32px_rgba(138,106,69,.1)] transition-all duration-300"
           style="transition-delay:<?php echo $i * 80; ?>ms;">
        <div class="w-9 h-9 bg-white border border-[#d8d4ce] flex items-center justify-center mb-5 group-hover:bg-[#fdf8ee] group-hover:border-[#e8d8a0] transition-colors">
          <span class="font-['Articulat_CF'] text-[13px] font-bold text-[#8a6a45]"><?php printf('%02d', $i + 1); ?></span>
        </div>
        <h3 class="font-['Articulat_CF'] text-[17px] font-bold text-[#0b0b0c] mb-3 leading-snug"><?php echo $item['title']; ?></h3>
        <p class="text-[13px] font-light text-[#7a7f85] leading-[1.75]"><?php echo $item['copy']; ?></p>
      </div>
      <?php endforeach; ?>
    </div>

    <div class="mt-10 ev-reveal">
      <div class="bg-[#1a1814] p-8 md:p-10 grid grid-cols-1 md:grid-cols-[1fr_auto] gap-6 items-center">
        <div>
          <div class="text-[10px] font-semibold tracking-[.22em] uppercase text-[#8a6a45] mb-3">Included With Every Project</div>
          <h3 class="font-['Articulat_CF'] text-[clamp(20px,2.5vw,28px)] font-bold text-[#e6e3df] leading-[1.2] mb-3">
            The 3D Rendering Is Not an Add-On.<br>
            It Is How We Work.
          </h3>
          <p class="text-[14px] font-light text-[rgba(240,236,230,.6)] leading-relaxed max-w-xl">
            For every project that moves forward with Everridge, the 3D rendering process is included at no additional cost. Every single project, regardless of scope or budget, begins with a rendering. This is not a premium option. It is our standard.
          </p>
        </div>
        <a href="/contact"
           class="flex-shrink-0 inline-flex items-center gap-2 text-[12px] font-bold tracking-[.1em] uppercase text-[#0f0f0f] px-7 py-4 hover:opacity-85 transition-opacity whitespace-nowrap"
           style="background:linear-gradient(135deg,#8a6a45,#7a5c38);">
          Start Your Design
          <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
        </a>
      </div>
    </div>

  </div>
</section>


<!-- ════════════════════════════════════════════════
     SECTION 4A — TESTIMONIAL
     ════════════════════════════════════════════════ -->
<section class="bg-[#f5f2ef] border-t border-[#e6e3df] py-24">
  <div class="max-w-[860px] mx-auto px-6 md:px-10 ev-reveal">
    <div class="bg-white border border-[#e6e3df] p-10 md:p-14 text-center relative overflow-hidden">
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
      <p class="font-['Articulat_CF'] italic text-[clamp(16px,2.5vw,21px)] text-[#0b0b0c] leading-[1.65] mb-8 relative z-10">
        "I had been putting off this project for three years because I was scared of committing to something I couldn't visualize. When Hernan sent me the 3D rendering, I sat at my computer and just stared at it. It was exactly what I had described, but better. I could see the pavers, the plantings, the lighting — everything. I signed the proposal that afternoon. The finished project is a perfect match to the rendering. That rendering is the reason I hired them."
      </p>
      <div class="flex items-center justify-center gap-4">
        <div class="w-12 h-12 bg-[#e8e8e0] flex items-center justify-center flex-shrink-0">
          <span class="font-['Articulat_CF'] text-[15px] font-bold text-[#6a6870]">TW</span>
        </div>
        <div class="text-left">
          <div class="font-semibold text-[14px] text-[#0b0b0c]">Thomas W.</div>
          <div class="text-[11px] text-[#7a7f85]">Full Backyard Transformation with 3D Rendering · Troy, MI</div>
        </div>
        <div class="ml-4 flex items-center gap-1.5 bg-[#f5f2ef] border border-[#e6e3df] px-3 py-1.5">
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
      <h2 class="font-['Articulat_CF'] text-[clamp(24px,3.5vw,38px)] font-bold text-[#0b0b0c] leading-[1.15]">
        Questions About the<br>
        <span class="text-[#8a6a45]">3D Design Process</span>
      </h2>
    </div>

    <div id="ev-faq" class="flex flex-col gap-3 ev-reveal">
      <?php foreach ( $faqs as $i => $faq ) : ?>
      <div class="ev-faq-item bg-[#f5f2ef] border border-[#e6e3df] overflow-hidden hover:border-[#8a6a45] transition-colors">
        <button class="ev-faq-btn w-full flex items-center justify-between gap-4 px-6 py-5 text-left"
                aria-expanded="<?php echo $i === 0 ? 'true' : 'false'; ?>">
          <span class="font-semibold text-[14px] text-[#0b0b0c] leading-snug"><?php echo $faq['q']; ?></span>
          <span class="ev-faq-icon flex-shrink-0 w-7 h-7 border border-[#d8d4ce] flex items-center justify-center transition-all duration-300 <?php echo $i === 0 ? 'bg-[#1a1814] border-[#1a1814]' : 'bg-white'; ?>">
            <svg class="w-3.5 h-3.5 transition-transform duration-300 <?php echo $i === 0 ? 'rotate-45 text-white' : 'text-[#7a7f85]'; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"/>
            </svg>
          </span>
        </button>
        <div class="ev-faq-body overflow-hidden transition-all duration-300" style="max-height:<?php echo $i === 0 ? '500px' : '0'; ?>;">
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
     JAVASCRIPT
     ════════════════════════════════════════════════ -->
<script>
(function () {

  /* ── GALLERY B&A DRAGS ─────────────────────────── */
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


  /* ── SCROLL REVEAL ─────────────────────────────── */
  const ro = new IntersectionObserver(entries => {
    entries.forEach(e => {
      if (!e.isIntersecting) return;
      e.target.classList.add('opacity-100','translate-y-0');
      e.target.classList.remove('opacity-0','translate-y-7');
      ro.unobserve(e.target);
    });
  }, { threshold: 0.1 });
  document.querySelectorAll('.ev-reveal').forEach(el => {
    el.classList.add('opacity-0','translate-y-7','transition-all','duration-700'); ro.observe(el);
  });


  /* ── PROCESS STEP DOT LIGHTS ───────────────────── */
  const stepDots = document.querySelectorAll('.ev-step-dot');
  const so = new IntersectionObserver(entries => {
    entries.forEach(e => {
      if (!e.isIntersecting) return;
      const i = e.target.dataset.step;
      if (stepDots[i]) {
        stepDots[i].style.borderColor = '#8a6a45';
        stepDots[i].style.background  = 'rgba(138,106,69,.08)';
        stepDots[i].style.boxShadow   = '0 0 0 5px rgba(138,106,69,.1)';
      }
      so.unobserve(e.target);
    });
  }, { threshold: 0.5 });
  document.querySelectorAll('[data-step]').forEach(s => so.observe(s));


  /* ── FAQ ACCORDION ─────────────────────────────── */
  document.querySelectorAll('.ev-faq-btn').forEach(btn => {
    btn.addEventListener('click', () => {
      const item   = btn.closest('.ev-faq-item');
      const body   = item.querySelector('.ev-faq-body');
      const icon   = item.querySelector('.ev-faq-icon');
      const svg    = icon.querySelector('svg');
      const isOpen = btn.getAttribute('aria-expanded') === 'true';

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