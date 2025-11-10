<!DOCTYPE html>
<html lang="fr" class="dark">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="Portfolio, Développeur FullStack, Web, Mobile, Alexvalinndongo, Projets, Compétences, Expérience, Freelance">
  <meta name="description" content="Portfolio de Alexvalinndongo, développeur FullStack Web & Mobile. Découvrez mes projets, mes compétences et mon expérience.">
  <meta property="og:image" content="img/profile.jpg">
  <title>Alexvalinndongo | Développeur FullStack Web & Mobile</title>
  <link rel="icon" href="img/profile.jpg" type="image/png">

  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- FontAwesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Space+Grotesk:wght@500;700&display=swap" rel="stylesheet">

  <!-- Style personnalisé -->
  <style>
    body { font-family: 'Inter', sans-serif; scroll-behavior: smooth; }
    h1, h2, h3, h4 { font-family: 'Space Grotesk', sans-serif; }
    .gradient-text {
      background: linear-gradient(90deg, #3b82f6, #8b5cf6);
      -webkit-background-clip: text;
      color: transparent;
    }
    .nav-link {
      position: relative;
      transition: color 0.3s;
    }
    .nav-link::after {
      content: '';
      position: absolute;
      bottom: -4px;
      left: 0;
      width: 0%;
      height: 2px;
      background: linear-gradient(90deg, #3b82f6, #8b5cf6);
      transition: width 0.3s;
    }
    .nav-link:hover::after {
      width: 100%;
    }
  </style>
</head>

<body class="antialiased bg-slate-50 dark:bg-slate-900 text-slate-900 dark:text-slate-200 transition-colors duration-300">

  <!-- Header -->
  <header class="fixed w-full z-50 bg-white/80 dark:bg-slate-900/80 backdrop-blur border-b border-slate-200 dark:border-slate-800 shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <nav class="flex justify-between h-16 items-center">
        
        <!-- Logo -->
        <a href="#home" class="text-2xl font-extrabold gradient-text tracking-tight">Alexvalinndongo</a>
        
        <!-- Menu Desktop -->
        <div class="hidden md:flex space-x-8 font-medium">
          <a href="#home" class="nav-link hover:text-blue-600 dark:hover:text-blue-400"><i class="fas fa-home mr-1"></i>Accueil</a>
          <a href="#about" class="nav-link hover:text-blue-600 dark:hover:text-blue-400"><i class="fas fa-user mr-1"></i>À propos</a>
          <a href="#skills" class="nav-link hover:text-blue-600 dark:hover:text-blue-400"><i class="fas fa-code mr-1"></i>Compétences</a>
          <a href="#projects" class="nav-link hover:text-blue-600 dark:hover:text-blue-400"><i class="fas fa-briefcase mr-1"></i>Projets</a>
          <a href="#services" class="nav-link hover:text-blue-600 dark:hover:text-blue-400"><i class="fas fa-cogs mr-1"></i>Services</a>
          <a href="#experience" class="nav-link hover:text-blue-600 dark:hover:text-blue-400"><i class="fas fa-graduation-cap mr-1"></i>Expérience</a>
          <a href="#contact" class="nav-link hover:text-blue-600 dark:hover:text-blue-400"><i class="fas fa-envelope mr-1"></i>Contact</a>
        </div>

        <!-- Actions -->
        <div class="flex items-center space-x-4">
          <!-- Bouton CV -->
          <a href="curriculum-vitae.pdf" download="CV_FullStack_Mobile_Alexvalinndongo.pdf" 
             class="px-4 py-2 rounded-full text-white bg-gradient-to-r from-blue-500 to-indigo-500 hover:scale-105 shadow-md flex items-center gap-2 transition-transform duration-300">
            <i class="fas fa-download"></i> <span>CV</span>
          </a>

          <!-- Bouton Dark mode -->
          <button id="darkToggle" class="p-2 rounded-full hover:bg-slate-200 dark:hover:bg-slate-700 transition">
            <i class="fas fa-moon text-slate-700 dark:text-yellow-400"></i>
          </button>
        </div>
      </nav>
    </div>
  </header>

  <!-- Hero Section -->
  <!--section id="home" class="pt-28 pb-16 text-center max-w-3xl mx-auto">
    <img src="img/profile.jpg" alt="Alex Ndongo" class="w-32 h-32 mx-auto rounded-full shadow-lg mb-6 border-4 border-indigo-500/20">
    <h1 class="text-4xl md:text-5xl font-extrabold gradient-text mb-3">Salut 👋, je suis Alex Ndongo</h1>
    <p class="text-lg text-slate-600 dark:text-slate-400 mb-6">Développeur FullStack Web & Mobile passionné par la création d’expériences numériques modernes et performantes.</p>
    <a href="#projects" class="px-6 py-3 bg-gradient-to-r from-blue-500 to-indigo-500 text-white rounded-full shadow-lg hover:scale-105 transition inline-flex items-center gap-2">
      <i class="fas fa-arrow-right"></i> Voir mes projets
    </a>
  </section>

 

  <!-- Script Dark Mode -->
  <script>
    const toggle = document.getElementById('darkToggle');
    toggle.addEventListener('click', () => {
      document.documentElement.classList.toggle('dark');
      localStorage.setItem('theme', document.documentElement.classList.contains('dark') ? 'dark' : 'light');
    });
    if(localStorage.getItem('theme') === 'dark') document.documentElement.classList.add('dark');
  </script>

</body>
</html>
