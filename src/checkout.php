<?php
$title = "Occams Digital";
$meta = "Occams Digital";
$metakeyword = "Occams Digital";

include "header.php";
require_once '../secrets.php';
?>
<script src="email.js"></script>

<div class="container mx-auto px-4 step-form-main-box">
  <div class="grid">
    <form id="multiStepForm" class="w-full rounded-sm shadow-lg overflow-hidden">


      <!-- Scrollable Wrapper with left/right padding -->
      <div class="overflow-x-auto scrollbar-hide px-4">
        <!-- Step Indicator Container -->
        <div id="stepIndicator"
          class="flex flex-nowrap justify-center items-stretch space-x-2 md:space-x-4 bg-black py-6 w-max md:w-full mx-auto">

          <!-- Step 1 -->
          <div class="step  text-white px-4 py-2 rounded-xl space-x-3 min-w-[180px] h-full bg-[var(--primary)]">
            <div class=" flex items-center gap-[10px]">
              <img src="./assets/image/logo/step-1.svg" alt="step 1">
              <div class="text-xs">Step 1</div>
            </div>
            <div class="text-left">

              <span class="font-semibold text-sm">Personal details</span>
            </div>
          </div>

          <div class="h-full w-5 bg-orange-500 shrink-0 self-center"></div>

          <!-- Step 2 -->

          <div class="step  text-white px-4 py-2 rounded-xl space-x-3 min-w-[180px] h-full bg-gray-800">
            <div class=" flex items-center gap-[10px]">
              <img src="./assets/image/logo/step-2.svg" alt="step 1">
              <div class="text-xs">Step 2</div>
            </div>
            <div class="text-left">
              <span class="font-semibold text-sm">Services & Add-Ons</span>
            </div>
          </div>


          <div class="h-full w-5 bg-gray-600 shrink-0 self-center"></div>

          <!-- Step 3 -->

          <div class="step  text-white px-4 py-2 rounded-xl space-x-3 min-w-[180px] h-full bg-gray-800">
            <div class=" flex items-center gap-[10px]">
              <img src="./assets/image/logo/step-3.svg" alt="step 1">
              <div class="text-xs">Step 3</div>
            </div>
            <div class="text-left">
              <span class="font-semibold text-sm">Client Agreement</span>
            </div>
          </div>

          <div class="h-full w-5 bg-gray-600 shrink-0 self-center"></div>

          <!-- Step 4 -->

          <div class="step  text-white px-4 py-2 rounded-xl space-x-3 min-w-[180px] h-full bg-gray-800">
            <div class=" flex items-center gap-[10px]">
              <img src="./assets/image/logo/step-4.svg" alt="step 1">
              <div class="text-xs">Step 4</div>
            </div>
            <div class="text-left">
              <span class="font-semibold text-sm">Payment & Checkout</span>
            </div>
          </div>
        </div>
      </div>






      <!-- ———— STEP 1 ———— -->
      <fieldset data-step="0" class="py-6 ">

        <div class="container mx-auto">
          <div class="grid grid-cols-1 lg:grid-cols-4 price-popup gap-0  gap-y-[30px]  md:gap-y-[0px] md:gap-6"
            id="popup">

            <div class="col-span-3 addons-menu-css">

              <div class="border-b border-white pb-[30px]">
                <span class="page-nav rounded-[0.71875rem] bg-[#F36B21] py-[2px] px-[10px]">Selected
                  Plan</span>

                <h3 class="plan-title heading_2 text-[var(--primary)] my-[16px]">Essential Plan</h3>
                <p class="plan-price heading_2 ">$3,499/mo</p>
              </div>
              <div class="pt-[20px]">


                <form class="w-full max-w-3xl space-y-4" id="leadForm" action="send-email.php" method="POST"
                  onsubmit="return submitForm(event)">
                  <div class="py-[20px]">
                    <h3 class="heading_4 text-[var(--primary)]">Personal Details</h3>
                  </div>
                  <!-- Row 1 -->
                  <div class="grid md:grid-cols-2 gap-4 ">
                    <!-- Full Name -->
                    <div class="relative border border-gray-500 rounded-full px-4 py-2 input-wrapper transition-colors">
                      <label for="fullname"
                        class="absolute -top-3 left-4 bg-[#242424] px-1 text-sm text-gray-400 transition-all">
                        Full Name<span class="text-red-500">*</span>
                      </label>
                      <input type="text" id="fullname" name="fullname"
                        class="bg-transparent w-full focus:outline-none mt-1 text-white placeholder-white" / required>
                    </div>

                    <!-- Email -->
                    <div class="relative border border-gray-500 rounded-full px-4 py-2 input-wrapper transition-colors">
                      <label for="email"
                        class="absolute -top-3 left-4 bg-[#242424] px-1 text-sm text-gray-400 transition-all">
                        Email<span class="text-red-500">*</span>
                      </label>
                      <input type="email" id="email" name="email" placeholder=""
                        class="bg-transparent w-full focus:outline-none mt-1 text-white placeholder-white" / required>
                    </div>
                  </div>

                  <!-- Company Name -->
                  <div
                    class="relative border border-gray-500 rounded-full px-4 py-2 input-wrapper transition-colors mt-8">
                    <label for="company"
                      class="absolute -top-3 left-4 bg-[#242424] px-1 text-sm text-gray-400 transition-all">
                      Company Name<span class="text-red-500">*</span>
                    </label>
                    <input type="text" id="company" name="company" placeholder=""
                      class="bg-transparent w-full focus:outline-none mt-1 text-white placeholder-white" / required>
                  </div>

                  <!-- How did you hear about us -->
                  <div
                    class="relative border border-gray-500 rounded-2xl px-4 py-4 input-wrapper transition-colors mt-8">
                    <label for="message"
                      class="absolute -top-3 left-4 bg-[#242424] px-1 text-sm text-gray-400 transition-all">
                      How did you hear about us?
                    </label>
                    <textarea id="message" name="message" rows="4"
                      class="bg-transparent w-full focus:outline-none mt-1 text-white placeholder-gray-400 resize-none"></textarea>
                  </div>
                </form>

              </div>



            </div>

            <div class="col-span-1 ">
              <div class="addons-menu-css-price">
                <h2 class="text-[var(--primary)] page-nav my-3">Order Summery</h2>
                <div class="flex justify-between my-3">
                  <p>Plan Type :</p>
                  <p class="plan-title">Essentials</p>
                </div>

                <div class="flex justify-between my-3">
                  <p>Pricing :</p>
                  <p class="plan-price">$3,499.00</p>
                </div>

                <!-- <div class="flex justify-between my-3">
                                    <p>Add-ons</p>
                                    <p><span id="total-amount">$0/mo</span></p>
                                </div> -->

                <div class="flex justify-between my-3 py-3 border-t border-white">
                  <p>Total</p>
                  <p class="total-monthly-plan" id="monthly-price"></p>
                </div>
                <div class="mt-8 text-center">
                  <button type="button"
                    class="nextBtn w-full bg-[var(--primary)]  text-white px-2 py-2 rounded-full cta-font cursor-pointer hover:scale-105 transition-all duration-300 ease-in">Next</button>
                </div>
              </div>
            </div>


          </div>
        </div>


      </fieldset>

      <!-- ———— STEP 2 ———— -->
      <fieldset data-step="1" class="py-6 hidden ">
        <p id="plan-info"></p>

        <div id="addonsPopup" class="">
          <div class="rounded-[1.875rem]" tabindex="0">

            <div class="container mx-auto">
              <div class="grid">

              </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-4 price-popup gap-0  gap-y-[30px]  md:gap-y-[0px] md:gap-6"
              id="popup">

              <div class="col-span-3 addons-menu-css">
                <!-- Demo -->
                <!--  <div class="mb-[50px]">
                                    <h2 class="plan-title heading_2 text-[var(--primary)] mb-4 " data-name="Digital Marketing and PR" data-amount="1" data-price-id="price_1RdE1JHcnj11XqyCjy5SDKyp">Digital Marketing and PR</h2>
                                    <p class="mb-6">
                                        <span class="plan-price heading_2 total-monthly-plan">$3,499/mo</span>
                                        <span class="plan-price page-nav text-[#747474] total-addon-service">($3,499 + 0
                                            Add-ons)</span>
                                    </p>
                                    <h3 class="page-nav">Everything you need to get started - powerful,
                                        predictable, professional.</h3>
                                </div>
 -->
                <!-- Demo End -->

                <div class="mb-[50px]">
                  <h2 class="plan-title heading_2 text-[var(--primary)] mb-4 " data-name="Essentials Plan"
                    data-amount="3499" data-price-id="price_1RbQ86Hcnj11XqyCEVVUWZYh">Essential Plan</h2>
                  <p class="mb-6">
                    <span class="plan-price heading_2 total-monthly-plan">$3,499/mo</span>
                    <span class="plan-price page-nav text-[#747474] total-addon-service">($3,499 + 0
                      Add-ons)</span>
                  </p>
                  <h3 class="page-nav">Everything you need to get started - powerful,
                    predictable, professional.</h3>
                </div>
                <div id="addons-section" class="addons" style="display: none;">
                  <div class="flex items-center justify-between py-4 border-t border-[#676767]">
                    <div>
                      <h1 class="heading_4 text-[var(--primary)]">Smart Add-ons</h1>
                    </div>
                    <div class="flex space-x-8 text-sm font-medium text-gray-600 pr-[51px]">
                      <div>Qty</div>
                      <div>$</div>
                    </div>
                  </div>

                  <!-- first add-ons     -->
                  <div
                    class="addon-item flex items-center justify-between  rounded-[2.1875rem] border border-[#676767] p-[10px] cursor-pointer"
                    data-name="Reputation Management Tool" data-amount="50" data-tablabel="reputation_mgm"
                    data-price-id="price_1RbQALHcnj11XqyCsY0uxjTe" data-qty="1">

                    <div class="flex gap-4 justify-center items-center">
                      <div>
                        <img class="default-icon" src="./assets/image/check_dark.svg" alt="check">
                        <img class="selected-icon hidden" src="./assets/image/check.svg" alt="check">
                      </div>
                      <div>
                        <h1 class="body-text-1">Reputation Management Tool</h1>
                      </div>
                    </div>


                    <div class="flex space-x-8 text-sm font-medium">
                      <div class="flex space-x-8 text-sm font-medium items-center">
                        <div class="qty-controls flex items-center space-x-2">
                          <button class="decrease px-2 rounded-full">−</button>
                          <span class="qty-value">1</span>
                          <button class="increase px-2 rounded-full">+</button>
                        </div>
                      </div>
                      <div>$50/mo</div>
                    </div>
                  </div>

                  <!-- 2nd add-ons  -->

                  <div
                    class="addon-item flex items-center justify-between  rounded-[2.1875rem] border border-[#676767] p-[10px] mt-4 cursor-pointer"
                    data-name="Campaign based Landing Page" data-amount="299" data-tablabel="campaign_based_lp"
                    data-price-id="price_1RbQBCHcnj11XqyC9i7NgLly" data-qty="1">

                    <div class="flex gap-4 justify-center items-center">
                      <div>
                        <img class="default-icon" src="./assets/image/check_dark.svg" alt="check">
                        <img class="selected-icon hidden" src="./assets/image/check.svg" alt="check">
                      </div>
                      <div>
                        <h1 class="body-text-1">Campaign based Landing Page</h1>
                      </div>
                    </div>


                    <div class="flex space-x-8 text-sm font-medium ">
                      <div class="flex space-x-8 text-sm font-medium items-center">
                        <div class="qty-controls flex items-center space-x-2">
                          <button class="decrease px-2 rounded-full">−</button>
                          <span class="qty-value">1</span>
                          <button class="increase px-2 rounded-full">+</button>
                        </div>
                      </div>
                      <div>$299/mo</div>
                    </div>
                  </div>

                  <!-- 3rd add-ons   -->

                  <div
                    class="addon-item flex items-center justify-between  rounded-[2.1875rem] border border-[#676767] p-[10px] mt-4 cursor-pointer"
                    data-name="AI Chat Receptionist" data-amount="50" data-tablabel="ai_chat"
                    data-price-id="price_1RbQBUHcnj11XqyCoJGC8tq4" data-qty="1">

                    <div class="flex gap-4 justify-center items-center">
                      <div>
                        <img class="default-icon" src="./assets/image/check_dark.svg" alt="check">
                        <img class="selected-icon hidden" src="./assets/image/check.svg" alt="check">
                      </div>
                      <div>
                        <h1 class="body-text-1">AI Chat Receptionist</h1>
                      </div>
                    </div>


                    <div class="flex space-x-8 text-sm font-medium ">
                      <div class="flex space-x-8 text-sm font-medium items-center">
                        <div class="qty-controls flex items-center space-x-2">
                          <button class="decrease px-2 rounded-full">−</button>
                          <span class="qty-value">1</span>
                          <button class="increase px-2 rounded-full">+</button>
                        </div>
                      </div>
                      <div>$50/mo</div>
                    </div>
                  </div>

                  <!-- 4th add-ons   -->

                  <div
                    class="addon-item flex items-center justify-between  rounded-[2.1875rem] border border-[#676767] p-[10px] mt-4 cursor-pointer"
                    data-name="AI Knowledgebase Builder" data-amount="50" data-tablabel="ai_knowledge"
                    data-price-id="price_1RbQBjHcnj11XqyCq3VxNX43" data-qty="1">

                    <div class="flex gap-4 justify-center items-center">
                      <div>
                        <img class="default-icon" src="./assets/image/check_dark.svg" alt="check">
                        <img class="selected-icon hidden" src="./assets/image/check.svg" alt="check">
                      </div>
                      <div>
                        <h1 class="body-text-1">AI Knowledgebase Builder</h1>
                      </div>
                    </div>


                    <div class="flex space-x-8 text-sm font-medium ">
                      <div class="flex space-x-8 text-sm font-medium items-center">
                        <div class="qty-controls flex items-center space-x-2">
                          <button class="decrease px-2 rounded-full">−</button>
                          <span class="qty-value">1</span>
                          <button class="increase px-2 rounded-full">+</button>
                        </div>
                      </div>
                      <div>$50/mo</div>
                    </div>
                  </div>


                  <!-- 5th add-ons   -->

                  <div
                    class="addon-item flex items-center justify-between  rounded-[2.1875rem] border border-[#676767] p-[10px] mt-4 cursor-pointer"
                    data-name="Website Copy, Design and Development" data-amount="3000" data-tablabel="website_dnd"
                    data-price-id="price_1RbQC1Hcnj11XqyCubmNUzC5" data-qty="1">

                    <div class="flex gap-4 justify-center items-center">
                      <div>
                        <img class="default-icon" src="./assets/image/check_dark.svg" alt="check">
                        <img class="selected-icon hidden" src="./assets/image/check.svg" alt="check">
                      </div>
                      <div class="relative inline-block">
                        <li class="page-nav relative list-none flex items-center justify-center gap-2">
                          Website Copy, Design and Development
                          <span class="page-nav-container relative group">
                            <img src="./assets/image/logo/info-logo.svg" alt="info">
                          </span>
                          <div
                            class="page-nav-description absolute left-1/2 top-full mt-2 hidden group-hover:block bg-white p-2 border rounded shadow-md w-[300px] z-10">
                            <p class="text-black text-sm">
                              Pricing applies to standard business websites up to 5-6 unique
                              page
                              templates
                              (e.g., Home, About, Services, Blog, Contact), built on platforms
                              such as WordPress,
                              Webflow, or equivalent.
                            </p>
                          </div>
                        </li>
                      </div>



                    </div>


                    <div class="flex space-x-8 text-sm font-medium ">
                      <div class="flex space-x-8 text-sm font-medium items-center">
                        <div class="qty-controls flex items-center space-x-2">
                          <button class="decrease px-2 rounded-full">−</button>
                          <span class="qty-value">1</span>
                          <button class="increase px-2 rounded-full">+</button>
                        </div>
                      </div>
                      <div>$3000/project</div>
                    </div>
                  </div>

                  <!-- 6th add-ons   -->
                  <div
                    class="addon-item flex items-center justify-between  rounded-[2.1875rem] border border-[#676767] p-[10px] mt-4 cursor-pointer"
                    data-name="Website Maintenance On Wordpress" data-amount="69" data-tablabel="website_mantenance"
                    data-price-id="price_1RbQCHHcnj11XqyCuBooD1We" data-qty="1">

                    <div class="flex gap-4 justify-center items-center">
                      <div>
                        <img class="default-icon" src="./assets/image/check_dark.svg" alt="check">
                        <img class="selected-icon hidden" src="./assets/image/check.svg" alt="check">
                      </div>
                      <div>
                        <h1 class="body-text-1">Website Maintenance On Wordpress</h1>
                      </div>
                    </div>


                    <div class="flex space-x-8 text-sm font-medium ">
                      <div class="flex space-x-8 text-sm font-medium items-center">
                        <div class="qty-controls flex items-center space-x-2">
                          <button class="decrease px-2 rounded-full">−</button>
                          <span class="qty-value">1</span>
                          <button class="increase px-2 rounded-full">+</button>
                        </div>
                      </div>
                      <div>$69/mo</div>
                    </div>
                  </div>

                  <!-- 7th add-ons   -->
                  <div
                    class="addon-item flex items-center justify-between  rounded-[2.1875rem] border border-[#676767] p-[10px] mt-4 cursor-pointer"
                    data-name="Email Campaign" data-amount="199" data-tablabel="email_campaign"
                    data-price-id="price_1RbQCnHcnj11XqyCqpWO1jgo" data-qty="1">

                    <div class="flex gap-4 justify-center items-center">
                      <div>
                        <img class="default-icon" src="./assets/image/check_dark.svg" alt="check">
                        <img class="selected-icon hidden" src="./assets/image/check.svg" alt="check">
                      </div>
                      <div>
                        <h1 class="body-text-1">Email Campaign</h1>
                      </div>
                    </div>


                    <div class="flex space-x-8 text-sm font-medium ">
                      <div class="flex space-x-8 text-sm font-medium items-center">
                        <div class="qty-controls flex items-center space-x-2">
                          <button class="decrease px-2 rounded-full">−</button>
                          <span class="qty-value">1</span>
                          <button class="increase px-2 rounded-full">+</button>
                        </div>
                      </div>
                      <div>$199/campaign</div>
                    </div>
                  </div>

                  <!-- 8th add-ons   -->
                  <div
                    class="addon-item flex items-center justify-between  rounded-[2.1875rem] border border-[#676767] p-[10px] mt-4 cursor-pointer"
                    data-name="Unlimited Requests Graphic Design" data-amount="1500" data-tablabel="unlimited_graphic"
                    data-price-id="price_1RbQD7Hcnj11XqyCev86gEmb" data-qty="1">

                    <div class="flex gap-4 justify-center items-center">
                      <div>
                        <img class="default-icon" src="./assets/image/check_dark.svg" alt="check">
                        <img class="selected-icon hidden" src="./assets/image/check.svg" alt="check">
                      </div>
                      <div>
                        <h1 class="body-text-1">Unlimited Requests - Graphic Design</h1>
                      </div>
                    </div>


                    <div class="flex space-x-8 text-sm font-medium ">
                      <div class="flex space-x-8 text-sm font-medium items-center">
                        <div class="qty-controls flex items-center space-x-2">
                          <button class="decrease px-2 rounded-full">−</button>
                          <span class="qty-value">1</span>
                          <button class="increase px-2 rounded-full">+</button>
                        </div>
                      </div>
                      <div>$1500/mo</div>
                    </div>
                  </div>

                  <!-- 9th add-ons   -->
                  <div
                    class="addon-item flex items-center justify-between  rounded-[2.1875rem] border border-[#676767] p-[10px] mt-4 cursor-pointer"
                    data-name="Content and Copywriting (5-hrs Per Qty)" data-amount="750" data-tablabel="content"
                    data-price-id="price_1RbQDQHcnj11XqyCxHewkPIy" data-qty="1">

                    <div class="flex gap-4 justify-center items-center">
                      <div>
                        <img class="default-icon" src="./assets/image/check_dark.svg" alt="check">
                        <img class="selected-icon hidden" src="./assets/image/check.svg" alt="check">
                      </div>
                      <div>
                        <!-- <h1 class="body-text-1">Content and Copywriting (5-hrs Per Qty)</h1> -->
                        <div class="relative inline-block mb-0">
                          <li class="page-nav relative list-none flex gap-[11px] justify-center items-center">
                            Content and Copywriting
                            <span class="page-nav-container relative group">
                              <img src="./assets/image/logo/info-logo.svg" alt="info">
                            </span>
                            <div
                              class="page-nav-description absolute right-0 top-full mt-2 hidden group-hover:block bg-white p-2 border rounded shadow-md  z-10">
                              <p class="text-black text-sm">
                                5hrs Per Qty/Per Brand
                              </p>
                            </div>
                          </li>
                        </div>
                      </div>
                    </div>


                    <div class="flex space-x-8 text-sm font-medium ">
                      <div class="flex space-x-8 text-sm font-medium items-center">
                        <div class="qty-controls flex items-center space-x-2">
                          <button class="decrease px-2 rounded-full">−</button>
                          <span class="qty-value">1</span>
                          <button class="increase px-2 rounded-full">+</button>
                        </div>
                      </div>
                      <div>$750/mo</div>
                    </div>
                  </div>

                  <!-- 10th add-ons   -->
                  <div
                    class="addon-item flex items-center justify-between  rounded-[2.1875rem] border border-[#676767] p-[10px] mt-4 cursor-pointer"
                    data-name="Additional Social Media Account Management (10 posts per month)" data-amount="200"
                    data-tablabel="additional_social_media" data-price-id="price_1RbQDkHcnj11XqyCV08N3szs" data-qty="1">

                    <div class="flex gap-4 justify-center items-center">
                      <div>
                        <img class="default-icon" src="./assets/image/check_dark.svg" alt="check">
                        <img class="selected-icon hidden" src="./assets/image/check.svg" alt="check">
                      </div>
                      <div>
                        <div class="relative inline-block mb-0">
                          <li class="page-nav relative list-none flex gap-[11px] justify-center items-center">
                            Additional Social
                            Media Account Management
                            <span class="page-nav-container relative group">
                              <img src="./assets/image/logo/info-logo.svg" alt="info">
                            </span>
                            <div
                              class="page-nav-description absolute right-0 top-full mt-2 hidden group-hover:block bg-white p-2 border rounded shadow-md  z-10">
                              <p class="text-black text-sm">
                                10 Posts Per Month/Per Brand
                              </p>
                            </div>
                          </li>
                        </div>
                      </div>
                    </div>


                    <div class="flex space-x-8 text-sm font-medium ">
                      <div class="flex space-x-8 text-sm font-medium items-center">
                        <div class="qty-controls flex items-center space-x-2">
                          <button class="decrease px-2 rounded-full">−</button>
                          <span class="qty-value">1</span>
                          <button class="increase px-2 rounded-full">+</button>
                        </div>
                      </div>
                      <div>$200/mo</div>
                    </div>
                  </div>
                </div>
                <div class="mt-8">
                  <button type="button"
                    class="prevBtn bg-[var(--black)] border-1 border-white  text-white px-6 py-2 rounded-full cta-font cursor-pointer hover:scale-105 transition-all duration-300 ease-in">Previous</button>
                </div>
              </div>

              <div class="col-span-1 ">
                <div class="addons-menu-css-price">
                  <h2 class="text-[var(--primary)] page-nav my-3">Order Summery</h2>
                  <div class="flex justify-between my-3">
                    <p>Plan Type :</p>
                    <p class="plan-title">Essentials</p>
                  </div>

                  <div class="flex justify-between my-3">
                    <p>Pricing :</p>
                    <p class="plan-price">$3,499.00</p>
                  </div>

                  <div class="flex justify-between my-3" id="addons_price">
                    <p>Add-ons</p>
                    <p><span id="total-amount">$0/mo</span></p>
                  </div>

                  <div class="flex justify-between my-3 py-3 border-t border-white">
                    <p>Total</p>
                    <p class="total-monthly-plan" id="monthly-price">$3,499.00</p>
                  </div>
                  <div class="mt-8 text-center">
                    <button type="button"
                      class="nextBtn w-full bg-[var(--primary)]  text-white px-6 py-2 rounded-full cta-font cursor-pointer hover:scale-105 transition-all duration-300 ease-in">Next</button>
                  </div>
                </div>
              </div>


            </div>
          </div>
        </div>
      </fieldset>

      <!-- ———— STEP 3 ———— -->
      <fieldset data-step="2" class="py-6  hidden">

        <div id="addonsPopup" class="">
          <div class="rounded-[1.875rem]" tabindex="0">

            <div class="grid grid-cols-1 lg:grid-cols-4 price-popup gap-0  gap-y-[30px]  md:gap-y-[0px] md:gap-6"
              id="popup">

              <div class="col-span-3 addons-menu-css">

                <div class="mb-[50px] ">
                  <h2 class="heading_4 text-[var(--primary)] mb-4 ">Client Service Agreement</h2>

                  <div
                    class="aggrement-model border border-[#676767] rounded-[1.25rem] p-[50px] h-[400px] overflow-y-auto">
                    <h6 class="page-nav my-5"><b>Client Services Agreement – Occams Digital</b></h6>

                    <div class="container">
                      <form>
                        <label for="contactName">Contact Name: </label><strong><span
                            id="displayFullName"></span></strong></br>

                        <label for="businessName">Business Name: </label><strong><span
                            id="displayCompany"></span></strong></br>

                        <!-- <label for="state">State or Province of Registration: </label>
      <input type="text" id="state" name="state" required></strong></br> -->

                        <label for="email">Email: </label><strong><span id="displayEmail"></span></strong></br>

                        <label for="effectiveDate">Effective Date: </label><strong>
                          <input type="text" id="effectiveDate" name="effectiveDate" class="readonly" readonly></strong>
                      </form>

                      <script>
                        const today = new Date();
                        const usFormattedDate = `${(today.getMonth() + 1).toString().padStart(2, '0')}/` +
                          `${today.getDate().toString().padStart(2, '0')}/` +
                          `${today.getFullYear()}`;

                        document.getElementById("effectiveDate").value = usFormattedDate;    </script>

                      <p><br>Service Provider: <strong>Occams Digital, a division of Occams Advisory Inc.</strong></p>
                      <br>

                      <div class="section">
                        <h2>Scope of Services</h2>
                        <div id="monthlyPlan_id">
                          <h3>Essential Monthly Plan — $3,499/month</h3><br>
                          <ul class="list-disc pl-6 space-y-1 text-sm text-gray-300">
                            <li>Unlimited graphic and motion design (1 active request at a time, unlimited revisions)
                            </li>
                            <li>SEO and Local SEO setup</li>
                            <li>3 social media account setups</li>
                            <li>Management of 1 social media account (up to 10 posts per month)</li>
                            <li>1 email campaign per month</li>
                            <li>PPC ad campaign setup and management (management limited to $1,500 in PPC ad spend, sold
                              separately)</li>
                            <li>Up to 4 Brand Audit Reports per month</li>
                            <li>Business App access</li>
                            <li>CRM and platform integrations for one website</li>
                            <li>One-time Full Brand Audit included</li>
                          </ul>

                        </div>
                        <div id="halfYearlyPlan_id"><br>
                          <h3>Half-Yearly Plan — $17,495</h3></br>
                          <p>Includes 6 months of Essential plan services for the price of 5 months.</p>

                          <p>Optional Smart Add-Ons available (see Schedule A of the agreement).</p>


                          <div class="section"><br>
                            <ul class="list-disc pl-6 space-y-2 text-sm text-gray-300">
                              <li><strong>Term:</strong> Auto-renewal with 30 days’ written notice to cancel.</li>
                              <li><strong>Payment:</strong> Due in advance, non-refundable, services start after
                                payment.</li>
                              <li><strong>Delivery:</strong> 2–4 business days typical; complex tasks may take longer.
                              </li>
                              <li><strong>Ownership:</strong> Final deliverables are Client’s after full payment.</li>
                              <li><strong>License:</strong> Limited use of Client IP during project term.</li>
                              <li><strong>Indemnity:</strong> Client ensures rights to content they provide.</li>
                              <li><strong>Disclaimers:</strong> No performance guarantees, services provided “as is.”
                              </li>
                              <li><strong>Passwords:</strong> Client is responsible for secure and unique credentials.
                              </li>
                              <li><strong>Termination:</strong> 5-day notice by Client; Occams may cancel anytime.</li>
                              <li><strong>Confidentiality:</strong> Survives 2 years after termination.</li>
                              <li><strong>Liability:</strong> Limited to one month’s paid fee.</li>
                              <li><strong>Governing Law:</strong> State of Florida, USA.</li>
                            </ul>

                          </div>


                        </div><br>

                        <div class="'/[;oK+lsection">
                          <h2>Schedule A – Smart Add-Ons</h2>
                          <table id="addons-table" class="w-full text-left border-collapse">
                            <thead>
                              <tr class="border-b">
                                <th class="py-2 px-4">Add-on</th>
                                <th class="py-2 px-4">Price</th>
                              </tr>
                            </thead>
                            <tbody id="addons-tbody">
                              <tr>
                                <td colspan="2" class="py-2 px-4 text-gray-500">No add-ons selected.</td>
                              </tr>
                            </tbody>
                            <tfoot>
                              <tr class="border-t font-semibold">
                                <td class="py-2 px-4">Total</td>
                                <td class="py-2 px-4 addons-total">₹0/mo</td>
                              </tr>
                            </tfoot>
                          </table>
                        </div>
                      </div>
                    </div>

                  </div>


                  <div class="flex items-start align-middle mt-4">
                    <input type="checkbox" id="agreement"
                      class="form-checkbox  mr-2 w-5 h-5 border border-gray-400 rounded">
                    <label for="agreement" class="text-white text-sm">
                      I have read, understood, and agree to the Client Service Agreement and Privacy
                      Policy of Occams Digital. I consent to the collection, use, and disclosure of my
                      information as described in the agreement and agree to comply with the terms
                      outlined.

                    </label>
                  </div>




                  <div class="mt-8">
                    <button type="button" id="prevBtn"
                      class="prevBtn bg-[var(--black)] border-1 border-white  text-white px-6 py-2 rounded-full cta-font cursor-pointer hover:scale-105 transition-all duration-300 ease-in">Previous</button>
                  </div>
                </div>
              </div>
              <div class="col-span-1 ">
                <div class="addons-menu-css-price">
                  <h2 class="text-[var(--primary)] page-nav my-3">Order Summery</h2>
                  <div class="flex justify-between my-3">
                    <p>Plan Type :</p>
                    <p class="plan-title">Essentials</p>
                  </div>

                  <div class="flex justify-between my-3">
                    <p>Pricing :</p>
                    <p class="plan-price">$3,499.00</p>
                  </div>

                  <div class="flex justify-between my-3">
                    <p>Add-ons</p>
                    <p><span class="addons-total">$0/mo</span></p>
                  </div>

                  <div class="flex justify-between my-3 py-3 border-t border-white">
                    <p>Total</p>
                    <p class="total-monthly-plan" id="monthly-price">$3,499.00</p>
                  </div>
                  <div class="mt-8 text-center">
                    <button type="button"
                      class="nextBtn w-full bg-[var(--primary)]  text-white px-6 py-2 rounded-full cta-font cursor-pointer hover:scale-105 transition-all duration-300 ease-in"
                      id="submitButton">Next</button>
                  </div>
                </div>
              </div>


            </div>
          </div>
        </div>

      </fieldset>

      <!-- ———— STEP 4 ———— -->
      <fieldset data-step="3" class="py-6  hidden">



        <!-- <stripe-buy-button buy-button-id="buy_btn_1RYXCpDAo2OreUHG3G0NQ2IT"
                    publishable-key="pk_test_51RYX7wDAo2OreUHGdcEW4IlCNTKS8EGwqvO9pQ9edTfiR8saG5a63snRajOBk4JLkcMfdB4RQjjjp965zmLwSQI900WJUCkycJ">
                </stripe-buy-button> -->


        <div class="grid grid-cols-1 lg:grid-cols-4 price-popup gap-0 gap-y-[30px] md:gap-y-[0px] md:gap-6">

          <div class="col-span-3 addons-menu-css">
            <form id="payment-form">
              <div id="loader" style="display: none; text-align: center; margin-top: 20px;">
                <div class="spinner"></div>
                <p>Processing your payment, please wait...</p>
              </div>
              <div
                class="hidden relative border border-gray-500 rounded-full px-4 py-2 input-wrapper transition-colors">
                <label for="email"
                  class="absolute -top-3 left-4 bg-[#242424] px-1 text-sm text-gray-400 transition-all">
                  Email<span class="text-red-500">*</span>
                </label>
                <input type="email" id="payment_email" name="email" placeholder=""
                  class="bg-transparent w-full focus:outline-none mt-1 text-white placeholder-white" / required>
              </div>
              <div type="text" id="email-errors"></div>
              <h4></h4>
              <div id="payment-element">
                <!--Stripe.js injects the Payment Element-->
              </div>



              <div class="mt-8 flex gap-10">

                <button type="button"
                  class="prevBtn bg-[var(--black)] border-1 border-white  text-white px-6 py-2 rounded-full cta-font cursor-pointer hover:scale-105 transition-all duration-300 ease-in">Previous</button>
                <button type="submit" id="submit"
                  class="cta-font bg-[var(--primary)]  text-white px-4 py-2 rounded-full cta-font cursor-pointer hover:scale-105 transition-all duration-300 ease-in">
                  <div class="spinner hidden" id="spinner"></div>
                  <span id="button-text">Pay now</span>
                </button>
                <div id="payment-message" class="hidden"></div>


              </div>
            </form>

          </div>



          <div class="col-span-1 ">
            <div class="addons-menu-css-price">
              <h2 class="text-[var(--primary)] page-nav my-3">Order Summery</h2>
              <div class="flex justify-between my-3">
                <p>Plan Type :</p>
                <p class="plan-title">Essentials</p>
              </div>

              <div class="flex justify-between my-3">
                <p>Pricing :</p>
                <p class="plan-price">$3,499.00</p>
              </div>

              <div class="flex justify-between my-3">
                <p>Add-ons</p>
                <p><span class="addons-total">$0/mo</span></p>
              </div>

              <div class="flex justify-between my-3 py-3 border-t border-white">
                <p>Total</p>
                <p class="total-monthly-plan" id="monthly-price">$3,499.00</p>
              </div>
              <div class="mt-8 text-center">
                <!-- <button type="button" class="nextBtn w-full bg-[var(--primary)] text-white px-6 py-2 rounded-full cta-font cursor-pointer hover:scale-105 transition-all duration-300 ease-in" id="submitButton">Next</button> -->
              </div>
            </div>
          </div>
        </div>
      </fieldset>
      <input type="hidden" name="clientSecret" id="clientSecret" value="">
      <input type="hidden" name="selected_addons" id="selectedAddons">

    </form>
  </div>
</div>


<?php
include "footer.php"
  ?>
<!-- Send email persional details -->


<script>
  // Parse plan from URL
  const params = new URLSearchParams(window.location.search);
  const plan = params.get("plan");

  const planData = {
    monthly: {
      name: "Essential",
      price: "$3,499",
      showAddons: true,
      price_id: "price_1RbQ86Hcnj11XqyCEVVUWZYh"

    },
    halfyearly: {
      name: "Popular",
      price: "$17,495",
      showAddons: true,
      price_id: "price_1RbQF0Hcnj11XqyCchGu30pI"

    }
  };

  // DOM elements
  const monthlySection = document.getElementById('monthlyPlan_id');
  const halfYearlySection = document.getElementById('halfYearlyPlan_id');

  // Show relevant section
  if (plan === 'halfyearly') {
    monthlySection.classList.add('hidden');
    halfYearlySection.classList.remove('hidden');
  } else {
    monthlySection.classList.remove('hidden');
    halfYearlySection.classList.add('hidden');
  }
  // Find the plan title element
  const planTitle = document.querySelector('.plan-title');

  // If the plan exists in planData and the element is found
  if (plan && planData[plan] && planTitle) {
    const selectedPlan = planData[plan];

    // Update data attributes and inner text
    planTitle.setAttribute('data-name', selectedPlan.name + ' Plan');
    planTitle.setAttribute('data-amount', selectedPlan.price.replace(/[^0-9]/g, '')); // Strip currency
    planTitle.setAttribute('data-price-id', selectedPlan.price_id || '');

    // Also update visible text if needed
    planTitle.textContent = `${selectedPlan.name} Plan`;
  }
  const planInfo = planData[plan];

  if (planInfo) {
    // Set plan title and visible base price
    document.querySelectorAll(".plan-title").forEach(el => el.textContent = planInfo.name);
    document.querySelectorAll(".plan-price").forEach(el => el.textContent = planInfo.price);

    // ✅ SET total-monthly-plan, total-price, and #monthly-price immediately
    document.querySelectorAll(".total-monthly-plan, .total-price, #monthly-price").forEach(el => {
      el.textContent = `${planInfo.price}`;
    });

    if (planInfo.showAddons) {
      document.getElementById("addons-section").style.display = "block";
    }
  } else {
    document.querySelectorAll(".plan-title").forEach(el => el.textContent = "Invalid Plan");
    document.querySelectorAll(".plan-price").forEach(el => el.textContent = "");
  }
  // Mirror personal details
  document.getElementById("fullname")?.addEventListener("input", e => {
    document.getElementById("displayFullName").textContent = e.target.value;
  });
  document.getElementById("company")?.addEventListener("input", e => {
    document.getElementById("displayCompany").textContent = e.target.value;
  });
  document.getElementById("email")?.addEventListener("input", e => {
    document.getElementById("displayEmail").textContent = e.target.value;
  });

  // Utility
  function formatCurrency(amount) {
    return `$${amount.toLocaleString()}`;
  }

  function getBasePrice() {
    const priceText = document.querySelector(".plan-price")?.textContent || "$0";
    const cleaned = priceText.replace(/[^\d.]/g, '');
    return parseFloat(cleaned) || 0;
  }

  // Core elements
  const addonsPopup = document.getElementById('addonsPopup');
  const addonsBtn = document.getElementById('addonsBtn');
  const doneBtn = document.getElementById('done-button');
  const totalAmountEl = document.getElementById('total-amount');
  const monthlyPriceElems = document.querySelectorAll('.total-monthly-plan');
  const addonInfoElem = document.querySelector('.total-addon-service');
  const addonsTbody = document.getElementById("addons-tbody");
  const addonItems = document.querySelectorAll('.addon-item');

  let lastAddedAddonPrice = 0;

  function updateTotal() {
    let total = 0;
    let selectedCount = 0;
    addonsTbody.innerHTML = "";

    const selectedAddons = document.querySelectorAll('.addon-item.selected');

    if (selectedAddons.length === 0) {
      addonsTbody.innerHTML = `<tr><td colspan="2" class="py-2 px-4 text-gray-500">No add-ons selected.</td></tr>`;
    }

    selectedAddons.forEach(item => {
      const name = item.dataset.name || "Unnamed Addon";
      const quantity = parseInt(item.dataset.qty) || 1;
      const price = parseFloat(item.dataset.amount) || 0;

      const subtotal = quantity * price;
      total += subtotal;
      selectedCount++;

      const row = document.createElement("tr");
      row.innerHTML = `
        <td class="py-2 px-4">${name} × ${quantity}</td>
        <td class="py-2 px-4">${formatCurrency(subtotal)}</td>
      `;
      addonsTbody.appendChild(row);
    });

    totalAmountEl.textContent = `${formatCurrency(total)}`;

    document.querySelectorAll('.addons-total').forEach(el => {
      el.textContent = `${formatCurrency(total)}`;
    });

    const basePrice = getBasePrice();
    const finalPrice = basePrice + total;

    document.querySelectorAll('.total-monthly-plan, .total-price, #monthly-price').forEach(el => {
      el.textContent = `${formatCurrency(finalPrice)}`;
    });

    if (addonInfoElem) {
      addonInfoElem.textContent = `(${formatCurrency(basePrice)} + ${selectedCount} Add-ons)`;
    }

    return total;
  }


  // Add-on click toggle
  addonItems.forEach(item => {
    item.addEventListener('click', () => {
      item.classList.toggle('selected');
      const defaultIcon = item.querySelector('.default-icon');
      const selectedIcon = item.querySelector('.selected-icon');
      defaultIcon?.classList.toggle('hidden');
      selectedIcon?.classList.toggle('hidden');
      updateTotal();
    });
  });

  // Popup open
  addonsBtn?.addEventListener('click', () => {
    addonsPopup?.classList.remove('hidden');
    updateTotal(); // Refresh state on open
  });

  // Popup close (outside click)
  addonsPopup?.addEventListener('click', (e) => {
    if (e.target === addonsPopup) {
      addonsPopup.classList.add('hidden');
    }
  });

  // Done button in popup
  doneBtn?.addEventListener('click', () => {
    lastAddedAddonPrice = updateTotal();
    addonsPopup?.classList.add('hidden');
  });
</script>




<script>
  let currentStep = 0;
  const steps = document.querySelectorAll('fieldset[data-step]');
  const progressBar = document.getElementById('progressBar');
  const totalSteps = steps.length;

  const goToStep = (n) => {
    steps[currentStep].classList.add('hidden');
    currentStep = n;
    steps[currentStep].classList.remove('hidden');

    const progressPercent = ((currentStep + 1) / totalSteps) * 100;
    if (progressBar) progressBar.style.width = `${progressPercent}%`;

    updateStepIndicators();
  };

  const updateStepIndicators = () => {
    const stepElements = document.querySelectorAll('#stepIndicator .step');
    stepElements.forEach((stepEl, index) => {
      const icon = stepEl.querySelector('.step-icon');
      const label = stepEl.querySelector('span');



      stepEl.classList.remove('bg-green-600', 'bg-[var(--primary)]', 'bg-gray-800');

      if (index < currentStep) {
        stepEl.classList.add('bg-green-600');
        // icon.innerHTML = `<i class="fa-solid fa-check text-white text-sm"></i>`;
        label.classList.remove('text-gray-400');
        label.classList.add('text-white');
      } else if (index === currentStep) {
        stepEl.classList.add('bg-[var(--primary)]');
        // icon.textContent = index + 1;
        label.classList.remove('text-gray-400');
        label.classList.add('text-white');
      } else {
        stepEl.classList.add('bg-gray-800');
        // icon.textContent = index + 1;
        label.classList.remove('text-white');
        label.classList.add('text-gray-400');
      }
    });
  };

</script>
<script>
  document.querySelectorAll('.nextBtn').forEach(btn =>
    btn.addEventListener('click', () => {
      if (currentStep === 0) {
        // Step 1 validation
        const fullName = document.getElementById('fullname');
        const email = document.getElementById('email');
        const company = document.getElementById('company');

        let isValid = true;

        // Reset border colors
        [fullName, email, company].forEach(field => field.style.borderColor = '#6B7280');

        // Validate Name
        if (fullName.value.trim() === '') {
          fullName.style.borderColor = 'red';
          isValid = false;
        }

        // Validate Email
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email.value.trim())) {
          email.style.borderColor = 'red';
          isValid = false;
        }

        // Validate Company Name
        if (company.value.trim() === '') {
          company.style.borderColor = 'red';
          isValid = false;
        }

        if (!isValid) {
          Swal.fire({
            icon: 'error',
            title: 'Missing Fields',
            text: 'Please fill out all required fields correctly.',
            confirmButtonColor: '#F36B21'
          });
          return;
        }
      }

      // ✅ Proceed to next step
      goToStep(currentStep + 1);
    })
  );

  // Your existing prevBtn logic is fine
  document.querySelectorAll('.prevBtn').forEach(btn =>
    btn.addEventListener('click', () => goToStep(currentStep - 1))
  );
</script>

<script>
  function getUrlParam(param) {
    const urlParams = new URLSearchParams(window.location.search);
    return urlParams.get(param);
  }

  function resetStripeForm() {
    // Clear hidden inputs
    document.getElementById('clientSecret').value = '';
    document.getElementById('payment_email').value = '';

    // Remove old Stripe script
    const oldScript = document.querySelector('script[src$="stripe/checkout.js"]');
    if (oldScript) {
      oldScript.remove();
      //console.log('[STRIPE RESET] Old Stripe script removed');
    }

    // Reset Stripe-related global vars
    window.totalAmount = null;
    window.clientSecret = null;
    window.stripe = null; // If you stored Stripe globally

    // Reset loader UI
    const loader = document.getElementById('loader');
    if (loader) {
      loader.style.display = 'none';
      loader.innerHTML = '';
    }
  }

  document.querySelector('#prevBtn').addEventListener('click', () => {
    resetStripeForm();
  });


  document.addEventListener('DOMContentLoaded', function () {
    const planDetails = {
      monthly: {
        name: "Essential",
        amount: "3499",
        price_id: "price_1RbQ86Hcnj11XqyCEVVUWZYh"
      },
      halfyearly: {
        name: "Popular",
        amount: "17495",
        price_id: "price_1RbQF0Hcnj11XqyCchGu30pI"
      }
    };

    let checkoutPayload = {
      plan: {},
      addons: [],
      customer: {}
    };

    try {
      const planKey = getUrlParam('plan');
      if (planKey && planDetails[planKey]) {
        checkoutPayload.plan = planDetails[planKey];
        checkoutPayload.plan.key = planKey;
      } else {
        //console.warn('Invalid or missing plan in URL');
      }
    } catch (err) {
      //console.error('Error parsing plan from URL:', err);
    }

    const nextButtons = document.querySelectorAll('.nextBtn');
    nextButtons.forEach((btn, index) => {
      btn.addEventListener('click', () => {
        try {
          if (index === 0) {
            const fullName = document.getElementById('fullname').value.trim();
            const email = document.getElementById('email').value.trim();
            const company = document.getElementById('company').value.trim();
            const message = document.getElementById('message').value.trim();

            if (!fullName || !email || !company) {
              // alert('Please fill in all required fields.');
              return;
            }

            checkoutPayload.customer = { fullName, email, company, message };

            const formData = new FormData();
            formData.append('fullname', fullName);
            formData.append('email', email);
            formData.append('company', company);
            formData.append('message', message);

            fetch('send-email.php', {
              method: 'POST',
              body: formData
            })
              .then(res => res.text())
              .then(res => {
                if (res === 'success') {
                  // alert('Form submitted successfully!');
                } else {
                  // alert('Failed to send email. Please try again.');
                }
              })
              .catch(err => {
                //console.error('Error sending email:', err);
                // alert('An error occurred while sending the email.');
              });

          } else if (index === 1) {
            const selectedAddons = [];
            document.querySelectorAll('.addon-item.selected').forEach(el => {
              const name = el.dataset.name;
              const amount = parseFloat(el.dataset.amount);
              const quantity = parseInt(el.dataset.qty) || 1;
              const price_id = el.dataset.priceId;
              const tablabel = el.dataset.tablabel;

              if (name && amount && price_id) {
                selectedAddons.push({ name, amount, quantity, price_id, tablabel });
              }
            });

            checkoutPayload.addons = selectedAddons;
            //console.log('[STEP 1] Payload after selecting addons:', checkoutPayload);
          }
        } catch (err) {
          //console.error('Error processing step:', err);
          alert('Something went wrong. Please try again.');
        }
      });
    });

    document.getElementById('submitButton').addEventListener('click', () => {
      try {
        const loader = document.getElementById('loader');
        loader.style.display = 'block';

        const selectedAddons = [];
        document.querySelectorAll('.addon-item.selected').forEach(checkbox => {
          selectedAddons.push({
            name: checkbox.dataset.name,
            amount: parseInt(checkbox.dataset.amount),
            quantity: parseInt(checkbox.dataset.qty) || 1,
            price_id: checkbox.dataset.priceId,
            tablabel: checkbox.dataset.tablabel
          });
        });

        checkoutPayload.addons = selectedAddons;

        if (!document.querySelector('script[src="stripe/checkout.js"]')) {
          const siteUrl = "<?php echo $siteurl; ?>";

          fetch(siteUrl + '/stripe/create.php', {
            method: 'POST',
            headers: {
              'Content-Type': 'application/json'
            },
            body: JSON.stringify(checkoutPayload)
          })
            .then(res => res.json())
            .then(data => {
              try {
                const customEmail = document.getElementById('email').value;
                document.getElementById('payment_email').value = customEmail;
                document.getElementById('clientSecret').value = data.clientSecret;
                window.totalAmount = data.totalAmount;

                const existingScript = document.querySelector('script[src="stripe/checkout.js"]');
                if (!existingScript) {
                  const script = document.createElement('script');
                  script.src = siteUrl + '/stripe/checkout.js';
                  script.onload = () => {
                    //console.log('Stripe script loaded successfully.');
                    loader.style.display = 'none';
                    if (typeof initialize === 'function') {
                      initialize(data.clientSecret);
                    }
                  };
                  script.onerror = () => {
                    //console.error('Failed to load stripe/checkout.js');
                    loader.innerHTML = "<p style='color: red;'>Failed to load payment form. Please try again.</p>";
                  };
                  document.head.appendChild(script);
                } else {
                  //console.log('Stripe script already loaded. Initiating with updated session...');
                  if (typeof initialize === 'function') {
                    initialize(data.clientSecret);
                  }
                  loader.style.display = 'none';
                }
              } catch (initErr) {
                //console.error('Error initializing Stripe:', initErr);
                loader.innerHTML = "<p style='color: red;'>Error initializing payment. Please refresh and try again.</p>";
              }
            })
            .catch(err => {
              //console.error('Error sending data to PHP:', err);
              loader.innerHTML = "<p style='color: red;'>Something went wrong. Please try again.</p>";
            });
        } else {
          //console.log('Stripe script already loaded.');
          loader.style.display = 'none';
        }
      } catch (err) {
        //console.error('Error during final submission:', err);
        alert('An unexpected error occurred. Please try again.');
      }
    });
  });
  // Addons quantity change handlers
  document.querySelectorAll('.addon-item').forEach(item => {
    const qtyDisplay = item.querySelector('.qty-value');
    const increaseBtn = item.querySelector('.increase');
    const decreaseBtn = item.querySelector('.decrease');

    increaseBtn?.addEventListener('click', (e) => {
      e.stopPropagation();
      let qty = parseInt(item.dataset.qty) || 1;
      qty += 1;
      item.dataset.qty = qty;
      qtyDisplay.textContent = qty;
      updateTotal();
    });

    decreaseBtn?.addEventListener('click', (e) => {
      e.stopPropagation();
      let qty = parseInt(item.dataset.qty) || 1;
      if (qty > 1) {
        qty -= 1;
        item.dataset.qty = qty;
        qtyDisplay.textContent = qty;
        updateTotal();
      }
    });
  });


</script>