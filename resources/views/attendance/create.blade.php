<x-public-layout>
    <div class="flex flex-col justify-center items-center w-full pb-8">
        <span class="font-sans font-medium text-md text-slate-950 mb-8">RSVP</span>
        <div class="flex flex-col w-full px-6">
            <form class="flex flex-col w-full" action="">
                <div class="flex flex-col md:flex-row justify-start items-center mb-3 w-full">
                    <span class="flex font-sans font-medium text-sm text-start w-full ml-6 pb-1.5">Nama</span>
                    <input class="flex rounded-full border-0 w-full" type="text" name="name" id="name">
                </div>

                <div class="flex flex-col md:flex-row justify-start items-center mb-3 w-full">
                    <span class="flex font-sans font-medium text-sm text-start w-full ml-6 pb-1.5">Pax</span>
                    <select class="flex rounded-full border-0 w-full" type="text" name="pax" id="pax">
                        @for ($i = 0; $i <= 10; $i++)
                            <option value="{{ $i }}" {{ $i == 1 ? 'selected' : '' }}>{{ $i }}
                            </option>
                        @endfor
                    </select>
                </div>

                <div class="flex flex-col md:flex-row justify-start items-start md:items-center mb-3 w-full">
                    <span class="flex font-sans font-medium text-sm text-start w-full ml-3 pb-1.5 mb-3">Hadir?</span>
                    <div class="flex flex-row justify-center items-center ml-2 mb-3">
                        <input type="radio" name="attendance" id="attendance">
                        <span class="font-sans font-normal text-sm text-start w-full ml-2">Yup 😆</span>
                    </div>

                    <div class="flex flex-row justify-center items-center ml-2 mb-3">
                        <input type="radio" name="attendance" id="attendance">
                        <span class="font-sans font-normal text-sm text-start w-full ml-2">Maaf ☹️😟</span>
                    </div>
                </div>

                <div class="flex flex-col md:flex-row justify-start items-center mb-3 w-full">
                    <span class="flex font-sans font-medium text-sm text-start w-full ml-6 pb-1.5">Ucapan untuk
                        kami</span>
                    <textarea class="flex rounded-full border-0 w-full" type="text" name="name" id="name"></textarea>
                </div>

                <div class="flex flex-col md:flex-row justify-start items-center mb-3 w-full">
                    <input type="submit" value="Hantar"
                        class="font-sans font-normal text-sm bg-[#dbc5a9] hover:font-medium py-3 px-6 rounded-full">
                </div>

                <div class="flex flex-col md:flex-row justify-start items-center mb-3 w-full">
                    <span class="font-sans font-medium text-sm text-slate-950">Terima kasih daun keladi, jumpa
                        nanti!</span>
                    <a href="" class="font-sans font-normal text-xs text-slate-950 italic hover:font-medium">Klik
                        sini untuk salam
                        kaut
                        online 💰</a>
                </div>
            </form>

        </div>
    </div>
</x-public-layout>
