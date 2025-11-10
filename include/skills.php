<!-- Ajouter dans le <head> si pas déjà fait -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" />

<section id="skills" class="relative py-24 px-6 sm:px-10 lg:px-20 bg-gradient-to-b from-white via-gray-50 to-blue-50 dark:from-slate-900 dark:via-slate-800 dark:to-slate-900 transition-colors duration-700">
  <div class="max-w-7xl mx-auto">

    <!-- Titre -->
    <div class="text-center mb-20" data-aos="fade-down">
      <span class="text-sm font-semibold tracking-wider text-blue-600 uppercase">Mes compétences</span>
      <h2 class="text-4xl md:text-5xl font-extrabold mt-3 text-gray-900 dark:text-white">
        Expertise <span class="gradient-text">technique</span>
      </h2>
      <p class="mt-5 max-w-2xl mx-auto text-gray-600 dark:text-gray-400 text-lg leading-relaxed">
        Une maîtrise approfondie des technologies modernes pour le développement web et mobile.
      </p>
    </div>

    <!-- Cartes -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">

      <!-- Frontend -->
      <div class="relative bg-white dark:bg-slate-800 p-8 rounded-3xl shadow-lg border border-gray-100 dark:border-slate-700 hover:shadow-2xl hover:-translate-y-2 transform transition-all duration-500" data-aos="fade-up" data-aos-delay="100">
        <div class="absolute -top-6 -left-6 w-20 h-20 bg-blue-100 dark:bg-blue-900/30 rounded-full blur-xl opacity-40"></div>
        <div class="w-16 h-16 bg-blue-100 dark:bg-blue-900/50 rounded-2xl flex items-center justify-center mb-6 mx-auto md:mx-0">
          <i class="fas fa-laptop-code text-3xl text-blue-600"></i>
        </div>
        <h3 class="text-2xl font-bold mb-3 text-gray-800 dark:text-gray-100">Frontend</h3>
        <p class="text-gray-600 dark:text-gray-300 mb-5 leading-relaxed text-justify">
          Création d’interfaces riches et dynamiques avec un souci du détail et de l’expérience utilisateur.
        </p>
        <div class="flex flex-wrap gap-2">
          <span class="skill-tag bg-blue-50 text-blue-700 dark:bg-blue-900/40 dark:text-blue-300">JavaScript</span>
          <span class="skill-tag bg-blue-50 text-blue-700 dark:bg-blue-900/40 dark:text-blue-300">HTML5</span>
          <span class="skill-tag bg-blue-50 text-blue-700 dark:bg-blue-900/40 dark:text-blue-300">CSS3</span>
          <span class="skill-tag bg-blue-50 text-blue-700 dark:bg-blue-900/40 dark:text-blue-300">Symfony</span>
          <span class="skill-tag bg-blue-50 text-blue-700 dark:bg-blue-900/40 dark:text-blue-300">TailwindCSS</span>
        </div>
      </div>

      <!-- Backend -->
      <div class="relative bg-white dark:bg-slate-800 p-8 rounded-3xl shadow-lg border border-gray-100 dark:border-slate-700 hover:shadow-2xl hover:-translate-y-2 transform transition-all duration-500" data-aos="fade-up" data-aos-delay="200">
        <div class="absolute -top-6 -left-6 w-20 h-20 bg-green-100 dark:bg-green-900/30 rounded-full blur-xl opacity-40"></div>
        <div class="w-16 h-16 bg-green-100 dark:bg-green-900/50 rounded-2xl flex items-center justify-center mb-6 mx-auto md:mx-0">
          <i class="fas fa-server text-3xl text-green-600"></i>
        </div>
        <h3 class="text-2xl font-bold mb-3 text-gray-800 dark:text-gray-100">Backend</h3>
        <p class="text-gray-600 dark:text-gray-300 mb-5 leading-relaxed text-justify">
          Développement de systèmes robustes, APIs performantes et gestion de bases de données optimisée.
        </p>
        <div class="flex flex-wrap gap-2">
          <span class="skill-tag bg-green-50 text-green-700 dark:bg-green-900/40 dark:text-green-300">PHP</span>
          <span class="skill-tag bg-green-50 text-green-700 dark:bg-green-900/40 dark:text-green-300">Spring Boot</span>
          <span class="skill-tag bg-green-50 text-green-700 dark:bg-green-900/40 dark:text-green-300">Firebase</span>
          <span class="skill-tag bg-green-50 text-green-700 dark:bg-green-900/40 dark:text-green-300">MySQL</span>
        </div>
      </div>

      <!-- Mobile -->
      <div class="relative bg-white dark:bg-slate-800 p-8 rounded-3xl shadow-lg border border-gray-100 dark:border-slate-700 hover:shadow-2xl hover:-translate-y-2 transform transition-all duration-500" data-aos="fade-up" data-aos-delay="300">
        <div class="absolute -top-6 -left-6 w-20 h-20 bg-purple-100 dark:bg-purple-900/30 rounded-full blur-xl opacity-40"></div>
        <div class="w-16 h-16 bg-purple-100 dark:bg-purple-900/50 rounded-2xl flex items-center justify-center mb-6 mx-auto md:mx-0">
          <i class="fas fa-mobile-alt text-3xl text-purple-600"></i>
        </div>
        <h3 class="text-2xl font-bold mb-3 text-gray-800 dark:text-gray-100">Mobile</h3>
        <p class="text-gray-600 dark:text-gray-300 mb-5 leading-relaxed text-justify">
          Développement d’applications mobiles performantes et intuitives avec un rendu natif fluide.
        </p>
        <div class="flex flex-wrap gap-2">
          <span class="skill-tag bg-purple-50 text-purple-700 dark:bg-purple-900/40 dark:text-purple-300">Flutter</span>
          <span class="skill-tag bg-purple-50 text-purple-700 dark:bg-purple-900/40 dark:text-purple-300">Dart</span>
          <span class="skill-tag bg-purple-50 text-purple-700 dark:bg-purple-900/40 dark:text-purple-300">Firebase</span>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- AOS Animations -->
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 1000,
    once: true,
    offset: 100,
  });
</script>

<style>
.gradient-text {
  background: linear-gradient(45deg, #3b82f6, #6366f1);
  -webkit-background-clip: text;
  color: transparent;
}
.skill-tag {
  @apply px-3 py-1 rounded-full text-sm font-medium transition-all duration-300;
}
.skill-tag:hover {
  @apply scale-105 shadow-md;
}
</style>
