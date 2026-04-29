import React, { useState, useEffect, useRef } from "react"

// ── Config ────────────────────────────────────────────────────────────────────
const NAV_LINKS = [
  { label: "Home",     href: "/" },
  { label: "About",    href: "/about" },
  {
    label: "Services",
    href: "/services",
    dropdown: [
      { label: "Brick + Hardscapes",                href: "/services/brick-hardscapes"            },
      { label: "Landscape Design & Installation",   href: "/services/landscape-design"            },
      { label: "Garden Design & 3D Renderings",     href: "/services/garden-design-3d-renderings" },
      { label: "Outdoor Lighting Systems",          href: "/services/outdoor-lighting-systems"    },
    ],
  },
  { label: "Our Work", href: "/our-work" },
  {
    label: "Locations",
    href: "/locations",
    dropdown: [
      { label: "Atlanta, GA",    href: "/locations/atlanta"    },
      { label: "Marietta, GA",   href: "/locations/marietta"   },
      { label: "Roswell, GA",    href: "/locations/roswell"    },
      { label: "Alpharetta, GA", href: "/locations/alpharetta" },
      { label: "Kennesaw, GA",   href: "/locations/kennesaw"   },
    ],
  },
  { label: "Contact", href: "/contact" },
]

const PHONE      = "(770) 555-0192"
const PHONE_HREF = "tel:+17705550192"
const EMAIL      = "info@everridgelandscape.com"
const EMAIL_HREF = "mailto:info@everridgelandscape.com"
const ADDRESS    = "Clinton Township, MI"
const MAPS_HREF  = "https://maps.google.com/?q=Clinton+Township+MI"
const CTA_HREF   = "/contact"

const SOCIAL_LINKS = [
  {
    label: "Instagram",
    href:  "https://instagram.com/everridgelandscape",
    icon: <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>,
  },
  {
    label: "Facebook",
    href:  "https://facebook.com/everridgelandscape",
    icon: <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>,
  },
  {
    label: "Houzz",
    href:  "https://houzz.com",
    icon: <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M6.5 0v9.7L12 7.4l5.5 2.3V0H6.5zm11 9.7L12 7.4l-5.5 2.3V24h4.6v-6.9h1.8V24H17.5V9.7z"/></svg>,
  },
  {
    label: "LinkedIn",
    href:  "https://linkedin.com/company/everridgelandscape",
    icon: <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>,
  },
]

// ── Tokens ────────────────────────────────────────────────────────────────────
const GOLD    = "#c9a96e"
const GOLD_DK = "#b8924a"
const BG      = "#0f0f0f"
const BG2     = "#1a1a1a"
const BG3     = "#242424"
const GREEN   = "#2d4a35"
const BORDER  = "#2a2a2a"

// ── Fonts ─────────────────────────────────────────────────────────────────────
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

// ── Icons ─────────────────────────────────────────────────────────────────────
const PhoneIcon = ({ size = 13 }) => (
  <svg width={size} height={size} viewBox="0 0 24 24" fill="currentColor">
    <path fillRule="evenodd" d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z" clipRule="evenodd" />
  </svg>
)

const EmailIcon = ({ size = 13 }) => (
  <svg width={size} height={size} viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="1.8">
    <path strokeLinecap="round" strokeLinejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
  </svg>
)

const MapPinIcon = ({ size = 13 }) => (
  <svg width={size} height={size} viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="1.8">
    <path strokeLinecap="round" strokeLinejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
    <path strokeLinecap="round" strokeLinejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
  </svg>
)

const ChevronDown = ({ open }) => (
  <svg width="11" height="11" viewBox="0 0 20 20" fill="currentColor" style={{
    marginLeft: 4,
    transition: "transform 0.2s",
    transform: open ? "rotate(180deg)" : "rotate(0deg)",
    flexShrink: 0,
  }}>
    <path fillRule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clipRule="evenodd" />
  </svg>
)

const HamburgerIcon = () => (
  <svg width="22" height="22" fill="none" viewBox="0 0 24 24" stroke="currentColor" strokeWidth={1.6}>
    <path strokeLinecap="round" strokeLinejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
  </svg>
)

const XIcon = () => (
  <svg width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor" strokeWidth={1.8}>
    <path strokeLinecap="round" strokeLinejoin="round" d="M6 18L18 6M6 6l12 12" />
  </svg>
)

const ArrowRight = () => (
  <svg width="10" height="10" fill="none" viewBox="0 0 24 24" stroke="currentColor" strokeWidth={2}>
    <path strokeLinecap="round" strokeLinejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
  </svg>
)

// ── Desktop Dropdown ──────────────────────────────────────────────────────────
function Dropdown({ items, isOpen }) {
  return (
    <div style={{
      position: "absolute",
      top: "calc(100% + 10px)",
      left: "50%",
      width: 220,
      background: BG2,
      border: `1px solid ${BORDER}`,
      borderRadius: 8,
      overflow: "hidden",
      zIndex: 100,
      boxShadow: "0 20px 60px rgba(0,0,0,0.6)",
      opacity: isOpen ? 1 : 0,
      pointerEvents: isOpen ? "auto" : "none",
      transform: isOpen ? "translateX(-50%) translateY(0)" : "translateX(-50%) translateY(-8px)",
      transition: "opacity 0.18s ease, transform 0.18s ease",
    }}>
      <div style={{ height: 2, background: `linear-gradient(90deg, ${GOLD}, ${GOLD_DK})` }} />
      <div style={{ padding: "6px 0" }}>
        {items.map(item => (
          <a key={item.href} href={item.href} style={{
            display: "flex", alignItems: "center", justifyContent: "space-between",
            padding: "10px 18px",
            fontFamily: "'DM Sans', sans-serif",
            fontSize: 13, fontWeight: 400,
            color: "#808078", textDecoration: "none",
            letterSpacing: "0.01em",
            transition: "color 0.15s, background 0.15s",
          }}
            onMouseEnter={e => { e.currentTarget.style.color = GOLD; e.currentTarget.style.background = BG3 }}
            onMouseLeave={e => { e.currentTarget.style.color = "#808078"; e.currentTarget.style.background = "transparent" }}
          >
            {item.label}
            <span style={{ color: GOLD, opacity: 0.4 }}><ArrowRight /></span>
          </a>
        ))}
      </div>
    </div>
  )
}

// ── Mobile Menu ───────────────────────────────────────────────────────────────
function MobileMenu({ isOpen, onClose }) {
  const [openSection, setOpenSection] = useState(null)

  return (
    <>
      {/* Backdrop */}
      <div onClick={onClose} style={{
        position: "fixed", inset: 0, zIndex: 60,
        background: "rgba(0,0,0,0.7)",
        backdropFilter: "blur(4px)",
        opacity: isOpen ? 1 : 0,
        pointerEvents: isOpen ? "auto" : "none",
        transition: "opacity 0.3s",
      }} />

      {/* Side panel */}
      <div style={{
        position: "fixed", top: 0, right: 0, bottom: 0, zIndex: 70,
        width: "min(320px, 85vw)",
        background: BG2,
        borderLeft: `1px solid ${BORDER}`,
        transform: isOpen ? "translateX(0)" : "translateX(100%)",
        transition: "transform 0.32s cubic-bezier(0.32, 0.72, 0, 1)",
        boxShadow: "-20px 0 60px rgba(0,0,0,0.5)",
        display: "flex", flexDirection: "column",
        overflowY: "auto",
      }}>
        {/* Gold top accent */}
        <div style={{ height: 2, background: `linear-gradient(90deg, ${GOLD}, ${GOLD_DK})`, flexShrink: 0 }} />

        {/* Header */}
        <div style={{
          display: "flex", alignItems: "center", justifyContent: "space-between",
          padding: "20px 20px 16px",
          borderBottom: `1px solid ${BORDER}`,
          flexShrink: 0,
        }}>
          <a href="/" onClick={onClose} style={{ display: "flex", alignItems: "center", gap: 10, textDecoration: "none" }}>
            <div style={{
              width: 30, height: 30,
              background: `linear-gradient(150deg, ${GREEN}, #1a3025)`,
              borderRadius: 5, display: "flex", alignItems: "center", justifyContent: "center",
            }}>
              <svg viewBox="0 0 24 24" fill="none" width="15" height="15" stroke={GOLD} strokeWidth="2">
                <path strokeLinecap="round" strokeLinejoin="round" d="M12 2C6.5 2 2 7.5 2 13c0 4.4 3.6 8 8 8s8-3.6 8-8C18 7.5 13.5 2 12 2z" />
                <path strokeLinecap="round" strokeLinejoin="round" d="M12 21v-9M8.5 16l3.5-4 3.5 4" />
              </svg>
            </div>
            <span style={{
              fontFamily: "'Playfair Display', Georgia, serif",
              fontSize: 16, fontWeight: 700, color: "#f0ece6",
            }}>Everridge</span>
          </a>
          <button onClick={onClose} style={{
            background: BG3, border: "none", borderRadius: 6,
            color: "#686860", padding: "7px 8px", cursor: "pointer",
            display: "flex", alignItems: "center",
          }}>
            <XIcon />
          </button>
        </div>

        {/* Links */}
        <nav style={{ padding: "8px 12px", flex: 1 }}>
          {NAV_LINKS.map(link => (
            <div key={link.label}>
              {link.dropdown ? (
                <>
                  <button
                    onClick={() => setOpenSection(s => s === link.label ? null : link.label)}
                    style={{
                      width: "100%", display: "flex", alignItems: "center",
                      justifyContent: "space-between",
                      padding: "13px 12px",
                      background: "none", border: "none", cursor: "pointer",
                      fontFamily: "'DM Sans', sans-serif",
                      fontSize: 15, fontWeight: 500,
                      color: openSection === link.label ? GOLD : "#c8c4be",
                      borderRadius: 8, transition: "color 0.15s",
                    }}>
                    {link.label}
                    <ChevronDown open={openSection === link.label} />
                  </button>
                  <div style={{
                    overflow: "hidden",
                    maxHeight: openSection === link.label ? 400 : 0,
                    transition: "max-height 0.25s ease",
                  }}>
                    <div style={{ paddingLeft: 12, paddingBottom: 6 }}>
                      {link.dropdown.map(sub => (
                        <a key={sub.href} href={sub.href} style={{
                          display: "block", padding: "9px 12px",
                          fontFamily: "'DM Sans', sans-serif",
                          fontSize: 13, fontWeight: 400,
                          color: "#585850", textDecoration: "none",
                          borderRadius: 6, transition: "color 0.15s",
                        }}
                          onMouseEnter={e => e.currentTarget.style.color = GOLD}
                          onMouseLeave={e => e.currentTarget.style.color = "#585850"}
                        >
                          — {sub.label}
                        </a>
                      ))}
                    </div>
                  </div>
                </>
              ) : (
                <a href={link.href} style={{
                  display: "block", padding: "13px 12px",
                  fontFamily: "'DM Sans', sans-serif",
                  fontSize: 15, fontWeight: 500,
                  color: "#c8c4be", textDecoration: "none", borderRadius: 8,
                }}>
                  {link.label}
                </a>
              )}
            </div>
          ))}
        </nav>

        {/* Bottom CTAs */}
        <div style={{ padding: "16px 20px 32px", borderTop: `1px solid ${BORDER}`, flexShrink: 0 }}>
          <a href={CTA_HREF} style={{
            display: "block", textAlign: "center",
            background: `linear-gradient(135deg, ${GOLD}, ${GOLD_DK})`,
            color: "#0f0f0f",
            fontFamily: "'DM Sans', sans-serif",
            fontSize: 12, fontWeight: 700,
            padding: "14px 0", borderRadius: 8,
            textDecoration: "none", letterSpacing: "0.1em",
            textTransform: "uppercase",
          }}>
            Get a Free Estimate
          </a>
          <a href={PHONE_HREF} style={{
            display: "flex", alignItems: "center", justifyContent: "center", gap: 7,
            marginTop: 12,
            fontFamily: "'DM Sans', sans-serif",
            fontSize: 13, fontWeight: 400,
            color: GOLD, textDecoration: "none", opacity: 0.8,
          }}>
            <PhoneIcon /> {PHONE}
          </a>
          <a href={EMAIL_HREF} style={{
            display: "flex", alignItems: "center", justifyContent: "center", gap: 7,
            marginTop: 8,
            fontFamily: "'DM Sans', sans-serif",
            fontSize: 12, fontWeight: 400,
            color: "#686860", textDecoration: "none",
          }}>
            <EmailIcon /> {EMAIL}
          </a>
          {/* Social icons row in drawer */}
          <div style={{ display: "flex", justifyContent: "center", gap: 8, marginTop: 16, paddingTop: 16, borderTop: `1px solid ${BORDER}` }}>
            {SOCIAL_LINKS.map(s => (
              <a key={s.label} href={s.href} target="_blank" rel="noopener noreferrer"
                title={s.label}
                style={{
                  width: 36, height: 36,
                  display: "flex", alignItems: "center", justifyContent: "center",
                  background: BG3, border: `1px solid ${BORDER}`,
                  borderRadius: 6, color: "#686860",
                  textDecoration: "none", transition: "color 0.15s, border-color 0.15s",
                }}
                onMouseEnter={e => { e.currentTarget.style.color = GOLD; e.currentTarget.style.borderColor = GOLD }}
                onMouseLeave={e => { e.currentTarget.style.color = "#686860"; e.currentTarget.style.borderColor = BORDER }}
              >
                {s.icon}
              </a>
            ))}
          </div>
        </div>
      </div>
    </>
  )
}

// ── Navbar ────────────────────────────────────────────────────────────────────
function Navbar() {
  useFonts()

  const [scrolled,     setScrolled]     = useState(false)
  const [openDropdown, setOpenDropdown] = useState(null)
  const [menuOpen,     setMenuOpen]     = useState(false)
  const navRef   = useRef(null)
  const timerRef = useRef(null)

  useEffect(() => {
    const onScroll = () => setScrolled(window.scrollY > 40)
    window.addEventListener("scroll", onScroll, { passive: true })
    return () => window.removeEventListener("scroll", onScroll)
  }, [])

  useEffect(() => {
    const handler = e => {
      if (navRef.current && !navRef.current.contains(e.target)) setOpenDropdown(null)
    }
    document.addEventListener("mousedown", handler)
    return () => document.removeEventListener("mousedown", handler)
  }, [])

  const onEnter = label => { clearTimeout(timerRef.current); setOpenDropdown(label) }
  const onLeave = ()    => { timerRef.current = setTimeout(() => setOpenDropdown(null), 130) }

  return (
    <>
      <header ref={navRef} style={{
        position: "fixed", top: 0, left: 0, right: 0, zIndex: 50,
        background: scrolled ? "rgba(10,10,10,0.96)" : BG,
        borderBottom: `1px solid ${scrolled ? BORDER : "transparent"}`,
        backdropFilter: scrolled ? "blur(12px)" : "none",
        boxShadow: scrolled ? "0 4px 40px rgba(0,0,0,0.5)" : "none",
        transition: "background 0.35s, border-color 0.35s, box-shadow 0.35s",
      }}>

        {/* ── Top bar ── */}
        <div style={{ background: BG2, borderBottom: `1px solid ${BORDER}` }}>
          <div style={{
            maxWidth: 1280, margin: "0 auto", padding: "0 24px",
            display: "flex", alignItems: "center", justifyContent: "space-between",
            height: 36,
          }}>

            {/* LEFT — phone + email (desktop) / phone only (mobile) */}
            <div style={{ display: "flex", alignItems: "center", gap: 20 }}>
              <a href={PHONE_HREF} style={{
                display: "flex", alignItems: "center", gap: 6,
                fontFamily: "'DM Sans', sans-serif",
                fontSize: 11, fontWeight: 500,
                color: GOLD, textDecoration: "none",
                transition: "opacity 0.15s",
              }}
                onMouseEnter={e => e.currentTarget.style.opacity = "0.7"}
                onMouseLeave={e => e.currentTarget.style.opacity = "1"}
              >
                <PhoneIcon size={11} /> <span>{PHONE}</span>
              </a>
              <a href={EMAIL_HREF} className="hidden md:flex" style={{
                alignItems: "center", gap: 6,
                fontFamily: "'DM Sans', sans-serif",
                fontSize: 11, fontWeight: 400,
                color: "#686860", textDecoration: "none",
                transition: "color 0.15s",
              }}
                onMouseEnter={e => e.currentTarget.style.color = GOLD}
                onMouseLeave={e => e.currentTarget.style.color = "#686860"}
              >
                <EmailIcon size={11} /> <span>{EMAIL}</span>
              </a>
            </div>

            {/* CENTER — map pin + address (clickable) */}
            <a href={MAPS_HREF} target="_blank" rel="noopener noreferrer"
              className="hidden md:flex"
              style={{
                alignItems: "center", gap: 6,
                fontFamily: "'DM Sans', sans-serif",
                fontSize: 11, fontWeight: 400,
                color: "#686860", textDecoration: "none",
                position: "absolute", left: "50%", transform: "translateX(-50%)",
                transition: "color 0.15s",
              }}
              onMouseEnter={e => e.currentTarget.style.color = GOLD}
              onMouseLeave={e => e.currentTarget.style.color = "#686860"}
            >
              <MapPinIcon size={11} />
              <span>{ADDRESS}</span>
            </a>

            {/* RIGHT — social icons */}
            <div style={{ display: "flex", alignItems: "center", gap: 4 }}>
              {SOCIAL_LINKS.map(s => (
                <a key={s.label} href={s.href} target="_blank" rel="noopener noreferrer"
                  title={s.label}
                  style={{
                    width: 28, height: 28,
                    display: "flex", alignItems: "center", justifyContent: "center",
                    color: "#585850", textDecoration: "none", borderRadius: 4,
                    transition: "color 0.15s",
                  }}
                  onMouseEnter={e => e.currentTarget.style.color = GOLD}
                  onMouseLeave={e => e.currentTarget.style.color = "#585850"}
                >
                  {s.icon}
                </a>
              ))}
            </div>

          </div>
        </div>

        {/* ── Main nav row ── */}
        <div style={{
          maxWidth: 1280, margin: "0 auto", padding: "0 24px",
          display: "flex", alignItems: "center", justifyContent: "space-between",
          height: 68,
        }}>

          {/* Logo */}
          <a href="/" style={{ display: "flex", alignItems: "center", gap: 12, textDecoration: "none" }}>
            {/* Swap for <img src={logoUrl} alt="Everridge" style={{height:36}} /> when logo is ready */}
            <div style={{
              width: 36, height: 36,
              background: `linear-gradient(150deg, ${GREEN} 0%, #1a3025 100%)`,
              borderRadius: 6, border: `1px solid #3a5a3a`,
              display: "flex", alignItems: "center", justifyContent: "center",
              flexShrink: 0,
            }}>
              <svg viewBox="0 0 24 24" fill="none" width="17" height="17" stroke={GOLD} strokeWidth="1.8">
                <path strokeLinecap="round" strokeLinejoin="round" d="M12 2C6.5 2 2 7.5 2 13c0 4.4 3.6 8 8 8s8-3.6 8-8C18 7.5 13.5 2 12 2z" />
                <path strokeLinecap="round" strokeLinejoin="round" d="M12 21v-9M8.5 16l3.5-4 3.5 4" />
              </svg>
            </div>
            <div>
              <div style={{
                fontFamily: "'Playfair Display', Georgia, serif",
                fontSize: 18, fontWeight: 700,
                color: "#f0ece6", letterSpacing: "-0.01em", lineHeight: 1.1,
              }}>Everridge</div>
              <div style={{
                fontFamily: "'DM Sans', sans-serif",
                fontSize: 9, fontWeight: 400,
                color: "#484840", letterSpacing: "0.2em",
                textTransform: "uppercase", marginTop: 2,
              }}>Landscape & Hardscape</div>
            </div>
          </a>

          {/* Desktop links */}
          <nav className="hidden md:flex" style={{ alignItems: "center", gap: 2 }}>
            {NAV_LINKS.map(link => {
              const isContact = link.label === "Contact"
              const isOpen    = openDropdown === link.label
              return (
                <div key={link.label} style={{ position: "relative" }}
                  onMouseEnter={() => link.dropdown && onEnter(link.label)}
                  onMouseLeave={() => link.dropdown && onLeave()}
                >
                  <a href={link.href}
                    onClick={e => link.dropdown && e.preventDefault()}
                    style={{
                      display: "flex", alignItems: "center",
                      padding: isContact ? "9px 22px" : "9px 14px",
                      fontFamily: "'DM Sans', sans-serif",
                      fontSize: 13,
                      fontWeight: isContact ? 600 : 400,
                      letterSpacing: isContact ? "0.1em" : "0.02em",
                      textTransform: isContact ? "uppercase" : "none",
                      color: isContact ? "#0f0f0f" : isOpen ? GOLD : "#888880",
                      background: isContact ? `linear-gradient(135deg, ${GOLD}, ${GOLD_DK})` : "transparent",
                      borderRadius: isContact ? 5 : 6,
                      textDecoration: "none",
                      marginLeft: isContact ? 12 : 0,
                      cursor: "pointer",
                      transition: "color 0.15s",
                    }}
                    onMouseEnter={e => { if (!isContact) e.currentTarget.style.color = GOLD }}
                    onMouseLeave={e => { if (!isContact) e.currentTarget.style.color = isOpen ? GOLD : "#888880" }}
                  >
                    {link.label}
                    {link.dropdown && <ChevronDown open={isOpen} />}
                  </a>
                  {link.dropdown && <Dropdown items={link.dropdown} isOpen={isOpen} />}
                </div>
              )
            })}
          </nav>

          {/* Mobile: phone + hamburger */}
          <div className="flex md:hidden" style={{ alignItems: "center", gap: 10 }}>
            <a href={PHONE_HREF} style={{
              display: "flex", alignItems: "center", gap: 6,
              background: `linear-gradient(135deg, ${GOLD}, ${GOLD_DK})`,
              color: "#0f0f0f",
              fontFamily: "'DM Sans', sans-serif",
              fontSize: 11, fontWeight: 700,
              padding: "8px 14px", borderRadius: 5,
              textDecoration: "none", letterSpacing: "0.05em",
              textTransform: "uppercase",
            }}>
              <PhoneIcon size={11} /> Call
            </a>
            <button onClick={() => setMenuOpen(true)} style={{
              background: BG3, border: `1px solid ${BORDER}`,
              borderRadius: 6, color: "#888880",
              padding: "8px 10px", cursor: "pointer",
              display: "flex", alignItems: "center",
            }}>
              <HamburgerIcon />
            </button>
          </div>

        </div>
      </header>

      {/* Spacer — topbar 36px + nav 68px = 104px */}
      <div style={{ height: 104 }} />

      {/* Mobile slide-in menu */}
      <MobileMenu isOpen={menuOpen} onClose={() => setMenuOpen(false)} />
    </>
  )
}

export default Navbar