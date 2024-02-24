<x-layout>
    <!-- Registration Form -->
    <main class="bg-[#F7F7F7] p-12 h-[calc(100vh-231px)]">
        <h1 class="text-2xl text-center font-medium mb-8 text-gray-500">Login</h1>
        <form action="/login" method="post">
            @csrf
            <div class="container mx-auto">
                <div class="p-8 bg-white rounded-lg max-w-[480px] mx-auto">
                    <label class="font-medium my-2 block" for="email">Email <span class="text-red-600">*</span></label>
                    <div>
                        <input class="w-full bg-[#F7F7F7] border border-gray-200 p-1 focus:outline-red-300"
                            type="email" id="email" name="email" value="{{ old('email') }}" />
                        @error('email')
                            <x-error-form>{{ $message }}</x-error-form>
                        @enderror
                    </div>
                    <label class="font-medium my-2 block" for="password">Password <span
                            class="text-red-600">*</span></label>
                    <div>
                        <input class="w-full bg-[#F7F7F7] border border-gray-200 p-1 focus:outline-red-300"
                            type="password" id="password" name="password" value="" />
                        @error('password')
                            <x-error-form>{{ $message }}</x-error-form>
                        @enderror
                    </div>
                    <button type="submit"
                        class="mt-4 bg-red-400 text-white p-2 border border-red-400 duration-300 hover:bg-red-500 block w-full">Sign
                        In</button>
                    <p class="text-center text-sm my-2">Need an account? <a class="text-red-400"
                            href="/register">Register
                            here</a></p>
                </div>
            </div>
        </form>
    </main>
</x-layout>
