import React, { useEffect } from "react"

// ── Config ────────────────────────────────────────────────────────────────────
const COMPANY = {
  name:    "Everridge Landscape & Hardscape",
  tagline: "Crafting Outdoor Spaces with Precision.",
  phone:   "(770) 555-0192",
  email:   "info@everridgelandscape.com",
  address: "1245 Peachtree Industrial Blvd,\nSuite 300, Atlanta, GA 30338",
  license: "GA Contractor License #CN-204817",
}

const SERVICES = [
  { label: "Brick + Hardscapes",               href: "/services/brick-hardscapes"            },
  { label: "Landscape Design & Installation",  href: "/services/landscape-design"            },
  { label: "Garden Design & 3D Renderings",    href: "/services/garden-design-3d-renderings" },
  { label: "Outdoor Lighting Systems",         href: "/services/outdoor-lighting-systems"    },
]

const CITIES = [
  { label: "Atlanta",    href: "/locations/atlanta"    },
  { label: "Marietta",   href: "/locations/marietta"   },
  { label: "Roswell",    href: "/locations/roswell"    },
  { label: "Alpharetta", href: "/locations/alpharetta" },
  { label: "Kennesaw",   href: "/locations/kennesaw"   },
  { label: "Smyrna",     href: "/locations/smyrna"     },
  { label: "Dunwoody",   href: "/locations/dunwoody"   },
  { label: "Woodstock",  href: "/locations/woodstock"  },
]

const LEGAL = [
  { label: "Privacy Policy",    href: "/privacy-policy"    },
  { label: "Terms of Service",  href: "/terms-of-service"  },
  { label: "Sitemap",           href: "/sitemap.xml"       },
]

const SOCIAL = [
  {
    label: "Instagram",
    href:  "https://instagram.com",
    icon: (
      <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/>
      </svg>
    ),
  },
  {
    label: "Facebook",
    href:  "https://facebook.com",
    icon: (
      <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
      </svg>
    ),
  },
  {
    label: "Houzz",
    href:  "https://houzz.com",
    icon: (
      <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
        <path d="M6.5 0v9.7L12 7.4l5.5 2.3V0H6.5zm11 9.7L12 7.4l-5.5 2.3V24h4.6v-6.9h1.8V24H17.5V9.7z"/>
      </svg>
    ),
  },
  {
    label: "LinkedIn",
    href:  "https://linkedin.com",
    icon: (
      <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
      </svg>
    ),
  },
]

// ── Tokens ────────────────────────────────────────────────────────────────────
const GOLD    = "#c9a96e"
const GOLD_DK = "#b8924a"
const BG      = "#0c0c0c"
const BG2     = "#141414"
const BG3     = "#1e1e1e"
const BORDER  = "#222222"
const GREEN   = "#1f3a32"
const TEXT_DIM = "#4a4a44"
const TEXT_MID = "#787870"
const TEXT_LT  = "#a8a49e"

// ── Font loader ───────────────────────────────────────────────────────────────
function useFonts() {
  useEffect(() => {
    if (document.getElementById("everridge-fonts")) return
    const link = document.createElement("link")
    link.id   = "everridge-fonts"
    link.rel  = "stylesheet"
    link.href = "https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&family=DM+Sans:wght@300;400;500;600&display=swap"
    document.head.appendChild(link)
  }, [])
}

// ── Sub-components ────────────────────────────────────────────────────────────
function ColLabel({ children }) {
  return (
    <div style={{
      fontFamily: "'DM Sans', sans-serif",
      fontSize: 9, fontWeight: 600,
      color: TEXT_DIM,
      letterSpacing: "0.22em",
      textTransform: "uppercase",
      marginBottom: 20,
      paddingBottom: 12,
      borderBottom: `1px solid ${BORDER}`,
    }}>
      {children}
    </div>
  )
}

function FooterLink({ href, children }) {
  return (
    <a href={href} style={{
      display: "block",
      fontFamily: "'DM Sans', sans-serif",
      fontSize: 13, fontWeight: 400,
      color: TEXT_MID,
      textDecoration: "none",
      lineHeight: 1,
      padding: "6px 0",
      transition: "color 0.15s",
    }}
      onMouseEnter={e => e.currentTarget.style.color = GOLD}
      onMouseLeave={e => e.currentTarget.style.color = TEXT_MID}
    >
      {children}
    </a>
  )
}

// ── Footer ────────────────────────────────────────────────────────────────────
function Footer() {
  useFonts()

  return (
    <footer style={{ background: BG, borderTop: `1px solid ${BORDER}` }}>

      {/* ── CTA Banner ── */}
      <div style={{
        background: `linear-gradient(135deg, ${GREEN} 0%, #152a22 60%, #0f1f18 100%)`,
        borderBottom: `1px solid #2a3a2a`,
      }}>
        <div style={{
          maxWidth: 1280, margin: "0 auto",
          padding: "52px 40px",
          display: "flex", alignItems: "center", justifyContent: "space-between",
          gap: 32, flexWrap: "wrap",
        }}>
          <div>
            <div style={{
              fontFamily: "'Playfair Display', Georgia, serif",
              fontSize: 28, fontWeight: 700,
              color: "#f0ece6", lineHeight: 1.2,
              marginBottom: 8,
            }}>
              Ready to Transform Your Outdoor Space?
            </div>
            <p style={{
              margin: 0,
              fontFamily: "'DM Sans', sans-serif",
              fontSize: 14, fontWeight: 300,
              color: "rgba(240,236,230,0.5)",
              letterSpacing: "0.02em",
            }}>
              Schedule a free consultation — no commitment required.
            </p>
          </div>
          <div style={{ display: "flex", alignItems: "center", gap: 12, flexShrink: 0 }}>
            <a href="/contact" style={{
              display: "inline-block",
              fontFamily: "'DM Sans', sans-serif",
              fontSize: 12, fontWeight: 700,
              color: "#0f0f0f",
              background: `linear-gradient(135deg, ${GOLD}, ${GOLD_DK})`,
              padding: "14px 28px", borderRadius: 6,
              textDecoration: "none", letterSpacing: "0.1em",
              textTransform: "uppercase",
              whiteSpace: "nowrap",
            }}>
              Get Free Estimate
            </a>
            <a href={`tel:${COMPANY.phone.replace(/\D/g,"")}`} style={{
              display: "inline-block",
              fontFamily: "'DM Sans', sans-serif",
              fontSize: 12, fontWeight: 500,
              color: "rgba(240,236,230,0.6)",
              border: "1px solid rgba(240,236,230,0.15)",
              padding: "13px 24px", borderRadius: 6,
              textDecoration: "none", letterSpacing: "0.04em",
              whiteSpace: "nowrap",
              transition: "color 0.2s, border-color 0.2s",
            }}
              onMouseEnter={e => { e.currentTarget.style.color = GOLD; e.currentTarget.style.borderColor = GOLD }}
              onMouseLeave={e => { e.currentTarget.style.color = "rgba(240,236,230,0.6)"; e.currentTarget.style.borderColor = "rgba(240,236,230,0.15)" }}
            >
              {COMPANY.phone}
            </a>
          </div>
        </div>
      </div>

      {/* ── Main grid ── */}
      <div style={{ maxWidth: 1280, margin: "0 auto", padding: "64px 40px 48px" }}>
        <div style={{
          display: "grid",
          gridTemplateColumns: "2fr 1fr 1fr 1fr",
          gap: "48px 40px",
        }}
          className="footer-grid"
        >

          {/* Col 1 — Brand */}
          <div>
            {/* Logo */}
            <a href="/" style={{ display: "inline-flex", alignItems: "center", gap: 12, textDecoration: "none", marginBottom: 24 }}>
              <div style={{
                width: 38, height: 38,
                background: `linear-gradient(150deg, ${GREEN} 0%, #152a22 100%)`,
                borderRadius: 6, border: "1px solid #1f3a32",
                display: "flex", alignItems: "center", justifyContent: "center",
                flexShrink: 0,
              }}>
                <svg viewBox="0 0 24 24" fill="none" width="18" height="18" stroke={GOLD} strokeWidth="1.8">
                  <path strokeLinecap="round" strokeLinejoin="round" d="M12 2C6.5 2 2 7.5 2 13c0 4.4 3.6 8 8 8s8-3.6 8-8C18 7.5 13.5 2 12 2z" />
                  <path strokeLinecap="round" strokeLinejoin="round" d="M12 21v-9M8.5 16l3.5-4 3.5 4" />
                </svg>
              </div>
              <div>
                <div style={{
                  fontFamily: "'Playfair Display', Georgia, serif",
                  fontSize: 18, fontWeight: 700,
                  color: "#f0ece6", lineHeight: 1.1,
                }}>Everridge</div>
                <div style={{
                  fontFamily: "'DM Sans', sans-serif",
                  fontSize: 9, fontWeight: 400,
                  color: TEXT_DIM, letterSpacing: "0.2em",
                  textTransform: "uppercase", marginTop: 2,
                }}>Landscape & Hardscape</div>
              </div>
            </a>

            <p style={{
              fontFamily: "'Playfair Display', Georgia, serif",
              fontStyle: "italic",
              fontSize: 15, fontWeight: 400,
              color: TEXT_MID, lineHeight: 1.6,
              marginBottom: 28, marginTop: 0,
            }}>
              "{COMPANY.tagline}"
            </p>

            {/* Contact info */}
            <div style={{ display: "flex", flexDirection: "column", gap: 12 }}>
              <a href={`tel:${COMPANY.phone.replace(/\D/g,"")}`} style={{
                display: "flex", alignItems: "center", gap: 10,
                textDecoration: "none",
              }}>
                <div style={{
                  width: 30, height: 30, borderRadius: 6,
                  background: BG3, border: `1px solid ${BORDER}`,
                  display: "flex", alignItems: "center", justifyContent: "center",
                  flexShrink: 0,
                }}>
                  <svg width="13" height="13" viewBox="0 0 24 24" fill={GOLD}>
                    <path fillRule="evenodd" d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z" clipRule="evenodd"/>
                  </svg>
                </div>
                <span style={{
                  fontFamily: "'DM Sans', sans-serif",
                  fontSize: 13, fontWeight: 500, color: TEXT_LT,
                }}>{COMPANY.phone}</span>
              </a>

              <a href={`mailto:${COMPANY.email}`} style={{
                display: "flex", alignItems: "center", gap: 10,
                textDecoration: "none",
              }}>
                <div style={{
                  width: 30, height: 30, borderRadius: 6,
                  background: BG3, border: `1px solid ${BORDER}`,
                  display: "flex", alignItems: "center", justifyContent: "center",
                  flexShrink: 0,
                }}>
                  <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke={GOLD} strokeWidth="2">
                    <path strokeLinecap="round" strokeLinejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/>
                  </svg>
                </div>
                <span style={{
                  fontFamily: "'DM Sans', sans-serif",
                  fontSize: 13, fontWeight: 400, color: TEXT_MID,
                }}>{COMPANY.email}</span>
              </a>

              <div style={{ display: "flex", alignItems: "flex-start", gap: 10 }}>
                <div style={{
                  width: 30, height: 30, borderRadius: 6,
                  background: BG3, border: `1px solid ${BORDER}`,
                  display: "flex", alignItems: "center", justifyContent: "center",
                  flexShrink: 0, marginTop: 1,
                }}>
                  <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke={GOLD} strokeWidth="2">
                    <path strokeLinecap="round" strokeLinejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/>
                    <path strokeLinecap="round" strokeLinejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/>
                  </svg>
                </div>
                <span style={{
                  fontFamily: "'DM Sans', sans-serif",
                  fontSize: 12, fontWeight: 300, color: TEXT_DIM,
                  lineHeight: 1.6, whiteSpace: "pre-line",
                }}>{COMPANY.address}</span>
              </div>
            </div>

            {/* Social icons */}
            <div style={{ display: "flex", gap: 8, marginTop: 28 }}>
              {SOCIAL.map(s => (
                <a key={s.label} href={s.href} target="_blank" rel="noopener noreferrer"
                  title={s.label}
                  style={{
                    width: 36, height: 36,
                    display: "flex", alignItems: "center", justifyContent: "center",
                    background: BG3, border: `1px solid ${BORDER}`,
                    borderRadius: 6, color: TEXT_MID,
                    textDecoration: "none",
                    transition: "color 0.15s, border-color 0.15s, background 0.15s",
                  }}
                  onMouseEnter={e => {
                    e.currentTarget.style.color = GOLD
                    e.currentTarget.style.borderColor = `${GOLD}55`
                    e.currentTarget.style.background = `${GOLD}10`
                  }}
                  onMouseLeave={e => {
                    e.currentTarget.style.color = TEXT_MID
                    e.currentTarget.style.borderColor = BORDER
                    e.currentTarget.style.background = BG3
                  }}
                >
                  {s.icon}
                </a>
              ))}
            </div>
          </div>

          {/* Col 2 — Services */}
          <div>
            <ColLabel>Services</ColLabel>
            {SERVICES.map(s => <FooterLink key={s.href} href={s.href}>{s.label}</FooterLink>)}
            <div style={{ marginTop: 16 }}>
              <a href="/services" style={{
                display: "inline-flex", alignItems: "center", gap: 6,
                fontFamily: "'DM Sans', sans-serif",
                fontSize: 11, fontWeight: 600,
                color: GOLD, textDecoration: "none",
                letterSpacing: "0.08em", textTransform: "uppercase",
              }}>
                View All Services
                <svg width="10" height="10" fill="none" viewBox="0 0 24 24" stroke="currentColor" strokeWidth={2}>
                  <path strokeLinecap="round" strokeLinejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                </svg>
              </a>
            </div>
          </div>

          {/* Col 3 — Cities */}
          <div>
            <ColLabel>Service Areas</ColLabel>
            {CITIES.map(c => <FooterLink key={c.href} href={c.href}>{c.label}</FooterLink>)}
            <div style={{ marginTop: 16 }}>
              <a href="/locations" style={{
                display: "inline-flex", alignItems: "center", gap: 6,
                fontFamily: "'DM Sans', sans-serif",
                fontSize: 11, fontWeight: 600,
                color: GOLD, textDecoration: "none",
                letterSpacing: "0.08em", textTransform: "uppercase",
              }}>
                All Locations
                <svg width="10" height="10" fill="none" viewBox="0 0 24 24" stroke="currentColor" strokeWidth={2}>
                  <path strokeLinecap="round" strokeLinejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                </svg>
              </a>
            </div>
          </div>

          {/* Col 4 — Company / Quick links */}
          <div>
            <ColLabel>Company</ColLabel>
            {[
              { label: "About Us",       href: "/about"     },
              { label: "Our Work",       href: "/our-work"  },
              { label: "Testimonials",   href: "/reviews"   },
              { label: "Free Estimate",  href: "/contact"   },
              { label: "Contact",        href: "/contact"   },
            ].map(l => <FooterLink key={l.href + l.label} href={l.href}>{l.label}</FooterLink>)}

            {/* License badge */}
            <div style={{
              marginTop: 28,
              padding: "14px 16px",
              background: BG3,
              border: `1px solid ${BORDER}`,
              borderRadius: 8,
            }}>
              <div style={{ display: "flex", alignItems: "center", gap: 8, marginBottom: 6 }}>
                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke={GOLD} strokeWidth="2">
                  <path strokeLinecap="round" strokeLinejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/>
                </svg>
                <span style={{
                  fontFamily: "'DM Sans', sans-serif",
                  fontSize: 9, fontWeight: 600,
                  color: GOLD, letterSpacing: "0.15em",
                  textTransform: "uppercase",
                }}>Licensed & Insured</span>
              </div>
              <p style={{
                margin: 0,
                fontFamily: "'DM Sans', sans-serif",
                fontSize: 11, fontWeight: 300,
                color: TEXT_DIM, lineHeight: 1.5,
              }}>
                {COMPANY.license}
              </p>
            </div>
          </div>

        </div>
      </div>

      {/* ── Bottom bar ── */}
      <div style={{ borderTop: `1px solid ${BORDER}` }}>
        <div style={{
          maxWidth: 1280, margin: "0 auto",
          padding: "20px 40px",
          display: "flex", alignItems: "center", justifyContent: "space-between",
          gap: 16, flexWrap: "wrap",
        }}>
          <p style={{
            margin: 0,
            fontFamily: "'DM Sans', sans-serif",
            fontSize: 11, fontWeight: 300,
            color: TEXT_DIM, letterSpacing: "0.03em",
          }}>
            © {new Date().getFullYear()} Everridge Landscape & Hardscape. All rights reserved.
          </p>
          <div style={{ display: "flex", alignItems: "center", gap: 24 }}>
            {LEGAL.map(l => (
              <a key={l.href} href={l.href} style={{
                fontFamily: "'DM Sans', sans-serif",
                fontSize: 11, fontWeight: 400,
                color: TEXT_DIM, textDecoration: "none",
                transition: "color 0.15s",
              }}
                onMouseEnter={e => e.currentTarget.style.color = TEXT_MID}
                onMouseLeave={e => e.currentTarget.style.color = TEXT_DIM}
              >
                {l.label}
              </a>
            ))}
          </div>
        </div>
      </div>

      {/* Responsive styles */}
      <style>{`
        @media (max-width: 900px) {
          .footer-grid {
            grid-template-columns: 1fr 1fr !important;
          }
        }
        @media (max-width: 560px) {
          .footer-grid {
            grid-template-columns: 1fr !important;
          }
        }
      `}</style>

    </footer>
  )
}

export default Footer