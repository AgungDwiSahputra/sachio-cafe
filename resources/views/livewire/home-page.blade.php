<div>
    <!-- Hero Section -->
    <header class="relative bg-stone-900 h-screen flex items-center">
        <div class="max-w-screen-xl mx-auto px-6 flex flex-col lg:flex-row justify-between items-center w-full">
            <!-- Left Content -->
            <div class="lg:w-1/2 text-center lg:text-left">
                <p class="text-sm text-gray-400 uppercase mb-2">Welcome to sachio.shop</p>
                <h1 class="text-4xl md:text-6xl font-bold leading-tight text-yellow-500 mb-4">
                    Heal the world <br> with coffee
                </h1>
                <p class="text-gray-400 text-lg mb-8">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Varius sed pharetra dictum neque massa congue.
                </p>
                <div class="flex justify-center lg:justify-start space-x-4">
                    <a href="{{ route('products') }}" class="z-10 px-6 py-3 bg-yellow-500 text-black font-semibold rounded-lg hover:bg-yellow-700">
                        Order Now
                    </a>
                    <a href="{{ route('categories') }}" class="z-10 px-6 py-3 border border-yellow-500 text-yellow-500 font-semibold rounded-lg hover:bg-yellow-600 hover:text-black">
                        See Menu
                    </a>
                </div>
            </div>
            <!-- Right Content (Image Placeholder) -->
            <div class="lg:w-1/2 h-96 lg:flex hidden justify-center lg:justify-end mt-12 lg:mt-0">
                <div class="relative w-full h-full">
                    <div class="absolute top-0 right-8 w-96 h-96 rounded-lg shadow-lg object-cover border-2 border-yellow-500"></div>
                    <div class="absolute top-4 right-4 w-96 h-96 rounded-lg shadow-lg object-cover border-2 border-yellow-500"></div>
                    <img src="{{ asset('assets/images/logo.jpg') }}" alt="Sachio Cafe" class="absolute top-8 right-0 w-96 h-96 rounded-lg shadow-lg object-cover">
                </div>
            </div>
        </div>
        <img src="{{ asset('assets/images/hero-siluet-1.png') }}" alt="Siluet Bunga" class="absolute left-0 bottom-0">
        <img src="{{ asset('assets/images/hero-siluet-2.png') }}" alt="Siluet Coffee" class="absolute sm:block hidden lg:left-1/2 lg:top-1/4 right-0 top-20 lg:translate-x-[-0%] lg:translate-y-[-100%]">
        <img src="{{ asset('assets/images/hero-siluet-2.png') }}" alt="Siluet Coffee" class="absolute sm:block hidden lg:left-1/2 lg:top-1/4 sm:right-32 sm:top-80 lg:translate-x-[70%] lg:translate-y-[50%] opacity-85">
        <img src="{{ asset('assets/images/hero-siluet-2.png') }}" alt="Siluet Coffee" class="absolute sm:block hidden lg:left-1/2 lg:bottom-1/2 right-20 bottom-52 lg:translate-x-[-100%] lg:translate-y-[0%] opacity-60">
        <img src="{{ asset('assets/images/hero-siluet-2.png') }}" alt="Siluet Coffee" class="absolute sm:block hidden lg:left-1/2 lg:bottom-1/4 right-52 bottom-10 lg:translate-x-[-0%] lg:translate-y-[-0%] opacity-30">
    </header>

    <!-- About Us Section -->
    <section class="py-16 pb-28 bg-white">
        <div class="max-w-screen-xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
            <!-- Left Content -->
            <div class="relative h-[400px] lg:block hidden">
                <img src="{{ asset('assets/images/dot_shapes.png') }}" alt="About Us 1" class="absolute top-0 right-1/4 h-32 rounded-lg object-cover">
                <!-- First Image -->
                <img src="{{ asset('assets/images/about_us1.webp') }}" alt="About Us 1" class="absolute top-0 right-1/3 h-72 rounded-lg shadow-lg object-cover">
                <!-- Second Image -->
                <img src="{{ asset('assets/images/about_us2.webp') }}" alt="About Us 2" class="absolute bottom-1/4 left-8 w-64 h-40 rounded-lg shadow-lg transform translate-y-16 lg:translate-y-24 object-cover">
            </div>

            <!-- Right Content -->
            <div>
                <p class="text-lg text-gray-500 font-semibold uppercase mb-4">About Us</p>
                <h2 class="text-3xl font-bold mb-6">We are the best quality Coffee maker</h2>
                <p class="text-gray-600 mb-6">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque diam pellentesque bibendum non
                    dui volutpat fringilla bibendum. Urna, elit augue urna a, vitae feugiat pretium donec id elementum.
                </p>
                <ul class="space-y-4 mb-6">
                    <li class="flex items-center">
                        <span class="inline-block w-4 h-4 bg-yellow-500 rounded-full mr-4"></span>
                        Experienced Chefs
                    </li>
                    <li class="flex items-center">
                        <span class="inline-block w-4 h-4 bg-yellow-500 rounded-full mr-4"></span>
                        Different Coffee & Drinks
                    </li>
                </ul>
                <button class="px-6 py-3 bg-yellow-500 text-white font-semibold rounded-lg hover:bg-yellow-600">
                    Learn More →
                </button>
            </div>
        </div>
    </section>

    <!-- Coffee Category Section -->
    <section class="py-16">
        <div class="max-w-screen-xl mx-auto px-6">
            <!-- Heading -->
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold mb-4">Coffee Category</h2>
                <p class="text-gray-600">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Varius sed pharetra dictum neque massa congue.
                </p>
            </div>

            <!-- Content Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-center">

                <!-- Left Column -->
                <div class="space-y-8 lg:order-1 order-2">
                    @if (count($categories) == 0)
                        <!-- Item 1 -->
                        <div class="flex items-center space-x-4">
                            <div class="w-16 h-16 flex items-center justify-center bg-gray-200 rounded-full">
                                <!-- Icon Placeholder -->
                                <div class="w-10 h-10 bg-gray-300 rounded"></div>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold">Ammericano</h3>
                                <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Leo augue nibh est nisi.</p>
                            </div>
                        </div>
                        <!-- Item 2 -->
                        <div class="flex items-center space-x-4">
                            <div class="w-16 h-16 flex items-center justify-center bg-gray-200 rounded-full">
                                <!-- Icon Placeholder -->
                                <div class="w-10 h-10 bg-gray-300 rounded"></div>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold">Coffe Milk</h3>
                                <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Leo augue nibh est nisi.</p>
                            </div>
                        </div>
                        <!-- Item 3 -->
                        <div class="flex items-center space-x-4">
                            <div class="w-16 h-16 flex items-center justify-center bg-gray-200 rounded-full">
                                <!-- Icon Placeholder -->
                                <div class="w-10 h-10 bg-gray-300 rounded"></div>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold">Arabica</h3>
                                <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Leo augue nibh est nisi.</p>
                            </div>
                        </div>
                    @else
                        @foreach ($categories->take(3) as $key => $item)
                            <!-- Item -->
                            <div class="flex items-center space-x-4" wire:key="{{ $item->id }}">
                                <div class="w-16 h-16 flex items-center justify-center bg-gray-200 rounded-full">
                                    <!-- Icon Placeholder -->
                                    <div class="w-10 h-10 bg-gray-300 rounded"></div>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold">{{ $item->name }}</h3>
                                    <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Leo augue nibh est nisi.</p>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>

                <!-- Center Image -->
                <div class="flex justify-center lg:order-2 order-1">
                    <img src="{{ asset('assets/images/category_image.webp') }}" alt="Image Category" class="w-64 h-80 rounded-lg shadow-lg object-cover">
                </div>

                <!-- Right Column -->
                <div class="space-y-8 lg:order-3 order-3">
                    @if (count($categories) < 4)
                        <!-- Item 1 -->
                        <div class="flex items-center space-x-4">
                            <div class="w-16 h-16 flex items-center justify-center bg-gray-200 rounded-full">
                                <!-- Icon Placeholder -->
                                <div class="w-10 h-10 bg-gray-300 rounded"></div>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold">Turkish Coffee</h3>
                                <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Leo augue nibh est nisi.</p>
                            </div>
                        </div>
                        <!-- Item 2 -->
                        <div class="flex items-center space-x-4">
                            <div class="w-16 h-16 flex items-center justify-center bg-gray-200 rounded-full">
                                <!-- Icon Placeholder -->
                                <div class="w-10 h-10 bg-gray-300 rounded"></div>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold">Pancakes</h3>
                                <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Leo augue nibh est nisi.</p>
                            </div>
                        </div>
                        <!-- Item 3 -->
                        <div class="flex items-center space-x-4">
                            <div class="w-16 h-16 flex items-center justify-center bg-gray-200 rounded-full">
                                <!-- Icon Placeholder -->
                                <div class="w-10 h-10 bg-gray-300 rounded"></div>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold">Coffee Bag</h3>
                                <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Leo augue nibh est nisi.</p>
                            </div>
                        </div>
                    @else
                        @foreach ($categories->slice(-3) as $key => $item)
                            <!-- Item -->
                            <div class="flex items-center space-x-4" wire:key="{{ $item->id }}">
                                <div class="w-16 h-16 flex items-center justify-center bg-gray-200 rounded-full">
                                    <!-- Icon Placeholder -->
                                    <div class="w-10 h-10 bg-gray-300 rounded"></div>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold">{{ $item->name }}</h3>
                                    <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Leo augue nibh est nisi.</p>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section>

    <!-- Menu Section -->
    <section class="py-16 bg-white">
        <div class="max-w-screen-xl mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-8">Our Menu</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($products as $item)
                    <div class="bg-gray-100 rounded-lg shadow-lg p-4" wire:key="{{ $item->id }}">
                        <img src="{{ url('storage', $item->images[0]) }}" alt="{{ $item->slug }}" class="w-full h-48 mb-4 rounded-lg object-cover">
                        <h3 class="text-xl font-bold">{{ $item->name }}</h3>
                        <p class="text-gray-600">Rp. {{ number_format($item->price, 0, ',', '.') }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section class="py-16 bg-white">
        <div class="max-w-screen-xl mx-auto grid grid-cols-1 lg:grid-cols-2 items-center px-6">
            <!-- Left Content -->
            <div class="bg-black text-white p-8 rounded-lg rounded-e-none relative">
                <h2 class="text-3xl font-bold mb-6 text-center">Our customer say</h2>
                <div class="text-center">
                    <p class="text-yellow-500 text-6xl font-bold mb-4">“</p>
                    <p class="text-gray-400 mb-8">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Leo augue nibh est nisi, ultricies.
                        Consectetur et faucibus vivamus lorem hendrerit enim donec ut. Nec blandit vulputate varius at quis non.
                    </p>
                    <div class="flex flex-col items-center">
                        <div class="w-16 h-16 bg-gray-300 rounded-full mb-4"></div>
                        <h3 class="text-lg font-bold">William Carry</h3>
                        <p class="text-gray-400">Founder & CEO</p>
                    </div>
                </div>
            </div>

            <!-- Right Content (Image Placeholder) -->
            <img src="{{ asset('assets/images/testimoni.webp') }}" alt="Testimoni Background Section" class="h-full object-cover">
        </div>
    </section>

    <!-- Blog Section -->
    {{-- <section class="py-16 bg-gray-100">
        <div class="max-w-screen-xl mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-8">Latest News & Blog</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg shadow-lg p-4">
                    <div class="w-full h-48 bg-gray-300 mb-4 rounded-lg"></div>
                    <h3 class="text-xl font-bold">Simple Coffee Recipe</h3>
                    <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur.</p>
                    <a wire:navigate href="#" class="text-yellow-500">Read More</a>
                </div>
                <div class="bg-white rounded-lg shadow-lg p-4">
                    <div class="w-full h-48 bg-gray-300 mb-4 rounded-lg"></div>
                    <h3 class="text-xl font-bold">Italian Coffee</h3>
                    <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur.</p>
                    <a wire:navigate href="#" class="text-yellow-500">Read More</a>
                </div>
                <div class="bg-white rounded-lg shadow-lg p-4">
                    <div class="w-full h-48 bg-gray-300 mb-4 rounded-lg"></div>
                    <h3 class="text-xl font-bold">Chocolate Truffle Coffee</h3>
                    <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur.</p>
                    <a wire:navigate href="#" class="text-yellow-500">Read More</a>
                </div>
            </div>
        </div>
    </section> --}}
</div>
