<x-public-layout>
    <div class="flex flex-col justify-center items-center mx-auto w-full pb-8">
        <span class="font-sans font-medium text-md text-slate-950 mb-3">Lokasi</span>
        <div class="flex flex-row justify-center items-center mx-auto w-full mb-3">
            <iframe class="rounded-2xl"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127532.44072797897!2d101.85638447993443!3d2.7001068117092553!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cde709176e8e95%3A0x9616d6a8cc5bea0d!2sRumah%20Abang%20Jamil%202%20SEREMBAN!5e0!3m2!1sen!2smy!4v1739720390202!5m2!1sen!2smy"
                width="auto" height="150" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="flex flex-col w-full divide-y-4 divide-y-reverse divide-gray-200">
            <div class="flex flex-col w-full">
                <span class="font-sans font-medium text-sm">Alamat Penuh</span>
                <div class="flex w-full justify-between">
                    <span class="font-sans font-normal text-xs text-wrap pb-3 w-1/2">
                        Lot 61395, Lorong Rashidah Utama 2/2, Taman Rashidah Utama, 70450 Seremban, Negeri Sembilan
                    </span>
                    <div class="flex flex-col">
                        <a href="https://maps.app.goo.gl/W5JUGXBbPfEymHBb9"><img src="{{ asset('gmaps.png') }}"
                                alt="maps" class="w-7 mr-2 mb-1.5"></a>
                        <a href="https://waze.com/ul/hw22x2s00f"><img src="{{ asset('waze.png') }}" alt="waze"
                                class="w-7 mr-2 mb-1.5"></a>
                    </div>
                </div>
            </div>
            <div class="flex flex-col">
                <span class="font-sans font-medium text-sm">Alamat Penuh</span>
                <div class="flex w-full justify-between">
                    <span class="font-sans font-normal text-xs text-wrap pb-3 w-1/2">
                        Lot 61395, Lorong Rashidah Utama 2/2, Taman Rashidah Utama, 70450 Seremban, Negeri Sembilan
                    </span>
                    <div class="flex flex-col">
                        <a href="https://maps.app.goo.gl/W5JUGXBbPfEymHBb9"><img src="{{ asset('gmaps.png') }}"
                                alt="maps" class="w-7 mr-2 mb-1.5"></a>
                        <a href="https://waze.com/ul/hw22x2s00f"><img src="{{ asset('waze.png') }}" alt="waze"
                                class="w-7 mr-2 mb-1.5"></a>
                    </div>
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
