<!DOCTYPE html>
<html lang="en">

<?php include('query.php') ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colorful Garage Management System</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/ScrollTrigger.min.js"></script>
    <style>
        body {
            background: linear-gradient(135deg, #ff6b6b, #4ecdc4, #45b7d1, #6c5ce7);
            background-size: 400% 400%;
            animation: gradientBG 15s ease infinite;
        }

        @keyframes gradientBG {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        .glass-morphism {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .neumorphism {
            background: linear-gradient(145deg, rgba(255, 255, 255, 0.15), rgba(0, 0, 0, 0.1));
            border-radius: 20px;
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.2), -5px -5px 15px rgba(255, 255, 255, 0.1);
        }
    </style>
</head>

<body class="min-h-screen text-white">
    <nav id="navbar"
        class="fixed top-0 left-0 right-0 z-50 flex justify-between items-center p-4 transition-all duration-300">
        <div class="text-white text-2xl font-bold">
            <a href="#home">Garage Management</a>
        </div>
        <div class="hidden md:flex space-x-4">
            <a href="#home" class="hover:text-yellow-300 transition-colors py-2 px-3 ">Home</a>
            <a href="#services" class="hover:text-yellow-300 transition-colors py-2 px-3 ">Services</a>
            <a href="#about" class="hover:text-yellow-300 transition-colors py-2 px-3 ">About Us</a>
            <a href="#queries" class="hover:text-yellow-300 transition-colors py-2 px-3 ">Queries</a>
            <a href="#location" class="hover:text-yellow-300 transition-colors py-2 px-3 ">Location</a>
            <a href="login.php"
                class="hover:text-yellow-300 transition-colors bg-teal-300 py-2 px-3 rounded-full">Login</a>
            <a href="register.php"
                class="hover:text-yellow-300 transition-colors bg-teal-300 py-2 px-3 rounded-full">Register</a>
        </div>
    </nav>

    <section id="home" class="relative h-screen flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-gradient-to-r from-purple-500 to-pink-500 opacity-75"></div>
            <div
                class="absolute inset-0 bg-[url('https://source.unsplash.com/random/1920x1080?car,garage')] bg-cover bg-center mix-blend-overlay">
            </div>
        </div>
        <div class="relative z-10 text-center px-4">
            <h1 id="headline" class="text-4xl sm:text-5xl md:text-6xl font-extrabold mb-6 text-yellow-300">Welcome to
                the Garage Management System</h1>
            <p class="text-lg sm:text-xl md:text-2xl mb-8 max-w-3xl mx-auto">Your one-stop solution for all automotive
                services!</p>
            <a href="register.php" id="cta-button"
                class="inline-block bg-yellow-300 text-purple-700 font-semibold text-lg py-3 px-8 rounded-full shadow-lg transition-all hover:bg-purple-700 hover:text-yellow-300">
                Start Free Trial
            </a>
        </div>
    </section>

    <section id="services" class="py-16 px-8">
        <div class="max-w-4xl mx-auto glass-morphism p-8">
            <h2 class="text-3xl font-bold text-center mb-6 text-yellow-300">Our Services</h2>
            <ul id="services-list" class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <li class="neumorphism p-6">
                    <h3 class="text-xl font-semibold mb-2 text-pink-300">Oil Change</h3>
                    <p class="text-white">Regular oil changes to keep your engine running smoothly and efficiently.</p>
                </li>
                <li class="neumorphism p-6">
                    <h3 class="text-xl font-semibold mb-2 text-green-300">Tire Rotation</h3>
                    <p class="text-white">Ensure even wear on your tires for better performance and longevity.</p>
                </li>
                <li class="neumorphism p-6">
                    <h3 class="text-xl font-semibold mb-2 text-blue-300">Brake Inspection</h3>
                    <p class="text-white">Comprehensive brake system checks for your safety on the road.</p>
                </li>
                <li class="neumorphism p-6">
                    <h3 class="text-xl font-semibold mb-2 text-purple-300">Engine Diagnostics</h3>
                    <p class="text-white">Advanced computer diagnostics to identify and resolve engine issues.</p>
                </li>
                <li class="neumorphism p-6">
                    <h3 class="text-xl font-semibold mb-2 text-orange-300">Battery Replacement</h3>
                    <p class="text-white">Quick and reliable battery testing and replacement services.</p>
                </li>
            </ul>
        </div>
    </section>

    <section id="about" class="py-16 px-8">
        <div class="max-w-4xl mx-auto glass-morphism p-8">
            <h2 class="text-3xl font-bold mb-6 text-center text-yellow-300">About Our Team</h2>
            <div class="neumorphism p-6">
                <p class="text-lg leading-relaxed">
                    Welcome to Royal Motors, your trusted partner for all your automotive needs. We provide exceptional
                    service, using the latest technology and a team of skilled professionals to ensure your vehicle is
                    always in top condition. With over 20 years of experience in the industry, we have built a
                    reputation for reliability and quality.
                </p>
                <p class="text-lg leading-relaxed mt-4">
                    At our Garage, we believe in transparent, honest service with a rainbow of options. Whether you
                    need routine maintenance or complex repairs, we're here to keep you safely and stylishly on the
                    road. Our commitment to excellence and customer satisfaction sets us apart in the automotive
                    industry, making every visit a colorful experience.
                </p>
            </div>
        </div>
    </section>

    <section id="queries" class="py-16 px-8">
        <div class="max-w-4xl mx-auto glass-morphism p-8">
            <h2 class="text-3xl font-bold text-center mb-6 text-yellow-300">Submit Us Your Query</h2>
            <form action="index.php" method="POST" class="neumorphism p-6">
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium mb-2 text-pink-300">Name:</label>
                    <input type="text" id="name" name="name" required
                        class="w-full p-3 bg-white bg-opacity-20 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-300 text-white" />
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium mb-2 text-green-300">Email:</label>
                    <input type="email" id="email" name="email" required
                        class="w-full p-3 bg-white bg-opacity-20 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-300 text-white" />
                </div>
                <div class="mb-4">
                    <label for="query" class="block text-sm font-medium mb-2 text-blue-300">Your Query:</label>
                    <textarea id="query" name="query" rows="4" required
                        class="w-full p-3 bg-white bg-opacity-20 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-300 text-white"></textarea>
                </div>
                <input type="submit"
                    class="bg-yellow-300 text-purple-700 py-3 px-8 rounded-full cursor-pointer hover:bg-purple-700 hover:text-yellow-300 transition-colors font-semibold"
                    value="Submit"></input>
            </form>
        </div>
    </section>

    <section id="location" class="py-16 px-8">
        <div class="max-w-4xl mx-auto glass-morphism p-8">
            <h2 class="text-3xl font-bold text-center mb-6 text-yellow-300">Our Location</h2>
            <div class="neumorphism p-6 text-center">
                <p class="text-lg mb-4 text-pink-300">Find us at: 123 Rainbow Road, Chromatic City, CC 12345</p>
                <div class="aspect-w-16 aspect-h-9">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.1422937950147!2d-73.98731968459391!3d40.74844797932818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259a9b3117469%3A0xd134e199a405a163!2sEmpire%20State%20Building!5e0!3m2!1sen!2sus!4v1629814257725!5m2!1sen!2sus"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-purple-800 py-4 text-center">
        <p class="text-yellow-300">&copy; 2023 Garage Management System. All rights reserved.</p>
    </footer>

    <script>
        gsap.registerPlugin(ScrollTrigger);

        // Navbar animation
        gsap.to("#navbar", {
            backgroundColor: "rgba(109, 40, 217, 0.9)",
            boxShadow: "0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06)",
            scrollTrigger: {
                trigger: "#navbar",
                start: "top top",
                end: "+=100",
                scrub: true,
            },
        });

        // Hero animations
        gsap.from("#headline", {
            y: 50,
            opacity: 0,
            duration: 1,
            ease: "power3.out",
        });

        // Services animation
        gsap.from("#services-list li", {
            opacity: 0,
            y: 20,
            stagger: 0.1,
            duration: 0.8,
            ease: "power2.out",
            scrollTrigger: {
                trigger: "#services-list",
                start: "top 80%",
            },
        });

        // Hover and click effects for CTA button
        const ctaButton = document.getElementById("cta-button");

        ctaButton.addEventListener("mouseenter", () => {
            gsap.to(ctaButton, { scale: 1.05, duration: 0.3 });
        });

        ctaButton.addEventListener("mouseleave", () => {
            gsap.to(ctaButton, { scale: 1, duration: 0.3 });
        });

        ctaButton.addEventListener("mousedown", () => {
            gsap.to(ctaButton, { scale: 0.95, duration: 0.1, yoyo: true, repeat: 1 });
        });
    </script>
</body>

</html>