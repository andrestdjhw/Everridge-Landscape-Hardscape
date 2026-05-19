import React, { useEffect, useMemo, useRef, useState } from "react"

// ══════════════════════════════════════════════════════════════════════════════
//  EVERRIDGE LANDSCAPE & HARDSCAPE — Chatbot
//  Brand palette: gold #8a6a45 / cream #f5f2ef / dark #0b0b0c
//  Typography: Articulat CF (headers) + Inter (body)
// ══════════════════════════════════════════════════════════════════════════════

// ── Config ────────────────────────────────────────────────────
const PHONE_DISPLAY  = "(770) 555-0192"
const PHONE_LINK     = "tel:+17705550192"
const EMAIL_DISPLAY  = "info@everridgeus.com"
const EMAIL_LINK     = "mailto:info@everridgeus.com"
const CONTACT_LINK   = "/contact"
const SERVICES_LINK  = "/services"
const LOCATIONS_LINK = "/locations"
const ABOUT_LINK     = "/about"
const WORK_LINK      = "/our-work"

// ── Brand tokens ──────────────────────────────────────────────
const BRAND = {
  gold:      "#8a6a45",
  goldDk:    "#7a5c38",
  goldLt:    "#dcc6ad",
  dark:      "#0b0b0c",
  darkSoft:  "#2f3133",
  cream:     "#f5f2ef",
  creamLt:   "#ecebea",
  white:     "#ffffff",
  border:    "rgba(11,11,12,0.10)",
  borderLt:  "rgba(11,11,12,0.06)",
  textMute:  "rgba(11,11,12,0.55)",
}

// ── Icons ─────────────────────────────────────────────────────

function BotIcon({ className = "" }) {
  return (
    <svg className={className} viewBox="0 0 24 24" fill="none" aria-hidden="true">
      <path d="M12 3C8.134 3 5 6.134 5 10v2.2c0 .53-.21 1.04-.586 1.414L3 15h18l-1.414-1.386A2 2 0 0 1 19 12.2V10c0-3.866-3.134-7-7-7Z"
        stroke="currentColor" strokeWidth="1.7" strokeLinecap="round" strokeLinejoin="round" />
      <path d="M9 18c.4 1.2 1.5 2 3 2s2.6-.8 3-2"
        stroke="currentColor" strokeWidth="1.7" strokeLinecap="round" strokeLinejoin="round" />
      <circle cx="9.25" cy="10.25" r="1" fill="currentColor" />
      <circle cx="14.75" cy="10.25" r="1" fill="currentColor" />
    </svg>
  )
}

function CloseIcon({ className = "" }) {
  return (
    <svg className={className} viewBox="0 0 24 24" fill="none" aria-hidden="true">
      <path d="M6 6L18 18" stroke="currentColor" strokeWidth="1.9" strokeLinecap="round" />
      <path d="M18 6L6 18" stroke="currentColor" strokeWidth="1.9" strokeLinecap="round" />
    </svg>
  )
}

function SendIcon({ className = "" }) {
  return (
    <svg className={className} viewBox="0 0 24 24" fill="none" aria-hidden="true">
      <path d="M21 3L10 14" stroke="currentColor" strokeWidth="1.8" strokeLinecap="round" strokeLinejoin="round" />
      <path d="M21 3L14 21L10 14L3 10L21 3Z" stroke="currentColor" strokeWidth="1.8" strokeLinecap="round" strokeLinejoin="round" />
    </svg>
  )
}

function PhoneIcon({ className = "" }) {
  return (
    <svg className={className} viewBox="0 0 24 24" fill="none" aria-hidden="true">
      <path d="M21 16.2V19a2 2 0 0 1-2.18 2A19.8 19.8 0 0 1 3 5.18 2 2 0 0 1 5 3h2.8a2 2 0 0 1 2 1.72l.38 2.66a2 2 0 0 1-.58 1.72l-1.2 1.2a16 16 0 0 0 5.4 5.4l1.2-1.2a2 2 0 0 1 1.72-.58l2.66.38A2 2 0 0 1 21 16.2Z"
        stroke="currentColor" strokeWidth="1.7" strokeLinecap="round" strokeLinejoin="round" />
    </svg>
  )
}

function ArrowIcon({ className = "" }) {
  return (
    <svg className={className} viewBox="0 0 24 24" fill="none" aria-hidden="true">
      <path d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"
        stroke="currentColor" strokeWidth="1.8" strokeLinecap="round" strokeLinejoin="round" />
    </svg>
  )
}

// ── Bot logic ─────────────────────────────────────────────────

function msg(text, links = []) {
  return { id: Date.now() + Math.random(), text, sender: "bot", timestamp: new Date(), links }
}

function getBotResponse(rawInput) {
  const i = rawInput.toLowerCase()

  // Brick & Hardscapes
  if (i.includes("hardscape") || i.includes("brick") || i.includes("paver") || i.includes("patio") || i.includes("walkway") || i.includes("driveway") || i.includes("retaining wall") || i.includes("fireplace")) {
    return msg(
      "We specialize in premium hardscape installations — paver patios, walkways, driveways, outdoor fireplaces, and retaining walls. Every project uses top-tier materials and polymeric sand for joints that stay clean and locked in for decades. Every job starts with a 3D rendering so you see exactly what you're getting before we break ground.",
      [{ label: "Brick & Hardscapes", href: "/services/hardscape-patios" }, { label: "Get a Free Estimate", href: CONTACT_LINK }]
    )
  }

  // Landscape Design
  if (i.includes("landscape") || i.includes("planting") || i.includes("garden install") || i.includes("sod") || i.includes("mulch") || i.includes("plant")) {
    return msg(
      "Our landscape design and installation service covers custom planting plans, seasonal installations, sod, mulching, and year-round care. We're a design-and-build firm — not a lawn care company. Every plan is custom to your property, your climate zone, and your vision.",
      [{ label: "Landscape Design", href: "/services/landscape-design" }, { label: "Get a Free Estimate", href: CONTACT_LINK }]
    )
  }

  // 3D Renderings
  if (i.includes("3d") || i.includes("rendering") || i.includes("design proof") || i.includes("preview") || i.includes("visualization") || i.includes("see before")) {
    return msg(
      "Every Everridge project starts with a photorealistic 3D rendering. You approve the design, materials, layout, and proportions before a single stone is placed. No guesswork. No anxiety about the outcome. What you see on screen is exactly what gets built.",
      [{ label: "3D Renderings", href: "/services/3d-renderings" }, { label: "Get a Free Estimate", href: CONTACT_LINK }]
    )
  }

  // Outdoor Lighting
  if (i.includes("lighting") || i.includes("light") || i.includes("uplight") || i.includes("pathway light") || i.includes("accent light") || i.includes("nighttime")) {
    return msg(
      "Professional outdoor lighting systems — accent lighting, pathway illumination, architectural uplighting, and full property lighting design. We use commercial-grade fixtures and transformers built to last. Your property looks completely different after sunset, in the best possible way.",
      [{ label: "Outdoor Lighting", href: "/services/outdoor-lighting" }, { label: "Get a Free Estimate", href: CONTACT_LINK }]
    )
  }

  // Full transformation / multiple services
  if (i.includes("full") || i.includes("transformation") || i.includes("everything") || i.includes("complete") || i.includes("whole property") || i.includes("multiple") || i.includes("all services")) {
    return msg(
      "Full property transformations are our specialty. Hardscape, landscape, lighting, and 3D design all under one contract, one project manager, and one timeline. You get the same crew from first consultation to final walkthrough — no subcontractor handoffs.",
      [{ label: "View All Services", href: SERVICES_LINK }, { label: "Get a Free Estimate", href: CONTACT_LINK }]
    )
  }

  // Pricing / cost / estimate
  if (i.includes("price") || i.includes("cost") || i.includes("estimate") || i.includes("quote") || i.includes("how much") || i.includes("budget")) {
    return msg(
      "Estimates are free and there's no obligation. We visit your property, walk the space with you, and assess scope in person. Within days you receive a detailed proposal with a 3D rendering, clear scope, timeline, and pricing. No hidden costs.",
      [{ label: "Request a Free Estimate", href: CONTACT_LINK }, { label: "Call Us", href: PHONE_LINK }]
    )
  }

  // Process / how it works
  if (i.includes("process") || i.includes("how it work") || i.includes("steps") || i.includes("timeline") || i.includes("how long")) {
    return msg(
      "Our process has four steps: 1) Free consultation at your property, 2) Photorealistic 3D rendering and detailed proposal, 3) Expert execution by our own crew with daily progress photos, 4) Final walkthrough where the project isn't finished until you say it's perfect.",
      [{ label: "Our Process", href: ABOUT_LINK }, { label: "Request a Free Estimate", href: CONTACT_LINK }]
    )
  }

  // Warranty / insured / licensed
  if (i.includes("warranty") || i.includes("guarantee") || i.includes("insured") || i.includes("licensed") || i.includes("license")) {
    return msg(
      "Everridge is fully licensed and insured in Michigan with general liability and workers compensation coverage. Your property and your investment are protected from day one through final walkthrough. We've been in business for over 17 years.",
      [{ label: "About Us", href: ABOUT_LINK }, { label: "Get a Free Estimate", href: CONTACT_LINK }]
    )
  }

  // Locations / service areas
  if (i.includes("location") || i.includes("service area") || i.includes("where") || i.includes("area") || i.includes("birmingham") || i.includes("troy") || i.includes("bloomfield") || i.includes("rochester") || i.includes("shelby") || i.includes("washington") || i.includes("farmington") || i.includes("clinton") || i.includes("michigan")) {
    return msg(
      "We serve Southeast Michigan's Oakland-Macomb corridor — based in Clinton Township with a 30-mile service radius. Primary communities include Birmingham, Bloomfield Hills, Troy, Rochester Hills, Shelby Township, Washington Township, Farmington Hills, and Clinton Township.",
      [{ label: "View Locations", href: LOCATIONS_LINK }, { label: "Get a Free Estimate", href: CONTACT_LINK }]
    )
  }

  // Portfolio / gallery / examples
  if (i.includes("portfolio") || i.includes("gallery") || i.includes("project") || i.includes("example") || i.includes("before") || i.includes("after") || i.includes("see your work")) {
    return msg(
      "Our portfolio shows real completed projects with before-and-after comparisons across Southeast Michigan. You can drag the slider on each project to see the transformation. Every project on our site is a project we built ourselves.",
      [{ label: "View Our Work", href: WORK_LINK }, { label: "Get a Free Estimate", href: CONTACT_LINK }]
    )
  }

  // Materials / quality
  if (i.includes("material") || i.includes("quality") || i.includes("premium") || i.includes("brand") || i.includes("what do you use")) {
    return msg(
      "We use only top-tier hardscape pavers, natural stone, premium plants, and commercial-grade lighting systems. Every material is chosen for durability, visual impact, and long-term performance. We don't cut corners on materials — that's why our work lasts.",
      [{ label: "About Us", href: ABOUT_LINK }, { label: "View Our Work", href: WORK_LINK }]
    )
  }

  // Reviews / testimonials
  if (i.includes("review") || i.includes("testimonial") || i.includes("rating") || i.includes("google") || i.includes("reputation")) {
    return msg(
      "We're 5-star rated on Google with 80+ verified reviews. Our clients are our best testimony — every project ends with a walkthrough where the work isn't finished until they say it's perfect.",
      [{ label: "About Us", href: ABOUT_LINK }, { label: "View Our Work", href: WORK_LINK }]
    )
  }

  // Experience / years / company
  if (i.includes("experience") || i.includes("years") || i.includes("how long have you") || i.includes("about you") || i.includes("who are you") || i.includes("company")) {
    return msg(
      "Everridge Landscape & Hardscape has been designing and building premium outdoor spaces in Southeast Michigan for over 17 years. We've delivered 500+ projects across the Oakland-Macomb corridor. We're a design-and-build firm specializing in four disciplines: hardscape, landscape, 3D renderings, and outdoor lighting.",
      [{ label: "About Us", href: ABOUT_LINK }, { label: "View Our Work", href: WORK_LINK }]
    )
  }

  // Contact
  if (i.includes("contact") || i.includes("phone") || i.includes("email") || i.includes("call") || i.includes("reach") || i.includes("speak") || i.includes("talk")) {
    return msg(
      "You can reach us by phone during business hours, or send a request through our contact form. No automated systems, no hold music — just a real conversation about your project. We respond to all form submissions within 24-48 hours.",
      [{ label: PHONE_DISPLAY, href: PHONE_LINK }, { label: "Contact Page", href: CONTACT_LINK }]
    )
  }

  // Hours / when open
  if (i.includes("hours") || i.includes("open") || i.includes("when") || i.includes("schedule") || i.includes("weekend")) {
    return msg(
      "Our hours are Monday through Friday 8 AM to 6 PM, and Saturday 8 AM to 2 PM. We're closed Sundays. For form submissions, we respond within 24-48 business hours.",
      [{ label: "Contact Page", href: CONTACT_LINK }, { label: PHONE_DISPLAY, href: PHONE_LINK }]
    )
  }

  // Residential / commercial
  if (i.includes("residential") || i.includes("commercial") || i.includes("home") || i.includes("business") || i.includes("hoa")) {
    return msg(
      "We serve both residential and commercial properties across Southeast Michigan. Our work includes private homes, HOAs, and commercial properties that want premium outdoor environments built and maintained to a higher standard.",
      [{ label: "About Us", href: ABOUT_LINK }, { label: "Get a Free Estimate", href: CONTACT_LINK }]
    )
  }

  // Default
  return msg(
    "I can help with our four core services — brick & hardscapes, landscape design, 3D renderings, and outdoor lighting — or with service areas, pricing, our process, or scheduling a free estimate. What would you like to know?",
    [{ label: "Request a Free Estimate", href: CONTACT_LINK }, { label: "Call Us", href: PHONE_LINK }]
  )
}

// ── Component ─────────────────────────────────────────────────

function Chatbot() {
  const [isOpen,        setIsOpen]        = useState(false)
  const [inputMessage,  setInputMessage]  = useState("")
  const [isTyping,      setIsTyping]      = useState(false)
  const [messages,      setMessages]      = useState([
    {
      id: 1,
      text: "Hi — I'm the Everridge assistant. I can help with our four services, service areas, our 3D design process, or scheduling a free estimate. What would you like to know?",
      sender: "bot",
      timestamp: new Date(),
      links: [
        { label: "Request a Free Estimate", href: CONTACT_LINK },
        { label: "Call Us", href: PHONE_LINK },
      ]
    }
  ])

  const endRef = useRef(null)

  // Six quick actions — Everridge's four services + portfolio + estimate
  const quickActions = useMemo(() => [
    { text: "Brick & Hardscapes",     icon: "🧱" },
    { text: "Landscape Design",       icon: "🌿" },
    { text: "3D Renderings",          icon: "🖥️" },
    { text: "Outdoor Lighting",       icon: "💡" },
    { text: "View Our Work",          icon: "📷" },
    { text: "Free Estimate",          icon: "✉️" },
  ], [])

  useEffect(() => {
    endRef.current?.scrollIntoView({ behavior: "smooth" })
  }, [messages, isTyping])

  function handleSend(e) {
    e?.preventDefault?.()
    if (!inputMessage.trim()) return
    const text = inputMessage.trim()
    setMessages(prev => [...prev, { id: Date.now(), text, sender: "user", timestamp: new Date() }])
    setInputMessage("")
    setIsTyping(true)
    setTimeout(() => {
      setMessages(prev => [...prev, getBotResponse(text)])
      setIsTyping(false)
    }, 650)
  }

  function handleQuickAction(actionText) {
    // Auto-send the quick action as a user message
    setMessages(prev => [...prev, { id: Date.now(), text: actionText, sender: "user", timestamp: new Date() }])
    setIsTyping(true)
    setTimeout(() => {
      setMessages(prev => [...prev, getBotResponse(actionText)])
      setIsTyping(false)
    }, 650)
  }

  return (
    <div className="fixed bottom-4 right-4 z-[9999] sm:bottom-5 sm:right-5"
         style={{ fontFamily: "'Inter', system-ui, -apple-system, sans-serif" }}>

      {/* ── Chat window ── */}
      {isOpen && (
        <div className="mb-3 flex h-[31rem] w-[calc(100vw-1.25rem)] max-w-[22rem] flex-col overflow-hidden sm:h-[33rem]"
             style={{
               boxShadow: "0 22px 50px rgba(11,11,12,0.22)",
               border: `1px solid ${BRAND.border}`,
               background: BRAND.cream,
               borderRadius: "2px",
             }}>

          {/* Header */}
          <div className="relative overflow-hidden px-4 py-4 text-white"
               style={{
                 background: `linear-gradient(135deg, ${BRAND.dark} 0%, #1a1a1c 60%, ${BRAND.goldDk} 140%)`,
                 borderBottom: `2px solid ${BRAND.gold}`,
               }}>
            {/* Subtle texture overlay */}
            <div className="absolute inset-0 opacity-[0.05]"
                 style={{
                   backgroundImage: "linear-gradient(135deg,rgba(255,255,255,0.4) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.4) 50%,rgba(255,255,255,0.4) 75%,transparent 75%,transparent)",
                   backgroundSize: "20px 20px",
                 }} />

            <div className="relative flex items-start justify-between gap-3">
              <div className="flex items-center gap-3">
                <div className="flex h-10 w-10 items-center justify-center"
                     style={{
                       background: `rgba(138,106,69,0.20)`,
                       border: `1px solid rgba(138,106,69,0.50)`,
                       borderRadius: "1px",
                     }}>
                  <BotIcon className="h-5 w-5" style={{ color: BRAND.goldLt }} />
                </div>
                <div>
                  <p className="text-[10px] font-semibold uppercase"
                     style={{
                       color: BRAND.gold,
                       letterSpacing: "0.22em",
                       margin: 0,
                     }}>
                    Designed Before We Build
                  </p>
                  <h3 className="mt-1 text-[0.92rem] font-bold tracking-tight"
                      style={{
                        fontFamily: "'Articulat CF', 'Inter', sans-serif",
                        color: BRAND.creamLt,
                        margin: 0,
                      }}>
                    Everridge Assistant
                  </h3>
                  <div className="mt-1 flex items-center gap-1.5">
                    <span className="h-1.5 w-1.5 rounded-full"
                          style={{ background: BRAND.gold }} />
                    <p className="text-[10px] font-semibold uppercase"
                       style={{
                         color: "rgba(236,235,234,0.65)",
                         letterSpacing: "0.14em",
                         margin: 0,
                       }}>Online now</p>
                  </div>
                </div>
              </div>

              <button type="button" onClick={() => setIsOpen(false)}
                      className="inline-flex h-8 w-8 items-center justify-center transition"
                      style={{
                        background: "rgba(236,235,234,0.08)",
                        border: "1px solid rgba(236,235,234,0.15)",
                        borderRadius: "1px",
                        color: BRAND.creamLt,
                      }}
                      onMouseEnter={e => {
                        e.currentTarget.style.background = BRAND.gold
                        e.currentTarget.style.borderColor = BRAND.gold
                        e.currentTarget.style.color = BRAND.dark
                      }}
                      onMouseLeave={e => {
                        e.currentTarget.style.background = "rgba(236,235,234,0.08)"
                        e.currentTarget.style.borderColor = "rgba(236,235,234,0.15)"
                        e.currentTarget.style.color = BRAND.creamLt
                      }}
                      aria-label="Close chat">
                <CloseIcon className="h-4 w-4" />
              </button>
            </div>
          </div>

          {/* Messages */}
          <div className="flex-1 overflow-y-auto px-3 py-3" style={{ background: BRAND.cream }}>
            <div className="space-y-3">
              {messages.map(message => (
                <div key={message.id} className={`flex ${message.sender === "user" ? "justify-end" : "justify-start"}`}>
                  <div className="max-w-[88%] px-3.5 py-3 text-[0.875rem] leading-[1.55]"
                       style={message.sender === "user"
                         ? {
                             background: BRAND.dark,
                             color: BRAND.creamLt,
                             borderRadius: "12px 12px 2px 12px",
                             boxShadow: "0 2px 8px rgba(11,11,12,0.18)",
                           }
                         : {
                             background: BRAND.white,
                             color: BRAND.darkSoft,
                             borderRadius: "12px 12px 12px 2px",
                             border: `1px solid ${BRAND.borderLt}`,
                             boxShadow: "0 1px 4px rgba(11,11,12,0.04)",
                           }}>
                    <p className="m-0" style={{ fontWeight: 400 }}>{message.text}</p>
                    {message.links?.length > 0 && (
                      <div className="mt-3 flex flex-wrap gap-2">
                        {message.links.map(link => (
                          <a key={`${message.id}-${link.href}`} href={link.href}
                             className="inline-flex items-center gap-1.5 px-2.5 py-1.5 text-[10.5px] font-semibold transition"
                             style={{
                               background: BRAND.cream,
                               border: `1px solid ${BRAND.border}`,
                               color: BRAND.gold,
                               letterSpacing: "0.04em",
                               textTransform: "uppercase",
                               borderRadius: "1px",
                             }}
                             onMouseEnter={e => {
                               e.currentTarget.style.background = BRAND.gold
                               e.currentTarget.style.borderColor = BRAND.gold
                               e.currentTarget.style.color = BRAND.white
                             }}
                             onMouseLeave={e => {
                               e.currentTarget.style.background = BRAND.cream
                               e.currentTarget.style.borderColor = BRAND.border
                               e.currentTarget.style.color = BRAND.gold
                             }}>
                            <span>{link.label}</span>
                            <ArrowIcon className="h-3 w-3" />
                          </a>
                        ))}
                      </div>
                    )}
                  </div>
                </div>
              ))}

              {/* Typing indicator */}
              {isTyping && (
                <div className="flex justify-start">
                  <div className="px-4 py-3"
                       style={{
                         background: BRAND.white,
                         border: `1px solid ${BRAND.borderLt}`,
                         borderRadius: "12px 12px 12px 2px",
                         boxShadow: "0 1px 4px rgba(11,11,12,0.04)",
                       }}>
                    <div className="flex gap-1.5">
                      <span className="h-2 w-2 animate-pulse rounded-full" style={{ background: BRAND.gold }} />
                      <span className="h-2 w-2 animate-pulse rounded-full" style={{ background: BRAND.gold, animationDelay: "0.2s", opacity: 0.6 }} />
                      <span className="h-2 w-2 animate-pulse rounded-full" style={{ background: BRAND.gold, animationDelay: "0.4s", opacity: 0.3 }} />
                    </div>
                  </div>
                </div>
              )}

              <div ref={endRef} />
            </div>
          </div>

          {/* Quick actions (first message only) */}
          {messages.length === 1 && (
            <div className="border-t px-3 py-3" style={{ borderColor: BRAND.borderLt, background: BRAND.white }}>
              <p className="mb-2.5 text-[9.5px] font-semibold uppercase"
                 style={{
                   color: BRAND.gold,
                   letterSpacing: "0.18em",
                   margin: "0 0 10px 0",
                 }}>
                Our Services
              </p>
              <div className="flex flex-wrap gap-1.5">
                {quickActions.map(action => (
                  <button key={action.text} type="button"
                          onClick={() => handleQuickAction(action.text)}
                          className="px-2.5 py-1.5 text-[10.5px] font-semibold transition"
                          style={{
                            background: BRAND.cream,
                            border: `1px solid ${BRAND.border}`,
                            color: BRAND.darkSoft,
                            letterSpacing: "0.04em",
                            borderRadius: "1px",
                          }}
                          onMouseEnter={e => {
                            e.currentTarget.style.borderColor = BRAND.gold
                            e.currentTarget.style.background = "rgba(138,106,69,0.08)"
                            e.currentTarget.style.color = BRAND.gold
                          }}
                          onMouseLeave={e => {
                            e.currentTarget.style.borderColor = BRAND.border
                            e.currentTarget.style.background = BRAND.cream
                            e.currentTarget.style.color = BRAND.darkSoft
                          }}>
                    <span className="mr-1">{action.icon}</span>
                    {action.text}
                  </button>
                ))}
              </div>
            </div>
          )}

          {/* Input */}
          <div className="border-t p-3" style={{ borderColor: BRAND.borderLt, background: BRAND.white }}>
            <form onSubmit={handleSend} className="flex items-center gap-2">
              <input
                type="text"
                value={inputMessage}
                onChange={e => setInputMessage(e.target.value)}
                placeholder="Ask about our services…"
                className="min-w-0 flex-1 px-4 py-2.5 text-[13px] outline-none transition"
                style={{
                  background: BRAND.cream,
                  border: `1px solid ${BRAND.border}`,
                  color: BRAND.dark,
                  fontFamily: "'Inter', sans-serif",
                  borderRadius: "1px",
                }}
                onFocus={e => {
                  e.currentTarget.style.borderColor = BRAND.gold
                  e.currentTarget.style.background = BRAND.white
                }}
                onBlur={e => {
                  e.currentTarget.style.borderColor = BRAND.border
                  e.currentTarget.style.background = BRAND.cream
                }}
              />
              <button type="submit" disabled={!inputMessage.trim()}
                      className="inline-flex h-11 w-11 flex-shrink-0 items-center justify-center text-white transition"
                      style={{
                        background: inputMessage.trim()
                          ? `linear-gradient(135deg, ${BRAND.gold}, ${BRAND.goldDk})`
                          : BRAND.border,
                        boxShadow: inputMessage.trim() ? `0 6px 16px rgba(138,106,69,0.30)` : "none",
                        opacity: inputMessage.trim() ? 1 : 0.5,
                        cursor: inputMessage.trim() ? "pointer" : "not-allowed",
                        borderRadius: "1px",
                      }}
                      onMouseEnter={e => { if (inputMessage.trim()) e.currentTarget.style.opacity = "0.88" }}
                      onMouseLeave={e => { if (inputMessage.trim()) e.currentTarget.style.opacity = "1" }}
                      aria-label="Send message">
                <SendIcon className="h-4 w-4" />
              </button>
            </form>

            <div className="mt-3 flex flex-wrap items-center gap-3 text-[10.5px] font-medium"
                 style={{ color: BRAND.textMute }}>
              <a href={PHONE_LINK} className="inline-flex items-center gap-1.5 transition"
                 style={{ color: BRAND.textMute, textDecoration: "none" }}
                 onMouseEnter={e => e.currentTarget.style.color = BRAND.gold}
                 onMouseLeave={e => e.currentTarget.style.color = BRAND.textMute}>
                <PhoneIcon className="h-3.5 w-3.5" />
                <span>{PHONE_DISPLAY}</span>
              </a>
              <a href={EMAIL_LINK} className="truncate transition"
                 style={{ color: BRAND.textMute, textDecoration: "none" }}
                 onMouseEnter={e => e.currentTarget.style.color = BRAND.gold}
                 onMouseLeave={e => e.currentTarget.style.color = BRAND.textMute}>
                {EMAIL_DISPLAY}
              </a>
            </div>
          </div>

        </div>
      )}

      {/* ── FAB button ── */}
      <button type="button" onClick={() => setIsOpen(prev => !prev)}
              className="group relative flex h-14 w-14 items-center justify-center text-white transition-all duration-300"
              style={{
                background: isOpen
                  ? BRAND.dark
                  : `linear-gradient(135deg, ${BRAND.dark} 0%, ${BRAND.goldDk} 70%, ${BRAND.gold} 130%)`,
                boxShadow: "0 18px 40px rgba(11,11,12,0.30)",
                border: `2px solid ${isOpen ? BRAND.gold : "transparent"}`,
                borderRadius: "50%",
              }}
              onMouseEnter={e => { e.currentTarget.style.transform = "scale(1.06)" }}
              onMouseLeave={e => { e.currentTarget.style.transform = "scale(1)" }}
              aria-label={isOpen ? "Close chat" : "Open chat"}>

        {/* Ping dot (closed state) */}
        {!isOpen && (
          <span className="absolute -right-0.5 -top-0.5 flex h-3.5 w-3.5">
            <span className="absolute inline-flex h-full w-full animate-ping rounded-full opacity-75"
                  style={{ background: BRAND.goldLt }} />
            <span className="relative inline-flex h-3.5 w-3.5 rounded-full"
                  style={{ background: BRAND.gold, border: `2px solid ${BRAND.cream}` }} />
          </span>
        )}

        {isOpen ? <CloseIcon className="h-5 w-5" /> : <BotIcon className="h-6 w-6" />}
      </button>

    </div>
  )
}

export default Chatbot