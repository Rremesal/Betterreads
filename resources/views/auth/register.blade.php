<x-simplelayout>
    <div class="flex flex-col items-center h-screen">
        <div class=" h-20 text-4xl mt-3">
            <span><b>Better</b>reads</span>
        </div>

        @if ($errors->any())
            <div class=" bg-red-300 p-2 rounded-md">
                @foreach ($errors->all() as $error)
                <li class="italic">{{ $error }}</li> 
                @endforeach
            </div> 
        @endif
        

        <h1 class="font-semibold text-4xl font-serif">Create Account</h1>
        <form action="" method="POST">
            @csrf
            <div>
                <div>
                    <label for="firstName">First name</label>
                    <div><input class="border-2 border-slate-500 bg-slate-100 rounded-full px-2 py-1 w-full " type="text" name="first_name" id="firstName" value="{{ old('first_name') }}"/></div>
                </div>
                <div>
                    <label for="lastName">Last name</label>
                    <div><input class="border-2 border-slate-500 bg-slate-100  rounded-full px-2 py-1 w-full" type="text" name="last_name" id="lastName" value="{{ old('last_name') }}"/></div>
                </div>
                <div>
                    <label for="email">Email</label>
                    <div><input class="border-2 border-slate-500 bg-slate-100  rounded-full px-2 py-1 w-full" type="email" name="email" id="email" value="{{ old('email') }}"></div>
                </div>
                <div>
                    <label for="password">Password</label>
                    <div><input class="border-2 border-slate-500 bg-slate-100  rounded-full px-2 py-1 w-full" type="password" name="password" id="password"/></div>
                </div>
                <div class="flex">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a.75.75 0 000 1.5h.253a.25.25 0 01.244.304l-.459 2.066A1.75 1.75 0 0010.747 15H11a.75.75 0 000-1.5h-.253a.25.25 0 01-.244-.304l.459-2.066A1.75 1.75 0 009.253 9H9z" clip-rule="evenodd" />
                      </svg>
                      <div class="text-sm text-gray-500">Passwords must be at least 6 characters.</div>
                </div>
                <div>
                    <label for="password_confirm">Re-enter password</label>
                    <div><input class="border-2 border-slate-500 bg-slate-100 rounded-full px-2 py-1 w-full" type="password" name="password_confirm" id="password_confirm"/></div>
                </div>
                <div><button class="bg-black my-4 text-white font-semibold rounded-full w-full px-2 py-2" type="submit">Create account</button></div>

                <div class="w-72 text-sm mb-3">By creating an account, you agree to the Betterreads <a class="text-blue-400 hover:underline" href="">Terms of Service</a> and <a class="text-blue-400 hover:underline" href="">Privacy Policy</a></div>

                <div>Already have an account? <a class="text-blue-400 hover:underline" href="{{ route('login') }}">Sign in</a></div>
            </div>
        </form>
    </div>

</x-simplelayout>