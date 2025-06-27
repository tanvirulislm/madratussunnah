<?php
include 'header.php';
?>

<section class="relative isolate overflow-hidden bg-gradient-to-b from-[#F0FDF4] to-white py-12 md:py-8">
  <!-- Content -->
  <div class="container mx-auto px-4 text-center relative z-10">
    <h1 class="text-4xl md:text-5xl font-extrabold text-teal-800 leading-tight animate-fade-in-up">পরীক্ষা সংক্রান্ত তথ্য</h1>
    <p class="text-gray-600 mt-4 text-base md:text-lg animate-fade-in-up delay-100">আমাদের মাদ্রাসার নিয়মিত ও বার্ষিক পরীক্ষার সময়সূচি ও নির্দেশনাবলী।</p>
  </div>
</section>
<!-- Page Content -->
<section class="bg-white py-16">
  <div class="max-w-6xl mx-auto px-4">
    <!-- Exam Schedule -->
    <div class="bg-gray-50 p-6 rounded-xl shadow-md mb-12">
      <h2 class="text-2xl font-semibold text-teal-700 mb-4">পরীক্ষার সময়সূচি</h2>
      <ul class="list-disc pl-5 text-gray-700 space-y-2">
        <li>প্রথম সাময়িক পরীক্ষা: ১২ মে ২০২৫ - ১৮ মে ২০২৫</li>
        <li>দ্বিতীয় সাময়িক পরীক্ষা: ১০ আগস্ট ২০২৫ - ১৭ আগস্ট ২০২৫</li>
        <li>বার্ষিক পরীক্ষা: ১০ ডিসেম্বর ২০২৫ - ২০ ডিসেম্বর ২০২৫</li>
      </ul>
    </div>

    <!-- Exam Rules -->
    <div class="bg-white p-6 rounded-xl border-l-4 border-teal-500 shadow-sm mb-12">
      <h2 class="text-2xl font-semibold text-teal-700 mb-4">পরীক্ষার নিয়মাবলী</h2>
      <ul class="list-disc pl-5 text-gray-700 space-y-2">
        <li>পরীক্ষার সময় ১০ মিনিট আগে কেন্দ্রে উপস্থিত হতে হবে।</li>
        <li>পরীক্ষার সময় মোবাইল ফোন সম্পূর্ণভাবে নিষিদ্ধ।</li>
        <li>যেকোন অসদুপায় অবলম্বন করলে কঠোর ব্যবস্থা গ্রহণ করা হবে।</li>
      </ul>
    </div>

    <!-- Result Info -->
    <div class="bg-[#F0FDF4] p-6 rounded-xl shadow-inner text-center">
      <h2 class="text-2xl font-semibold text-teal-700 mb-2">ফলাফল প্রকাশ</h2>
      <p class="text-gray-700">প্রতিটি পরীক্ষার ফলাফল মাদ্রাসার অফিসে ও ওয়েবসাইটে প্রকাশ করা হয়। শিক্ষার্থীরা অনলাইনেও ফলাফল দেখতে পারবেন।</p>
      <a href="/results" class="inline-block mt-4 bg-teal-600 text-white px-6 py-2 rounded-md hover:bg-teal-700 transition">ফলাফল দেখুন</a>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>