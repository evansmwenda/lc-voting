<x-app-layout>
    <div class="filters flex space-x-6">
        <div class="w-1/3">
            <select name="category" id="category" class="w-full rounded-xl border-none px-4 py-2">
                <option value="category1">Category 1</option>
                <option value="category2">Category 2</option>
                <option value="category3">Category 3</option>
            </select>
        </div>
        <div class="w-1/3">
            <select name="other_filters" id="other_filters" class="w-full rounded-xl border-none px-4 py-2">
                <option value="filter1">Filter 1</option>
                <option value="filter2">Filter 2</option>
                <option value="filter3">Filter 3</option>
            </select>
        </div>
        <div class="w-2/3 relative">
            
            <input type="search" placeholder="Find an idea" 
            class="w-full rounded-xl bg-white px-4 py-2 pl-8 border-none placeholder-gray-900">
            <div class="absolute top-0 flex items-center h-full ml-2">
                <svg class="w-4 text-gray-700" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                </svg>
            </div>
        </div>
    </div><!--end filters-->
    <div class="ideas-container space-y6 my-6">
        <div class="idea-container bg-white rounded-xl flex">
            <div class="border-r border-gray-1 px-5 py-5">
                <div class="text-center">
                    <div class="font-semibold text-2xl">12</div>
                    <div class="text-gray-500">Votes</div>
                    <div class="mt-8">
                        <button class="w-20 bg-gray-200 border border-gray-200 hover:border-gray-400 transition duration-150 ease-in font-bold uppercase text-xs rounded-xl px-4 py-3">Vote</button>
                    </div>
                </div>
            </div>
            <div class="flex px-3 py-4">
                <a href="">
                <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar"
                    class="w-14 h-14 rounded-xl">
                </a>
            </div>
        </div><!--end idea container-->
    </div><!--end ideas container-->
    <div>Index of Ideas</div>
</x-app-layout>
