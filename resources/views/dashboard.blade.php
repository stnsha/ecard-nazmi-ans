<x-app-layout>
    <div class="grid grid-cols-3 gap-4 w-full">
        <div class="flex flex-col bg-white border border-gray-50 rounded-lg shadow-sm p-4">
            <div class="bg-[#dbc5a9] p-2 w-fit rounded-full mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6 text-white">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                </svg>
            </div>
            <span class="font-bold text-md text-slate-900 mb-2">Total RSVP</span>
            <div class="flex flex-col mb-3">
                <div class="flex justify-between">
                    <span class="font-normal text-sm">Confirmed</span>
                    <span class="font-medium text-sm">150</span>
                </div>
                <div class="flex justify-between">
                    <span class="font-normal text-sm">Not Confirmed</span>
                    <span class="font-medium text-sm">14</span>
                </div>
            </div>
            <a href="" class="font-normal text-sm text-[#c1554e] hover:text-orange-800">View</a>
        </div>
        <div class="flex flex-col bg-white border border-gray-50 rounded-lg shadow-sm p-4">
            <div class="bg-[#dbc5a9] p-2 w-fit rounded-full mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6 text-white">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15.362 5.214A8.252 8.252 0 0 1 12 21 8.25 8.25 0 0 1 6.038 7.047 8.287 8.287 0 0 0 9 9.601a8.983 8.983 0 0 1 3.361-6.867 8.21 8.21 0 0 0 3 2.48Z" />
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 18a3.75 3.75 0 0 0 .495-7.468 5.99 5.99 0 0 0-1.925 3.547 5.975 5.975 0 0 1-2.133-1.001A3.75 3.75 0 0 0 12 18Z" />
                </svg>
            </div>
            <span class="font-bold text-md text-slate-900 mb-2">Countdown</span>
            <div class="flex flex-col mb-3">
                <div class="flex justify-between">
                    <span class="font-normal text-sm">Solemnization</span>
                    <span class="font-medium text-sm">89 days</span>
                </div>
                <div class="flex justify-between">
                    <span class="font-normal text-sm">Reception</span>
                    <span class="font-medium text-sm">90 days</span>
                </div>
            </div>
        </div>
        <div class="flex flex-col row-span-2 bg-white border border-gray-50 rounded-lg shadow-sm p-4">
            <div class="bg-[#dbc5a9] p-2 w-fit rounded-full mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6 text-white">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                </svg>

            </div>
            <span class="font-bold text-md text-slate-900 mb-2">Wishes</span>
        </div>
        <div class="flex flex-col w-full col-span-2 bg-white border border-gray-50 rounded-lg shadow-sm p-4">
            <div class="flex w-full justify-between items-center">
                <span class="font-bold text-md text-slate-900 mb-2">Wedding Gift & Salam Kaut</span>
                <a href="" type="button"
                    class="bg-[#c1554e] hover:bg-orange-800 px-2 py-1.5 rounded-lg w-fit font-normal text-sm text-white">Add
                    new item</a>
            </div>
        </div>
        {{-- <div class="bg-white border border-gray-50 rounded-lg shadow-sm p-4">05</div>
        <div class="bg-white border border-gray-50 rounded-lg shadow-sm p-4">06</div>
        <div class="col-span-2 bg-white border border-gray-50 rounded-lg shadow-sm p-4">07</div> --}}
    </div>

</x-app-layout>
