/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./src/scripts/Chatbot.js"
/*!********************************!*\
  !*** ./src/scripts/Chatbot.js ***!
  \********************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__);


// ══════════════════════════════════════════════════════════════════════════════
//  EVERRIDGE LANDSCAPE & HARDSCAPE — Chatbot
//  Brand palette: gold #8a6a45 / cream #f5f2ef / dark #0b0b0c
//  Typography: Articulat CF (headers) + Inter (body)
// ══════════════════════════════════════════════════════════════════════════════

// ── Config ────────────────────────────────────────────────────

const PHONE_DISPLAY = "(770) 555-0192";
const PHONE_LINK = "tel:+17705550192";
const EMAIL_DISPLAY = "info@everridgeus.com";
const EMAIL_LINK = "mailto:info@everridgeus.com";
const CONTACT_LINK = "/contact";
const SERVICES_LINK = "/services";
const LOCATIONS_LINK = "/locations";
const ABOUT_LINK = "/about";
const WORK_LINK = "/our-work";

// ── Brand tokens ──────────────────────────────────────────────
const BRAND = {
  gold: "#8a6a45",
  goldDk: "#7a5c38",
  goldLt: "#dcc6ad",
  dark: "#0b0b0c",
  darkSoft: "#2f3133",
  cream: "#f5f2ef",
  creamLt: "#ecebea",
  white: "#ffffff",
  border: "rgba(11,11,12,0.10)",
  borderLt: "rgba(11,11,12,0.06)",
  textMute: "rgba(11,11,12,0.55)"
};

// ── Icons ─────────────────────────────────────────────────────

function BotIcon({
  className = ""
}) {
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("svg", {
    className: className,
    viewBox: "0 0 24 24",
    fill: "none",
    "aria-hidden": "true",
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
      d: "M12 3C8.134 3 5 6.134 5 10v2.2c0 .53-.21 1.04-.586 1.414L3 15h18l-1.414-1.386A2 2 0 0 1 19 12.2V10c0-3.866-3.134-7-7-7Z",
      stroke: "currentColor",
      strokeWidth: "1.7",
      strokeLinecap: "round",
      strokeLinejoin: "round"
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
      d: "M9 18c.4 1.2 1.5 2 3 2s2.6-.8 3-2",
      stroke: "currentColor",
      strokeWidth: "1.7",
      strokeLinecap: "round",
      strokeLinejoin: "round"
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("circle", {
      cx: "9.25",
      cy: "10.25",
      r: "1",
      fill: "currentColor"
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("circle", {
      cx: "14.75",
      cy: "10.25",
      r: "1",
      fill: "currentColor"
    })]
  });
}
function CloseIcon({
  className = ""
}) {
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("svg", {
    className: className,
    viewBox: "0 0 24 24",
    fill: "none",
    "aria-hidden": "true",
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
      d: "M6 6L18 18",
      stroke: "currentColor",
      strokeWidth: "1.9",
      strokeLinecap: "round"
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
      d: "M18 6L6 18",
      stroke: "currentColor",
      strokeWidth: "1.9",
      strokeLinecap: "round"
    })]
  });
}
function SendIcon({
  className = ""
}) {
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("svg", {
    className: className,
    viewBox: "0 0 24 24",
    fill: "none",
    "aria-hidden": "true",
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
      d: "M21 3L10 14",
      stroke: "currentColor",
      strokeWidth: "1.8",
      strokeLinecap: "round",
      strokeLinejoin: "round"
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
      d: "M21 3L14 21L10 14L3 10L21 3Z",
      stroke: "currentColor",
      strokeWidth: "1.8",
      strokeLinecap: "round",
      strokeLinejoin: "round"
    })]
  });
}
function PhoneIcon({
  className = ""
}) {
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
    className: className,
    viewBox: "0 0 24 24",
    fill: "none",
    "aria-hidden": "true",
    children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
      d: "M21 16.2V19a2 2 0 0 1-2.18 2A19.8 19.8 0 0 1 3 5.18 2 2 0 0 1 5 3h2.8a2 2 0 0 1 2 1.72l.38 2.66a2 2 0 0 1-.58 1.72l-1.2 1.2a16 16 0 0 0 5.4 5.4l1.2-1.2a2 2 0 0 1 1.72-.58l2.66.38A2 2 0 0 1 21 16.2Z",
      stroke: "currentColor",
      strokeWidth: "1.7",
      strokeLinecap: "round",
      strokeLinejoin: "round"
    })
  });
}
function ArrowIcon({
  className = ""
}) {
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
    className: className,
    viewBox: "0 0 24 24",
    fill: "none",
    "aria-hidden": "true",
    children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
      d: "M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3",
      stroke: "currentColor",
      strokeWidth: "1.8",
      strokeLinecap: "round",
      strokeLinejoin: "round"
    })
  });
}

// ── Bot logic ─────────────────────────────────────────────────

function msg(text, links = []) {
  return {
    id: Date.now() + Math.random(),
    text,
    sender: "bot",
    timestamp: new Date(),
    links
  };
}
function getBotResponse(rawInput) {
  const i = rawInput.toLowerCase();

  // Brick & Hardscapes
  if (i.includes("hardscape") || i.includes("brick") || i.includes("paver") || i.includes("patio") || i.includes("walkway") || i.includes("driveway") || i.includes("retaining wall") || i.includes("fireplace")) {
    return msg("We specialize in premium hardscape installations — paver patios, walkways, driveways, outdoor fireplaces, and retaining walls. Every project uses top-tier materials and polymeric sand for joints that stay clean and locked in for decades. Every job starts with a 3D rendering so you see exactly what you're getting before we break ground.", [{
      label: "Brick & Hardscapes",
      href: "/services/hardscape-patios"
    }, {
      label: "Get a Free Estimate",
      href: CONTACT_LINK
    }]);
  }

  // Landscape Design
  if (i.includes("landscape") || i.includes("planting") || i.includes("garden install") || i.includes("sod") || i.includes("mulch") || i.includes("plant")) {
    return msg("Our landscape design and installation service covers custom planting plans, seasonal installations, sod, mulching, and year-round care. We're a design-and-build firm — not a lawn care company. Every plan is custom to your property, your climate zone, and your vision.", [{
      label: "Landscape Design",
      href: "/services/landscape-design"
    }, {
      label: "Get a Free Estimate",
      href: CONTACT_LINK
    }]);
  }

  // 3D Renderings
  if (i.includes("3d") || i.includes("rendering") || i.includes("design proof") || i.includes("preview") || i.includes("visualization") || i.includes("see before")) {
    return msg("Every Everridge project starts with a photorealistic 3D rendering. You approve the design, materials, layout, and proportions before a single stone is placed. No guesswork. No anxiety about the outcome. What you see on screen is exactly what gets built.", [{
      label: "3D Renderings",
      href: "/services/3d-renderings"
    }, {
      label: "Get a Free Estimate",
      href: CONTACT_LINK
    }]);
  }

  // Outdoor Lighting
  if (i.includes("lighting") || i.includes("light") || i.includes("uplight") || i.includes("pathway light") || i.includes("accent light") || i.includes("nighttime")) {
    return msg("Professional outdoor lighting systems — accent lighting, pathway illumination, architectural uplighting, and full property lighting design. We use commercial-grade fixtures and transformers built to last. Your property looks completely different after sunset, in the best possible way.", [{
      label: "Outdoor Lighting",
      href: "/services/outdoor-lighting"
    }, {
      label: "Get a Free Estimate",
      href: CONTACT_LINK
    }]);
  }

  // Full transformation / multiple services
  if (i.includes("full") || i.includes("transformation") || i.includes("everything") || i.includes("complete") || i.includes("whole property") || i.includes("multiple") || i.includes("all services")) {
    return msg("Full property transformations are our specialty. Hardscape, landscape, lighting, and 3D design all under one contract, one project manager, and one timeline. You get the same crew from first consultation to final walkthrough — no subcontractor handoffs.", [{
      label: "View All Services",
      href: SERVICES_LINK
    }, {
      label: "Get a Free Estimate",
      href: CONTACT_LINK
    }]);
  }

  // Pricing / cost / estimate
  if (i.includes("price") || i.includes("cost") || i.includes("estimate") || i.includes("quote") || i.includes("how much") || i.includes("budget")) {
    return msg("Estimates are free and there's no obligation. We visit your property, walk the space with you, and assess scope in person. Within days you receive a detailed proposal with a 3D rendering, clear scope, timeline, and pricing. No hidden costs.", [{
      label: "Request a Free Estimate",
      href: CONTACT_LINK
    }, {
      label: "Call Us",
      href: PHONE_LINK
    }]);
  }

  // Process / how it works
  if (i.includes("process") || i.includes("how it work") || i.includes("steps") || i.includes("timeline") || i.includes("how long")) {
    return msg("Our process has four steps: 1) Free consultation at your property, 2) Photorealistic 3D rendering and detailed proposal, 3) Expert execution by our own crew with daily progress photos, 4) Final walkthrough where the project isn't finished until you say it's perfect.", [{
      label: "Our Process",
      href: ABOUT_LINK
    }, {
      label: "Request a Free Estimate",
      href: CONTACT_LINK
    }]);
  }

  // Warranty / insured / licensed
  if (i.includes("warranty") || i.includes("guarantee") || i.includes("insured") || i.includes("licensed") || i.includes("license")) {
    return msg("Everridge is fully licensed and insured in Michigan with general liability and workers compensation coverage. Your property and your investment are protected from day one through final walkthrough. We've been in business for over 17 years.", [{
      label: "About Us",
      href: ABOUT_LINK
    }, {
      label: "Get a Free Estimate",
      href: CONTACT_LINK
    }]);
  }

  // Locations / service areas
  if (i.includes("location") || i.includes("service area") || i.includes("where") || i.includes("area") || i.includes("birmingham") || i.includes("troy") || i.includes("bloomfield") || i.includes("rochester") || i.includes("shelby") || i.includes("washington") || i.includes("farmington") || i.includes("clinton") || i.includes("michigan")) {
    return msg("We serve Southeast Michigan's Oakland-Macomb corridor — based in Clinton Township with a 30-mile service radius. Primary communities include Birmingham, Bloomfield Hills, Troy, Rochester Hills, Shelby Township, Washington Township, Farmington Hills, and Clinton Township.", [{
      label: "View Locations",
      href: LOCATIONS_LINK
    }, {
      label: "Get a Free Estimate",
      href: CONTACT_LINK
    }]);
  }

  // Portfolio / gallery / examples
  if (i.includes("portfolio") || i.includes("gallery") || i.includes("project") || i.includes("example") || i.includes("before") || i.includes("after") || i.includes("see your work")) {
    return msg("Our portfolio shows real completed projects with before-and-after comparisons across Southeast Michigan. You can drag the slider on each project to see the transformation. Every project on our site is a project we built ourselves.", [{
      label: "View Our Work",
      href: WORK_LINK
    }, {
      label: "Get a Free Estimate",
      href: CONTACT_LINK
    }]);
  }

  // Materials / quality
  if (i.includes("material") || i.includes("quality") || i.includes("premium") || i.includes("brand") || i.includes("what do you use")) {
    return msg("We use only top-tier hardscape pavers, natural stone, premium plants, and commercial-grade lighting systems. Every material is chosen for durability, visual impact, and long-term performance. We don't cut corners on materials — that's why our work lasts.", [{
      label: "About Us",
      href: ABOUT_LINK
    }, {
      label: "View Our Work",
      href: WORK_LINK
    }]);
  }

  // Reviews / testimonials
  if (i.includes("review") || i.includes("testimonial") || i.includes("rating") || i.includes("google") || i.includes("reputation")) {
    return msg("We're 5-star rated on Google with 80+ verified reviews. Our clients are our best testimony — every project ends with a walkthrough where the work isn't finished until they say it's perfect.", [{
      label: "About Us",
      href: ABOUT_LINK
    }, {
      label: "View Our Work",
      href: WORK_LINK
    }]);
  }

  // Experience / years / company
  if (i.includes("experience") || i.includes("years") || i.includes("how long have you") || i.includes("about you") || i.includes("who are you") || i.includes("company")) {
    return msg("Everridge Landscape & Hardscape has been designing and building premium outdoor spaces in Southeast Michigan for over 17 years. We've delivered 500+ projects across the Oakland-Macomb corridor. We're a design-and-build firm specializing in four disciplines: hardscape, landscape, 3D renderings, and outdoor lighting.", [{
      label: "About Us",
      href: ABOUT_LINK
    }, {
      label: "View Our Work",
      href: WORK_LINK
    }]);
  }

  // Contact
  if (i.includes("contact") || i.includes("phone") || i.includes("email") || i.includes("call") || i.includes("reach") || i.includes("speak") || i.includes("talk")) {
    return msg("You can reach us by phone during business hours, or send a request through our contact form. No automated systems, no hold music — just a real conversation about your project. We respond to all form submissions within 24-48 hours.", [{
      label: PHONE_DISPLAY,
      href: PHONE_LINK
    }, {
      label: "Contact Page",
      href: CONTACT_LINK
    }]);
  }

  // Hours / when open
  if (i.includes("hours") || i.includes("open") || i.includes("when") || i.includes("schedule") || i.includes("weekend")) {
    return msg("Our hours are Monday through Friday 8 AM to 6 PM, and Saturday 8 AM to 2 PM. We're closed Sundays. For form submissions, we respond within 24-48 business hours.", [{
      label: "Contact Page",
      href: CONTACT_LINK
    }, {
      label: PHONE_DISPLAY,
      href: PHONE_LINK
    }]);
  }

  // Residential / commercial
  if (i.includes("residential") || i.includes("commercial") || i.includes("home") || i.includes("business") || i.includes("hoa")) {
    return msg("We serve both residential and commercial properties across Southeast Michigan. Our work includes private homes, HOAs, and commercial properties that want premium outdoor environments built and maintained to a higher standard.", [{
      label: "About Us",
      href: ABOUT_LINK
    }, {
      label: "Get a Free Estimate",
      href: CONTACT_LINK
    }]);
  }

  // Default
  return msg("I can help with our four core services — brick & hardscapes, landscape design, 3D renderings, and outdoor lighting — or with service areas, pricing, our process, or scheduling a free estimate. What would you like to know?", [{
    label: "Request a Free Estimate",
    href: CONTACT_LINK
  }, {
    label: "Call Us",
    href: PHONE_LINK
  }]);
}

// ── Component ─────────────────────────────────────────────────

function Chatbot() {
  const [isOpen, setIsOpen] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(false);
  const [inputMessage, setInputMessage] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)("");
  const [isTyping, setIsTyping] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(false);
  const [messages, setMessages] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)([{
    id: 1,
    text: "Hi — I'm the Everridge assistant. I can help with our four services, service areas, our 3D design process, or scheduling a free estimate. What would you like to know?",
    sender: "bot",
    timestamp: new Date(),
    links: [{
      label: "Request a Free Estimate",
      href: CONTACT_LINK
    }, {
      label: "Call Us",
      href: PHONE_LINK
    }]
  }]);
  const endRef = (0,react__WEBPACK_IMPORTED_MODULE_0__.useRef)(null);

  // Six quick actions — Everridge's four services + portfolio + estimate
  const quickActions = (0,react__WEBPACK_IMPORTED_MODULE_0__.useMemo)(() => [{
    text: "Brick & Hardscapes",
    icon: "🧱"
  }, {
    text: "Landscape Design",
    icon: "🌿"
  }, {
    text: "3D Renderings",
    icon: "🖥️"
  }, {
    text: "Outdoor Lighting",
    icon: "💡"
  }, {
    text: "View Our Work",
    icon: "📷"
  }, {
    text: "Free Estimate",
    icon: "✉️"
  }], []);
  (0,react__WEBPACK_IMPORTED_MODULE_0__.useEffect)(() => {
    endRef.current?.scrollIntoView({
      behavior: "smooth"
    });
  }, [messages, isTyping]);
  function handleSend(e) {
    e?.preventDefault?.();
    if (!inputMessage.trim()) return;
    const text = inputMessage.trim();
    setMessages(prev => [...prev, {
      id: Date.now(),
      text,
      sender: "user",
      timestamp: new Date()
    }]);
    setInputMessage("");
    setIsTyping(true);
    setTimeout(() => {
      setMessages(prev => [...prev, getBotResponse(text)]);
      setIsTyping(false);
    }, 650);
  }
  function handleQuickAction(actionText) {
    // Auto-send the quick action as a user message
    setMessages(prev => [...prev, {
      id: Date.now(),
      text: actionText,
      sender: "user",
      timestamp: new Date()
    }]);
    setIsTyping(true);
    setTimeout(() => {
      setMessages(prev => [...prev, getBotResponse(actionText)]);
      setIsTyping(false);
    }, 650);
  }
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
    className: "fixed bottom-4 right-4 z-[9999] sm:bottom-5 sm:right-5",
    style: {
      fontFamily: "'Inter', system-ui, -apple-system, sans-serif"
    },
    children: [isOpen && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
      className: "mb-3 flex h-[31rem] w-[calc(100vw-1.25rem)] max-w-[22rem] flex-col overflow-hidden sm:h-[33rem]",
      style: {
        boxShadow: "0 22px 50px rgba(11,11,12,0.22)",
        border: `1px solid ${BRAND.border}`,
        background: BRAND.cream,
        borderRadius: "2px"
      },
      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
        className: "relative overflow-hidden px-4 py-4 text-white",
        style: {
          background: `linear-gradient(135deg, ${BRAND.dark} 0%, #1a1a1c 60%, ${BRAND.goldDk} 140%)`,
          borderBottom: `2px solid ${BRAND.gold}`
        },
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
          className: "absolute inset-0 opacity-[0.05]",
          style: {
            backgroundImage: "linear-gradient(135deg,rgba(255,255,255,0.4) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.4) 50%,rgba(255,255,255,0.4) 75%,transparent 75%,transparent)",
            backgroundSize: "20px 20px"
          }
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
          className: "relative flex items-start justify-between gap-3",
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
            className: "flex items-center gap-3",
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
              className: "flex h-10 w-10 items-center justify-center",
              style: {
                background: `rgba(138,106,69,0.20)`,
                border: `1px solid rgba(138,106,69,0.50)`,
                borderRadius: "1px"
              },
              children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(BotIcon, {
                className: "h-5 w-5",
                style: {
                  color: BRAND.goldLt
                }
              })
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
              children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
                className: "text-[10px] font-semibold uppercase",
                style: {
                  color: BRAND.gold,
                  letterSpacing: "0.22em",
                  margin: 0
                },
                children: "Designed Before We Build"
              }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("h3", {
                className: "mt-1 text-[0.92rem] font-bold tracking-tight",
                style: {
                  fontFamily: "'Articulat CF', 'Inter', sans-serif",
                  color: BRAND.creamLt,
                  margin: 0
                },
                children: "Everridge Assistant"
              }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
                className: "mt-1 flex items-center gap-1.5",
                children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
                  className: "h-1.5 w-1.5 rounded-full",
                  style: {
                    background: BRAND.gold
                  }
                }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
                  className: "text-[10px] font-semibold uppercase",
                  style: {
                    color: "rgba(236,235,234,0.65)",
                    letterSpacing: "0.14em",
                    margin: 0
                  },
                  children: "Online now"
                })]
              })]
            })]
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("button", {
            type: "button",
            onClick: () => setIsOpen(false),
            className: "inline-flex h-8 w-8 items-center justify-center transition",
            style: {
              background: "rgba(236,235,234,0.08)",
              border: "1px solid rgba(236,235,234,0.15)",
              borderRadius: "1px",
              color: BRAND.creamLt
            },
            onMouseEnter: e => {
              e.currentTarget.style.background = BRAND.gold;
              e.currentTarget.style.borderColor = BRAND.gold;
              e.currentTarget.style.color = BRAND.dark;
            },
            onMouseLeave: e => {
              e.currentTarget.style.background = "rgba(236,235,234,0.08)";
              e.currentTarget.style.borderColor = "rgba(236,235,234,0.15)";
              e.currentTarget.style.color = BRAND.creamLt;
            },
            "aria-label": "Close chat",
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(CloseIcon, {
              className: "h-4 w-4"
            })
          })]
        })]
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
        className: "flex-1 overflow-y-auto px-3 py-3",
        style: {
          background: BRAND.cream
        },
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
          className: "space-y-3",
          children: [messages.map(message => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
            className: `flex ${message.sender === "user" ? "justify-end" : "justify-start"}`,
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
              className: "max-w-[88%] px-3.5 py-3 text-[0.875rem] leading-[1.55]",
              style: message.sender === "user" ? {
                background: BRAND.dark,
                color: BRAND.creamLt,
                borderRadius: "12px 12px 2px 12px",
                boxShadow: "0 2px 8px rgba(11,11,12,0.18)"
              } : {
                background: BRAND.white,
                color: BRAND.darkSoft,
                borderRadius: "12px 12px 12px 2px",
                border: `1px solid ${BRAND.borderLt}`,
                boxShadow: "0 1px 4px rgba(11,11,12,0.04)"
              },
              children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
                className: "m-0",
                style: {
                  fontWeight: 400
                },
                children: message.text
              }), message.links?.length > 0 && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
                className: "mt-3 flex flex-wrap gap-2",
                children: message.links.map(link => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("a", {
                  href: link.href,
                  className: "inline-flex items-center gap-1.5 px-2.5 py-1.5 text-[10.5px] font-semibold transition",
                  style: {
                    background: BRAND.cream,
                    border: `1px solid ${BRAND.border}`,
                    color: BRAND.gold,
                    letterSpacing: "0.04em",
                    textTransform: "uppercase",
                    borderRadius: "1px"
                  },
                  onMouseEnter: e => {
                    e.currentTarget.style.background = BRAND.gold;
                    e.currentTarget.style.borderColor = BRAND.gold;
                    e.currentTarget.style.color = BRAND.white;
                  },
                  onMouseLeave: e => {
                    e.currentTarget.style.background = BRAND.cream;
                    e.currentTarget.style.borderColor = BRAND.border;
                    e.currentTarget.style.color = BRAND.gold;
                  },
                  children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
                    children: link.label
                  }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(ArrowIcon, {
                    className: "h-3 w-3"
                  })]
                }, `${message.id}-${link.href}`))
              })]
            })
          }, message.id)), isTyping && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
            className: "flex justify-start",
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
              className: "px-4 py-3",
              style: {
                background: BRAND.white,
                border: `1px solid ${BRAND.borderLt}`,
                borderRadius: "12px 12px 12px 2px",
                boxShadow: "0 1px 4px rgba(11,11,12,0.04)"
              },
              children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
                className: "flex gap-1.5",
                children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
                  className: "h-2 w-2 animate-pulse rounded-full",
                  style: {
                    background: BRAND.gold
                  }
                }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
                  className: "h-2 w-2 animate-pulse rounded-full",
                  style: {
                    background: BRAND.gold,
                    animationDelay: "0.2s",
                    opacity: 0.6
                  }
                }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
                  className: "h-2 w-2 animate-pulse rounded-full",
                  style: {
                    background: BRAND.gold,
                    animationDelay: "0.4s",
                    opacity: 0.3
                  }
                })]
              })
            })
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
            ref: endRef
          })]
        })
      }), messages.length === 1 && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
        className: "border-t px-3 py-3",
        style: {
          borderColor: BRAND.borderLt,
          background: BRAND.white
        },
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
          className: "mb-2.5 text-[9.5px] font-semibold uppercase",
          style: {
            color: BRAND.gold,
            letterSpacing: "0.18em",
            margin: "0 0 10px 0"
          },
          children: "Our Services"
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
          className: "flex flex-wrap gap-1.5",
          children: quickActions.map(action => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("button", {
            type: "button",
            onClick: () => handleQuickAction(action.text),
            className: "px-2.5 py-1.5 text-[10.5px] font-semibold transition",
            style: {
              background: BRAND.cream,
              border: `1px solid ${BRAND.border}`,
              color: BRAND.darkSoft,
              letterSpacing: "0.04em",
              borderRadius: "1px"
            },
            onMouseEnter: e => {
              e.currentTarget.style.borderColor = BRAND.gold;
              e.currentTarget.style.background = "rgba(138,106,69,0.08)";
              e.currentTarget.style.color = BRAND.gold;
            },
            onMouseLeave: e => {
              e.currentTarget.style.borderColor = BRAND.border;
              e.currentTarget.style.background = BRAND.cream;
              e.currentTarget.style.color = BRAND.darkSoft;
            },
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
              className: "mr-1",
              children: action.icon
            }), action.text]
          }, action.text))
        })]
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
        className: "border-t p-3",
        style: {
          borderColor: BRAND.borderLt,
          background: BRAND.white
        },
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("form", {
          onSubmit: handleSend,
          className: "flex items-center gap-2",
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("input", {
            type: "text",
            value: inputMessage,
            onChange: e => setInputMessage(e.target.value),
            placeholder: "Ask about our services\u2026",
            className: "min-w-0 flex-1 px-4 py-2.5 text-[13px] outline-none transition",
            style: {
              background: BRAND.cream,
              border: `1px solid ${BRAND.border}`,
              color: BRAND.dark,
              fontFamily: "'Inter', sans-serif",
              borderRadius: "1px"
            },
            onFocus: e => {
              e.currentTarget.style.borderColor = BRAND.gold;
              e.currentTarget.style.background = BRAND.white;
            },
            onBlur: e => {
              e.currentTarget.style.borderColor = BRAND.border;
              e.currentTarget.style.background = BRAND.cream;
            }
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("button", {
            type: "submit",
            disabled: !inputMessage.trim(),
            className: "inline-flex h-11 w-11 flex-shrink-0 items-center justify-center text-white transition",
            style: {
              background: inputMessage.trim() ? `linear-gradient(135deg, ${BRAND.gold}, ${BRAND.goldDk})` : BRAND.border,
              boxShadow: inputMessage.trim() ? `0 6px 16px rgba(138,106,69,0.30)` : "none",
              opacity: inputMessage.trim() ? 1 : 0.5,
              cursor: inputMessage.trim() ? "pointer" : "not-allowed",
              borderRadius: "1px"
            },
            onMouseEnter: e => {
              if (inputMessage.trim()) e.currentTarget.style.opacity = "0.88";
            },
            onMouseLeave: e => {
              if (inputMessage.trim()) e.currentTarget.style.opacity = "1";
            },
            "aria-label": "Send message",
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(SendIcon, {
              className: "h-4 w-4"
            })
          })]
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
          className: "mt-3 flex flex-wrap items-center gap-3 text-[10.5px] font-medium",
          style: {
            color: BRAND.textMute
          },
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("a", {
            href: PHONE_LINK,
            className: "inline-flex items-center gap-1.5 transition",
            style: {
              color: BRAND.textMute,
              textDecoration: "none"
            },
            onMouseEnter: e => e.currentTarget.style.color = BRAND.gold,
            onMouseLeave: e => e.currentTarget.style.color = BRAND.textMute,
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(PhoneIcon, {
              className: "h-3.5 w-3.5"
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
              children: PHONE_DISPLAY
            })]
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
            href: EMAIL_LINK,
            className: "truncate transition",
            style: {
              color: BRAND.textMute,
              textDecoration: "none"
            },
            onMouseEnter: e => e.currentTarget.style.color = BRAND.gold,
            onMouseLeave: e => e.currentTarget.style.color = BRAND.textMute,
            children: EMAIL_DISPLAY
          })]
        })]
      })]
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("button", {
      type: "button",
      onClick: () => setIsOpen(prev => !prev),
      className: "group relative flex h-14 w-14 items-center justify-center text-white transition-all duration-300",
      style: {
        background: isOpen ? BRAND.dark : `linear-gradient(135deg, ${BRAND.dark} 0%, ${BRAND.goldDk} 70%, ${BRAND.gold} 130%)`,
        boxShadow: "0 18px 40px rgba(11,11,12,0.30)",
        border: `2px solid ${isOpen ? BRAND.gold : "transparent"}`,
        borderRadius: "50%"
      },
      onMouseEnter: e => {
        e.currentTarget.style.transform = "scale(1.06)";
      },
      onMouseLeave: e => {
        e.currentTarget.style.transform = "scale(1)";
      },
      "aria-label": isOpen ? "Close chat" : "Open chat",
      children: [!isOpen && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("span", {
        className: "absolute -right-0.5 -top-0.5 flex h-3.5 w-3.5",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
          className: "absolute inline-flex h-full w-full animate-ping rounded-full opacity-75",
          style: {
            background: BRAND.goldLt
          }
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
          className: "relative inline-flex h-3.5 w-3.5 rounded-full",
          style: {
            background: BRAND.gold,
            border: `2px solid ${BRAND.cream}`
          }
        })]
      }), isOpen ? /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(CloseIcon, {
        className: "h-5 w-5"
      }) : /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(BotIcon, {
        className: "h-6 w-6"
      })]
    })]
  });
}
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (Chatbot);

/***/ },

/***/ "./src/scripts/ContactForm.js"
/*!************************************!*\
  !*** ./src/scripts/ContactForm.js ***!
  \************************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__);


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

const SERVICES = ["Brick + Hardscapes", "Landscape Design & Installation", "Garden Design & 3D Renderings", "Outdoor Lighting Systems", "Full Transformation", "Other"];
const INITIAL = {
  full_name: "",
  phone: "",
  email: "",
  service: "",
  address: "",
  message: ""
};

// ── Design tokens ─────────────────────────────────────────────────────────────
// ── EmailJS + reCAPTCHA config ────────────────────────────────────────────────
const EMAILJS_PUBLIC_KEY = "stbQfV1XDrMzJ1pCJ";
const EMAILJS_SERVICE_ID = "service_d1i83um";
const EMAILJS_TEMPLATE_ID = "template_ve4aw08";
const RECAPTCHA_SITE_KEY = "6Lcf0OEsAAAAAPn21zHfnaJJlWaiJMFT7WGV_wyr";
const C = {
  gold: "#8a6a45",
  goldDk: "#7a5c38",
  dark: "#0b0b0c",
  char: "#2f3133",
  slate: "#7a7f85",
  cream: "#e6e3df",
  bg: "#f5f2ef",
  white: "#ffffff",
  green: "#1f3a32",
  border: "#e6e3df",
  borderF: "#8a6a45",
  error: "#c0392b"
};

// ── Font loader ────────────────────────────────────────────────────────────────
function useFonts() {
  (0,react__WEBPACK_IMPORTED_MODULE_0__.useEffect)(() => {
    if (document.getElementById("everridge-fonts")) return;
    const link = document.createElement("link");
    link.id = "everridge-fonts";
    link.rel = "stylesheet";
    link.href = "https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=DM+Sans:wght@300;400;500;600&display=swap";
    document.head.appendChild(link);
  }, []);
}

// ── Script loaders ─────────────────────────────────────────────────────────────
function useEmailJS() {
  const [ready, setReady] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(false);
  (0,react__WEBPACK_IMPORTED_MODULE_0__.useEffect)(() => {
    if (window.emailjs) {
      setReady(true);
      return;
    }
    const s = document.createElement("script");
    s.src = "https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js";
    s.onload = () => {
      window.emailjs.init({
        publicKey: EMAILJS_PUBLIC_KEY
      });
      setReady(true);
    };
    document.head.appendChild(s);
  }, []);
  return ready;
}
function useRecaptcha(siteKey) {
  const [ready, setReady] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(false);
  (0,react__WEBPACK_IMPORTED_MODULE_0__.useEffect)(() => {
    if (window.grecaptcha) {
      setReady(true);
      return;
    }
    // grecaptcha callback when API loads
    window.__rcLoaded = () => setReady(true);
    if (!document.querySelector('script[src*="recaptcha"]')) {
      const s = document.createElement("script");
      s.src = `https://www.google.com/recaptcha/api.js?onload=__rcLoaded&render=explicit`;
      s.async = true;
      s.defer = true;
      document.head.appendChild(s);
    }
  }, [siteKey]);
  return ready;
}

// ── Icons ──────────────────────────────────────────────────────────────────────
const CheckIcon = () => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
  width: "22",
  height: "22",
  fill: "none",
  viewBox: "0 0 24 24",
  stroke: "#ffffff",
  strokeWidth: "2.2",
  children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    strokeLinecap: "round",
    strokeLinejoin: "round",
    d: "M4.5 12.75l6 6 9-13.5"
  })
});
const ArrowIcon = () => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
  width: "13",
  height: "13",
  fill: "none",
  viewBox: "0 0 24 24",
  stroke: "currentColor",
  strokeWidth: "2",
  children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    strokeLinecap: "round",
    strokeLinejoin: "round",
    d: "M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"
  })
});
const SpinnerIcon = () => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
  width: "16",
  height: "16",
  viewBox: "0 0 24 24",
  fill: "none",
  stroke: "currentColor",
  strokeWidth: "2.5",
  style: {
    animation: "spin 0.8s linear infinite"
  },
  children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    strokeLinecap: "round",
    d: "M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"
  })
});

// ── Field component ────────────────────────────────────────────────────────────
function Field({
  label,
  required,
  error,
  children,
  darkMode = false
}) {
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("label", {
      style: {
        display: "block",
        fontFamily: "'Gotham Book', sans-serif",
        fontSize: 10,
        fontWeight: 600,
        letterSpacing: ".08em",
        textTransform: "uppercase",
        color: darkMode ? "rgba(230,227,223,.6)" : C.slate,
        marginBottom: 6
      },
      children: [label, " ", required && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
        style: {
          color: C.gold
        },
        children: "*"
      })]
    }), children, error && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
      style: {
        fontFamily: "'DM Sans', sans-serif",
        fontSize: 11,
        color: C.error,
        marginTop: 4,
        marginBottom: 0
      },
      children: error
    })]
  });
}

// ── Input / Select / Textarea styles ──────────────────────────────────────────
function inputStyle(hasError, darkMode = false) {
  return {
    width: "100%",
    boxSizing: "border-box",
    fontFamily: "'Gotham Book', sans-serif",
    fontSize: 14,
    fontWeight: 400,
    color: darkMode ? "rgba(230,227,223,.9)" : C.dark,
    background: darkMode ? "rgba(255,255,255,.08)" : C.white,
    border: `1px solid ${hasError ? C.error : darkMode ? "rgba(255,255,255,.18)" : C.border}`,
    borderRadius: 0,
    padding: "11px 14px",
    outline: "none",
    transition: "border-color .2s, background .2s"
  };
}

// ── Main component ─────────────────────────────────────────────────────────────
function ContactForm({
  // Props for embedding flexibility
  title = "Request a Free Estimate",
  subtitle = "Tell us about your project and we'll reach out within 24–48 hours.",
  showTitle = true,
  bgColor = C.bg,
  compact = false,
  // compact=true → no padding, transparent bg, denser 2-col layout
  darkMode = false // darkMode=true → inputs/labels optimised for dark backgrounds
}) {
  useFonts();
  const ejsReady = useEmailJS();
  const rcReady = useRecaptcha(RECAPTCHA_SITE_KEY);
  const [fields, setFields] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(INITIAL);
  const [errors, setErrors] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)({});
  const [status, setStatus] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)("idle"); // idle | sending | success | error
  const [rcToken, setRcToken] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(null);
  const [rcError, setRcError] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(false);
  const rcRef = (0,react__WEBPACK_IMPORTED_MODULE_0__.useRef)(null);
  const rcWid = (0,react__WEBPACK_IMPORTED_MODULE_0__.useRef)(null);

  // Render reCAPTCHA widget once API is ready
  (0,react__WEBPACK_IMPORTED_MODULE_0__.useEffect)(() => {
    if (!rcReady || !rcRef.current || rcWid.current !== null) return;
    rcWid.current = window.grecaptcha.render(rcRef.current, {
      sitekey: RECAPTCHA_SITE_KEY,
      theme: "light",
      callback: token => {
        setRcToken(token);
        setRcError(false);
      },
      "expired-callback": () => setRcToken(null),
      "error-callback": () => setRcToken(null)
    });
  }, [rcReady]);

  // ── Validation ──────────────────────────────────────────────────────────────
  const validate = () => {
    const e = {};
    if (!fields.full_name.trim() || fields.full_name.trim().length < 2) e.full_name = "Please enter your full name.";
    if (!fields.phone.trim() || fields.phone.replace(/\D/g, "").length < 7) e.phone = "Please enter a valid phone number.";
    if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(fields.email.trim())) e.email = "Please enter a valid email address.";
    if (!fields.service) e.service = "Please select a service.";
    if (!fields.address.trim() || fields.address.trim().length < 2) e.address = "Please enter your address or city.";
    return e;
  };

  // ── Submit ──────────────────────────────────────────────────────────────────
  const handleSubmit = async e => {
    e.preventDefault();
    const errs = validate();
    if (Object.keys(errs).length) {
      setErrors(errs);
      return;
    }
    if (!rcToken) {
      setRcError(true);
      return;
    }
    setStatus("sending");
    setErrors({});
    try {
      await window.emailjs.send(EMAILJS_SERVICE_ID, EMAILJS_TEMPLATE_ID, {
        from_name: fields.full_name,
        from_phone: fields.phone,
        from_email: fields.email,
        service: fields.service,
        address: fields.address,
        message: fields.message || "No additional details provided.",
        reply_to: fields.email,
        "g-recaptcha-response": rcToken
      });
      setStatus("success");
      setFields(INITIAL);
      setRcToken(null);
      if (window.grecaptcha && rcWid.current !== null) {
        window.grecaptcha.reset(rcWid.current);
      }
    } catch (err) {
      console.error("EmailJS error:", err);
      setStatus("error");
    }
  };
  const set = field => ev => {
    setFields(prev => ({
      ...prev,
      [field]: ev.target.value
    }));
    if (errors[field]) setErrors(prev => {
      const n = {
        ...prev
      };
      delete n[field];
      return n;
    });
  };
  const focusStyle = {
    borderColor: C.borderF
  };
  const normalStyle = {};

  // ── Success state ────────────────────────────────────────────────────────────
  if (status === "success") {
    return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
      style: {
        background: bgColor,
        borderRadius: compact ? 0 : 14,
        padding: compact ? "32px 0" : "52px 44px",
        textAlign: "center"
      },
      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
        style: {
          width: 56,
          height: 56,
          borderRadius: "50%",
          background: `linear-gradient(135deg, ${C.green}, #152a22)`,
          display: "flex",
          alignItems: "center",
          justifyContent: "center",
          margin: "0 auto 20px",
          boxShadow: `0 4px 20px rgba(31,58,50,.25)`
        },
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(CheckIcon, {})
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("h3", {
        style: {
          fontFamily: "'Playfair Display', serif",
          fontSize: 24,
          fontWeight: 700,
          color: C.dark,
          margin: "0 0 10px"
        },
        children: "Request Received"
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("p", {
        style: {
          fontFamily: "'DM Sans', sans-serif",
          fontSize: 14,
          fontWeight: 300,
          color: C.slate,
          lineHeight: 1.7,
          margin: "0 0 24px"
        },
        children: ["We'll review your request and reach out within", /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("br", {}), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("strong", {
          style: {
            color: C.char,
            fontWeight: 600
          },
          children: "24 to 48 business hours."
        })]
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("button", {
        onClick: () => setStatus("idle"),
        style: {
          fontFamily: "'DM Sans', sans-serif",
          fontSize: 11,
          fontWeight: 600,
          letterSpacing: ".08em",
          textTransform: "uppercase",
          color: C.gold,
          background: "none",
          border: `1px solid ${C.border}`,
          borderRadius: 6,
          padding: "9px 20px",
          cursor: "pointer"
        },
        children: "Send Another Request"
      })]
    });
  }

  // ── Form ─────────────────────────────────────────────────────────────────────
  // Vertical gap between fields: smaller when compact
  const fieldGap = compact ? 12 : 16;
  // Textarea rows + min-height: smaller when compact
  const textareaRows = compact ? 3 : 4;
  const textareaMinHeight = compact ? 76 : 96;
  // Submit button padding: tighter when compact
  const submitPadding = compact ? "12px 0" : "15px 0";
  // Trust line margin
  const trustMarginTop = compact ? 14 : 18;
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.Fragment, {
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("style", {
      children: `
        @keyframes spin { to { transform: rotate(360deg); } }
        .ev-input:focus { border-color: ${C.borderF} !important; }
        .ev-input::placeholder { color: ${darkMode ? "rgba(230,227,223,.35)" : C.slate}; opacity: 1; }
        .ev-select option { color: ${C.dark}; background: ${C.white}; }
      `
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
      style: {
        background: "transparent",
        padding: compact ? 0 : "40px 36px"
      },
      children: [showTitle && !compact && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
        style: {
          marginBottom: 28
        },
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
          style: {
            fontFamily: "'DM Sans', sans-serif",
            fontSize: 10,
            fontWeight: 600,
            letterSpacing: ".22em",
            textTransform: "uppercase",
            color: C.gold,
            display: "block",
            marginBottom: 10
          },
          children: "Get Started"
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("h2", {
          style: {
            fontFamily: "'Playfair Display', serif",
            fontSize: "clamp(24px,3vw,32px)",
            fontWeight: 700,
            color: C.dark,
            margin: "0 0 8px",
            lineHeight: 1.2
          },
          children: title
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
          style: {
            fontFamily: "'DM Sans', sans-serif",
            fontSize: 13,
            fontWeight: 300,
            color: C.slate,
            margin: 0,
            lineHeight: 1.65
          },
          children: subtitle
        })]
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("form", {
        onSubmit: handleSubmit,
        noValidate: true,
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
          style: {
            display: "flex",
            flexDirection: "column",
            gap: fieldGap
          },
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
            style: {
              display: "grid",
              gridTemplateColumns: "1fr 1fr",
              gap: 14
            },
            className: "ev-form-2col",
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(Field, {
              darkMode: darkMode,
              label: "Full Name",
              required: true,
              error: errors.full_name,
              children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("input", {
                type: "text",
                value: fields.full_name,
                onChange: set("full_name"),
                placeholder: "John Smith",
                className: "ev-input",
                style: inputStyle(!!errors.full_name, darkMode),
                onFocus: e => e.target.style.borderColor = C.borderF,
                onBlur: e => e.target.style.borderColor = errors.full_name ? C.error : C.border
              })
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(Field, {
              darkMode: darkMode,
              label: "Phone Number",
              required: true,
              error: errors.phone,
              children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("input", {
                type: "tel",
                value: fields.phone,
                onChange: set("phone"),
                placeholder: "(248) 555-0100",
                className: "ev-input",
                style: inputStyle(!!errors.phone, darkMode),
                onFocus: e => e.target.style.borderColor = C.borderF,
                onBlur: e => e.target.style.borderColor = errors.phone ? C.error : C.border
              })
            })]
          }), compact ? /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
            style: {
              display: "grid",
              gridTemplateColumns: "1fr 1fr",
              gap: 14
            },
            className: "ev-form-2col",
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(Field, {
              darkMode: darkMode,
              label: "Email Address",
              required: true,
              error: errors.email,
              children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("input", {
                type: "email",
                value: fields.email,
                onChange: set("email"),
                placeholder: "john@email.com",
                className: "ev-input",
                style: inputStyle(!!errors.email, darkMode),
                onFocus: e => e.target.style.borderColor = C.borderF,
                onBlur: e => e.target.style.borderColor = errors.email ? C.error : C.border
              })
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(Field, {
              darkMode: darkMode,
              label: "Service Needed",
              required: true,
              error: errors.service,
              children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("select", {
                value: fields.service,
                onChange: set("service"),
                className: "ev-input ev-select",
                style: {
                  ...inputStyle(!!errors.service, darkMode),
                  cursor: "pointer"
                },
                onFocus: e => e.target.style.borderColor = C.borderF,
                onBlur: e => e.target.style.borderColor = errors.service ? C.error : C.border,
                children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("option", {
                  value: "",
                  disabled: true,
                  children: "Select a service..."
                }), SERVICES.map(s => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("option", {
                  value: s,
                  children: s
                }, s))]
              })
            })]
          }) : /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.Fragment, {
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(Field, {
              darkMode: darkMode,
              label: "Email Address",
              required: true,
              error: errors.email,
              children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("input", {
                type: "email",
                value: fields.email,
                onChange: set("email"),
                placeholder: "john@email.com",
                className: "ev-input",
                style: inputStyle(!!errors.email, darkMode),
                onFocus: e => e.target.style.borderColor = C.borderF,
                onBlur: e => e.target.style.borderColor = errors.email ? C.error : C.border
              })
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(Field, {
              darkMode: darkMode,
              label: "Service Needed",
              required: true,
              error: errors.service,
              children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("select", {
                value: fields.service,
                onChange: set("service"),
                className: "ev-input ev-select",
                style: {
                  ...inputStyle(!!errors.service, darkMode),
                  cursor: "pointer"
                },
                onFocus: e => e.target.style.borderColor = C.borderF,
                onBlur: e => e.target.style.borderColor = errors.service ? C.error : C.border,
                children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("option", {
                  value: "",
                  disabled: true,
                  children: "Select a service..."
                }), SERVICES.map(s => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("option", {
                  value: s,
                  children: s
                }, s))]
              })
            })]
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(Field, {
            darkMode: darkMode,
            label: "Property Address or City",
            required: true,
            error: errors.address,
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("input", {
              type: "text",
              value: fields.address,
              onChange: set("address"),
              placeholder: "Troy, MI or 1234 Oak St, Birmingham MI",
              className: "ev-input",
              style: inputStyle(!!errors.address, darkMode),
              onFocus: e => e.target.style.borderColor = C.borderF,
              onBlur: e => e.target.style.borderColor = errors.address ? C.error : C.border
            })
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(Field, {
            darkMode: darkMode,
            label: "Tell Us About Your Project",
            error: errors.message,
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("textarea", {
              value: fields.message,
              onChange: set("message"),
              placeholder: "Describe your vision, timeline, or any specific requirements...",
              rows: textareaRows,
              className: "ev-input",
              style: {
                ...inputStyle(false, darkMode),
                resize: "vertical",
                minHeight: textareaMinHeight
              },
              onFocus: e => e.target.style.borderColor = C.borderF,
              onBlur: e => e.target.style.borderColor = C.border
            })
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
              ref: rcRef
            }), !rcReady && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
              style: {
                fontFamily: "'DM Sans', sans-serif",
                fontSize: 11,
                color: C.slate
              },
              children: "Loading security check..."
            }), rcError && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
              style: {
                fontFamily: "'DM Sans', sans-serif",
                fontSize: 11,
                color: C.error,
                marginTop: 6
              },
              children: "Please complete the reCAPTCHA verification."
            })]
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("button", {
            type: "submit",
            disabled: status === "sending",
            style: {
              width: "100%",
              display: "flex",
              alignItems: "center",
              justifyContent: "center",
              gap: 8,
              fontFamily: "'DM Sans', sans-serif",
              fontSize: 12,
              fontWeight: 700,
              letterSpacing: ".1em",
              textTransform: "uppercase",
              color: "#ffffff",
              background: status === "sending" ? C.slate : `linear-gradient(135deg, ${C.gold}, ${C.goldDk})`,
              border: "none",
              borderRadius: 7,
              padding: submitPadding,
              cursor: status === "sending" ? "not-allowed" : "pointer",
              transition: "opacity .2s",
              opacity: status === "sending" ? .75 : 1
            },
            onMouseEnter: e => {
              if (status !== "sending") e.currentTarget.style.opacity = ".85";
            },
            onMouseLeave: e => {
              e.currentTarget.style.opacity = "1";
            },
            children: status === "sending" ? /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.Fragment, {
              children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(SpinnerIcon, {}), " Sending..."]
            }) : /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.Fragment, {
              children: ["Send My Request ", /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(ArrowIcon, {})]
            })
          }), status === "error" && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
            style: {
              fontFamily: "'DM Sans', sans-serif",
              fontSize: 12,
              color: C.error,
              background: "#fdf2f2",
              border: "1px solid #f5c6c6",
              borderRadius: 6,
              padding: "10px 14px",
              textAlign: "center"
            },
            children: ["Something went wrong. Please try again or call us directly at", " ", /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
              href: "tel:+17705550192",
              style: {
                color: C.error,
                fontWeight: 600
              },
              children: "(770) 555-0192"
            }), "."]
          })]
        })
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
        style: {
          fontFamily: "'DM Sans', sans-serif",
          fontSize: 11,
          fontWeight: 300,
          color: darkMode ? "rgba(230,227,223,.35)" : C.slate,
          marginTop: trustMarginTop,
          textAlign: "center",
          lineHeight: 1.7
        },
        children: "We respond within 24\u201348 hours \xB7 No pressure \xB7 Licensed & Insured \xB7 17+ Years Experience"
      })]
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("style", {
      children: `
        @media (max-width: 560px) {
          .ev-form-2col { grid-template-columns: 1fr !important; }
        }
      `
    })]
  });
}
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (ContactForm);

/***/ },

/***/ "./src/scripts/Footer.js"
/*!*******************************!*\
  !*** ./src/scripts/Footer.js ***!
  \*******************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__);


// ── Config ────────────────────────────────────────────────────────────────────

const COMPANY = {
  name: "Everridge Landscape & Hardscape",
  tagline: "Crafting Outdoor Spaces with Precision.",
  phone: "(586) 381 9109",
  email: "info@everridgeus.com",
  address: "Clinton Township, Michigan",
  license: "MI Licensed & Insured Contractor"
};
const SERVICES = [{
  label: "Brick + Hardscapes",
  href: "/services/brick-hardscapes"
}, {
  label: "Landscape Design & Installation",
  href: "/services/landscape-design"
}, {
  label: "Garden Design & 3D Renderings",
  href: "/services/garden-design-3d-renderings"
}, {
  label: "Outdoor Lighting Systems",
  href: "/services/outdoor-lighting-systems"
}];
const CITIES = [{
  label: "Birmingham",
  href: "/locations/birmingham"
}, {
  label: "Bloomfield Hills",
  href: "/locations/bloomfield-hills"
}, {
  label: "Troy",
  href: "/locations/troy"
}, {
  label: "Rochester Hills",
  href: "/locations/rochester-hills"
}, {
  label: "Shelby Township",
  href: "/locations/shelby-township"
}, {
  label: "Washington Twp.",
  href: "/locations/washington-township"
}, {
  label: "Farmington Hills",
  href: "/locations/farmington-hills"
}, {
  label: "Clinton Township",
  href: "/locations/clinton-township"
}];
const LEGAL = [{
  label: "Privacy Policy",
  href: "/privacy-policy"
}, {
  label: "Terms of Service",
  href: "/terms-of-service"
}, {
  label: "Sitemap",
  href: "/sitemap.xml"
}];
const SOCIAL = [{
  label: "Instagram",
  href: "https://www.instagram.com/everridge_landscape?igsh=MWN0NnZ3Y2IzdDNubw==&utm_source=ig_contact_invite",
  icon: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
    width: "18",
    height: "18",
    viewBox: "0 0 24 24",
    fill: "currentColor",
    children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
      d: "M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"
    })
  })
}, {
  label: "Facebook",
  href: "https://www.facebook.com/share/1D5bsCmUXT/?mibextid=wwXIfr",
  icon: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
    width: "18",
    height: "18",
    viewBox: "0 0 24 24",
    fill: "currentColor",
    children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
      d: "M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"
    })
  })
}, {
  label: "Tik Tok",
  href: "https://www.tiktok.com/@everridge_landscape?_r=1&_t=ZS-96r3LioVGML",
  icon: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
    width: "18",
    height: "18",
    viewBox: "0 0 24 24",
    fill: "currentColor",
    children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
      d: "M19.59 6.69a4.83 4.83 0 01-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 01-5.2 1.74 2.89 2.89 0 012.31-4.64 2.93 2.93 0 01.88.13V9.4a6.84 6.84 0 00-1-.05A6.33 6.33 0 005.8 20.1a6.34 6.34 0 0010.86-4.43v-7a8.16 8.16 0 004.77 1.52v-3.4a4.85 4.85 0 01-1.84-.1z"
    })
  })
}];

// ── Tokens ────────────────────────────────────────────────────────────────────
const GOLD = "#8a6a45";
const GOLD_DK = "#7a5c38";
const BG = "#f5f2ef";
const BG2 = "#ede9e3";
const BG3 = "#e6e3df";
const BORDER = "#d8d4ce";
const GREEN = "#1f3a32";
const TEXT_DIM = "#6a6a6c";
const TEXT_MID = "#5a5a5c";
const TEXT_LT = "#2f3133";

// ── Font loader ───────────────────────────────────────────────────────────────
function useFonts() {
  // Fonts are self-hosted via fonts.css enqueued in functions.php
  // Gotham Book  → body / UI text
  // Articulat CF → headings
}

// ── Sub-components ────────────────────────────────────────────────────────────
function ColLabel({
  children
}) {
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
    style: {
      fontFamily: "'Gotham Book', sans-serif",
      fontSize: 9,
      fontWeight: 700,
      color: "#2f3133",
      letterSpacing: "0.22em",
      textTransform: "uppercase",
      marginBottom: 20,
      paddingBottom: 12,
      borderBottom: `1px solid ${BORDER}`
    },
    children: children
  });
}
function FooterLink({
  href,
  children
}) {
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("a", {
    href: href,
    style: {
      display: "flex",
      alignItems: "center",
      gap: 5,
      fontFamily: "'Gotham Book', sans-serif",
      fontSize: 13,
      fontWeight: 400,
      color: TEXT_LT,
      textDecoration: "none",
      lineHeight: 1,
      padding: "7px 0",
      transition: "color 0.15s",
      cursor: "pointer"
    },
    onMouseEnter: e => {
      e.currentTarget.style.color = GOLD;
      const arrow = e.currentTarget.querySelector(".fl-arrow");
      if (arrow) {
        arrow.style.opacity = "1";
        arrow.style.transform = "translateX(2px)";
      }
    },
    onMouseLeave: e => {
      e.currentTarget.style.color = TEXT_LT;
      const arrow = e.currentTarget.querySelector(".fl-arrow");
      if (arrow) {
        arrow.style.opacity = "0";
        arrow.style.transform = "translateX(0)";
      }
    },
    children: [children, /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
      className: "fl-arrow",
      style: {
        opacity: 0,
        transition: "opacity 0.15s, transform 0.15s",
        display: "inline-flex",
        alignItems: "center"
      },
      children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
        width: "9",
        height: "9",
        fill: "none",
        viewBox: "0 0 24 24",
        stroke: "currentColor",
        strokeWidth: 2,
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
          strokeLinecap: "round",
          strokeLinejoin: "round",
          d: "M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"
        })
      })
    })]
  });
}

// ── Footer ────────────────────────────────────────────────────────────────────
function Footer() {
  useFonts();
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("footer", {
    style: {
      background: BG,
      borderTop: `1px solid ${BORDER}`,
      position: "relative"
    },
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
      style: {
        position: "absolute",
        inset: 0,
        backgroundImage: "url('/wp-content/uploads/2026/05/EstampadoEverridge-1-scaled.png')",
        backgroundRepeat: "repeat",
        backgroundSize: "340px auto",
        opacity: 0.32,
        pointerEvents: "none",
        zIndex: 0
      }
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
      style: {
        position: "relative",
        zIndex: 1
      },
      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
        style: {
          background: `linear-gradient(135deg, ${GREEN} 0%, #152a22 60%, #0f1f18 100%)`,
          borderBottom: `1px solid #2a3a2a`
        },
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
          style: {
            maxWidth: 1280,
            margin: "0 auto",
            padding: "52px 40px",
            display: "flex",
            alignItems: "center",
            justifyContent: "space-between",
            gap: 32,
            flexWrap: "wrap"
          },
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
              style: {
                fontFamily: "'Articulat CF', sans-serif",
                fontSize: 28,
                fontWeight: 700,
                color: "#f0ece6",
                lineHeight: 1.2,
                marginBottom: 8
              },
              children: "Ready to Transform Your Outdoor Space?"
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
              style: {
                margin: 0,
                fontFamily: "'Gotham Book', sans-serif",
                fontSize: 14,
                fontWeight: 300,
                color: "rgba(240,236,230,0.5)",
                letterSpacing: "0.02em"
              },
              children: "Schedule a free consultation \u2014 no commitment required."
            })]
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
            style: {
              display: "flex",
              alignItems: "center",
              gap: 12,
              flexShrink: 0
            },
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
              href: "/contact",
              style: {
                display: "inline-block",
                fontFamily: "'Gotham Book', sans-serif",
                fontSize: 12,
                fontWeight: 700,
                color: "#0f0f0f",
                background: `linear-gradient(135deg, ${GOLD}, ${GOLD_DK})`,
                padding: "14px 28px",
                borderRadius: 0,
                textDecoration: "none",
                letterSpacing: "0.1em",
                textTransform: "uppercase",
                whiteSpace: "nowrap"
              },
              children: "Get Free Estimate"
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
              href: `tel:${COMPANY.phone.replace(/\D/g, "")}`,
              style: {
                display: "inline-block",
                fontFamily: "'Gotham Book', sans-serif",
                fontSize: 12,
                fontWeight: 500,
                color: "rgba(240,236,230,0.6)",
                border: "1px solid rgba(240,236,230,0.15)",
                padding: "13px 24px",
                borderRadius: 0,
                textDecoration: "none",
                letterSpacing: "0.04em",
                whiteSpace: "nowrap",
                transition: "color 0.2s, border-color 0.2s"
              },
              onMouseEnter: e => {
                e.currentTarget.style.color = GOLD;
                e.currentTarget.style.borderColor = GOLD;
              },
              onMouseLeave: e => {
                e.currentTarget.style.color = "rgba(240,236,230,0.6)";
                e.currentTarget.style.borderColor = "rgba(240,236,230,0.15)";
              },
              children: COMPANY.phone
            })]
          })]
        })
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
        style: {
          maxWidth: 1280,
          margin: "0 auto",
          padding: "64px 40px 48px"
        },
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
          style: {
            display: "grid",
            gridTemplateColumns: "2fr 1fr 1fr 1fr",
            gap: "48px 40px"
          },
          className: "footer-grid",
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
              href: "/",
              style: {
                display: "inline-flex",
                alignItems: "center",
                textDecoration: "none",
                marginBottom: 24
              },
              children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("img", {
                src: "/wp-content/uploads/2026/05/imagotipo_principal.png",
                alt: "Everridge Landscape & Hardscape",
                style: {
                  height: 44,
                  width: "auto",
                  display: "block",
                  objectFit: "contain"
                }
              })
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("p", {
              style: {
                fontFamily: "'Articulat CF', sans-serif",
                fontStyle: "italic",
                fontSize: 15,
                fontWeight: 400,
                color: TEXT_MID,
                lineHeight: 1.6,
                marginBottom: 28,
                marginTop: 0
              },
              children: ["\"", COMPANY.tagline, "\""]
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
              style: {
                display: "flex",
                flexDirection: "column",
                gap: 12
              },
              children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("a", {
                href: `tel:${COMPANY.phone.replace(/\D/g, "")}`,
                style: {
                  display: "flex",
                  alignItems: "center",
                  gap: 10,
                  textDecoration: "none"
                },
                children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
                  style: {
                    width: 30,
                    height: 30,
                    borderRadius: 0,
                    background: BG3,
                    border: `1px solid ${BORDER}`,
                    display: "flex",
                    alignItems: "center",
                    justifyContent: "center",
                    flexShrink: 0
                  },
                  children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
                    width: "13",
                    height: "13",
                    viewBox: "0 0 24 24",
                    fill: GOLD,
                    children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
                      fillRule: "evenodd",
                      d: "M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z",
                      clipRule: "evenodd"
                    })
                  })
                }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
                  style: {
                    fontFamily: "'Gotham Book', sans-serif",
                    fontSize: 13,
                    fontWeight: 500,
                    color: TEXT_LT
                  },
                  children: COMPANY.phone
                })]
              }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("a", {
                href: `mailto:${COMPANY.email}`,
                style: {
                  display: "flex",
                  alignItems: "center",
                  gap: 10,
                  textDecoration: "none"
                },
                children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
                  style: {
                    width: 30,
                    height: 30,
                    borderRadius: 0,
                    background: BG3,
                    border: `1px solid ${BORDER}`,
                    display: "flex",
                    alignItems: "center",
                    justifyContent: "center",
                    flexShrink: 0
                  },
                  children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
                    width: "13",
                    height: "13",
                    viewBox: "0 0 24 24",
                    fill: "none",
                    stroke: GOLD,
                    strokeWidth: "2",
                    children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
                      strokeLinecap: "round",
                      strokeLinejoin: "round",
                      d: "M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"
                    })
                  })
                }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
                  style: {
                    fontFamily: "'Gotham Book', sans-serif",
                    fontSize: 13,
                    fontWeight: 400,
                    color: TEXT_MID
                  },
                  children: COMPANY.email
                })]
              }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("a", {
                href: "https://www.google.com/maps/place/Clinton+Township,+MI,+USA/@42.5848894,-82.9970678,12z/data=!3m1!4b1!4m6!3m5!1s0x8824df5dbcedcfeb:0x85542cfd06a6e1f1!8m2!3d42.600075!4d-82.9321168!16zL20vMHZjN2s?entry=ttu&g_ep=EgoyMDI2MDUxMy4wIKXMDSoASAFQAw%3D%3D",
                target: "_blank",
                rel: "noopener noreferrer",
                style: {
                  display: "flex",
                  alignItems: "flex-start",
                  gap: 10,
                  textDecoration: "none"
                },
                onMouseEnter: e => {
                  e.currentTarget.querySelector("span").style.color = "#1f3a32";
                },
                onMouseLeave: e => {
                  e.currentTarget.querySelector("span").style.color = "#5a5a5c";
                },
                children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
                  style: {
                    width: 30,
                    height: 30,
                    borderRadius: 0,
                    background: BG3,
                    border: `1px solid ${BORDER}`,
                    display: "flex",
                    alignItems: "center",
                    justifyContent: "center",
                    flexShrink: 0,
                    marginTop: 1
                  },
                  children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("svg", {
                    width: "13",
                    height: "13",
                    viewBox: "0 0 24 24",
                    fill: "none",
                    stroke: GOLD,
                    strokeWidth: "2",
                    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
                      strokeLinecap: "round",
                      strokeLinejoin: "round",
                      d: "M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"
                    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
                      strokeLinecap: "round",
                      strokeLinejoin: "round",
                      d: "M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"
                    })]
                  })
                }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
                  style: {
                    fontFamily: "'Gotham Book', sans-serif",
                    fontSize: 12,
                    fontWeight: 400,
                    color: "#5a5a5c",
                    lineHeight: 1.6,
                    whiteSpace: "pre-line",
                    transition: "color 0.15s"
                  },
                  children: COMPANY.address
                })]
              })]
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
              style: {
                display: "flex",
                gap: 8,
                marginTop: 28
              },
              children: SOCIAL.map(s => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
                href: s.href,
                target: "_blank",
                rel: "noopener noreferrer",
                title: s.label,
                style: {
                  width: 36,
                  height: 36,
                  display: "flex",
                  alignItems: "center",
                  justifyContent: "center",
                  background: BG3,
                  border: `1px solid ${BORDER}`,
                  borderRadius: 0,
                  color: TEXT_MID,
                  textDecoration: "none",
                  transition: "color 0.15s, border-color 0.15s, background 0.15s"
                },
                onMouseEnter: e => {
                  e.currentTarget.style.color = GOLD;
                  e.currentTarget.style.borderColor = `${GOLD}55`;
                  e.currentTarget.style.background = `${GOLD}10`;
                },
                onMouseLeave: e => {
                  e.currentTarget.style.color = TEXT_MID;
                  e.currentTarget.style.borderColor = BORDER;
                  e.currentTarget.style.background = BG3;
                },
                children: s.icon
              }, s.label))
            })]
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(ColLabel, {
              children: "Services"
            }), SERVICES.map(s => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(FooterLink, {
              href: s.href,
              children: s.label
            }, s.href)), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
              style: {
                marginTop: 16
              },
              children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("a", {
                href: "/services",
                style: {
                  display: "inline-flex",
                  alignItems: "center",
                  gap: 6,
                  fontFamily: "'Gotham Book', sans-serif",
                  fontSize: 11,
                  fontWeight: 700,
                  color: "#1f3a32",
                  textDecoration: "none",
                  letterSpacing: "0.08em",
                  textTransform: "uppercase"
                },
                children: ["View All Services", /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
                  width: "10",
                  height: "10",
                  fill: "none",
                  viewBox: "0 0 24 24",
                  stroke: "currentColor",
                  strokeWidth: 2,
                  children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
                    strokeLinecap: "round",
                    strokeLinejoin: "round",
                    d: "M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"
                  })
                })]
              })
            })]
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(ColLabel, {
              children: "Service Areas"
            }), CITIES.map(c => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(FooterLink, {
              href: c.href,
              children: c.label
            }, c.href)), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
              style: {
                marginTop: 16
              },
              children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("a", {
                href: "/locations",
                style: {
                  display: "inline-flex",
                  alignItems: "center",
                  gap: 6,
                  fontFamily: "'Gotham Book', sans-serif",
                  fontSize: 11,
                  fontWeight: 700,
                  color: "#1f3a32",
                  textDecoration: "none",
                  letterSpacing: "0.08em",
                  textTransform: "uppercase"
                },
                children: ["All Locations", /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
                  width: "10",
                  height: "10",
                  fill: "none",
                  viewBox: "0 0 24 24",
                  stroke: "currentColor",
                  strokeWidth: 2,
                  children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
                    strokeLinecap: "round",
                    strokeLinejoin: "round",
                    d: "M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"
                  })
                })]
              })
            })]
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(ColLabel, {
              children: "Company"
            }), [{
              label: "About Us",
              href: "/about"
            }, {
              label: "Our Work",
              href: "/our-work"
            }, {
              label: "Testimonials",
              href: "/reviews"
            }, {
              label: "Free Estimate",
              href: "/contact"
            }, {
              label: "Contact",
              href: "/contact"
            }].map(l => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(FooterLink, {
              href: l.href,
              children: l.label
            }, l.href + l.label)), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
              style: {
                marginTop: 28,
                padding: "14px 16px",
                background: BG3,
                border: `1px solid ${BORDER}`,
                borderRadius: 0
              },
              children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
                style: {
                  display: "flex",
                  alignItems: "center",
                  gap: 8,
                  marginBottom: 6
                },
                children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
                  width: "13",
                  height: "13",
                  viewBox: "0 0 24 24",
                  fill: "none",
                  stroke: GOLD,
                  strokeWidth: "2",
                  children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
                    strokeLinecap: "round",
                    strokeLinejoin: "round",
                    d: "M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"
                  })
                }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
                  style: {
                    fontFamily: "'Gotham Book', sans-serif",
                    fontSize: 9,
                    fontWeight: 600,
                    color: "#1f3a32",
                    letterSpacing: "0.15em",
                    fontWeight: 700,
                    textTransform: "uppercase"
                  },
                  children: "Licensed & Insured"
                })]
              }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
                style: {
                  margin: 0,
                  fontFamily: "'Gotham Book', sans-serif",
                  fontSize: 11,
                  fontWeight: 300,
                  color: TEXT_DIM,
                  lineHeight: 1.5
                },
                children: COMPANY.license
              })]
            })]
          })]
        })
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
        style: {
          borderTop: `1px solid ${BORDER}`
        },
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
          style: {
            maxWidth: 1280,
            margin: "0 auto",
            padding: "20px 40px",
            display: "flex",
            alignItems: "center",
            justifyContent: "space-between",
            gap: 16,
            flexWrap: "wrap"
          },
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("p", {
            style: {
              margin: 0,
              fontFamily: "'Gotham Book', sans-serif",
              fontSize: 11,
              fontWeight: 300,
              color: TEXT_DIM,
              letterSpacing: "0.03em"
            },
            children: ["\xA9 ", new Date().getFullYear(), " Everridge Landscape & Hardscape. All rights reserved."]
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
            style: {
              display: "flex",
              alignItems: "center",
              gap: 24
            },
            children: LEGAL.map(l => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
              href: l.href,
              style: {
                fontFamily: "'Gotham Book', sans-serif",
                fontSize: 11,
                fontWeight: 400,
                color: TEXT_DIM,
                textDecoration: "none",
                transition: "color 0.15s"
              },
              onMouseEnter: e => e.currentTarget.style.color = TEXT_MID,
              onMouseLeave: e => e.currentTarget.style.color = TEXT_DIM,
              children: l.label
            }, l.href))
          })]
        })
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("style", {
        children: `
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
      `
      })]
    })]
  });
}
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (Footer);

/***/ },

/***/ "./src/scripts/Navbar.js"
/*!*******************************!*\
  !*** ./src/scripts/Navbar.js ***!
  \*******************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__);


// ── Config ────────────────────────────────────────────────────────────────────

const NAV_LINKS = [{
  label: "Home",
  href: "/"
}, {
  label: "About",
  href: "/about"
}, {
  label: "Services",
  href: "/services",
  dropdown: [{
    label: "Brick + Hardscapes",
    href: "/services/brick-hardscapes"
  }, {
    label: "Landscape Design & Installation",
    href: "/services/landscape-design"
  }, {
    label: "Garden Design & 3D Renderings",
    href: "/services/garden-design-3d-renderings"
  }, {
    label: "Outdoor Lighting Systems",
    href: "/services/outdoor-lighting-systems"
  }]
}, {
  label: "Our Work",
  href: "/our-work"
}, {
  label: "Locations",
  href: "/locations"
}, {
  label: "Contact",
  href: "/contact"
}];
const PHONE = "(586) 381 9109";
const PHONE_HREF = "tel:+17705550192";
const EMAIL = "info@everridgeus.com";
const EMAIL_HREF = "mailto:info@everridgeus.com";
const ADDRESS = "Clinton Township, MI";
const MAPS_HREF = "https://maps.google.com/?q=Clinton+Township+MI";
const CTA_HREF = "/contact";
const SOCIAL_LINKS = [{
  label: "Instagram",
  href: "https://www.instagram.com/everridge_landscape?igsh=MWN0NnZ3Y2IzdDNubw==&utm_source=ig_contact_invite",
  icon: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
    width: "15",
    height: "15",
    viewBox: "0 0 24 24",
    fill: "currentColor",
    children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
      d: "M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"
    })
  })
}, {
  label: "Facebook",
  href: "https://www.facebook.com/share/1D5bsCmUXT/?mibextid=wwXIfr",
  icon: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
    width: "15",
    height: "15",
    viewBox: "0 0 24 24",
    fill: "currentColor",
    children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
      d: "M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"
    })
  })
}, {
  label: "Tik Tok",
  href: "https://www.tiktok.com/@everridge_landscape?_r=1&_t=ZS-96r3LioVGML",
  icon: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
    width: "15",
    height: "15",
    viewBox: "0 0 24 24",
    fill: "currentColor",
    children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
      d: "M19.59 6.69a4.83 4.83 0 01-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 01-5.2 1.74 2.89 2.89 0 012.31-4.64 2.93 2.93 0 01.88.13V9.4a6.84 6.84 0 00-1-.05A6.33 6.33 0 005.8 20.1a6.34 6.34 0 0010.86-4.43v-7a8.16 8.16 0 004.77 1.52v-3.4a4.85 4.85 0 01-1.84-.1z"
    })
  })
}];

// ── Tokens ────────────────────────────────────────────────────────────────────
const GOLD = "#8a6a45";
const GOLD_DK = "#7a5c38";
const BG = "#ffffff";
const BG2 = "#f5f2ef";
const BG3 = "#e6e3df";
const GREEN = "#1f3a32";
const BORDER = "#e0dbd4";

// ── Fonts ─────────────────────────────────────────────────────────────────────
function useFonts() {
  // Fonts are self-hosted via fonts.css enqueued in functions.php.
  // Gotham Book  → body / UI text
  // Articulat CF → headings
  // No Google Fonts needed.
  (0,react__WEBPACK_IMPORTED_MODULE_0__.useEffect)(() => {}, []);
}

// ── Icons ─────────────────────────────────────────────────────────────────────
const PhoneIcon = ({
  size = 13
}) => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
  width: size,
  height: size,
  viewBox: "0 0 24 24",
  fill: "currentColor",
  children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    fillRule: "evenodd",
    d: "M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z",
    clipRule: "evenodd"
  })
});
const EmailIcon = ({
  size = 13
}) => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
  width: size,
  height: size,
  viewBox: "0 0 24 24",
  fill: "none",
  stroke: "currentColor",
  strokeWidth: "1.8",
  children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    strokeLinecap: "round",
    strokeLinejoin: "round",
    d: "M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"
  })
});
const MapPinIcon = ({
  size = 13
}) => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("svg", {
  width: size,
  height: size,
  viewBox: "0 0 24 24",
  fill: "none",
  stroke: "currentColor",
  strokeWidth: "1.8",
  children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    strokeLinecap: "round",
    strokeLinejoin: "round",
    d: "M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"
  }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    strokeLinecap: "round",
    strokeLinejoin: "round",
    d: "M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"
  })]
});
const ChevronDown = ({
  open
}) => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
  width: "11",
  height: "11",
  viewBox: "0 0 20 20",
  fill: "currentColor",
  style: {
    marginLeft: 4,
    transition: "transform 0.2s",
    transform: open ? "rotate(180deg)" : "rotate(0deg)",
    flexShrink: 0
  },
  children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    fillRule: "evenodd",
    d: "M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z",
    clipRule: "evenodd"
  })
});
const HamburgerIcon = () => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
  width: "22",
  height: "22",
  fill: "none",
  viewBox: "0 0 24 24",
  stroke: "currentColor",
  strokeWidth: 1.6,
  children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    strokeLinecap: "round",
    strokeLinejoin: "round",
    d: "M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"
  })
});
const XIcon = () => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
  width: "20",
  height: "20",
  fill: "none",
  viewBox: "0 0 24 24",
  stroke: "currentColor",
  strokeWidth: 1.8,
  children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    strokeLinecap: "round",
    strokeLinejoin: "round",
    d: "M6 18L18 6M6 6l12 12"
  })
});
const ArrowRight = () => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
  width: "10",
  height: "10",
  fill: "none",
  viewBox: "0 0 24 24",
  stroke: "currentColor",
  strokeWidth: 2,
  children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    strokeLinecap: "round",
    strokeLinejoin: "round",
    d: "M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"
  })
});

// ── Desktop Dropdown ──────────────────────────────────────────────────────────
function Dropdown({
  items,
  isOpen
}) {
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
    style: {
      position: "absolute",
      top: "calc(100% + 10px)",
      left: "50%",
      width: 220,
      background: BG2,
      border: `1px solid ${BORDER}`,
      borderRadius: 0,
      overflow: "hidden",
      zIndex: 100,
      boxShadow: "0 20px 60px rgba(0,0,0,0.6)",
      opacity: isOpen ? 1 : 0,
      pointerEvents: isOpen ? "auto" : "none",
      transform: isOpen ? "translateX(-50%) translateY(0)" : "translateX(-50%) translateY(-8px)",
      transition: "opacity 0.18s ease, transform 0.18s ease"
    },
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
      style: {
        height: 2,
        background: `linear-gradient(90deg, ${GOLD}, ${GOLD_DK})`
      }
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
      style: {
        padding: "6px 0"
      },
      children: items.map(item => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("a", {
        href: item.href,
        style: {
          display: "flex",
          alignItems: "center",
          justifyContent: "space-between",
          padding: "10px 18px",
          fontFamily: "'Gotham Book', sans-serif",
          fontSize: 13,
          fontWeight: 400,
          color: "#2f3133",
          textDecoration: "none",
          letterSpacing: "0.01em",
          transition: "color 0.15s, background 0.15s"
        },
        onMouseEnter: e => {
          e.currentTarget.style.color = GOLD;
          e.currentTarget.style.background = BG3;
        },
        onMouseLeave: e => {
          e.currentTarget.style.color = "#2f3133";
          e.currentTarget.style.background = "transparent";
        },
        children: [item.label, /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
          style: {
            color: GOLD,
            opacity: 0.4
          },
          children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(ArrowRight, {})
        })]
      }, item.href))
    })]
  });
}

// ── Mobile Menu ───────────────────────────────────────────────────────────────
function MobileMenu({
  isOpen,
  onClose
}) {
  const [openSection, setOpenSection] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(null);
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.Fragment, {
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
      onClick: onClose,
      style: {
        position: "fixed",
        inset: 0,
        zIndex: 60,
        background: "rgba(0,0,0,0.7)",
        backdropFilter: "blur(4px)",
        opacity: isOpen ? 1 : 0,
        pointerEvents: isOpen ? "auto" : "none",
        transition: "opacity 0.3s"
      }
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
      style: {
        position: "fixed",
        top: 0,
        right: 0,
        bottom: 0,
        zIndex: 70,
        width: "min(320px, 85vw)",
        background: BG2,
        borderLeft: `1px solid ${BORDER}`,
        transform: isOpen ? "translateX(0)" : "translateX(100%)",
        transition: "transform 0.32s cubic-bezier(0.32, 0.72, 0, 1)",
        boxShadow: "-20px 0 60px rgba(0,0,0,0.5)",
        display: "flex",
        flexDirection: "column",
        overflowY: "auto"
      },
      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
        style: {
          height: 2,
          background: `linear-gradient(90deg, ${GOLD}, ${GOLD_DK})`,
          flexShrink: 0
        }
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
        style: {
          display: "flex",
          alignItems: "center",
          justifyContent: "space-between",
          padding: "20px 20px 16px",
          borderBottom: `1px solid ${BORDER}`,
          flexShrink: 0
        },
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
          href: "/",
          onClick: onClose,
          style: {
            display: "flex",
            alignItems: "center",
            textDecoration: "none"
          },
          children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("img", {
            src: "/wp-content/uploads/2026/05/imagotipo_principal.png",
            alt: "Everridge Landscape & Hardscape",
            style: {
              height: 34,
              width: "auto",
              display: "block",
              objectFit: "contain"
            }
          })
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("button", {
          onClick: onClose,
          style: {
            background: BG3,
            border: "none",
            borderRadius: 0,
            color: "#2f3133",
            padding: "7px 8px",
            cursor: "pointer",
            display: "flex",
            alignItems: "center"
          },
          children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(XIcon, {})
        })]
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("nav", {
        style: {
          padding: "8px 12px",
          flex: 1
        },
        children: NAV_LINKS.map(link => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
          children: link.dropdown ? /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.Fragment, {
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("button", {
              onClick: () => setOpenSection(s => s === link.label ? null : link.label),
              style: {
                width: "100%",
                display: "flex",
                alignItems: "center",
                justifyContent: "space-between",
                padding: "13px 12px",
                background: "none",
                border: "none",
                cursor: "pointer",
                fontFamily: "'Gotham Book', sans-serif",
                fontSize: 15,
                fontWeight: 500,
                color: openSection === link.label ? GOLD : "#0b0b0c",
                borderRadius: 0,
                transition: "color 0.15s"
              },
              children: [link.label, /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(ChevronDown, {
                open: openSection === link.label
              })]
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
              style: {
                overflow: "hidden",
                maxHeight: openSection === link.label ? 400 : 0,
                transition: "max-height 0.25s ease"
              },
              children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
                style: {
                  paddingLeft: 12,
                  paddingBottom: 6
                },
                children: link.dropdown.map(sub => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("a", {
                  href: sub.href,
                  style: {
                    display: "block",
                    padding: "9px 12px",
                    fontFamily: "'Gotham Book', sans-serif",
                    fontSize: 13,
                    fontWeight: 400,
                    color: "#7a7f85",
                    textDecoration: "none",
                    borderRadius: 0,
                    transition: "color 0.15s"
                  },
                  onMouseEnter: e => e.currentTarget.style.color = GOLD,
                  onMouseLeave: e => e.currentTarget.style.color = "#7a7f85",
                  children: ["\u2014 ", sub.label]
                }, sub.href))
              })
            })]
          }) : /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
            href: link.href,
            style: {
              display: "block",
              padding: "13px 12px",
              fontFamily: "'Gotham Book', sans-serif",
              fontSize: 15,
              fontWeight: 500,
              color: "#0b0b0c",
              textDecoration: "none",
              borderRadius: 0
            },
            children: link.label
          })
        }, link.label))
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
        style: {
          padding: "16px 20px 32px",
          borderTop: `1px solid ${BORDER}`,
          flexShrink: 0
        },
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
          href: CTA_HREF,
          style: {
            display: "block",
            textAlign: "center",
            background: `linear-gradient(135deg, ${GOLD}, ${GOLD_DK})`,
            color: "#0f0f0f",
            fontFamily: "'Gotham Book', sans-serif",
            fontSize: 12,
            fontWeight: 700,
            padding: "14px 0",
            borderRadius: 0,
            textDecoration: "none",
            letterSpacing: "0.1em",
            textTransform: "uppercase"
          },
          children: "Get a Free Estimate"
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("a", {
          href: PHONE_HREF,
          style: {
            display: "flex",
            alignItems: "center",
            justifyContent: "center",
            gap: 7,
            marginTop: 12,
            fontFamily: "'Gotham Book', sans-serif",
            fontSize: 13,
            fontWeight: 400,
            color: GOLD,
            textDecoration: "none",
            opacity: 0.8
          },
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(PhoneIcon, {}), " ", PHONE]
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("a", {
          href: EMAIL_HREF,
          style: {
            display: "flex",
            alignItems: "center",
            justifyContent: "center",
            gap: 7,
            marginTop: 8,
            fontFamily: "'Gotham Book', sans-serif",
            fontSize: 12,
            fontWeight: 400,
            color: "#686860",
            textDecoration: "none"
          },
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(EmailIcon, {}), " ", EMAIL]
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
          style: {
            display: "flex",
            justifyContent: "center",
            gap: 8,
            marginTop: 16,
            paddingTop: 16,
            borderTop: `1px solid ${BORDER}`
          },
          children: SOCIAL_LINKS.map(s => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
            href: s.href,
            target: "_blank",
            rel: "noopener noreferrer",
            title: s.label,
            style: {
              width: 36,
              height: 36,
              display: "flex",
              alignItems: "center",
              justifyContent: "center",
              background: BG3,
              border: `1px solid ${BORDER}`,
              borderRadius: 0,
              color: "#7a7f85",
              textDecoration: "none",
              transition: "color 0.15s, border-color 0.15s"
            },
            onMouseEnter: e => {
              e.currentTarget.style.color = GOLD;
              e.currentTarget.style.borderColor = GOLD;
            },
            onMouseLeave: e => {
              e.currentTarget.style.color = "#7a7f85";
              e.currentTarget.style.borderColor = BORDER;
            },
            children: s.icon
          }, s.label))
        })]
      })]
    })]
  });
}

// ── Navbar ────────────────────────────────────────────────────────────────────
function Navbar() {
  useFonts();
  const [scrolled, setScrolled] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(false);
  const [openDropdown, setOpenDropdown] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(null);
  const [menuOpen, setMenuOpen] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(false);
  const navRef = (0,react__WEBPACK_IMPORTED_MODULE_0__.useRef)(null);
  const timerRef = (0,react__WEBPACK_IMPORTED_MODULE_0__.useRef)(null);
  (0,react__WEBPACK_IMPORTED_MODULE_0__.useEffect)(() => {
    const onScroll = () => setScrolled(window.scrollY > 40);
    window.addEventListener("scroll", onScroll, {
      passive: true
    });
    return () => window.removeEventListener("scroll", onScroll);
  }, []);
  (0,react__WEBPACK_IMPORTED_MODULE_0__.useEffect)(() => {
    const handler = e => {
      if (navRef.current && !navRef.current.contains(e.target)) setOpenDropdown(null);
    };
    document.addEventListener("mousedown", handler);
    return () => document.removeEventListener("mousedown", handler);
  }, []);
  const onEnter = label => {
    clearTimeout(timerRef.current);
    setOpenDropdown(label);
  };
  const onLeave = () => {
    timerRef.current = setTimeout(() => setOpenDropdown(null), 130);
  };
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.Fragment, {
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("header", {
      ref: navRef,
      style: {
        position: "fixed",
        top: 0,
        left: 0,
        right: 0,
        zIndex: 50,
        background: scrolled ? "rgba(255,255,255,0.97)" : BG,
        borderBottom: `1px solid ${scrolled ? BORDER : "transparent"}`,
        backdropFilter: scrolled ? "blur(12px)" : "none",
        boxShadow: scrolled ? "0 2px 24px rgba(0,0,0,0.08)" : "none",
        transition: "background 0.35s, border-color 0.35s, box-shadow 0.35s"
      },
      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
        style: {
          background: "#1a1a1a",
          borderBottom: "1px solid #2a2a2a"
        },
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
          style: {
            maxWidth: 1280,
            margin: "0 auto",
            padding: "0 24px",
            display: "flex",
            alignItems: "center",
            justifyContent: "space-between",
            height: 36
          },
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
            style: {
              display: "flex",
              alignItems: "center",
              gap: 20
            },
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("a", {
              href: PHONE_HREF,
              style: {
                display: "flex",
                alignItems: "center",
                gap: 6,
                fontFamily: "'Gotham Book', sans-serif",
                fontSize: 11,
                fontWeight: 500,
                color: "#ffffff",
                textDecoration: "none",
                transition: "opacity 0.15s"
              },
              onMouseEnter: e => e.currentTarget.style.opacity = "0.7",
              onMouseLeave: e => e.currentTarget.style.opacity = "1",
              children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(PhoneIcon, {
                size: 11
              }), " ", /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
                children: PHONE
              })]
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("a", {
              href: EMAIL_HREF,
              className: "hidden md:flex",
              style: {
                alignItems: "center",
                gap: 6,
                fontFamily: "'Gotham Book', sans-serif",
                fontSize: 11,
                fontWeight: 400,
                color: "rgba(255,255,255,0.75)",
                textDecoration: "none",
                transition: "color 0.15s"
              },
              onMouseEnter: e => e.currentTarget.style.color = "#ffffff",
              onMouseLeave: e => e.currentTarget.style.color = "rgba(255,255,255,0.75)",
              children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(EmailIcon, {
                size: 11
              }), " ", /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
                children: EMAIL
              })]
            })]
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("a", {
            href: MAPS_HREF,
            target: "_blank",
            rel: "noopener noreferrer",
            className: "hidden md:flex",
            style: {
              alignItems: "center",
              gap: 6,
              fontFamily: "'Gotham Book', sans-serif",
              fontSize: 11,
              fontWeight: 400,
              color: "rgba(255,255,255,0.75)",
              textDecoration: "none",
              position: "absolute",
              left: "50%",
              transform: "translateX(-50%)",
              transition: "color 0.15s"
            },
            onMouseEnter: e => e.currentTarget.style.color = "#ffffff",
            onMouseLeave: e => e.currentTarget.style.color = "rgba(255,255,255,0.75)",
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(MapPinIcon, {
              size: 11
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
              children: ADDRESS
            })]
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
            style: {
              display: "flex",
              alignItems: "center",
              gap: 4
            },
            children: SOCIAL_LINKS.map(s => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
              href: s.href,
              target: "_blank",
              rel: "noopener noreferrer",
              title: s.label,
              style: {
                width: 28,
                height: 28,
                display: "flex",
                alignItems: "center",
                justifyContent: "center",
                color: "rgba(255,255,255,0.65)",
                textDecoration: "none",
                borderRadius: 0,
                transition: "color 0.15s"
              },
              onMouseEnter: e => e.currentTarget.style.color = "#ffffff",
              onMouseLeave: e => e.currentTarget.style.color = "rgba(255,255,255,0.65)",
              children: s.icon
            }, s.label))
          })]
        })
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
        style: {
          maxWidth: 1280,
          margin: "0 auto",
          padding: "0 24px",
          display: "flex",
          alignItems: "center",
          justifyContent: "space-between",
          height: 68
        },
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
          href: "/",
          style: {
            display: "flex",
            alignItems: "center",
            textDecoration: "none"
          },
          children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("img", {
            src: "/wp-content/uploads/2026/05/imagotipo_principal.png",
            alt: "Everridge Landscape & Hardscape",
            style: {
              height: 44,
              width: "auto",
              display: "block",
              objectFit: "contain"
            }
          })
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("nav", {
          className: "hidden md:flex",
          style: {
            alignItems: "center",
            gap: 2
          },
          children: NAV_LINKS.map(link => {
            const isContact = link.label === "Contact";
            const isOpen = openDropdown === link.label;
            return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
              style: {
                position: "relative"
              },
              onMouseEnter: () => link.dropdown && onEnter(link.label),
              onMouseLeave: () => link.dropdown && onLeave(),
              children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("a", {
                href: link.href,
                onClick: e => link.dropdown && e.preventDefault(),
                style: {
                  display: "flex",
                  alignItems: "center",
                  padding: isContact ? "9px 22px" : "9px 14px",
                  fontFamily: "'Gotham Book', sans-serif",
                  fontSize: 13,
                  fontWeight: isContact ? 600 : 400,
                  letterSpacing: isContact ? "0.1em" : "0.02em",
                  textTransform: isContact ? "uppercase" : "none",
                  color: isContact ? "#ffffff" : isOpen ? GOLD : "#2f3133",
                  background: isContact ? `linear-gradient(135deg, ${GOLD}, ${GOLD_DK})` : "transparent",
                  borderRadius: 0,
                  textDecoration: "none",
                  marginLeft: isContact ? 12 : 0,
                  cursor: "pointer",
                  transition: "color 0.15s"
                },
                onMouseEnter: e => {
                  if (!isContact) e.currentTarget.style.color = GOLD;
                },
                onMouseLeave: e => {
                  if (!isContact) e.currentTarget.style.color = isOpen ? GOLD : "#2f3133";
                },
                children: [link.label, link.dropdown && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(ChevronDown, {
                  open: isOpen
                })]
              }), link.dropdown && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(Dropdown, {
                items: link.dropdown,
                isOpen: isOpen
              })]
            }, link.label);
          })
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
          className: "flex md:hidden",
          style: {
            alignItems: "center",
            gap: 10
          },
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("a", {
            href: PHONE_HREF,
            style: {
              display: "flex",
              alignItems: "center",
              gap: 6,
              background: `linear-gradient(135deg, ${GOLD}, ${GOLD_DK})`,
              color: "#0f0f0f",
              fontFamily: "'Gotham Book', sans-serif",
              fontSize: 11,
              fontWeight: 700,
              padding: "8px 14px",
              borderRadius: 0,
              textDecoration: "none",
              letterSpacing: "0.05em",
              textTransform: "uppercase"
            },
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(PhoneIcon, {
              size: 11
            }), " Call"]
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("button", {
            onClick: () => setMenuOpen(true),
            style: {
              background: BG3,
              border: `1px solid ${BORDER}`,
              borderRadius: 0,
              color: "#2f3133",
              padding: "8px 10px",
              cursor: "pointer",
              display: "flex",
              alignItems: "center"
            },
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(HamburgerIcon, {})
          })]
        })]
      })]
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
      style: {
        height: 104
      }
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(MobileMenu, {
      isOpen: menuOpen,
      onClose: () => setMenuOpen(false)
    })]
  });
}
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (Navbar);

/***/ },

/***/ "./node_modules/react-dom/client.js"
/*!******************************************!*\
  !*** ./node_modules/react-dom/client.js ***!
  \******************************************/
(__unused_webpack_module, exports, __webpack_require__) {



var m = __webpack_require__(/*! react-dom */ "react-dom");
if (false) // removed by dead control flow
{} else {
  var i = m.__SECRET_INTERNALS_DO_NOT_USE_OR_YOU_WILL_BE_FIRED;
  exports.createRoot = function(c, o) {
    i.usingClientEntryPoint = true;
    try {
      return m.createRoot(c, o);
    } finally {
      i.usingClientEntryPoint = false;
    }
  };
  exports.hydrateRoot = function(c, h, o) {
    i.usingClientEntryPoint = true;
    try {
      return m.hydrateRoot(c, h, o);
    } finally {
      i.usingClientEntryPoint = false;
    }
  };
}


/***/ },

/***/ "react"
/*!************************!*\
  !*** external "React" ***!
  \************************/
(module) {

module.exports = window["React"];

/***/ },

/***/ "react-dom"
/*!***************************!*\
  !*** external "ReactDOM" ***!
  \***************************/
(module) {

module.exports = window["ReactDOM"];

/***/ },

/***/ "react/jsx-runtime"
/*!**********************************!*\
  !*** external "ReactJSXRuntime" ***!
  \**********************************/
(module) {

module.exports = window["ReactJSXRuntime"];

/***/ }

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		if (!(moduleId in __webpack_modules__)) {
/******/ 			delete __webpack_module_cache__[moduleId];
/******/ 			var e = new Error("Cannot find module '" + moduleId + "'");
/******/ 			e.code = 'MODULE_NOT_FOUND';
/******/ 			throw e;
/******/ 		}
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	(() => {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = (module) => {
/******/ 			var getter = module && module.__esModule ?
/******/ 				() => (module['default']) :
/******/ 				() => (module);
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry needs to be wrapped in an IIFE because it needs to be isolated against other modules in the chunk.
(() => {
/*!**********************!*\
  !*** ./src/index.js ***!
  \**********************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _scripts_Navbar__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./scripts/Navbar */ "./src/scripts/Navbar.js");
/* harmony import */ var _scripts_Footer__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./scripts/Footer */ "./src/scripts/Footer.js");
/* harmony import */ var _scripts_ContactForm__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./scripts/ContactForm */ "./src/scripts/ContactForm.js");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var react_dom_client__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! react-dom/client */ "./node_modules/react-dom/client.js");
/* harmony import */ var _scripts_Chatbot__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./scripts/Chatbot */ "./src/scripts/Chatbot.js");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__);






// ── Navbar ────────────────────────────────────────────────────────────────────

const navEl = document.querySelector("#render-navbar-here");
if (navEl) {
  react_dom_client__WEBPACK_IMPORTED_MODULE_4__.createRoot(navEl).render(/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)(_scripts_Navbar__WEBPACK_IMPORTED_MODULE_0__["default"], {}));
}

// ── Footer ────────────────────────────────────────────────────────────────────
const footEl = document.querySelector("#render-footer-here");
if (footEl) {
  react_dom_client__WEBPACK_IMPORTED_MODULE_4__.createRoot(footEl).render(/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)(_scripts_Footer__WEBPACK_IMPORTED_MODULE_1__["default"], {}));
}

// ── ContactForm ───────────────────────────────────────────────────────────────
// data-compact="true"     → no padding, transparent bg
// data-show-title="false" → hide internal title
// data-title="..."        → custom title
// data-dark-mode="true"   → transparent inputs for dark/hero backgrounds
document.querySelectorAll('[id^="render-contact-form"]').forEach(el => {
  const compact = el.dataset.compact === "true";
  const showTitle = el.dataset.showTitle !== "false";
  const title = el.dataset.title || "Request a Free Estimate";
  const darkMode = el.dataset.darkMode === "true";
  react_dom_client__WEBPACK_IMPORTED_MODULE_4__.createRoot(el).render(/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)(_scripts_ContactForm__WEBPACK_IMPORTED_MODULE_2__["default"], {
    compact: compact,
    showTitle: showTitle,
    title: title,
    darkMode: darkMode
  }));
});

// ── Chatbot mount ─────────────────────────────────────────────
const chatbotContainer = document.getElementById('render-chatbot-here');
if (chatbotContainer) {
  react_dom_client__WEBPACK_IMPORTED_MODULE_4__.createRoot(chatbotContainer).render(/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)((react__WEBPACK_IMPORTED_MODULE_3___default().StrictMode), {
    children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)(_scripts_Chatbot__WEBPACK_IMPORTED_MODULE_5__["default"], {})
  }));
}
})();

/******/ })()
;
//# sourceMappingURL=index.js.map