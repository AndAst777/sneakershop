@include('components.app')

<body>
    @include('components.navbar')
   @include('components.carousel')
    <div class="mt-20">
        <h1 class="mt-5 text-lg mr-20 ml-4 ">ОБУВЬ</h1>
    <div class="p-5 grid sm:grid-cols-3 grid-cols-1 gap-4 mb-4 place-items-center items-center">

        @foreach ($products as $product)
            @include('components.product_card')
        @endforeach
    </div>
    </div>
    @include('components.footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
