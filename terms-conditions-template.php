<?php
/**
 * Template Name: Terms & Conditions
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
      Terms &amp; Conditions
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
            'acceptance'          => 'Acceptance of Terms',
            'services'            => 'Services',
            'estimates-proposals' => 'Estimates & Proposals',
            'payment'             => 'Payment Terms',
            'project-changes'     => 'Changes & Cancellations',
            'site-conditions'     => 'Site Conditions',
            'warranties'          => 'Warranties',
            'liability'           => 'Limitation of Liability',
            'intellectual-prop'   => 'Intellectual Property',
            'website-use'         => 'Website Use',
            'governing-law'       => 'Governing Law',
            'contact'             => 'Contact Us',
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
          These Terms and Conditions ("Terms") govern your use of the website
          <strong style="color:#2f3133;">everridgelandscape.com</strong> and any services provided by
          <strong style="color:#2f3133;">Everridge Landscape & Hardscape LLC</strong> ("Everridge," "we," "us," or "our"),
          located in Clinton Township, Michigan. By using this Site or engaging our services, you agree to these Terms in full.
          If you do not agree, please do not use the Site or request our services.
        </p>

        <!-- 1 -->
        <div id="acceptance" class="ev-section">
          <h2>1. Acceptance of Terms</h2>
          <p>By accessing or using the Everridge website, submitting a contact form, requesting a free estimate, or entering into any service agreement with Everridge, you confirm that you are at least 18 years of age, have the legal authority to enter into a binding agreement, and agree to be bound by these Terms and our Privacy Policy.</p>
          <p>These Terms apply to all visitors, clients, and others who access or use the Site or our services.</p>
        </div>

        <!-- 2 -->
        <div id="services" class="ev-section">
          <h2>2. Services</h2>
          <p>Everridge Landscape & Hardscape provides professional outdoor design and construction services including, but not limited to:</p>
          <ul>
            <li>Brick and hardscape installation (paver patios, walkways, driveways, retaining walls, outdoor fireplaces)</li>
            <li>Landscape design and installation (planting plans, sod, mulch, edging, seasonal color)</li>
            <li>Garden design and photorealistic 3D rendering services</li>
            <li>Outdoor landscape lighting design and installation</li>
            <li>Seasonal maintenance and lawn care programs</li>
            <li>Paver repair and restoration</li>
          </ul>
          <p>All services are subject to a separate written agreement, proposal, or contract executed between Everridge and the client prior to work commencing. These Terms apply in addition to any such agreement. In the event of a conflict, the terms of the signed project agreement shall govern.</p>
        </div>

        <!-- 3 -->
        <div id="estimates-proposals" class="ev-section">
          <h2>3. Estimates and Proposals</h2>
          <p>All estimates, quotes, and proposals provided by Everridge are based on information available at the time of the initial consultation and site assessment. Estimates are valid for 30 days from the date of issuance unless otherwise stated.</p>
          <p>A free estimate does not constitute a binding contract. A project does not commence until both parties have executed a written project agreement and the required deposit has been received by Everridge.</p>
          <p>Proposal pricing may be subject to adjustment in the following circumstances:</p>
          <ul>
            <li>Significant changes in material costs due to market conditions</li>
            <li>Discovery of unforeseen site conditions (buried utilities, unstable soils, drainage issues) not apparent during the initial assessment</li>
            <li>Changes to the project scope requested by the client after the proposal is accepted</li>
          </ul>
          <p>Any price adjustments will be communicated in writing and require client approval before work continues.</p>
        </div>

        <!-- 4 -->
        <div id="payment" class="ev-section">
          <h2>4. Payment Terms</h2>
          <p>Payment terms are outlined in the individual project agreement. Standard payment structure is as follows unless otherwise specified:</p>
          <ul>
            <li>A deposit (typically 30–50% of the total project cost) is required prior to scheduling and material ordering</li>
            <li>Progress payments may be required at defined milestones for larger projects</li>
            <li>Final payment is due upon project completion and client sign-off at the final walkthrough</li>
          </ul>
          <p>Everridge accepts payment by check, bank transfer, and major credit cards. Credit card payments may be subject to a processing fee as disclosed at time of payment.</p>
          <div class="ev-callout">
            <strong>Late Payments:</strong> Invoices not paid within 15 days of the due date are subject to a late fee of 1.5% per month on the outstanding balance. Everridge reserves the right to suspend or terminate services on accounts with overdue balances.
          </div>
        </div>

        <!-- 5 -->
        <div id="project-changes" class="ev-section">
          <h2>5. Project Changes and Cancellations</h2>
          <h3>Change Orders</h3>
          <p>Any changes to the approved project scope, materials, or timeline must be submitted in writing and approved by both parties as a Change Order before implementation. Change Orders may affect the project price and schedule. Verbal approvals are not binding.</p>
          <h3>Client Cancellations</h3>
          <p>If you cancel a project after signing the project agreement:</p>
          <ul>
            <li>Cancellation prior to material ordering: The deposit may be partially refunded minus any design, planning, and administrative costs incurred.</li>
            <li>Cancellation after material ordering: No refund of the deposit. You may be responsible for the cost of materials already ordered or delivered.</li>
            <li>Cancellation after work has begun: Payment is due for all work completed to date, plus restocking and material costs. The deposit will be applied to this amount.</li>
          </ul>
          <h3>Everridge Cancellations</h3>
          <p>Everridge reserves the right to cancel a project in the event of safety concerns, site conditions that make completion impractical, non-payment, or circumstances beyond our control. In such cases, payment will be due only for work completed.</p>
        </div>

        <!-- 6 -->
        <div id="site-conditions" class="ev-section">
          <h2>6. Site Access and Conditions</h2>
          <p>The client is responsible for providing Everridge and its subcontractors with safe and unobstructed access to the project site during working hours. This includes:</p>
          <ul>
            <li>Removing personal property, vehicles, and obstacles from the work area prior to each work day</li>
            <li>Ensuring that children and pets are kept away from active construction areas</li>
            <li>Disclosing the location of all underground utilities, irrigation lines, and property features prior to excavation</li>
            <li>Notifying Everridge of any HOA restrictions, easements, or permit requirements applicable to the project</li>
          </ul>
          <p>Everridge is not liable for damage to undisclosed underground utilities, irrigation systems, or other features that were not identified prior to work commencing. The client is responsible for obtaining any permits required by the municipality unless otherwise specified in the project agreement.</p>
        </div>

        <!-- 7 -->
        <div id="warranties" class="ev-section">
          <h2>7. Warranties</h2>
          <h3>Workmanship Warranty</h3>
          <p>Everridge provides a <strong>1-year workmanship warranty</strong> on all hardscape and landscape installation services. This warranty covers defects in installation resulting from Everridge's work and excludes damage caused by misuse, neglect, natural events, or conditions outside Everridge's control.</p>
          <h3>Product Warranties</h3>
          <p>Materials and products installed by Everridge are subject to the manufacturer's warranty terms. Unilock and Techo-Bloc pavers carry transferable limited lifetime warranties against manufacturing defects. Lighting fixtures carry manufacturer warranties of 1–5 years depending on the product. Plant material carries a 1-year replacement warranty when installed under our maintenance program, subject to proper client care.</p>
          <h3>Warranty Exclusions</h3>
          <p>The workmanship warranty does not cover:</p>
          <ul>
            <li>Normal wear and weathering</li>
            <li>Damage resulting from acts of God (flooding, freeze events beyond design tolerances, etc.)</li>
            <li>Modifications or repairs made by parties other than Everridge after project completion</li>
            <li>Paver joint sand erosion caused by power washing without reapplication of polymeric sand</li>
            <li>Plant loss due to drought, improper irrigation, or pest damage after the warranty period</li>
          </ul>
        </div>

        <!-- 8 -->
        <div id="liability" class="ev-section">
          <h2>8. Limitation of Liability</h2>
          <p>To the fullest extent permitted by applicable law, Everridge's total liability to the client for any claim arising out of or related to our services shall not exceed the total amount paid by the client for the specific project giving rise to the claim.</p>
          <p>Everridge shall not be liable for any indirect, incidental, consequential, special, or punitive damages, including but not limited to loss of use, loss of profits, or property damage beyond the scope of the project, even if Everridge has been advised of the possibility of such damages.</p>
          <div class="ev-callout">
            <strong>Insurance:</strong> Everridge Landscape & Hardscape carries general liability insurance and workers' compensation coverage. Certificates of insurance are available upon request.
          </div>
        </div>

        <!-- 9 -->
        <div id="intellectual-prop" class="ev-section">
          <h2>9. Intellectual Property</h2>
          <p>All 3D renderings, design plans, planting plans, layouts, and visual deliverables created by Everridge remain the intellectual property of Everridge Landscape & Hardscape until full payment for the project has been received.</p>
          <p>Upon receipt of final payment, the client receives a non-exclusive license to use the completed designs for personal use related to the installed project. Designs may not be transferred to other contractors, reproduced for commercial purposes, or used for other properties without written permission from Everridge.</p>
          <p>All content on the Everridge website — including text, images, project photography, graphics, and branding — is the property of Everridge Landscape & Hardscape and may not be reproduced, distributed, or used without express written consent.</p>
        </div>

        <!-- 10 -->
        <div id="website-use" class="ev-section">
          <h2>10. Website Use</h2>
          <p>You may use the Everridge website for lawful purposes only. You agree not to:</p>
          <ul>
            <li>Use the Site in any way that violates applicable local, state, or federal laws or regulations</li>
            <li>Submit false, misleading, or fraudulent information through any form on the Site</li>
            <li>Attempt to gain unauthorized access to any portion of the Site or its related systems</li>
            <li>Use automated tools, bots, or scrapers to collect data from the Site</li>
            <li>Transmit any malicious code, virus, or harmful software</li>
          </ul>
          <p>Everridge reserves the right to block access to the Site for users who violate these Terms.</p>
          <p>The Site is provided on an "as is" and "as available" basis. Everridge makes no warranties regarding the accuracy, completeness, or availability of Site content and is not liable for any interruptions or errors in Site availability.</p>
        </div>

        <!-- 11 -->
        <div id="governing-law" class="ev-section">
          <h2>11. Governing Law and Dispute Resolution</h2>
          <p>These Terms shall be governed by and construed in accordance with the laws of the <strong>State of Michigan</strong>, without regard to its conflict of law provisions.</p>
          <p>Any dispute arising from these Terms or our services shall first be submitted to good-faith negotiation between the parties. If negotiation is unsuccessful, disputes shall be resolved through binding arbitration in Macomb County, Michigan, in accordance with the rules of the American Arbitration Association, except that either party may seek injunctive or other equitable relief in a court of competent jurisdiction.</p>
          <p>You agree that any claim must be brought in your individual capacity and not as a plaintiff or class member in any class action proceeding.</p>
        </div>

        <!-- 12 -->
        <div id="contact" class="ev-section">
          <h2>12. Contact Us</h2>
          <p>If you have questions about these Terms or wish to discuss any aspect of your project agreement, please contact us:</p>
          <div class="ev-contact-block">
            <strong>Everridge Landscape & Hardscape LLC</strong><br>
            Clinton Township, Michigan<br>
            Email: <a href="mailto:info@everridgelandscape.com">info@everridgelandscape.com</a><br>
            Phone: <a href="tel:+17705550192">(770) 555-0192</a><br>
            Hours: Mon–Fri 8:00 AM – 6:00 PM · Sat 8:00 AM – 2:00 PM
          </div>
          <p style="margin-top:20px;">
            Everridge reserves the right to update these Terms at any time. Continued use of the Site or our services after changes are posted constitutes acceptance of the revised Terms.
          </p>
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