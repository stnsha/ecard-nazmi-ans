<x-public-layout>
    <div class="flex flex-col justify-center items-center w-full md:w-1/2 mx-auto">
        <span class="font-sans font-bold text-md text-center text-slate-950 mb-3">Garis Masa</span>
        <!--class="flex w-full bg-white rounded-lg shadow-md shadow-inset-sm px-4 py-2"-->
        <div class="flex flex-col justify-start w-full px-4 md:px-0">
            <ol class="relative border-s border-gray-300">
                <li class="flex flex-col mb-3 ms-4">
                    <div class="absolute w-3 h-3 bg-[#f17b89] rounded-full mt-1.5 -start-1.5 border"></div>
                    <div class="flex justify-between items-center w-full">
                        <div class="flex flex-col">
                            <time class="mb-1 text-[10px] font-normal leading-none text-gray-500">11:00 pagi</time>
                            <span class="font-sans font-normal text-sm text-gray-950">Majlis bermula</span>
                        </div>
                        <img src="{{ asset('start.png') }}" alt="Opening" class="w-10" />
                    </div>
                </li>
            </ol>
            <ol class="relative border-s border-gray-300">
                <li class="flex flex-col mb-3 ms-4">
                    <div class="absolute w-3 h-3 bg-[#f17b89] rounded-full mt-1.5 -start-1.5 border"></div>
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
                    <div class="absolute w-3 h-3 bg-[#f17b89] rounded-full mt-1.5 -start-1.5 border"></div>
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
                    <div class="absolute w-3 h-3 bg-[#f17b89] rounded-full mt-1.5 -start-1.5 border"></div>
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
                            <option value="{{ $i }}">{{ $i }}
                            </option>
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
                                <input type="radio" name="time_slot" class="bg-slate-100" value="{{ $s->id }}">
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
                    <span class="font-sans font-medium text-xs text-green-600" id="thank-you">Terima kasih daun
                        keladi,
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
    {{-- <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('rsvp-form');
            const thankYou = document.getElementById('thank-you');

            thankYou.classList.add('hidden'); // hide by default

            form.addEventListener('submit', async function(e) {
                e.preventDefault();

                // Clear all previous error messages
                document.querySelectorAll('.error-message').forEach(el => el.remove());

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

                    if (data.errors) {
                        Object.entries(data.errors).forEach(([field, messages]) => {
                            const input = form.querySelector(`[name="${field}"]`);
                            if (input) {
                                const errorDiv = document.createElement('div');
                                errorDiv.className = 'text-red-500 text-sm error-message';
                                errorDiv.innerText = messages[0];
                                input.parentNode.appendChild(errorDiv);
                            }
                        });
                    } else {
                        alert('Ada masalah: ' + (data.message || 'Sila semak borang anda.'));
                    }
                }
            });

        });
    </script> --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('rsvp-form');
            const thankYou = document.getElementById('thank-you');

            thankYou.classList.add('hidden');

            form.addEventListener('submit', async function(e) {
                e.preventDefault();

                // Clear all previous error messages
                document.querySelectorAll('.error-message').forEach(el => el.remove());

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
            });
        });
    </script>

</x-public-layout>
