<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Название продукта
                </th>
                <th scope="col" class="px-6 py-3">
                    Цена
                </th>
                <th scope="col" class="px-6 py-3">
                    Изображение
                </th>
                <th scope="col" class="px-6 py-3">
                    Price
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr
                    class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $product->title }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $product->price }}
                    </td>
                    <td class="px-6 py-4">
                        <img class="w-15 h-13" src="{{ asset('/storage/' . $product->image) }}" alt="">
                    </td>
                    {{-- <td class="px-6 py-4">
                        $2999
                    </td> --}}
                    <td class="px-6 py-4">
                        @include('components.post_edit_button')
                        {{-- <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a> --}}
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
</div>
