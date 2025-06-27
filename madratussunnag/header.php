<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="https://hikmatech.com/image/logo/favicon.png" />
    <link rel="shortcut icon" href="https://hikmatech.com/image/logo/favicon.png" type="image/x-icon" />
    <title>Madratus Sunnah</title>
    <link rel="stylesheet" href="style.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <!-- Font Family Tiro Bangla -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Noto+Serif+Bengali:wght@100..900&display=swap" rel="stylesheet" />
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body>
    <!-- <header class="bg-teal-700 text-white text-sm hidden md:block">
      <div class="container mx-auto px-4 py-4 flex flex-col md:flex-row justify-between items-center gap-2">
        <div class="container mx-auto flex justify-center items-center space-x-[1.5rem]">
          <div class="flex items-center gap-2">
            <i data-feather="mail" class="h-4 w-4"></i>
            <span class="flex items-center gap-1"> info@madrasatussunnah.org </span>
          </div>
          <div class="flex items-center gap-2">
            <i data-feather="phone" class="h-4 w-4"></i>
            <span class="flex items-center gap-1"> +880 9639 151525 </span>
          </div>
          <div class="flex items-center gap-2">
            <i data-feather="map-pin" class="h-4 w-4"></i>
            <span class="flex items-center gap-1"> স্থায়ী কার্যালয়: মাদরাসাতুস সুন্নাহ, সাতারকুল, বাড্ডা, ঢাকা। </span>
          </div>
        </div>
      </div>
    </header> -->

    <header class="bg-teal-700 text-white text-sm hidden md:block overflow-hidden">
        <div class="max-w-6xl mx-auto px-4 py-3 relative">
            <div class="flex items-center gap-3">
                <i data-feather="bell" class="h-4 w-4 shrink-0"></i>
                <div class="overflow-hidden w-full">
                    <div class="animate-marquee whitespace-nowrap flex gap-12">
                        <span>📢 রমজানের ছুটির নোটিশ প্রকাশিত হয়েছে।</span>
                        <span>📢 নতুন শিক্ষাবর্ষে ভর্তি কার্যক্রম শুরু হয়েছে।</span>
                        <span>📢 আগামি শুক্রবার বিশেষ আলোচনা অনুষ্ঠিত হবে।</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <style>
        @keyframes marquee {
            0% {
                transform: translateX(100%);
            }

            100% {
                transform: translateX(-100%);
            }
        }

        .animate-marquee {
            animation: marquee 100s linear infinite;
        }
    </style>

    <!-- Main Nav -->
    <nav class="bg-white shadow-sm relative z-50">
        <div class="max-w-6xl mx-auto px-4 py-3 flex justify-between items-center">
            <div class="flex items-center gap-2">
                <img src="assets/madrasatus-sunnah-logo.svg" alt="Logo" class="h-[3.5rem] w-auto" />
            </div>

            <div class="hidden md:flex items-center gap-5 text-gray-700 font-medium">
                <a href="index.php" class="text-teal-600 hover:text-teal-600">হোম</a>
                <a href="#" class="hover:text-teal-600">গ্যালারি</a>
                <a href="notice.php" class="hover:text-teal-600">নোটিশ</a>
                <a href="facilities.php" class="hover:text-teal-600">সুবিধা</a>

                <div class="relative group">
                    <a href="#" class="hover:text-teal-600 inline-flex items-center">
                        অন্যান্য পেইজ
                        <i data-feather="chevron-down" class="ml-1 h-4 w-4"></i>
                    </a>
                    <div class="absolute left-0 mt-2 p-2 w-48 bg-white rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform scale-95 group-hover:scale-100 origin-top">
                        <a href="404.php" class="block px-4 py-2 text-gray-700 hover:text-teal-600 hover:bg-gray-100 rounded-md">৪০৪ পেইজ </a>
                        <a href="notice_details.php" class="block px-4 py-2 text-gray-700 hover:text-teal-600 hover:bg-gray-100 rounded-md">নোটিশ বিস্তারিত</a>
                        <a href="fee-chart.php" class="block px-4 py-2 text-gray-700 hover:text-teal-600 hover:bg-gray-100 rounded-md">ফি চার্ট</a>
                        <a href="faq.php" class="block px-4 py-2 text-gray-700 hover:text-teal-600 hover:bg-gray-100 rounded-md">প্রশ্ন ও উত্তর</a>
                    </div>
                </div>

                <div class="relative group">
                    <a href="#" class="hover:text-teal-600 inline-flex items-center">
                        একাডেমিক
                        <i data-feather="chevron-down" class="ml-1 h-4 w-4"></i>
                    </a>
                    <div class="absolute left-0 mt-2 p-2 w-48 bg-white rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform scale-95 group-hover:scale-100 origin-top">
                        <a href="curriculum.php" class="block px-4 py-2 text-gray-700 hover:text-teal-600 hover:bg-gray-100 rounded-md">শিক্ষাক্রম</a>
                        <a href="teachers.php" class="block px-4 py-2 text-gray-700 hover:text-teal-600 hover:bg-gray-100 rounded-md">শিক্ষকবৃন্দ</a>
                        <a href="exam.php" class="block px-4 py-2 text-gray-700 hover:text-teal-600 hover:bg-gray-100 rounded-md">পরীক্ষা</a>
                    </div>
                </div>

                <a href="admission.php" class="hover:text-teal-600">এডমিশন</a>

                <a href="#" class="bg-teal-600 hover:bg-teal-700 text-white px-5 pt-[14px] py-[0.50rem] leading-[1.1] rounded-md transition inline-block ml-4"> প্রি-এডমিশন </a>
            </div>

            <div class="md:hidden">
                <button id="menuToggle" class="text-gray-700 focus:outline-none">
                    <svg id="menuIcon" class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg id="closeIcon" class="w-6 h-6 hidden" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>

        <div id="mobileMenu" class="md:hidden hidden px-4 pb-4 space-y-2 bg-white text-gray-700 font-medium">
            <a href="index.php" class="block hover:text-teal-600">হোম</a>
            <a href="#" class="block hover:text-teal-600">গ্যালারি</a>
            <a href="notice.php" class="block hover:text-teal-600">নোটিশ</a>
            <a href="facilities.php" class="block hover:text-teal-600">সুবিধা</a>

            <div>
                <button class="flex justify-between items-center w-full text-left hover:text-teal-600 py-2" id="mobileShakhaToggle">
                    অন্যান্য পেইজ
                    <svg class="ml-1 h-4 w-4 transform transition-transform duration-200" id="mobileShakhaArrow" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div id="mobileShakhaSubmenu" class="hidden pl-4 space-y-2">
                    <a href="404.php" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-md">৪০৪ পেইজ</a>
                    <a href="notice_details.html" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-md">নোটিশ বিস্তারিত</a>
                    <a href="fee-chart.php" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-md">ফি চার্ট</a>
                    <a href="faq.php" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-md">প্রশ্ন উত্তর</a>
                </div>
            </div>

            <div>
                <button class="flex justify-between items-center w-full text-left hover:text-teal-600 py-2" id="mobileAcademicToggle">
                    একাডেমিক
                    <svg class="ml-1 h-4 w-4 transform transition-transform duration-200" id="mobileAcademicArrow" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div id="mobileAcademicSubmenu" class="hidden pl-4 space-y-2">
                    <a href="curriculum.php" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-md">শিক্ষাক্রম</a>
                    <a href="teachers.php" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-md">শিক্ষকবৃন্দ</a>
                    <a href="exam.php" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-md">পরীক্ষা</a>
                </div>
            </div>

            <a href="admission.php" class="block hover:text-teal-600">এডমিশন</a>
            <a href="#" class="block text-white bg-teal-600 hover:bg-teal-700 px-4 py-2 rounded-md w-fit">প্রি-এডমিশন</a>
        </div>
    </nav>