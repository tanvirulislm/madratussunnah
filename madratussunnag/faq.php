<?php include 'header.php'; ?>

<section class="relative isolate overflow-hidden bg-gradient-to-b from-[#F0FDF4] to-white py-12 md:py-12">
  <!-- Content -->
  <div class="container mx-auto px-4 text-center relative z-10">
    <h1 class="text-4xl md:text-5xl font-extrabold text-teal-800 leading-tight animate-fade-in-up">প্রশ্নোত্তর (FAQ)</h1>
    <p class="text-gray-600 mt-4 text-base md:text-lg animate-fade-in-up delay-100">নিচে আমাদের মাদ্রাসা সম্পর্কে কিছু সাধারণ প্রশ্নের উত্তর দেওয়া হলো।</p>
  </div>
</section>

<section class="bg-white py-16 md:py-12">
  <div class="max-w-6xl mx-auto px-4">
    <!-- <div class="text-center mb-12">
          <h2 class="text-3xl md:text-4xl font-bold text-teal-800 mb-4">প্রশ্নোত্তর (FAQ)</h2>
          <p class="text-gray-600 text-base md:text-lg">নিচে আমাদের মাদ্রাসা সম্পর্কে কিছু সাধারণ প্রশ্নের উত্তর দেওয়া হলো।</p>
        </div> -->

    <div class="max-w-3xl mx-auto space-y-4">
      <!-- FAQ Item -->
      <div x-data="{ open: false }" class="border rounded-lg shadow-sm overflow-hidden">
        <button @click="open = !open" class="w-full text-left px-6 py-4 bg-gray-100 hover:bg-gray-200 flex justify-between items-center">
          <span class="text-lg font-medium text-gray-800">ভর্তির জন্য কী কী যোগ্যতা প্রয়োজন?</span>
          <svg x-bind:class="open ? 'rotate-180' : ''" class="w-5 h-5 text-teal-600 transition-transform duration-300" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
          </svg>
        </button>
        <div x-show="open" x-transition class="px-6 py-4 text-gray-700 bg-white">সাধারণত শিক্ষার্থীর বয়স ও পূর্ব শিক্ষা বিবেচনায় ভর্তি নেওয়া হয়। বিস্তারিত তথ্য ভর্তি পৃষ্ঠায় দেওয়া আছে।</div>
      </div>

      <!-- FAQ Item -->
      <div x-data="{ open: false }" class="border rounded-lg shadow-sm overflow-hidden">
        <button @click="open = !open" class="w-full text-left px-6 py-4 bg-gray-100 hover:bg-gray-200 flex justify-between items-center">
          <span class="text-lg font-medium text-gray-800">আবাসিক ও অনাবাসিক দুই সুবিধা আছে কি?</span>
          <svg x-bind:class="open ? 'rotate-180' : ''" class="w-5 h-5 text-teal-600 transition-transform duration-300" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
          </svg>
        </button>
        <div x-show="open" x-transition class="px-6 py-4 text-gray-700 bg-white">হ্যাঁ, আমাদের মাদ্রাসায় আবাসিক ও অনাবাসিক উভয় ধরণের সুবিধা রয়েছে। ভর্তি ফর্মে আপনার পছন্দ অনুযায়ী অপশন নির্বাচন করতে পারবেন।</div>
      </div>

      <!-- FAQ Item -->
      <div x-data="{ open: false }" class="border rounded-lg shadow-sm overflow-hidden">
        <button @click="open = !open" class="w-full text-left px-6 py-4 bg-gray-100 hover:bg-gray-200 flex justify-between items-center">
          <span class="text-lg font-medium text-gray-800">মাসিক খরচ কত?</span>
          <svg x-bind:class="open ? 'rotate-180' : ''" class="w-5 h-5 text-teal-600 transition-transform duration-300" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
          </svg>
        </button>
        <div x-show="open" x-transition class="px-6 py-4 text-gray-700 bg-white">আবাসিক শিক্ষার্থীদের জন্য আলাদা এবং অনাবাসিকদের জন্য আলাদা খরচ নির্ধারণ করা হয়েছে। বিস্তারিত জানতে ভর্তি তথ্য পেজ দেখুন।</div>
      </div>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>