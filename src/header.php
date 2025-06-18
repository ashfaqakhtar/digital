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


    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <link rel="preload" as="script" href="https://www.cdnstyles.com/static/snapshot_widget/v1/snapshot.widget.js">



    <!-- aos    -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>

<body class="bg-[#000] text-white transition-all duration-300 background_image">
    <div id="cursor-dot"></div>
    <button id="backToTop" title="Go to top">↑ Top</button>



    <header
        class="header-box  container px-8 lg:px-2 mx-auto  rounded-[3rem] py-3 mt-5 fixed top-0 left-0 right-0 z-50 bg-[rgba(255,255,255,0.11)] backdrop-blur-[23.4px]">

        <nav class="flex justify-between items-center">
            <!-- Logo Section -->
            <div class="main-logo">
                <a href="/" aria-label="Occams AI Home">
                    <img src="./assets/image/Occams-Digital_Logo.svg" alt="Occams AI Digital Agency Logo"
                        loading="eager" class="h-10 w-auto lg:pl-[20px]">
                </a>
            </div>

            <!-- Navigation Links (Desktop) -->
            <div class="nav-links hidden lg:flex">
                <ul class="flex space-x-6">
                    <li><a href="https://occamsadvisory.com/" target="_blank"><i class="fas fa-home"></i></a></li>
                    <li><a href="#service-section" class="hover:text-[var(--primary)] page-nav">Services</a></li>
                    <li><a href="#how-it-works-section" class="hover:text-[var(--primary)] page-nav">How it
                            Works</a></li>
                    <li><a href="#pricing-section" class="hover:text-[var(--primary)] page-nav">Pricing Plans</a>
                    </li>
                </ul>

            </div>

            <!-- CTA Section -->
            <div class="flex items-center space-x-2">
                <li class="list-none hidden lg:block">

                    <a href="https://occams-digital.smblogin.com/login/"
                        class="page-nav inline-flex items-center gap-2 orange-cta">
                        Business App
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="39" height="38" viewBox="0 0 39 38"
                                fill="none">
                                <circle cx="19.5" cy="19" r="19" fill="#EEEEEE" />
                                <path d="M14.5 14H24.5V24" stroke="#F36B21" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M20.5 18L14.5 24" stroke="#F36B21" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </span>
                    </a>
                </li>



                <button id="mobileMenuBtn" class="lg:hidden flex flex-col justify-between w-8 h-6 relative z-50"
                    aria-label="Toggle Menu">
                    <span class="block w-8 h-1 bg-black transition-transform duration-300 ease-in-out"></span>
                    <span class="block w-8 h-1 bg-black transition-opacity duration-300 ease-in-out"></span>
                    <span class="block w-8 h-1 bg-black transition-transform duration-300 ease-in-out"></span>
                </button>
            </div>

        </nav>

        <!-- Mobile Navigation Menu -->
        <div id="mobileMenu"
            class="hidden  flex-col items-center absolute top-full left-0 w-full bg-black border border-gray-200 rounded-lg shadow-lg p-5 lg:hidden">
            <ul class="flex flex-col space-y-4 text-center">
                <li><a href="https://occamsadvisory.com/" target="_blank"><i class="fas fa-home text-white"></i></a>
                </li>
                <li><a href="#service-section" class="hover:text-gray-600 text-white">Services</a></li>
                <li><a href="#how-it-works-section" class="hover:text-gray-600 text-white">How it Works</a></li>
                <li><a href="#pricing-section" class="hover:text-gray-600 text-white">Pricing Plans</a></li>
                <li class="list-none  lg:hidden">
                    <a href="https://occams-digital.smblogin.com/login/"
                        class="page-nav inline-flex items-center gap-2 orange-cta">
                        Business App
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="39" height="38" viewBox="0 0 39 38"
                                fill="none">
                                <circle cx="19.5" cy="19" r="19" fill="#EEEEEE" />
                                <path d="M14.5 14H24.5V24" stroke="#F36B21" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M20.5 18L14.5 24" stroke="#F36B21" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </span>
                    </a>
                </li>
            </ul>
        </div>

    </header>



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
    <!-- 
    <script>
        document.querySelectorAll('a.page-nav[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const targetID = this.getAttribute('href').slice(1);
                const target = document.getElementById(targetID);

                if (target) {
                    const offset = 150;
                    const bodyTop = document.body.getBoundingClientRect().top;
                    const elementTop = target.getBoundingClientRect().top;
                    const scrollPosition = elementTop - bodyTop - offset;

                    window.scrollTo({
                        top: scrollPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script> -->