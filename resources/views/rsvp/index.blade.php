<x-app-layout>
    <div class="flex flex-col w-full bg-white border border-gray-50 rounded-lg shadow-sm px-4 pb-4 pt-8">
        <span class="font-bold text-md text-slate-900 mb-2">RSVP</span>
        @if (session('success'))
            <div class="bg-green-100 text-green-800 text-sm font-medium p-2 rounded-md w-fit mb-2">
                {{ session('success') }}
            </div>
        @endif
        <div class="relative overflow-x-auto rounded-md mt-2">
            <table class="w-full text-sm text-left rtl:text-right text-slate-900">
                <thead class="text-xs text-slate-900 uppercase bg-gray-200">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            # </th>
                        <th scope="col" class="px-6 py-3">
                            name
                        </th>
                        {{-- <th scope="col" class="px-6 py-3">
                            Image URL
                        </th> --}}
                        <th scope="col" class="px-6 py-3">
                            is_attend
                        </th>
                        <th scope="col" class="px-6 py-3">
                            time_slot
                        </th>
                        <th scope="col" class="px-6 py-3">
                            wishes
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody class="text-xs text-slate-900 uppercase bg-gray-50">
                    @foreach ($rsvps as $key => $rsvp)
                        <tr>
                            <td class="px-6 py-3">{{ $loop->iteration }}.</td>
                            <td class="px-6 py-3">{{ $rsvp->name }}</td>
                            {{-- <td>{{ $rsvp->pic_url }}</td> --}}
                            <td>{{ $rsvp->is_attend }}</td>
                            <td class="px-6 py-3 text-center">{{ $rsvp->time_slot }}</td>
                            <td class="px-6 py-3">{{ $rsvp->wishes }}</td>
                            <td><a href="{{ route('rsvp.edit', $rsvp) }}"
                                    class="text-[#c1554e] hover:text-orange-800 px-6 py-3">Edit</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</x-app-layout>
