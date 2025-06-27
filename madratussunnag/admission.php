<?php
include 'header.php';
?>

<section class="bg-teal-600 text-white py-16 md:py-20 text-center relative overflow-hidden">
  <div class="absolute inset-0 bg-gradient-to-r from-teal-700 to-teal-500 opacity-80"></div>
  <div class="container mx-auto px-4 relative z-10">
    <h1 class="text-4xl md:text-5xl font-extrabold mb-4 animate-fade-in-up">ভর্তি তথ্য ও প্রক্রিয়া</h1>
    <p class="text-xl md:text-2xl mb-8 opacity-90 animate-fade-in-up delay-100">মাদরাসাতুস সুন্নাহ-এ আপনার ভর্তির যাত্রায় স্বাগতম।</p>
    <div class="flex flex-col sm:flex-row justify-center gap-4 animate-fade-in-up delay-200">
      <a href="online_admission.php" class="bg-white text-teal-700 px-8 py-4 rounded-lg shadow-lg hover:bg-gray-100 transition-all duration-300 font-semibold text-lg"> অনলাইনে আবেদন করুন </a>
      <a href="/admission-form.pdf" download class="border border-white text-white px-8 py-4 rounded-lg hover:bg-teal-700 hover:border-teal-700 transition-all duration-300 font-semibold text-lg"> আবেদন ফরম ডাউনলোড করুন </a>
    </div>
  </div>
  <svg class="absolute bottom-0 left-0 w-full h-24 text-gray-50" viewBox="0 0 1440 240" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 240H1440V0L720 240L0 0V240Z" fill="currentColor" />
  </svg>
</section>

<main class="max-w-6xl mx-auto px-4 py-16">
  <section id="apply-now" class="mb-16">
    <h2 class="text-3xl font-bold text-center text-teal-700 mb-10">ভর্তি প্রক্রিয়া</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
      <div class="bg-white p-6 rounded-lg shadow-lg text-center border-b-4 border-orange-500 hover:shadow-xl transition-shadow duration-300">
        <div class="text-5xl font-extrabold text-orange-500 mb-4">০১</div>
        <h3 class="text-xl font-semibold mb-3">আবেদন ফরম সংগ্রহ</h3>
        <p class="text-gray-700">অনলাইন অথবা মাদ্রাসার অফিস থেকে আবেদন ফরম সংগ্রহ করুন।</p>
      </div>
      <div class="bg-white p-6 rounded-lg shadow-lg text-center border-b-4 border-teal-500 hover:shadow-xl transition-shadow duration-300">
        <div class="text-5xl font-extrabold text-teal-500 mb-4">০২</div>
        <h3 class="text-xl font-semibold mb-3">ফর্ম পূরণ ও জমা</h3>
        <p class="text-gray-700">প্রয়োজনীয় সকল তথ্য ও নথি সংযুক্ত করে ফরম জমা দিন।</p>
      </div>
      <div class="bg-white p-6 rounded-lg shadow-lg text-center border-b-4 border-purple-500 hover:shadow-xl transition-shadow duration-300">
        <div class="text-5xl font-extrabold text-purple-500 mb-4">০৩</div>
        <h3 class="text-xl font-semibold mb-3">লিখিত ও মৌখিক পরীক্ষা</h3>
        <p class="text-gray-700">নির্ধারিত তারিখে ভর্তি পরীক্ষা ও সাক্ষাৎকার দিন।</p>
      </div>
      <div class="bg-white p-6 rounded-lg shadow-lg text-center border-b-4 border-green-500 hover:shadow-xl transition-shadow duration-300">
        <div class="text-5xl font-extrabold text-green-500 mb-4">০৪</div>
        <h3 class="text-xl font-semibold mb-3">ভর্তি নিশ্চিতকরণ</h3>
        <p class="text-gray-700">ফলাফল প্রকাশের পর নির্বাচিতদের ভর্তি প্রক্রিয়া সম্পন্ন করুন।</p>
      </div>
    </div>
  </section>

  <section class="grid grid-cols-1 lg:grid-cols-2 gap-12 mb-16">
    <div class="bg-white p-8 rounded-lg shadow-lg border-l-4 border-blue-500">
      <h3 class="text-2xl font-bold text-blue-700 mb-6">ভর্তির যোগ্যতা</h3>
      <ul class="list-disc list-inside space-y-3 text-gray-700">
        <li>সর্বশেষ পাসের সার্টিফিকেট/মার্কশীট।</li>
        <li>বয়স ন্যূনতম ১০ বছর (শ্রেণীভিত্তিক ভিন্ন হতে পারে)।</li>
        <li>ইসলামী শিক্ষার প্রতি আগ্রহ ও মৌলিক জ্ঞান।</li>
        <li>শারীরিক ও মানসিকভাবে সুস্থ।</li>
        <li>আগের মাদ্রাসার ছাড়পত্র (যদি প্রযোজ্য হয়)।</li>
      </ul>
    </div>

    <div class="bg-white p-8 rounded-lg shadow-lg border-l-4 border-red-500">
      <h3 class="text-2xl font-bold text-red-700 mb-6">প্রয়োজনীয় কাগজপত্র</h3>
      <ul class="list-disc list-inside space-y-3 text-gray-700">
        <li>পাসপোর্ট সাইজের ছবি (৪ কপি)।</li>
        <li>জন্ম নিবন্ধন সনদ/জাতীয় পরিচয়পত্রের ফটোকপি।</li>
        <li>অভিভাবকের জাতীয় পরিচয়পত্রের ফটোকপি।</li>
        <li>পূর্ববর্তী মাদ্রাসার ট্রান্সক্রিপ্ট/সনদপত্র (যদি থাকে)।</li>
        <li>মেডিকেল সার্টিফিকেট (যদি প্রয়োজন হয়)।</li>
      </ul>
    </div>
  </section>

  <section class="mb-16 bg-blue-50 p-8 rounded-lg shadow-md text-center">
    <h2 class="text-3xl font-bold text-blue-700 mb-6">গুরুত্বপূর্ণ তারিখসমূহ</h2>
    <div class="flex flex-col md:flex-row justify-around items-center gap-6">
      <div class="flex items-center space-x-3">
        <svg class="h-8 w-8 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
        </svg>
        <div>
          <p class="text-gray-600 text-lg font-medium">আবেদন শুরু:</p>
          <p class="text-xl font-semibold text-blue-800">০১ জুলাই ২০২৫</p>
        </div>
      </div>
      <div class="flex items-center space-x-3">
        <svg class="h-8 w-8 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
        <div>
          <p class="text-gray-600 text-lg font-medium">আবেদনের শেষ তারিখ:</p>
          <p class="text-xl font-semibold text-blue-800">৩১ জুলাই ২০২৫</p>
        </div>
      </div>
      <div class="flex items-center space-x-3">
        <svg class="h-8 w-8 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
        </svg>
        <div>
          <p class="text-gray-600 text-lg font-medium">লিখিত ও মৌখিক পরীক্ষা:</p>
          <p class="text-xl font-semibold text-blue-800">১০ আগস্ট ২০২৫</p>
        </div>
      </div>
    </div>
  </section>

  <section class="mb-16">
    <h2 class="text-3xl font-bold text-center text-teal-700 mb-10">আমাদের কোর্সসমূহ</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      <div class="bg-white p-6 rounded-lg shadow-md border-b-4 border-yellow-500">
        <h3 class="text-xl font-semibold mb-3 text-gray-800">হিফজুল কুরআন</h3>
        <p class="text-gray-700 mb-4">পবিত্র কুরআন হেফজ করার জন্য নিবেদিত এই কোর্সটি ছাত্রদেরকে তাজবীদ ও মাখরাজ সহকারে কুরআন মুখস্থ করতে সহায়তা করে।</p>
        <a href="/courses#hifz" class="text-yellow-600 hover:underline">বিস্তারিত জানুন &rarr;</a>
      </div>
      <div class="bg-white p-6 rounded-lg shadow-md border-b-4 border-green-500">
        <h3 class="text-xl font-semibold mb-3 text-gray-800">কিতাব বিভাগ (দাখিল/আলিম সমমান)</h3>
        <p class="text-gray-700 mb-4">ইসলামী আইন, হাদীস, তাফসীর, আরবি সাহিত্য ও ব্যাকরণের উপর গভীর জ্ঞান অর্জনের জন্য এটি একটি পূর্ণাঙ্গ পাঠ্যক্রম।</p>
        <a href="/courses#kitab" class="text-green-600 hover:underline">বিস্তারিত জানুন &rarr;</a>
      </div>
    </div>
  </section>

  <section class="text-center py-12 bg-teal-50 rounded-lg shadow-md">
    <h2 class="text-3xl font-bold text-teal-700 mb-4">আরো প্রশ্ন আছে?</h2>
    <p class="text-lg text-gray-700 mb-6">আমাদের ভর্তি অফিসের সাথে যোগাযোগ করুন:</p>
    <div class="flex flex-col md:flex-row justify-center items-center gap-6">
      <a href="tel:+8801XXXXXXXXX" class="text-teal-600 hover:text-teal-800 text-lg font-medium inline-flex items-center">
        <svg class="w-6 h-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.135l-2.54 1.838a11.925 11.925 0 005.572 5.572l1.838-2.54a1 1 0 011.135-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
        </svg>
        +880 1XXXXXXXXX
      </a>
      <a href="mailto:admission@madrassatussunnah.edu" class="text-teal-600 hover:text-teal-800 text-lg font-medium inline-flex items-center">
        <svg class="w-6 h-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
        </svg>
        admission@madrassatussunnah.edu
      </a>
    </div>
  </section>
</main>

<?php include 'footer.php'; ?>