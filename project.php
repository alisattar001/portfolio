<?php
require __DIR__ . "/data.php";

$slug = $_GET["slug"] ?? "";
$project = null;

foreach ($projects as $p) {
  if ($p["slug"] === $slug) {
    $project = $p;
    break;
  }
}

if (!$project) {
  http_response_code(404);
}

require __DIR__ . "/partials/header.php";
?>

<main>

<style>
/* =====================================================
   OVERALL COMPACT VIEW — ENTIRE PAGE
   ===================================================== */

.hero{ padding-top:18px !important; padding-bottom:12px !important; }

.project-hero{ gap:22px !important; }

.hero-title{
  font-size:42px !important;
  line-height:1.05 !important;
  margin:8px 0 6px !important;
}

.hero-sub{
  font-size:14px !important;
  opacity:.75;
}

.hero-desc{
  font-size:14px !important;
  line-height:1.45 !important;
  max-width:520px;
}

.pill{ transform:scale(.92); transform-origin:left; }

.chips{ gap:8px !important; }
.chip{
  font-size:12px !important;
  padding:6px 10px !important;
}

.hero-actions .btn{
  padding:10px 14px !important;
  font-size:13px !important;
}

/* =====================================================
   HERO IMAGE
   ===================================================== */

.project-media{
  background: transparent !important;
  box-shadow: none !important;
  display:flex;
  justify-content:center;
  align-items:center;
  min-height:220px;
}

.project-media img{
  width:150px;
  height:150px;
  object-fit:cover;
  border-radius:18px;
  border:1px solid rgba(255,255,255,0.25);
  box-shadow:0 10px 28px rgba(0,0,0,0.20);
}

/* =====================================================
   GENERAL
   ===================================================== */

.section{
  padding-top:14px !important;
  padding-bottom:14px !important;
}

.glass.panel{
  padding:16px !important;
}

.glass.panel h2{
  font-size:18px !important;
  margin-bottom:8px !important;
}

.muted{
  font-size:13px !important;
}

.details-grid{
  gap:14px !important;
  margin-top:14px !important;
}

/* =====================================================
   IPHONE X MOCKUP SCREENS — GALLERY
   ===================================================== */

.phone-gallery{
  display:flex;
  flex-wrap:wrap;
  gap:16px; /* Default gap */
  padding-top: 10px; /* Space for the scaled items */
}

/* Outer iPhone X Frame (Default for ctpro) */
.phone{
  flex: 0 0 calc((100% - (16px * 4)) / 5); /* 5 per row */
  aspect-ratio: 9 / 19.5; /* Standard iPhone X aspect ratio */
  position: relative;
  
  /* Bezel styling */
  background: #111; /* Black bezel */
  padding: 8px; /* Bezel thickness */
  border-radius: 32px; /* Outer curvature */
  box-shadow:
    inset 0 0 4px rgba(255,255,255,0.3), /* Edge highlight */
    0 10px 28px rgba(0,0,0,0.4); /* Drop shadow */
    
  display: flex;
  flex-direction: column;
  transition: transform 0.2s ease;
}

/* Wide format for standard projects */
.phone.phone-wide {
  aspect-ratio: 10.8 / 19.5;
  flex: 0 0 calc((100% - (16px * 3)) / 4); /* 4 per row */
}

/* Savera Works format (Taller and wider aspect ratio + 5% Scale) */
.phone.phone-savera {
  aspect-ratio: 9.45 / 20.475;
  flex: 0 0 calc((100% - (16px * 3)) / 4); /* 4 per row */
  transform: scale(1.05); /* Physically magnifies it by 5% */
  transform-origin: top center;
  margin-bottom: 20px; /* Adjust spacing for the scale */
}

/* Health Appointments format (Exactly 640x960 Ratio + 5% Scale) */
.phone.phone-health {
  aspect-ratio: 640 / 960; /* Perfectly matches the native image size */
  flex: 0 0 calc((100% - (16px * 2)) / 3); /* 3 per row so they aren't squeezed */
  transform: scale(1.05); /* Physically magnifies it by 5% */
  transform-origin: top center;
  margin-bottom: 20px; /* Adjust spacing for the scale */
}

.phone:hover {
  transform: translateY(-4px) scale(1.06); /* Keeps hover effect working with scale */
}

/* The Notch */
.notch {
  position: absolute;
  top: 8px; /* Match the padding/bezel */
  left: 50%;
  transform: translateX(-50%);
  width: 50%;
  height: 20px;
  background: #111;
  border-bottom-left-radius: 12px;
  border-bottom-right-radius: 12px;
  z-index: 5;
}

/* Inner Screen Area */
.phone-screen {
  width: 100%;
  height: 100%;
  border-radius: 24px; /* Inner curvature */
  overflow: hidden;
  position: relative;
  background: #000;
}

.phone-screen img{
  width:100%;
  height:100%;
  object-fit:cover;
  display:block;
}

/* tablet */
@media(max-width:1024px){
  .phone, .phone.phone-wide, .phone.phone-health, .phone.phone-savera {
    flex: 0 0 calc((100% - (16px * 2)) / 3);
  }
}

/* mobile */
@media(max-width:600px){
  .phone, .phone.phone-wide, .phone.phone-health, .phone.phone-savera {
    flex: 0 0 calc((100% - 16px) / 2);
  }
}
</style>

<section class="hero">
  <div class="container">

<?php if (!$project): ?>

  <div class="glass panel">
    <h1>Project not found</h1>
    <a class="btn btn-primary" href="index.php#work">Back</a>
  </div>

<?php else: ?>

  <a class="muted link" href="index.php#work">← Back to Selected Work</a>

  <div class="project-hero">

    <div class="project-left">

      <p class="pill"><?= htmlspecialchars($project["company"] ?? "") ?></p>

      <h1 class="hero-title">
        <?= htmlspecialchars($project["title"]) ?>
        <span class="hero-sub">
          <?= htmlspecialchars(($project["start"] ?? "") . " — " . ($project["end"] ?? "")) ?>
        </span>
      </h1>

      <p class="hero-desc">
        <?= htmlspecialchars($project["summary"] ?? "") ?>
      </p>

      <div class="hero-actions">
        <a class="btn btn-primary" href="#details">Details</a>
        <?php if (!empty($project["links"][0]["href"])): ?>
          <a class="btn btn-ghost" href="<?= htmlspecialchars($project["links"][0]["href"]) ?>" target="_blank">LinkedIn</a>
        <?php endif; ?>
      </div>

    </div>

    <div class="project-right">
      <div class="project-media">
        <?php if (!empty($project["image"])): ?>
          <img src="<?= htmlspecialchars($project["image"]) ?>" alt="">
        <?php endif; ?>
      </div>
    </div>

  </div>

<?php endif; ?>

  </div>
</section>

<?php if ($project): ?>
<section class="section" id="details">
  <div class="container">

    <div class="glass panel reveal" style="margin-top:-20px;">
      <h2 style="margin-top:0;">Overview</h2>
      <p class="muted" style="margin-bottom:0;">
        <?= htmlspecialchars($project["description"] ?? "") ?>
      </p>
    </div>

    <div class="glass panel reveal" style="margin-top:12px">
      <h2 class="screens-title">Screens</h2>
    
      <?php
        // Identify specific projects flexibly (checking both slug AND title)
        $isHomeyMeals = (stripos($slug, 'homey') !== false || stripos($project['title'] ?? '', 'HomeyMeals') !== false);
        $isSaveraWork = (stripos($slug, 'savera') !== false || stripos($project['title'] ?? '', 'Savera') !== false);
        $isHealthApp  = (stripos($slug, 'health') !== false || stripos($project['title'] ?? '', 'Health') !== false);
      
        // Logic to determine the correct screen aspect ratio based on the project
        if ($isSaveraWork) {
            $phoneClass = "phone phone-savera"; // Format for Savera Works
        } elseif ($slug === 'ctpro') {
            $phoneClass = "phone"; // Default 9:19.5
        } elseif ($isHealthApp) {
            $phoneClass = "phone phone-health"; // Exact 640x960 format for Health App
        } else {
            $phoneClass = "phone phone-wide"; // Wide format for others
        }

        // Hide the notch if it's either HomeyMeals or Savera Works
        $showNotch = !($isHomeyMeals || $isSaveraWork);
      ?>

      <div class="phone-gallery">
        <?php foreach (($project["screens"] ?? []) as $src): ?>
          <a class="<?= $phoneClass ?>" href="<?= htmlspecialchars($src) ?>" target="_blank" rel="noopener">
            <?php if ($showNotch): ?>
              <div class="notch"></div>
            <?php endif; ?>
            <div class="phone-screen">
              <img src="<?= htmlspecialchars($src) ?>" alt="">
            </div>
          </a>
        <?php endforeach; ?>
      </div>
    </div>

    <div class="details-grid">
      <div class="glass panel reveal">
        <h2>Key Features</h2>
        <ul class="bullet">
          <?php foreach (($project["highlights"] ?? []) as $h): ?>
            <li><?= htmlspecialchars($h) ?></li>
          <?php endforeach; ?>
        </ul>
      </div>

      <div class="glass panel reveal">
        <h2>Skills / Tech</h2>
        <div class="tags">
          <?php foreach (($project["skills"] ?? []) as $t): ?>
            <span class="tag"><?= htmlspecialchars($t) ?></span>
          <?php endforeach; ?>
        </div>
      </div>
    </div>

  </div>
</section>
<?php endif; ?>

</main>

<?php require __DIR__ . "/partials/footer.php"; ?>
