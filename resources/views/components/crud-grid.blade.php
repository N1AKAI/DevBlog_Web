<x-layout>
    <main class="bg-[#F7F7F7] p-12">
        {{ $slot }}
    </main>
    @section('scripts')
        <script>
            ClassicEditor
                .create(document.querySelector('#text-area'))
                .catch(error => {
                    console.error(error);
                });
        </script>
    @endsection
</x-layout>
