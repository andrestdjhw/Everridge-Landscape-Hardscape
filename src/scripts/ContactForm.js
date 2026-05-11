import React, { useState, useEffect, useRef } from "react"

// ══════════════════════════════════════════════════════════════════════════════
//  CONFIGURATION — fill these in before going live
//  EmailJS  → https://emailjs.com  (free up to 200 emails/month)
//  reCAPTCHA → https://www.google.com/recaptcha/admin  (v2 "I'm not a robot")
// ══════════════════════════════════════════════════════════════════════════════

// ══════════════════════════════════════════════════════════════════════════════
//  EmailJS template variables expected:
//    {{from_name}}    — full name
//    {{from_phone}}   — phone number
//    {{from_email}}   — email address
//    {{service}}      — service needed
//    {{address}}      — property address or city
//    {{message}}      — project description
//    {{reply_to}}     — reply-to address (same as from_email)
// ══════════════════════════════════════════════════════════════════════════════

const SERVICES = [
  "Brick + Hardscapes",
  "Landscape Design & Installation",
  "Garden Design & 3D Renderings",
  "Outdoor Lighting Systems",
  "Full Transformation",
  "Other",
]

const INITIAL = {
  full_name: "", phone: "", email: "",
  service: "", address: "", message: "",
}

// ── Design tokens ─────────────────────────────────────────────────────────────
// ── EmailJS + reCAPTCHA config ────────────────────────────────────────────────
const EMAILJS_PUBLIC_KEY  = "stbQfV1XDrMzJ1pCJ"
const EMAILJS_SERVICE_ID  = "service_d1i83um"
const EMAILJS_TEMPLATE_ID = "template_ve4aw08"
const RECAPTCHA_SITE_KEY  = "6Lcf0OEsAAAAAPn21zHfnaJJlWaiJMFT7WGV_wyr"

const C = {
  gold:    "#8a6a45",
  goldDk:  "#7a5c38",
  dark:    "#0b0b0c",
  char:    "#2f3133",
  slate:   "#7a7f85",
  cream:   "#e6e3df",
  bg:      "#f5f2ef",
  white:   "#ffffff",
  green:   "#1f3a32",
  border:  "#e6e3df",
  borderF: "#8a6a45",
  error:   "#c0392b",
}

// ── Font loader ────────────────────────────────────────────────────────────────
function useFonts() {
  useEffect(() => {
    if (document.getElementById("everridge-fonts")) return
    const link = document.createElement("link")
    link.id   = "everridge-fonts"
    link.rel  = "stylesheet"
    link.href = "https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=DM+Sans:wght@300;400;500;600&display=swap"
    document.head.appendChild(link)
  }, [])
}

// ── Script loaders ─────────────────────────────────────────────────────────────
function useEmailJS() {
  const [ready, setReady] = useState(false)
  useEffect(() => {
    if (window.emailjs) { setReady(true); return }
    const s = document.createElement("script")
    s.src = "https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"
    s.onload = () => {
      window.emailjs.init({ publicKey: EMAILJS_PUBLIC_KEY })
      setReady(true)
    }
    document.head.appendChild(s)
  }, [])
  return ready
}

function useRecaptcha(siteKey) {
  const [ready, setReady] = useState(false)
  useEffect(() => {
    if (window.grecaptcha) { setReady(true); return }
    // grecaptcha callback when API loads
    window.__rcLoaded = () => setReady(true)
    if (!document.querySelector('script[src*="recaptcha"]')) {
      const s = document.createElement("script")
      s.src = `https://www.google.com/recaptcha/api.js?onload=__rcLoaded&render=explicit`
      s.async = true; s.defer = true
      document.head.appendChild(s)
    }
  }, [siteKey])
  return ready
}

// ── Icons ──────────────────────────────────────────────────────────────────────
const CheckIcon = () => (
  <svg width="22" height="22" fill="none" viewBox="0 0 24 24" stroke="#ffffff" strokeWidth="2.2">
    <path strokeLinecap="round" strokeLinejoin="round" d="M4.5 12.75l6 6 9-13.5"/>
  </svg>
)

const ArrowIcon = () => (
  <svg width="13" height="13" fill="none" viewBox="0 0 24 24" stroke="currentColor" strokeWidth="2">
    <path strokeLinecap="round" strokeLinejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
  </svg>
)

const SpinnerIcon = () => (
  <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2.5"
    style={{ animation: "spin 0.8s linear infinite" }}>
    <path strokeLinecap="round" d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/>
  </svg>
)

// ── Field component ────────────────────────────────────────────────────────────
function Field({ label, required, error, children, darkMode = false }) {
  return (
    <div>
      <label style={{
        display: "block",
        fontFamily: "'Gotham Book', sans-serif",
        fontSize: 10, fontWeight: 600,
        letterSpacing: ".08em", textTransform: "uppercase",
        color: darkMode ? "rgba(230,227,223,.6)" : C.slate, marginBottom: 6,
      }}>
        {label} {required && <span style={{ color: C.gold }}>*</span>}
      </label>
      {children}
      {error && (
        <p style={{
          fontFamily: "'DM Sans', sans-serif",
          fontSize: 11, color: C.error,
          marginTop: 4, marginBottom: 0,
        }}>
          {error}
        </p>
      )}
    </div>
  )
}

// ── Input / Select / Textarea styles ──────────────────────────────────────────
function inputStyle(hasError, darkMode = false) {
  return {
    width: "100%", boxSizing: "border-box",
    fontFamily: "'Gotham Book', sans-serif",
    fontSize: 14, fontWeight: 400,
    color:      darkMode ? "rgba(230,227,223,.9)" : C.dark,
    background: darkMode ? "rgba(255,255,255,.08)" : C.white,
    border: `1px solid ${hasError ? C.error : darkMode ? "rgba(255,255,255,.18)" : C.border}`,
    borderRadius: 0,
    padding: "12px 16px",
    outline: "none",
    transition: "border-color .2s, background .2s",
  }
}

// ── Main component ─────────────────────────────────────────────────────────────
function ContactForm({
  // Props for embedding flexibility
  title         = "Request a Free Estimate",
  subtitle      = "Tell us about your project and we'll reach out within 24–48 hours.",
  showTitle     = true,
  bgColor       = C.bg,
  compact       = false,   // compact=true → no padding, transparent bg
  darkMode      = false,   // darkMode=true → inputs/labels optimised for dark backgrounds
}) {
  useFonts()
  const ejsReady = useEmailJS()
  const rcReady  = useRecaptcha(RECAPTCHA_SITE_KEY)

  const [fields,   setFields]   = useState(INITIAL)
  const [errors,   setErrors]   = useState({})
  const [status,   setStatus]   = useState("idle") // idle | sending | success | error
  const [rcToken,  setRcToken]  = useState(null)
  const [rcError,  setRcError]  = useState(false)
  const rcRef  = useRef(null)
  const rcWid  = useRef(null)

  // Render reCAPTCHA widget once API is ready
  useEffect(() => {
    if (!rcReady || !rcRef.current || rcWid.current !== null) return
    rcWid.current = window.grecaptcha.render(rcRef.current, {
      sitekey:  RECAPTCHA_SITE_KEY,
      theme:    "light",
      callback: (token) => { setRcToken(token); setRcError(false) },
      "expired-callback": () => setRcToken(null),
      "error-callback":   () => setRcToken(null),
    })
  }, [rcReady])

  // ── Validation ──────────────────────────────────────────────────────────────
  const validate = () => {
    const e = {}
    if (!fields.full_name.trim() || fields.full_name.trim().length < 2)
      e.full_name = "Please enter your full name."
    if (!fields.phone.trim() || fields.phone.replace(/\D/g,"").length < 7)
      e.phone = "Please enter a valid phone number."
    if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(fields.email.trim()))
      e.email = "Please enter a valid email address."
    if (!fields.service)
      e.service = "Please select a service."
    if (!fields.address.trim() || fields.address.trim().length < 2)
      e.address = "Please enter your address or city."
    return e
  }

  // ── Submit ──────────────────────────────────────────────────────────────────
  const handleSubmit = async (e) => {
    e.preventDefault()

    const errs = validate()
    if (Object.keys(errs).length) { setErrors(errs); return }

    if (!rcToken) { setRcError(true); return }

    setStatus("sending")
    setErrors({})

    try {
      await window.emailjs.send(
        EMAILJS_SERVICE_ID,
        EMAILJS_TEMPLATE_ID,
        {
          from_name:  fields.full_name,
          from_phone: fields.phone,
          from_email: fields.email,
          service:    fields.service,
          address:    fields.address,
          message:    fields.message || "No additional details provided.",
          reply_to:   fields.email,
          "g-recaptcha-response": rcToken,
        }
      )
      setStatus("success")
      setFields(INITIAL)
      setRcToken(null)
      if (window.grecaptcha && rcWid.current !== null) {
        window.grecaptcha.reset(rcWid.current)
      }
    } catch (err) {
      console.error("EmailJS error:", err)
      setStatus("error")
    }
  }

  const set = (field) => (ev) => {
    setFields(prev => ({ ...prev, [field]: ev.target.value }))
    if (errors[field]) setErrors(prev => { const n = {...prev}; delete n[field]; return n })
  }

  const focusStyle  = { borderColor: C.borderF }
  const normalStyle = {}

  // ── Success state ────────────────────────────────────────────────────────────
  if (status === "success") {
    return (
      <div style={{
        background: bgColor,
        borderRadius: compact ? 0 : 14,
        padding: compact ? "32px 0" : "52px 44px",
        textAlign: "center",
      }}>
        <div style={{
          width: 56, height: 56, borderRadius: "50%",
          background: `linear-gradient(135deg, ${C.green}, #152a22)`,
          display: "flex", alignItems: "center", justifyContent: "center",
          margin: "0 auto 20px",
          boxShadow: `0 4px 20px rgba(31,58,50,.25)`,
        }}>
          <CheckIcon />
        </div>
        <h3 style={{
          fontFamily: "'Playfair Display', serif",
          fontSize: 24, fontWeight: 700,
          color: C.dark, margin: "0 0 10px",
        }}>
          Request Received
        </h3>
        <p style={{
          fontFamily: "'DM Sans', sans-serif",
          fontSize: 14, fontWeight: 300,
          color: C.slate, lineHeight: 1.7, margin: "0 0 24px",
        }}>
          We'll review your request and reach out within<br />
          <strong style={{ color: C.char, fontWeight: 600 }}>24 to 48 business hours.</strong>
        </p>
        <button
          onClick={() => setStatus("idle")}
          style={{
            fontFamily: "'DM Sans', sans-serif",
            fontSize: 11, fontWeight: 600,
            letterSpacing: ".08em", textTransform: "uppercase",
            color: C.gold, background: "none", border: `1px solid ${C.border}`,
            borderRadius: 6, padding: "9px 20px", cursor: "pointer",
          }}
        >
          Send Another Request
        </button>
      </div>
    )
  }

  // ── Form ─────────────────────────────────────────────────────────────────────
  return (
    <>
      <style>{`
        @keyframes spin { to { transform: rotate(360deg); } }
        .ev-input:focus { border-color: ${C.borderF} !important; }
        .ev-input::placeholder { color: ${darkMode ? "rgba(230,227,223,.35)" : C.slate}; opacity: 1; }
        .ev-select option { color: ${C.dark}; background: ${C.white}; }
      `}</style>

      <div style={{
        background: "transparent",
        padding: compact ? 0 : "40px 36px",
      }}>

        {showTitle && !compact && (
          <div style={{ marginBottom: 28 }}>
            <span style={{
              fontFamily: "'DM Sans', sans-serif",
              fontSize: 10, fontWeight: 600,
              letterSpacing: ".22em", textTransform: "uppercase",
              color: C.gold, display: "block", marginBottom: 10,
            }}>
              Get Started
            </span>
            <h2 style={{
              fontFamily: "'Playfair Display', serif",
              fontSize: "clamp(24px,3vw,32px)", fontWeight: 700,
              color: C.dark, margin: "0 0 8px", lineHeight: 1.2,
            }}>
              {title}
            </h2>
            <p style={{
              fontFamily: "'DM Sans', sans-serif",
              fontSize: 13, fontWeight: 300,
              color: C.slate, margin: 0, lineHeight: 1.65,
            }}>
              {subtitle}
            </p>
          </div>
        )}

        <form onSubmit={handleSubmit} noValidate>
          <div style={{ display: "flex", flexDirection: "column", gap: 16 }}>

            {/* Name + Phone */}
            <div style={{ display: "grid", gridTemplateColumns: "1fr 1fr", gap: 14 }}
                 className="ev-form-2col">
              <Field darkMode={darkMode} label="Full Name" required error={errors.full_name}>
                <input
                  type="text" value={fields.full_name}
                  onChange={set("full_name")}
                  placeholder="John Smith"
                  className="ev-input"
                  style={inputStyle(!!errors.full_name, darkMode)}
                  onFocus={e => e.target.style.borderColor = C.borderF}
                  onBlur={e  => e.target.style.borderColor = errors.full_name ? C.error : C.border}
                />
              </Field>
              <Field darkMode={darkMode} label="Phone Number" required error={errors.phone}>
                <input
                  type="tel" value={fields.phone}
                  onChange={set("phone")}
                  placeholder="(248) 555-0100"
                  className="ev-input"
                  style={inputStyle(!!errors.phone, darkMode)}
                  onFocus={e => e.target.style.borderColor = C.borderF}
                  onBlur={e  => e.target.style.borderColor = errors.phone ? C.error : C.border}
                />
              </Field>
            </div>

            {/* Email */}
            <Field darkMode={darkMode} label="Email Address" required error={errors.email}>
              <input
                type="email" value={fields.email}
                onChange={set("email")}
                placeholder="john@email.com"
                className="ev-input"
                style={inputStyle(!!errors.email, darkMode)}
                onFocus={e => e.target.style.borderColor = C.borderF}
                onBlur={e  => e.target.style.borderColor = errors.email ? C.error : C.border}
              />
            </Field>

            {/* Service */}
            <Field darkMode={darkMode} label="Service Needed" required error={errors.service}>
              <select
                value={fields.service}
                onChange={set("service")}
                className="ev-input ev-select"
                style={{ ...inputStyle(!!errors.service, darkMode), cursor: "pointer" }}
                onFocus={e => e.target.style.borderColor = C.borderF}
                onBlur={e  => e.target.style.borderColor = errors.service ? C.error : C.border}
              >
                <option value="" disabled>Select a service...</option>
                {SERVICES.map(s => <option key={s} value={s}>{s}</option>)}
              </select>
            </Field>

            {/* Address */}
            <Field darkMode={darkMode} label="Property Address or City" required error={errors.address}>
              <input
                type="text" value={fields.address}
                onChange={set("address")}
                placeholder="Troy, MI or 1234 Oak St, Birmingham MI"
                className="ev-input"
                style={inputStyle(!!errors.address, darkMode)}
                onFocus={e => e.target.style.borderColor = C.borderF}
                onBlur={e  => e.target.style.borderColor = errors.address ? C.error : C.border}
              />
            </Field>

            {/* Message */}
            <Field darkMode={darkMode} label="Tell Us About Your Project" error={errors.message}>
              <textarea
                value={fields.message}
                onChange={set("message")}
                placeholder="Describe your vision, timeline, or any specific requirements..."
                rows={4}
                className="ev-input"
                style={{ ...inputStyle(false, darkMode), resize: "vertical", minHeight: 96 }}
                onFocus={e => e.target.style.borderColor = C.borderF}
                onBlur={e  => e.target.style.borderColor = C.border}
              />
            </Field>

            {/* reCAPTCHA */}
            <div>
              <div ref={rcRef} />
              {!rcReady && (
                <div style={{
                  fontFamily: "'DM Sans', sans-serif",
                  fontSize: 11, color: C.slate,
                }}>
                  Loading security check...
                </div>
              )}
              {rcError && (
                <p style={{
                  fontFamily: "'DM Sans', sans-serif",
                  fontSize: 11, color: C.error, marginTop: 6,
                }}>
                  Please complete the reCAPTCHA verification.
                </p>
              )}
            </div>

            {/* Submit */}
            <button
              type="submit"
              disabled={status === "sending"}
              style={{
                width: "100%",
                display: "flex", alignItems: "center", justifyContent: "center", gap: 8,
                fontFamily: "'DM Sans', sans-serif",
                fontSize: 12, fontWeight: 700,
                letterSpacing: ".1em", textTransform: "uppercase",
                color: "#ffffff",
                background: status === "sending"
                  ? C.slate
                  : `linear-gradient(135deg, ${C.gold}, ${C.goldDk})`,
                border: "none", borderRadius: 7,
                padding: "15px 0",
                cursor: status === "sending" ? "not-allowed" : "pointer",
                transition: "opacity .2s",
                opacity: status === "sending" ? .75 : 1,
              }}
              onMouseEnter={e => { if (status !== "sending") e.currentTarget.style.opacity = ".85" }}
              onMouseLeave={e => { e.currentTarget.style.opacity = "1" }}
            >
              {status === "sending" ? (
                <><SpinnerIcon /> Sending...</>
              ) : (
                <>Send My Request <ArrowIcon /></>
              )}
            </button>

            {/* Generic error */}
            {status === "error" && (
              <div style={{
                fontFamily: "'DM Sans', sans-serif",
                fontSize: 12, color: C.error,
                background: "#fdf2f2", border: "1px solid #f5c6c6",
                borderRadius: 6, padding: "10px 14px", textAlign: "center",
              }}>
                Something went wrong. Please try again or call us directly at{" "}
                <a href="tel:+17705550192" style={{ color: C.error, fontWeight: 600 }}>
                  (770) 555-0192
                </a>.
              </div>
            )}

          </div>
        </form>

        {/* Trust line */}
        <p style={{
          fontFamily: "'DM Sans', sans-serif",
          fontSize: 11, fontWeight: 300,
          color: darkMode ? "rgba(230,227,223,.35)" : C.slate, marginTop: 18,
          textAlign: "center", lineHeight: 1.7,
        }}>
          We respond within 24–48 hours · No pressure · Licensed & Insured · 17+ Years Experience
        </p>

      </div>

      {/* Responsive 2-col on mobile */}
      <style>{`
        @media (max-width: 560px) {
          .ev-form-2col { grid-template-columns: 1fr !important; }
        }
      `}</style>
    </>
  )
}

export default ContactForm