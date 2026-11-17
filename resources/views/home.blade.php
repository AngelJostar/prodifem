<!doctype html>
<html lang="es-MX">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="theme-color" content="#f6f6f2">
<meta name="description" content="PROMESA, Prodifem Mezclas Estériles. Preparación y distribución de mezclas estériles para hospitales y clínicas en la Ciudad de México y su zona metropolitana.">
<title>PROMESA — Precisión en cada mezcla</title>
<link rel="stylesheet" href="{{ asset('estilos.css') }}">@vite('resources/js/app.js')</head>
<body>
<a class="skip" href="#main">Saltar al contenido</a>
<svg width="0" height="0" aria-hidden="true" style="position:absolute">
<symbol id="mark" viewBox="0 0 42 46">
<path d="M23 3 9 11Q5 13 5 17v12q0 4 4 6l4 2 5-4-6-4V17l15-9z" fill="#0875ad"/>
<path d="m29 8 5 3q4 2 4 6v12q0 4-4 6l-15 9-6-4 18-11V17l-7-5z" fill="#75ad3b"/>
</symbol>
</svg>
<header id="inicio">
<div class="wrap">
<a class="brand" href="#inicio" aria-label="PROMESA, inicio">
<img width="174" height="36" alt="PROMESA · Prodifem Mezclas Estériles" src="{{ asset('assets/logo-promesa.webp') }}">
</a>
<nav aria-label="Principal">
<a href="#mezclas">Mezclas</a>
<a href="#calidad">Calidad</a>
<a href="#contacto">Contacto</a>
</nav>
<a class="topcall" href="tel:+525591862620" aria-label="Llamar a Ventas: +52 5591862620">Ventas<span class="extra">+52 5591862620</span>
<span class="glyph" aria-hidden="true">↗</span>
</a>
</div>
</header>
<main id="main">
<section class="hero">
<div class="wrap">
<div class="heroCopy">
<div class="label">
<span class="dot">
</span>Central de mezclas estériles</div>
<h1>Precisión en<br>cada <span>mezcla.</span>
</h1>
<p class="intro">Preparamos y distribuimos mezclas estériles para hospitales y clínicas de la Ciudad de México y su zona metropolitana.</p>
<div class="heroActions">
<a class="primary" href="tel:+525591862620">Ventas: +52 5591862620 <span class="glyph" aria-hidden="true">↗</span>
</a>
<a class="link" href="#mezclas">Explorar mezclas ↓</a>
</div>
</div>
<figure class="product">
<img class="photo" width="1080" height="1350" alt="Bolsa de infusión transparente, imagen conceptual" src="{{ asset('assets/portada.webp') }}">
<figcaption>FIG. 01 &nbsp; / &nbsp; BOLSA DE INFUSIÓN</figcaption>
</figure>
</div>
</section>
<section class="wrap section" id="mezclas" x-data="specialtyTabs">
<div class="label tag">01 / Especialidades</div>
<div class="titleRow">
<h2 class="section-title">Nuestras mezclas.</h2>
</div>
<div class="chooser" @keydown="navigate($event)" role="tablist" aria-label="Elegir especialidad">
<button id="t1" role="tab" aria-controls="p1" aria-selected="true" :aria-selected="active === 0" :tabindex="active === 0 ? 0 : -1" @click="active = 0">Oncología</button>
<button id="t2" role="tab" aria-controls="p2" aria-selected="false" :aria-selected="active === 1" :tabindex="active === 1 ? 0 : -1" @click="active = 1">Nutrición parenteral</button>
<button id="t3" role="tab" aria-controls="p3" aria-selected="false" :aria-selected="active === 2" :tabindex="active === 2 ? 0 : -1" @click="active = 2">Intravenosas</button>
</div>
<div class="spot" id="p1" :hidden="active !== 0" role="tabpanel" aria-labelledby="t1">
<div>
<span class="serial">ESPECIALIDAD / 01</span>
<h3 class="spot-title">Mezclas<br>oncológicas.</h3>
</div>
<div>
<p>¿Tu hospital opera una sala de infusión? Coordina con nuestro equipo las solicitudes de mezclas oncológicas y su entrega.</p>
<a class="link" href="https://prodifem.com.mx/centro-de-mezclas-oncologicas">Ver especialidad ↗</a>
</div>
</div>
<div class="spot" id="p2" hidden :hidden="active !== 1" role="tabpanel" aria-labelledby="t2" data-tone="b">
<div>
<span class="serial">ESPECIALIDAD / 02</span>
<h3 class="spot-title">Nutrición<br>parenteral.</h3>
</div>
<div>
<p>Cuando el servicio de nutrición de tu hospital requiere una preparación individualizada, la farmacia puede coordinar la solicitud con nuestra central.</p>
<a class="link" href="https://prodifem.com.mx/centro-de-mezclas-de-nutricion-parenteral">Ver especialidad ↗</a>
</div>
</div>
<div class="spot" id="p3" hidden :hidden="active !== 2" role="tabpanel" aria-labelledby="t3" data-tone="c">
<div>
<span class="serial">ESPECIALIDAD / 03</span>
<h3 class="spot-title">Mezclas<br>intravenosas.</h3>
</div>
<div>
<p>Para las solicitudes de los distintos servicios de tu hospital, consulta con nosotros las opciones de preparación y distribución de mezclas intravenosas.</p>
<a class="link" href="https://prodifem.com.mx/centro-de-mezclas-intravenosas">Ver especialidad ↗</a>
</div>
</div>
</section>
<section class="quality section wrap" id="calidad">
<div>
<div class="label tag">02 / El proceso</div>
<h2 class="section-title">De la central<br>a tu hospital.</h2>
<a class="link" href="https://prodifem.com.mx/politica-de-calidad">Nuestra política de calidad ↗</a>
</div>
<div class="steps">
<div class="step">
<div>
<h3>Solicitud</h3>
<p>El hospital comparte su solicitud y las necesidades de entrega.</p>
</div>
</div>
<div class="step">
<div>
<h3>Preparación</h3>
<p>La central revisa la solicitud y prepara la mezcla correspondiente.</p>
</div>
</div>
<div class="step">
<div>
<h3>Distribución</h3>
<p>Coordinamos la entrega en hospitales y clínicas de la Ciudad de México y su zona metropolitana.</p>
</div>
</div>
</div>
</section>
<section class="contact section" id="contacto">
<div class="wrap">
<div>
<div class="label">03 / Contacto</div>
<h2>Hablemos de<br>tu hospital.</h2>
<p>Para cotizar un servicio, llama a Ventas.<br>Para una orden de preparación, elige Solicitudes de mezclas.</p>
</div>
<div class="channels">
<a href="tel:+525591862620">
<span>
<small>Ventas</small>
<b>+52 5591862620</b>
</span>
<i aria-hidden="true">↗</i>
</a>
<a href="tel:+525624733630">
<span>
<small>Solicitudes de mezclas</small>
<b>56 2473 3630</b>
</span>
<i aria-hidden="true">↗</i>
</a>
<a href="mailto:contacto@prodifem.com.mx">
<span>
<small>Correo electrónico</small>
<b>contacto@prodifem.com.mx</b>
</span>
<i aria-hidden="true">↗</i>
</a>
</div>
</div>
</section>
</main>
<footer>
<div class="wrap">
<strong>PROMESA · Prodifem Mezclas Estériles</strong>
<a class="link" href="https://mezclaspro.mx/login">Acceso hospitales ↗</a>
<a href="#inicio">Volver al inicio ↑</a>
</div>
</footer>
</body>
</html>

