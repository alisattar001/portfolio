<?php
require __DIR__ . "/data.php";
require __DIR__ . "/partials/header.php";

/**
 * CTpro modules
 * - orientation: "landscape" or "portrait"
 */
$ctproModules = [
  "overview" => [
    "label" => "Overview",
    "icon" => "icons/ctpro/app1.png",
    "overview" => "CTPro delivers a broadcast-grade mobile workflow encompassing camera capture, timeline editing, asset importing, and live streaming. As a core developer, I built entirely new features from scratch while maintaining legacy codebases across both Objective-C and Swift. A major part of my role involved tackling real-world challenges, such as resolving critical memory leaks during 4K rendering and fixing complex real-time audio meter synchronization bugs.",
    "orientation" => "portrait",
    "screens" => [
      "assets/screens/ctpro/overview/1.png",
      "assets/screens/ctpro/overview/2.png",
      "assets/screens/ctpro/overview/3.png",
      "assets/screens/ctpro/overview/4.png",
      "assets/screens/ctpro/overview/5.png",
      "assets/screens/ctpro/overview/6.png",
      "assets/screens/ctpro/overview/7.png",
      "assets/screens/ctpro/overview/8.png",
      "assets/screens/ctpro/overview/9.png",
      "assets/screens/ctpro/overview/10.png",
      "assets/screens/ctpro/overview/11.png",
      "assets/screens/ctpro/overview/12.png",
      "assets/screens/ctpro/overview/13.png",
    ],
    "highlights" => [
      "End-to-end workflow: shoot → edit → import → publish / live",
      "Built new features and maintained legacy architecture in Swift and Objective-C",
      "Resolved severe memory management bugs to stabilize 4K video handling",
      "Fixed real-time UI/audio sync issues, specifically in the Soundmix audio meters"
    ],
    "skills" => [
      "iOS", "Swift", "Objective-C", "AVFoundation", "Instruments (Memory Debugging)"
    ],
  ],

  "ctcamera" => [
    "label" => "CTCamera",
    "icon" => "icons/ctpro/app2.png",
    "overview" => "Engineered a custom, broadcast-grade camera interface from the ground up. The primary challenge was rendering real-time visual telemetry (scopes and focus assists) over a 4K video feed without causing dropped frames, latency, or excessive battery drain.",
    "orientation" => "landscape",
    "screens" => [
      "assets/screens/ctpro/ctcamera/1.png",
      "assets/screens/ctpro/ctcamera/2.png",
      "assets/screens/ctpro/ctcamera/3.png",
      "assets/screens/ctpro/ctcamera/4.png",
      "assets/screens/ctpro/ctcamera/5.png",
      "assets/screens/ctpro/ctcamera/6.png",
      "assets/screens/ctpro/ctcamera/7.png",
      "assets/screens/ctpro/ctcamera/8.png",
      "assets/screens/ctpro/ctcamera/9.png",
      "assets/screens/ctpro/ctcamera/10.png",
      "assets/screens/ctpro/ctcamera/11.png",
      "assets/screens/ctpro/ctcamera/12.png",
      "assets/screens/ctpro/ctcamera/13.png",
    ],
    "highlights" => [
      "Engineered tactile manual controls for ISO, Shutter Speed, and Kelvin White Balance.",
      "Implemented hardware-accelerated monitoring assists (Focus Peaking & Zebras) for precision shooting.",
      "Integrated real-time Luma Waveforms and Histograms for accurate exposure monitoring.",
      "Built a live stereo audio monitoring system with dB scales and clipping alerts.",
      "Developed seamless hardware toggles for optical/software stabilization and robust media handling."
    ],
    "skills" => [
      "AVCaptureSession", "Metal (GPU Processing)", "CoreAudio", "Real-time Telemetry"
    ],
  ],

  "edit_timeline" => [
    "label" => "Edit Timeline",
    "icon" => "icons/ctpro/app3.png",
    "overview" => "A robust mobile-first NLE timeline supporting multiple independent layers for video, audio, and titles. Engineered for precise clip manipulation including trimming, splitting, and advanced cropping directly on the timeline.",
    "orientation" => "portrait",
    "screens" => [
      "assets/screens/ctpro/edit/1.png",
      "assets/screens/ctpro/edit/2.png",
      "assets/screens/ctpro/edit/3.png",
      "assets/screens/ctpro/edit/4.png",
      "assets/screens/ctpro/edit/5.png",
      "assets/screens/ctpro/edit/6.png",
      "assets/screens/ctpro/edit/7.png",
      "assets/screens/ctpro/edit/8.png",
      "assets/screens/ctpro/edit/9.png",
      "assets/screens/ctpro/edit/10.png",
    ],
    "highlights" => [
      "Multi-track timeline editing with smooth, touch-first interactions",
      "Advanced clip manipulation: Precision In/Out points, Split, Cut, Delete, and Crop tools",
      "Comprehensive color correction with visual scopes and dynamic transitions",
      "Seamless integration of overlays and audio tracks"
    ],
    "skills" => [
      "AVMutableComposition", "Custom Compositor", "CoreImage", "UIGestureRecognizer"
    ],
  ],

  "import_clip" => [
    "label" => "Import Clip",
    "icon" => "icons/ctpro/app10.png",
    "overview" => "A seamless media fetching tool allowing users to import video clips directly from the iOS Files app, their Photo Library, or effortlessly pull media from previous projects.",
    "orientation" => "portrait",
    "screens" => [
      "assets/screens/ctpro/import_clip/1.png",
      "assets/screens/ctpro/import_clip/2.png",
      "assets/screens/ctpro/import_clip/3.png",
      "assets/screens/ctpro/import_clip/4.png",
      "assets/screens/ctpro/import_clip/5.png",
      "assets/screens/ctpro/import_clip/6.png",
      "assets/screens/ctpro/import_clip/7.png",
      "assets/screens/ctpro/import_clip/8.png",
      "assets/screens/ctpro/import_clip/9.png",
      "assets/screens/ctpro/import_clip/10.png",
    ],
    "highlights" => [
      "Direct integration with the native iOS Photo Library",
      "Browse and import media from iCloud and local storage via the Files app",
      "Reuse and extract video clips from previously saved CTpro projects"
    ],
    "skills" => [
      "PHPhotoLibrary", "UIDocumentPickerViewController", "Asset Management"
    ],
  ],

  "effects" => [
    "label" => "FxEffect",
    "icon" => "icons/ctpro/app11.png",
    "overview" => "An advanced rendering module that allows users to add professional visual effects by seamlessly overlaying alpha-channel MP4 videos directly onto their project timeline.",
    "orientation" => "portrait",
    "screens" => [
      "assets/screens/ctpro/effects/1.png",
      "assets/screens/ctpro/effects/2.png",
      "assets/screens/ctpro/effects/3.png",
      "assets/screens/ctpro/effects/4.png",
      "assets/screens/ctpro/effects/5.png",
      "assets/screens/ctpro/effects/6.png",
      "assets/screens/ctpro/effects/7.png",
      "assets/screens/ctpro/effects/8.png",
      "assets/screens/ctpro/effects/9.png",
      "assets/screens/ctpro/effects/10.png",
      "assets/screens/ctpro/effects/11.png",
      "assets/screens/ctpro/effects/12.png",
      "assets/screens/ctpro/effects/13.png",
    ],
    "highlights" => [
      "Full support for importing and rendering alpha-channel MP4 videos",
      "Real-time composition of visual effects over main video tracks",
      "Dynamic opacity and blending controls"
    ],
    "skills" => [
      "Metal", "Alpha Compositing", "AVVideoCompositionCoreAnimationTool"
    ],
  ],

  "overlays" => [
    "label" => "Overlays",
    "icon" => "icons/ctpro/app4.png",
    "overview" => "A versatile titling and graphics system tailored for broadcast journalism. Users can add customizable lower thirds, live text, and image overlays seamlessly over their video tracks.",
    "orientation" => "portrait",
    "screens" => [
      "assets/screens/ctpro/overlays/1.png",
      "assets/screens/ctpro/overlays/2.png",
      "assets/screens/ctpro/overlays/3.png",
      "assets/screens/ctpro/overlays/4.png",
      "assets/screens/ctpro/overlays/5.png",
      "assets/screens/ctpro/overlays/6.png",
      "assets/screens/ctpro/overlays/7.png",
      "assets/screens/ctpro/overlays/8.png",
      "assets/screens/ctpro/overlays/9.png",
      "assets/screens/ctpro/overlays/10.png",
    ],
    "highlights" => [
      "Customizable titles and lower thirds with detailed typography and color control",
      "Smart duration adjustment algorithms to automatically match title length to the project",
      "Support for imported graphical overlays and presets"
    ],
    "skills" => [
      "CoreText", "CoreGraphics", "UIKit", "Swift"
    ],
  ],

  "soundmix" => [
    "label" => "Soundmix",
    "icon" => "icons/ctpro/app5.png",
    "overview" => "A dedicated audio mixing interface allowing granular control over multiple audio tracks. I successfully debugged and refactored the legacy Objective-C audio meters to ensure perfect visual synchronization with playback.",
    "orientation" => "portrait",
    "screens" => [
      "assets/screens/ctpro/soundmix/1.png",
      "assets/screens/ctpro/soundmix/2.png",
      "assets/screens/ctpro/soundmix/3.png",
      "assets/screens/ctpro/soundmix/4.png",
    ],
    "highlights" => [
      "Integrated Voiceover recording directly to the timeline with Mark In/Out points",
      "Advanced audio keyframing (start/end ramp durations, peak amplitude control)",
      "Fixed critical legacy bugs involving audio meter UI synchronization in Objective-C",
      "Audio overlap controls and visual waveform generation"
    ],
    "skills" => [
      "CoreAudio", "AVAudioEngine", "Objective-C", "Audio Ducking"
    ],
  ],

  "compile" => [
    "label" => "Compile & Export",
    "icon" => "icons/ctpro/app6.png",
    "overview" => "The final step in the mobile journalism workflow. I engineered high-speed video compilation and professional NLE handoff capabilities to bridge mobile and desktop environments.",
    "orientation" => "portrait",
    "screens" => [
      "assets/screens/ctpro/compile/1.png",
      "assets/screens/ctpro/compile/2.png",
      "assets/screens/ctpro/compile/3.png",
      "assets/screens/ctpro/compile/4.png",
      "assets/screens/ctpro/compile/5.png",
      "assets/screens/ctpro/compile/6.png",
    ],
    "highlights" => [
      "High-quality video export and rendering with progress tracking",
      "Direct social and cloud sharing to platforms like YouTube, Facebook, and custom FTPs",
      "Export project timelines directly to Final Cut Pro X and Adobe Premiere Pro (XML handoff)"
    ],
    "skills" => [
      "AVAssetExportSession", "XML Generation", "Background Tasks", "REST Integration"
    ],
  ],

  "livestream" => [
    "label" => "Live Stream",
    "icon" => "icons/ctpro/app8.png",
    "overview" => "A professional-grade live broadcasting module integrating standard streaming protocols. It empowers users to go live on the spot with real-time broadcast controls and media insertion.",
    "orientation" => "landscape",
    "screens" => [
      "assets/screens/ctpro/livestream/1.png",
      "assets/screens/ctpro/livestream/2.png",
      "assets/screens/ctpro/livestream/3.png",
      "assets/screens/ctpro/livestream/4.png",
      "assets/screens/ctpro/livestream/5.png",
      "assets/screens/ctpro/livestream/6.png",
    ],
    "highlights" => [
      "Support for low-latency broadcasting via RTMP and SRT protocols",
      "Live camera broadcasting with custom media integration, allowing you to insert pre-recorded video (B-roll) directly into the stream",
      "Real-time tactical camera controls including active zoom and focus adjustments while live"
    ],
    "skills" => [
      "RTMP / SRT Protocols", "VideoToolbox", "Network Sockets", "Live AV Routing"
    ],
  ],

  "import_assets" => [
    "label" => "Import Assets",
    "icon" => "icons/ctpro/app9.png",
    "overview" => "An extensive file management system built to handle heavy video files across various local and cloud storage providers, ensuring users can gather media from anywhere.",
    "orientation" => "portrait",
    "screens" => [
      "assets/screens/ctpro/import/1.png",
      "assets/screens/ctpro/import/2.png",
      "assets/screens/ctpro/import/3.png",
      "assets/screens/ctpro/import/4.png",
      "assets/screens/ctpro/import/5.png",
      "assets/screens/ctpro/import/6.png",
    ],
    "highlights" => [
      "Seamless integration with local device storage (Files app) and Dropbox",
      "Hardware integration for external iXpand drives via External Accessory framework",
      "Direct FTP/network connections for fetching from enterprise media servers",
      "Dedicated asset management for organizing music, overlays, and raw footage"
    ],
    "skills" => [
      "FileManager", "NetworkExtensions", "ExternalAccessory", "Cloud APIs"
    ],
  ],

  "backup_restore" => [
    "label" => "Backup & Restore",
    "icon" => "icons/ctpro/app7.png",
    "overview" => "A robust project state management system that ensures no work is ever lost. Users can save complex multi-track projects, back up all associated assets, and seamlessly load them back into the timeline at a later date.",
    "orientation" => "portrait",
    "screens" => [
      "assets/screens/ctpro/backup/1.png",
      "assets/screens/ctpro/backup/2.png",
      "assets/screens/ctpro/backup/3.png",
      "assets/screens/ctpro/backup/4.png",
    ],
    "highlights" => [
      "Deep state serialization for saving complete editing timelines and configurations",
      "Reliable project loading mechanisms to restore work sessions instantly",
      "Data integrity checks to prevent corruption during the backup process"
    ],
    "skills" => [
      "JSON Serialization", "FileManager", "Data Archiving", "CoreData"
    ],
  ],

  // --- NEW TUTORIALS ROW ---
  "tutorials" => [
    "label" => "Tutorials",
    // Data URI for a YouTube icon so it loads instantly without needing a local image file
    "icon" => "data:image/svg+xml;charset=UTF-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%23ff0000'%3E%3Cpath d='M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z'/%3E%3C/svg%3E",
    "overview" => "Learn how to master CTPro with comprehensive video guides. Click the links below to watch the complete Edit and Mix tutorials directly on YouTube.",
    "orientation" => "landscape",
    "screens" => [], // Empty screens
    "tutorials" => [
      [
        "label" => "Edit Tutorial",
        "url" => "https://youtube.com/playlist?list=PLyTcwA_WkuPcck0KiJakYvHdrUPvcyXvo&si=0bbgUvDQj_1QU2Fp"
      ],
      [
        "label" => "Mix Tutorial",
        "url" => "https://youtube.com/playlist?list=PLyTcwA_WkuPfz4cnRiBNua-OWBdZjwfBv&si=lSBY1cTYhINPbTsz"
      ]
    ],
    "highlights" => [
      "Complete walkthrough of the editing timeline, cutting, and trimming.",
      "Deep dive into the Soundmix module, keyframing, and advanced audio control."
    ],
    "skills" => [
      "Video Editing Workflow", "Audio Mixing", "Application Training"
    ]
  ]
];

// initial module (only for first render)
$moduleKey = $_GET["module"] ?? "overview";
if (!isset($ctproModules[$moduleKey])) $moduleKey = "overview";
$module = $ctproModules[$moduleKey];
?>

<main>

<section class="hero">
  <div class="container">
    <a class="muted link" href="index.php#work">← Back to Selected Work</a>

    <div class="project-hero">
      <div class="project-left">
        <p class="pill">Intellyct</p>

        <h1 class="hero-title">
          CTpro: Editor Video Pro Mojo
          <span class="hero-sub">Jan 2019 — Present</span>
        </h1>

        <p class="hero-desc">
          Shoot → Edit → Go Live in one app. TV-grade workflow on iPhone.
        </p>

        <div class="hero-actions">
          <a class="btn btn-primary" href="#details">Details</a>
          <a class="btn btn-ghost" href="index.php#contact">Contact</a>
        </div>
      </div>

      <div class="project-right">
        <div class="project-media">
          <img src="assets/img/ctpro.png" alt="CTpro">
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section" id="details">
  <div class="container">

    <div class="glass panel reveal" style="margin-top:-20px;">
      <div class="ctpro-modules" id="ctproModules">
        <?php foreach ($ctproModules as $key => $m): ?>
          <button type="button"
                  class="ctpro-module <?= $key === $moduleKey ? "is-active" : "" ?>"
                  data-module="<?= htmlspecialchars($key) ?>"
                  aria-label="<?= htmlspecialchars($m["label"]) ?>">
            <img src="<?= htmlspecialchars($m["icon"]) ?>" alt="<?= htmlspecialchars($m["label"]) ?>">
            <span><?= htmlspecialchars($m["label"]) ?></span>
          </button>
        <?php endforeach; ?>
      </div>
    </div>

    <div class="glass panel reveal" style="margin-top:12px;">
      <h2 id="ctModuleTitle" style="margin-top:0;">
        <?= htmlspecialchars($module["label"]) ?> — Overview
      </h2>
      <p class="muted" id="ctOverviewText" style="margin-bottom:0;">
        <?= htmlspecialchars($module["overview"]) ?>
      </p>
    </div>

    <div class="glass panel reveal" style="margin-top:12px; background: rgba(0, 15, 35, 0.4);">
      <h2 class="screens-title" id="ctScreensTitle">Screens</h2>

      <?php
        $orientationClass = ($module["orientation"] ?? "portrait") === "landscape"
          ? "gallery-landscape"
          : "gallery-portrait";
      ?>

      <div class="ct-gallery <?= $orientationClass ?>" id="ctGallery">
        </div>
    </div>

    <div class="details-grid">

      <div class="glass panel reveal">
        <h2>Key Features</h2>
        <ul class="bullet" id="ctHighlights">
          </ul>
      </div>

      <div class="glass panel reveal">
        <h2>Skills / Tech</h2>
        <div class="tags" id="ctSkills">
          </div>
      </div>

    </div>

  </div>
</section>

</main>

<style>
/* =====================================================
   MATCH MAIN PROJECT STYLE
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

.hero-actions .btn{
  padding:10px 14px !important;
  font-size:13px !important;
}

/* hero image same */
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

/* section + panels */
.section{ padding-top:14px !important; padding-bottom:14px !important; }
.glass.panel{ padding:16px !important; }
.glass.panel h2{ font-size:18px !important; margin-bottom:8px !important; }
.muted{ font-size:13px !important; }

/* details grid spacing like main */
.details-grid{
  gap:14px !important;
  margin-top:14px !important;
}

/* =====================================================
   Module row
   ===================================================== */
.ctpro-modules{
  display:flex;
  gap:8px;
  flex-wrap:wrap;
  align-items:center;
}
.ctpro-module{
  appearance:none;
  border:1px solid var(--line);
  background: rgba(255,255,255,.03);
  cursor:pointer;

  display:flex;
  align-items:center;
  gap:10px;

  padding:6px 10px;
  border-radius:14px;

  transition: transform .15s ease, background .15s ease, border-color .15s ease, box-shadow .15s ease;
  text-align:left;
  color: inherit;
}
.ctpro-module img{
  width:32px;
  height:32px;
  border-radius:10px;
  object-fit:contain;
  display:block;
}
.ctpro-module span{
  font-weight:700;
  color: var(--muted);
  font-size:12px;
}
.ctpro-module:hover{
  transform: translateY(-2px);
  background: rgba(255,255,255,.06);
}

/* Apple-like selected */
.ctpro-module.is-active{
  background:
    linear-gradient(
      180deg,
      rgba(255,255,255,0.45) 0%,
      rgba(235,235,235,0.35) 45%,
      rgba(210,210,210,0.28) 100%
    ),
    rgba(255,235,240,0.45);

  border-color: rgba(255,255,255,0.38);

  box-shadow:
    0 14px 30px rgba(0,0,0,0.18),
    0 0 0 1px rgba(255,255,255,0.28) inset;

  transform: translateY(-1px);
}

.ctpro-module.is-active span{
  color: var(--text);
}

/* =====================================================
   iPhone X Style Mockup Gallery
   ===================================================== */
.ct-gallery{
  display:flex;
  flex-wrap:wrap;
  gap: 20px;
  margin-top:16px;
  justify-content: center;
}

/* Device Body (Bezel & Border) */
.ct-shot{
  position: relative;
  display: block;
  background-color: #000;
  border-radius: 36px;
  
  border: 6px solid #1a1a1c;
  box-shadow:
    0 0 0 1px #444,
    0 15px 35px rgba(0,0,0,0.5);
    
  overflow: hidden;
  transition: transform 0.2s ease;
}

.ct-shot:hover {
  transform: translateY(-5px);
}

.ct-shot img{
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
}

.iphone-notch {
  position: absolute;
  top: 0;
  left: 50%;
  transform: translateX(-50%);
  width: 40%;
  height: 14px;
  background-color: #1a1a1c;
  border-bottom-left-radius: 10px;
  border-bottom-right-radius: 10px;
  z-index: 10;
}

.gallery-portrait .ct-shot{
  flex: 0 0 calc((100% - (20px * 4)) / 5);
  aspect-ratio: 9 / 19.5;
}

.gallery-landscape .ct-shot{
  flex: 0 0 calc((100% - (20px * 2)) / 3);
  aspect-ratio: 19.5 / 9;
}

.gallery-landscape .ct-shot .iphone-notch {
  top: 50%;
  left: 0;
  transform: translateY(-50%);
  width: 14px;
  height: 40%;
  border-bottom-left-radius: 0;
  border-top-left-radius: 0;
  border-top-right-radius: 10px;
  border-bottom-right-radius: 10px;
}

@media(max-width:1200px){
  .gallery-portrait .ct-shot{ flex: 0 0 calc((100% - (20px * 3)) / 4); }
}
@media(max-width:1024px){
  .gallery-portrait .ct-shot{ flex: 0 0 calc((100% - (20px * 2)) / 3); }
  .gallery-landscape .ct-shot{ flex: 0 0 calc((100% - 20px) / 2); }
}
@media(max-width:768px){
  .gallery-portrait .ct-shot{ flex: 0 0 calc((100% - 20px) / 2); }
  .gallery-landscape .ct-shot{ flex: 0 0 100%; }
}
@media(max-width:480px){
  .gallery-portrait .ct-shot{ flex: 0 0 100%; max-width: 320px; margin: 0 auto; }
}
</style>

<script>
  const CT_MODULES = <?= json_encode($ctproModules, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) ?>;
  let currentKey = <?= json_encode($moduleKey) ?>;

  const titleEl = document.getElementById("ctModuleTitle");
  const overviewEl = document.getElementById("ctOverviewText");
  const galleryEl = document.getElementById("ctGallery");
  const buttons = document.querySelectorAll(".ctpro-module");
  const screensTitleEl = document.getElementById("ctScreensTitle");

  const highlightsEl = document.getElementById("ctHighlights");
  const skillsEl = document.getElementById("ctSkills");

  function setActive(key){
    buttons.forEach(b => b.classList.toggle("is-active", b.dataset.module === key));
  }

  function renderGallery(screens, tutorials){
    galleryEl.innerHTML = "";

    const hasScreens = screens && screens.length > 0;
    const hasTutorials = tutorials && tutorials.length > 0;

    // Toggle Title text depending on context
    screensTitleEl.textContent = hasTutorials ? "Watch Tutorials" : "Screens";

    if (!hasScreens && !hasTutorials){
      const p = document.createElement("p");
      p.className = "muted";
      p.style.margin = "0";
      p.textContent = "No screens or tutorials added yet for this module.";
      galleryEl.appendChild(p);
      return;
    }

    // 1) Render Standard App Screens
    if (hasScreens) {
      screens.forEach(src => {
        const a = document.createElement("a");
        a.className = "ct-shot";
        a.href = src;
        a.target = "_blank";
        a.rel = "noopener";
        
        const notch = document.createElement("div");
        notch.className = "iphone-notch";
        a.appendChild(notch);

        const img = document.createElement("img");
        img.src = src;
        img.alt = "";
        a.appendChild(img);
        
        galleryEl.appendChild(a);
      });
    }

    // 2) Render Video Tutorial Buttons
    if (hasTutorials) {
      const tutContainer = document.createElement("div");
      tutContainer.style.display = "flex";
      tutContainer.style.flexWrap = "wrap";
      tutContainer.style.gap = "18px";
      tutContainer.style.width = "100%";
      tutContainer.style.justifyContent = "center";
      tutContainer.style.padding = "20px 0";

      tutorials.forEach(t => {
        const btn = document.createElement("a");
        btn.href = t.url;
        btn.target = "_blank";
        btn.rel = "noopener";
        
        // Custom styling for the YouTube buttons
        btn.style.display = "flex";
        btn.style.alignItems = "center";
        btn.style.gap = "10px";
        btn.style.padding = "14px 24px";
        btn.style.background = "rgba(255, 255, 255, 0.05)";
        btn.style.border = "1px solid rgba(255, 0, 0, 0.4)";
        btn.style.borderRadius = "14px";
        btn.style.color = "#fff";
        btn.style.textDecoration = "none";
        btn.style.fontWeight = "bold";
        btn.style.transition = "all 0.2s ease";

        btn.onmouseover = () => {
          btn.style.transform = "translateY(-3px)";
          btn.style.background = "rgba(255, 0, 0, 0.15)";
          btn.style.borderColor = "rgba(255, 0, 0, 0.7)";
          btn.style.boxShadow = "0 8px 24px rgba(255, 0, 0, 0.15)";
        };
        btn.onmouseout = () => {
          btn.style.transform = "translateY(0)";
          btn.style.background = "rgba(255, 255, 255, 0.05)";
          btn.style.borderColor = "rgba(255, 0, 0, 0.4)";
          btn.style.boxShadow = "none";
        };

        // Embedded YouTube SVG
        btn.innerHTML = `
          <svg width="28" height="28" viewBox="0 0 24 24" fill="#ff0000" xmlns="http://www.w3.org/2000/svg">
            <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
          </svg>
          <span style="font-size: 16px;">${t.label}</span>
        `;
        tutContainer.appendChild(btn);
      });

      galleryEl.appendChild(tutContainer);
    }
  }

  function renderHighlights(list){
    if (!highlightsEl) return;
    highlightsEl.innerHTML = "";
    (list || []).forEach(txt => {
      const li = document.createElement("li");
      li.textContent = txt;
      highlightsEl.appendChild(li);
    });
  }

  function renderSkills(list){
    if (!skillsEl) return;
    skillsEl.innerHTML = "";
    (list || []).forEach(txt => {
      const span = document.createElement("span");
      span.className = "tag";
      span.textContent = txt;
      skillsEl.appendChild(span);
    });
  }

  function applyModule(key){
    const m = CT_MODULES[key];
    if (!m) return;

    currentKey = key;

    titleEl.textContent = `${m.label} — Overview`;
    overviewEl.textContent = m.overview || "";

    galleryEl.classList.toggle("gallery-landscape", m.orientation === "landscape");
    galleryEl.classList.toggle("gallery-portrait", m.orientation !== "landscape");

    // Pass both screens and tutorials data
    renderGallery(m.screens || [], m.tutorials || []);
    renderHighlights(m.highlights || []);
    renderSkills(m.skills || []);

    setActive(key);

    const url = new URL(window.location.href);
    url.searchParams.set("module", key);
    history.replaceState({}, "", url.toString());
  }

  buttons.forEach(btn => {
    btn.addEventListener("click", () => applyModule(btn.dataset.module));
  });

  // Initial render on page load
  applyModule(currentKey);
</script>

<?php require __DIR__ . "/partials/footer.php"; ?>
