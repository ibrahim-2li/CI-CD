<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Global Trade Solutions</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-white text-gray-800">
    <div class="flex flex-col min-h-screen">
        <header class="bg-blue-900 bg-opacity-90 text-white shadow-lg sticky top-0 z-50 backdrop-blur-md">
            <nav class="container mx-auto px-6 py-4 flex justify-between items-center">
                <a href="#" class="text-3xl font-bold tracking-wider">GTS</a>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#services" class="hover:text-blue-300 transition duration-300">Services</a>
                    <a href="#about" class="hover:text-blue-300 transition duration-300">About</a>
                    <a href="#gallery" class="hover:text-blue-300 transition duration-300">Gallery</a>
                    <a href="#contact" class="bg-blue-600 hover:bg-blue-500 text-white font-bold py-2 px-6 rounded-full transition duration-300">Contact Us</a>
                </div>
                <div class="md:hidden">
                    <button id="mobile-menu-button" class="text-white focus:outline-none">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                        </svg>
                    </button>
                </div>
            </nav>
            <div id="mobile-menu" class="hidden md:hidden">
                <a href="#services" class="block px-8 py-3 text-center hover:bg-blue-800">Services</a>
                <a href="#about" class="block px-8 py-3 text-center hover:bg-blue-800">About</a>
                <a href="#gallery" class="block px-8 py-3 text-center hover:bg-blue-800">Gallery</a>
                <a href="#contact" class="block px-8 py-3 text-center hover:bg-blue-800">Contact Us</a>
            </div>
        </header>

        <main class="flex-grow">
            <section class="relative w-full h-screen" data-flickity='{ "autoPlay": 5000, "wrapAround": true, "fade": true }'>
                <div class="carousel-cell w-full h-full bg-cover bg-center" style="background-image: url('{{ asset('images/hero-shipping.jpg') }}');">
                    <div class="flex items-center justify-center h-full bg-black bg-opacity-60">
                        <div class="text-center text-white px-6">
                            <h1 class="text-5xl md:text-7xl font-extrabold leading-tight mb-4 animate-fade-in-down">Global Trade, Delivered</h1>
                            <p class="text-xl md:text-2xl mb-8 font-light animate-fade-in-up">Your partner in seamless import and export logistics.</p>
                            <a href="#contact" class="bg-blue-600 hover:bg-blue-500 text-white font-bold py-4 px-10 rounded-full transition duration-300 transform hover:scale-105">Request a Consultation</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-cell w-full h-full bg-cover bg-center" style="background-image: url('{{ asset('images/hero-warehouse.jpg') }}');">
                    <div class="flex items-center justify-center h-full bg-black bg-opacity-60">
                        <div class="text-center text-white px-6">
                            <h1 class="text-5xl md:text-7xl font-extrabold leading-tight mb-4">State-of-the-Art Warehousing</h1>
                            <p class="text-xl md:text-2xl mb-8 font-light">Secure, scalable, and strategic storage solutions.</p>
                            <a href="#services" class="bg-blue-600 hover:bg-blue-500 text-white font-bold py-4 px-10 rounded-full transition duration-300 transform hover:scale-105">Explore Our Services</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-cell w-full h-full bg-cover bg-center" style="background-image: url('{{ asset('images/hero-containers.jpg') }}');">
                    <div class="flex items-center justify-center h-full bg-black bg-opacity-60">
                        <div class="text-center text-white px-6">
                            <h1 class="text-5xl md:text-7xl font-extrabold leading-tight mb-4">Efficient Customs Clearance</h1>
                            <p class="text-xl md:text-2xl mb-8 font-light">Navigating global trade regulations with precision.</p>
                            <a href="#about" class="bg-blue-600 hover:bg-blue-500 text-white font-bold py-4 px-10 rounded-full transition duration-300 transform hover:scale-105">Learn More About Us</a>
                        </div>
                    </div>
                </div>
            </section>

            <section id="services" class="py-20 bg-gray-50">
                <div class="container mx-auto px-6">
                    <h2 class="text-4xl font-bold text-center mb-2 text-blue-900">Comprehensive Logistics Services</h2>
                    <p class="text-center text-gray-600 mb-12 max-w-2xl mx-auto">From point of origin to final destination, we provide a full spectrum of logistics services to meet your needs.</p>
                    <div class="grid md:grid-cols-3 gap-8">
                        <div class="group relative rounded-lg overflow-hidden shadow-2xl transform transition-transform duration-500 hover:-translate-y-2">
                            <div class="h-80 bg-cover bg-center" style="background-image: url('{{ asset('images/service-shipping.jpg') }}')"></div>
                            <div class="absolute inset-0 bg-black bg-opacity-60 flex flex-col justify-end p-8 text-white transition-opacity duration-500 group-hover:bg-opacity-70">
                                <h3 class="text-2xl font-bold mb-2">Global Shipping</h3>
                                <p class="opacity-0 max-h-0 group-hover:opacity-100 group-hover:max-h-full transition-all duration-500">Reliable and timely shipping solutions across the globe, whether by air, sea, or land.</p>
                            </div>
                        </div>
                        <div class="group relative rounded-lg overflow-hidden shadow-2xl transform transition-transform duration-500 hover:-translate-y-2">
                            <div class="h-80 bg-cover bg-center" style="background-image: url('{{ asset('images/service-customs.jpg') }}')"></div>
                            <div class="absolute inset-0 bg-black bg-opacity-60 flex flex-col justify-end p-8 text-white transition-opacity duration-500 group-hover:bg-opacity-70">
                                <h3 class="text-2xl font-bold mb-2">Customs Clearance</h3>
                                <p class="opacity-0 max-h-0 group-hover:opacity-100 group-hover:max-h-full transition-all duration-500">Navigating complex customs regulations to ensure your shipments are cleared without delay.</p>
                            </div>
                        </div>
                        <div class="group relative rounded-lg overflow-hidden shadow-2xl transform transition-transform duration-500 hover:-translate-y-2">
                            <div class="h-80 bg-cover bg-center" style="background-image: url('{{ asset('images/service-warehousing.jpg') }}')"></div>
                            <div class="absolute inset-0 bg-black bg-opacity-60 flex flex-col justify-end p-8 text-white transition-opacity duration-500 group-hover:bg-opacity-70">
                                <h3 class="text-2xl font-bold mb-2">Warehousing</h3>
                                <p class="opacity-0 max-h-0 group-hover:opacity-100 group-hover:max-h-full transition-all duration-500">Secure and flexible warehousing options to store your goods before, during, and after transit.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <section id="about" class="py-20 bg-white">
                <div class="container mx-auto px-6">
                    <div class="grid md:grid-cols-2 gap-16 items-center">
                        <div>
                            <h2 class="text-4xl font-bold text-blue-900 mb-6">Connecting Continents, Building Trust</h2>
                            <p class="text-gray-600 mb-6 text-lg">With over 20 years of experience, Global Trade Solutions is your dedicated partner for seamless import/export services. We combine deep industry knowledge with cutting-edge technology to deliver reliable and cost-effective logistics solutions.</p>
                            <p class="text-gray-600 mb-8 text-lg">Our commitment to transparency and client satisfaction sets us apart. We build lasting relationships based on trust and mutual success.</p>
                            <a href="#" class="text-blue-600 font-bold hover:underline">Learn more about our journey &rarr;</a>
                        </div>
                        <div class="rounded-lg overflow-hidden shadow-2xl">
                             <img src="{{ asset('images/about-network.jpg') }}" alt="Global Network Map" class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>
            </section>

            <section id="values" class="py-20 bg-blue-50">
                <div class="container mx-auto px-6">
                    <h2 class="text-4xl font-bold text-center mb-12 text-blue-900">Our Core Values</h2>
                    <div class="grid md:grid-cols-3 gap-8">
                        <div class="bg-white p-8 rounded-lg shadow-lg text-center transform transition-transform duration-300 hover:scale-105">
                            <h3 class="text-2xl font-bold mb-2 text-blue-800">Integrity</h3>
                            <p>We uphold the highest standards of integrity, ensuring transparency and trust in all our actions.</p>
                        </div>
                        <div class="bg-white p-8 rounded-lg shadow-lg text-center transform transition-transform duration-300 hover:scale-105">
                            <h3 class="text-2xl font-bold mb-2 text-blue-800">Efficiency</h3>
                            <p>We leverage technology and expertise to deliver your goods with maximum speed and minimum cost.</p>
                        </div>
                        <div class="bg-white p-8 rounded-lg shadow-lg text-center transform transition-transform duration-300 hover:scale-105">
                            <h3 class="text-2xl font-bold mb-2 text-blue-800">Partnership</h3>
                            <p>We believe in building long-term relationships with our clients, acting as an extension of your team.</p>
                        </div>
                    </div>
                </div>
            </section>
            
            <section id="team" class="py-20 bg-gray-50">
                <div class="container mx-auto px-6">
                    <h2 class="text-4xl font-bold text-center mb-12 text-blue-900">Meet Our Experts</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                        <div class="group text-center">
                            <div class="relative w-48 h-48 mx-auto rounded-full overflow-hidden shadow-lg transform transition-transform duration-500 group-hover:scale-110">
                                <img src="https://ui-avatars.com/api/?name=John+Doe&size=300&background=a3bffa&color=3b82f6" alt="Team Member" class="w-full h-full object-cover">
                            </div>
                            <h3 class="text-xl font-bold mt-6 mb-1">John Doe</h3>
                            <p class="text-blue-600">CEO & Founder</p>
                        </div>
                         <div class="group text-center">
                            <div class="relative w-48 h-48 mx-auto rounded-full overflow-hidden shadow-lg transform transition-transform duration-500 group-hover:scale-110">
                                <img src="https://ui-avatars.com/api/?name=Jane+Smith&size=300&background=a3bffa&color=3b82f6" alt="Team Member" class="w-full h-full object-cover">
                            </div>
                            <h3 class="text-xl font-bold mt-6 mb-1">Jane Smith</h3>
                            <p class="text-blue-600">Chief Operations Officer</p>
                        </div>
                         <div class="group text-center">
                            <div class="relative w-48 h-48 mx-auto rounded-full overflow-hidden shadow-lg transform transition-transform duration-500 group-hover:scale-110">
                                <img src="https://ui-avatars.com/api/?name=Peter+Jones&size=300&background=a3bffa&color=3b82f6" alt="Team Member" class="w-full h-full object-cover">
                            </div>
                            <h3 class="text-xl font-bold mt-6 mb-1">Peter Jones</h3>
                            <p class="text-blue-600">Head of Freight</p>
                        </div>
                         <div class="group text-center">
                            <div class="relative w-48 h-48 mx-auto rounded-full overflow-hidden shadow-lg transform transition-transform duration-500 group-hover:scale-110">
                                <img src="https://ui-avatars.com/api/?name=Sarah+Williams&size=300&background=a3bffa&color=3b82f6" alt="Team Member" class="w-full h-full object-cover">
                            </div>
                            <h3 class="text-xl font-bold mt-6 mb-1">Sarah Williams</h3>
                            <p class="text-blue-600">Customs Specialist</p>
                        </div>
                    </div>
                </div>
            </section>

            <section id="gallery" class="py-20 bg-white">
                <div class="container mx-auto px-6">
                    <h2 class="text-4xl font-bold text-center mb-12 text-blue-900">Glimpses of Our Operations</h2>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                        <div class="group relative overflow-hidden rounded-lg shadow-lg">
                            <img src="{{ asset('images/gallery-1.jpg') }}" class="w-full h-full object-cover transform transition-transform duration-500 group-hover:scale-110">
                            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <p class="text-white text-lg font-bold">Busy Port</p>
                            </div>
                        </div>
                        <div class="group relative overflow-hidden rounded-lg shadow-lg col-span-1 md:col-span-2">
                             <img src="{{ asset('images/gallery-2.jpg') }}" class="w-full h-full object-cover transform transition-transform duration-500 group-hover:scale-110">
                             <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <p class="text-white text-lg font-bold">Warehouse Operations</p>
                            </div>
                        </div>
                        <div class="group relative overflow-hidden rounded-lg shadow-lg">
                            <img src="{{ asset('images/gallery-3.jpg') }}" class="w-full h-full object-cover transform transition-transform duration-500 group-hover:scale-110">
                             <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <p class="text-white text-lg font-bold">Air Freight</p>
                            </div>
                        </div>
                         <div class="group relative overflow-hidden rounded-lg shadow-lg col-span-1 md:col-span-2">
                             <img src="{{ asset('images/gallery-4.jpg') }}" class="w-full h-full object-cover transform transition-transform duration-500 group-hover:scale-110">
                            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <p class="text-white text-lg font-bold">Container Management</p>
                            </div>
                        </div>
                        <div class="group relative overflow-hidden rounded-lg shadow-lg">
                            <img src="{{ asset('images/gallery-5.jpg') }}" class="w-full h-full object-cover transform transition-transform duration-500 group-hover:scale-110">
                             <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <p class="text-white text-lg font-bold">Land Transport</p>
                            </div>
                        </div>
                         <div class="group relative overflow-hidden rounded-lg shadow-lg">
                             <img src="{{ asset('images/gallery-6.jpg') }}" class="w-full h-full object-cover transform transition-transform duration-500 group-hover:scale-110">
                             <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <p class="text-white text-lg font-bold">Customs Paperwork</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <section id="testimonials" class="py-20 bg-blue-900">
                <div class="container mx-auto px-6">
                    <h2 class="text-4xl font-bold text-center mb-12 text-white">Trusted by Industry Leaders</h2>
                    <div class="grid md:grid-cols-3 gap-8">
                        <div class="bg-white bg-opacity-10 backdrop-blur-lg p-8 rounded-xl shadow-lg text-white">
                            <p class="mb-6 font-light">"Global Trade Solutions has been an invaluable partner. Their expertise in customs clearance is unmatched."</p>
                            <div class="flex items-center">
                                <img src="https://ui-avatars.com/api/?name=A&size=100&background=e0e1dd&color=0d1b2a" class="w-12 h-12 rounded-full mr-4 border-2 border-blue-300">
                                <div>
                                    <p class="font-bold">Johnathan Doe</p>
                                    <p class="text-sm text-blue-300">CEO of Innotech</p>
                                </div>
                            </div>
                        </div>
                         <div class="bg-white bg-opacity-10 backdrop-blur-lg p-8 rounded-xl shadow-lg text-white">
                            <p class="mb-6 font-light">"The professionalism and reliability of GTS are why we trust them with our global warehousing needs."</p>
                             <div class="flex items-center">
                                <img src="https://ui-avatars.com/api/?name=B&size=100&background=e0e1dd&color=0d1b2a" class="w-12 h-12 rounded-full mr-4 border-2 border-blue-300">
                                <div>
                                    <p class="font-bold">Jane Smith</p>
                                    <p class="text-sm text-blue-300">COO of BuildCorp</p>
                                </div>
                            </div>
                        </div>
                         <div class="bg-white bg-opacity-10 backdrop-blur-lg p-8 rounded-xl shadow-lg text-white">
                            <p class="mb-6 font-light">"Their end-to-end shipping solutions have optimized our supply chain and reduced costs significantly."</p>
                            <div class="flex items-center">
                                <img src="https://ui-avatars.com/api/?name=C&size=100&background=e0e1dd&color=0d1b2a" class="w-12 h-12 rounded-full mr-4 border-2 border-blue-300">
                                <div>
                                    <p class="font-bold">Peter Jones</p>
                                    <p class="text-sm text-blue-300">CFO of TechNow</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="contact" class="py-20 bg-white">
                <div class="container mx-auto px-6">
                    <div class="grid md:grid-cols-2 gap-16 items-center">
                        <div class="bg-gray-50 p-12 rounded-lg shadow-xl">
                            <h2 class="text-4xl font-bold text-blue-900 mb-6">Get in Touch</h2>
                            <form action="#" method="POST" class="space-y-6">
                                <div>
                                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                                    <input type="text" id="name" name="name" class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                                </div>
                                 <div>
                                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                    <input type="email" id="email" name="email" class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                                </div>
                                 <div>
                                    <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                                    <textarea id="message" name="message" rows="5" class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"></textarea>
                                </div>
                                <div class="text-right">
                                    <button type="submit" class="bg-blue-600 text-white font-bold py-3 px-8 rounded-full hover:bg-blue-500 transition duration-300 transform hover:scale-105">Send Message</button>
                                </div>
                            </form>
                        </div>
                         <div class="h-full w-full rounded-lg overflow-hidden shadow-2xl">
                             <img src="{{ asset('images/contact-map.jpg') }}" alt="Map" class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer class="bg-blue-900 text-white">
            <div class="container mx-auto px-6 py-12">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                    <div>
                        <h3 class="text-2xl font-bold mb-4">GTS</h3>
                        <p class="text-blue-200">Your trusted partner in global logistics, ensuring your shipments arrive safely and on time.</p>
                    </div>
                    <div>
                        <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                        <ul>
                            <li class="mb-2"><a href="#services" class="hover:text-blue-300">Services</a></li>
                            <li class="mb-2"><a href="#about" class="hover:text-blue-300">About Us</a></li>
                            <li class="mb-2"><a href="#gallery" class="hover:text-blue-300">Gallery</a></li>
                            <li class="mb-2"><a href="#contact" class="hover:text-blue-300">Contact</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-lg font-semibold mb-4">Contact Us</h4>
                        <p class="text-blue-200 mb-2">123 Logistics Lane, Suite 100<br>Metropolis, USA 12345</p>
                        <p class="text-blue-200 mb-2">Email: <a href="mailto:contact@gts.com" class="hover:underline">contact@gts.com</a></p>
                        <p class="text-blue-200">Phone: <a href="tel:+1234567890" class="hover:underline">(123) 456-7890</a></p>
                    </div>
                    <div>
                        <h4 class="text-lg font-semibold mb-4">Follow Us</h4>
                        <div class="flex space-x-4">
                            <a href="#" class="text-blue-300 hover:text-white"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.494v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.323-1.325z"/></svg></a>
                            <a href="#" class="text-blue-300 hover:text-white"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.85s-.011 3.584-.069 4.85c-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07s-3.584-.012-4.85-.07c-3.252-.148-4.771-1.691-4.919-4.919-.058-1.265-.069-1.645-.069-4.85s.011-3.584.069-4.85c.149-3.225 1.664-4.771 4.919-4.919 1.266-.057 1.644-.069 4.85-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948s.014 3.667.072 4.947c.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072s3.667-.014 4.947-.072c4.358-.2 6.78-2.618 6.98-6.98.059-1.281.073-1.689.073-4.948s-.014-3.667-.072-4.947c-.2-4.358-2.618-6.78-6.98-6.98-1.281-.059-1.689-.073-4.948-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.162 6.162 6.162 6.162-2.759 6.162-6.162-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4s1.791-4 4-4 4 1.79 4 4-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.441 1.441 1.441 1.441-.645 1.441-1.441-.645-1.44-1.441-1.44z"/></svg></a>
                            <a href="#" class="text-blue-300 hover:text-white"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.586-5.515 5.749 0 .449.05.885.146 1.308-4.573-.23-8.633-2.424-11.354-5.762-.474.813-.746 1.756-.746 2.759 0 1.999 1.018 3.762 2.569 4.793-.944-.03-1.833-.288-2.61-.722v.073c0 2.793 1.989 5.122 4.628 5.658-.484.132-.99.202-1.508.202-.37 0-.73-.036-1.08-.103.732 2.29 2.853 3.961 5.367 4.008-1.975 1.543-4.473 2.46-7.197 2.46-.467 0-.928-.027-1.383-.081 2.545 1.631 5.574 2.586 8.84 2.586 10.605 0 16.401-8.778 16.401-16.401 0-.251-.006-.501-.017-.751.18-.13.34-.28.49-.45.002.001.001.002.001.002z"/></svg></a>
                        </div>
                    </div>
                </div>
                <div class="mt-8 border-t border-blue-800 pt-8">
                    <p class="text-center text-blue-300">&copy; {{ date('Y') }} Global Trade Solutions. All Rights Reserved.</p>
                </div>
            </div>
        </footer>
    </div>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script>
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            var menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });
    </script>
</body>