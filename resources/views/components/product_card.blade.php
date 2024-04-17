{{-- <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <a href="{{ route('product', $product->id) }}">
        <img class="rounded-t-lg w-13" src="{{ asset('/storage/' . $product->image) }}" alt="" />
    </a>
    <div class="p-5">
        <a href="#">
            <h5 class="text-center mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $product->title }}</h5>
        </a>
        <p class="text-center mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $product->price . '$' }}</p> --}}
        {{-- <a href="#"
            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Read more
            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 5h12m0 0L9 1m4 4L9 9" />
            </svg> --}}
        {{-- </a>
    </div>
</div> --}}


<div class="w-full place-items-center items-center max-w-sm bg-white border border-gray-200 shadow dark:bg-gray-800 dark:border-gray-700">
    <a href="{{ route('product', $product->id) }}">
        <img class="p-8 " src="{{asset('/storage/' . $product->image)}}" alt="product image" />
    </a>
    <div class="px-5 pb-5">
        <a href="#">
            <h5 class="text-xl text-center font-semibold tracking-tight text-gray-900 dark:text-white">{{$product->title}}</h5>
        </a>

        <div class=" mt-2.5 mb-5">
            <div class="flex items-center space-x-1 rtl:space-x-reverse">
                <span class="text-md font-bold text-gray-900 dark:text-white">{{$product->price . '₽'}}</span>
            </div>

        </div>
        <div class="flex items-center justify-between">

            <button type="button" class="text-white      bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Добавить в корзину</button>
        </div>
    </div>
</div>

