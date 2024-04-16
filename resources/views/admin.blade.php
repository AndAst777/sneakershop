@include('components.app')

<body>
    @include('components.navbar')
    <div>
        <div class="mt-20 p-5">
            @include('components.product_create_button')
            @include('components.product_table')
        </div>
        <div class="mt-20">
            {{-- @include('components.post_create_button') --}}
            {{-- @include('components.post_table') --}}
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
