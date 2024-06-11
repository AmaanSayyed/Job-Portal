<x-layout>

    <h1 class="my-16 text-center text-4xl font-medium text-slate-600 ">Sign In to your account</h1>
    <x-card class="py-8 px-16">
        <form action="{{route('auth.store')}}" method="POST">
            @csrf
            <div class="mb-8">
                <x-label :required="true ">E-mail</x-label>
                <x-text-input name="email"></x-text-input>
                <x-label :required="true ">Password</x-label>
                <x-text-input name="password" type="password"></x-text-input>
            </div>

            <div class="mb-8 flex justify-between text-sm font-medium">
                <div>
                    <div class="flex items-center space-x-2">
                        <input type="checkbox" class="rounded-sm border border-slate-400">
                        <label for="">Remember me</label>
                    </div>
                </div>
                <div>
                    <a href="#" class="text-indigo-600 hover:underline">
                        Forgot Password?
                    </a>
                </div>
            </div>

            <x-button class="w-full  bg-zinc-700 text-white px-1.5 py-2 rounded-md my-2 hover:bg-zinc-800">Login</x-button>
        </form>
    </x-card>
</x-layout>