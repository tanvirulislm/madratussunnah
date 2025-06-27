<?php include 'header.php'; ?>


<main class="container mx-auto px-4 py-16">
  <section class="max-w-4xl mx-auto bg-white p-8 rounded-lg shadow-xl border-t-4 border-teal-600">
    <h2 class="text-3xl font-bold text-center text-teal-700 mb-8">অনলাইন ভর্তি ফরম</h2>
    <p class="text-center text-gray-600 mb-8">আপনার তথ্যগুলো সঠিকভাবে পূরণ করে জমা দিন। সকল (*) চিহ্নিত ঘর পূরণ করা আবশ্যক।</p>

    <form action="#" method="POST" class="space-y-6">
      <fieldset class="border border-gray-200 p-6 rounded-md shadow-sm">
        <legend class="text-xl font-semibold text-teal-600 px-2">শিক্ষার্থীর ব্যক্তিগত তথ্য</legend>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">
          <div>
            <label for="student_name_bn" class="block text-sm font-medium text-gray-700 mb-1">শিক্ষার্থীর নাম (বাংলা) *</label>
            <input type="text" id="student_name_bn" name="student_name_bn" placeholder="যেমন: আব্দুর রহমান" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-teal-500 focus:border-teal-500 sm:text-sm" />
          </div>
          <div>
            <label for="student_name_en" class="block text-sm font-medium text-gray-700 mb-1">শিক্ষার্থীর নাম (ইংরেজি) *</label>
            <input type="text" id="student_name_en" name="student_name_en" placeholder=" e.g. Abdur Rahman" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-teal-500 focus:border-teal-500 sm:text-sm" />
          </div>

          <div>
            <label for="dob" class="block text-sm font-medium text-gray-700 mb-1">জন্ম তারিখ *</label>
            <input type="date" id="dob" name="dob" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-teal-500 focus:border-teal-500 sm:text-sm" />
          </div>
          <div>
            <label for="birth_reg_no" class="block text-sm font-medium text-gray-700 mb-1">জন্ম নিবন্ধন নম্বর *</label>
            <input type="text" id="birth_reg_no" name="birth_reg_no" placeholder=" যেমন: 2000123456741587" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-teal-500 focus:border-teal-500 sm:text-sm" />
          </div>

          <div>
            <label for="gender" class="block text-sm font-medium text-gray-700 mb-1">লিঙ্গ *</label>
            <select id="gender" name="gender" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-teal-500 focus:border-teal-500 sm:text-sm">
              <option value="">নির্বাচন করুন</option>
              <option value="male">পুরুষ</option>
              <option value="female">মহিলা</option>
            </select>
          </div>
          <div>
            <label for="blood_group" class="block text-sm font-medium text-gray-700 mb-1">রক্তের গ্রুপ</label>
            <input type="text" id="blood_group" name="blood_group" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-teal-500 focus:border-teal-500 sm:text-sm" placeholder="যেমন: A+, B-, O+" />
          </div>

          <div class="md:col-span-2">
            <label for="present_address" class="block text-sm font-medium text-gray-700 mb-1">বর্তমান ঠিকানা *</label>
            <textarea id="present_address" name="present_address" rows="3" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-teal-500 focus:border-teal-500 sm:text-sm"></textarea>
          </div>
          <div class="md:col-span-2">
            <label for="permanent_address" class="block text-sm font-medium text-gray-700 mb-1">স্থায়ী ঠিকানা (যদি ভিন্ন হয়)</label>
            <textarea id="permanent_address" name="permanent_address" rows="3" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-teal-500 focus:border-teal-500 sm:text-sm"></textarea>
          </div>
        </div>
      </fieldset>

      <fieldset class="border border-gray-200 p-6 rounded-md shadow-sm">
        <legend class="text-xl font-semibold text-teal-600 px-2">অভিভাবকের তথ্য</legend>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">
          <div>
            <label for="father_name" class="block text-sm font-medium text-gray-700 mb-1">পিতার নাম *</label>
            <input type="text" id="father_name" name="father_name" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-teal-500 focus:border-teal-500 sm:text-sm" />
          </div>
          <div>
            <label for="father_nid" class="block text-sm font-medium text-gray-700 mb-1">পিতার জাতীয় পরিচয়পত্র নম্বর *</label>
            <input type="text" id="father_nid" name="father_nid" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-teal-500 focus:border-teal-500 sm:text-sm" />
          </div>
          <div>
            <label for="father_phone" class="block text-sm font-medium text-gray-700 mb-1">পিতার মোবাইল নম্বর *</label>
            <input type="tel" id="father_phone" name="father_phone" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-teal-500 focus:border-teal-500 sm:text-sm" />
          </div>
          <div>
            <label for="father_occupation" class="block text-sm font-medium text-gray-700 mb-1">পিতার পেশা</label>
            <input type="text" id="father_occupation" name="father_occupation" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-teal-500 focus:border-teal-500 sm:text-sm" />
          </div>

          <div>
            <label for="mother_name" class="block text-sm font-medium text-gray-700 mb-1">মাতার নাম *</label>
            <input type="text" id="mother_name" name="mother_name" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-teal-500 focus:border-teal-500 sm:text-sm" />
          </div>
          <div>
            <label for="mother_nid" class="block text-sm font-medium text-gray-700 mb-1">মাতার জাতীয় পরিচয়পত্র নম্বর</label>
            <input type="text" id="mother_nid" name="mother_nid" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-teal-500 focus:border-teal-500 sm:text-sm" />
          </div>

          <div class="md:col-span-2">
            <label for="guardian_name" class="block text-sm font-medium text-gray-700 mb-1">অভিভাবকের নাম (যদি পিতা/মাতা না হন)</label>
            <input type="text" id="guardian_name" name="guardian_name" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-teal-500 focus:border-teal-500 sm:text-sm" />
          </div>
          <div>
            <label for="guardian_relation" class="block text-sm font-medium text-gray-700 mb-1">অভিভাবকের সাথে সম্পর্ক</label>
            <input type="text" id="guardian_relation" name="guardian_relation" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-teal-500 focus:border-teal-500 sm:text-sm" />
          </div>
          <div>
            <label for="guardian_phone" class="block text-sm font-medium text-gray-700 mb-1">অভিভাবকের মোবাইল নম্বর</label>
            <input type="tel" id="guardian_phone" name="guardian_phone" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-teal-500 focus:border-teal-500 sm:text-sm" />
          </div>
        </div>
      </fieldset>

      <fieldset class="border border-gray-200 p-6 rounded-md shadow-sm">
        <legend class="text-xl font-semibold text-teal-600 px-2">শিক্ষাগত তথ্য</legend>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">
          <div>
            <label for="apply_class" class="block text-sm font-medium text-gray-700 mb-1">কোন শ্রেণীতে ভর্তি হতে ইচ্ছুক? *</label>
            <select id="apply_class" name="apply_class" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-teal-500 focus:border-teal-500 sm:text-sm">
              <option value="">নির্বাচন করুন</option>
              <option value="nurani">নূরানী</option>
              <option value="nazera">নাজেরা</option>
              <option value="hifz_1">হিফজ (প্রথম স্তর)</option>
              <option value="hifz_2">হিফজ (দ্বিতীয় স্তর)</option>
              <option value="kitab_1">কিতাব (প্রথম শ্রেণী)</option>
              <option value="kitab_2">কিতাব (দ্বিতীয় শ্রেণী)</option>
            </select>
          </div>
          <div>
            <label for="last_madrasa" class="block text-sm font-medium text-gray-700 mb-1">সর্বশেষ যে মাদ্রাসায় অধ্যয়ন করেছেন (যদি থাকে)</label>
            <input type="text" id="last_madrasa" name="last_madrasa" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-teal-500 focus:border-teal-500 sm:text-sm" />
          </div>
          <div>
            <label for="last_class" class="block text-sm font-medium text-gray-700 mb-1">সর্বশেষ যে শ্রেণীতে অধ্যয়ন করেছেন</label>
            <input type="text" id="last_class" name="last_class" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-teal-500 focus:border-teal-500 sm:text-sm" />
          </div>
          <div>
            <label for="passing_year" class="block text-sm font-medium text-gray-700 mb-1">উত্তীর্ণ হওয়ার সাল</label>
            <input type="number" id="passing_year" name="passing_year" min="2000" max="2099" step="1" placeholder="যেমন: ২০২৪" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-teal-500 focus:border-teal-500 sm:text-sm" />
          </div>
        </div>
      </fieldset>

      <fieldset class="border border-gray-200 p-6 rounded-md shadow-sm">
        <legend class="text-xl font-semibold text-teal-600 px-2">প্রয়োজনীয় কাগজপত্র আপলোড করুন</legend>
        <p class="text-sm text-gray-500 mb-4">অনুগ্রহ করে jpg, jpeg, png, pdf ফরম্যাটের ফাইল আপলোড করুন। ফাইলের সর্বোচ্চ সাইজ ৫ এমবি।</p>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">
          <div>
            <label for="student_photo" class="block text-sm font-medium text-gray-700 mb-1">শিক্ষার্থীর পাসপোর্ট সাইজের ছবি *</label>
            <input
              type="file"
              id="student_photo"
              name="student_photo"
              accept=".jpg,.jpeg,.png"
              required
              class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-teal-50 file:text-teal-700 hover:file:bg-teal-100 cursor-pointer" />
          </div>
          <div>
            <label for="birth_certificate_scan" class="block text-sm font-medium text-gray-700 mb-1">জন্ম নিবন্ধন সনদের স্ক্যান কপি *</label>
            <input
              type="file"
              id="birth_certificate_scan"
              name="birth_certificate_scan"
              accept=".jpg,.jpeg,.png,.pdf"
              required
              class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-teal-50 file:text-teal-700 hover:file:bg-teal-100 cursor-pointer" />
          </div>
          <div>
            <label for="father_nid_scan" class="block text-sm font-medium text-gray-700 mb-1">পিতার জাতীয় পরিচয়পত্রের স্ক্যান কপি *</label>
            <input
              type="file"
              id="father_nid_scan"
              name="father_nid_scan"
              accept=".jpg,.jpeg,.png,.pdf"
              required
              class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-teal-50 file:text-teal-700 hover:file:bg-teal-100 cursor-pointer" />
          </div>
          <div>
            <label for="mother_nid_scan" class="block text-sm font-medium text-gray-700 mb-1">মাতার জাতীয় পরিচয়পত্রের স্ক্যান কপি</label>
            <input
              type="file"
              id="mother_nid_scan"
              name="mother_nid_scan"
              accept=".jpg,.jpeg,.png,.pdf"
              class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-teal-50 file:text-teal-700 hover:file:bg-teal-100 cursor-pointer" />
          </div>
          <div class="md:col-span-2">
            <label for="previous_transcript" class="block text-sm font-medium text-gray-700 mb-1">পূর্ববর্তী মাদ্রাসার ট্রান্সক্রিপ্ট/সনদপত্র (যদি থাকে)</label>
            <input
              type="file"
              id="previous_transcript"
              name="previous_transcript"
              accept=".jpg,.jpeg,.png,.pdf"
              class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-teal-50 file:text-teal-700 hover:file:bg-teal-100 cursor-pointer" />
          </div>
        </div>
      </fieldset>

      <div class="flex items-start gap-2">
        <input type="checkbox" id="declaration" name="declaration" required class="mt-1 h-4 w-4 text-teal-600 focus:ring-teal-500 border-gray-300 rounded" />
        <label for="declaration" class="text-sm font-medium text-gray-700"> আমি ঘোষণা করছি যে, উপরে প্রদত্ত সকল তথ্য সত্য এবং নির্ভুল। যদি কোনো তথ্য মিথ্যা প্রমাণিত হয়, তাহলে মাদরাসার কর্তৃপক্ষ আমার আবেদন বাতিল করার অধিকার সংরক্ষণ করে। </label>
      </div>

      <div class="text-center">
        <button type="submit" class="inline-flex justify-center py-3 px-8 border border-transparent shadow-sm text-lg font-medium rounded-md text-white bg-teal-600 hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-500 transition duration-150 ease-in-out">
          ফরম জমা দিন
        </button>
      </div>
    </form>
  </section>
</main>

<?php include 'footer.php'; ?>