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
// data-compact="true"     → no padding, transparent bg
// data-show-title="false" → hide internal title
// data-title="..."        → custom title
// data-dark-mode="true"   → transparent inputs for dark/hero backgrounds
document.querySelectorAll('[id^="render-contact-form"]').forEach(el => {
  const compact   = el.dataset.compact    === "true"
  const showTitle = el.dataset.showTitle  !== "false"
  const title     = el.dataset.title      || "Request a Free Estimate"
  const darkMode  = el.dataset.darkMode   === "true"

  ReactDOM.createRoot(el).render(
    <ContactForm
      compact={compact}
      showTitle={showTitle}
      title={title}
      darkMode={darkMode}
    />
  )
})