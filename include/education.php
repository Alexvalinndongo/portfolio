<!-- Ajouter dans le <head> -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" />

<section id="education" class="py-24 px-6 sm:px-10 lg:px-20 bg-gradient-to-b from-gray-50 via-white to-blue-50 dark:from-slate-900 dark:via-slate-800 dark:to-slate-900 transition-colors duration-700">
  <div class="max-w-7xl mx-auto">

    <!-- Titre de section -->
    <div class="text-center mb-20" data-aos="fade-down">
      <span class="text-sm font-semibold tracking-wider text-blue-600 uppercase">Formation</span>
      <h2 class="text-4xl md:text-5xl font-extrabold mt-3 text-gray-900 dark:text-white">
        Parcours <span class="gradient-text">académique</span>
      </h2>
    </div>

    <!-- Cartes de formation -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-12">

      <!-- Éducation 1 -->
      <div class="bg-white dark:bg-slate-800 p-8 rounded-2xl shadow-lg border border-gray-200 dark:border-gray-700 transform transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl group" data-aos="fade-up" data-aos-delay="100">
        <div class="flex items-start mb-6">
          <div class="bg-blue-100 dark:bg-blue-900 p-4 rounded-lg mr-4 flex items-center justify-center transform transition-transform duration-500 group-hover:scale-110">
            <i class="fas fa-graduation-cap text-blue-600 dark:text-blue-400 text-2xl"></i>
          </div>
          <div>
            <h3 class="text-xl font-bold mb-1 text-gray-900 dark:text-white">Master en Génie Informatique</h3>
            <p class="text-blue-600 dark:text-blue-400 font-medium">Institut Universitaire des Sciences, des Technologies et de l'Éthique (IUSTE)</p>
            <p class="text-gray-500 dark:text-gray-400 text-sm">Année académique : 2023 - 2024</p>
          </div>
        </div>
        <p class="text-gray-600 dark:text-gray-300 text-justify leading-relaxed">
          Spécialisation en développement d'applications web & mobiles. Mémoire intitulé <strong>« Mise en place d’un système intelligent de gestion de notes : cas de l’IUSTE »</strong>.
        </p>
      </div>

      <!-- Éducation 2 -->
      <div class="bg-white dark:bg-slate-800 p-8 rounded-2xl shadow-lg border border-gray-200 dark:border-gray-700 transform transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl group" data-aos="fade-up" data-aos-delay="200">
        <div class="flex items-start mb-6">
          <div class="bg-blue-100 dark:bg-blue-900 p-4 rounded-lg mr-4 flex items-center justify-center transform transition-transform duration-500 group-hover:scale-110">
            <i class="fas fa-certificate text-blue-600 dark:text-blue-400 text-2xl"></i>
          </div>
          <div>
            <h3 class="text-xl font-bold mb-1 text-gray-900 dark:text-white">Certification Linux</h3>
            <p class="text-blue-600 dark:text-blue-400 font-medium">NDG LINUX UNHATCHED</p>
            <p class="text-gray-500 dark:text-gray-400 text-sm">2020-2021</p>
          </div>
        </div>
        <p class="text-gray-600 dark:text-gray-300 text-justify leading-relaxed">
          Formation complète sur Linux pour débutants, axée sur la découverte du système d’exploitation, la prise en main du terminal et la gestion des fichiers.
        </p>
      </div>

    </div>
  </div>
</section>

<!-- Animation JS -->
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
</style>
