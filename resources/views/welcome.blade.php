<x-public-layout>
    <div class="flex flex-col justify-center items-center w-full pb-8">
        <div class="flex flex-col justify-center items-center w-full md:w-1/2 mb-4 md:mb-8">
            <span class="font-sans font-normal text-slate-950 text-xs/7 uppercase tracking-wider">Majlis
                Perkahwinan</span>
            <span class="font-sans font-bold text-slate-950 text-lg/7 md:text-2xl/7 uppercase tracking-wider">Nazmi &
                Anasuha</span>
            <span class="font-sans font-normal text-slate-950 text-xs/7 uppercase tracking-wider">Sabtu | 3 Zulhijjah
                1446H</span>
        </div>
        <div class="flex flex-col justify-center items-center w-full md:w-1/2 mb-4 md:mb-8">
            <img src="{{ asset('logo.png') }}" alt="logo" class="w-[250px]">
        </div>
        <div class="flex flex-col justify-center items-center w-full md:w-1/2 mb-4 md:mb-8">
            <span class="font-sans font-normal text-slate-950 text-xs/7 capitalize tracking-wider">Rumah Abang Jamil,
                Senawang</span>
            <span class="font-sans font-bold text-slate-950 text-lg/7 md:text-2xl/7 uppercase tracking-wider">31 Mei
                2025</span>
            <span class="font-sans font-normal text-slate-950 text-xs/7 tracking-wider">#foreverANalways</span>
        </div>
        <div class="flex flex-row justify-center items-center w-full md:w-1/2">
            <a type="button"
                class="font-sans font-normal text-sm bg-[#dbc5a9] hover:font-medium py-3 px-6 rounded-full"
                href="{{ route('rsvp.create') }}">RSVP</a>
            <a type="button"
                class="font-sans font-normal text-sm bg-[#dbc5a9] hover:font-medium py-3 px-6 rounded-full ml-2"
                href="#">Lokasi</a>
        </div>
    </div>
</x-public-layout>
