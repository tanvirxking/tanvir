
<section class="p-10">
    <h1 class="text-center text-4xl font-semibold">Frequently Asked Questions</h1>
<div class="rounded-lg font-sans">
    <div class="border-b border-gray-500 last-of-type:border-none" data-index="0">
      <button class="flex h-full w-full items-center justify-between py-4 font-medium text-amber-700 dark:text-white">
        <span class="sm:text-lg md:text-xl">How do I create an account?</span>
        <span class="rounded-full p-2">
      <i class="fa-solid fa-chevron-down"></i>
        </span>
      </button>
      <div class="grid overflow-hidden text-black transition-all duration-300 ease-in-out" style="opacity: 0; grid-template-rows: 0fr;">
        <div class="overflow-hidden">To create an account, click on the "Sign Up" button and fill out the required information. Once done, you can enjoy the benefits of being a registered member.</div>
      </div>
    </div>
    <div class="border-b border-gray-500 last-of-type:border-none" data-index="1">
      <button class="flex h-full w-full items-center justify-between py-4 font-medium text-amber-700 dark:text-white">
        <span class="sm:text-lg md:text-xl">What is your return policy?</span>
        <span class="rounded-full p-2">
      <i class="fa-solid fa-chevron-down"></i>
        </span>
      </button>
      <div class="grid overflow-hidden text-black transition-all duration-300 ease-in-out" style="opacity: 0; grid-template-rows: 0fr;">
        <div class="overflow-hidden">Our return policy allows you to return items within 30 days of purchase. Please visit our returns page for detailed instructions and to initiate a return.</div>
      </div>
    </div>
    <div class="border-b border-gray-500 last-of-type:border-none" data-index="2">
      <button class="flex h-full w-full items-center justify-between py-4 font-medium text-amber-700 dark:text-white">
        <span class="sm:text-lg md:text-xl">Can I change my shipping address?</span>
        <span class="rounded-full p-2">
      <i class="fa-solid fa-chevron-down"></i>
        </span>
      </button>
      <div class="grid overflow-hidden text-black transition-all duration-300 ease-in-out" style="opacity: 0; grid-template-rows: 0fr;">
        <div class="overflow-hidden">Yes, you can change your shipping address before your order is shipped. Go to your account settings and update the shipping information accordingly.</div>
      </div>
    </div>
    <div class="border-b border-gray-500 last-of-type:border-none" data-index="3">
      <button class="flex h-full w-full items-center justify-between py-4 font-medium text-amber-700 dark:text-white">
        <span class="sm:text-lg md:text-xl">Are there any discounts for loyal customers?</span>
        <span class="rounded-full p-2">
      <i class="fa-solid fa-chevron-down"></i>
        </span>
      </button>
      <div class="grid overflow-hidden text-black transition-all duration-300 ease-in-out" style="opacity: 0; grid-template-rows: 0fr;">
        <div class="overflow-hidden">We appreciate our loyal customers! Stay tuned for exclusive discounts, promotions, and special offers available to members of our loyalty program.</div>
      </div>
    </div>
  </div>

</section>





<script>
    document.addEventListener('DOMContentLoaded', () => {
      const accordionItems = document.querySelectorAll('[data-index]');
      let isOpen = null;

      accordionItems.forEach(item => {
        const button = item.querySelector('button');
        const description = item.querySelector('.grid');
        const svgRects = item.querySelectorAll('svg rect');

        button.addEventListener('click', () => {
          const index = item.getAttribute('data-index');
          
          if (isOpen === index) {
            description.style.opacity = '0';
            description.style.gridTemplateRows = '0fr';
            svgRects.forEach(rect => rect.style.transform = 'rotate(0deg)');
            isOpen = null;
          } else {
            if (isOpen !== null) {
              const openItem = document.querySelector(`[data-index="${isOpen}"]`);
              const openDescription = openItem.querySelector('.grid');
              const openSvgRects = openItem.querySelectorAll('svg rect');

              openDescription.style.opacity = '0';
              openDescription.style.gridTemplateRows = '0fr';
              openSvgRects.forEach(rect => rect.style.transform = 'rotate(0deg)');
            }

            description.style.opacity = '1';
            description.style.gridTemplateRows = '1fr';
            svgRects.forEach(rect => rect.style.transform = 'rotate(180deg)');
            isOpen = index;
          }
        });
      });
    });
  </script>