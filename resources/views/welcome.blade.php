<x-public-layout>
    <div class="flex flex-col w-full">
        <!-- Image container -->
        {{-- <div class="flex justify-end items-end md:hidden">
            <img src="{{ asset('direction.svg') }}" alt="direction" id="directionImage"
                class="w-1/2 mr-8 hidden opacity-0 animate__animated transition-all duration-300">
        </div> --}}

        <iframe class="hidden" width="560" height="315"
            src="https://www.youtube.com/embed/mgvIq74DUzo?autoplay=1&loop=1&si=8xgwn2uzbIw0zYlb"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        <!-- Content below the image -->
        <div id="content"
            class="flex flex-col justify-center items-center w-full pb-8 mt-4 transition-all duration-300">
            <div class="flex flex-col justify-center items-center w-full md:w-1/2 mb-4 md:mb-8">
                <span class="font-sans font-normal text-slate-950 text-xs/7 uppercase tracking-wider">Majlis
                    Perkahwinan</span>
                <span class="font-sans font-bold text-slate-950 text-lg/7 md:text-2xl/7 uppercase tracking-wider">Nazmi
                    &amp;
                    Anasuha</span>
                <span class="font-sans font-normal text-slate-950 text-xs/7 uppercase tracking-wider">Sabtu | 3
                    Zulhijjah
                    1446H</span>
            </div>
            <div class="flex flex-col justify-center items-center w-full md:w-1/2 mb-4 md:mb-8">
                <img src="{{ asset('logo.png') }}" alt="logo" class="w-[250px]">
            </div>
            <div class="flex flex-col justify-center items-center w-full md:w-1/2 mb-4 md:mb-8">
                <span class="font-sans font-normal text-slate-950 text-xs/7 capitalize tracking-wider">Rumah Abang
                    Jamil 2,
                    Senawang</span>
                <span class="font-sans font-bold text-slate-950 text-lg/7 md:text-2xl/7 uppercase tracking-wider">31 Mei
                    2025</span>
                <span class="font-sans font-normal text-slate-950 text-xs/7 tracking-wider">#foreverANalways</span>
            </div>
            <div class="flex flex-col justify-center items-center w-full md:w-1/2 mb-4 md:mb-8">
                <a href="{{ route('rsvp') }}"
                    class="bg-[#7A3E3E] text-orange-100 px-4 py-2 rounded-full hover:bg-[#915353]">Buka</a>
            </div>
        </div>
    </div>

    {{-- <script>
        setTimeout(() => {
            const el = document.getElementById('directionImage');
            const content = document.getElementById('content');
            el.classList.remove('hidden', 'opacity-0');
            el.classList.add('animate__slideInUp');
            content.classList.add('mt-16'); // Moves content up when image shows
        }, 2000);

        setTimeout(() => {
            const el = document.getElementById('directionImage');
            const content = document.getElementById('content');
            el.classList.remove('animate__slideInUp');
            el.classList.add('animate__slideOutDown');
            content.classList.remove('mt-16'); // Moves content back down when image hides
            setTimeout(() => {
                el.classList.add('hidden', 'opacity-0'); // Hide again after animation
            }, 500); // Adjust to match the duration of slideOutDown animation
        }, 5000); // Hide after 2 seconds of showing
    </script> --}}
</x-public-layout>
