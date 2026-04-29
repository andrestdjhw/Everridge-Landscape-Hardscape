<?php
/**
 * Template Name: About
 *
 * @package everridge
 */
get_header(); ?>

<!-- ═══════════════════════════════════════════════════════════
     ABOUT PAGE — Built on Expertise. Driven by Precision.
     about-template.php
     ═══════════════════════════════════════════════════════════ -->

<!-- ════════════════════════════════════════════════
     PAGE HERO — Dark, full-width
     ════════════════════════════════════════════════ -->
<section class="relative overflow-hidden -mt-[68px] md:-mt-[106px]" style="min-height:52vh;">
  <!-- BG -->
  <div class="absolute inset-0 bg-[#0e140c]" style="background-size:cover;background-position:center;">
    {{-- Replace: background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/about-hero.jpg') --}}
    <div class="absolute inset-0 flex items-center justify-center text-[#3a3a34] text-xs tracking-widest uppercase">
      Hero image — team on a premium completed project site
    </div>
  </div>
  <div class="absolute inset-0" style="background:linear-gradient(to right,rgba(0,0,0,.72) 0%,rgba(0,0,0,.42) 60%,rgba(0,0,0,.18) 100%);"></div>

  <!-- Content -->
  <div class="relative z-10 max-w-[1280px] mx-auto px-6 md:px-10 flex flex-col justify-end pb-16 md:pb-20" style="min-height:52vh;padding-top:130px;">
    <div class="flex items-center gap-3 mb-4">
      <span class="block w-9 h-px bg-[#d4aa6a]"></span>
      <span class="text-[10px] font-semibold tracking-[.22em] uppercase text-[#d4aa6a]">About Everridge</span>
    </div>
    <h1 class="font-['Playfair_Display'] text-[clamp(36px,5.5vw,68px)] font-bold text-[#f0ece6] leading-[1.08] tracking-tight max-w-3xl">
      Built on Expertise.<br>
      <em class="italic text-[#d4aa6a]">Driven by Precision.</em>
    </h1>
    <p class="mt-5 text-[15px] font-light text-[rgba(240,236,230,.65)] max-w-xl leading-relaxed">
      17 years of hands-on experience. A design-and-build firm committed to transforming properties that demand more than average.
    </p>
  </div>
</section>


<!-- ════════════════════════════════════════════════
     SECTION 1 — THE EVERRIDGE STORY
     ════════════════════════════════════════════════ -->
<section class="bg-white py-24">
  <div class="max-w-[1280px] mx-auto px-6 md:px-10">

    <div class="grid grid-cols-1 lg:grid-cols-[1fr_420px] gap-16 lg:gap-24 items-start">

      <!-- Text -->
      <div class="ev-reveal-left">
        <span class="block text-[10px] font-semibold tracking-[.22em] uppercase text-[#d4aa6a] mb-4">Our Story</span>
        <h2 class="font-['Playfair_Display'] text-[clamp(28px,3.5vw,44px)] font-bold text-[#1a1814] leading-[1.12] mb-8">
          From the Ground Up.<br>
          <span class="text-[#d4aa6a]">Every Detail, Every Time.</span>
        </h2>

        <div class="space-y-5 text-[15px] font-light text-[#6a6560] leading-[1.8]">
          <p>
            Everridge Landscape & Hardscape was built on 17 years of hands-on experience in outdoor construction and design. Our founder, <strong class="font-semibold text-[#1a1814]">Hernan Chavarin</strong>, started working in the landscaping and hardscape industry in 2008, learning the craft from the ground up. Every aspect of the trade — from grading and drainage to paver installation, retaining wall construction, and garden design — was learned through years of physical work, problem solving, and dedication to getting every detail right.
          </p>
          <p>
            The company was formally established as an LLC in 2021, and in 2026 we made the decision to rebrand as Everridge Landscape & Hardscape. This was not just a name change. It was a commitment to the premium positioning that our work has always deserved. The quality of our execution, the precision of our installations, and the level of care we bring to every project had outgrown the identity of a small local contractor. <strong class="font-semibold text-[#1a1814]">Everridge represents who we are now:</strong> a design and build firm that transforms outdoor spaces for homeowners who expect more than average.
          </p>
          <p>
            Today, we operate from Clinton Township, Michigan with a team of 4 specialists who share the same obsession with quality. We serve homeowners across the Oakland-Macomb corridor — from Bloomfield Hills and Birmingham to Troy, Rochester Hills, Shelby Township, and Washington Township. Every project we take on, from a $5,000 seasonal installation to a $60,000 full property transformation, receives the same level of attention, the same premium materials, and the same commitment to exceeding expectations.
          </p>
        </div>

        <!-- Timeline -->
        <div class="mt-12 space-y-0">
          <?php
          $milestones = [
            [ 'year' => '2008', 'label' => 'Hernan begins in the industry', 'copy' => 'Learning every aspect of hardscape and landscape from the ground up.' ],
            [ 'year' => '2021', 'label' => 'Company established as LLC',    'copy' => 'Formally incorporated, growing a reputation for precision and quality.' ],
            [ 'year' => '2026', 'label' => 'Rebranded as Everridge',        'copy' => 'A premium identity to match the caliber of work we have always delivered.' ],
          ];
          foreach ( $milestones as $i => $m ) : ?>
          <div class="flex gap-5 <?php echo $i < count($milestones) - 1 ? 'pb-8' : ''; ?> relative">
            <!-- Line -->
            <?php if ( $i < count($milestones) - 1 ) : ?>
            <div class="absolute left-[19px] top-10 bottom-0 w-px bg-[#e8e2da]"></div>
            <?php endif; ?>
            <!-- Dot -->
            <div class="flex-shrink-0 w-10 h-10 rounded-full border-2 border-[#d4aa6a] bg-white flex items-center justify-center z-10">
              <div class="w-2 h-2 rounded-full bg-[#d4aa6a]"></div>
            </div>
            <!-- Content -->
            <div class="pt-1.5">
              <div class="flex items-center gap-3 mb-1">
                <span class="font-['Playfair_Display'] text-[13px] font-bold text-[#d4aa6a]"><?php echo $m['year']; ?></span>
                <span class="text-[13px] font-semibold text-[#1a1814]"><?php echo $m['label']; ?></span>
              </div>
              <p class="text-[13px] text-[#8a8680] leading-relaxed"><?php echo $m['copy']; ?></p>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- Founder image + stat card -->
      <div class="ev-reveal-right flex flex-col gap-5 lg:sticky lg:top-32">
        <!-- Founder photo -->
        <div class="relative rounded-2xl overflow-hidden border border-[#e8e2da]">
          <div class="aspect-[3/4] bg-[#e0ddd6] flex flex-col items-center justify-center text-[11px] text-[#b0aaa2] text-center px-8 gap-2">
            {{-- Replace with: <img src="<?php echo get_template_directory_uri(); ?>/assets/images/founder-hernan.jpg" class="absolute inset-0 w-full h-full object-cover" alt="Hernan Chavarin - Founder"> --}}
            <svg class="w-10 h-10 text-[#c8c0b4]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"/>
            </svg>
            <span>Hernan Chavarin — Founder<br>Professional portrait on a completed project site</span>
          </div>
          <!-- Name plate -->
          <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-[rgba(0,0,0,.7)] to-transparent px-6 pt-10 pb-6">
            <div class="font-['Playfair_Display'] text-lg font-bold text-[#f0ece6]">Hernan Chavarin</div>
            <div class="text-[11px] text-[#d4aa6a] tracking-[.1em] uppercase mt-0.5">Founder & Lead Designer</div>
          </div>
        </div>

        <!-- Quote card -->
        <div class="bg-[#f7f3ee] border border-[#e8e2da] rounded-xl p-6">
          <svg class="w-7 h-7 text-[#d4aa6a] mb-3 opacity-60" fill="currentColor" viewBox="0 0 24 24">
            <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
          </svg>
          <p class="font-['Playfair_Display'] italic text-[15px] text-[#4a4542] leading-[1.7]">
            "Every project we take on receives the same level of attention — whether it's a $5,000 installation or a $60,000 full transformation. Quality is not negotiable."
          </p>
          <div class="mt-4 pt-4 border-t border-[#e8e2da] flex items-center gap-3">
            <div class="w-8 h-8 rounded-full bg-[#d4aa6a] flex items-center justify-center flex-shrink-0">
              <span class="text-[11px] font-bold text-white">HC</span>
            </div>
            <div>
              <div class="text-[12px] font-semibold text-[#1a1814]">Hernan Chavarin</div>
              <div class="text-[10px] text-[#8a8680]">Founder, Everridge</div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- ════════════════════════════════════════════════
     SECTION 2 — WHAT MAKES US DIFFERENT
     ════════════════════════════════════════════════ -->
<section class="bg-[#f7f3ee] border-t border-b border-[#e8e2da] py-24">
  <div class="max-w-[1280px] mx-auto px-6 md:px-10">

    <div class="text-center mb-16 ev-reveal">
      <span class="block text-[10px] font-semibold tracking-[.22em] uppercase text-[#d4aa6a] mb-3">Our Difference</span>
      <h2 class="font-['Playfair_Display'] text-[clamp(28px,3.5vw,44px)] font-bold text-[#1a1814] leading-[1.15]">
        What Makes Us Different
      </h2>
      <p class="mt-4 text-[15px] text-[#6a6560] font-light max-w-2xl mx-auto leading-relaxed">
        We are the only company in the Macomb corridor that combines all four of these capabilities under one roof.
      </p>
    </div>

    <!-- Four differentiators -->
    <?php
    $diffs = [
      [
        'num'   => '01',
        'title' => 'Custom 3D Renderings',
        'copy'  => 'Before we break ground on any project, we create a photorealistic visualization of the finished result. You see your property transformed — from multiple angles — with the exact materials and layout we will use. This eliminates the anxiety every homeowner feels: the fear that the result won\'t match the expectation.',
        'icon'  => 'M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z M15 12a3 3 0 11-6 0 3 3 0 016 0z',
      ],
      [
        'num'   => '02',
        'title' => 'Premium Hardscape Installation',
        'copy'  => 'We use only top-tier pavers, natural stone, and commercial-grade materials. No cutting corners. No substitutions. Every hardscape installation is engineered for Michigan\'s freeze-thaw cycle and built to last 20+ years. The craftsmanship shows in every joint line and every leveled surface.',
        'icon'  => 'M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085',
      ],
      [
        'num'   => '03',
        'title' => 'Professional Garden Design',
        'copy'  => 'Landscape and garden design is not a secondary service for us — it is a core discipline. We design planting plans that consider seasonal color, mature size, soil conditions, and long-term maintenance. The result is a landscape that looks intentional, curated, and professionally maintained.',
        'icon'  => 'M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z',
      ],
      [
        'num'   => '04',
        'title' => 'Complete Outdoor Lighting',
        'copy'  => 'Outdoor lighting is the final layer of a premium property transformation. We design and install full lighting systems — accent lights on trees, pathway illumination, and architectural uplighting — that elevate the presence of your home after dark and add security, ambiance, and measurable value.',
        'icon'  => 'M12 3v1m0 16v1m-8-9H3m18 0h-1m-2.05-5.95l-.707.707M6.757 17.243l-.707.707m12.193 0l-.707-.707M6.757 6.757l-.707-.707M12 7a5 5 0 100 10A5 5 0 0012 7z',
      ],
    ];
    ?>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-16">
      <?php foreach ( $diffs as $i => $d ) : ?>
      <div class="ev-reveal group bg-white border border-[#e8e2da] rounded-2xl p-8 hover:border-[#d4aa6a] hover:shadow-[0_8px_40px_rgba(212,170,106,.1)] transition-all duration-300"
           style="transition-delay:<?php echo $i * 100; ?>ms;">
        <div class="flex items-start gap-5">
          <div class="flex-shrink-0 w-12 h-12 rounded-xl bg-[#f7f3ee] border border-[#e8e2da] flex items-center justify-center group-hover:bg-[#fdf8ee] group-hover:border-[#e8d8b0] transition-colors">
            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="#d4aa6a" stroke-width="1.6">
              <path stroke-linecap="round" stroke-linejoin="round" d="<?php echo $d['icon']; ?>"/>
            </svg>
          </div>
          <div>
            <div class="text-[10px] font-bold text-[#d4aa6a] tracking-[.15em] uppercase mb-1"><?php echo $d['num']; ?></div>
            <h3 class="font-['Playfair_Display'] text-[18px] font-bold text-[#1a1814] mb-3 leading-snug"><?php echo $d['title']; ?></h3>
            <p class="text-[13px] font-light text-[#6a6560] leading-[1.75]"><?php echo $d['copy']; ?></p>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

    <!-- 3D rendering proof image -->
    <div class="ev-reveal">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-px bg-[#e8e2da] rounded-2xl overflow-hidden border border-[#e8e2da]">
        <div class="bg-[#e0ddd6] aspect-video flex flex-col items-center justify-center text-[11px] text-[#b0aaa2] text-center px-10 gap-2">
          {{-- Replace: <img src="<?php echo get_template_directory_uri(); ?>/assets/images/rendering-proof.jpg" class="w-full h-full object-cover" alt="3D Rendering"> --}}
          <svg class="w-10 h-10 text-[#c8c0b4]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.2"><path stroke-linecap="round" stroke-linejoin="round" d="M9.75 3.104v5.714a2.25 2.25 0 01-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 014.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0112 15a9.065 9.065 0 00-6.23-.693L5 14.5m14.8.8l1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0112 21"/></svg>
          3D Rendering — photorealistic project visualization
        </div>
        <div class="bg-[#d4d0c8] aspect-video flex flex-col items-center justify-center text-[11px] text-[#b0aaa2] text-center px-10 gap-2">
          {{-- Replace: <img src="<?php echo get_template_directory_uri(); ?>/assets/images/completed-proof.jpg" class="w-full h-full object-cover" alt="Completed Project"> --}}
          <svg class="w-10 h-10 text-[#c8c0b4]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.2"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"/></svg>
          Completed project — same angle as the rendering above
        </div>
      </div>
      <p class="text-center text-[12px] text-[#8a8680] mt-4 italic">
        What you see in the rendering is what gets built. Same angle. Same materials. Same result.
      </p>
    </div>

  </div>
</section>


<!-- ════════════════════════════════════════════════
     SECTION 3 — MISSION
     ════════════════════════════════════════════════ -->
<section class="bg-white py-24">
  <div class="max-w-[860px] mx-auto px-6 md:px-10 text-center ev-reveal">
    <span class="block text-[10px] font-semibold tracking-[.22em] uppercase text-[#d4aa6a] mb-4">Our Mission</span>
    <h2 class="font-['Playfair_Display'] text-[clamp(26px,4vw,48px)] font-bold text-[#1a1814] leading-[1.15] mb-6">
      We Exist to Elevate<br>
      <em class="italic text-[#d4aa6a]">Every Property We Touch.</em>
    </h2>
    <!-- Decorative line -->
    <div class="flex items-center justify-center gap-4 mb-8">
      <span class="block w-16 h-px bg-[#e8e2da]"></span>
      <svg class="w-4 h-4 text-[#d4aa6a]" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
      <span class="block w-16 h-px bg-[#e8e2da]"></span>
    </div>
    <p class="text-[17px] font-light text-[#6a6560] leading-[1.85] max-w-2xl mx-auto">
      We design and build premium outdoor transformations for homeowners and properties that demand more than average. Every project begins with a custom 3D rendering, is built with premium materials, and is executed with the discipline and attention to detail that our clients' investments deserve.
    </p>
    <p class="mt-5 text-[17px] font-light text-[#6a6560] leading-[1.85] max-w-2xl mx-auto">
      We exist to elevate the presence, value, and pride of every property we touch.
    </p>
  </div>
</section>


<!-- ════════════════════════════════════════════════
     SECTION 4 — TRUST SIGNALS
     ════════════════════════════════════════════════ -->
<section class="bg-[#f7f3ee] border-t border-b border-[#e8e2da] py-24">
  <div class="max-w-[1280px] mx-auto px-6 md:px-10">

    <div class="text-center mb-16 ev-reveal">
      <span class="block text-[10px] font-semibold tracking-[.22em] uppercase text-[#d4aa6a] mb-3">Credentials</span>
      <h2 class="font-['Playfair_Display'] text-[clamp(26px,3.5vw,40px)] font-bold text-[#1a1814] leading-[1.15]">
        Why You Can Trust Everridge
      </h2>
    </div>

    <!-- Animated stat row -->
    <div class="grid grid-cols-2 md:grid-cols-4 gap-5 mb-16">
      <?php
      $stats = [
        [ 'value' => '17', 'suffix' => '+', 'label' => 'Years of Experience',     'sub' => 'Since 2008' ],
        [ 'value' => '500', 'suffix' => '+', 'label' => 'Projects Completed',     'sub' => 'Residential & commercial' ],
        [ 'value' => '5',  'suffix' => '★', 'label' => 'Star Rated on Angi',      'sub' => 'Verified reviews' ],
        [ 'value' => '4',  'suffix' => '',  'label' => 'Core Specialists',         'sub' => 'Dedicated team' ],
      ];
      ?>
      <?php foreach ( $stats as $i => $s ) : ?>
      <div class="ev-reveal bg-white border border-[#e8e2da] rounded-2xl p-8 text-center hover:shadow-md hover:-translate-y-0.5 transition-all duration-300"
           style="transition-delay:<?php echo $i * 80; ?>ms;">
        <div class="font-['Playfair_Display'] text-[clamp(36px,4vw,52px)] font-bold leading-none mb-2">
          <span class="ev-counter text-[#1a1814]" data-target="<?php echo $s['value']; ?>"><?php echo $s['value']; ?></span><span class="text-[#d4aa6a]"><?php echo $s['suffix']; ?></span>
        </div>
        <div class="text-[13px] font-semibold text-[#1a1814] mb-1"><?php echo $s['label']; ?></div>
        <div class="text-[11px] text-[#8a8680]"><?php echo $s['sub']; ?></div>
      </div>
      <?php endforeach; ?>
    </div>

    <!-- Trust badge grid -->
    <?php
    $trust_items = [
      [
        'icon'  => 'M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z',
        'title' => 'Licensed & Insured',
        'copy'  => 'Fully licensed in the State of Michigan with landscaping and agricultural licenses. General liability and workers compensation coverage protect your property from day one through final walkthrough.',
      ],
      [
        'icon'  => 'M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.562.562 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z',
        'title' => '5-Star Rated on Angi',
        'copy'  => 'Consistently rated 5 stars by verified homeowners on Angi. Our reviews reflect the same commitment to quality, communication, and clean job sites that defines every Everridge project.',
      ],
      [
        'icon'  => 'M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z',
        'title' => '17+ Years of Experience',
        'copy'  => 'Hernan Chavarin has been in the field since 2008. That hands-on experience means we understand drainage, soil conditions, frost lines, and material performance in ways that less experienced contractors simply do not.',
      ],
      [
        'icon'  => 'M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z',
        'title' => 'Residential & Commercial',
        'copy'  => 'We serve both residential homeowners and commercial property clients across Southeast Michigan. Whether it is a private residence in Birmingham or a commercial property in Troy, the standard of work never changes.',
      ],
      [
        'icon'  => 'M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z M15 12a3 3 0 11-6 0 3 3 0 016 0z',
        'title' => 'Free Consultations',
        'copy'  => 'Every project starts with a free, no-obligation on-site consultation. We come to your property, walk the space with you, listen to your vision, and assess the scope. There is no pressure and no cost.',
      ],
      [
        'icon'  => 'M6.429 9.75L2.25 12l4.179 2.25m0-4.5l5.571 3 5.571-3m-11.142 0L2.25 7.5 12 2.25l9.75 5.25-4.179 2.25m0 0L21.75 12l-4.179 2.25m0 0l4.179 2.25L12 21.75 2.25 16.5l4.179-2.25m11.142 0l-5.571 3-5.571-3',
        'title' => '3D Renderings Included',
        'copy'  => 'Every project includes a custom 3D rendering before construction begins. You approve the design before we touch your property. This is not a paid add-on. It is a standard part of how we work.',
      ],
    ];
    ?>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
      <?php foreach ( $trust_items as $i => $t ) : ?>
      <div class="ev-reveal bg-white border border-[#e8e2da] rounded-xl p-6 hover:border-[#d4aa6a] hover:shadow-[0_4px_24px_rgba(212,170,106,.08)] transition-all duration-300"
           style="transition-delay:<?php echo $i * 80; ?>ms;">
        <div class="w-10 h-10 rounded-lg bg-[#f7f3ee] border border-[#e8e2da] flex items-center justify-center mb-4">
          <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="#d4aa6a" stroke-width="1.6">
            <path stroke-linecap="round" stroke-linejoin="round" d="<?php echo $t['icon']; ?>"/>
          </svg>
        </div>
        <h3 class="font-['Playfair_Display'] text-[16px] font-bold text-[#1a1814] mb-2"><?php echo $t['title']; ?></h3>
        <p class="text-[13px] font-light text-[#6a6560] leading-[1.75]"><?php echo $t['copy']; ?></p>
      </div>
      <?php endforeach; ?>
    </div>

    <!-- License badge strip -->
    <div class="mt-14 ev-reveal">
      <div class="bg-white border border-[#e8e2da] rounded-xl px-8 py-5 flex flex-wrap items-center justify-between gap-6">
        <div class="flex items-center gap-3">
          <svg class="w-5 h-5 text-[#d4aa6a] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/></svg>
          <div>
            <div class="text-[11px] font-semibold text-[#1a1814]">Michigan Contractor License</div>
            <div class="text-[10px] text-[#8a8680]">Landscaping & Agricultural · GA Lic. #CN-204817</div>
          </div>
        </div>
        <div class="w-px h-8 bg-[#e8e2da] hidden md:block"></div>
        <div class="flex items-center gap-3">
          <svg class="w-5 h-5 text-[#d4aa6a] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z"/></svg>
          <div>
            <div class="text-[11px] font-semibold text-[#1a1814]">General Liability Insurance</div>
            <div class="text-[10px] text-[#8a8680]">Workers compensation · Full coverage</div>
          </div>
        </div>
        <div class="w-px h-8 bg-[#e8e2da] hidden md:block"></div>
        <div class="flex items-center gap-3">
          <svg class="w-5 h-5 text-[#d4aa6a] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6"><path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.562.562 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"/></svg>
          <div>
            <div class="text-[11px] font-semibold text-[#1a1814]">5-Star Rated on Angi</div>
            <div class="text-[10px] text-[#8a8680]">Verified homeowner reviews</div>
          </div>
        </div>
        <div class="w-px h-8 bg-[#e8e2da] hidden md:block"></div>
        <div class="text-[11px] text-[#8a8680] italic max-w-[200px]">
          Unilock / Techo-Bloc certification coming soon.
        </div>
      </div>
    </div>

  </div>
</section>


<!-- ════════════════════════════════════════════════
     SECTION 5 — CTA
     ════════════════════════════════════════════════ -->
<section class="relative overflow-hidden py-24 md:py-32">
  <!-- BG -->
  <div class="absolute inset-0 bg-[#0e140c]" style="background-size:cover;background-position:center;">
    {{-- Replace: background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/cta-about.jpg') --}}
    <div class="absolute inset-0 flex items-center justify-center text-[#2a2a24] text-xs tracking-widest uppercase">
      Premium completed project — golden hour hero shot
    </div>
  </div>
  <div class="absolute inset-0" style="background:rgba(0,0,0,.65);"></div>

  <div class="relative z-10 max-w-[720px] mx-auto px-6 md:px-10 text-center">
    <span class="block text-[10px] font-semibold tracking-[.22em] uppercase text-[#d4aa6a] mb-4">Work With Us</span>
    <h2 class="font-['Playfair_Display'] text-[clamp(28px,4.5vw,52px)] font-bold text-[#f0ece6] leading-[1.1] mb-5">
      Ready to Work With a Team<br>
      <em class="italic text-[#d4aa6a]">That Gets It Right?</em>
    </h2>
    <p class="text-[15px] font-light text-[rgba(240,236,230,.62)] leading-relaxed mb-10 max-w-lg mx-auto">
      Request a free consultation and see your project in 3D before we start. No pressure. No obligation. Just clarity about what is possible for your property.
    </p>

    <a href="tel:+17705550192"
       class="block font-['Playfair_Display'] font-bold text-[#d4aa6a] text-[clamp(26px,4vw,42px)] mb-9 hover:opacity-75 transition-opacity tracking-tight">
      (770) 555-0192
    </a>

    <div class="flex flex-wrap gap-3 justify-center">
      <a href="/contact"
         class="inline-flex items-center gap-2 text-[12px] font-bold tracking-[.1em] uppercase text-[#0f0f0f] px-9 py-4 rounded-md hover:opacity-85 transition-opacity"
         style="background:linear-gradient(135deg,#d4aa6a,#c4983e);">
        Request a Free Consultation
        <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
      </a>
      <a href="/our-work"
         class="inline-flex items-center gap-2 text-[12px] font-medium tracking-[.08em] uppercase text-[rgba(240,236,230,.75)] border border-[rgba(240,236,230,.2)] px-8 py-4 rounded-md hover:text-[#d4aa6a] hover:border-[#d4aa6a] transition-colors">
        See Our Work
      </a>
    </div>
  </div>
</section>


<!-- ════════════════════════════════════════════════
     JAVASCRIPT
     ════════════════════════════════════════════════ -->
<script>
(function () {

  /* ── SCROLL REVEAL ─────────────────────── */
  const ro = new IntersectionObserver(entries => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        e.target.classList.add('opacity-100', 'translate-y-0', 'translate-x-0');
        e.target.classList.remove('opacity-0', 'translate-y-7', '-translate-x-8', 'translate-x-8');
        ro.unobserve(e.target);
      }
    });
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


  /* ── COUNTER ANIMATION ─────────────────── */
  const counters = document.querySelectorAll('.ev-counter');
  const co = new IntersectionObserver(entries => {
    entries.forEach(e => {
      if (!e.isIntersecting) return;
      const el     = e.target;
      const target = parseInt(el.dataset.target, 10);
      const dur    = 1400;
      const step   = 16;
      const inc    = target / (dur / step);
      let cur      = 0;
      const tick   = setInterval(() => {
        cur += inc;
        if (cur >= target) { cur = target; clearInterval(tick); }
        el.textContent = Math.floor(cur);
      }, step);
      co.unobserve(el);
    });
  }, { threshold: 0.5 });
  counters.forEach(c => co.observe(c));

})();
</script>

<?php get_footer(); ?>