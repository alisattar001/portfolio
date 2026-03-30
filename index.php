<?php
require __DIR__ . "/data.php";
require __DIR__ . "/partials/header.php";
?>

<style>
:root {
  --bg: #0b0d12;
  --bg2: #0f1320;
  --text: #f2f4f8;
  --muted: rgba(242,244,248,.72);
  --line: rgba(255,255,255,.10);
  --glass: rgba(255,255,255,.06);
  --shadow: 0 20px 60px rgba(0,0,0,.45);
  --radius: 18px;
}

/* Increased specificity to ensure it overrides the default dark variables */
html[data-theme="light"] {
  --bg: #f6f7fb;
  --bg2: #ffffff;
  --text: #0b0d12;
  --muted: rgba(11,13,18,.65);
  --line: rgba(11,13,18,.10);
  --glass: rgba(255,255,255,.75);
  --shadow: 0 24px 60px rgba(0,0,0,.12);
}

* { box-sizing: border-box; }
html { scroll-behavior: smooth; }
body {
  margin: 0;
  font-family: Inter, system-ui, -apple-system, Segoe UI, Roboto, Arial, sans-serif;
  background: radial-gradient(1200px 600px at 20% 10%, rgba(80,120,255,.18), transparent 55%),
              radial-gradient(1000px 500px at 80% 0%, rgba(255,120,120,.14), transparent 55%),
              linear-gradient(180deg, var(--bg), var(--bg2));
  color: var(--text);
  line-height: 1.45;
}

.container {
  width: min(1120px, calc(100% - 40px));
  margin: 0 auto;
}

a { color: inherit; text-decoration: none; }
img { display: block; width: 100%; height: 100%; object-fit: cover; }

.muted { color: var(--muted); }
.tiny { font-size: 12px; color: var(--muted); }
.link { text-decoration: underline; text-underline-offset: 4px; }

.glass {
  background: var(--glass);
  border: 1px solid var(--line);
  backdrop-filter: blur(14px);
  -webkit-backdrop-filter: blur(14px);
  border-radius: var(--radius);
  box-shadow: var(--shadow);
}

.nav {
  position: sticky;
  top: 0;
  z-index: 50;
  background: rgba(10,12,18,.60);
  border-bottom: 1px solid var(--line);
  backdrop-filter: blur(14px);
  -webkit-backdrop-filter: blur(14px);
}
html[data-theme="light"] .nav { background: rgba(246,247,251,.70); }

.nav-inner {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 12px 0;
  gap: 16px;
}
.brand {
  display: flex;
  align-items: center;
  gap: 10px;
  font-weight: 600;
  letter-spacing: -0.02em;
}

/* Green icon for navbar */
.brand-mark {
  width: 14px;
  height: 14px;
  border-radius: 999px;
  background-color: #34d399; /* Bright green */
  box-shadow: 0 0 10px rgba(52, 211, 153, 0.6);
  border: 1px solid rgba(255, 255, 255, 0.2);
}

.nav-links {
  display: flex;
  gap: 16px;
  font-weight: 500;
  color: var(--muted);
}
.nav-links a:hover { color: var(--text); }

.nav-actions { display: flex; gap: 10px; }

.icon-btn {
  width: 40px; height: 40px;
  border-radius: 999px;
  border: 1px solid var(--line);
  background: transparent;
  cursor: pointer;
  display: grid;
  place-items: center;
}
.icon-btn:hover { background: rgba(255,255,255,.06); }
.icon {
  width: 16px; height: 16px;
  border-radius: 999px;
  border: 2px solid var(--muted);
  position: relative;
}
.icon:after {
  content: "";
  position: absolute;
  width: 8px; height: 8px;
  right: -2px; top: 2px;
  background: var(--bg);
  border-radius: 999px;
}

/* --- CENTERED HERO SECTION --- */
.hero { padding: 78px 0 40px; }
.hero-content {
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
  max-width: 800px;
  margin: 0 auto 40px;
}

.pill {
  display: inline-flex;
  gap: 8px;
  align-items: center;
  padding: 8px 12px;
  border-radius: 999px;
  border: 1px solid var(--line);
  background: rgba(255,255,255,.04);
  color: var(--muted);
  font-weight: 600;
  font-size: 12px;
}

.hero-title {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 14px;
  margin: 18px 0 10px;
  font-size: clamp(38px, 6vw, 64px);
  letter-spacing: -0.04em;
  line-height: 1.02;
}

/* BLINKING GREEN DOT */
.status-dot {
  width: 18px;
  height: 18px;
  border-radius: 50%;
  background-color: #34d399; /* Bright green */
  box-shadow: 0 0 12px rgba(52, 211, 153, 0.8);
  animation: pulse-dot 2s infinite;
}

@keyframes pulse-dot {
  0% { box-shadow: 0 0 0 0 rgba(52, 211, 153, 0.6); }
  70% { box-shadow: 0 0 0 12px rgba(52, 211, 153, 0); }
  100% { box-shadow: 0 0 0 0 rgba(52, 211, 153, 0); }
}

.hero-sub {
  display: block;
  margin: 12px 0 16px;
  font-size: clamp(16px, 2.2vw, 20px);
  color: var(--muted);
  font-weight: 600;
  letter-spacing: -0.02em;
}
.hero-desc {
  margin: 0 auto 24px;
  color: var(--muted);
  font-size: 16px;
  max-width: 60ch;
}

.hero-actions {
  display: flex;
  gap: 12px;
  flex-wrap: wrap;
  justify-content: center;
  margin-bottom: 24px;
}

.btn {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 10px;
  padding: 12px 20px;
  border-radius: 999px;
  border: 1px solid var(--line);
  font-weight: 600;
  letter-spacing: -0.01em;
  cursor: pointer;
  user-select: none;
  font-size: 15px;
}
.btn-primary {
  background: rgba(255,255,255,.92);
  color: #0b0d12;
}
.btn-primary:hover { transform: translateY(-1px); }
.btn-ghost {
  background: rgba(255,255,255,.03);
  color: var(--text);
}
.btn-ghost:hover { background: rgba(255,255,255,.08); }
.btn.small { padding: 10px 14px; font-size: 13px; }

.meta {
  display: flex;
  gap: 16px;
  flex-wrap: wrap;
  justify-content: center;
  margin-top: 10px;
}
.meta-item {
  text-align: left;
  padding: 14px 18px;
  border-radius: 14px;
  border: 1px solid var(--line);
  background: rgba(255,255,255,.03);
  min-width: 160px;
}
.meta-k { font-size: 12px; color: var(--muted); }
.meta-v { font-weight: 700; font-size: 15px; letter-spacing: -0.02em; margin-top: 4px; }

/* CLICKABLE SCROLL BUTTON */
.hint-center {
  display: block;
  text-align: center;
  margin-top: 20px;
  color: var(--muted);
  font-weight: 600;
  text-decoration: none;
  cursor: pointer;
  transition: color 0.2s ease;
}
.hint-center:hover {
  color: var(--text);
}

.section { padding: 70px 0; }
.section-head h2 {
  margin: 0;
  font-size: 30px;
  letter-spacing: -0.03em;
}
.section-head p { margin: 10px 0 0; max-width: 74ch; }

.grid {
  margin-top: 22px;
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 16px;
}
@media (max-width: 980px) { .grid { grid-template-columns: repeat(2, 1fr);} }
@media (max-width: 640px) { .grid { grid-template-columns: 1fr;} }

.card {
  position: relative;
  border-radius: var(--radius);
  overflow: hidden;
  border: 1px solid var(--line);
  background: rgba(255,255,255,.03);
  box-shadow: var(--shadow);
  transform: translateZ(0);
}
.card-link {
  position: absolute;
  inset: 0;
  z-index: 3;
}

/* --- MEDIA SECTION: BLURRED BACKGROUND --- */
.card-media {
  position: relative;
  height: 180px;
  display: flex;
  align-items: center;
  justify-content: center;
  overflow: hidden;
  background-size: cover;
  background-position: center;
  background-color: rgba(255,255,255,.06);
}

.blur-backdrop {
  position: absolute;
  inset: -20px;
  background: inherit;
  filter: blur(15px) brightness(0.5);
  z-index: 1;
}

.card-media img {
  position: relative;
  z-index: 2;
  height: 100%;
  width: auto;
  object-fit: cover;
  border-radius: 20px;
  box-shadow: 0 10px 30px rgba(0,0,0,0.4);
}

.media-placeholder {
  width: 100%; height: 100%;
  background: linear-gradient(135deg, rgba(255,255,255,.12), rgba(255,255,255,.02));
}

.card-body { padding: 16px; }
.card-top {
  display: flex;
  align-items: flex-start;
  justify-content: space-between;
  gap: 10px;
}
.card-body h3 {
  margin: 0;
  font-size: 18px;
  letter-spacing: -0.02em;
}
.year { color: var(--muted); font-weight: 700; font-size: 13px; }

.chips { display: flex; gap: 8px; flex-wrap: wrap; margin: 10px 0 10px; }
.chip {
  font-size: 12px;
  font-weight: 700;
  color: var(--muted);
  border: 1px solid var(--line);
  border-radius: 999px;
  padding: 6px 10px;
  background: rgba(255,255,255,.03);
}

.tags { display: flex; gap: 8px; flex-wrap: wrap; margin-top: 12px; }
.tag {
  font-size: 12px;
  color: var(--muted);
  border: 1px solid var(--line);
  border-radius: 999px;
  padding: 6px 10px;
}

.cta {
  margin-top: 14px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  font-weight: 800;
  letter-spacing: -0.02em;
}
.arrow { opacity: .8; }

.panel { padding: 18px; margin-top: 18px; }

.skill-list {
  margin: 0;
  padding-left: 18px;
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 10px 18px;
}
@media (max-width: 700px) { .skill-list { grid-template-columns: 1fr; } }

/* --- BIG CENTERED CONTACT STYLES (Scaled Down 30%) --- */
.contact-centered {
  max-width: 700px;
  margin: 36px auto 0;
  padding: 46px 24px;
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 36px;
  text-align: center;
}
.contact-group {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 12px;
}
.contact-group .muted {
  font-size: 11px; /* Scaled down 30% from 16px */
  text-transform: uppercase;
  letter-spacing: 0.06em;
  font-weight: 700;
}
.contact-email {
  font-size: clamp(17px, 3.5vw, 25px); /* Scaled down 30% */
  font-weight: 800;
  letter-spacing: -0.02em;
  color: var(--text);
  text-decoration-color: rgba(255,255,255,0.2);
  transition: all 0.2s ease;
}
.contact-email:hover {
  text-decoration-color: #34d399;
  color: #34d399;
}
.contact-divider {
  width: 100%;
  height: 1px;
  background: var(--line);
}
.link-row {
  display: flex;
  gap: 14px;
  flex-wrap: wrap;
  justify-content: center;
}

/* --- HERO APP STORE BADGE --- */
.app-store-badge {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  color: var(--muted);
  transition: color 0.2s ease, transform 0.2s ease;
  margin-top: 6px;
}
.app-store-badge:hover {
  color: var(--text);
  transform: scale(1.1);
}

.footer {
  border-top: 1px solid var(--line);
  padding: 26px 0;
  background: rgba(0,0,0,.06);
}
html[data-theme="light"] .footer { background: rgba(255,255,255,.40); }
.footer-inner {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 10px;
}

.reveal {
  opacity: 0;
  transform: translateY(18px);
}
</style>

<main>

  <section class="hero" id="top">
    <div class="container">
      <div class="app-icons-row"
       style="
          display: grid;
          grid-template-columns: repeat(8, auto);
          gap: 14px;
          align-items: start; /* Changed to start so adding icons below doesn't un-align the top icons */
          margin-top: -50px;
       ">

        <?php
        // Dynamically generating exactly 8 icons matching the 'Selected Work' cards
        $header_apps = array_slice($projects, 0, 8);
        foreach ($header_apps as $index => $p):
            $icon_num = $index + 1;
            
            // Link for the main app icon
            $href = $p['slug'] === 'ctpro-editor-video-pro-mojo'
                ? 'ctproproject.php'
                : 'project.php?slug=' . urlencode($p['slug']);
        ?>
            <div style="display: flex; flex-direction: column; align-items: center;">
              
              <a href="<?= $href ?>" aria-label="<?= htmlspecialchars($p['title']) ?>">
                <img src="icons/app<?= $icon_num ?>.png" style="width:42px;height:42px;border-radius:10px;object-fit:contain;" alt="<?= htmlspecialchars($p['title']) ?> icon">
              </a>

              <?php if ($index === 0): ?>
                <a href="https://apps.apple.com/us/app/ctpro-editor-video-mojo-pro/id1364696401" target="_blank" rel="noopener" class="app-store-badge" aria-label="Download on App Store">
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" viewBox="0 0 384 512"><path d="M318.7 268.7c-.2-36.7 16.4-64.4 50-84.8-18.8-26.9-47.2-41.7-84.7-44.6-35.5-2.8-74.3 20.7-88.5 20.7-15 0-49.4-19.7-76.4-19.7C63.3 141.2 4 184.8 4 273.5q0 39.3 14.4 81.2c12.8 36.7 59 126.7 107.2 125.2 25.2-.6 43-17.9 75.8-17.9 31.8 0 48.3 17.9 76.4 17.9 48.6-.7 90.4-82.5 102.6-119.3-65.2-30.7-61.7-90-61.7-91.9zm-56.6-164.2c27.3-32.4 24.8-61.9 24-72.5-24.1 1.4-52 16.4-67.9 34.9-17.5 19.8-27.8 44.3-25.6 71.9 26.1 2 49.9-11.4 69.5-34.3z"/></svg>
                </a>
              <?php elseif ($index === 1): ?>
                <a href="https://apps.apple.com/us/app/savera-works/id6748469997" target="_blank" rel="noopener" class="app-store-badge" aria-label="Download on App Store">
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" viewBox="0 0 384 512"><path d="M318.7 268.7c-.2-36.7 16.4-64.4 50-84.8-18.8-26.9-47.2-41.7-84.7-44.6-35.5-2.8-74.3 20.7-88.5 20.7-15 0-49.4-19.7-76.4-19.7C63.3 141.2 4 184.8 4 273.5q0 39.3 14.4 81.2c12.8 36.7 59 126.7 107.2 125.2 25.2-.6 43-17.9 75.8-17.9 31.8 0 48.3 17.9 76.4 17.9 48.6-.7 90.4-82.5 102.6-119.3-65.2-30.7-61.7-90-61.7-91.9zm-56.6-164.2c27.3-32.4 24.8-61.9 24-72.5-24.1 1.4-52 16.4-67.9 34.9-17.5 19.8-27.8 44.3-25.6 71.9 26.1 2 49.9-11.4 69.5-34.3z"/></svg>
                </a>
              <?php else: ?>
                <div style="height: 20px;"></div>
              <?php endif; ?>

            </div>
        <?php endforeach; ?>

      </div>

      <div class="hero-content">
        
        <p class="pill reveal">Portfolio</p>

        <h1 class="hero-title reveal">
          <span class="status-dot"></span>
          <?= htmlspecialchars($site["name"]) ?>
        </h1>

        <span class="hero-sub reveal"><?= htmlspecialchars($site["tagline"]) ?></span>

        <p class="hero-desc reveal">
          I build high-performance iOS apps with Apple-style UX: clean UI, smooth motion, and strong engineering.
        </p>

        <div class="hero-actions reveal">
          <a class="btn btn-primary" href="#work">View Work</a>
          <a class="btn btn-ghost" href="#contact">Contact</a>
        </div>

        <div class="meta reveal">
          <div class="meta-item">
            <div class="meta-k">Based in</div>
            <div class="meta-v"><?= htmlspecialchars($site["location"]) ?></div>
          </div>
          <div class="meta-item">
            <div class="meta-k">Focus</div>
            <div class="meta-v">Video • Streaming • Performance</div>
          </div>
        </div>
      </div>

      <a href="#work" class="hint-center reveal">Scroll ↓</a>
      
    </div>
  </section>

  <section class="section" id="work">
    <div class="container">
      <div class="section-head">
        <h2 class="reveal">Selected Work</h2>
        <p class="reveal muted">Apps and systems I’ve built and shipped.</p>
      </div>

      <div class="grid">
        <?php foreach ($projects as $p): ?>
          <article class="card reveal">
      
            <a class="card-link"
               href="<?= $p['slug'] === 'ctpro-editor-video-pro-mojo'
                 ? 'ctproproject.php'
                 : 'project.php?slug=' . urlencode($p['slug']) ?>"
               aria-label="<?= htmlspecialchars($p['title']) ?>">
            </a>

            <div class="card-media" <?= !empty($p["image"]) ? 'style="background-image: url(\'' . htmlspecialchars($p["image"]) . '\');"' : '' ?>>
              <?php if (!empty($p["image"])): ?>
                <div class="blur-backdrop"></div>
                <img src="<?= htmlspecialchars($p["image"]) ?>" alt="<?= htmlspecialchars($p["title"]) ?> screenshot" loading="lazy"/>
              <?php else: ?>
                <div class="media-placeholder"></div>
              <?php endif; ?>
            </div>

            <div class="card-body">
              <div class="card-top">
                <h3><?= htmlspecialchars($p["title"]) ?></h3>
                <div class="year"><?= htmlspecialchars($p["year"]) ?></div>
              </div>

              <div class="chips">
                <?php foreach ($p["platforms"] as $pl): ?>
                  <span class="chip"><?= htmlspecialchars($pl) ?></span>
                <?php endforeach; ?>
              </div>

              <p class="muted"><?= htmlspecialchars($p["summary"]) ?></p>

              <div class="tags">
                <?php foreach ($p["skills"] as $t): ?>
                  <span class="tag"><?= htmlspecialchars($t) ?></span>
                <?php endforeach; ?>
              </div>

              <div class="cta">
                <span>Open</span>
                <span class="arrow">→</span>
              </div>
            </div>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="section" id="skills">
    <div class="container">
      <div class="section-head">
        <h2 class="reveal">Capabilities</h2>
        <p class="reveal muted">Engineering depth + product polish.</p>
      </div>

      <div class="glass panel reveal">
        <ul class="skill-list">
          <?php foreach ($skills as $s): ?>
            <li><?= htmlspecialchars($s) ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </section>

  <section class="section" id="contact">
    <div class="container">
      <div class="section-head" style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <h2 class="reveal" style="font-size: 28px;">Contact</h2>
        <p class="reveal muted" style="font-size: 13px; margin-top: 10px;">Let’s build something clean, fast, and beautiful.</p>
      </div>

      <div class="glass panel reveal contact-centered">
        
        <div class="contact-group">
          <div class="muted">Email</div>
          <a class="link contact-email" href="mailto:alisattarmcs001@gmail.com">
            alisattarmcs001@gmail.com
          </a>
        </div>

        <div class="contact-divider"></div>

        <div class="contact-group">
          <div class="muted">Links</div>
          <div class="link-row">
            <?php foreach ($site["links"] as $l): ?>
              <a class="btn btn-ghost" href="<?= htmlspecialchars($l["href"]) ?>" target="_blank" rel="noopener" style="font-size: 11px; padding: 10px 18px;">
                <?= htmlspecialchars($l["label"]) ?>
              </a>
            <?php endforeach; ?>
          </div>
        </div>

      </div>
    </div>
  </section>

</main>

<script>
(() => {
  const root = document.documentElement;
  // Fallback selector included in case the header file doesn't use the exact ID
  const themeBtn = document.getElementById("themeBtn") || document.querySelector(".icon-btn");

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
})();
</script>

<?php require __DIR__ . "/partials/footer.php"; ?>
