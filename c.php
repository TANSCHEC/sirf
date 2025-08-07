<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Image Carousel</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background: #121212;
      color: #fff;
    }

    .carousel-section {
      padding: 40px;
      background: #1e1e1e;
    }

    .carousel-container {
      max-width: 900px;
      margin: auto;
      position: relative;
      overflow: hidden;
      border-radius: 12px;
      box-shadow: 0 0 20px rgba(0,0,0,0.5);
    }

    .carousel-header {
      text-align: center;
      margin-bottom: 20px;
    }

    .carousel {
      position: relative;
      overflow: hidden;
    }

    .carousel-track {
      display: flex;
      transition: transform 0.5s ease-in-out;
    }

    .carousel-slide {
      min-width: 100%;
      box-sizing: border-box;
      padding: 20px;
      display: flex;
      flex-direction: column;
      align-items: center;
      background: #2b2b2b;
    }

    .placeholder-image {
      width: 100%;
      height: 200px;
      background: #444;
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 48px;
      color: white;
      border-radius: 10px;
      position: relative;
    }

    .image-overlay {
      position: absolute;
      bottom: 10px;
      right: 10px;
      background: rgba(0,0,0,0.6);
      padding: 5px 10px;
      border-radius: 6px;
      font-size: 14px;
    }

    .slide-info {
      margin-top: 15px;
      text-align: center;
    }

    .slide-info h3 {
      margin: 10px 0 5px;
    }

    .carousel-btn {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      background: rgba(0,0,0,0.6);
      border: none;
      color: white;
      font-size: 2rem;
      padding: 0.5rem 1rem;
      cursor: pointer;
      z-index: 2;
    }

    .carousel-btn.prev {
      left: 10px;
    }

    .carousel-btn.next {
      right: 10px;
    }

    .carousel-indicators {
      text-align: center;
      margin-top: 15px;
    }

    .indicator {
      display: inline-block;
      width: 10px;
      height: 10px;
      margin: 5px;
      background-color: #888;
      border-radius: 50%;
      cursor: pointer;
    }

    .indicator.active {
      background-color: #fff;
    }

    
  </style>
</head>
<body>

<!-- Image Carousel -->
<section class="carousel-section">
  <div class="carousel-container">
    <div class="carousel-header">
      <h2>Featured Institutions & Achievements</h2>
      <p>Showcasing excellence in Tamil Nadu's educational landscape</p>
    </div>

    <div class="carousel">
      <div class="carousel-track">
        <!-- Slide 1 -->
        <div class="carousel-slide">
          <div class="placeholder-image" style="background: linear-gradient(45deg, #2d2d2d, #1a1a1a);">
            🏛️
            <div class="image-overlay">IIT Madras</div>
          </div>
          <div class="slide-info">
            <h3>Indian Institute of Technology Madras</h3>
            <p>Premier engineering institution leading in research and innovation.</p>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-slide">
          <div class="placeholder-image" style="background: linear-gradient(45deg, #3d3d3d, #2a2a2a);">
            🏥
            <div class="image-overlay">AIIMS Chennai</div>
          </div>
          <div class="slide-info">
            <h3>All Institute of Medical Sciences</h3>
            <p>Excellence in medical education and healthcare services.</p>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-slide">
          <div class="placeholder-image" style="background: linear-gradient(45deg, #4a4a4a, #333333);">
            🎓
            <div class="image-overlay">Anna University</div>
          </div>
          <div class="slide-info">
            <h3>Anna University</h3>
            <p>Leading technical university with strong industry partnerships.</p>
          </div>
        </div>

        <!-- Slide 4 -->
        <div class="carousel-slide">
          <div class="placeholder-image" style="background: linear-gradient(45deg, #555555, #3c3c3c);">
            💼
            <div class="image-overlay">IIM Tiruchirappalli</div>
          </div>
          <div class="slide-info">
            <h3>Indian Institute of Management</h3>
            <p>Top-tier management education and leadership development.</p>
          </div>
        </div>

        <!-- Slide 5 -->
        <div class="carousel-slide">
          <div class="placeholder-image" style="background: linear-gradient(45deg, #666666, #454545);">
            🔬
            <div class="image-overlay">Research Excellence</div>
          </div>
          <div class="slide-info">
            <h3>Research & Innovation Hub</h3>
            <p>Advancing scientific research with cutting-edge facilities.</p>
          </div>
        </div>
      </div>

      <!-- Navigation Buttons -->
      <button class="carousel-btn prev" onclick="changeSlide(-1)">❮</button>
      <button class="carousel-btn next" onclick="changeSlide(1)">❯</button>
    </div>

    <!-- Dots/Indicators -->
    <div class="carousel-indicators">
      <span class="indicator active" onclick="currentSlide(1)"></span>
      <span class="indicator" onclick="currentSlide(2)"></span>
      <span class="indicator" onclick="currentSlide(3)"></span>
      <span class="indicator" onclick="currentSlide(4)"></span>
      <span class="indicator" onclick="currentSlide(5)"></span>
    </div>
  </div>
</section>

<!-- JavaScript -->
<script>
  let slideIndex = 0;

  const track = document.querySelector('.carousel-track');
  const slides = document.querySelectorAll('.carousel-slide');
  const indicators = document.querySelectorAll('.indicator');

  function updateCarousel() {
    const slideWidth = slides[0].offsetWidth;
    track.style.transform = `translateX(-${slideIndex * slideWidth}px)`;

    indicators.forEach((dot, i) => {
      dot.classList.toggle('active', i === slideIndex);
    });
  }

  function changeSlide(n) {
    slideIndex += n;
    if (slideIndex < 0) {
      slideIndex = slides.length - 1;
    } else if (slideIndex >= slides.length) {
      slideIndex = 0;
    }
    updateCarousel();
  }

  function currentSlide(n) {
    slideIndex = n - 1;
    updateCarousel();
  }

  // Initialize on page load
  window.addEventListener('load', () => {
    updateCarousel();
    window.addEventListener('resize', updateCarousel); // responsive
  });
</script>

</body>

</html>
