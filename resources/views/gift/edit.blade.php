<x-app-layout>
    <div class="flex flex-col w-full bg-white border border-gray-50 rounded-lg shadow-sm px-4 pb-4 pt-8">
        <span class="font-bold text-md text-slate-900 mb-2">New item</span>
        <form action="{{ route('gift.update', $gift) }}" method="post">
            @csrf
            @method('put')
            <div class="flex flex-row justify-between items-center w-full mb-3">
                <span class="font-normal text-sm w-1/4">Title</span>
                <input class="border-gray-50 bg-[#f2f8fc] rounded-md w-3/4" type="text" name="title" id="title"
                    value="{{ $gift->title }}">
            </div>
            <div class="flex flex-row justify-between items-center w-full mb-3">
                <span class="font-normal text-sm w-1/4">Picture URL</span>
                <input class="border-gray-50 bg-[#f2f8fc] rounded-md w-3/4" type="text" name="pic_url" id="pic_url"
                    value="{{ $gift->pic_url }}">
            </div>
            <div class="flex flex-row justify-between items-center w-full mb-3">
                <span class="font-normal text-sm w-1/4">Item URL</span>
                <input class="border-gray-50 bg-[#f2f8fc] rounded-md w-3/4" type="text" name="item_url"
                    id="item_url" value="{{ $gift->item_url }}">
            </div>
            <div class="flex flex-row justify-between items-center w-full mb-3">
                <span class="font-normal text-sm w-1/4">Quantity</span>
                <input class="border-gray-50 bg-[#f2f8fc] rounded-md w-3/4" type="text" name="quantity"
                    id="quantity" value="{{ $gift->quantity }}">
            </div>
            <div class="flex flex-col justify-center items-center w-full mb-3">
                <input type="submit" value="Submit"
                    class="bg-[#c1554e] hover:bg-orange-800 px-2 py-1.5 rounded-lg w-fit font-normal text-sm text-white">
                <a href="{{ route('gift.index') }}" class="font-normal text-sm py-1.5 hover:text-orange-800">Back to
                    previous page</a>
            </div>
        </form>
    </div>
</x-app-layout>
