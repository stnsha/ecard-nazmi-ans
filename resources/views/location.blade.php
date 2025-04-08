<x-public-layout>
    <div class="flex flex-col justify-center items-center px-4 mx-auto w-full pb-8">
        <span class="font-sans font-bold text-md text-center text-slate-950 mb-3">Lokasi</span>
        <div class="flex justify-center items-center mx-auto w-full max-w-lg px-3 mb-3 z-10">
            <iframe class="w-full h-[150px] md:h-[250px] rounded-xl"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127532.44072797897!2d101.85638447993443!3d2.7001068117092553!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cde709176e8e95%3A0x9616d6a8cc5bea0d!2sRumah%20Abang%20Jamil%202%20SEREMBAN!5e0!3m2!1sen!2smy!4v1739720390202!5m2!1sen!2smy"
                style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div
            class="flex flex-col w-full md:w-1/2 mx-auto divide-y-2 divide-gray-200 -mt-8 bg-white px-4 sm:px-2 rounded-lg shadow-md inset-shadow-md">
            <div class="flex flex-col w-full pt-8 mb-3">
                <span class="font-sans font-medium text-xs md:text-sm mb-1.5">Alamat Penuh</span>
                <div class="flex w-full justify-between">
                    <span class="font-sans font-normal text-[10px] md:text-xs text-gray-700 text-wrap w-1/2">
                        Lot 61395, Lorong Rashidah Utama 2/2, Taman Rashidah Utama, 70450 Seremban, Negeri Sembilan.
                    </span>
                    <div class="flex flex-col md:flex-row">
                        <a href="https://maps.app.goo.gl/W5JUGXBbPfEymHBb9"><img src="{{ asset('gmaps.png') }}"
                                alt="maps" class="w-6 mr-2 mb-1.5"></a>
                        <a href="https://waze.com/ul/hw22x2s00f"><img src="{{ asset('waze.png') }}" alt="waze"
                                class="w-6 mr-2 mb-1.5"></a>
                    </div>
                </div>
            </div>
            <div class="flex flex-col pt-3 mb-3">
                <span class="font-sans font-medium text-xs md:text-sm mb-1.5">Hubungi</span>
                <div class="flex flex-row justify-between items-start w-full">
                    <div class="flex flex-col w-full mb-2 md:mb-3">
                        <span class="font-sans font-medium text-[10px] md:text-xs text-gray-800 text-wrap">Rosli Bin Abd
                            Rani</span>
                        <span class="font-sans font-normal text-[10px] md:text-xs text-gray-700 text-wrap italic">Bapa
                            pengantin
                            perempuan</span>
                        {{-- <span class="font-sans font-normal text-[10px] text-gray-700 text-wrap">+60 11-7111 7371</span> --}}
                    </div>
                    <a href="https://api.whatsapp.com/send?phone=601171117371" target="_blank">
                        <img src="{{ asset('WhatsApp.svg') }}" alt="WhatsApp" class="w-7 mr-2 mb-1.5">
                    </a>
                </div>
                <div class="flex flex-row justify-between items-start w-full">
                    <div class="flex flex-col w-full mb-2 md:mb-3">
                        <span class="font-sans font-medium text-[10px] md:text-xs text-gray-800 text-wrap">Muhammad
                            Aminuddin Bin
                            Rosli</span>
                        <span class="font-sans font-normal text-[10px] md:text-xs text-gray-700 text-wrap italic">Abang
                            pengantin
                            perempuan</span>
                        {{-- <span class="font-sans font-normal text-[10px] text-gray-700 text-wrap">+60 11-7111 7371</span> --}}
                    </div>
                    <a href="https://api.whatsapp.com/send?phone=60176363057" target="_blank">
                        <img src="{{ asset('WhatsApp.svg') }}" alt="WhatsApp" class="w-7 mr-2 mb-1.5">
                    </a>
                </div>
            </div>
        </div>

        {{-- <div class="flex flex-col justify-center items-start mx-auto w-full mb-3 bg-white">
            <span class="font-sans font-medium text-xs capitalize pb-3">Rumah Abang Jamil (Venue 2)</span>
            <span class="font-sans font-normal text-xs text-wrap pb-3 w-1/2">
                Lot 61395, Lorong Rashidah Utama 2/2, Taman Rashidah Utama, 70450 Seremban, Negeri Sembilan
            </span>
            <div class="flex flex-col">
                <a href="https://maps.app.goo.gl/W5JUGXBbPfEymHBb9"><img src="{{ asset('gmaps.png') }}" alt="maps"
                        class="w-7 mr-2"></a>
                <a href="https://waze.com/ul/hw22x2s00f"><img src="{{ asset('waze.png') }}" alt="waze"
                        class="w-7 mr-2"></a>
            </div>
        </div>
        <div class="flex flex-col justify-center items-start ml-20 w-full">
            <span class="font-sans font-medium text-sm text-slate-950 mb-3">Hubungi Kami</span>
            <div class="flex flex-col">
                <span class="font-sans font-medium text-xs text-slate-950">Rosli (Bapa pengantin perempuan)</span>
                <span class="font-sans font-normal text-xs text-slate-950">+60 11-7111 7371</span>
            </div>

            <div class="flex flex-col">
                <span class="font-sans font-medium text-xs text-slate-950">Amin (Abang pengantin perempuan)</span>
                <span class="font-sans font-normal text-xs text-slate-950">+60 17-636 3057</span>
            </div>
        </div> --}}
    </div>
</x-public-layout>
