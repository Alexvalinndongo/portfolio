<!-- Ajouter dans le <head> si pas déjà fait -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" />

<section id="about" class="relative py-24 px-6 sm:px-10 lg:px-20 bg-gradient-to-br from-gray-50 via-white to-blue-50 dark:from-slate-900 dark:via-slate-800 dark:to-slate-900 transition-colors duration-700">
  <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-16 items-center">

    <!-- Image de profil -->
    <div class="relative" data-aos="fade-right">
      <div class="absolute -top-8 -left-8 w-40 h-40 bg-blue-100 dark:bg-blue-900/30 rounded-full blur-2xl opacity-40"></div>
      <img src="img/profile.jpg"
           alt="Ndongo Kana Alex Valin - Développeur FullStack"
           class="relative rounded-3xl shadow-2xl w-full max-w-sm mx-auto md:mx-0 transition-transform duration-500 hover:scale-105 hover:shadow-blue-500/30">
      <div class="absolute bottom-4 right-6 bg-white dark:bg-slate-800 text-blue-600 dark:text-blue-400 px-4 py-2 rounded-full text-sm shadow-md flex items-center gap-2">
        <i class="fa-solid fa-code"></i> FullStack Dev
      </div>
    </div>

    <!-- Contenu texte -->
    <div class="space-y-8" data-aos="fade-left">
      <!-- Titre -->
      <div class="text-center md:text-left">
        <span class="text-sm font-semibold tracking-wider text-blue-600 uppercase">À propos</span>
        <h2 class="text-3xl md:text-4xl font-extrabold mt-2 text-gray-900 dark:text-white">
          À <span class="gradient-text">propos de moi</span>
        </h2>
        <p class="text-gray-500 dark:text-gray-400 mt-2 text-sm">Passion, innovation et expérience utilisateur au cœur de chaque projet.</p>
      </div>

      <!-- Description -->
      <div class="text-gray-700 dark:text-gray-300 text-lg leading-relaxed text-justify space-y-4">
        <p>
          🎯 Ingénieur en Génie Informatique avec plus de <strong>5 ans d’expérience</strong> dans le développement web et mobile. 
          J’ai contribué à la conception et la mise en œuvre de solutions performantes et durables pour divers clients.
        </p>
        <p>
          💡 Mon objectif : allier <strong>design moderne</strong>, <strong>technologie</strong> et 
          <strong>expérience utilisateur</strong> pour créer des produits qui inspirent et engagent.
        </p>
      </div>

      <!-- Barres de compétences -->
      <div class="space-y-5">
        <!-- Exemple : Développement Web -->
        <div>
          <div class="flex justify-between mb-1 font-medium text-gray-700 dark:text-gray-300">
            <span>Développement Web</span>
            <span>95%</span>
          </div>
          <div class="w-full bg-gray-200 dark:bg-slate-700 rounded-full h-2.5 overflow-hidden">
            <div class="bg-gradient-to-r from-blue-500 to-indigo-500 h-2.5 rounded-full transition-all duration-1000 ease-in-out" style="width: 95%;"></div>
          </div>
        </div>

        <div>
          <div class="flex justify-between mb-1 font-medium text-gray-700 dark:text-gray-300">
            <span>Conception d’Applications</span>
            <span>90%</span>
          </div>
          <div class="w-full bg-gray-200 dark:bg-slate-700 rounded-full h-2.5 overflow-hidden">
            <div class="bg-gradient-to-r from-yellow-400 to-orange-500 h-2.5 rounded-full transition-all duration-1000 ease-in-out" style="width: 90%;"></div>
          </div>
        </div>

        <div>
          <div class="flex justify-between mb-1 font-medium text-gray-700 dark:text-gray-300">
            <span>Design UI / UX</span>
            <span>85%</span>
          </div>
          <div class="w-full bg-gray-200 dark:bg-slate-700 rounded-full h-2.5 overflow-hidden">
            <div class="bg-gradient-to-r from-pink-500 to-rose-500 h-2.5 rounded-full transition-all duration-1000 ease-in-out" style="width: 85%;"></div>
          </div>
        </div>
      </div>

      <!-- Bouton d’action -->
      <a href="#contact"
         class="inline-flex items-center gap-2 bg-gradient-to-r from-blue-600 to-indigo-600 text-white px-6 py-3 rounded-full font-medium shadow-lg hover:scale-105 transition-all duration-300">
        <i class="fa-solid fa-paper-plane"></i> Me contacter
      </a>
    </div>

  </div>
</section>

<!-- AOS Animations -->
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 1000,
    once: true,
    offset: 80,
  });
</script>

<style>
.gradient-text {
  background: linear-gradient(45deg, #3b82f6, #6366f1);
  -webkit-background-clip: text;
  color: transparent;
}
#about p {
  text-align: justify;
  text-justify: inter-word;
  hyphens: auto;
}
</style>
