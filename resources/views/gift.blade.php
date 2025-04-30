<x-public-layout>
    <div class="flex flex-col justify-center items-center px-4 mx-auto w-full pb-8">
        <span class="font-sans font-bold text-md text-center text-slate-950 mb-1.5">Salam Kaut</span>

        <div class="flex flex-col justify-center items-center">

            <img src="{{ asset('hlbimg.png') }}" alt="" class="w-2/3 md:w-1/3 mb-2">

            <img src="{{ asset('qr2.png') }}" alt="QR" class="w-auto md:w-1/3 mb-2">

            <div class="flex flex-col justify-center items-start">
                <span class="font-normal text-sm text-slate-950 pb-0.5">Siti Anasuha Binti Rosli</span>
                <div class="flex justify-center items-start">
                    <span id="number" class="font-normal text-sm text-slate-950 pb-1.5">01101073203</span>
                    <button onclick="copyNumber()"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            class="w-6 h-6 text-slate-950 pl-1.5 pb-1.5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 17.25v3.375c0 .621-.504 1.125-1.125 1.125h-9.75a1.125 1.125 0 0 1-1.125-1.125V7.875c0-.621.504-1.125 1.125-1.125H6.75a9.06 9.06 0 0 1 1.5.124m7.5 10.376h3.375c.621 0 1.125-.504 1.125-1.125V11.25c0-4.46-3.243-8.161-7.5-8.876a9.06 9.06 0 0 0-1.5-.124H9.375c-.621 0-1.125.504-1.125 1.125v3.5m7.5 10.375H9.375a1.125 1.125 0 0 1-1.125-1.125v-9.25m12 6.625v-1.875a3.375 3.375 0 0 0-3.375-3.375h-1.5a1.125 1.125 0 0 1-1.125-1.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H9.75" />
                        </svg>
                    </button>
                </div>
            </div>

            <span class="font-sans font-bold italic text-md text-center text-slate-950 mt-2 mb-1.5">Wishlist</span>

            <div class="flex flex-col w-full max-w-sm mt-3">

                @foreach ($gifts as $key => $g)
                    <div class="w-full bg-white p-2 rounded-md mb-3">
                        <ol class="w-full list-decimal list-inside space-y-2">
                            <li class="flex justify-between items-center w-full">
                                <span class="font-sans font-normal text-sm">{{ $loop->iteration }}.
                                    {{ $g->title }}</span>
                                <a href="{{ $g->item_url }}" target="_blank"
                                    class="font-sans font-normal text-xs ml-2 px-3 py-1.5 rounded-full text-orange-100 bg-[#9e5353] hover:bg-[#915353]">Lihat</a>
                            </li>
                        </ol>
                    </div>
                @endforeach
            </div>

            {{-- <a href="{{ route('toyyib.createBill') }}"
                class="w-auto mx-2 font-normal text-xs bg-[#dbc5a9] rounded-md p-2">Salam kaut online</a>
            <div class="flex-col w-full max-w-sm font-sans font-normal text-xs md:text-sm text-slate-950 italic px-4 py-2 rounded-md mb-3 hidden opacity-0 animate__fadeIn transition-all duration-300"
                id="nota_kaki">
                <span class="font-semibold">Nota kaki:</span>
                <span class="text-center">Salam kaut digital! Ikut ikhlas masing-masing. Kalau ada rezeki,
                    Alhamdulillah. Bayar online je, mudah! Terima kasih dan doakan yang baik-baik 💖</span>
            </div> 
             --}}
        </div>
    </div>
    <script>
        function copyNumber() {
            var number = document.getElementById("number").innerText;
            navigator.clipboard.writeText(number);
        }
    </script>
</x-public-layout>
