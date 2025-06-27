<?php include 'header.php'; ?>


<section class="relative isolate overflow-hidden bg-gradient-to-b from-[#F0FDF4] to-white py-12 md:py-8">
  <!-- Content -->
  <div class="container mx-auto px-4 text-center relative z-10">
    <h1 class="text-4xl md:text-5xl font-extrabold text-teal-800 leading-tight animate-fade-in-up">ফি চার্ট (Fee Chart)</h1>
    <p class="text-gray-600 mt-4 text-base md:text-lg animate-fade-in-up delay-100">মাদরাসাতুস সুন্নাহ-এর বিভিন্ন কোর্স ও সেবার জন্য প্রযোজ্য ফি-এর বিস্তারিত বিবরণ।</p>
  </div>
</section>


<!-- Main Content -->
<section class="bg-white py-12 md:py-20">
  <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
    <!-- Main Fee Grid -->
    <div class="grid gap-8 md:grid-cols-2">
      <!-- Left Column: Development & Session Fees (Table Style) -->
      <div class="bg-white p-6 rounded-xl shadow-lg border-l-4 border-orange-500">
        <h3 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
          <span class="w-3 h-3 bg-orange-500 rounded-full mr-2"></span>
          ডেভেলপমেন্ট ও সেশন ফি
        </h3>
        <div class="space-y-3">
          <!-- Development Fee (Highlighted) -->
          <div class="flex justify-between items-center py-3 px-4 rounded-lg">
            <span class="text-gray-700">ডেভেলপমেন্ট ফি</span>
            <span class="text-teal-600 text-sm">অন্তর্ভুক্ত</span>
          </div>

          <div class="flex justify-between items-center py-2 px-3 hover:bg-gray-50 rounded-lg">
            <span class="text-gray-700">মাদ্রাসাহ ব্যাগ</span>
            <span class="text-teal-600 text-sm">অন্তর্ভুক্ত</span>
          </div>

          <div class="flex justify-between items-center py-2 px-3 hover:bg-gray-50 rounded-lg">
            <span class="text-gray-700">এক্সাম ফি</span>
            <span class="text-teal-600 text-sm">অন্তর্ভুক্ত</span>
          </div>
          <div class="flex justify-between items-center py-2 px-3 hover:bg-gray-50 rounded-lg">
            <span class="text-gray-700">লাইব্রেরি ফি</span>
            <span class="text-teal-600 text-sm">অন্তর্ভুক্ত</span>
          </div>

          <div class="flex justify-between items-center py-2 px-3 hover:bg-gray-50 rounded-lg">
            <span class="text-gray-700">আইডি কার্ড ফি</span>
            <span class="text-teal-600 text-sm">অন্তর্ভুক্ত</span>
          </div>
          <div class="flex justify-between items-center py-2 px-3 hover:bg-gray-50 rounded-lg">
            <span class="text-gray-700">ম্যাগাজিন ফি</span>
            <span class="text-teal-600 text-sm">অন্তর্ভুক্ত</span>
          </div>
          <div class="flex justify-between items-center py-2 px-3 hover:bg-gray-50 rounded-lg">
            <span class="text-gray-700">মিসেলেনিয়াস</span>
            <span class="text-teal-600 text-sm">অন্তর্ভুক্ত</span>
          </div>
          <div class="flex justify-between items-center py-2 px-3 hover:bg-gray-50 rounded-lg">
            <span class="text-gray-700">গেমস ও স্পোর্টস ফি</span>
            <span class="text-teal-600 text-sm">অন্তর্ভুক্ত</span>
          </div>

          <!-- Games & Sports Fee (Special Case) -->
          <div class="flex justify-between items-center py-3 px-4 bg-teal-100 rounded-lg mt-3">
            <span class="text-gray-800 font-bold">সর্বমোট ফি</span>
            <span class="text-teal-700 font-bold">৳ ৩০,০০০/=</span>
          </div>

          <!-- Session Fee (Highlighted Bottom) -->
          <div class="border-t mt-4 pt-4">
            <div class="flex justify-between items-center py-2 px-3 bg-teal-100 rounded-lg">
              <span class="text-teal-800 font-bold">সেশন ফি</span>
              <span class="text-teal-800 font-bold">৳ ২০,০০০/=</span>
            </div>
            <p class="text-xs text-gray-500 mt-1 text-center">Existing Students (Without Madrasah Bag)</p>
          </div>
        </div>
      </div>

      <!-- Right Column: All Other Fee Cards -->
      <div class="space-y-6">
        <!-- Card 1: Monthly Tuition Fees -->
        <div class="bg-white p-6 rounded-xl shadow-lg border-l-4 border-blue-500">
          <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
            <span class="w-3 h-3 bg-blue-500 rounded-full mr-2"></span>
            মাসিক টিউশন ফি
          </h3>
          <div class="space-y-2">
            <div class="flex justify-between py-2 bg-blue-50 px-3 rounded-lg">
              <span class="text-blue-800 font-bold">প্লে (Play)</span>
              <span class="text-blue-800 font-bold">৳ ৫,০০০/=</span>
            </div>
            <div class="flex justify-between py-2 bg-blue-50 px-3 rounded-lg">
              <span class="text-blue-800 font-bold">চতুর্থ (Four)</span>
              <span class="text-blue-800 font-bold">৳ ৫,০০০/=</span>
            </div>
            <div class="flex justify-between py-2 bg-blue-50 px-3 rounded-lg">
              <span class="text-blue-800 font-bold">পঞ্চম (Five)</span>
              <span class="text-blue-800 font-bold">৳ ৫,০০০/=</span>
            </div>
          </div>
        </div>

        <!-- Card 2: Transport Fee -->
        <div class="bg-white p-6 rounded-xl shadow-lg border-l-4 border-purple-500">
          <h3 class="text-xl font-bold text-gray-800 mb-2 flex items-center">
            <span class="w-3 h-3 bg-purple-500 rounded-full mr-2"></span>
            পরিবহন ফি
          </h3>
          <div class="flex justify-between items-center bg-purple-50 p-3 rounded-lg">
            <div>
              <p class="text-gray-800 font-medium">প্রতি শিক্ষার্থী</p>
              <p class="text-gray-600 text-xs">সকল শ্রেণির জন্য</p>
            </div>
            <span class="text-purple-700 font-bold">৳ ৩,০০০/=</span>
          </div>
        </div>

        <!-- Card 3: Residential Fees -->
        <div class="bg-white p-6 rounded-xl shadow-lg border-l-4 border-green-500">
          <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
            <span class="w-3 h-3 bg-green-500 rounded-full mr-2"></span>
            আবাসিক ফি
          </h3>
          <div class="space-y-3">
            <div class="flex justify-between items-center bg-green-50 p-3 rounded-lg">
              <div>
                <p class="text-gray-800 font-medium">এককালীন চার্জ</p>
                <p class="text-gray-600 text-xs">খাট, তোশক, বালিশ ইত্যাদি</p>
              </div>
              <span class="text-green-700 font-bold">৳ ১০,০০০/=</span>
            </div>
            <div class="flex justify-between items-center bg-gray-50 p-3 rounded-lg">
              <div>
                <p class="text-gray-800 font-medium">মাসিক থাকা-খাওয়া</p>
                <p class="text-gray-600 text-xs">টিউশন ফি বাদে</p>
              </div>
              <span class="text-green-700 font-bold">৳ ১২,৫০০/=</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Additional Notes -->
    <div class="mt-12 bg-teal-50 p-6 rounded-xl border border-teal-100">
      <h4 class="font-bold text-teal-800 mb-3 flex items-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2h-1V9z" clip-rule="evenodd" />
        </svg>
        গুরুত্বপূর্ণ তথ্য
      </h4>
      <ul class="text-gray-700 space-y-2 text-sm list-disc pl-5">
        <li>সমস্ত ফি প্রতি বছর পর্যালোচনা করা হতে পারে</li>
        <li>ভর্তি ফি এককালীন এবং অ-ফেরতযোগ্য</li>
        <li>পরিবহন ফি ঐচ্ছিক এবং রুটের উপর নির্ভরশীল</li>
      </ul>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>