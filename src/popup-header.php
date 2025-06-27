<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/output.css">
    <title>
        <?php echo $title; ?>
    </title>
    <meta name="description" content=" <?php echo $meta; ?>" />
    <meta name="keywords" content="<?php echo $metakeyword; ?>">
    <link rel="shortcut icon" href="./assets/image/logo/Fevicon.svg" type="image/x-icon">
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Slick CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />


    <!-- aos    -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>

<body class="bg-[#000] text-white transition-all duration-300 background_image">
    <div id="cursor-dot"></div>
    <button id="backToTop" title="Go to top">↑ Top</button>






    <script>
        const mobileMenuBtn = document.getElementById("mobileMenuBtn");
        const mobileMenu = document.getElementById("mobileMenu");
        const spans = mobileMenuBtn.querySelectorAll("span");

        mobileMenuBtn.addEventListener("click", function () {
            mobileMenu.classList.toggle("hidden");

            if (!mobileMenu.classList.contains("hidden")) {
                spans[0].classList.add("rotate-45", "translate-y-2");
                spans[1].classList.add("opacity-0");
                spans[2].classList.add("-rotate-45", "-translate-y-2");
            } else {
                spans[0].classList.remove("rotate-45", "translate-y-2");
                spans[1].classList.remove("opacity-0");
                spans[2].classList.remove("-rotate-45", "-translate-y-2");
            }
        });
    </script>

    <script src="https://unpkg.com/lenis@1.3.3/dist/lenis.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

    <script>
        // Initialize Lenis
        const lenis = new Lenis({
            duration: 1.2, // default is 1.2 seconds; increase for slower, smoother scroll
            easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)), // ease-out function
            autoRaf: true,
        });

        // Listen for the scroll event and log the event data
        lenis.on('scroll', (e) => {
            console.log(e);
        });
    </script>

    <script>
        // Initialize a new Lenis instance for smooth scrolling
        const lenis = new Lenis();

        // Synchronize Lenis scrolling with GSAP's ScrollTrigger plugin
        lenis.on('scroll', ScrollTrigger.update);

        // Add Lenis's requestAnimationFrame (raf) method to GSAP's ticker
        // This ensures Lenis's smooth scroll animation updates on each GSAP tick
        gsap.ticker.add((time) => {
            lenis.raf(time * 1000); // Convert time from seconds to milliseconds
        });

        // Disable lag smoothing in GSAP to prevent any delay in scroll animations
        gsap.ticker.lagSmoothing(0);

    </script>

    <script>
        const dot = document.getElementById('cursor-dot');

        window.addEventListener('mousemove', e => {
            dot.style.left = e.clientX + 'px';
            dot.style.top = e.clientY + 'px';
        });
    </script>
    <script>
        const btn = document.getElementById('backToTop');

        // Show button when user scrolls down 100px from the top
        window.addEventListener('scroll', () => {
            if (window.scrollY > 100) {
                btn.style.display = 'block';
            } else {
                btn.style.display = 'none';
            }
        });

        // Scroll smoothly back to top when clicked
        btn.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    </script>

    <script>
        // Hide loader after page loads
        window.addEventListener('load', () => {
            setTimeout(() => {
                document.getElementById('loader').style.display = 'none';
            }, 3000);  // Adjust timing as needed
        });
    </script>