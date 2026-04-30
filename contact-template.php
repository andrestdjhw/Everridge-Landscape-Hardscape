<?php
/**
 * Template Name: Contact
 *
 * @package everridge
 */
get_header(); ?>


<!-- ════════════════════════════════════════════════
     PAGE HERO — compact dark
     ════════════════════════════════════════════════ -->
<section class="relative overflow-hidden -mt-[104px]" style="min-height:40vh;">
  <div class="absolute inset-0 bg-[#0b0b0c]" style="background-size:cover;background-position:center;">
    {{-- Replace: background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/contact-hero.jpg') --}}
    <div class="absolute inset-0 flex items-center justify-center text-[#2a2a2a] text-xs tracking-widest uppercase">
      Background — crew on a premium project site or aerial view of completed hardscape
    </div>
  </div>
  <div class="absolute inset-0" style="background:linear-gradient(to right,rgba(0,0,0,.78) 0%,rgba(0,0,0,.48) 60%,rgba(0,0,0,.22) 100%);"></div>

  <div class="relative z-10 max-w-[1280px] mx-auto px-6 md:px-10 flex flex-col justify-end pb-14"
       style="min-height:40vh;padding-top:130px;">
    <div class="flex items-center gap-3 mb-4">
      <span class="block w-9 h-px bg-[#8a6a45]"></span>
      <span class="text-[10px] font-semibold tracking-[.22em] uppercase text-[#8a6a45]">Contact Us</span>
    </div>
    <h1 class="font-['Playfair_Display'] text-[clamp(32px,5vw,60px)] font-bold text-[#e6e3df] leading-[1.08] max-w-2xl">
      Ready to Transform<br>
      <em class="italic text-[#8a6a45]">Your Outdoor Space?</em>
    </h1>
  </div>
</section>


<!-- ════════════════════════════════════════════════
     MAIN CONTENT — form + info side by side
     ════════════════════════════════════════════════ -->
<section class="bg-white py-20">
  <div class="max-w-[1280px] mx-auto px-6 md:px-10">
    <div class="grid grid-cols-1 lg:grid-cols-[1fr_420px] gap-12 items-start">

      <!-- LEFT — form mount -->
      <div class="bg-[#f5f2ef] border border-[#e6e3df] rounded-2xl overflow-hidden">
        <!-- Form header strip -->
        <div class="bg-[#0b0b0c] px-10 py-7">
          <span class="block text-[10px] font-semibold tracking-[.22em] uppercase text-[#8a6a45] mb-2">Get Started</span>
          <h2 class="font-['Playfair_Display'] text-[clamp(22px,2.8vw,30px)] font-bold text-[#e6e3df] leading-snug">
            Request a Free Estimate
          </h2>
          <p class="text-[13px] font-light text-[rgba(230,227,223,.55)] mt-2 leading-relaxed">
            We review every request and respond within 24–48 hours.<br>No pressure. Just clarity.
          </p>
        </div>
        <!-- React ContactForm mount point -->
        <!-- compact=true: title already handled by dark strip above -->
        <div id="render-contact-form-here"
             data-compact="true"
             data-show-title="false"
             class="p-8 md:p-10"></div>
      </div>

      <!-- RIGHT — contact info, hours, map, trust -->
      <div class="flex flex-col gap-6 lg:sticky lg:top-32">

        <!-- Contact info card -->
        <div class="bg-[#f5f2ef] border border-[#e6e3df] rounded-2xl p-7">
          <h3 class="font-['Playfair_Display'] text-[18px] font-bold text-[#0b0b0c] mb-5">Get in Touch</h3>
          <div class="flex flex-col gap-4">

            <!-- Phone -->
            <a href="tel:+17705550192" class="flex items-center gap-4 group">
              <div class="w-10 h-10 rounded-xl bg-white border border-[#e6e3df] flex items-center justify-center flex-shrink-0 group-hover:border-[#8a6a45] transition-colors">
                <svg class="w-4 h-4 text-[#8a6a45]" viewBox="0 0 24 24" fill="currentColor">
                  <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z" clip-rule="evenodd"/>
                </svg>
              </div>
              <div>
                <div class="text-[10px] font-semibold tracking-[.1em] uppercase text-[#7a7f85] mb-0.5">Phone</div>
                <div class="text-[15px] font-semibold text-[#0b0b0c] group-hover:text-[#8a6a45] transition-colors">(770) 555-0192</div>
              </div>
            </a>

            <!-- Email -->
            <a href="mailto:info@everridgelandscape.com" class="flex items-center gap-4 group">
              <div class="w-10 h-10 rounded-xl bg-white border border-[#e6e3df] flex items-center justify-center flex-shrink-0 group-hover:border-[#8a6a45] transition-colors">
                <svg class="w-4 h-4 text-[#8a6a45]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/>
                </svg>
              </div>
              <div>
                <div class="text-[10px] font-semibold tracking-[.1em] uppercase text-[#7a7f85] mb-0.5">Email</div>
                <div class="text-[14px] font-medium text-[#0b0b0c] group-hover:text-[#8a6a45] transition-colors">info@everridgelandscape.com</div>
              </div>
            </a>

            <!-- Address -->
            <a href="https://maps.google.com/?q=Clinton+Township+MI" target="_blank" rel="noopener noreferrer"
               class="flex items-start gap-4 group">
              <div class="w-10 h-10 rounded-xl bg-white border border-[#e6e3df] flex items-center justify-center flex-shrink-0 mt-0.5 group-hover:border-[#8a6a45] transition-colors">
                <svg class="w-4 h-4 text-[#8a6a45]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0zM19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/>
                </svg>
              </div>
              <div>
                <div class="text-[10px] font-semibold tracking-[.1em] uppercase text-[#7a7f85] mb-0.5">Based In</div>
                <div class="text-[14px] font-medium text-[#0b0b0c] group-hover:text-[#8a6a45] transition-colors leading-relaxed">
                  Clinton Township, Michigan<br>
                  <span class="text-[12px] font-light text-[#7a7f85]">Serving Oakland-Macomb corridor</span>
                </div>
              </div>
            </a>

          </div>
        </div>

        <!-- Hours card -->
        <div class="bg-[#f5f2ef] border border-[#e6e3df] rounded-2xl p-7">
          <h3 class="font-['Playfair_Display'] text-[17px] font-bold text-[#0b0b0c] mb-4">Business Hours</h3>
          <?php
          $hours = [
            [ 'day' => 'Monday – Friday', 'time' => '8:00 AM – 6:00 PM' ],
            [ 'day' => 'Saturday',        'time' => '8:00 AM – 2:00 PM' ],
            [ 'day' => 'Sunday',          'time' => 'Closed'            ],
          ];
          ?>
          <div class="flex flex-col gap-3">
            <?php foreach ( $hours as $h ) : ?>
            <div class="flex items-center justify-between">
              <span class="text-[13px] font-medium text-[#2f3133]"><?php echo $h['day']; ?></span>
              <span class="text-[13px] font-light text-[#7a7f85]
                <?php echo $h['time'] === 'Closed' ? 'text-[#c0392b]' : ''; ?>">
                <?php echo $h['time']; ?>
              </span>
            </div>
            <?php if ( $h !== end($hours) ) : ?>
            <div class="h-px bg-[#e6e3df]"></div>
            <?php endif; ?>
            <?php endforeach; ?>
          </div>
          <div class="mt-5 pt-5 border-t border-[#e6e3df] flex items-start gap-3">
            <svg class="w-4 h-4 text-[#8a6a45] flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
              <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z"/>
            </svg>
            <p class="text-[12px] font-light text-[#7a7f85] leading-relaxed">
              We respond to all form submissions within 24–48 business hours. For urgent inquiries, call us directly.
            </p>
          </div>
        </div>

        <!-- Trust badges -->
        <div class="bg-[#0b0b0c] rounded-2xl p-7">
          <div class="text-[10px] font-semibold tracking-[.18em] uppercase text-[#8a6a45] mb-5">Why Everridge</div>
          <div class="flex flex-col gap-3">
            <?php
            $trust = [
              'Licensed & Insured in Michigan',
              '17+ Years of Hands-On Experience',
              'Free 3D Rendering with Every Project',
              '5-Star Rated on Google & Angi',
              'Free Consultations, No Obligation',
              'Clean Job Sites, On-Time Delivery',
            ];
            foreach ( $trust as $t ) : ?>
            <div class="flex items-center gap-3">
              <svg class="w-4 h-4 text-[#8a6a45] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/>
              </svg>
              <span class="text-[13px] font-light text-[rgba(230,227,223,.7)]"><?php echo $t; ?></span>
            </div>
            <?php endforeach; ?>
          </div>
        </div>

        <!-- Social links -->
        <div class="bg-[#f5f2ef] border border-[#e6e3df] rounded-2xl p-6">
          <div class="text-[10px] font-semibold tracking-[.18em] uppercase text-[#7a7f85] mb-4">Follow Our Work</div>
          <div class="flex gap-3">
            <?php
            $socials = [
              [ 'label' => 'Instagram', 'href' => 'https://instagram.com/everridgelandscape',      'path' => 'M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z' ],
              [ 'label' => 'Facebook',  'href' => 'https://facebook.com/everridgelandscape',       'path' => 'M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z' ],
              [ 'label' => 'Houzz',     'href' => 'https://houzz.com',                              'path' => 'M6.5 0v9.7L12 7.4l5.5 2.3V0H6.5zm11 9.7L12 7.4l-5.5 2.3V24h4.6v-6.9h1.8V24H17.5V9.7z' ],
              [ 'label' => 'LinkedIn',  'href' => 'https://linkedin.com/company/everridgelandscape','path' => 'M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z' ],
            ];
            foreach ( $socials as $s ) : ?>
            <a href="<?php echo $s['href']; ?>" target="_blank" rel="noopener noreferrer"
               title="<?php echo $s['label']; ?>"
               class="w-10 h-10 rounded-xl bg-white border border-[#e6e3df] flex items-center justify-center text-[#7a7f85] hover:text-[#8a6a45] hover:border-[#8a6a45] transition-colors">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                <path d="<?php echo $s['path']; ?>"/>
              </svg>
            </a>
            <?php endforeach; ?>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>


<!-- ════════════════════════════════════════════════
     GOOGLE MAP
     ════════════════════════════════════════════════ -->
<section class="bg-[#f5f2ef] border-t border-[#e6e3df] py-16">
  <div class="max-w-[1280px] mx-auto px-6 md:px-10">
    <div class="text-center mb-8 ev-reveal">
      <span class="block text-[10px] font-semibold tracking-[.22em] uppercase text-[#8a6a45] mb-3">Service Area</span>
      <h2 class="font-['Playfair_Display'] text-[clamp(22px,3vw,34px)] font-bold text-[#0b0b0c]">
        Serving Southeast Michigan's<br>
        <span class="text-[#8a6a45]">Oakland-Macomb Corridor</span>
      </h2>
    </div>
    <div class="rounded-2xl overflow-hidden border border-[#e6e3df] shadow-sm" style="height:420px;">
      <!--
        Replace this placeholder with your actual embed:

        1. Go to maps.google.com
        2. Search "Clinton Township, MI"
        3. Click Share > Embed a map
        4. Choose a size and copy the <iframe> code
        5. Paste it here (replace the div below)

        Example:
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!..."
          width="100%" height="420" style="border:0;" allowfullscreen=""
          loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      -->
      <div class="w-full h-full bg-[#e6e3df] flex flex-col items-center justify-center gap-3">
        <svg class="w-10 h-10 text-[#8a6a45] opacity-50" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.4">
          <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0zM19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/>
        </svg>
        <p class="text-[12px] text-[#7a7f85] text-center leading-relaxed">
          Replace this placeholder with a Google Maps embed.<br>
          Center on Clinton Township, MI with ~30 mile service radius.
        </p>
      </div>
    </div>

    <!-- Service area cities -->
    <div class="mt-8 flex flex-wrap items-center justify-center gap-3">
      <?php
      $cities = [
        'Birmingham', 'Bloomfield Hills', 'Troy', 'Rochester Hills',
        'Shelby Township', 'Washington Township', 'Farmington Hills', 'Clinton Township',
      ];
      foreach ( $cities as $city ) : ?>
      <span class="text-[12px] font-medium text-[#2f3133] bg-white border border-[#e6e3df] rounded-full px-4 py-1.5">
        <?php echo $city; ?>, MI
      </span>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ════════════════════════════════════════════════
     FINAL CTA strip
     ════════════════════════════════════════════════ -->
<section class="bg-[#0b0b0c] py-16">
  <div class="max-w-[900px] mx-auto px-6 md:px-10 text-center">
    <h2 class="font-['Playfair_Display'] text-[clamp(24px,4vw,40px)] font-bold text-[#e6e3df] leading-[1.15] mb-4">
      Prefer to Talk First?<br>
      <em class="italic text-[#8a6a45]">We're Easy to Reach.</em>
    </h2>
    <p class="text-[14px] font-light text-[rgba(230,227,223,.52)] leading-relaxed mb-8 max-w-lg mx-auto">
      Call us during business hours and speak directly with Hernan. No automated systems. No hold music. Just a real conversation about your project.
    </p>
    <a href="tel:+17705550192"
       class="block font-['Playfair_Display'] font-bold text-[#8a6a45] text-[clamp(28px,4.5vw,48px)] tracking-tight hover:opacity-75 transition-opacity mb-2">
      (770) 555-0192
    </a>
    <p class="text-[11px] text-[rgba(230,227,223,.3)] tracking-[.06em]">Mon–Fri 8AM–6PM · Sat 8AM–2PM · Clinton Township, MI</p>
  </div>
</section>


<!-- ════════════════════════════════════════════════
     JAVASCRIPT — scroll reveal
     ════════════════════════════════════════════════ -->
<script>
(function () {
  const ro = new IntersectionObserver(entries => {
    entries.forEach(e => {
      if (!e.isIntersecting) return;
      e.target.classList.add('opacity-100','translate-y-0');
      e.target.classList.remove('opacity-0','translate-y-7');
      ro.unobserve(e.target);
    });
  }, { threshold: 0.12 });
  document.querySelectorAll('.ev-reveal').forEach(el => {
    el.classList.add('opacity-0','translate-y-7','transition-all','duration-700');
    ro.observe(el);
  });
})();
</script>

<?php get_footer(); ?>