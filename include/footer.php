<!-- footer.php -->
<footer class="bg-gray-900 dark:bg-slate-900 text-white py-12 mt-16">
  <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-20">

    <!-- Logo / Nom et droits -->
    <div class="flex flex-col md:flex-row justify-between items-center gap-4 md:gap-0 text-center md:text-left">
      <!-- Logo / Nom -->
      <div>
        <span class="text-2xl md:text-3xl font-extrabold tracking-wide">
          <span class="gradient-text">AlexValinndongo</span> | Portfolio
        </span>
      </div>

      <!-- Droits -->
      <div class="text-sm text-gray-400 mt-2 md:mt-0">
        © <span id="footerYear"></span> <span class="font-semibold text-blue-500">AlexValinndongo</span> — Tous droits réservés.
      </div>
    </div>

    <!-- Réseaux sociaux -->
    <div class="flex justify-center md:justify-end mt-6 space-x-6">
      <a href="https://github.com/Alexvalinndongo" target="_blank" rel="noopener noreferrer" class="text-gray-400 hover:text-white transition transform hover:-translate-y-1 hover:scale-110 duration-300" aria-label="GitHub">
        <i class="fab fa-github fa-lg"></i>
      </a>
      <a href="https://linkedin.com/in/www.linkedin.com/in/alexvalinndongo" target="_blank" rel="noopener noreferrer" class="text-gray-400 hover:text-white transition transform hover:-translate-y-1 hover:scale-110 duration-300" aria-label="LinkedIn">
        <i class="fab fa-linkedin fa-lg"></i>
      </a>
      <a href="mailto:ndongovalin@gmail.com" class="text-gray-400 hover:text-white transition transform hover:-translate-y-1 hover:scale-110 duration-300" aria-label="Email">
        <i class="fas fa-envelope fa-lg"></i>
      </a>
    </div>

  </div>
</footer>

<script>
  // Dynamique : année actuelle
  document.getElementById('footerYear').textContent = new Date().getFullYear();
</script>

<style>
  /* Gradient text pour le logo / nom */
  .gradient-text {
    background: linear-gradient(90deg, #3b82f6, #06b6d4);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
  }

  /* Hover smooth sur icônes sociales */
  .transition {
    transition: all 0.3s ease-in-out;
  }
</style>
