<?php
include 'header.php';
?>

<!-- Hero Section -->
<section class="bg-[#FFF7ED] items-center py-6 md:py-6 relative overflow-hidden">
  <div class="max-w-6xl mx-auto px-4 grid grid-cols-1 lg:grid-cols-7 gap-8 items-center justify-center relative z-10">
    <div class="lg:col-span-5 flex flex-col items-center justify-center text-center lg:text-left">
      <div class="space-y-4 mb-8 lg:mb-0">
        <h1 class="text-2xl font-semibold text-gray-800">মাদরাসাতুস সুন্নাহ</h1>
        <h2 class="text-4xl md:text-5xl font-bold text-orange-500 leading-tight">ইলমে দ্বীন শিক্ষার ইনস্টিটিউট</h2>
        <p class="text-gray-700 text-base md:text-lg">সকল প্রশংসা আল্লাহর। অব্যাহত শান্তি বর্ষিত হোক প্রিয়নবী মুহাম্মদ ﷺ (সাল্লাল্লাহু আলাইহি ওয়া সাল্লাম)-এর প্রতি।</p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
          <a href="#" class="bg-teal-600 text-white px-6 py-3 rounded-md hover:bg-teal-700 transition"> কোর্স সম্পর্কে জানুন </a>
          <a href="#" class="border border-gray-400 text-gray-700 px-6 py-3 rounded-md hover:bg-gray-100 transition"> ভর্তি তথ্য জানুন </a>
        </div>
      </div>
    </div>

    <div class="lg:col-span-2 bg-white p-6 rounded-lg shadow-xl flex flex-col border-t-4 border-teal-600">
      <div class="text-center mb-6">
        <h3 class="text-2xl font-bold text-gray-800">গুরুত্বপূর্ণ আপডেট</h3>
      </div>

      <div class="relative overflow-y-auto pr-2 -mr-2 min-h-[250px] max-h-[200px]">
        <div id="tab-notices" class="tab-content active-tab space-y-4 absolute inset-0">
          <a href="/notices/notice-details-1" class="block p-3 bg-gray-50 rounded-md hover:bg-gray-100 transition-colors duration-200">
            <p class="text-sm text-gray-500 mb-1">২৫ জুন ২০২৫</p>
            <h4 class="text-base font-semibold text-gray-800 leading-tight">রমজানের ছুটির নোটিশ</h4>
          </a>
          <a href="/notices/notice-details-2" class="block p-3 bg-gray-50 rounded-md hover:bg-gray-100 transition-colors duration-200">
            <p class="text-sm text-gray-500 mb-1">২০ জুন ২০২৫</p>
            <h4 class="text-base font-semibold text-gray-800 leading-tight">নতুন শিক্ষাবর্ষে ভর্তি বিজ্ঞপ্তি</h4>
          </a>
          <a href="/notices/notice-details-3" class="block p-3 bg-gray-50 rounded-md hover:bg-gray-100 transition-colors duration-200">
            <p class="text-sm text-gray-500 mb-1">১৫ জুন ২০২৫</p>
            <h4 class="text-base font-semibold text-gray-800 leading-tight">ছুটির দিনের রুটিন পরিবর্তন</h4>
          </a>
        </div>
      </div>

      <div class="text-center mt-6">
        <a href="/notices" id="view-all-button" class="text-teal-600 hover:text-teal-700 font-medium inline-flex items-center">
          সকল নোটিশ দেখুন
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
          </svg>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- About Us Section -->
<section>
  <div class="max-w-6xl mx-auto px-4 py-16">
    <img src="assets/madrasatus-sunnah-logo.svg" alt="" class="h-[4.5rem] w-auto mx-auto mb-8" />
    <h2 class="text-3xl font-bold text-center mb-6">মাদরাসাতুস সুন্নাহ কী ও কেন?</h2>
    <p class="text-gray-700 text-lg leading-relaxed text-center mx-auto px-[6rem]">
      সমাজে বিদ্যমান বিভিন্ন শিক্ষাধারার মধ্যে মাদরাসা শিক্ষাধারা সুপ্রাচীন এবং কল্যাণমুখী শিক্ষার ধারক হিসেবে সুবিদিত। এই শিক্ষাধারা ইসলামী জীবন—দর্শনের আলোকে উপমহাদেশে গড়ে তুলছে পরকালমুখী মূল্যবোধসম্পন্ন আদর্শ মানুষ। কিন্তু এই শিক্ষাধারা নৈতিকতা ও মূল্যবোধের মানদন্ডে উত্তীর্ণ একদল আদর্শ মানুষ
      ও দক্ষ আলেম তৈরিতে সফল হলেও এর দ্বারা সময়োপযোগী ও সৃজনশীল মানুষ সেভাবে তৈরি হচ্ছে না। পক্ষান্তরে প্রচলিত সাধারণ শিক্ষাধারা আমাদের সন্তানদের পার্থিব শিক্ষায় শিক্ষিত করছে বটে, কিন্তু এই মাধ্যমে নৈতিকতা এবং প্রকৃত জীবনবোধসম্পন্ন মানুষ গড়ে উঠছে না। এজন্য আমরা মনে করছি এরকম একটি
      শিক্ষাপ্রতিষ্ঠান দরকার যেটি উন্নত চরিত্রসমৃদ্ধ কুরআন—সুন্নাহর গভীর জ্ঞানসম্পন্ন আলেম তৈরি করবে, যারা জাগতিক জ্ঞান—বিজ্ঞানেও প্রয়োজনীয় ধারণা রাখবে। এই লক্ষ্য বাস্তবায়নেই মাদরাসাতুস সুন্নাহর অভিযাত্রা।
    </p>
  </div>
</section>

<section class="bg-[#F0FDF4] py-16 md:py-24 relative overflow-hidden">
  <div class="max-w-6xl mx-auto px-4 grid grid-cols-1 md:grid-cols-2 items-center gap-12">
    <!-- Left: Image -->
    <div class="relative">
      <img src="https://madrasatussunnah.org/_next/image?url=https%3A%2F%2Fcdn.madrasatussunnah.org%2Fgallery%2F0005.webp&w=828&q=75" alt="Madrasah Campus" class="rounded-xl shadow-lg w-full max-h-[400px] object-cover" />
      <div class="absolute bottom-4 left-4 bg-white px-4 py-2 rounded-lg shadow text-sm text-teal-800 font-semibold">প্রতিষ্ঠিত: ২০১৫ সাল</div>
    </div>

    <!-- Right: Content -->
    <div>
      <h2 class="text-3xl md:text-4xl font-bold text-teal-800 mb-4 leading-snug">মাদ্রাসাতুস সুন্নাহ – একটি দ্বীনি শিক্ষার কেন্দ্র</h2>
      <p class="text-gray-700 text-base md:text-lg leading-relaxed mb-6">
        মাদ্রাসাতুস সুন্নাহ একটি নির্ভরযোগ্য ইসলামী শিক্ষা প্রতিষ্ঠান, যেখানে আধুনিক ও দ্বীনি শিক্ষার সমন্বয়ে একটি আদর্শ শিক্ষাব্যবস্থা গড়ে তোলা হয়েছে। হিফজ, কিরাত, হাদীস ও ফিকহের পাশাপাশি নৈতিক উন্নয়ন ও চারিত্রিক গঠনে বিশেষ গুরুত্ব দেওয়া হয়।
      </p>
      <ul class="text-gray-600 space-y-2">
        <li class="flex items-center gap-2">
          <i data-feather="check-circle" class="h-5 w-5 text-teal-600"></i>
          অভিজ্ঞ ও যোগ্য মুআল্লিমগণ দ্বারা পাঠদান
        </li>
        <li class="flex items-center gap-2">
          <i data-feather="check-circle" class="h-5 w-5 text-teal-600"></i>
          হিফজ ও আরবি ভাষা শিক্ষায় বিশেষ কোর্স
        </li>
        <li class="flex items-center gap-2">
          <i data-feather="check-circle" class="h-5 w-5 text-teal-600"></i>
          আবাসিক ও অনাবাসিক শিক্ষার্থীদের জন্য আলাদা ব্যবস্থা
        </li>
      </ul>
      <!-- Button -->
      <div class="mt-6">
        <button class="text-white bg-teal-600 hover:bg-teal-700 px-4 py-2 rounded-md">আরো দেখুন</button>
      </div>
    </div>
  </div>
</section>

<section class="bg-gradient-to-r from-teal-50 to-white py-16 md:py-24">
  <div class="max-w-6xl mx-auto px-4 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
    <div class="order-2 md:order-1 text-center animate-slide-in-left">
      <img src="https://madrasatussunnah.org/_next/image?url=https%3A%2F%2Fcdn.madrasatussunnah.org%2Fgallery%2F0005.webp&w=828&q=75" alt="Illustrative image of Madrasa" class="w-full h-auto rounded-lg shadow-xl transform hover:scale-105 transition-transform duration-300 object-cover" />
    </div>

    <div class="order-1 md:order-2 text-gray-800 animate-fade-in-up">
      <h2 class="text-4xl font-extrabold text-teal-700 mb-6 leading-tight">
        <span class="block text-2xl font-semibold text-gray-600 mb-2">আমাদের লক্ষ্য ও উদ্দেশ্য</span>
        মাদরাসাতুস সুন্নাহ: জ্ঞান ও নৈতিকতার সমন্বয়
      </h2>
      <p class="text-lg leading-relaxed mb-6">
        সমাজে বিদ্যমান বিভিন্ন শিক্ষাধারার মধ্যে মাদরাসা শিক্ষাধারা সুপ্রাচীন এবং কল্যাণমুখী শিক্ষার ধারক হিসেবে সুবিদিত। এই শিক্ষাধারা ইসলামী জীবন—দর্শনের আলোকে উপমহাদেশে গড়ে তুলছে পরকালমুখী মূল্যবোধসম্পন্ন আদর্শ মানুষ। কিন্তু এই শিক্ষাধারা নৈতিকতা ও মূল্যবোধের মানদন্ডে উত্তীর্ণ একদল আদর্শ
        মানুষ ও দক্ষ আলেম তৈরিতে সফল হলেও এর দ্বারা সময়োপযোগী ও সৃজনশীল মানুষ সেভাবে তৈরি হচ্ছে না।
      </p>
      <p class="text-lg leading-relaxed mb-6">
        পক্ষান্তরে প্রচলিত সাধারণ শিক্ষাধারা আমাদের সন্তানদের পার্থিব শিক্ষায় শিক্ষিত করছে বটে, কিন্তু এই মাধ্যমে নৈতিকতা এবং প্রকৃত জীবনবোধসম্পন্ন মানুষ গড়ে উঠছে না। এজন্য আমরা মনে করছি এরকম একটি শিক্ষাপ্রতিষ্ঠান দরকার যেটি উন্নত চরিত্রসমৃদ্ধ কুরআন—সুন্নাহর গভীর জ্ঞানসম্পন্ন আলেম তৈরি করবে,
        যারা জাগতিক জ্ঞান—বিজ্ঞানেও প্রয়োজনীয় ধারণা রাখবে। এই লক্ষ্য বাস্তবায়নেই মাদরাসাতুস সুন্নাহর অভিযাত্রা।
      </p>
      <div class="mt-8">
        <a href="/about" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-lg text-white bg-teal-600 hover:bg-teal-700 transition duration-300 ease-in-out transform hover:scale-105">
          আমাদের সম্পূর্ণ গল্প পড়ুন
          <svg class="ml-2 -mr-1 h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
          </svg>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Why Us Section -->
<section class="bg-gradient-to-b from-white to-teal-50 py-16 md:py-24">
  <div class="max-w-6xl mx-auto px-4">
    <div class="text-center mb-16 max-w-3xl mx-auto">
      <h2 class="text-4xl md:text-5xl font-extrabold text-teal-800 mb-4 animate-fade-in-up">কেন আমাদেরকে দ্বীন শিক্ষার সহযোগী নিবেন?</h2>
      <p class="text-lg text-gray-700 leading-relaxed animate-fade-in-up delay-100">আমাদের মাদ্রাসার এই নিজস্ব প্রধান বৈশিষ্ট্য ছাড়াও আরো অন্যান্য বৈশিষ্ট্য রয়েছে যা শিক্ষার্থীদের সার্বিক বিকাশে সহায়তা করে।</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
      <div class="bg-white p-8 rounded-xl shadow-lg border-b-4 border-teal-600 flex flex-col items-start">
        <div class="flex items-center mb-6">
          <span class="text-5xl font-extrabold text-teal-300 mr-3">০১</span>
          <div class="p-3 bg-teal-100 text-teal-600 rounded-full">
            <i data-feather="book-open" class="h-8 w-8"></i>
          </div>
        </div>
        <h3 class="text-2xl font-bold text-gray-800 mb-4">হিফজুল কুরআন</h3>
        <p class="text-gray-700 leading-relaxed flex-grow mb-6">কুরআন ও সুন্নাহর মূল্য (মূলপাঠ) আয়ত্ত করা ছাড়া দ্বীন আসলে অসম্পূর্ণ। একজন হাফেজকে মূল কুরআনের মৌলিক পাঠ হিসাবে...</p>
        <a href="#" class="inline-flex items-center text-teal-600 hover:text-teal-800 font-semibold group">
          আরও দেখুন
          <i data-feather="arrow-right" class="ml-2 h-5 w-5 transform group-hover:translate-x-1 transition-transform duration-200"></i>
        </a>
      </div>

      <div class="bg-white p-8 rounded-xl shadow-lg border-b-4 border-orange-600 flex flex-col items-start">
        <div class="flex items-center mb-6">
          <span class="text-5xl font-extrabold text-orange-300 mr-3">০২</span>
          <div class="p-3 bg-orange-100 text-orange-600 rounded-full">
            <i data-feather="globe" class="h-8 w-8"></i>
          </div>
        </div>
        <h3 class="text-2xl font-bold text-gray-800 mb-4">আরবি, ইংরেজি, বাংলা দক্ষতা</h3>
        <p class="text-gray-700 leading-relaxed flex-grow mb-6">ভাষাগুলো সম্পর্কে সচেতনতা ও ইফেক্টিভ ব্যবহারের জন্য ভাষা-দক্ষতা অত্যন্ত গুরুত্বপূর্ণ। অন্যান্য মাদ্রাসাসুল কুরআন শিক্ষার্থীদের ভাষা-দক্ষতা বিশেষভাবে...</p>
        <a href="#" class="inline-flex items-center text-orange-600 hover:text-orange-800 font-semibold group">
          আরও দেখুন
          <i data-feather="arrow-right" class="ml-2 h-5 w-5 transform group-hover:translate-x-1 transition-transform duration-200"></i>
        </a>
      </div>

      <div class="bg-white p-8 rounded-xl shadow-lg border-b-4 border-blue-600 flex flex-col items-start">
        <div class="flex items-center mb-6">
          <span class="text-5xl font-extrabold text-blue-300 mr-3">০৩</span>
          <div class="p-3 bg-blue-100 text-blue-600 rounded-full">
            <i data-feather="heart" class="h-8 w-8"></i>
          </div>
        </div>
        <h3 class="text-2xl font-bold text-gray-800 mb-4">আখলাক ও মূল্যবোধ</h3>
        <p class="text-gray-700 leading-relaxed flex-grow mb-6">ইসলামের মৌলিক শিক্ষাসমূহের অন্যতম হলো অর্জিত জ্ঞান অনুযায়ী আমলি জীবন গড়ে তোলা, শিষ্টাচার ও মূল্যবোধ লালন করা। দুঃখজনকভাবে এ বিষয়গুলো...</p>
        <a href="#" class="inline-flex items-center text-blue-600 hover:text-blue-800 font-semibold group">
          আরও দেখুন
          <i data-feather="arrow-right" class="ml-2 h-5 w-5 transform group-hover:translate-x-1 transition-transform duration-200"></i>
        </a>
      </div>

      <div class="bg-white p-8 rounded-xl shadow-lg border-b-4 border-purple-600 flex flex-col items-start">
        <div class="flex items-center mb-6">
          <span class="text-5xl font-extrabold text-purple-300 mr-3">০৪</span>
          <div class="p-3 bg-purple-100 text-purple-600 rounded-full">
            <i data-feather="users" class="h-8 w-8"></i>
          </div>
        </div>
        <h3 class="text-2xl font-bold text-gray-800 mb-4">অভিভাবক নাসীহা প্রোগ্রাম</h3>
        <p class="text-gray-700 leading-relaxed flex-grow mb-6">একজন শিক্ষার্থীর শিক্ষাগত যোগ্যতা এবং চারিত্রিক মানোন্নয়ন শিক্ষক-অভিভাবকের সম্মিলিত প্রচেষ্টা ব্যতীত সম্ভব নয়। তাই মাদরাসাতুস সুন্নাহ কিছু দিন অন্তর...</p>
        <a href="#" class="inline-flex items-center text-purple-600 hover:text-purple-800 font-semibold group">
          আরও দেখুন
          <i data-feather="arrow-right" class="ml-2 h-5 w-5 transform group-hover:translate-x-1 transition-transform duration-200"></i>
        </a>
      </div>

      <div class="bg-white p-8 rounded-xl shadow-lg border-b-4 border-green-600 flex flex-col items-start">
        <div class="flex items-center mb-6">
          <span class="text-5xl font-extrabold text-green-300 mr-3">০৫</span>
          <div class="p-3 bg-green-100 text-green-600 rounded-full">
            <i data-feather="user-check" class="h-8 w-8"></i>
          </div>
        </div>
        <h3 class="text-2xl font-bold text-gray-800 mb-4">অভিভাবকদের দীনি শিক্ষা</h3>
        <p class="text-gray-700 leading-relaxed flex-grow mb-6">সন্তান মা-বাবার নিকট আল্লাহ তাআলার পক্ষ থেকে আমানত। শিশুর প্রথম পাঠশালা হচ্ছে মায়ের কোল। এখানে সে জীবনের অনেক কিছু শেখে। পরবর্তীতে এটাই তার...</p>
        <a href="#" class="inline-flex items-center text-green-600 hover:text-green-800 font-semibold group">
          আরও দেখুন
          <i data-feather="arrow-right" class="ml-2 h-5 w-5 transform group-hover:translate-x-1 transition-transform duration-200"></i>
        </a>
      </div>

      <div class="bg-white p-8 rounded-xl shadow-lg border-b-4 border-yellow-600 flex flex-col items-start">
        <div class="flex items-center mb-6">
          <span class="text-5xl font-extrabold text-yellow-300 mr-3">০৬</span>
          <div class="p-3 bg-yellow-100 text-yellow-600 rounded-full">
            <i data-feather="monitor" class="h-8 w-8"></i>
          </div>
        </div>
        <h3 class="text-2xl font-bold text-gray-800 mb-4">আধুনিক প্রযুক্তি ব্যবহার</h3>
        <p class="text-gray-700 leading-relaxed flex-grow mb-6">বর্তমান প্রযুক্তির যুগে তাল মিলিয়ে চলা অত্যাবশ্যক। আমাদের মাদ্রাসায় আধুনিক শিক্ষা উপকরণ ও পদ্ধতি ব্যবহার করে শিক্ষার্থীদের যুগোপযোগী করে তোলা হয়।</p>
        <a href="#" class="inline-flex items-center text-yellow-600 hover:text-yellow-800 font-semibold group">
          আরও দেখুন
          <i data-feather="arrow-right" class="ml-2 h-5 w-5 transform group-hover:translate-x-1 transition-transform duration-200"></i>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Facilities Section -->
<section class="py-16 bg-gray-50">
  <div class="max-w-6xl mx-auto px-4">
    <div class="text-center mb-12">
      <h2 class="text-4xl font-bold text-gray-800 mb-4">আমাদের মাদ্রারাসার সুযোগ সুবিধাসমূহ</h2>
      <p class="text-lg text-gray-600">আমাদের মাদ্রাসায় শিক্ষার্থীদের জন্য নিন্মক্ত সুযোগ-সুবিধা প্রদান করা হয়ে থাকে।</p>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      <div class="bg-white p-8 shadow-md flex flex-col items-start text-left">
        <div class="p-4 rounded-full bg-teal-500 text-white mb-6">
          <i data-feather="truck" class="h-10 w-10"></i>
        </div>
        <h3 class="text-2xl font-bold text-gray-800 mb-4">মাদ্রাসার নিজস্ব পরিবহন ব্যবস্থা</h3>
        <p class="text-gray-600 leading-relaxed">
          শিক্ষার্থীদের যাতায়াতের সুবিধার্দ্ধে মাদ্রাসাসুল সুন্নাহর রয়েছে ৪টি নিজস্ব বাস। মাদ্রাসার এই বাসগুলো তিনটি রুটের (আফতাবনগর গেইট, উত্তর বাড্ডা ও নতুন বাজার) বিভিন্ন পয়েন্ট থেকে শিক্ষার্থীদের আনা-নেওয়া করে থাকে। আগামী শিক্ষাবর্ষ থেকে প্রয়োজন সাপেক্ষে বাসের সংখ্যা আরো বৃদ্ধি করা হবে,
          ইন-শা-আল্লাহ।
        </p>
      </div>

      <div class="bg-white p-8 shadow-md flex flex-col items-start text-left">
        <div class="p-4 rounded-full bg-blue-500 text-white mb-6">
          <i data-feather="home" class="h-10 w-10"></i>
        </div>
        <h3 class="text-2xl font-bold text-gray-800 mb-4">আবাসিক ছাত্রাবাস</h3>
        <p class="text-gray-600 leading-relaxed">
          দেশের বিভিন্ন পন্থার থেকে আগত শিক্ষার্থীদের পড়াশোনার সুবিধার্থে মাদ্রাসাসুল সুন্নাহর রয়েছে সীমিত আকারে আবাসিক ব্যবস্থা। শিক্ষার্থীদের পড়াশোনা, নৈতিক মানোন্নয়ন, রুচিসম্মত খাবার পরিবেশন এবং তাদেরকে মনোরম পরিবেশে রাখার জন্য মাদ্রাসাসুল সুন্নাহর সর্বাত্মক প্রচেষ্টা অব্যাহত আছে। মাদ্রাসার
          এই আবাসিক ব্যবস্থা শুধু দ্বিতীয় বা তদূর্ধ্ব শ্রেণির ছেলে শিক্ষার্থীদের জন্য প্রযোজ্য।
        </p>
      </div>

      <div class="bg-white p-8 shadow-md flex flex-col items-start text-left">
        <div class="p-4 rounded-full bg-[#F472B6] text-white mb-6">
          <i data-feather="award" class="h-10 w-10"></i>
        </div>
        <h3 class="text-2xl font-bold text-gray-800 mb-4">স্কলারশিপের সুযোগ</h3>
        <p class="text-gray-600 leading-relaxed">
          গরীব ও এতিম মেধাবী শিক্ষার্থীদের জন্য রয়েছে সম্পূর্ণ স্কলারশিপের সুযোগ। কোনো শিক্ষার্থী মেধাবী এবং যাকাতের হকদার হয়ে থাকলে অভিভাবকের ঐকান্তিক আগ্রহের ভিত্তিতে তার যাবতীয় ব্যয়ভার আস-সুন্নাহ ফাউন্ডেশন যাকাত তহবিল থেকে বহন করে থাকে আলহামদুলিল্লাহ। এই সুযোগ সর্বোচ্চ ২০ শতাংশ
          শিক্ষার্থীদের জন্য প্রযোজ্য।
        </p>
      </div>

      <div class="bg-white p-8 shadow-md flex flex-col items-start text-left">
        <div class="p-4 rounded-full bg-[#60A5FA] text-white mb-6">
          <i data-feather="users" class="h-10 w-10"></i>
        </div>
        <h3 class="text-2xl font-bold text-gray-800 mb-4">একই পিতা-মাতার একাধিক সন্তানের জন্য সুবিধা</h3>
        <p class="text-gray-600 leading-relaxed">একই বাবা-মায়ের দুই সন্তান মাদরাসাতুস সুন্নাহতে ভর্তি হলে দ্বিতীয়জনের জন্য ভর্তি এবং টিউশন ফি অর্ধেক।</p>
      </div>
    </div>
    <div class="text-center mt-12">
      <button class="text-white bg-teal-600 hover:bg-teal-700 px-4 py-2 rounded-md w-fit">সকল সুযোগ সুবিধাসমূহ দেখুন</button>
    </div>
  </div>
</section>

<!-- Teachers Section -->
<section class="bg-white py-16">
  <div class="max-w-6xl mx-auto px-4">
    <div class="text-center mb-12">
      <h2 class="text-3xl md:text-4xl font-bold text-teal-800">আমাদের শিক্ষকবৃন্দ</h2>
      <p class="text-gray-600 mt-2">যারা নিষ্ঠার সাথে দ্বীনি শিক্ষা প্রদান করছেন</p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
      <!-- Teacher Card -->
      <div class="rounded-xl border border-gray-200 overflow-hidden transition duration-300 text-center p-6">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcREr-iRKEFrF0i3Ai79-b6566Wtu5SV-s9MDw&s" alt="Teacher Photo" class="w-24 h-24 mx-auto mb-4 rounded-full object-cover border-4 border-teal-100 shadow-sm" />
        <h3 class="text-xl font-semibold text-gray-800">মাওলানা আব্দুল বারী</h3>
        <p class="text-gray-600 text-sm mt-1">হাদীস বিভাগের প্রধান</p>
      </div>

      <!-- Teacher Card -->
      <div class="rounded-xl border border-gray-200 overflow-hidden transition duration-300 text-center p-6">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcREr-iRKEFrF0i3Ai79-b6566Wtu5SV-s9MDw&s" alt="Teacher Photo" class="w-24 h-24 mx-auto mb-4 rounded-full object-cover border-4 border-yellow-100 shadow-sm" />
        <h3 class="text-xl font-semibold text-gray-800">হাফেজ কারীমুল্লাহ</h3>
        <p class="text-gray-600 text-sm mt-1">হিফজ শিক্ষক</p>
      </div>

      <!-- Teacher Card -->
      <div class="rounded-xl border border-gray-200 overflow-hidden transition duration-300 text-center p-6">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcREr-iRKEFrF0i3Ai79-b6566Wtu5SV-s9MDw&s" alt="Teacher Photo" class="w-24 h-24 mx-auto mb-4 rounded-full object-cover border-4 border-blue-100 shadow-sm" />
        <h3 class="text-xl font-semibold text-gray-800">শাইখ আহমাদ</h3>
        <p class="text-gray-600 text-sm mt-1">আরবি ভাষা ও ব্যাকরণ</p>
      </div>

      <!-- Teacher Card -->
      <div class="rounded-xl border border-gray-200 overflow-hidden transition duration-300 text-center p-6">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcREr-iRKEFrF0i3Ai79-b6566Wtu5SV-s9MDw&s" alt="Teacher Photo" class="w-24 h-24 mx-auto mb-4 rounded-full object-cover border-4 border-green-100 shadow-sm" />
        <h3 class="text-xl font-semibold text-gray-800">রুকাইয়া খাতুন</h3>
        <p class="text-gray-600 text-sm mt-1">নারী শাখা মুআলিমা</p>
      </div>
    </div>
    <!-- All Teachers Button -->
    <div class="text-center mt-12">
      <button class="text-white bg-teal-600 hover:bg-teal-700 px-4 py-2 rounded-md w-fit">সকল শিক্ষকবৃন্দ দেখুন</button>
    </div>
  </div>
</section>

<!-- Contact Section -->
<section class="py-16 md:py-24 bg-gray-50">
  <div class="container mx-auto px-4">
    <div class="max-w-6xl mx-auto">
      <div class="text-center mb-12">
        <h2 class="text-4xl md:text-5xl font-extrabold text-teal-700 mb-4">আমাদের সাথে যোগাযোগ করুন</h2>
        <p class="text-lg text-gray-600">আমাদের সম্পর্কে আপনার যেকোনো প্রশ্ন বা মন্তব্য জানাতে পারেন।</p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
        <div class="bg-white p-6 rounded-lg shadow-lg flex flex-col items-center text-center border-b-4 border-teal-500 hover:shadow-xl transition-shadow duration-300">
          <div class="p-3 bg-teal-100 text-teal-600 rounded-full mb-4">
            <i data-feather="phone" class="h-8 w-8"></i>
          </div>
          <h3 class="text-xl font-semibold text-gray-800 mb-2">ফোন করুন</h3>
          <p class="text-gray-600 mb-2">+880 9639 151525</p>
          <p class="text-sm text-gray-500">রবি - বৃহস্পতিবার: সকাল ৯টা - বিকাল ৫টা</p>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-lg flex flex-col items-center text-center border-b-4 border-orange-500 hover:shadow-xl transition-shadow duration-300">
          <div class="p-3 bg-orange-100 text-orange-600 rounded-full mb-4">
            <i data-feather="mail" class="h-8 w-8"></i>
          </div>
          <h3 class="text-xl font-semibold text-gray-800 mb-2">ইমেইল পাঠান</h3>
          <p class="text-gray-600 mb-2">info@madrasatussunnah.org</p>
          <p class="text-sm text-gray-500">আপনার প্রশ্ন বা ফিডব্যাক পাঠান</p>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-lg flex flex-col items-center text-center border-b-4 border-blue-500 hover:shadow-xl transition-shadow duration-300">
          <div class="p-3 bg-blue-100 text-blue-600 rounded-full mb-4">
            <i data-feather="map-pin" class="h-8 w-8"></i>
          </div>
          <h3 class="text-xl font-semibold text-gray-800 mb-2">আমাদের অবস্থান</h3>
          <p class="text-gray-600 mb-2">স্থায়ী কার্যালয়: মাদরাসাতুস সুন্নাহ, সাতারকুল, বাড্ডা, ঢাকা।</p>
          <a href="https://maps.app.goo.gl/fwWmibihFVsmPyZMA" target="_blank" class="text-sm text-blue-600 hover:underline mt-1">ম্যাপে দেখুন</a>
        </div>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 bg-white p-8 rounded-lg border border-gray-200">
        <div>
          <h3 class="text-3xl font-bold text-gray-800 mb-6">আপনার মূল্যবান মন্তব্য</h3>
          <p class="text-gray-600 mb-8">আপনার মন্তব্য আমাদের পরিবর্তনে সহায়ক।</p>

          <form action="#" method="POST" class="space-y-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
              <div class="relative">
                <label for="form_full_name" class="sr-only">আপনার সম্পূর্ণ নাম</label>
                <input type="text" id="form_full_name" name="full_name" placeholder="আপনার সম্পূর্ণ নাম *" required class="w-full pl-12 pr-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-teal-500" />
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                  <i data-feather="user" class="h-5 w-5 text-gray-400"></i>
                </div>
              </div>

              <div class="relative">
                <label for="form_phone_number" class="sr-only">আপনার ফোন</label>
                <input type="tel" id="form_phone_number" name="phone_number" placeholder="আপনার ফোন *" required class="w-full pl-12 pr-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-teal-500" />
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                  <i data-feather="phone" class="h-5 w-5 text-gray-400"></i>
                </div>
              </div>
            </div>

            <div class="relative">
              <label for="form_email" class="sr-only">আপনার ইমেইল</label>
              <input type="email" id="form_email" name="email" placeholder="আপনার ইমেইল (ঐচ্ছিক)" class="w-full pl-12 pr-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-teal-500" />
              <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <i data-feather="mail" class="h-5 w-5 text-gray-400"></i>
              </div>
            </div>

            <div>
              <label for="feedback_message" class="sr-only">আপনার মন্তব্য</label>
              <textarea id="feedback_message" name="message" rows="6" placeholder="আপনার মন্তব্য *" required class="w-full p-4 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-teal-500 resize-y"></textarea>
            </div>

            <div>
              <button type="submit" class="w-full md:w-auto bg-teal-600 hover:bg-teal-700 text-white py-3 px-8 rounded-md font-medium transition duration-300 ease-in-out shadow-md hover:shadow-lg">মন্তব্য প্রেরণ করুন</button>
            </div>
          </form>
        </div>

        <div>
          <h3 class="text-3xl font-bold text-gray-800 mb-6">ম্যাপে আমাদের খুঁজুন</h3>
          <div class="aspect-w-16 aspect-h-9 rounded-lg overflow-hidden shadow-lg border border-gray-200">
            <iframe
              src="https://www.google.com/maps/embed/v1/place?q=Madratussunnah&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"
              width="100%"
              height="450"
              style="border: 0"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
              title="মাদরাসাতুস সুন্নাহ এর অবস্থান"></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Branches -->
<section class="bg-gray-50 py-16 md:py-24">
  <div class="max-w-6xl mx-auto px-4">
    <div class="text-center mb-16">
      <h2 class="text-4xl md:text-5xl font-extrabold text-teal-800 mb-4">আমাদের শাখাসমূহ</h2>
      <p class="text-lg text-gray-700 leading-relaxed">বাংলাদেশের বিভিন্ন স্থানে অবস্থিত আমাদের প্রশিক্ষণ কেন্দ্র।</p>
    </div>

    <div class="swiper myBranchSwiper">
      <div class="swiper-wrapper">
        <!-- Branch Slide -->
        <div class="swiper-slide">
          <div class="bg-gray-50 p-6 rounded-lg shadow-md border-t-4 border-blue-500 h-full">
            <h4 class="text-xl font-bold text-gray-800 mb-2">কুমিল্লা শাখা</h4>
            <p class="text-gray-600 mb-2">ছৌটালপুর (বজ্র স্টোর), দেবিদ্বার, কুমিল্লা।</p>
            <p class="text-sm text-gray-700">
              <a href="mailto:info@madrasatussunnah.org" class="hover:text-teal-600 block">info@madrasatussunnah.org</a>
              <a href="tel:01409979957" class="hover:text-teal-600 block">01409-979957 (অফিস)</a>
              <a href="tel:01604758887" class="hover:text-teal-600 block">01604-758887 (এডমিন)</a>
            </p>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="bg-gray-50 p-6 rounded-lg shadow-md border-t-4 border-teal-500 h-full">
            <h4 class="text-xl font-bold text-gray-800 mb-2">প্রধান শাখা</h4>
            <p class="text-gray-600 mb-2">প্লট-১, ২, ৩; ব্লক-ডি, রোড-২/বি, সানতলী আফতাব, মডেল প্রোপার্টিস, সাতাকুল, বাড্ডা, ঢাকা।</p>
            <p class="text-sm text-gray-700"><a href="mailto:info@madrasatussunnah.org" class="hover:text-teal-600 block">info@madrasatussunnah.org</a> <a href="tel:01604758887" class="hover:text-teal-600 block">01604-758887 (এডমিন)</a></p>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="bg-gray-50 p-6 rounded-lg shadow-md border-t-4 border-orange-500 h-full">
            <h4 class="text-xl font-bold text-gray-800 mb-2">কুমিল্লা শাখা</h4>
            <p class="text-gray-600 mb-2">ছৌটালপুর (বজ্র স্টোর), দেবিদ্বার, কুমিল্লা।</p>
            <p class="text-sm text-gray-700">
              <a href="mailto:info@madrasatussunnah.org" class="hover:text-teal-600 block">info@madrasatussunnah.org</a>
              <a href="tel:01409979957" class="hover:text-teal-600 block">01409-979957 (অফিস)</a>
              <a href="tel:01604758887" class="hover:text-teal-600 block">01604-758887 (এডমিন)</a>
            </p>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="bg-gray-50 p-6 rounded-lg shadow-md border-t-4 border-green-500 h-full">
            <h4 class="text-xl font-bold text-gray-800 mb-2">কুমিল্লা শাখা</h4>
            <p class="text-gray-600 mb-2">ছৌটালপুর (বজ্র স্টোর), দেবিদ্বার, কুমিল্লা।</p>
            <p class="text-sm text-gray-700">
              <a href="mailto:info@madrasatussunnah.org" class="hover:text-teal-600 block">info@madrasatussunnah.org</a>
              <a href="tel:01409979957" class="hover:text-teal-600 block">01409-979957 (অফিস)</a>
              <a href="tel:01604758887" class="hover:text-teal-600 block">01604-758887 (এডমিন)</a>
            </p>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="bg-gray-50 p-6 rounded-lg shadow-md border-t-4 border-purple-500 h-full">
            <h4 class="text-xl font-bold text-gray-800 mb-2">কুমিল্লা শাখা</h4>
            <p class="text-gray-600 mb-2">ছৌটালপুর (বজ্র স্টোর), দেবিদ্বার, কুমিল্লা।</p>
            <p class="text-sm text-gray-700">
              <a href="mailto:info@madrasatussunnah.org" class="hover:text-teal-600 block">info@madrasatussunnah.org</a>
              <a href="tel:01409979957" class="hover:text-teal-600 block">01409-979957 (অফিস)</a>
              <a href="tel:01604758887" class="hover:text-teal-600 block">01604-758887 (এডমিন)</a>
            </p>
          </div>
        </div>

        <!-- Add more branches as needed -->
      </div>

      <!-- Navigation -->
      <div class="swiper-button-next text-teal-600 hover:text-teal-800 after:text-2xl"></div>
      <div class="swiper-button-prev text-teal-600 hover:text-teal-800 after:text-2xl"></div>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>