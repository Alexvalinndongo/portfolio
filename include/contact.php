<!-- Contact Section -->
<section id="contact" class="py-24 px-6 sm:px-10 lg:px-20 bg-gradient-to-r from-blue-600 to-blue-500 text-white">
  <div class="max-w-7xl mx-auto">

    <!-- Section Title -->
    <div class="text-center mb-20" data-aos="fade-down">
      <span class="text-sm font-semibold tracking-wider text-blue-200 uppercase">Contact</span>
      <h2 class="text-4xl md:text-5xl font-extrabold mt-3">
        Travaillons <span class="gradient-text-inverse">ensemble</span>
      </h2>
      <p class="mt-4 max-w-2xl mx-auto text-blue-100">
        Vous avez un projet ou une question ? N'hésitez pas à me contacter ! Je serai ravi d'échanger avec vous.
      </p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">

      <!-- Contact Form -->
      <div class="bg-white bg-opacity-10 backdrop-filter backdrop-blur-lg p-8 rounded-2xl border border-white border-opacity-20 shadow-lg" data-aos="fade-right">
        <h3 class="text-xl font-bold mb-6 text-gray-100">Envoyez-moi un message</h3>

        <div id="formMessage" class="mb-4 text-center p-3 rounded-lg hidden"></div>

        <form id="contactForm" method="POST" class="space-y-6" novalidate>
          <!-- Name -->
          <div>
            <label for="name" class="block text-blue-100 text-sm font-medium mb-2">Nom complet</label>
            <input type="text" id="name" name="name" placeholder="Votre nom"
                   class="w-full px-4 py-3 bg-white bg-opacity-10 border border-white border-opacity-20 rounded-lg focus:outline-none focus:ring-2 focus:ring-white placeholder-blue-200 text-white">
            <div id="nameError" class="text-red-400 text-xs mt-1 hidden"></div>
          </div>

          <!-- Email -->
          <div>
            <label for="email" class="block text-blue-100 text-sm font-medium mb-2">Adresse email</label>
            <input type="email" id="email" name="email" placeholder="votre@email.com"
                   class="w-full px-4 py-3 bg-white bg-opacity-10 border border-white border-opacity-20 rounded-lg focus:outline-none focus:ring-2 focus:ring-white placeholder-blue-200 text-white">
            <div id="emailError" class="text-red-400 text-xs mt-1 hidden"></div>
          </div>

          <!-- Message -->
          <div>
            <label for="message" class="block text-blue-100 text-sm font-medium mb-2">Message</label>
            <textarea id="message" name="message" rows="5" placeholder="Décrivez votre projet..."
                      class="w-full px-4 py-3 bg-white bg-opacity-10 border border-white border-opacity-20 rounded-lg focus:outline-none focus:ring-2 focus:ring-white placeholder-blue-200 text-white"></textarea>
            <div id="messageError" class="text-red-400 text-xs mt-1 hidden"></div>
          </div>

          <!-- Submit Button -->
          <button type="submit" id="sendMessageButton"
                  class="w-full bg-white text-blue-600 hover:bg-gray-100 font-medium py-3 px-6 rounded-xl transition duration-300 transform hover:-translate-y-1 shadow-md hover:shadow-lg flex justify-center items-center space-x-2">
            <span id="buttonText">Envoyer le message</span>
            <svg id="buttonLoader" class="w-5 h-5 text-blue-600 animate-spin hidden" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
              <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
              <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v4a4 4 0 00-4 4H4z"></path>
            </svg>
          </button>
        </form>
      </div>

      <!-- Contact Info -->
      <div class="space-y-8" data-aos="fade-left">
        <h3 class="text-xl font-bold mb-6 text-gray-100">Informations de contact</h3>
        <div class="space-y-6">
          <div class="flex items-start">
            <div class="flex-shrink-0 bg-white bg-opacity-20 p-3 rounded-lg mr-4">
              <i class="fas fa-envelope text-white"></i>
            </div>
            <div>
              <h4 class="font-semibold text-blue-200">Email</h4>
              <p class="font-medium text-white">ndongovalin@gmail.com</p>
            </div>
          </div>
          <div class="flex items-start">
            <div class="flex-shrink-0 bg-white bg-opacity-20 p-3 rounded-lg mr-4">
              <i class="fas fa-phone-alt text-white"></i>
            </div>
            <div>
              <h4 class="font-semibold text-blue-200">Téléphone</h4>
              <p class="font-medium text-white">+237 650 304 752</p>
            </div>
          </div>
          <div class="flex items-start">
            <div class="flex-shrink-0 bg-white bg-opacity-20 p-3 rounded-lg mr-4">
              <i class="fas fa-map-marker-alt text-white"></i>
            </div>
            <div>
              <h4 class="font-semibold text-blue-200">Localisation</h4>
              <p class="font-medium text-white">Yaoundé, Cameroun</p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Animation JS -->
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
AOS.init({ duration: 1000, once: true, offset: 100 });

// Formulaire AJAX
document.getElementById('contactForm').addEventListener('submit', function(e) {
  e.preventDefault();

  const form = this;
  const name = document.getElementById('name');
  const email = document.getElementById('email');
  const message = document.getElementById('message');

  const nameError = document.getElementById('nameError');
  const emailError = document.getElementById('emailError');
  const messageError = document.getElementById('messageError');
  const formMessage = document.getElementById('formMessage');
  const button = document.getElementById('sendMessageButton');
  const buttonText = document.getElementById('buttonText');
  const buttonLoader = document.getElementById('buttonLoader');

  let hasError = false;

  [name, email, message].forEach(input => input.classList.remove('border-red-500'));
  [nameError, emailError, messageError].forEach(err => {
    err.classList.add('hidden');
    err.innerHTML = '';
  });
  formMessage.classList.add('hidden');

  if (!name.value.trim()) { nameError.innerHTML = 'Le nom est requis.'; nameError.classList.remove('hidden'); name.classList.add('border-red-500'); hasError = true; }
  if (!email.value.trim()) { emailError.innerHTML = "L'email est requis."; emailError.classList.remove('hidden'); email.classList.add('border-red-500'); hasError = true; }
  else if(!/^[^ ]+@[^ ]+\.[a-z]{2,3}$/.test(email.value.trim())) { emailError.innerHTML = "Adresse email invalide."; emailError.classList.remove('hidden'); email.classList.add('border-red-500'); hasError = true; }
  if (!message.value.trim()) { messageError.innerHTML = 'Le message est requis.'; messageError.classList.remove('hidden'); message.classList.add('border-red-500'); hasError = true; }

  if(hasError){ window.scrollTo({ top: form.offsetTop - 20, behavior: 'smooth' }); return; }

  buttonText.classList.add('hidden'); buttonLoader.classList.remove('hidden'); button.disabled = true;

  const formData = new FormData(form);

  fetch('process_contact.php', { method: 'POST', body: formData })
  .then(response => response.json())
  .then(data => {
    if(data.success){
      formMessage.innerHTML = data.message;
      formMessage.className = "mb-4 text-center p-3 rounded-lg block bg-green-500 bg-opacity-80 animate-pulse transition-all";
      form.reset();
    } else {
      formMessage.innerHTML = data.message;
      formMessage.className = "mb-4 text-center p-3 rounded-lg block bg-red-500 bg-opacity-80 transition-all";
    }
    buttonText.classList.remove('hidden'); buttonLoader.classList.add('hidden'); button.disabled = false;
    window.scrollTo({ top: formMessage.offsetTop - 20, behavior: 'smooth' });
  })
  .catch(error => {
    formMessage.innerHTML = "Erreur serveur. Veuillez réessayer.";
    formMessage.className = "mb-4 text-center p-3 rounded-lg block bg-red-500 bg-opacity-80 transition-all";
    buttonText.classList.remove('hidden'); buttonLoader.classList.add('hidden'); button.disabled = false;
  });
});
</script>

<script>
document.getElementById('contactForm').addEventListener('submit', function(e) {
  e.preventDefault();
  const form = e.target;
  const data = new FormData(form);

  fetch('process_contact.php', { method: 'POST', body: data })
    .then(res => res.json())
    .then(data => {
      const msgDiv = document.getElementById('formMessage');
      msgDiv.innerText = data.message;
      msgDiv.className = data.success ? 'text-green-500' : 'text-red-500';
    })
    .catch(err => console.error(err));
});
</script>