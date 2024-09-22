<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mali Daftari</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script> <!-- Font Awesome for icons -->
    <link href="https://fonts.googleapis.com/css2?family Nunito:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        html {
            scroll-behavior: smooth;
        }
        .nav-link.active {
            color: #007BFF;
            font-weight: bold;
        }
    </style>
</head>
<body class="bg-gray-900 text-white">

<header class="bg-black fixed top-0 w-full z-50">
    <div class="container mx-auto flex justify-between items-center py-4">
        <div class="flex items-center">
        <img src="/images/logo.png" alt="Mali Daftari Logo" class="h-12">
            <h1 class="text-lg ml-2">mali daftari</h1>
        </div>

        <!-- Add space between the logo and the navigation -->
        <div class="flex-grow"></div> <!-- This div creates flexible space -->

        <nav class="flex space-x-20"> <!-- No need for ml-auto here -->
            <a href="#home" class="nav-link flex items-center">
                <i class="fas fa-home mr-2"></i> Home
            </a>
            <a href="#services" class="nav-link flex items-center">
                <i class="fas fa-cogs mr-2"></i> Services
            </a>
            <a href="#contact" class="nav-link flex items-center">
                <i class="fas fa-envelope mr-2"></i> Contact
            </a>
            <a href="{{ route('login') }}" class="nav-link text-blue-400 hover:text-blue-500">login</a>
        </nav>
    </div>
</header>

<!-- Home Section -->
<section id="home" class="h-screen flex items-center justify-center bg-cover bg-center relative pt-32" style="background-image: url('/images/welcome page.jpeg');">
    <div class="absolute inset-0 bg-black opacity-60"></div> <!-- Adjust opacity here -->
    <div class="relative z-10 text-center">
        <h2 class="text-8xl font-bold">KARIBU</h2> <!-- Increased font size -->
        <p class="mt-4 max-w-md mx-auto text-xl">Managing your business finances doesn’t have to be complicated. Mali Daftari simplifies the way you track your expenses, manage your revenue, and keep your business on track.</p> <!-- Increased font size -->
        <a href="{{ route('register') }}" class="mt-6 inline-block px-6 py-3 bg-blue-600 text-white rounded hover:bg-blue-700">Sign Up</a>
    </div>
</section>

<!-- Services Section -->
<section id="services" class="py-16 bg-gray-100">
    <div class="container mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Image Section (Collaborate Section) -->
            <div class="relative">
                <img src="/images/collabserve.png" alt="Collaborate with Confidence" class="rounded-lg shadow-5g">
            </div>

            <!-- Collaborate Section Text -->
            <div class="flex flex-col justify-center">
                <h3 class="text-3xl font-bold mb-4 text-black">Collaborate with Confidence: Secure Financial Insights</h3>
                <p class="text-lg mb-6 text-black">Mali Daftari’s most secure features not only simplify tracking but also allow your team to work seamlessly across platforms.</p>
                <a href="#" class="px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Explore Now</a>
            </div>
        </div>

        <!-- Divider for the second section -->
        <div class="my-16 border-b-2 border-gray-300"></div>

        <!-- Financial Workflow Section -->
        <div class="text-center">
            <h3 class="text-3xl font-bold mb-4 text-black">Revolutionize Your Financial Workflow</h3>
            <p class="text-lg mb-8 text-black">Experience the Difference</p>

            <!-- Features Section -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="service-item bg-white p-6 rounded-lg shadow-lg relative overflow-hidden group">
                    <img src="/images/dashboard.gif" alt="Intuitive Dashboard" class="mx-auto mb-4 group-hover:hidden">
                    <h4 class="text-xl font-bold text-black">Intuitive Dashboard</h4>
                    <p class="text-black">Mali Daftari’s intuitive dashboard puts you in control of your business finances.</p>
                    <a href="#" class="text-blue-600 font-semibold mt-4 inline-block">Try it Today</a>
                </div>

                <div class="service-item bg-white p-6 rounded-lg shadow-lg relative overflow-hidden group">
                    <img src="/images/checklist.gif" alt="Intelligent Insights" class="mx-auto mb-4 group-hover:hidden">
                    <h4 class="text-xl font-bold text-black">Intelligent Insights</h4>
                    <p class="text-black">Customize your expense categories, set spending limits.</p>
                    <a href="#" class="text-blue-600 font-semibold mt-4 inline-block">Explore More</a>
                </div>

                <div class="service-item bg-white p-6 rounded-lg shadow-lg relative overflow-hidden group">
                    <img src="/images/line-chart.gif" alt="Effortless Invoicing" class="mx-auto mb-4 group-hover:hidden">
                    <h4 class="text-xl font-bold text-black">Detailed Visualization</h4>
                    <p class="text-black">With Mali Daftari, you can visualize trends in your business habits.</p>
                    <a href="#" class="text-blue-600 font-semibold mt-4 inline-block">Start Now</a>
                </div>
            </div>
        </div>
        
        <div class="my-16 border-b-2 border-gray-300"></div>

        <!-- Final Section (Financial Mastery) -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-16">
            <!-- Image Section -->
            <div class="relative">
                <img src="/images/image-removebg-preview (1).png" alt="Financial Mastery" class="rounded-lg shadow-0g">
            </div>

            <!-- Text Section -->
            <div class="flex flex-col justify-center">
                <h3 class="text-3xl font-bold mb-4 text-black">Achieve Financial Mastery with Mali Daftari</h3>
                <p class="text-lg mb-6 text-black">Our intuitive software and features provide you with insights to track and manage your finances, helping you make better business decisions.</p>
                <a href="#" class="px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Learn More</a>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-16">
            <!-- Text Section -->
            <div class="flex flex-col justify-center">
                <h3 class="text-3xl font-bold mb-4 text-black">Detailed Business Clarity </h3>
                <p class="text-lg mb-6 text-black">Our intuitive software and features provide you with insights to track and manage your finances, helping you make better business decisions.</p>
                <a href="#" class="px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Learn More</a>
            </div>

            <!-- Image Section -->
            <div class="relative">
                <img src="/images/image-removebg-preview (2).png" alt="Financial Mastery" class="rounded-lg shadow-0g">
            </div>
        </div>
    </div>
</section>



<!-- Contact Section -->
<section id="contact" class="h-screen bg-gray-800 flex items-center justify-center relative" style="background-image: url('/images/signupbackground.png'); background-size: cover; background-position: center;">
<div class="absolute inset-0 bg-black opacity-40"></div> <!-- Adjust opacity here --> 
  <div class="w-full max-w-lg text-center text-white p-8 rounded-lg shadow-lg bg-opacity-100 bg-gray-800">
        <h2 class="text-4xl font-bold mb-6">Contact Us</h2>
        <p class="text-lg mb-4">Feel free to reach out to us via the following contact details:</p>
        
        <div class="space-y-4">
            <div>
                <i class="fas fa-phone-alt"></i>
                <span class="ml-2">+123-456-7890</span>
            </div>
            <div>
                <i class="fas fa-envelope"></i>
                <span class="ml-2">info@malidaftari.com</span>
            </div>
            <div>
                <i class="fas fa-map-marker-alt"></i>
                <span class="ml-2">123 Business Street, Nairobi, Kenya</span>
            </div>
        </div>
    </div>
</div>
</section>


<script>
    // Highlight the active section link
    document.addEventListener('scroll', function () {
        const sections = document.querySelectorAll('section');
        const navLinks = document.querySelectorAll('.nav-link');
        let index = sections.length;

        while(--index && window.scrollY + 50 < sections[index].offsetTop) {}

        navLinks.forEach((link) => link.classList.remove('active'));
        navLinks[index].classList.add('active');
    });
</script>

</body>
</html>
