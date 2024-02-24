<x-layout>
    <!-- Registration Form -->
    <main class="bg-[#F7F7F7] p-12 h-[calc(100vh-231px)]">
        <h1 class="text-2xl text-center font-medium mb-8 text-gray-500">Register</h1>
        <form action="/users" method="post">
            @csrf
            <div class="container mx-auto">
                <div class="p-8 bg-white rounded-lg max-w-[480px] mx-auto">
                    <label class="font-medium my-2 block" for="name">Full name <span
                            class="text-red-600">*</span></label>
                    <div>
                        <input class="w-full bg-[#F7F7F7] border border-gray-200 p-1 focus:outline-red-300"
                            type="text" id="name" name="name" value="{{ old('name') }}" />
                        @error('name')
                            <x-error-form>{{ $message }}</x-error-form>
                        @enderror
                    </div>
                    <label class="font-medium my-2 block" for="username">Username <span
                            class="text-red-600">*</span></label>
                    <div>
                        <input class="w-full bg-[#F7F7F7] border border-gray-200 p-1 focus:outline-red-300"
                            type="text" id="username" name="username" value="{{ old('username') }}" />
                        @error('username')
                            <x-error-form>{{ $message }}</x-error-form>
                        @enderror
                    </div>
                    <label class="font-medium my-2 block" for="email">Email <span
                            class="text-red-600">*</span></label>
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
                    <label class="font-medium my-2 block" for="password_confirmation">Confirm Password <span
                            class="text-red-600">*</span></label>
                    <div>
                        <input class="w-full bg-[#F7F7F7] border border-gray-200 p-1 focus:outline-red-300"
                            type="password" id="password_confirmation" name="password_confirmation" value="" />
                        @error('password_confirmation')
                            <x-error-form>{{ $message }}</x-error-form>
                        @enderror
                    </div>
                    <div class="text-center mt-4 mb-2">
                        <input class="focus:outline-red-300" type="checkbox" id="user-check" name="user-check"
                            value="" />
                        <label class="font-medium text-sm" for="user-check">I agree with the <a class="text-red-400"
                                href="#">term of service</a></label>
                    </div>
                    <button type="submit"
                        class="bg-red-400 text-white p-2 border border-red-400 duration-300 hover:bg-red-500 block w-full">Sign
                        Up</button>
                    <p class="text-center text-sm my-2">Already a memeber? <a class="text-red-400" href="/login">Login
                            here</a></p>
                </div>
            </div>
        </form>
    </main>
</x-layout>
