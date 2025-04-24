<div class="w-64 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
    <a href="#">
        <img class="rounded-t-lg w-full h-36 object-cover" src="{{ $imgsrc }}" alt="">
    </a>
    <div class="p-4">
        <a href="#">
            <h5 class="mb-2 text-lg font-semibold tracking-tight text-gray-900 dark:text-white">{{ $title }}</h5>
        </a>
        <p class="mb-3 text-sm text-gray-700 dark:text-gray-400">{{ $desc }}</p>
        <a href="#" class="inline-flex items-center px-2.5 py-1.5 text-xs font-medium text-white bg-blue-700 rounded hover:bg-blue-800 focus:ring-2 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Baca Selengkapnya
            <svg class="rtl:rotate-180 w-3 h-3 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
        </a>
    </div>
</div>
