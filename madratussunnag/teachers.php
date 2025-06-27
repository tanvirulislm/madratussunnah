<?php include 'header.php'; ?>


<section class="relative isolate overflow-hidden bg-gradient-to-b from-[#F0FDF4] to-white py-12 md:py-12">
  <!-- Content -->
  <div class="container mx-auto px-4 text-center relative z-10">
    <h1 class="text-4xl md:text-5xl font-extrabold text-teal-800 leading-tight animate-fade-in-up">আমাদের সম্মানিত শিক্ষকবৃন্দ</h1>
    <p class="text-gray-600 mt-4 text-base md:text-lg animate-fade-in-up delay-100">মাদ্রাসাতুস সুন্নাহর অভিজ্ঞ ও দক্ষ শিক্ষকমণ্ডলী যারা শিক্ষার্থীদের জ্ঞান অর্জনে সহায়তা করছেন।</p>
  </div>
</section>

<section class="py-16 bg-white">
  <div class="max-w-6xl mx-auto px-4">
    <!-- Department Filter -->
    <div class="mb-12">
      <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">বিভাগ অনুসারে শিক্ষকবৃন্দ</h2>
      <div class="flex flex-wrap justify-center gap-4">
        <button class="px-6 py-2 bg-teal-600 text-white rounded-full hover:bg-teal-700 transition">সকল</button>
        <button class="px-6 py-2 bg-white border border-teal-600 text-teal-600 rounded-full hover:bg-teal-50 transition">হিফজ বিভাগ</button>
        <button class="px-6 py-2 bg-white border border-teal-600 text-teal-600 rounded-full hover:bg-teal-50 transition">তাজবিদ বিভাগ</button>
        <button class="px-6 py-2 bg-white border border-teal-600 text-teal-600 rounded-full hover:bg-teal-50 transition">আরবি ভাষা</button>
        <button class="px-6 py-2 bg-white border border-teal-600 text-teal-600 rounded-full hover:bg-teal-50 transition">ফিকহ বিভাগ</button>
        <button class="px-6 py-2 bg-white border border-teal-600 text-teal-600 rounded-full hover:bg-teal-50 transition">হাদিস বিভাগ</button>
      </div>
    </div>

    <!-- Teachers Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
      <!-- Teacher Card 1 -->
      <a href="teacher-details.php" class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
        <div class="relative">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSvIqTeXuhLyda5k6JVGx6AfZ0hRBBkNJ3E8A&s" alt="শাইখ মুহাম্মাদ আব্দুল্লাহ" class="w-full h-64 object-cover" />
          <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black to-transparent p-4">
            <h3 class="text-xl font-bold text-white">শাইখ মুহাম্মাদ আব্দুল্লাহ</h3>
            <p class="text-teal-300">হিফজ বিভাগ প্রধান</p>
          </div>
        </div>
        <div class="p-6">
          <div class="flex items-center mb-4">
            <span class="bg-teal-100 text-teal-800 text-xs font-semibold px-3 py-1 rounded-full">হিফজ বিভাগ</span>
          </div>
          <p class="text-gray-600 mb-4 line-clamp-3">১৫ বছরের বেশি অভিজ্ঞতা নিয়ে হিফজ বিভাগে শিক্ষাদান করছেন। মিশর থেকে উচ্চতর ডিগ্রি অর্জন করেছেন এবং কুরআন তিলাওয়াতে বিশেষ পারদর্শী।</p>
          <div class="flex items-center text-sm text-gray-500">
            <i data-feather="award" class="h-4 w-4 mr-2"></i>
            <span>এম.এ. ইসলামিক স্টাডিজ, আল-আজহার ইউনিভার্সিটি</span>
          </div>
        </div>
      </a>

      <!-- Teacher Card 2 -->
      <a href="teacher-details.php" class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
        <div class="relative">
          <img src="https://img.freepik.com/free-photo/smiling-muslim-man-applauding_482257-103227.jpg?semt=ais_items_boosted&w=740" alt="মাওলানা ইব্রাহীম আলী" class="w-full h-64 object-cover" />
          <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black to-transparent p-4">
            <h3 class="text-xl font-bold text-white">মাওলানা ইব্রাহীম আলী</h3>
            <p class="text-teal-300">তাজবিদ বিশেষজ্ঞ</p>
          </div>
        </div>
        <div class="p-6">
          <div class="flex items-center mb-4">
            <span class="bg-teal-100 text-teal-800 text-xs font-semibold px-3 py-1 rounded-full">তাজবিদ বিভাগ</span>
          </div>
          <p class="text-gray-600 mb-4 line-clamp-3">কুরআনের সঠিক উচ্চারণ ও তিলাওয়াত শেখানোর ক্ষেত্রে বিশেষজ্ঞ। সৌদি আরব থেকে তাজবিদ বিষয়ে উচ্চতর প্রশিক্ষণপ্রাপ্ত।</p>
          <div class="flex items-center text-sm text-gray-500">
            <i data-feather="award" class="h-4 w-4 mr-2"></i>
            <span>তাজবিদে ইজাযাহ, মদীনা ইসলামী বিশ্ববিদ্যালয়</span>
          </div>
        </div>
      </a>

      <!-- Teacher Card 3 -->
      <a href="teacher-details.php" class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
        <div class="relative">
          <img src="https://media.istockphoto.com/id/492789232/photo/content-young-arab-man-in-traditional-clothing.jpg?s=612x612&w=0&k=20&c=BmsD-FMVfZPqj5jndy3L_jOo6S-sTIZhsH2LCJmc7To=" alt="ড. ইউসুফ আহমদ" class="w-full h-64 object-cover" />
          <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black to-transparent p-4">
            <h3 class="text-xl font-bold text-white">ড. ইউসুফ আহমদ</h3>
            <p class="text-teal-300">আরবি ভাষা বিভাগ প্রধান</p>
          </div>
        </div>
        <div class="p-6">
          <div class="flex items-center mb-4">
            <span class="bg-teal-100 text-teal-800 text-xs font-semibold px-3 py-1 rounded-full">আরবি ভাষা</span>
            <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-3 py-1 rounded-full ml-2">ভাষা বিশেষজ্ঞ</span>
          </div>
          <p class="text-gray-600 mb-4 line-clamp-3">আরবি ভাষা শিক্ষাদানে ১০ বছরের অভিজ্ঞতা সম্পন্ন। তার সহজ ও কার্যকরী পদ্ধতিতে শিক্ষার্থীরা দ্রুত আরবি ভাষা রপ্ত করতে পারে।</p>
          <div class="flex items-center text-sm text-gray-500">
            <i data-feather="award" class="h-4 w-4 mr-2"></i>
            <span>পিএইচডি আরবি ভাষাতত্ত্ব, দামেস্ক বিশ্ববিদ্যালয়</span>
          </div>
        </div>
      </a>

      <!-- Teacher Card 4 -->
      <a href="teacher-details.php" class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
        <div class="relative">
          <img src="https://media.istockphoto.com/id/953443444/photo/muslim-man-smiling.jpg?s=612x612&w=0&k=20&c=uUehguxOCz0C6yxonvIGcyGiNjXP--xN40tXtSjzmxo=" alt="মুফতি আব্দুর রহমান" class="w-full h-64 object-cover" />
          <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black to-transparent p-4">
            <h3 class="text-xl font-bold text-white">মুফতি আব্দুর রহমান</h3>
            <p class="text-teal-300">ফিকহ বিভাগ প্রধান</p>
          </div>
        </div>
        <div class="p-6">
          <div class="flex items-center mb-4">
            <span class="bg-teal-100 text-teal-800 text-xs font-semibold px-3 py-1 rounded-full">ফিকহ বিভাগ</span>
          </div>
          <p class="text-gray-600 mb-4 line-clamp-3">ইসলামিক জুরিসপ্রুডেন্সে বিশেষজ্ঞ। দারুল উলুম দেওবন্দ থেকে ইফতা সম্পন্ন করেছেন এবং সমসাময়িক ফিকহি সমস্যার সমাধানে বিশেষ পারদর্শী।</p>
          <div class="flex items-center text-sm text-gray-500">
            <i data-feather="award" class="h-4 w-4 mr-2"></i>
            <span>ইফতা, দারুল উলুম দেওবন্দ</span>
          </div>
        </div>
      </a>

      <!-- Teacher Card 5 -->
      <a href="teacher-details.php" class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
        <div class="relative">
          <img src="https://media.istockphoto.com/id/464565934/photo/smiling-south-asian-bearded-male.jpg?s=612x612&w=0&k=20&c=uKyudyjQOAiqccBZ73UTgC944AA26iY1Z4VADwKmNH0=" alt="মাওলানা মুহাম্মাদ সাইফুল ইসলাম" class="w-full h-64 object-cover" />
          <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black to-transparent p-4">
            <h3 class="text-xl font-bold text-white">মাওলানা মুহাম্মাদ সাইফুল ইসলাম</h3>
            <p class="text-teal-300">হাদিস বিভাগ প্রধান</p>
          </div>
        </div>
        <div class="p-6">
          <div class="flex items-center mb-4">
            <span class="bg-teal-100 text-teal-800 text-xs font-semibold px-3 py-1 rounded-full">হাদিস বিভাগ</span>
          </div>
          <p class="text-gray-600 mb-4 line-clamp-3">হাদিস শাস্ত্রে গভীর পান্ডিত্যের অধিকারী। মদীনা ইসলামী বিশ্ববিদ্যালয় থেকে হাদিস বিষয়ে উচ্চতর ডিগ্রি অর্জন করেছেন।</p>
          <div class="flex items-center text-sm text-gray-500">
            <i data-feather="award" class="h-4 w-4 mr-2"></i>
            <span>এম.এ. হাদিস, মদীনা ইসলামী বিশ্ববিদ্যালয়</span>
          </div>
        </div>
      </a>

      <!-- Teacher Card 6 -->
      <a href="teacher-details.php" class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
        <div class="relative">
          <img src="https://www.shutterstock.com/image-photo/positive-handsome-arabic-businessman-beard-260nw-2510267591.jpg" alt="মাওলানা আব্দুল্লাহ আল মামুন" class="w-full h-64 object-cover" />
          <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black to-transparent p-4">
            <h3 class="text-xl font-bold text-white">মাওলানা আব্দুল্লাহ আল মামুন</h3>
            <p class="text-teal-300">আকাইদ ও মানতেক বিভাগ</p>
          </div>
        </div>
        <div class="p-6">
          <div class="flex items-center mb-4">
            <span class="bg-teal-100 text-teal-800 text-xs font-semibold px-3 py-1 rounded-full">আকাইদ বিভাগ</span>
          </div>
          <p class="text-gray-600 mb-4 line-clamp-3">ইসলামী বিশ্বাস ও দর্শন বিষয়ে বিশেষজ্ঞ। সমসাময়িক ভ্রান্ত মতবাদ খণ্ডনে তার বক্তব্য ও লেখনী অত্যন্ত প্রসিদ্ধ।</p>
          <div class="flex items-center text-sm text-gray-500">
            <i data-feather="award" class="h-4 w-4 mr-2"></i>
            <span>এম.এ. ইসলামিক থিওলজি, ইসলামিক ইউনিভার্সিটি অব মদিনা</span>
          </div>
        </div>
      </a>
    </div>

    <!-- Pagination -->
    <div class="flex justify-center mt-12">
      <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
        <a href="#" class="relative inline-flex items-center px-4 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50"> পূর্ববর্তী </a>
        <a href="#" aria-current="page" class="z-10 bg-teal-50 border-teal-500 text-teal-600 relative inline-flex items-center px-4 py-2 border text-sm font-medium"> ১ </a>
        <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50"> ২ </a>
        <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50"> ৩ </a>
        <a href="#" class="relative inline-flex items-center px-4 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50"> পরবর্তী </a>
      </nav>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>