(() => {
  const root = document.documentElement;
  const themeBtn = document.getElementById("themeBtn");

  const saved = localStorage.getItem("theme");
  if (saved) root.setAttribute("data-theme", saved);

  themeBtn?.addEventListener("click", () => {
    const cur = root.getAttribute("data-theme") || "dark";
    const next = cur === "dark" ? "light" : "dark";
    root.setAttribute("data-theme", next);
    localStorage.setItem("theme", next);
  });

  if (typeof gsap === "undefined") return;
  gsap.registerPlugin(ScrollTrigger);

  gsap.to(".reveal", {
    opacity: 1,
    y: 0,
    duration: 0.9,
    ease: "power3.out",
    stagger: 0.08
  });

  document.querySelectorAll(".card, .panel, .section-head h2, .section-head p").forEach((el) => {
    gsap.to(el, {
      opacity: 1,
      y: 0,
      duration: 0.8,
      ease: "power3.out",
      scrollTrigger: { trigger: el, start: "top 85%" }
    });
  });

  document.querySelectorAll(".card").forEach((card) => {
    card.addEventListener("mousemove", (e) => {
      const r = card.getBoundingClientRect();
      const x = (e.clientX - r.left) / r.width - 0.5;
      const y = (e.clientY - r.top) / r.height - 0.5;
      gsap.to(card, { rotateY: x * 4, rotateX: -y * 3, duration: 0.35, ease: "power2.out" });
    });
    card.addEventListener("mouseleave", () => {
      gsap.to(card, { rotateY: 0, rotateX: 0, duration: 0.5, ease: "power3.out" });
    });
  });

  const orb = document.querySelector(".orb");
  if (orb) {
    gsap.to(orb, {
      y: -40,
      scrollTrigger: {
        trigger: ".hero",
        start: "top top",
        end: "bottom top",
        scrub: true
      }
    });
  }
})();