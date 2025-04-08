<x-public-layout>
    <div class="flex flex-col justify-center items-center w-full md:w-1/2 mx-auto">
        <span class="font-sans font-bold text-md text-center text-slate-950 mb-3">RSVP</span>
        <div class="flex flex-col w-full px-2 md:px-0">
            <form class="flex flex-col w-full" action="{{ route('rsvp.store') }}" method="POST" id="rsvp-form">
                @method('post')
                @csrf
                <div class="flex flex-col justify-start items-center mb-3 w-full">
                    <span class="flex font-sans font-medium text-sm text-start w-full ml-3 pb-1.5">Nama</span>
                    <input class="flex rounded-full border-0 w-full bg-slate-100" type="text" name="name"
                        id="name">
                </div>
                <div class="flex flex-col justify-start items-center mb-3 w-full">
                    <span class="flex font-sans font-medium text-sm text-start w-full ml-3 pb-1.5">Pax</span>
                    <select class="flex rounded-full border-0 w-full bg-slate-100" type="text" name="pax"
                        id="pax">
                        @for ($i = 0; $i <= 10; $i++)
                            <option value="{{ $i }}">{{ $i }}
                            </option>
                        @endfor
                    </select>
                </div>
                <div class="flex flex-col justify-start items-start mb-3 w-full">
                    <span class="flex font-sans font-medium text-sm text-start w-full ml-3 pb-1.5">Hadir?</span>
                    <div class="flex flex-row justify-center items-center ml-2 mb-3">
                        <input type="radio" name="is_attend" id="is_attend" class="bg-slate-100" value="1">
                        <span class="font-sans font-normal text-sm text-start w-full ml-2">Yup 😆</span>
                    </div>
                    <div class="flex flex-row justify-center items-center ml-2 mb-3">
                        <input type="radio" name="is_attend" id="is_attend" class="bg-slate-100" value="0">
                        <span class="font-sans font-normal text-sm text-start w-full ml-2">Maaf ☹️😟</span>
                    </div>
                </div>

                <div class="flex flex-col justify-start items-start mb-3 w-full">
                    <span class="flex font-sans font-medium text-sm text-start w-full ml-3 pb-1.5">Slot Masa</span>
                    @foreach ($slots as $key => $s)
                        <div class="flex flex-row justify-center items-center ml-2 mb-3">
                            <input type="radio" name="time_slot" id="time_slot" class="bg-slate-100"
                                value="{{ $s->id }}">
                            <span
                                class="font-sans font-normal text-sm text-start w-full ml-2">{{ $s->time_slot }}</span>
                        </div>
                    @endforeach
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
                    <span class="font-sans font-medium text-xs text-slate-950" id="thank-you">Terima kasih daun keladi,
                        jumpa
                        nanti!</span>
                    {{-- <a href="" class="font-sans font-normal text-xs text-slate-950 italic hover:font-medium">Klik
                        sini untuk salam
                        kaut
                        online 💰</a> --}}
                </div>
            </form>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('rsvp-form');
            const thankYou = document.getElementById('thank-you');

            thankYou.classList.add('hidden'); // hide by default

            form.addEventListener('submit', async function(e) {
                e.preventDefault();

                const formData = new FormData(form);

                const response = await fetch(form.action, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
                        'Accept': 'application/json'
                    },
                    body: formData
                });

                if (response.ok) {
                    form.reset();
                    thankYou.classList.remove('hidden');
                } else {
                    const data = await response.json();
                    alert('Ada masalah: ' + (data.message || 'Sila semak borang anda.'));
                }
            });
        });
    </script>

</x-public-layout>
