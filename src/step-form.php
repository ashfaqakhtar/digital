<?php
$title = "Occams Digital";
include "header.php";
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
                    <div
                        class="step  text-white px-4 py-2 rounded-xl space-x-3 min-w-[180px] h-full bg-[var(--primary)]">
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


                                <form class="w-full max-w-3xl space-y-4" id="leadForm" action="send-email.php"
                                    method="POST" onsubmit="return submitForm(event)">
                                    <div class="py-[20px]">
                                        <h3 class="heading_4 text-[var(--primary)]">Personal Details</h3>
                                    </div>
                                    <!-- Row 1 -->
                                    <div class="grid md:grid-cols-2 gap-4 ">
                                        <!-- Full Name -->
                                        <div
                                            class="relative border border-gray-500 rounded-full px-4 py-2 input-wrapper transition-colors">
                                            <label for="fullname"
                                                class="absolute -top-3 left-4 bg-[#242424] px-1 text-sm text-gray-400 transition-all">
                                                Full Name<span class="text-red-500">*</span>
                                            </label>
                                            <input type="text" id="fullname"
                                                class="bg-transparent w-full focus:outline-none mt-1 text-white placeholder-white" />
                                        </div>

                                        <!-- Email -->
                                        <div
                                            class="relative border border-gray-500 rounded-full px-4 py-2 input-wrapper transition-colors">
                                            <label for="email"
                                                class="absolute -top-3 left-4 bg-[#242424] px-1 text-sm text-gray-400 transition-all">
                                                Email<span class="text-red-500">*</span>
                                            </label>
                                            <input type="email" id="email" placeholder=""
                                                class="bg-transparent w-full focus:outline-none mt-1 text-white placeholder-white" />
                                        </div>
                                    </div>

                                    <!-- Company Name -->
                                    <div
                                        class="relative border border-gray-500 rounded-full px-4 py-2 input-wrapper transition-colors mt-8">
                                        <label for="company"
                                            class="absolute -top-3 left-4 bg-[#242424] px-1 text-sm text-gray-400 transition-all">
                                            Company Name<span class="text-red-500">*</span>
                                        </label>
                                        <input type="text" id="company" placeholder=""
                                            class="bg-transparent w-full focus:outline-none mt-1 text-white placeholder-white" />
                                    </div>

                                    <!-- How did you hear about us -->
                                    <div
                                        class="relative border border-gray-500 rounded-2xl px-4 py-4 input-wrapper transition-colors mt-8">
                                        <label for="message"
                                            class="absolute -top-3 left-4 bg-[#242424] px-1 text-sm text-gray-400 transition-all">
                                            How did you hear about us?
                                        </label>
                                        <textarea id="message" rows="4"
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
                                    <p class="total-monthly-plan" id="monthly-price">$3,499.00</p>
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

                                <div class="mb-[50px]">
                                    <h2 class="plan-title heading_2 text-[var(--primary)] mb-4 ">Essential Plan</h2>
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
                                        class="addon-item flex items-center justify-between  rounded-[2.1875rem] border border-[#676767] p-[10px] cursor-pointer">

                                        <div class="flex gap-4 justify-center items-center">
                                            <div>
                                                <img class="default-icon" src="./assets/image/check_dark.svg"
                                                    alt="check">
                                                <img class="selected-icon hidden" src="./assets/image/check.svg"
                                                    alt="check">
                                            </div>
                                            <div>
                                                <h1 class="body-text-1">Reputation Management Tool</h1>
                                            </div>
                                        </div>


                                        <div class="flex space-x-8 text-sm font-medium">
                                            <div></div>
                                            <div>$50/mo</div>
                                        </div>
                                    </div>

                                    <!-- 2nd add-ons  -->

                                    <div
                                        class="addon-item flex items-center justify-between  rounded-[2.1875rem] border border-[#676767] p-[10px] mt-4 cursor-pointer">

                                        <div class="flex gap-4 justify-center items-center">
                                            <div>
                                                <img class="default-icon" src="./assets/image/check_dark.svg"
                                                    alt="check">
                                                <img class="selected-icon hidden" src="./assets/image/check.svg"
                                                    alt="check">
                                            </div>
                                            <div>
                                                <h1 class="body-text-1">Campaign based Landing Page</h1>
                                            </div>
                                        </div>


                                        <div class="flex space-x-8 text-sm font-medium ">
                                            <div>1</div>
                                            <div>$299/mo</div>
                                        </div>
                                    </div>

                                    <!-- 3rd add-ons   -->

                                    <div
                                        class="addon-item flex items-center justify-between  rounded-[2.1875rem] border border-[#676767] p-[10px] mt-4 cursor-pointer">

                                        <div class="flex gap-4 justify-center items-center">
                                            <div>
                                                <img class="default-icon" src="./assets/image/check_dark.svg"
                                                    alt="check">
                                                <img class="selected-icon hidden" src="./assets/image/check.svg"
                                                    alt="check">
                                            </div>
                                            <div>
                                                <h1 class="body-text-1">AI Chat Receptionist</h1>
                                            </div>
                                        </div>


                                        <div class="flex space-x-8 text-sm font-medium ">
                                            <div></div>
                                            <div>$50/mo</div>
                                        </div>
                                    </div>

                                    <!-- 4th add-ons   -->

                                    <div
                                        class="addon-item flex items-center justify-between  rounded-[2.1875rem] border border-[#676767] p-[10px] mt-4 cursor-pointer">

                                        <div class="flex gap-4 justify-center items-center">
                                            <div>
                                                <img class="default-icon" src="./assets/image/check_dark.svg"
                                                    alt="check">
                                                <img class="selected-icon hidden" src="./assets/image/check.svg"
                                                    alt="check">
                                            </div>
                                            <div>
                                                <h1 class="body-text-1">AI Knowledgebase Builder</h1>
                                            </div>
                                        </div>


                                        <div class="flex space-x-8 text-sm font-medium ">
                                            <div></div>
                                            <div>$50/mo</div>
                                        </div>
                                    </div>


                                    <!-- 5th add-ons   -->

                                    <div
                                        class="addon-item flex items-center justify-between  rounded-[2.1875rem] border border-[#676767] p-[10px] mt-4 cursor-pointer">

                                        <div class="flex gap-4 justify-center items-center">
                                            <div>
                                                <img class="default-icon" src="./assets/image/check_dark.svg"
                                                    alt="check">
                                                <img class="selected-icon hidden" src="./assets/image/check.svg"
                                                    alt="check">
                                            </div>
                                            <div class="relative inline-block">
                                                <li
                                                    class="page-nav relative list-none flex items-center justify-center gap-2">
                                                    Website Copy, Design and Development
                                                    <span class="page-nav-container relative group">
                                                        <img src="./assets/image/logo/info-logo.svg" alt="info">
                                                    </span>
                                                    <div
                                                        class="page-nav-description absolute left-1/2 top-full mt-2 hidden group-hover:block bg-white p-2 border rounded shadow-md w-[300px] z-10">
                                                        <p class="text-black text-sm">
                                                            Pricing applies to standard business websites up to 5-6
                                                            unique
                                                            page
                                                            templates
                                                            (e.g., Home, About, Services, Blog, Contact), built on
                                                            platforms
                                                            such as WordPress,
                                                            Webflow, or equivalent.
                                                        </p>
                                                    </div>
                                                </li>
                                            </div>



                                        </div>


                                        <div class="flex space-x-8 text-sm font-medium ">
                                            <div>1</div>
                                            <div>$3000/project</div>
                                        </div>
                                    </div>

                                    <!-- 6th add-ons   -->
                                    <div
                                        class="addon-item flex items-center justify-between  rounded-[2.1875rem] border border-[#676767] p-[10px] mt-4 cursor-pointer">

                                        <div class="flex gap-4 justify-center items-center">
                                            <div>
                                                <img class="default-icon" src="./assets/image/check_dark.svg"
                                                    alt="check">
                                                <img class="selected-icon hidden" src="./assets/image/check.svg"
                                                    alt="check">
                                            </div>
                                            <div>
                                                <h1 class="body-text-1">Website Maintenance On Wordpress</h1>
                                            </div>
                                        </div>


                                        <div class="flex space-x-8 text-sm font-medium ">
                                            <div>1</div>
                                            <div>$69/mo</div>
                                        </div>
                                    </div>

                                    <!-- 7th add-ons   -->
                                    <div
                                        class="addon-item flex items-center justify-between  rounded-[2.1875rem] border border-[#676767] p-[10px] mt-4 cursor-pointer">

                                        <div class="flex gap-4 justify-center items-center">
                                            <div>
                                                <img class="default-icon" src="./assets/image/check_dark.svg"
                                                    alt="check">
                                                <img class="selected-icon hidden" src="./assets/image/check.svg"
                                                    alt="check">
                                            </div>
                                            <div>
                                                <h1 class="body-text-1">Email Campaign</h1>
                                            </div>
                                        </div>


                                        <div class="flex space-x-8 text-sm font-medium ">
                                            <div>1</div>
                                            <div>$199/campaign</div>
                                        </div>
                                    </div>

                                    <!-- 8th add-ons   -->
                                    <div
                                        class="addon-item flex items-center justify-between  rounded-[2.1875rem] border border-[#676767] p-[10px] mt-4 cursor-pointer">

                                        <div class="flex gap-4 justify-center items-center">
                                            <div>
                                                <img class="default-icon" src="./assets/image/check_dark.svg"
                                                    alt="check">
                                                <img class="selected-icon hidden" src="./assets/image/check.svg"
                                                    alt="check">
                                            </div>
                                            <div>
                                                <h1 class="body-text-1">Unlimited Requests - Graphic Design</h1>
                                            </div>
                                        </div>


                                        <div class="flex space-x-8 text-sm font-medium ">
                                            <div></div>
                                            <div>$1500/mo</div>
                                        </div>
                                    </div>

                                    <!-- 9th add-ons   -->
                                    <div
                                        class="addon-item flex items-center justify-between  rounded-[2.1875rem] border border-[#676767] p-[10px] mt-4 cursor-pointer">

                                        <div class="flex gap-4 justify-center items-center">
                                            <div>
                                                <img class="default-icon" src="./assets/image/check_dark.svg"
                                                    alt="check">
                                                <img class="selected-icon hidden" src="./assets/image/check.svg"
                                                    alt="check">
                                            </div>
                                            <div>
                                                <!-- <h1 class="body-text-1">Content and Copywriting (5-hrs Per Qty)</h1> -->
                                                <div class="relative inline-block mb-0">
                                                    <li
                                                        class="page-nav relative list-none flex gap-[11px] justify-center items-center">
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
                                            <div>1</div>
                                            <div>$750/mo</div>
                                        </div>
                                    </div>

                                    <!-- 10th add-ons   -->
                                    <div
                                        class="addon-item flex items-center justify-between  rounded-[2.1875rem] border border-[#676767] p-[10px] mt-4 cursor-pointer">

                                        <div class="flex gap-4 justify-center items-center">
                                            <div>
                                                <img class="default-icon" src="./assets/image/check_dark.svg"
                                                    alt="check">
                                                <img class="selected-icon hidden" src="./assets/image/check.svg"
                                                    alt="check">
                                            </div>
                                            <div>
                                                <div class="relative inline-block mb-0">
                                                    <li
                                                        class="page-nav relative list-none flex gap-[11px] justify-center items-center">
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
                                            <div>1</div>
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
                                        <h6 class="page-nav my-5"><b>Introduction</b></h6>

                                        <div class="container">
                                            <h1>Client Services Agreement – Occams Digital</h1>

                                            <form>
                                                <label for="contactName">Contact Name: </label><strong><span
                                                        id="displayFullName"></span></strong></br>

                                                <label for="businessName">Business Name: </label><strong><span
                                                        id="displayCompany"></span></strong></br>

                                                <label for="state">State or Province of Registration: </label>
                                                <input type="text" id="state" name="state" required></strong></br>

                                                <label for="email">Email: </label><strong><span
                                                        id="displayEmail"></span></strong></br>

                                                <label for="effectiveDate">Effective Date: </label><strong>
                                                    <input type="text" id="effectiveDate" name="effectiveDate"
                                                        class="readonly" readonly></strong>
                                            </form>

                                            <script>
                                                document.getElementById("effectiveDate").value = new Date().toISOString().split('T')[0];
                                            </script>

                                            <section class="px-6 py-10 max-w-7xl mx-auto text-white">
                                                <h1 class="text-3xl font-bold mb-6">Scope of Services</h1>

                                                <div class="mb-8">
                                                    <p class="font-semibold">Client has selected a subscription plan
                                                        (Essential or Half-Yearly) offered by Occams Digital:</p>
                                                    <h2 class="text-xl font-bold mt-4">A. Essential Monthly Plan —
                                                        $3,499/month</h2>
                                                    <ul class="list-disc ml-6 mt-2 space-y-2">
                                                        <li>Unlimited graphic and motion design (1 active request at a
                                                            time, unlimited revisions)</li>
                                                        <li>SEO and Local SEO setup</li>
                                                        <li>3 social media account setups</li>
                                                        <li>Management of 1 social media account (up to 10 posts per
                                                            month)</li>
                                                        <li>1 email campaign per month</li>
                                                        <li>PPC ad campaign setup and management (management limited to
                                                            $1,500 in PPC ad spend, but the ad spend sold separately)
                                                        </li>
                                                        <li>Up to 4 Brand Audit Reports per month</li>
                                                        <li>Business App access</li>
                                                        <li>CRM and platform integrations for one website</li>
                                                        <li>One-time Full Brand Audit included</li>
                                                    </ul>
                                                </div>

                                                <div class="mb-8">
                                                    <h2 class="text-xl font-bold">B. Half-Yearly Plan (6 for 5) —
                                                        $17,495</h2>
                                                    <p class="mt-2">Client receives six months of Essential Monthly Plan
                                                        services for the price of five (one month free).</p>
                                                    <p class="mt-2">Optional Smart Add-Ons are available at additional
                                                        monthly cost (See Schedule A).</p>
                                                </div>

                                                <div class="mb-8">
                                                    <h2 class="text-2xl font-bold">2. Term and Renewal</h2>
                                                    <ul class="list-disc ml-6 mt-2 space-y-2">
                                                        <li>Monthly Plan: 1-month commitment, auto-renews unless
                                                            canceled with 30 days’ notice.</li>
                                                        <li>Half-Yearly Plan: Pay for 5 months, get 6th free
                                                            (non-refundable), auto-renews unless canceled with 30 days’
                                                            notice.</li>
                                                    </ul>
                                                </div>

                                                <div class="mb-8">
                                                    <h2 class="text-2xl font-bold">3. Payment Terms</h2>
                                                    <ul class="list-disc ml-6 mt-2 space-y-2">
                                                        <li>Fees payable in advance via credit card or ACH.</li>
                                                        <li>Non-refundable payments.</li>
                                                        <li>Billing occurs same day each cycle unless agreed otherwise.
                                                        </li>
                                                        <li>Service suspension for payments late by 5+ days.</li>
                                                    </ul>
                                                </div>

                                                <div class="mb-8">
                                                    <h2 class="text-2xl font-bold">4. Revisions and Delivery</h2>
                                                    <ul class="list-disc ml-6 mt-2 space-y-2">
                                                        <li>One-at-a-time task queue unless "Unlimited Requests" add-on
                                                            is purchased.</li>
                                                        <li>Turnaround: 2–4 business days per request.</li>
                                                        <li>Complex tasks may take longer; timeline provided upon
                                                            intake.</li>
                                                        <li>Digital marketing and add-on tasks may exceed standard
                                                            timelines.</li>
                                                    </ul>
                                                </div>

                                                <div class="mb-8">
                                                    <h2 class="text-2xl font-bold">5. Ownership and Rights</h2>
                                                    <p class="mt-2">Client receives full rights upon payment. Occams
                                                        Digital may showcase work in portfolio unless agreed otherwise.
                                                    </p>
                                                </div>

                                                <div class="mb-8">
                                                    <h2 class="text-2xl font-bold">6. Grant of License</h2>
                                                    <p class="mt-2">Client grants Occams Digital a limited license to
                                                        use its IP solely to provide services.</p>
                                                </div>

                                                <div class="mb-8">
                                                    <h2 class="text-2xl font-bold">7. No Exclusivity</h2>
                                                    <p class="mt-2">Occams Digital may work with other clients,
                                                        regardless of industry.</p>
                                                </div>

                                                <div class="mb-8">
                                                    <h2 class="text-2xl font-bold">8. Client Representations;
                                                        Indemnification</h2>
                                                    <ul class="list-disc ml-6 mt-2 space-y-2">
                                                        <li>Client must have rights to all materials provided.</li>
                                                        <li>Client to inform about applicable regulations.</li>
                                                        <li>Client indemnifies Occams Digital against IP-related claims.
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="mb-8">
                                                    <h2 class="text-2xl font-bold">9. Warranties and Disclaimers</h2>
                                                    <ul class="list-disc ml-6 mt-2 space-y-2">
                                                        <li>No guarantees of specific business results.</li>
                                                        <li>Services provided "as is" without warranties.</li>
                                                        <li>No warranties on third-party tools/platforms.</li>
                                                        <li>Client delays are not Occams Digital’s responsibility.</li>
                                                    </ul>
                                                </div>

                                                <div class="mb-8">
                                                    <h2 class="text-2xl font-bold">10. Client Account Access and
                                                        Password Security</h2>
                                                    <p class="mt-2">Client must provide necessary credentials. Occams
                                                        Digital will handle credentials with care but is not liable for
                                                        breaches due to weak or shared passwords.</p>
                                                </div>

                                                <div class="mb-8">
                                                    <h2 class="text-2xl font-bold">11. Termination</h2>
                                                    <ul class="list-disc ml-6 mt-2 space-y-2">
                                                        <li>Client may cancel with 5-day notice before billing.</li>
                                                        <li>Occams Digital may cancel anytime with notice.</li>
                                                        <li>No prorated refunds unless cancellation is initiated by
                                                            Occams Digital.</li>
                                                    </ul>
                                                </div>

                                                <div class="mb-8">
                                                    <h2 class="text-2xl font-bold">12. Confidentiality</h2>
                                                    <p class="mt-2">Both parties agree to confidentiality for 2 years
                                                        post-termination.</p>
                                                </div>

                                                <div class="mb-8">
                                                    <h2 class="text-2xl font-bold">13. Limitation of Liability;
                                                        Disclaimers</h2>
                                                    <ul class="list-disc ml-6 mt-2 space-y-2">
                                                        <li>No liability for indirect or consequential damages.</li>
                                                        <li>Max liability limited to one month’s paid service.</li>
                                                        <li>No liability for third-party tool issues.</li>
                                                    </ul>
                                                </div>

                                                <div class="mb-8">
                                                    <h2 class="text-2xl font-bold">14. Arbitration; Governing Law</h2>
                                                    <p class="mt-2">Agreement governed by laws of the State of Florida,
                                                        United States.</p>
                                                </div>

                                                <div class="mb-8">
                                                    <h2 class="text-2xl font-bold">15. Miscellaneous</h2>
                                                    <ul class="list-disc ml-6 mt-2 space-y-2">
                                                        <li>No partnership, agency, or employment created.</li>
                                                        <li>This document represents the full agreement.</li>
                                                    </ul>
                                                </div>

                                                <div class="mb-8">
                                                    <h2 class="text-2xl font-bold">16. Add-on Scope Clarification
                                                        Clause: Website Design & Development</h2>
                                                    <ul class="list-disc ml-6 mt-2 space-y-2">
                                                        <li>$3,000/project for standard 5–6 page business websites.</li>
                                                        <li>Includes layout design, responsive dev, 2 revision rounds,
                                                            basic form, SEO-ready markup, CMS setup.</li>
                                                        <li>Excludes e-commerce, web apps, advanced animations, API
                                                            integrations, and copywriting beyond provided content.</li>
                                                        <li>Custom quote for advanced features; Change Order needed for
                                                            scope changes.</li>
                                                        <li>Work begins only after scope is agreed in writing.</li>
                                                    </ul>
                                                </div>
                                            </section>

                                            <div class="section">
                                                <h2>Signature</h2>
                                                <p>
                                                    Business Name: ________________________<br>
                                                    Authorized Signature: ________________________<br>
                                                    Authorized Signer Name: ________________________<br>
                                                    Title: ________________________<br>
                                                    Printed Name: __________________________<br>
                                                    Date: __________________________
                                                </p>
                                            </div>

                                            <div class="section">
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
                                                            <td colspan="2" class="py-2 px-4 text-gray-500">No add-ons
                                                                selected.</td>
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
                                            class="nextBtn w-full bg-[var(--primary)]  text-white px-6 py-2 rounded-full cta-font cursor-pointer hover:scale-105 transition-all duration-300 ease-in">Next</button>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>

            </fieldset>

            <!-- ———— STEP 4 ———— -->
            <fieldset data-step="3" class="py-6  hidden">



                <stripe-buy-button buy-button-id="buy_btn_1RYXCpDAo2OreUHG3G0NQ2IT"
                    publishable-key="pk_test_51RYX7wDAo2OreUHGdcEW4IlCNTKS8EGwqvO9pQ9edTfiR8saG5a63snRajOBk4JLkcMfdB4RQjjjp965zmLwSQI900WJUCkycJ">
                </stripe-buy-button>


                <div class="mt-8 flex gap-10">

                    <button type="button"
                        class="prevBtn bg-[var(--black)] border-1 border-white  text-white px-6 py-2 rounded-full cta-font cursor-pointer hover:scale-105 transition-all duration-300 ease-in">Previous</button>
                    <button type="submit"
                        class="cta-font bg-[var(--primary)]  text-white px-4 py-2 rounded-full cta-font cursor-pointer hover:scale-105 transition-all duration-300 ease-in">Finish</button>


                </div>
            </fieldset>
        </form>
    </div>
</div>


<?php
include "footer.php"
    ?>
<!-- Send email persional details -->




<script>
    const params = new URLSearchParams(window.location.search);
    const plan = params.get("plan");

    const planData = {
        monthly: {
            name: "Essential",
            price: "$3,499",
            showAddons: true
        },
        halfyearly: {
            name: "Popular",
            price: "$17,495",
            showAddons: false
        }
    };

    const planInfo = planData[plan];

    if (planInfo) {
        // Update all .plan-title and .plan-price elements
        document.querySelectorAll(".plan-title").forEach(el => el.textContent = planInfo.name);
        document.querySelectorAll(".plan-price").forEach(el => el.textContent = planInfo.price);

        // Show add-ons if applicable
        if (planInfo.showAddons) {
            document.getElementById("addons-section").style.display = "block";
        }
    } else {
        document.querySelectorAll(".plan-title").forEach(el => el.textContent = "Invalid Plan");
        document.querySelectorAll(".plan-price").forEach(el => el.textContent = "");
        document.getElementById("addons_price").style.display = "none";

    }
</script>
<script>
    const fullNameInput = document.getElementById("fullname");
    const companyNameInput = document.getElementById("company");
    const emailInput = document.getElementById("email");

    const displayFullName = document.getElementById("displayFullName");
    const displayCompany = document.getElementById("displayCompany");
    const displayEmail = document.getElementById("displayEmail");

    fullNameInput.addEventListener("input", () => {
        displayFullName.textContent = fullNameInput.value;
    });

    companyNameInput.addEventListener("input", () => {
        displayCompany.textContent = companyNameInput.value;
    });

    emailInput.addEventListener("input", () => {
        displayEmail.textContent = emailInput.value;
    });
</script>
<script>
    // Core elements
    const addonsPopup = document.getElementById('addonsPopup');
    const addonsBtn = document.getElementById('addonsBtn');
    const doneBtn = document.getElementById('done-button');
    const totalAmountEl = document.getElementById('total-amount');
    const monthlyPriceElems = document.querySelectorAll('.total-monthly-plan');
    const addonInfoElem = document.querySelector('.total-addon-service');
    const addonsTbody = document.getElementById("addons-tbody");
    const addonsTotal = document.getElementById("addons-total");
    const addonItems = document.querySelectorAll('.addon-item');
    const originalMonthlyPrice = 3499;

    let lastAddedAddonPrice = 0;

    // Utility to format price
    function formatCurrency(amount) {
        return `$${amount.toLocaleString()}`;
    }

    // Main update function
    function updateTotal() {
        let total = 0;
        let selectedCount = 0;

        // Clear table
        addonsTbody.innerHTML = "";

        const selectedAddons = document.querySelectorAll('.addon-item.selected');

        if (selectedAddons.length === 0) {
            addonsTbody.innerHTML = `<tr><td colspan="2" class="py-2 px-4 text-gray-500">No add-ons selected.</td></tr>`;
        }

        selectedAddons.forEach(item => {
            const priceQtyDivs = item.querySelectorAll('.flex.space-x-8 > div');

            const name =
                item.querySelector(".body-text-1")?.textContent ||
                item.querySelector("li.page-nav")?.textContent?.trim();

            if (priceQtyDivs.length >= 2) {
                const qtyText = priceQtyDivs[0].textContent.trim();
                const priceText = priceQtyDivs[1].textContent.trim();

                const quantity = qtyText && !isNaN(qtyText) ? parseInt(qtyText, 10) : 1;
                const priceMatch = priceText.match(/[\$$]?([\d,\.]+)/);

                if (priceMatch) {
                    const price = parseFloat(priceMatch[1].replace(/,/g, ''));
                    total += price * quantity;
                    selectedCount++;

                    // Append to summary table
                    const row = document.createElement("tr");
                    row.innerHTML = `
            <td class="py-2 px-4">${name}</td>
            <td class="py-2 px-4">${formatCurrency(price * quantity)}</td>
          `;
                    addonsTbody.appendChild(row);
                }
            }
        });

        // Update popup total
        totalAmountEl.textContent = `${formatCurrency(total)}/mo`;

        // Update summary total
        document.querySelectorAll('.addons-total').forEach(el => {
            el.textContent = `${formatCurrency(total)}/mo`;
        });
        // Update plan total
        const finalPrice = originalMonthlyPrice + total;
        monthlyPriceElems.forEach(elem => {
            elem.textContent = `${formatCurrency(finalPrice)}/mo`;
        });

        // Update add-on count display
        if (addonInfoElem) {
            addonInfoElem.textContent = `(${formatCurrency(originalMonthlyPrice)} + ${selectedCount} Add-ons)`;
        }

        return total;
    }

    // Toggle on click
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


    document.querySelectorAll('.nextBtn').forEach(btn =>
        btn.addEventListener('click', () => goToStep(currentStep + 1))
    );

    document.querySelectorAll('.prevBtn').forEach(btn =>
        btn.addEventListener('click', () => goToStep(currentStep - 1))
    );
</script>