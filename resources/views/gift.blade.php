<x-public-layout>
    <div class="flex flex-col justify-center items-center px-4 mx-auto w-full pb-8">
        <span class="font-sans font-bold text-md text-center text-slate-950 mb-3">Salam Kaut</span>
        <div class="flex-col w-full max-w-sm font-sans font-normal text-xs md:text-sm text-slate-950 italic px-4 py-2 rounded-md mb-3 hidden opacity-0 animate__fadeIn transition-all duration-300"
            id="nota_kaki">
            <span class="font-semibold">Nota kaki:</span>
            <span>Salam Kaut ni, anda boleh beri atau tidak, semuanya ikhlas dari hati. Jika ada rezeki, semoga ia
                menjadi sedekah yang bermanfaat dan membawa keberkatan. Untuk kemudahan, boleh bayar terus guna FPX je,
                tak perlu scan QR. Terima kasih banyak, doakan yang baik-baik untuk
                kami! 💖</span>
        </div>
        <div id="content" class="flex flex-col justify-center items-center">
            <form action="" method="post" class="flex justify-center items-center mb-3">
                @method('post')
                @csrf
                <div class="flex justify-center items-center w-full">
                    <input type="text" name="amount" id="amount" placeholder="0"
                        class="w-1/5 mx-2 border-gray-200 rounded-md">
                    <input type="submit" value="Teruskan"
                        class="w-auto mx-2 font-normal text-sm bg-[#dbc5a9] rounded-md p-2">
                </div>
            </form>
            <span class="font-sans font-bold text-md text-center text-slate-950 mb-3">Hadiah</span>
            <div class="flex flex-col w-full max-w-sm">
                @foreach ($gifts as $key => $g)
                    <div class="flex justify-between w-full bg-white p-2 rounded-md mb-3">
                        <img src="{{ $g->pic_url }}" alt="{{ $g->id }}" class="w-1/3 md:w-1/2 mr-2">
                        <div class="flex flex-col justify-between w-full">
                            <span class="font-sans font-semibold text-sm"> {{ $g->title }}</span>
                            <div class="flex justify-start w-full">
                                <a href="{{ $g->item_url }}" target="_blank"
                                    class="font-sans font-normal text-xs mr-1.5 px-2 py-1.5 rounded-md bg-[#dbc5a9]">Lihat</a>
                                <a href="{{ $g->item_url }}" target="_blank" type="button" id="myButton"
                                    class="font-sans font-normal text-xs mr-1.5 px-2 py-1.5 rounded-md bg-[#dbc5a9]">Beli</a>
                            </div>
                        </div>
                    </div>
                @endforeach
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

        document.getElementById('myButton').addEventListener('click', function() {
            console.log('Button clicked!');
            // Add additional functionality here
        });
    </script>
</x-public-layout>
