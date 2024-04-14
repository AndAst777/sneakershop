@include('components.app')

<body>
    @include('components.navbar')
    <div class="grid sm:grid-cols-3 grid-cols-1 gap-4 mb-4 place-items-center items-center mt-20">
        @foreach ($products as $product)
            @include('components.product_card')
        @endforeach
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
