@include('components.app')

<body>
    @include('components.navbar')

    <h1 class="mt-20 text-center">НОВОСТИ МОДЫ: КРОССОВКИ И ОДЕЖДА</h1>
    <div class="grid sm:grid-cols-3 grid-cols-1 gap-4 mb-4 place-items-center items-center mt-20">
        @foreach ($posts as $post)
            @include('components.post_card')
        @endforeach
    </div>
@include('components.footer');
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
