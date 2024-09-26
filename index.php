<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welkom King</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <style>
    @media (prefers-color-scheme: dark) {
      html {
        color-scheme: dark;
      }
    }
    /* Smooth transition on hover */
    .transition-all {
      transition: all 0.3s ease-in-out;
    }
    .hover-scale:hover {
      transform: scale(1.05);
    }
    /* Full width image styling */
    .hero-image {
      height: 500px;
      width: 100%;
      object-fit: cover;
    }
  </style>
</head>
<body class="bg-gray-100 dark:bg-gray-900 text-gray-900 dark:text-gray-100">
<?php include 'header.php'; ?>

  <!-- Hero Section -->
  <section class="relative">
    <!-- Full width image -->
    <img src="pict/rumah.jpg" alt="Hero Image" class="hero-image">
    
    <!-- Text Section -->
    <div class="absolute inset-x-0 bottom-0 text-center bg-gradient-to-t from-gray-900/80 to-transparent py-20">
      <div class="container mx-auto">
        <h2 class="text-4xl font-bold leading-snug text-white transition-all hover-scale">
          Build Your Future with Our Professional Tools
        </h2>
        <p class="mt-4 text-lg text-gray-300">
          Our platform offers cutting-edge solutions for developers and businesses alike. Start building today and unlock your potential!
        </p>
        <div class="mt-8">
          <a href="#" class="px-6 py-3 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 transition-all">Get Started</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Features Section -->
  <section class="py-20 bg-white dark:bg-gray-800">
    <div class="container mx-auto text-center">
      <h3 class="text-3xl font-semibold text-gray-800 dark:text-white" data-aos="fade-up">Our Features</h3>
      <p class="mt-4 text-gray-600 dark:text-gray-300" data-aos="fade-up">
        Discover what makes our platform stand out from the rest.
      </p>
      <div class="mt-10 grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Feature 1 -->
        <div class="p-6 bg-gray-100 dark:bg-gray-700 rounded-md shadow-md hover-scale transition-all" data-aos="fade-right">
          <div class="mb-4">
            <svg class="w-12 h-12 text-indigo-600 mx-auto" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354A4 4 0 015 6.343V19l-2 2m16-2l-2-2V6.343a4 4 0 00-7 0" />
            </svg>
          </div>
          <h4 class="text-lg font-bold text-gray-800 dark:text-white">Secure Cloud Storage</h4>
          <p class="mt-2 text-gray-600 dark:text-gray-300">
            Safely store your data with our industry-leading encryption methods.
          </p>
        </div>
        <!-- Feature 2 -->
        <div class="p-6 bg-gray-100 dark:bg-gray-700 rounded-md shadow-md hover-scale transition-all" data-aos="fade-up">
          <div class="mb-4">
            <svg class="w-12 h-12 text-indigo-600 mx-auto" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16v4m8-4v4m-8-12a4 4 0 118 0v4H8V8z" />
            </svg>
          </div>
          <h4 class="text-lg font-bold text-gray-800 dark:text-white">24/7 Support</h4>
          <p class="mt-2 text-gray-600 dark:text-gray-300">
            Our team is always ready to help with any questions or concerns.
          </p>
        </div>
        <!-- Feature 3 -->
        <div class="p-6 bg-gray-100 dark:bg-gray-700 rounded-md shadow-md hover-scale transition-all" data-aos="fade-left">
          <div class="mb-4">
            <svg class="w-12 h-12 text-indigo-600 mx-auto" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1V9h1v2h1v5zM12 19v1m0-11a4 4 0 110 8 4 4 0 010-8z" />
            </svg>
          </div>
          <h4 class="text-lg font-bold text-gray-800 dark:text-white">Advanced Analytics</h4>
          <p class="mt-2 text-gray-600 dark:text-gray-300">
            Gain insights into your business with detailed data tracking.
          </p>
        </div>
      </div>
    </div>
  </section>

<!-- Milestone Section -->
<section class="py-20 bg-gray-900 text-white">
  <div class="container mx-auto text-center">
    <!-- Section Title and Description -->
    <h3 class="text-sm font-semibold text-indigo-400" data-aos="fade-up" >Our track record</h3>
    <h2 class="text-4xl font-bold mt-2 transition-all hover-scale" data-aos="fade-up" >Trusted by thousands of developers worldwide</h2>
    <p class="mt-4 max-w-2xl mx-auto text-gray-400" data-aos="fade-up">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.
    </p>

    <!-- Milestone Stats with interactive hover effects -->
    <div class="mt-12 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
      <!-- Stat 1 -->
      <div class="transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-110" data-aos="fade-up" data-aos-delay="100">
        <h3 class="text-4xl font-bold counter" data-target="8000">0</h3>
        <p class="mt-2 text-gray-400">Developers on the platform</p>
      </div>
      <!-- Stat 2 -->
      <div class="transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-110" data-aos="fade-up" data-aos-delay="200">
        <h3 class="text-4xl font-bold counter" data-target="900000000">0</h3>
        <p class="mt-2 text-gray-400">Daily requests</p>
      </div>
      <!-- Stat 3 -->
      <div class="transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-110" data-aos="fade-up" data-aos-delay="300">
        <h3 class="text-4xl font-bold counter" data-target="99.9">0.0</h3>
        <p class="mt-2 text-gray-400">Uptime guarantee</p>
      </div>
      <!-- Stat 4 -->
      <div class="transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-110" data-aos="fade-up" data-aos-delay="400">
        <h3 class="text-4xl font-bold counter" data-target="12000000">0</h3>
        <p class="mt-2 text-gray-400">Projects deployed</p>
      </div>
    </div>
  </div>
</section>

<script>
  AOS.init();  // Initialize AOS animation

  // Counter Animation Script
  const counters = document.querySelectorAll('.counter');
  const speed = 200; // The lower the slower

  counters.forEach(counter => {
    const updateCount = () => {
      const target = +counter.getAttribute('data-target');
      const count = +counter.innerText;

      const inc = target / speed;

      if(count < target) {
        counter.innerText = Math.ceil(count + inc);
        setTimeout(updateCount, 1);
      } else {
        counter.innerText = target;
      }
    };

    updateCount();
  });
</script>

<!-- Testimonials Section -->
<section class="py-20 bg-gray-100 dark:bg-gray-900">
  <div class="container mx-auto text-center" data-aos="fade-up">
    <h3 class="text-3xl font-semibold text-gray-800 dark:text-white">What Our Clients Say</h3>
    <div class="mt-10 grid grid-cols-1 md:grid-cols-3 gap-8">
      <!-- Testimonial 1 -->
      <div class="p-6 bg-white dark:bg-gray-800 rounded-md shadow-md hover-scale transition-all" data-aos="zoom-in">
        <!-- Avatar -->
        <div class="flex justify-center mb-4">
          <img src="pict/naruto.jpeg" alt="Avatar Jane Doe" class="w-20 h-20 rounded-full shadow-lg">
        </div>
        <p class="text-gray-600 dark:text-gray-300 italic">
          "Seorang ninja tidak pernah menarik kata katanya."
        </p>
        <h5 class="mt-4 text-lg font-bold text-gray-800 dark:text-white">- Naruto, Kang Ceramah</h5>
      </div>
      <!-- Testimonial 2 -->
      <div class="p-6 bg-white dark:bg-gray-800 rounded-md shadow-md hover-scale transition-all" data-aos="zoom-in">
        <!-- Avatar -->
        <div class="flex justify-center mb-4">
          <img src="pict/tanjiro.jpeg" alt="Avatar John Smith" class="w-20 h-20 rounded-full shadow-lg">
        </div>
        <p class="text-gray-600 dark:text-gray-300 italic">
          "Kaminari no kokyu ichi no kata hekireki Issen."
        </p>
        <h5 class="mt-4 text-lg font-bold text-gray-800 dark:text-white">- Tanjiru, Fans Michael Jackson</h5>
      </div>
      <!-- Testimonial 3 -->
      <div class="p-6 bg-white dark:bg-gray-800 rounded-md shadow-md hover-scale transition-all" data-aos="zoom-in">
        <!-- Avatar -->
        <div class="flex justify-center mb-4">
          <img src="pict/ryoyamada.jpg" alt="Avatar Sarah Lee" class="w-20 h-20 rounded-full shadow-lg">
        </div>
        <p class="text-gray-600 dark:text-gray-300 italic">
          "Pinjam dulu seratus."
        </p>
        <h5 class="mt-4 text-lg font-bold text-gray-800 dark:text-white">-Ryo Yamada, Kang Ngutang</h5>
      </div>
    </div>
  </div>
</section>



<?php include 'footer.php'; ?>
<script>
  AOS.init();
</script>
</body>
</html>
