<!-- hero.php -->
<section id="home" class="relative pt-32 pb-20 md:pt-40 md:pb-28 bg-gradient-to-br from-slate-50 via-slate-100 to-slate-200 dark:from-slate-900 dark:via-slate-800 dark:to-slate-900 overflow-hidden">
  <!-- Effets décoratifs -->
  <div class="absolute top-0 right-0 w-72 h-72 bg-blue-400/10 rounded-full blur-3xl animate-pulse"></div>
  <div class="absolute bottom-0 left-0 w-72 h-72 bg-indigo-400/10 rounded-full blur-3xl animate-pulse delay-2000"></div>

  <div class="relative max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-16 items-center">

    <!-- Texte principal -->
    <div class="animate-fadeInUp">
      <h1 class="text-5xl md:text-6xl lg:text-7xl font-extrabold leading-tight mb-6">
        <span class="gradient-text bg-gradient-to-r from-blue-600 via-indigo-500 to-purple-600 bg-clip-text text-transparent">Développeur FullStack</span><br>
        Web & Mobile
      </h1>

      <p class="text-gray-700 dark:text-gray-300 text-lg md:text-xl leading-relaxed max-w-2xl mb-10">
  👋 Je suis <strong class="text-blue-600 dark:text-blue-400">Alex Valin Ndongo</strong>, 
  <span class="font-medium">ingénieur en Génie Informatique</span> et 
  <span class="font-medium">développeur FullStack Web & Mobile</span> passionné par la création 
  d’expériences numériques fluides, élégantes et performantes.
</p>

<p class="text-gray-600 dark:text-gray-400 text-lg md:text-xl leading-relaxed max-w-2xl mb-10">
  💡 J’aime transformer des idées en produits concrets, en alliant 
  <strong>design moderne</strong>, <strong>performance</strong> et 
  <strong>expérience utilisateur</strong>. 
  Mon objectif : concevoir des applications qui inspirent, engagent et apportent une réelle valeur.
</p>

<p class="text-gray-600 dark:text-gray-400 text-lg md:text-xl leading-relaxed max-w-2xl">
  🚀 Toujours curieux et en veille technologique, je m’efforce de maîtriser les outils les plus récents 
  pour offrir des solutions robustes, évolutives et centrées sur l’utilisateur.
</p>


      <!-- CTA -->
      <div class="flex flex-wrap gap-5">
        <a href="#projects" 
           class="group inline-flex items-center gap-3 bg-gradient-to-r from-blue-600 to-indigo-600 text-white px-7 py-3 rounded-full font-semibold shadow-lg hover:shadow-blue-300/30 transform transition-all duration-300 hover:-translate-y-1">
          <i class="fa-solid fa-folder-open group-hover:rotate-6 transition-transform"></i>
          Voir mes projets
        </a>
        <a href="#contact" 
           class="inline-flex items-center gap-3 border-2 border-blue-600 text-blue-600 dark:text-blue-400 hover:bg-blue-50 dark:hover:bg-slate-800 px-7 py-3 rounded-full font-semibold transition-all duration-300 hover:-translate-y-1 hover:shadow-lg">
          <i class="fa-solid fa-paper-plane"></i>
          Me contacter
        </a>
      </div>

      <!-- Icônes technologiques -->
      <div class="mt-12 flex flex-wrap items-center gap-6">
        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" title="JavaScript" class="tech-icon w-10 h-10 hover:scale-125 hover:rotate-6 transition-transform duration-300">
        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" title="PHP" class="tech-icon w-10 h-10 hover:scale-125 hover:-rotate-6 transition-transform duration-300">
        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/symfony/symfony-original.svg" title="Symfony" class="tech-icon w-10 h-10 hover:scale-125 transition-transform duration-300">
        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg" title="React / React Native" class="tech-icon w-10 h-10 hover:scale-125 transition-transform duration-300">
        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/flutter/flutter-original.svg" title="Flutter" class="tech-icon w-10 h-10 hover:scale-125 transition-transform duration-300">
        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/java/java-original.svg" title="Java / Spring Boot" class="tech-icon w-10 h-10 hover:scale-125 transition-transform duration-300">
      </div>
    </div>

    <!-- Image de profil -->
    <div class="flex justify-center md:justify-end relative animate-fadeIn">
      <div class="relative group">
        <!-- Cercles décoratifs animés -->
        <div class="absolute -top-12 -left-12 w-36 h-36 bg-blue-300/20 rounded-full blur-xl group-hover:scale-110 transition-transform duration-500"></div>
        <div class="absolute -bottom-12 -right-12 w-36 h-36 bg-purple-300/20 rounded-full blur-xl group-hover:scale-110 transition-transform duration-500"></div>

        <!-- Photo -->
        <img src="img/profile.jpg" 
             alt="Ndongo Kana Alex Valin - Développeur FullStack" 
             class="relative z-10 w-72 h-72 md:w-96 md:h-96 object-cover rounded-3xl shadow-2xl border-4 border-white dark:border-slate-800 transform hover:scale-105 hover:rotate-1 transition-transform duration-500">
      </div>
    </div>

  </div>
</section>

<!-- Animations Tailwind -->
<script>
  tailwind.config = {
    theme: {
      extend: {
        animation: {
          fadeIn: "fadeIn 1.5s ease-in-out",
          fadeInUp: "fadeInUp 1.5s ease-out",
          pulseSlow: "pulse 3s infinite ease-in-out"
        },
        keyframes: {
          fadeIn: { from: { opacity: 0 }, to: { opacity: 1 } },
          fadeInUp: { from: { opacity: 0, transform: 'translateY(40px)' }, to: { opacity: 1, transform: 'translateY(0)' } }
        }
      }
    }
  }
</script>

<style>
  .gradient-text {
    background: linear-gradient(45deg, #3b82f6, #6366f1);
    -webkit-background-clip: text;
    color: transparent;
  }

  /* Justification améliorée et lisibilité */
  p {
    text-align: justify;
  }
</style>