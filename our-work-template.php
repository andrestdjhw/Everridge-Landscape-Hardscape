<?php
/**
 * Template Name: Our Work
 *
 * @package everridge
 */
get_header(); ?>

<?php
/* ── Project data ─────────────────────────────────────────────────────────── */
$projects = [
  [
    'id'        => 1,
    'category'  => 'hardscape',
    'cat_label' => 'Brick + Hardscapes',
    'title'     => 'Premium Paver Patio',
    'city'      => 'Birmingham, MI',
    'desc'      => 'Full backyard paver patio with custom border pattern, polymeric sand finish, and integrated seating wall. Designed to complement the home\'s architecture and extend outdoor living space.',
    'materials' => 'Unilock Beacon Hill Flagstone · Polymeric sand · Concrete edging',
    'has_ba'    => true,
    'size'      => 'tall',   // tall | wide | normal
    'ph_before' => 'Before — overgrown backyard with cracked concrete',
    'ph_after'  => 'After — premium paver patio, seating wall, clean lines',
    'ph_detail' => 'Detail — joint lines and polymeric sand finish',
  ],
  [
    'id'        => 2,
    'category'  => 'landscape',
    'cat_label' => 'Landscape Design',
    'title'     => 'Full Front Yard Transformation',
    'city'      => 'Troy, MI',
    'desc'      => 'Complete front yard redesign including sod installation, fresh mulch beds, seasonal plantings, trimmed hedges, and a new brick walkway. Curb appeal elevated dramatically.',
    'materials' => 'Premium sod · Seasonal annuals · Mulch · Brick pavers',
    'has_ba'    => true,
    'size'      => 'wide',
    'ph_before' => 'Before — bare lawn, no definition, dated planting beds',
    'ph_after'  => 'After — lush front yard, fresh plantings, new walkway',
    'ph_detail' => 'Detail — mulch bed edge and seasonal color plantings',
  ],
  [
    'id'        => 3,
    'category'  => 'lighting',
    'cat_label' => 'Outdoor Lighting',
    'title'     => 'Full Property Lighting System',
    'city'      => 'Bloomfield Hills, MI',
    'desc'      => 'Professional outdoor lighting installation covering accent uplights on mature trees, pathway illumination along the front walkway, and architectural uplighting on the home facade.',
    'materials' => 'Kichler LED fixtures · Brass pathway lights · Low-voltage transformer',
    'has_ba'    => true,
    'size'      => 'normal',
    'ph_before' => 'Before — property completely dark at night',
    'ph_after'  => 'After — dramatic nighttime lighting reveal',
    'ph_detail' => 'Detail — architectural uplight on home facade',
  ],
  [
    'id'        => 4,
    'category'  => 'garden',
    'cat_label' => 'Garden Design & 3D',
    'title'     => '3D Rendering to Reality',
    'city'      => 'Rochester Hills, MI',
    'desc'      => 'Side-by-side proof of our 3D rendering process. The client approved the design digitally before a single stone was placed. The completed project matches the rendering from the same angle.',
    'materials' => 'Techo-Bloc Blu 60 · Natural fieldstone · Native perennials',
    'has_ba'    => true,
    'size'      => 'wide',
    'ph_before' => '3D Rendering — photorealistic project visualization',
    'ph_after'  => 'Completed project — same angle as the rendering',
    'ph_detail' => 'Detail — natural stone border and garden bed',
  ],
  [
    'id'        => 5,
    'category'  => 'hardscape',
    'cat_label' => 'Brick + Hardscapes',
    'title'     => 'Retaining Wall & Garden Integration',
    'city'      => 'Shelby Township, MI',
    'desc'      => 'Multi-level retaining wall with integrated planting pockets, natural stone cap, and drainage system. Solved a severe grading issue while creating a beautiful tiered garden feature.',
    'materials' => 'Allan Block retaining wall · Natural stone cap · Drainage aggregate',
    'has_ba'    => false,
    'size'      => 'tall',
    'ph_before' => 'Before — eroding slope, drainage issues',
    'ph_after'  => 'After — tiered retaining wall with garden pockets',
    'ph_detail' => 'Detail — natural stone cap and drainage integration',
  ],
  [
    'id'        => 6,
    'category'  => 'full',
    'cat_label' => 'Full Transformation',
    'title'     => 'Complete Property Overhaul',
    'city'      => 'Farmington Hills, MI',
    'desc'      => 'Full property transformation including new paver driveway, front yard landscape redesign, side yard retaining wall, and complete outdoor lighting system. $58,000 project delivered on time.',
    'materials' => 'Unilock Brussels Block · Landscape lighting · Premium sod · Mulch',
    'has_ba'    => true,
    'size'      => 'wide',
    'ph_before' => 'Before — dated driveway, overgrown beds, no lighting',
    'ph_after'  => 'After — complete property transformation at golden hour',
    'ph_detail' => 'Detail — paver driveway border pattern close-up',
  ],
  [
    'id'        => 7,
    'category'  => 'landscape',
    'cat_label' => 'Landscape Design',
    'title'     => 'Backyard Garden Design',
    'city'      => 'Washington Township, MI',
    'desc'      => 'Custom backyard garden with layered perennial beds, natural stone path, ornamental grasses, and seasonal color planting plan designed for year-round visual interest.',
    'materials' => 'Native perennials · Ornamental grasses · Fieldstone path · Mulch',
    'has_ba'    => false,
    'size'      => 'normal',
    'ph_before' => 'Before — empty backyard, no landscaping',
    'ph_after'  => 'After — layered garden beds with stone path',
    'ph_detail' => 'Detail — perennial planting and stone edge',
  ],
  [
    'id'        => 8,
    'category'  => 'hardscape',
    'cat_label' => 'Brick + Hardscapes',
    'title'     => 'Outdoor Kitchen & Fire Pit',
    'city'      => 'Clinton Township, MI',
    'desc'      => 'Custom outdoor kitchen with natural stone countertop, built-in grill station, and adjacent circular fire pit patio. Full entertainment zone built for Michigan summers.',
    'materials' => 'Natural bluestone · Built-in grill · Unilock patio pavers · Fire pit ring',
    'has_ba'    => false,
    'size'      => 'normal',
    'ph_before' => 'Before — plain grass backyard',
    'ph_after'  => 'After — outdoor kitchen, fire pit, entertainment zone',
    'ph_detail' => 'Detail — natural stone countertop and grill station',
  ],
  [
    'id'        => 9,
    'category'  => 'lighting',
    'cat_label' => 'Outdoor Lighting',
    'title'     => 'Tree & Pathway Lighting',
    'city'      => 'Birmingham, MI',
    'desc'      => 'Uplighting installation on four mature oak trees combined with brass pathway lighting along the front walkway. Timer-controlled with dusk-to-dawn automation.',
    'materials' => 'Brass uplights · LED pathway fixtures · Smart timer · Underground wiring',
    'has_ba'    => true,
    'size'      => 'normal',
    'ph_before' => 'Before — mature trees invisible at night',
    'ph_after'  => 'After — dramatic tree uplighting and pathway illumination',
    'ph_detail' => 'Detail — brass uplight fixture at tree base',
  ],
  [
    'id'        => 10,
    'category'  => 'garden',
    'cat_label' => 'Garden Design & 3D',
    'title'     => 'Courtyard Garden Design',
    'city'      => 'Troy, MI',
    'desc'      => 'Intimate courtyard garden with 3D design approval process. Includes custom water feature, raised planting beds, and natural stone seating area surrounded by curated plantings.',
    'materials' => 'Fieldstone raised beds · Small water feature · Dwarf evergreens · Mulch',
    'has_ba'    => true,
    'size'      => 'wide',
    'ph_before' => '3D Rendering — courtyard garden concept',
    'ph_after'  => 'Completed courtyard — water feature and raised beds',
    'ph_detail' => 'Detail — water feature and stone seating',
  ],
  [
    'id'        => 11,
    'category'  => 'full',
    'cat_label' => 'Full Transformation',
    'title'     => 'Front & Back Full Redesign',
    'city'      => 'Bloomfield Hills, MI',
    'desc'      => 'Front-to-back property transformation. New paver walkway and stoop, full front yard landscape redesign, backyard patio with pergola base, and integrated lighting throughout.',
    'materials' => 'Brussels Dimensional pavers · Cedar pergola base · LED system · Sod',
    'has_ba'    => false,
    'size'      => 'tall',
    'ph_before' => 'Before — dated entry, no back patio, minimal landscaping',
    'ph_after'  => 'After — premium entry, backyard patio, full lighting',
    'ph_detail' => 'Detail — paver stoop and entry planting',
  ],
  [
    'id'        => 12,
    'category'  => 'hardscape',
    'cat_label' => 'Brick + Hardscapes',
    'title'     => 'Driveway & Front Walkway',
    'city'      => 'Rochester Hills, MI',
    'desc'      => 'Full driveway replacement in Brussels Block pavers with contrasting border, matching front walkway, and new stoop landing. Increased property value significantly.',
    'materials' => 'Unilock Brussels Block · Concrete base · Polymeric sand · Edging',
    'has_ba'    => true,
    'size'      => 'wide',
    'ph_before' => 'Before — cracked asphalt driveway, no defined entry',
    'ph_after'  => 'After — paver driveway with border and matching walkway',
    'ph_detail' => 'Detail — border pattern at driveway apron',
  ],
];

$categories = [
  'all'       => 'All Projects',
  'hardscape' => 'Brick + Hardscapes',
  'landscape' => 'Landscape Design',
  'garden'    => 'Garden Design & 3D',
  'lighting'  => 'Outdoor Lighting',
  'full'      => 'Full Transformations',
];
?>


<!-- ════════════════════════════════════════════════
     PAGE HERO
     ════════════════════════════════════════════════ -->
<section class="relative overflow-hidden -mt-[68px] md:-mt-[106px]" style="min-height:46vh;">
  <div class="absolute inset-0 bg-[#0e140c]" style="background-size:cover;background-position:center;">
    {{-- Replace: background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/portfolio-hero.jpg') --}}
    <div class="absolute inset-0 flex items-center justify-center text-[#3a3a34] text-xs tracking-widest uppercase">
      Hero — wide shot of the most impressive completed project
    </div>
  </div>
  <div class="absolute inset-0" style="background:linear-gradient(to right,rgba(0,0,0,.7) 0%,rgba(0,0,0,.35) 65%,rgba(0,0,0,.15) 100%);"></div>

  <div class="relative z-10 max-w-[1280px] mx-auto px-6 md:px-10 flex flex-col justify-end pb-16 md:pb-20" style="min-height:46vh;padding-top:130px;">
    <div class="flex items-center gap-3 mb-4">
      <span class="block w-9 h-px bg-[#8a6a45]"></span>
      <span class="text-[10px] font-semibold tracking-[.22em] uppercase text-[#8a6a45]">Portfolio</span>
    </div>
    <h1 class="font-['Playfair_Display'] text-[clamp(34px,5vw,64px)] font-bold text-[#e6e3df] leading-[1.08] tracking-tight max-w-2xl">
      Real Projects.<br>
      <em class="italic text-[#8a6a45]">Real Results.</em>
    </h1>
    <p class="mt-4 text-[15px] font-light text-[rgba(240,236,230,.62)] max-w-lg leading-relaxed">
      Every project below started with a 3D rendering and was delivered to match it exactly. Browse by category to find work similar to your vision.
    </p>
  </div>
</section>


<!-- ════════════════════════════════════════════════
     FILTER BAR
     ════════════════════════════════════════════════ -->
<div class="bg-white border-b border-[#e6e3df] sticky top-0 z-40" id="ev-filter-bar">
  <div class="max-w-[1280px] mx-auto px-6 md:px-10">
    <div class="flex items-center gap-2 overflow-x-auto py-4 scrollbar-hide" id="ev-filters" style="scrollbar-width:none;-webkit-overflow-scrolling:touch;">
      <?php foreach ( $categories as $key => $label ) : ?>
      <button
        class="ev-filter-btn flex-shrink-0 text-[11px] font-semibold tracking-[.08em] uppercase px-5 py-2.5 rounded-full border transition-all duration-200 whitespace-nowrap
          <?php echo $key === 'all' ? 'bg-[#1a1814] text-white border-[#1a1814]' : 'bg-white text-[#7a7f85] border-[#d8d4ce] hover:border-[#1a1814] hover:text-[#0b0b0c]'; ?>"
        data-filter="<?php echo $key; ?>">
        <?php echo $label; ?>
        <?php if ( $key !== 'all' ) : ?>
        <span class="ev-filter-count ml-1.5 opacity-50">
          (<?php echo count( array_filter( $projects, fn($p) => $p['category'] === $key ) ); ?>)
        </span>
        <?php else : ?>
        <span class="ml-1.5 opacity-50">(<?php echo count($projects); ?>)</span>
        <?php endif; ?>
      </button>
      <?php endforeach; ?>
    </div>
  </div>
</div>


<!-- ════════════════════════════════════════════════
     MASONRY GRID
     ════════════════════════════════════════════════ -->
<section class="bg-[#f5f2ef] py-14">
  <div class="max-w-[1280px] mx-auto px-6 md:px-10">

    <!-- Results count -->
    <div class="flex items-center justify-between mb-8">
      <p class="text-[13px] text-[#7a7f85]">
        Showing <span id="ev-count" class="font-semibold text-[#0b0b0c]"><?php echo count($projects); ?></span> projects
      </p>
      <a href="/contact" class="hidden md:inline-flex items-center gap-2 text-[11px] font-bold tracking-[.08em] uppercase text-[#0f0f0f] px-5 py-2.5 rounded-md" style="background:linear-gradient(135deg,#8a6a45,#7a5c38);">
        Start Your Project
        <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
      </a>
    </div>

    <!-- Grid -->
    <div id="ev-grid" class="columns-1 sm:columns-2 lg:columns-3 gap-5 space-y-5">
      <?php foreach ( $projects as $p ) : ?>
      <div class="ev-project-card break-inside-avoid bg-white border border-[#e6e3df] rounded-2xl overflow-hidden cursor-pointer group transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_12px_40px_rgba(0,0,0,.1)]"
           data-category="<?php echo $p['category']; ?>"
           data-id="<?php echo $p['id']; ?>">

        <!-- Image -->
        <div class="relative overflow-hidden <?php echo $p['size'] === 'tall' ? 'aspect-[3/4]' : ($p['size'] === 'wide' ? 'aspect-[16/9]' : 'aspect-[4/3]'); ?> bg-[#e0ddd6]">
          {{-- Replace: <img src="<?php echo get_template_directory_uri(); ?>/assets/images/project-<?php echo $p['id']; ?>-after.jpg"
               class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
               loading="lazy" alt="<?php echo esc_attr($p['title']); ?> - <?php echo esc_attr($p['city']); ?>"> --}}

          <!-- Placeholder -->
          <div class="absolute inset-0 flex items-end justify-center pb-4 text-[10px] text-[#7a7f85] text-center px-4 transition-transform duration-500 group-hover:scale-105">
            <?php echo $p['ph_after']; ?>
          </div>

          <!-- Category badge -->
          <div class="absolute top-3 left-3 z-10">
            <span class="text-[9px] font-bold tracking-[.12em] uppercase text-[#0f0f0f] px-2.5 py-1 rounded-full"
                  style="background:linear-gradient(135deg,#8a6a45,#7a5c38);">
              <?php echo $p['cat_label']; ?>
            </span>
          </div>

          <!-- Has B&A badge -->
          <?php if ( $p['has_ba'] ) : ?>
          <div class="absolute top-3 right-3 z-10 bg-[rgba(0,0,0,.55)] backdrop-blur-sm rounded-full px-2.5 py-1 flex items-center gap-1.5">
            <svg class="w-3 h-3 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 21L3 16.5m0 0L7.5 12M3 16.5h13.5m0-13.5L21 7.5m0 0L16.5 12M21 7.5H7.5"/>
            </svg>
            <span class="text-[9px] font-semibold text-white tracking-wide">Before & After</span>
          </div>
          <?php endif; ?>

          <!-- Hover overlay -->
          <div class="absolute inset-0 bg-[rgba(0,0,0,0)] group-hover:bg-[rgba(0,0,0,.25)] transition-all duration-300 flex items-center justify-center">
            <div class="opacity-0 group-hover:opacity-100 transition-all duration-300 bg-white rounded-full p-3 shadow-lg">
              <svg class="w-5 h-5 text-[#0b0b0c]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607zM10.5 7.5v6m3-3h-6"/>
              </svg>
            </div>
          </div>
        </div>

        <!-- Card body -->
        <div class="p-5">
          <div class="flex items-start justify-between gap-2 mb-2">
            <h3 class="font-['Playfair_Display'] text-[16px] font-bold text-[#0b0b0c] leading-snug"><?php echo $p['title']; ?></h3>
          </div>
          <div class="flex items-center gap-1.5 mb-3">
            <svg class="w-3 h-3 text-[#8a6a45] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0zM19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/>
            </svg>
            <span class="text-[11px] text-[#7a7f85]"><?php echo $p['city']; ?></span>
          </div>
          <p class="text-[12px] text-[#7a7f85] leading-[1.65] line-clamp-2"><?php echo $p['desc']; ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

    <!-- Empty state -->
    <div id="ev-empty" class="hidden text-center py-24">
      <svg class="w-12 h-12 text-[#e0dad2] mx-auto mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5z"/>
      </svg>
      <p class="text-[#7a7f85] text-[14px]">No projects in this category yet.</p>
    </div>

  </div>
</section>


<!-- ════════════════════════════════════════════════
     LIGHTBOX
     ════════════════════════════════════════════════ -->
<div id="ev-lightbox" class="fixed inset-0 z-[100] hidden items-center justify-center p-4 md:p-8"
     style="background:rgba(10,10,8,.92);backdrop-filter:blur(8px);">

  <button id="ev-lb-close" class="absolute top-5 right-5 w-10 h-10 rounded-full bg-[rgba(255,255,255,.1)] border border-[rgba(255,255,255,.15)] flex items-center justify-center text-white hover:bg-[rgba(255,255,255,.2)] transition-colors z-10">
    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
  </button>

  <!-- Prev / Next -->
  <button id="ev-lb-prev" class="absolute left-4 top-1/2 -translate-y-1/2 w-10 h-10 rounded-full bg-[rgba(255,255,255,.1)] border border-[rgba(255,255,255,.12)] flex items-center justify-center text-white hover:bg-[rgba(138,106,69,.3)] transition-colors z-10">
    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5"/></svg>
  </button>
  <button id="ev-lb-next" class="absolute right-4 top-1/2 -translate-y-1/2 w-10 h-10 rounded-full bg-[rgba(255,255,255,.1)] border border-[rgba(255,255,255,.12)] flex items-center justify-center text-white hover:bg-[rgba(138,106,69,.3)] transition-colors z-10">
    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/></svg>
  </button>

  <!-- Content panel -->
  <div class="relative w-full max-w-5xl max-h-[90vh] overflow-y-auto bg-white rounded-2xl shadow-2xl grid grid-cols-1 md:grid-cols-[1fr_360px]">

    <!-- Left — image / B&A -->
    <div class="relative bg-[#e8e4de] min-h-[280px] md:min-h-0">

      <!-- Tabs: After / Before / Detail -->
      <div class="absolute top-3 left-3 z-10 flex gap-1.5" id="ev-lb-tabs">
        <button class="ev-lb-tab text-[9px] font-bold tracking-[.1em] uppercase px-3 py-1.5 rounded-full bg-[#1a1814] text-white" data-tab="after">After</button>
        <button class="ev-lb-tab text-[9px] font-bold tracking-[.1em] uppercase px-3 py-1.5 rounded-full bg-[rgba(0,0,0,.35)] text-white hover:bg-[rgba(0,0,0,.55)]" data-tab="before">Before</button>
        <button class="ev-lb-tab text-[9px] font-bold tracking-[.1em] uppercase px-3 py-1.5 rounded-full bg-[rgba(0,0,0,.35)] text-white hover:bg-[rgba(0,0,0,.55)]" data-tab="detail">Detail</button>
      </div>

      <!-- Image display -->
      <div id="ev-lb-img" class="w-full h-full min-h-[280px] md:min-h-[420px] flex items-center justify-center text-[11px] text-[#7a7f85] text-center px-8" style="background:#ddd8d0;">
        <!-- Image rendered by JS -->
      </div>

      <!-- B&A drag slider (shown when has_ba) -->
      <div id="ev-lb-ba-wrap" class="hidden absolute inset-0 cursor-col-resize select-none">
        <div id="ev-lb-ba-before" class="absolute inset-0 bg-[#c8c4bc] flex items-center justify-center text-[11px] text-[#7a7f85]" style="background-size:cover;background-position:center;"></div>
        <div id="ev-lb-ba-after"  class="absolute inset-0 bg-[#d4d0c8] flex items-center justify-center text-[11px] text-[#7a7f85]" style="clip-path:inset(0 50% 0 0);background-size:cover;background-position:center;"></div>
        <div id="ev-lb-ba-handle" class="absolute top-0 bottom-0 w-0.5 bg-white left-1/2 -translate-x-1/2 flex items-center justify-center">
          <div class="w-9 h-9 rounded-full bg-white shadow-lg flex items-center justify-center pointer-events-none">
            <svg class="w-4 h-4 text-[#0b0b0c]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15M15.75 9L12 5.25 8.25 9"/></svg>
          </div>
        </div>
        <span class="absolute top-3 left-3 text-[9px] font-bold tracking-widest uppercase text-[rgba(255,255,255,.6)]">Before</span>
        <span class="absolute top-3 right-3 text-[9px] font-bold tracking-widest uppercase text-[rgba(255,255,255,.6)]">After</span>
        <!-- Toggle back to tabs -->
        <button id="ev-lb-ba-exit" class="absolute bottom-3 right-3 text-[9px] font-bold tracking-[.08em] uppercase bg-white text-[#0b0b0c] px-3 py-1.5 rounded-full shadow">
          View Photos
        </button>
      </div>

    </div>

    <!-- Right — project details -->
    <div class="p-7 md:p-8 overflow-y-auto">

      <!-- Category + city -->
      <div class="flex items-center gap-2 mb-3">
        <span id="ev-lb-cat" class="text-[9px] font-bold tracking-[.12em] uppercase text-[#0f0f0f] px-2.5 py-1 rounded-full" style="background:linear-gradient(135deg,#8a6a45,#7a5c38);"></span>
        <div class="flex items-center gap-1 text-[11px] text-[#7a7f85]">
          <svg class="w-3 h-3 text-[#8a6a45]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0zM19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/></svg>
          <span id="ev-lb-city"></span>
        </div>
      </div>

      <h2 id="ev-lb-title" class="font-['Playfair_Display'] text-[22px] font-bold text-[#0b0b0c] leading-snug mb-4"></h2>
      <p id="ev-lb-desc" class="text-[13px] text-[#7a7f85] leading-[1.75] mb-5"></p>

      <!-- Materials -->
      <div class="bg-[#f5f2ef] border border-[#e6e3df] rounded-xl p-4 mb-5">
        <div class="text-[10px] font-semibold tracking-[.12em] uppercase text-[#7a7f85] mb-2">Materials Used</div>
        <p id="ev-lb-materials" class="text-[12px] text-[#2f3133] leading-relaxed"></p>
      </div>

      <!-- B&A toggle -->
      <div id="ev-lb-ba-toggle-wrap" class="hidden mb-5">
        <button id="ev-lb-ba-toggle"
          class="w-full flex items-center justify-center gap-2 text-[11px] font-bold tracking-[.08em] uppercase border border-[#d8d4ce] text-[#0b0b0c] rounded-xl py-3 hover:border-[#8a6a45] hover:bg-[#fdf8ee] transition-colors">
          <svg class="w-4 h-4 text-[#8a6a45]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M7.5 21L3 16.5m0 0L7.5 12M3 16.5h13.5m0-13.5L21 7.5m0 0L16.5 12M21 7.5H7.5"/></svg>
          Drag Before & After
        </button>
      </div>

      <!-- CTA -->
      <a href="/contact"
         class="flex items-center justify-center gap-2 text-[11px] font-bold tracking-[.1em] uppercase text-[#0f0f0f] py-3.5 rounded-xl transition-opacity hover:opacity-85"
         style="background:linear-gradient(135deg,#8a6a45,#7a5c38);">
        Request a Similar Project
        <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
      </a>

      <!-- Nav counter -->
      <p class="text-center text-[11px] text-[#7a7f85] mt-4">
        <span id="ev-lb-pos"></span>
      </p>

    </div>
  </div>
</div>


<!-- ════════════════════════════════════════════════
     BOTTOM CTA
     ════════════════════════════════════════════════ -->
<section class="relative overflow-hidden py-24">
  <div class="absolute inset-0 bg-[#0e140c]" style="background-size:cover;background-position:center;">
    {{-- Replace: background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/cta-portfolio.jpg') --}}
    <div class="absolute inset-0 flex items-center justify-center text-[#2a2a24] text-xs tracking-widest uppercase">Most dramatic transformation — golden hour</div>
  </div>
  <div class="absolute inset-0" style="background:rgba(0,0,0,.65);"></div>
  <div class="relative z-10 max-w-[700px] mx-auto px-6 text-center">
    <span class="block text-[10px] font-semibold tracking-[.22em] uppercase text-[#8a6a45] mb-4">Your Project</span>
    <h2 class="font-['Playfair_Display'] text-[clamp(28px,4.5vw,50px)] font-bold text-[#e6e3df] leading-[1.12] mb-5">
      See Your Property in This Gallery.<br>
      <em class="italic text-[#8a6a45]">Let's Make It Happen.</em>
    </h2>
    <p class="text-[14px] font-light text-[rgba(240,236,230,.58)] leading-relaxed mb-10">
      Every project starts with a free consultation and a 3D rendering. You approve the design before we break ground.
    </p>
    <div class="flex flex-wrap gap-3 justify-center">
      <a href="/contact"
         class="inline-flex items-center gap-2 text-[12px] font-bold tracking-[.1em] uppercase text-[#0f0f0f] px-9 py-4 rounded-md hover:opacity-85 transition-opacity"
         style="background:linear-gradient(135deg,#8a6a45,#7a5c38);">
        Request a Free Estimate
        <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
      </a>
      <a href="tel:+17705550192"
         class="inline-flex items-center gap-2 text-[12px] font-medium tracking-[.04em] text-[rgba(240,236,230,.75)] border border-[rgba(240,236,230,.2)] px-8 py-4 rounded-md hover:text-[#8a6a45] hover:border-[#8a6a45] transition-colors">
        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor"><path fill-rule="evenodd" d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z" clip-rule="evenodd"/></svg>
        (770) 555-0192
      </a>
    </div>
  </div>
</section>


<!-- ════════════════════════════════════════════════
     PROJECT DATA FOR JS
     ════════════════════════════════════════════════ -->
<script>
const EV_PROJECTS = <?php echo json_encode( array_map( function($p) {
  return [
    'id'        => $p['id'],
    'category'  => $p['category'],
    'cat_label' => $p['cat_label'],
    'title'     => $p['title'],
    'city'      => $p['city'],
    'desc'      => $p['desc'],
    'materials' => $p['materials'],
    'has_ba'    => $p['has_ba'],
    'ph_before' => $p['ph_before'],
    'ph_after'  => $p['ph_after'],
    'ph_detail' => $p['ph_detail'],
    // When real images are available, add:
    // 'img_after'  => get_template_directory_uri() . '/assets/images/project-' . $p['id'] . '-after.jpg',
    // 'img_before' => get_template_directory_uri() . '/assets/images/project-' . $p['id'] . '-before.jpg',
    // 'img_detail' => get_template_directory_uri() . '/assets/images/project-' . $p['id'] . '-detail.jpg',
  ];
}, $projects ) ); ?>;
</script>


<!-- ════════════════════════════════════════════════
     JAVASCRIPT
     ════════════════════════════════════════════════ -->
<script>
(function () {

  /* ── FILTER ───────────────────────────────────── */
  const cards   = document.querySelectorAll('.ev-project-card');
  const btns    = document.querySelectorAll('.ev-filter-btn');
  const countEl = document.getElementById('ev-count');
  const empty   = document.getElementById('ev-empty');
  let activeFilter = 'all';
  let visibleIds = EV_PROJECTS.map(p => p.id); // all visible by default

  btns.forEach(btn => {
    btn.addEventListener('click', () => {
      const f = btn.dataset.filter;
      activeFilter = f;

      // Update button styles
      btns.forEach(b => {
        const active = b.dataset.filter === f;
        b.className = b.className
          .replace(/bg-\[#1a1814\] text-white border-\[#1a1814\]/g, 'bg-white text-[#7a7f85] border-[#d8d4ce] hover:border-[#1a1814] hover:text-[#0b0b0c]')
          .replace(/bg-white text-\[#6a6560\] border-\[#e0dad2\] hover:border-\[#1a1814\] hover:text-\[#1a1814\]/g, 'bg-white text-[#7a7f85] border-[#d8d4ce] hover:border-[#1a1814] hover:text-[#0b0b0c]');
        if (active) {
          b.classList.remove('bg-white', 'text-[#7a7f85]', 'border-[#d8d4ce]', 'hover:border-[#1a1814]', 'hover:text-[#0b0b0c]');
          b.classList.add('bg-[#1a1814]', 'text-white', 'border-[#1a1814]');
        }
      });

      // Filter cards
      let shown = 0;
      visibleIds = [];
      cards.forEach(card => {
        const match = f === 'all' || card.dataset.category === f;
        card.style.display = match ? '' : 'none';
        if (match) { shown++; visibleIds.push(parseInt(card.dataset.id)); }
      });

      countEl.textContent = shown;
      empty.classList.toggle('hidden', shown > 0);
    });
  });


  /* ── LIGHTBOX ──────────────────────────────────── */
  const lb        = document.getElementById('ev-lightbox');
  const lbImg     = document.getElementById('ev-lb-img');
  const lbTitle   = document.getElementById('ev-lb-title');
  const lbCat     = document.getElementById('ev-lb-cat');
  const lbCity    = document.getElementById('ev-lb-city');
  const lbDesc    = document.getElementById('ev-lb-desc');
  const lbMat     = document.getElementById('ev-lb-materials');
  const lbPos     = document.getElementById('ev-lb-pos');
  const lbBaWrap  = document.getElementById('ev-lb-ba-wrap');
  const lbBaTog   = document.getElementById('ev-lb-ba-toggle');
  const lbBaTWrap = document.getElementById('ev-lb-ba-toggle-wrap');
  const lbBaExit  = document.getElementById('ev-lb-ba-exit');
  const lbTabs    = document.querySelectorAll('.ev-lb-tab');
  let currentId   = null;
  let activeTab   = 'after';
  let baActive    = false;

  function getProject(id) { return EV_PROJECTS.find(p => p.id === id); }

  function openLightbox(id) {
    currentId = id;
    activeTab = 'after';
    baActive  = false;
    renderLightbox();
    lb.classList.remove('hidden');
    lb.classList.add('flex');
    document.body.style.overflow = 'hidden';
  }

  function closeLightbox() {
    lb.classList.add('hidden');
    lb.classList.remove('flex');
    document.body.style.overflow = '';
    currentId = null;
  }

  function renderLightbox() {
    const p = getProject(currentId);
    if (!p) return;

    lbTitle.textContent     = p.title;
    lbCat.textContent       = p.cat_label;
    lbCity.textContent      = p.city;
    lbDesc.textContent      = p.desc;
    lbMat.textContent       = p.materials;

    const idx = visibleIds.indexOf(p.id);
    lbPos.textContent = `Project ${idx + 1} of ${visibleIds.length}`;

    // Tabs
    lbTabs.forEach(t => {
      const active = t.dataset.tab === activeTab;
      t.className = 'ev-lb-tab text-[9px] font-bold tracking-[.1em] uppercase px-3 py-1.5 rounded-full transition-colors ' +
        (active ? 'bg-[#1a1814] text-white' : 'bg-[rgba(0,0,0,.35)] text-white hover:bg-[rgba(0,0,0,.55)]');
    });

    // Image area
    const phMap = { after: p.ph_after, before: p.ph_before, detail: p.ph_detail };
    lbImg.textContent = phMap[activeTab] || p.ph_after;
    // When real images: lbImg.style.backgroundImage = `url(${p['img_' + activeTab]})`;

    // B&A toggle
    lbBaTWrap.classList.toggle('hidden', !p.has_ba);

    // B&A panel
    lbBaWrap.classList.add('hidden');
    lbBaWrap.classList.remove('flex');
    document.getElementById('ev-lb-tabs').style.display = '';
    if (baActive && p.has_ba) {
      document.getElementById('ev-lb-ba-before').textContent = p.ph_before;
      document.getElementById('ev-lb-ba-after').textContent  = p.ph_after;
      // Reset handle to 50%
      document.getElementById('ev-lb-ba-after').style.clipPath = 'inset(0 50% 0 0)';
      document.getElementById('ev-lb-ba-handle').style.left    = '50%';
      lbBaWrap.classList.remove('hidden');
      document.getElementById('ev-lb-tabs').style.display = 'none';
    }
  }

  // Tab clicks
  lbTabs.forEach(t => {
    t.addEventListener('click', () => { activeTab = t.dataset.tab; renderLightbox(); });
  });

  // B&A toggle
  lbBaTog?.addEventListener('click', () => { baActive = true;  renderLightbox(); });
  lbBaExit?.addEventListener('click', () => { baActive = false; renderLightbox(); });

  // B&A drag inside lightbox
  let lbDrag = false;
  lbBaWrap.addEventListener('mousedown',  e => { lbDrag = true; lbSetBA(e.clientX); });
  lbBaWrap.addEventListener('touchstart', e => { lbDrag = true; lbSetBA(e.touches[0].clientX); }, { passive: true });
  window.addEventListener('mousemove',  e => { if (lbDrag) lbSetBA(e.clientX); });
  window.addEventListener('touchmove',  e => { if (lbDrag) lbSetBA(e.touches[0].clientX); }, { passive: true });
  window.addEventListener('mouseup',    () => lbDrag = false);
  window.addEventListener('touchend',   () => lbDrag = false);

  function lbSetBA(x) {
    const r   = lbBaWrap.getBoundingClientRect();
    const pct = Math.min(Math.max((x - r.left) / r.width, 0), 1) * 100;
    document.getElementById('ev-lb-ba-after').style.clipPath  = `inset(0 ${100 - pct}% 0 0)`;
    document.getElementById('ev-lb-ba-handle').style.left     = pct + '%';
  }

  // Open on card click
  cards.forEach(card => {
    card.addEventListener('click', () => openLightbox(parseInt(card.dataset.id)));
  });

  // Close
  document.getElementById('ev-lb-close').addEventListener('click', closeLightbox);
  lb.addEventListener('click', e => { if (e.target === lb) closeLightbox(); });

  // Prev / Next
  document.getElementById('ev-lb-prev').addEventListener('click', e => {
    e.stopPropagation();
    const idx = visibleIds.indexOf(currentId);
    const prev = visibleIds[(idx - 1 + visibleIds.length) % visibleIds.length];
    currentId = prev; activeTab = 'after'; baActive = false;
    renderLightbox();
  });
  document.getElementById('ev-lb-next').addEventListener('click', e => {
    e.stopPropagation();
    const idx  = visibleIds.indexOf(currentId);
    const next = visibleIds[(idx + 1) % visibleIds.length];
    currentId = next; activeTab = 'after'; baActive = false;
    renderLightbox();
  });

  // Keyboard navigation
  document.addEventListener('keydown', e => {
    if (!currentId) return;
    if (e.key === 'Escape')    closeLightbox();
    if (e.key === 'ArrowLeft') document.getElementById('ev-lb-prev').click();
    if (e.key === 'ArrowRight')document.getElementById('ev-lb-next').click();
  });

  // Touch swipe in lightbox
  let lbTX = 0;
  lb.addEventListener('touchstart', e => lbTX = e.touches[0].clientX, { passive: true });
  lb.addEventListener('touchend', e => {
    const dx = e.changedTouches[0].clientX - lbTX;
    if (Math.abs(dx) > 50) {
      dx < 0
        ? document.getElementById('ev-lb-next').click()
        : document.getElementById('ev-lb-prev').click();
    }
  });


  /* ── SCROLL REVEAL ─────────────────────────────── */
  const ro = new IntersectionObserver(entries => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        e.target.style.opacity = '1';
        e.target.style.transform = 'translateY(0)';
        ro.unobserve(e.target);
      }
    });
  }, { threshold: 0.08 });

  cards.forEach((c, i) => {
    c.style.opacity   = '0';
    c.style.transform = 'translateY(20px)';
    c.style.transition = `opacity .5s ease ${(i % 6) * 60}ms, transform .5s ease ${(i % 6) * 60}ms`;
    ro.observe(c);
  });

})();
</script>

<?php get_footer(); ?>