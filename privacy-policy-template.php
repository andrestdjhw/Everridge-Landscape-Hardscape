<?php
/**
 * Template Name: Privacy Policy
 *
 * @package everridge
 */
get_header(); ?>


<!-- ════════════════════════════════════════════════
     PAGE HERO
     ════════════════════════════════════════════════ -->
<section class="relative overflow-hidden -mt-[104px]" style="min-height:32vh;">
  <div class="absolute inset-0 bg-[#0b0b0c]"></div>
  <div class="absolute inset-0" style="background:linear-gradient(to right,rgba(0,0,0,.85) 0%,rgba(0,0,0,.6) 100%);"></div>
  <div class="relative z-10 max-w-[1280px] mx-auto px-6 md:px-10 flex flex-col justify-end pb-12"
       style="min-height:32vh;padding-top:130px;">
    <div class="flex items-center gap-3 mb-3">
      <span class="block w-7 h-px bg-[#8a6a45]"></span>
      <span class="text-[10px] font-semibold tracking-[.22em] uppercase text-[#8a6a45]">Legal</span>
    </div>
    <h1 class="font-['Playfair_Display'] text-[clamp(28px,4.5vw,52px)] font-bold text-[#e6e3df] leading-[1.1]">
      Privacy Policy
    </h1>
    <p class="text-[13px] font-light text-[rgba(230,227,223,.45)] mt-3">
      Last updated: <?php echo date('F j, Y'); ?>
    </p>
  </div>
</section>


<!-- ════════════════════════════════════════════════
     CONTENT
     ════════════════════════════════════════════════ -->
<section class="bg-white py-16 md:py-24">
  <div class="max-w-[1280px] mx-auto px-6 md:px-10">
    <div class="grid grid-cols-1 lg:grid-cols-[220px_1fr] gap-12 items-start">

      <!-- Sticky TOC -->
      <nav class="hidden lg:block sticky top-32" aria-label="Table of contents">
        <div class="text-[9px] font-semibold tracking-[.2em] uppercase text-[#7a7f85] mb-4">Contents</div>
        <ul class="flex flex-col gap-1">
          <?php
          $sections = [
            'information-we-collect'   => 'Information We Collect',
            'how-we-use-information'   => 'How We Use It',
            'information-sharing'      => 'Sharing Information',
            'cookies'                  => 'Cookies',
            'third-party-services'     => 'Third-Party Services',
            'data-retention'           => 'Data Retention',
            'your-rights'              => 'Your Rights',
            'children-privacy'         => 'Children\'s Privacy',
            'changes-to-policy'        => 'Policy Changes',
            'contact-us'               => 'Contact Us',
          ];
          foreach ( $sections as $id => $label ) : ?>
          <li>
            <a href="#<?php echo $id; ?>"
               class="block text-[12px] font-light text-[#7a7f85] hover:text-[#8a6a45] transition-colors py-1.5 border-l-2 border-transparent hover:border-[#8a6a45] pl-3 leading-snug">
              <?php echo $label; ?>
            </a>
          </li>
          <?php endforeach; ?>
        </ul>
      </nav>

      <!-- Body -->
      <div class="ev-legal-body" style="font-family:'DM Sans',sans-serif;color:#2f3133;line-height:1.8;">

        <p style="font-size:15px;font-weight:300;color:#7a7f85;margin:0 0 40px;line-height:1.75;">
          Everridge Landscape & Hardscape ("Everridge," "we," "us," or "our") operates the website
          <strong style="color:#2f3133;">everridgelandscape.com</strong> (the "Site"). This Privacy Policy explains how
          we collect, use, and protect information when you visit our Site or contact us regarding our services.
          By using this Site, you agree to the practices described in this policy.
        </p>

        <!-- 1 -->
        <div id="information-we-collect" class="ev-section">
          <h2>1. Information We Collect</h2>
          <h3>Information You Provide Directly</h3>
          <p>When you submit a contact form, request a free estimate, or communicate with us, we may collect:</p>
          <ul>
            <li>Full name</li>
            <li>Phone number</li>
            <li>Email address</li>
            <li>Property address or city</li>
            <li>Description of your project or service request</li>
          </ul>
          <h3>Information Collected Automatically</h3>
          <p>When you visit our Site, we automatically collect certain technical information, including:</p>
          <ul>
            <li>IP address and approximate geographic location</li>
            <li>Browser type and version</li>
            <li>Operating system</li>
            <li>Pages visited and time spent on each page</li>
            <li>Referring website or source</li>
            <li>Device type (desktop, tablet, mobile)</li>
          </ul>
          <p>This information is collected through standard web server logs and analytics tools including Google Analytics 4.</p>
        </div>

        <!-- 2 -->
        <div id="how-we-use-information" class="ev-section">
          <h2>2. How We Use Your Information</h2>
          <p>We use the information we collect for the following purposes:</p>
          <ul>
            <li>To respond to estimate requests and inquiries submitted through our contact forms</li>
            <li>To schedule and confirm consultations, site visits, and project discussions</li>
            <li>To communicate project updates, proposals, and follow-up information</li>
            <li>To improve the performance, content, and usability of our Site</li>
            <li>To analyze how visitors find and use our Site through aggregated, anonymized analytics data</li>
            <li>To comply with applicable legal obligations</li>
          </ul>
          <p>We do not use your information for unsolicited marketing, and we will not add you to any mailing list without your explicit consent.</p>
        </div>

        <!-- 3 -->
        <div id="information-sharing" class="ev-section">
          <h2>3. Sharing of Information</h2>
          <p>Everridge does not sell, rent, or trade your personal information to third parties. We may share your information only in the following limited circumstances:</p>
          <ul>
            <li><strong>Service Providers:</strong> We use third-party tools to operate our Site and communicate with you, including EmailJS for form delivery and Google reCAPTCHA for spam prevention. These providers have access to your information only to perform these specific functions and are obligated to protect it.</li>
            <li><strong>Legal Requirements:</strong> We may disclose your information if required to do so by law, court order, or governmental authority.</li>
            <li><strong>Business Transfers:</strong> In the event of a merger, acquisition, or sale of business assets, your information may be transferred as part of that transaction. We will notify you before your information is transferred and becomes subject to a different privacy policy.</li>
          </ul>
        </div>

        <!-- 4 -->
        <div id="cookies" class="ev-section">
          <h2>4. Cookies and Tracking Technologies</h2>
          <p>Our Site uses cookies and similar tracking technologies to enhance your browsing experience and analyze Site traffic. Cookies are small text files stored on your device by your browser.</p>
          <h3>Types of Cookies We Use</h3>
          <ul>
            <li><strong>Essential Cookies:</strong> Required for the Site to function properly. These cannot be disabled.</li>
            <li><strong>Analytics Cookies:</strong> Used by Google Analytics to collect anonymized information about how visitors use the Site. No personally identifiable information is stored in these cookies.</li>
            <li><strong>reCAPTCHA Cookies:</strong> Set by Google reCAPTCHA to prevent spam and abuse on our contact forms.</li>
          </ul>
          <p>You can control cookie settings through your browser preferences. Disabling certain cookies may affect Site functionality. For more information about Google Analytics and how to opt out, visit
          <a href="https://tools.google.com/dlpage/gaoptout" target="_blank" rel="noopener noreferrer">Google Analytics Opt-out</a>.</p>
        </div>

        <!-- 5 -->
        <div id="third-party-services" class="ev-section">
          <h2>5. Third-Party Services</h2>
          <p>Our Site integrates the following third-party services. Each has its own privacy policy governing how it handles data:</p>
          <ul>
            <li><strong>Google Analytics 4:</strong> Website traffic and behavior analytics. <a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer">Google Privacy Policy</a></li>
            <li><strong>Google reCAPTCHA v2:</strong> Spam prevention on contact forms. <a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer">Google Privacy Policy</a></li>
            <li><strong>EmailJS:</strong> Secure delivery of contact form submissions to our email. <a href="https://www.emailjs.com/legal/privacy-policy/" target="_blank" rel="noopener noreferrer">EmailJS Privacy Policy</a></li>
            <li><strong>Google Fonts:</strong> Typography loaded from Google servers. Google may collect browser and IP data when fonts are requested.</li>
          </ul>
          <p>We are not responsible for the privacy practices of these third-party services.</p>
        </div>

        <!-- 6 -->
        <div id="data-retention" class="ev-section">
          <h2>6. Data Retention</h2>
          <p>We retain personal information submitted through our contact forms for as long as necessary to fulfill the purpose for which it was collected — typically the duration of a client relationship or project. If you never become a client, inquiry data is generally retained for no more than 24 months.</p>
          <p>Analytics data collected through Google Analytics is retained per Google's default retention settings (26 months). You may request deletion of your personal information at any time by contacting us directly.</p>
        </div>

        <!-- 7 -->
        <div id="your-rights" class="ev-section">
          <h2>7. Your Rights</h2>
          <p>Depending on your location, you may have the following rights regarding your personal information:</p>
          <ul>
            <li><strong>Access:</strong> The right to request a copy of the personal information we hold about you.</li>
            <li><strong>Correction:</strong> The right to request that we correct inaccurate or incomplete information.</li>
            <li><strong>Deletion:</strong> The right to request that we delete your personal information, subject to certain legal exceptions.</li>
            <li><strong>Opt-Out:</strong> The right to opt out of any marketing communications at any time.</li>
          </ul>
          <p>To exercise any of these rights, please contact us using the information provided in Section 10. We will respond to your request within 30 days.</p>
          <div class="ev-callout">
            <strong>California Residents (CCPA):</strong> You have the right to know what personal information we collect, the right to delete it, the right to opt out of its sale (we do not sell personal information), and the right to non-discrimination for exercising your privacy rights.
          </div>
        </div>

        <!-- 8 -->
        <div id="children-privacy" class="ev-section">
          <h2>8. Children's Privacy</h2>
          <p>Our Site is not directed to individuals under the age of 13. We do not knowingly collect personal information from children under 13. If we become aware that a child under 13 has submitted personal information through our Site, we will delete it promptly. If you believe we have inadvertently collected information from a minor, please contact us immediately.</p>
        </div>

        <!-- 9 -->
        <div id="changes-to-policy" class="ev-section">
          <h2>9. Changes to This Privacy Policy</h2>
          <p>We may update this Privacy Policy from time to time to reflect changes in our practices, technology, or applicable law. When we make material changes, we will update the "Last updated" date at the top of this page. We encourage you to review this policy periodically. Your continued use of the Site following any changes constitutes your acceptance of the updated policy.</p>
        </div>

        <!-- 10 -->
        <div id="contact-us" class="ev-section">
          <h2>10. Contact Us</h2>
          <p>If you have questions, concerns, or requests regarding this Privacy Policy or our data practices, please contact us:</p>
          <div class="ev-contact-block">
            <strong>Everridge Landscape & Hardscape</strong><br>
            Clinton Township, Michigan<br>
            Email: <a href="mailto:info@everridgelandscape.com">info@everridgelandscape.com</a><br>
            Phone: <a href="tel:+17705550192">(770) 555-0192</a>
          </div>
        </div>

      </div><!-- /.ev-legal-body -->
    </div>
  </div>
</section>


<!-- ════════════════════════════════════════════════
     LEGAL TYPOGRAPHY STYLES
     ════════════════════════════════════════════════ -->
<style>
.ev-legal-body .ev-section { margin-bottom: 48px; padding-bottom: 48px; border-bottom: 1px solid #e6e3df; }
.ev-legal-body .ev-section:last-child { border-bottom: none; margin-bottom: 0; padding-bottom: 0; }

.ev-legal-body h2 {
  font-family: 'Playfair Display', Georgia, serif;
  font-size: clamp(20px,2.5vw,26px); font-weight: 700;
  color: #0b0b0c; margin: 0 0 16px; line-height: 1.2;
}
.ev-legal-body h3 {
  font-family: 'DM Sans', sans-serif;
  font-size: 13px; font-weight: 600;
  color: #2f3133; margin: 24px 0 10px;
  letter-spacing: .04em; text-transform: uppercase;
}
.ev-legal-body p {
  font-size: 15px; font-weight: 300;
  color: #4a4e52; margin: 0 0 14px;
  line-height: 1.8;
}
.ev-legal-body ul {
  margin: 0 0 16px 0; padding-left: 0;
  list-style: none;
}
.ev-legal-body ul li {
  font-size: 15px; font-weight: 300;
  color: #4a4e52; line-height: 1.75;
  padding: 5px 0 5px 20px;
  position: relative;
}
.ev-legal-body ul li::before {
  content: '';
  position: absolute; left: 0; top: 14px;
  width: 5px; height: 5px; border-radius: 50%;
  background: #8a6a45;
}
.ev-legal-body a {
  color: #8a6a45; text-decoration: none;
  border-bottom: 1px solid rgba(138,106,69,.3);
  transition: border-color .2s;
}
.ev-legal-body a:hover { border-color: #8a6a45; }

.ev-callout {
  background: #f5f2ef; border-left: 3px solid #8a6a45;
  border-radius: 0 8px 8px 0;
  padding: 16px 20px; margin: 20px 0;
  font-size: 14px; font-weight: 300;
  color: #4a4e52; line-height: 1.7;
}
.ev-callout strong { color: #0b0b0c; font-weight: 600; }

.ev-contact-block {
  background: #f5f2ef; border: 1px solid #e6e3df;
  border-radius: 10px; padding: 20px 24px;
  font-size: 14px; font-weight: 300;
  color: #4a4e52; line-height: 1.9;
  margin-top: 16px;
}
.ev-contact-block strong { color: #0b0b0c; font-weight: 600; }
</style>

<?php get_footer(); ?>