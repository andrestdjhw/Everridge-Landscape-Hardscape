import Navbar      from "./scripts/Navbar"
import Footer      from "./scripts/Footer"
import ContactForm from "./scripts/ContactForm"
import React       from "react"
import ReactDOM    from "react-dom/client"

// ── Navbar ────────────────────────────────────────────────────────────────────
const navEl = document.querySelector("#render-navbar-here")
if (navEl) {
  ReactDOM.createRoot(navEl).render(<Navbar />)
}

// ── Footer ────────────────────────────────────────────────────────────────────
const footEl = document.querySelector("#render-footer-here")
if (footEl) {
  ReactDOM.createRoot(footEl).render(<Footer />)
}

// ── ContactForm ───────────────────────────────────────────────────────────────
// Mounts on ANY element whose id starts with "render-contact-form"
// Supported data attributes:
//   data-compact="true"       → removes internal padding and title (use when PHP provides the header)
//   data-show-title="false"   → hides the form's own title row
//   data-title="Custom Title" → overrides the default title text
//
// Examples:
//   <div id="render-contact-form-here"></div>
//   <div id="render-contact-form-sidebar" data-compact="true" data-show-title="false"></div>
document.querySelectorAll('[id^="render-contact-form"]').forEach(el => {
  const compact   = el.dataset.compact    === "true"
  const showTitle = el.dataset.showTitle  !== "false"   // default true unless explicitly false
  const title     = el.dataset.title      || "Request a Free Estimate"

  ReactDOM.createRoot(el).render(
    <ContactForm
      compact={compact}
      showTitle={showTitle}
      title={title}
    />
  )
})