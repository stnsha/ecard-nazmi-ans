<x-public-layout>
    <div class="flex flex-col justify-center items-center px-4 mx-auto w-full pb-8">
        <span class="font-sans font-bold text-md text-center text-slate-950 mb-3">Belikan Hadiah!</span>

        <div id="content" class="flex flex-col justify-center items-center">
            <a href="{{ route('toyyib.createBill') }}"
                class="w-auto mx-2 font-normal text-xs bg-[#dbc5a9] rounded-md p-2">Salam kaut online</a>
            <div class="flex-col w-full max-w-sm font-sans font-normal text-xs md:text-sm text-slate-950 italic px-4 py-2 rounded-md mb-3 hidden opacity-0 animate__fadeIn transition-all duration-300"
                id="nota_kaki">
                <span class="font-semibold">Nota kaki:</span>
                <span class="text-center">Salam kaut digital! Ikut ikhlas masing-masing. Kalau ada rezeki,
                    Alhamdulillah. Bayar online je, mudah! Terima kasih dan doakan yang baik-baik 💖</span>
            </div>
            <div class="flex flex-col w-full max-w-sm mt-3">
                <div class="w-full bg-white p-2 rounded-md mb-3">
                    <ol class="w-full list-decimal list-inside space-y-2">
                        @foreach ($gifts as $key => $g)
                            <li class="flex justify-between items-center w-full">
                                <span class="font-sans font-semibold text-sm">{{ $g->title }}</span>
                                <a href="{{ $g->item_url }}" target="_blank"
                                    class="font-sans font-normal text-xs ml-2 px-2 py-1.5 rounded-md bg-[#dbc5a9]">Lihat</a>
                            </li>
                        @endforeach
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <script>
        setTimeout(() => {
            const el = document.getElementById('nota_kaki');
            const content = document.getElementById('content');
            el.classList.remove('hidden', 'opacity-0');
            el.classList.add('animate__fadeIn');
            // content.classList.add('mt-1.5'); // Moves content up when nota_kaki shows
        }, 2000);
    </script>
</x-public-layout>
