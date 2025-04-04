<x-app-layout>
    <div class="flex flex-col w-full bg-white border border-gray-50 rounded-lg shadow-sm px-4 pb-4 pt-8">
        <span class="font-bold text-md text-slate-900 mb-2">Wedding Gift & Salam Kaut</span>
        <a href="{{ route('gift.create') }}" type="button"
            class="bg-[#c1554e] hover:bg-orange-800 px-2 py-1.5 rounded-lg w-fit font-normal text-xs text-white cursor-pointer mb-2">Add
            new item</a>
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
                            Product name
                        </th>
                        {{-- <th scope="col" class="px-6 py-3">
                            Image URL
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Item Link
                        </th> --}}
                        <th scope="col" class="px-6 py-3">
                            Quantity
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Status
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody class="text-xs text-slate-900 uppercase bg-gray-50">
                    @foreach ($gifts as $key => $g)
                        <tr>
                            <td class="px-6 py-3">{{ $loop->iteration }}.</td>
                            <td class="px-6 py-3">{{ $g->title }}</td>
                            {{-- <td>{{ $g->pic_url }}</td>
                            <td>{{ $g->item_url }}</td> --}}
                            <td class="px-6 py-3 text-center">{{ $g->quantity }}</td>
                            <td class="px-6 py-3">{{ $g->is_reserved == true ? 'Reserved' : 'Available' }}</td>
                            <td><a href="{{ route('gift.edit', $g) }}"
                                    class="text-[#c1554e] hover:text-orange-800 px-6 py-3">Edit</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</x-app-layout>
