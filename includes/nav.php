<?php
/**
 * includes/nav.php
 * Gebruik: <?php include $root . 'includes/nav.php'; ?>
 */
?>
<nav class="nav">
  <a href="/" class="nav-logo">
    <div class="nav-logo-mark">S</div>
    <span class="nav-logo-text">STAP <span>Energie</span></span>
  </a>
  <ul class="nav-links" id="nav-links">
    <li class="has-dd">
      <a href="#diensten">Diensten
        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" style="flex-shrink:0"><path d="M2 4l4 4 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
      </a>
      <div class="dropdown">
        <a href="/energielabels/" class="dd-item">Energielabels</a>
        <a href="/verduurzaming-subsidie/" class="dd-item">Verduurzaming &amp; Subsidie</a>
        <a href="/energie-inkoop-advies/" class="dd-item">Energie inkoop advies</a>
      </div>
    </li>
    <li class="has-dd">
      <a href="#voor-wie">Voor wie
        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" style="flex-shrink:0"><path d="M2 4l4 4 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
      </a>
      <div class="dropdown">
        <a href="/zakelijk/" class="dd-item">Zakelijk</a>
        <a href="/particulieren/" class="dd-item">Particulieren</a>
        <a href="/mkb/" class="dd-item">MKB &amp; Bedrijven</a>
        <a href="/vastgoed/" class="dd-item">Vastgoed</a>
        <a href="/makelaars/" class="dd-item">Makelaars</a>
        <a href="/kantoren/" class="dd-item">Kantoren</a>
        <a href="/gemeenten-woningstichtingen/" class="dd-item">Gemeenten &amp; Woningstichtingen</a>
        <a href="/industrie/" class="dd-item">Industrie</a>
      </div>
    </li>
    <li><a href="/over-ons/">Over ons</a></li>
    <li><a href="/kennisbank/">Kennisbank</a></li>
    <li><a href="#contact" class="nav-cta">Gratis gesprek &rarr;</a></li>
  </ul>
  <button class="nav-toggle" id="nav-toggle" aria-label="Menu openen">
    <span></span><span></span><span></span>
  </button>
</nav>

<script>

// ── HAMBURGER ──
var toggle   = document.getElementById('nav-toggle');
var navLinks = document.getElementById('nav-links');

if (toggle && navLinks) {
  toggle.addEventListener('click', function() {
    var isOpen = navLinks.classList.contains('open');
    toggle.classList.toggle('open');
    navLinks.classList.toggle('open');
    toggle.setAttribute('aria-label', isOpen ? 'Menu openen' : 'Menu sluiten');
  });
}

document.addEventListener('click', function(e) {
  if (navLinks && toggle && !navLinks.contains(e.target) && !toggle.contains(e.target)) {
    navLinks.classList.remove('open');
    toggle.classList.remove('open');
    toggle.setAttribute('aria-label', 'Menu openen');
    document.querySelectorAll('.has-dd.open').forEach(function(el) { el.classList.remove('open'); });
  }
});

// ── DROPDOWN ──
var dropdownTimers = {};

document.querySelectorAll('.has-dd').forEach(function(item, idx) {
  var link     = item.querySelector(':scope > a');
  var dropdown = item.querySelector('.dropdown');
  if (!dropdown) return;

  item.addEventListener('mouseenter', function() {
    if (window.innerWidth <= 768) return;
    clearTimeout(dropdownTimers[idx]);
    document.querySelectorAll('.has-dd.open').forEach(function(el) {
      if (el !== item) el.classList.remove('open');
    });
    item.classList.add('open');
  });

  item.addEventListener('mouseleave', function() {
    if (window.innerWidth <= 768) return;
    dropdownTimers[idx] = setTimeout(function() {
      item.classList.remove('open');
    }, 120);
  });

  if (link) {
    link.addEventListener('click', function(e) {
      if (window.innerWidth > 768) return;
      e.preventDefault();
      document.querySelectorAll('.has-dd.open').forEach(function(el) {
        if (el !== item) el.classList.remove('open');
      });
      item.classList.toggle('open');
    });
  }
});

// ── SEGMENT BAR ──
document.querySelectorAll('.seg-bar a').forEach(function(a) {
  a.addEventListener('click', function() {
    document.querySelectorAll('.seg-bar a').forEach(function(x) { x.classList.remove('active'); });
    a.classList.add('active');
  });
});
</script>
