@if (session()->has('success'))
    <div x-data="{ show: true }" x-init="setTimeout(() => { show = false }, 3000)" x-show="show"
        class="fixed top-[7%] right-2 text-green-600 border border-green-600 bg-white text-sm px-20 py-2 rounded-lg shadow">
        <p>
            <i class="fa-solid fa-check text-green-600"></i> {{ session('success') }}
        </p>
    </div>
@endif
