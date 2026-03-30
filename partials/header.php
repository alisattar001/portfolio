<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= isset($site["name"]) ? htmlspecialchars($site["name"]) . " — Portfolio" : "Portfolio" ?></title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <header class="nav">
    <div class="container nav-inner">
      <a class="brand" href="index.php#top" aria-label="Home">
        <span class="brand-mark"></span>
        <span class="brand-text"><?= htmlspecialchars($site["name"] ?? "Portfolio") ?></span>
      </a>

      <nav class="nav-links" aria-label="Primary">
        <a href="index.php#work">Work</a>
        <a href="index.php#skills">Skills</a>
        <a href="index.php#contact">Contact</a>
      </nav>

      <div class="nav-actions">
        <button class="icon-btn" id="themeBtn" aria-label="Toggle theme">
          <span class="icon"></span>
        </button>
      </div>
    </div>
  </header>