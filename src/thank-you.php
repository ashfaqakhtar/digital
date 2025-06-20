<?php
session_start();
$title = "Occams Digital";
include "header.php";

// Get the session data
$order = $_SESSION['order_summary'] ?? [];

// Optional: clear session data after displaying
unset($_SESSION['order_summary']);
?>
<style>
  .break-all {
    word-break: break-all;
    overflow-wrap: break-word;
  }
</style>
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
          <div class="step text-white px-4 py-2 rounded-xl space-x-3 min-w-[180px] h-full bg-green-600">
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

          <div class="step text-white px-4 py-2 rounded-xl space-x-3 min-w-[180px] h-full bg-green-600">
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

          <div class="step text-white px-4 py-2 rounded-xl space-x-3 min-w-[180px] h-full bg-green-600">
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

          <div class="step text-white px-4 py-2 rounded-xl space-x-3 min-w-[180px] h-full bg-green-600">
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
    </form>
  </div>

  <div class="grid price-popup gap-0 gap-y-[30px] md:gap-y-0 md:gap-6 max-w-7xl w-full" id="popup">

    <div class="flex flex-nowrap justify-center ">
      <div class="bg-black/70 backdrop-blur-md text-white mx-auto rounded-xl p-6 shadow-lg  max-w-3xl addons-menu-css">

        <!-- ✅ Overlapping GIF Animation -->
        <div class="relative w-36 h-36 mx-auto">
          <!-- Background GIF -->
          <!-- <img src="assets/image/payment_done_bg.gif" alt="Background Animation"
            class="absolute top-0 left-0 w-full h-full z-0"> -->
          <!-- Foreground GIF -->
          <img src="./assets/image/payment_done.gif" alt="Main Animation"
            class="absolute top-0 left-0 w-full h-full z-10">
        </div>

        <!-- ✅ Success Heading -->
        <h2 class="text-center text-lg font-semibold mb-6">PAYMENT SUCCESSFUL</h2>

        <!-- ✅ Payment Details -->
        <div class="space-y-4 text-sm">
          <div class="flex justify-between">
            <span class="text-gray-300">Payment Type</span>
            <span class="text-white font-medium"><?= htmlspecialchars($order['payment_type'] ?? 'N/A') ?></span>
          </div>
          <div class="flex justify-between">
            <span class="text-gray-300">Email</span>
            <span class="text-white font-medium"><?= htmlspecialchars($order['email'] ?? 'N/A') ?></span>
          </div>
          <div class="flex justify-between">
            <span class="text-gray-300">Transaction id</span>
            <span
              class="text-white font-medium break-all"><?= htmlspecialchars($order['transaction_id'] ?? 'N/A') ?></span>
          </div>
          <div class="border-t border-gray-600 pt-4 flex justify-between">
            <span class="text-gray-300">Amount Paid</span>
            <span class="text-white font-bold text-xl">$<?= number_format($order['amount'] ?? 0, 2) ?></span>
          </div>
        </div>

        <?php if (empty($order)): ?>
          <div class="text-center text-red-500 font-bold p-6">No order data found. Please return to the homepage.</div>
        <?php endif; ?>



        <!-- ✅ Action Buttons -->
        <div class="mt-6 flex justify-center gap-4">
          <button class="bg-orange-500 hover:bg-orange-600 text-white px-4 py-2 rounded-full text-sm font-semibold">
            Login now
          </button>
          <button
            class="border border-orange-500 text-orange-500 hover:bg-orange-500 hover:text-white px-4 py-2 rounded-full text-sm font-semibold">
            Home page
          </button>
        </div>
      </div>
    </div>

  </div>
  <?php
  include "footer.php"
    ?>