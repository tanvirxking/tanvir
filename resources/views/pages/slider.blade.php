<section class="max-w-screen-2xl container mx-auto">
<div class="h-60 w-full md:h-[470px] lg:h-[540px] relative overflow-hidden">
    <!-- arrow left -->
    <button id="prevButton" class="absolute top-1/2 left-3 z-50 flex justify-center items-center bg-white rounded-full w-6 h-6 md:w-8 md:h-8">
    <i class="fa-solid fa-arrow-left"></i>
    </button>
    <!-- arrow right -->
    <button id="nextButton" class="absolute top-1/2 z-50 right-3 flex justify-center items-center bg-white rounded-full w-6 h-6 md:w-8 md:h-8">
    <i class="fa-solid fa-arrow-right"></i>
    </button>
    <!-- dots -->
    <div id="dotsContainer" class="flex justify-center items-center rounded-full z-50 absolute bottom-4 w-full gap-1"></div>
    <!-- Carousel container -->
    <div id="carouselContainer" class="ease-linear duration-500 flex transform-gpu"></div>
  </div>
</section>



  <script>
document.addEventListener('DOMContentLoaded', () => {
  const carouselImages = [
    'https://i.ibb.co/SQcyDV5/image.png',
    'https://i.ibb.co/fH8Hvfh/image.png',
    'https://i.ibb.co/nnCTdn2/image.png',
    'https://i.ibb.co/0czyWcF/image.png',
    'https://i.ibb.co/RNCB2BT/image.png'
  ];

  let currentSlider = 0;

  const carouselContainer = document.getElementById('carouselContainer');
  const dotsContainer = document.getElementById('dotsContainer');

  const prevButton = document.getElementById('prevButton');
  const nextButton = document.getElementById('nextButton');

  carouselImages.forEach((image, index) => {
    const img = document.createElement('img');
    img.src = image;
    img.className = 'min-w-full h-60 bg-black/20 sm:h-96 md:h-[540px] object-cover';
    img.alt = `Slider - ${index + 1}`;
    carouselContainer.appendChild(img);

    const dot = document.createElement('button');
    dot.className = `rounded-full duration-500 bg-white ${currentSlider === index ? 'w-8' : 'w-2'} h-2`;
    dot.addEventListener('click', () => setCurrentSlider(index));
    dotsContainer.appendChild(dot);
  });

  const setCurrentSlider = (index) => {
    currentSlider = index;
    carouselContainer.style.transform = `translateX(-${currentSlider * 100}%)`;
    Array.from(dotsContainer.children).forEach((dot, idx) => {
      dot.className = `rounded-full duration-500 bg-white ${currentSlider === idx ? 'w-8' : 'w-2'} h-2`;
    });
  };

  const prevSlider = () => setCurrentSlider(currentSlider === 0 ? carouselImages.length - 1 : currentSlider - 1);
  const nextSlider = () => setCurrentSlider(currentSlider === carouselImages.length - 1 ? 0 : currentSlider + 1);

  prevButton.addEventListener('click', prevSlider);
  nextButton.addEventListener('click', nextSlider);

  setInterval(nextSlider, 3000);
});


  </script>