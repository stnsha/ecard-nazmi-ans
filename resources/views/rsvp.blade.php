<x-public-layout>
    <div class="flex flex-col justify-center items-center w-full md:w-1/2 mx-auto">
        <span class="font-sans font-bold text-md text-center text-slate-950 mb-3">Garis Masa</span>
        <div class="flex flex-col justify-start w-full px-4 md:px-0">
            <!-- Timeline content remains unchanged -->
            <ol class="relative border-s border-gray-300">
                <li class="flex flex-col mb-3 ms-4">
                    <div class="absolute w-2 h-2 bg-[#f17b89] rounded-full mt-1.5 -start-1.5 border"></div>
                    <div class="flex justify-between items-center w-full">
                        <div class="flex flex-col">
                            <time class="mb-1 text-[10px] font-normal leading-none text-gray-500">11:00 pagi</time>
                            <span class="font-sans font-normal text-sm text-gray-950">Majlis bermula</span>
                        </div>
                        <img src="{{ asset('start.png') }}" alt="Opening" class="w-10" />
                    </div>
                </li>
            </ol>
            <!-- Other timeline items remain the same -->
            <ol class="relative border-s border-gray-300">
                <li class="flex flex-col mb-3 ms-4">
                    <div class="absolute w-2 h-2 bg-[#f17b89] rounded-full mt-1.5 -start-1.5 border"></div>
                    <div class="flex justify-between items-center w-full">
                        <div class="flex flex-col">
                            <time class="mb-1 text-[10px] font-normal leading-none text-gray-500">12:30 t/hari</time>
                            <span class="font-sans font-normal text-sm text-gray-950">Ketibaan pengantin</span>
                        </div>
                        <img src="{{ asset('bridegroom.png') }}" alt="Bride and Groom" class="w-10" />
                    </div>
                </li>
            </ol>
            <ol class="relative border-s border-gray-300">
                <li class="flex flex-col mb-3 ms-4">
                    <div class="absolute w-2 h-2 bg-[#f17b89] rounded-full mt-1.5 -start-1.5 border"></div>
                    <div class="flex justify-between items-center w-full">
                        <div class="flex flex-col">
                            <time class="mb-1 text-[10px] font-normal leading-none text-gray-500">01:30 petang</time>
                            <span class="font-sans font-normal text-sm text-gray-950">Sesi bergambar</span>
                        </div>
                        <img src="{{ asset('camera.png') }}" alt="Camera" class="w-9" />
                    </div>
                </li>
            </ol>
            <ol class="relative border-s border-gray-300">
                <li class="flex flex-col mb-3 ms-4">
                    <div class="absolute w-2 h-2 bg-[#f17b89] rounded-full mt-1.5 -start-1.5 border"></div>
                    <div class="flex justify-between items-center w-full">
                        <div class="flex flex-col">
                            <time class="mb-1 text-[10px] font-normal leading-none text-gray-500">04:00 petang</time>
                            <span class="font-sans font-normal text-sm text-gray-950">Majlis bersurai</span>
                        </div>
                        <img src="{{ asset('end.png') }}" alt="End" class="w-9" />
                    </div>
                </li>
            </ol>
        </div>

        <span class="font-sans font-bold text-md text-center text-slate-950 mb-3">Ucapan</span>
        @if (count($rsvps) > 0)
            <div id="wishes-carousel" class="relative w-[95%] rounded-md mb-4">
                <!-- Carousel content -->
                <div class="flex relative h-56 overflow-hidden rounded-lg md:h-20">
                    @foreach ($rsvps as $key => $rsvp)
                        <div class="absolute inset-0 transition-opacity duration-700 ease-in-out {{ $key === 0 ? 'opacity-100' : 'opacity-0' }}"
                            data-wish-slide="{{ $key }}">
                            <div class="flex flex-col justify-center items-center w-full h-full px-16">
                                <span class="text-center text-sm">{{ $rsvp->wishes }}</span>
                                <span class="text-center text-xs italic text-gray-600">- {{ $rsvp->name }}</span>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Custom Controls -->
                <button type="button"
                    class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    id="prev-btn">
                    <span class="inline-flex items-center justify-center w-5 h-5 rounded-full rtl:rotate-180">
                        <svg aria-hidden="true" class="w-4 h-4 text-[#f17b89]" fill="none" viewBox="0 0 6 10"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>

                <button type="button"
                    class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    id="next-btn">
                    <span class="inline-flex items-center justify-center w-5 h-5 rounded-full rtl:rotate-180">
                        <svg aria-hidden="true" class="w-4 h-4 text-[#f17b89]" fill="none" viewBox="0 0 6 10"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>

                <!-- Dots -->
                {{-- <div class="absolute z-50 flex -translate-x-1/2 bottom-2 left-1/2 space-x-3 rtl:space-x-reverse"
                    id="carousel-dots">
                    @foreach ($rsvps as $key => $rsvp)
                        <button type="button"
                            class="w-2 h-2 rounded-full {{ $key === 0 ? 'bg-[#f17b89]' : 'bg-[#ffdde1]' }}"
                            data-slide-to="{{ $key }}"></button>
                    @endforeach
                </div> --}}
            </div>
        @endif

        <span class="font-sans font-bold text-md text-center text-slate-950 mb-3">RSVP</span>
        <div class="flex flex-col w-full px-2 md:px-0">
            <form class="flex flex-col w-full" action="{{ route('rsvp.store') }}" method="POST" id="rsvp-form">
                @method('post')
                @csrf
                <div class="flex flex-col justify-start items-center mb-3 w-full">
                    <span class="flex font-sans font-medium text-sm text-start w-full ml-3 pb-1.5">Nama</span>
                    <input class="flex rounded-full border-0 w-full bg-slate-100" type="text" name="name"
                        id="name">
                    @error('name')
                        <div class="text-red-500 text-sm">{{ $message }}</div>
                    @enderror
                </div>
                <div class="flex flex-col justify-start items-center mb-3 w-full">
                    <span class="flex font-sans font-medium text-sm text-start w-full ml-3 pb-1.5">Pax</span>
                    <select class="flex rounded-full border-0 w-full bg-slate-100" type="text" name="pax"
                        id="pax">
                        @for ($i = 0; $i <= 10; $i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
                    </select>
                    @error('pax')
                        <div class="text-red-500 text-sm">{{ $message }}</div>
                    @enderror
                </div>
                <div class="flex flex-col justify-start items-start mb-3 w-full">
                    <span class="flex font-sans font-medium text-sm text-start w-full ml-3 pb-1.5">Hadir?</span>
                    <div class="flex flex-col space-y-2 ml-2">
                        <label class="flex items-center space-x-2">
                            <input type="radio" name="is_attend" class="bg-slate-100" value="1">
                            <span class="font-sans font-normal text-sm">Ya</span>
                        </label>
                        <label class="flex items-center space-x-2">
                            <input type="radio" name="is_attend" class="bg-slate-100" value="0">
                            <span class="font-sans font-normal text-sm">Tidak</span>
                        </label>
                    </div>
                    <div id="error-is_attend"></div>
                </div>

                <div class="flex flex-col justify-start items-start mb-3 w-full">
                    <span class="flex font-sans font-medium text-sm text-start w-full ml-3 pb-1.5">Slot Masa</span>
                    <div class="flex flex-col space-y-2 ml-2">
                        @foreach ($slots as $key => $s)
                            <label class="flex items-center space-x-2">
                                <input type="radio" name="time_slot" class="bg-slate-100"
                                    value="{{ $s->id }}">
                                <span class="font-sans font-normal text-sm">{{ $s->time_slot }}</span>
                            </label>
                        @endforeach
                    </div>
                    <div id="error-time_slot"></div>
                </div>

                <div class="flex flex-col justify-start items-center mb-3 w-full">
                    <span class="flex font-sans font-medium text-sm text-start w-full ml-3 pb-1.5">Ucapan untuk
                        pengantin</span>
                    <textarea class="flex rounded-lg text-sm px-4 py-2 border-0 w-full bg-slate-100" type="text" name="wishes"
                        id="wishes" rows="5"></textarea>
                </div>

                <div class="flex flex-col justify-start items-center mb-3 w-full">
                    <input type="submit" value="Hantar"
                        class="font-sans font-normal text-sm bg-[#dbc5a9] hover:font-medium py-1.5 px-6 rounded-full">
                </div>

                <div class="flex flex-col justify-start items-center mb-3 w-full">
                    <span class="font-sans font-medium text-xs text-green-600 hidden" id="thank-you">Terima kasih daun
                        keladi, jumpa nanti!</span>
                </div>
            </form>
        </div>


    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('rsvp-form');
            const thankYou = document.getElementById('thank-you');
            const carousel = document.getElementById('wishes-carousel');

            // Initialize custom carousel
            let currentSlide = 0;
            let slidesCount = document.querySelectorAll('[data-wish-slide]').length;
            let slideInterval;

            // Only initialize carousel if it exists and has slides
            if (carousel && slidesCount > 0) {
                initCarousel();
            }

            function initCarousel() {
                // Clear any existing interval
                if (slideInterval) {
                    clearInterval(slideInterval);
                }

                // Update slides count
                slidesCount = document.querySelectorAll('[data-wish-slide]').length;

                // Only start auto-sliding if there are multiple slides
                if (slidesCount > 1) {
                    slideInterval = setInterval(() => {
                        goToSlide((currentSlide + 1) % slidesCount);
                    }, 3000);

                    // Set up event listeners
                    const prevBtn = document.getElementById('prev-btn');
                    const nextBtn = document.getElementById('next-btn');
                    const dots = document.querySelectorAll('[data-slide-to]');

                    if (prevBtn) {
                        prevBtn.addEventListener('click', () => {
                            goToSlide((currentSlide - 1 + slidesCount) % slidesCount);
                        });
                    }

                    if (nextBtn) {
                        nextBtn.addEventListener('click', () => {
                            goToSlide((currentSlide + 1) % slidesCount);
                        });
                    }

                    dots.forEach(dot => {
                        dot.addEventListener('click', () => {
                            const slideIndex = parseInt(dot.getAttribute('data-slide-to'));
                            goToSlide(slideIndex);
                        });
                    });
                }
            }

            function goToSlide(index) {
                // Hide all slides
                const slides = document.querySelectorAll('[data-wish-slide]');
                slides.forEach(slide => {
                    slide.classList.remove('opacity-100');
                    slide.classList.add('opacity-0');
                });

                // Show the selected slide
                const targetSlide = document.querySelector(`[data-wish-slide="${index}"]`);
                if (targetSlide) {
                    targetSlide.classList.remove('opacity-0');
                    targetSlide.classList.add('opacity-100');
                }

                // Update dots
                // const dots = document.querySelectorAll('[data-slide-to]');
                // dots.forEach(dot => {
                //     const dotIndex = parseInt(dot.getAttribute('data-slide-to'));
                //     if (dotIndex === index) {
                //         dot.classList.remove('bg-[#ffdde1]');
                //         dot.classList.add('bg-[#f17b89]');
                //     } else {
                //         dot.classList.remove('bg-[#f17b89]');
                //         dot.classList.add('bg-[#ffdde1]');
                //     }
                // });

                // Update current slide index
                currentSlide = index;

                // Reset interval
                if (slideInterval) {
                    clearInterval(slideInterval);
                    slideInterval = setInterval(() => {
                        goToSlide((currentSlide + 1) % slidesCount);
                    }, 3000);
                }
            }

            // Function to add new wish to carousel
            function addNewWishToCarousel(wishText, fromWishes) {
                // If carousel doesn't exist yet, create it
                if (!carousel) return;

                const carouselContent = carousel.querySelector('.flex.relative.h-40');
                const dotsContainer = document.getElementById('carousel-dots');

                if (!carouselContent || !dotsContainer) return;

                // Get new index
                const newIndex = slidesCount;

                // Create new slide
                const newSlide = document.createElement('div');
                newSlide.className = 'absolute inset-0 transition-opacity duration-700 ease-in-out opacity-0';
                newSlide.setAttribute('data-wish-slide', newIndex);

                const slideContent = document.createElement('div');
                slideContent.className = 'flex flex-col justify-center items-center w-full h-full px-16';

                const wishTextSpan = document.createElement('span');
                wishTextSpan.className = 'text-center text-sm';
                wishTextSpan.textContent = wishText;

                const fromWishesSpan = document.createElement('span');
                fromWishesSpan.className = 'text-center text-xs italic text-gray-600';
                fromWishesSpan.textContent = '- ' + fromWishes;

                slideContent.appendChild(wishTextSpan);
                slideContent.appendChild(fromWishesSpan);
                newSlide.appendChild(slideContent);
                carouselContent.appendChild(newSlide);

                // Create new dot
                const newDot = document.createElement('button');
                newDot.setAttribute('type', 'button');
                newDot.className = 'w-2 h-2 rounded-full bg-[#f17b89]';
                newDot.setAttribute('data-slide-to', newIndex);
                newDot.addEventListener('click', () => {
                    goToSlide(newIndex);
                });

                dotsContainer.appendChild(newDot);

                // Increment slides count
                slidesCount++;

                // If this is the first slide, make sure carousel is visible and initialize it
                if (slidesCount === 1) {
                    if (carousel.classList.contains('hidden')) {
                        carousel.classList.remove('hidden');
                    }
                    goToSlide(0);
                    initCarousel();
                }

                // If you want to immediately show the new slide, uncomment this:
                // goToSlide(newIndex);
            }

            // Handle form submission
            form.addEventListener('submit', async function(e) {
                e.preventDefault();

                // Clear all previous error messages
                document.querySelectorAll('.error-message').forEach(el => el.remove());

                const formData = new FormData(form);

                try {
                    const response = await fetch(form.action, {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('input[name="_token"]')
                                .value,
                            'Accept': 'application/json'
                        },
                        body: formData
                    });

                    if (response.ok) {
                        const data = await response.json();

                        // Show thank you message
                        thankYou.classList.remove('hidden');

                        // If user added a wish, add it to the carousel
                        const wishesValue = formData.get('wishes').trim();

                        const fromWishes = formData.get('name').trim();
                        if (wishesValue && fromWishes) {
                            // Add new wish to carousel
                            addNewWishToCarousel(wishesValue, fromWishes);

                            // If carousel was hidden before, show it now
                            if (carousel && carousel.classList.contains('hidden')) {
                                carousel.classList.remove('hidden');
                            }
                        }

                        // Reset form
                        form.reset();

                        // Hide thank you message after 5 seconds
                        setTimeout(() => {
                            thankYou.classList.add('hidden');
                        }, 5000);

                    } else {
                        const data = await response.json();

                        if (data.errors) {
                            Object.entries(data.errors).forEach(([field, messages]) => {
                                const errorWrapper = document.getElementById(`error-${field}`);
                                const input = form.querySelector(`[name="${field}"]`);

                                const errorDiv = document.createElement('div');
                                errorDiv.className =
                                    'flex flex-row justify-start items-center w-full font-sans font-medium text-red-500 text-xs pt-1.5 error-message';
                                errorDiv.innerText = messages[0];

                                if (errorWrapper) {
                                    errorWrapper.appendChild(errorDiv);
                                } else if (input) {
                                    input.parentNode.appendChild(errorDiv);
                                }
                            });
                        } else {
                            alert('Ada masalah: ' + (data.message || 'Sila semak borang anda.'));
                        }
                    }
                } catch (error) {
                    console.error('Error submitting form:', error);
                    // alert('Ada masalah dengan sambungan internet. Sila cuba lagi.');
                }
            });
        });
    </script>
</x-public-layout>
