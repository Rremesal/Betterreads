<x-simplelayout>

    <div class="flex h-screen flex-col">

    
        <div class="bg-yellow-100 h-16 text-3xl flex items-center">
            <h6 class="mx-20"><b>Better</b>reads</h6>
        </div>

        <div>
            <img class="bg-cover w-full h-72" src="{{ asset('images/banner.png') }}" alt="">
        </div>

        <div class="flex flex-row">
            <div class=" flex flex-col items-center border-2 border-gray-400 w-64 h-80 mx-52 -mt-52 p-2 bg-white rounded">
                <h2 class="text-xl font-semibold">Discover & read more</h2>
                <button class="bg-amber-900 w-4/5 mt-4  text-white px-3 py-2 rounded"><a href="{{ route('register') }}">Sign up with email</a></button>
                <span class="border-b-2 text-sm w-4/5 my-3 border-gray-200">By creating an account you agree to the Betterreads <a href="" class=" text-blue-400 hover:underline">Terms of Service</a> and <a href="" class="text-blue-400 hover:underline">Privacy Policy</a>.</span>
                <span>Already a member? <a class="text-blue-400 hover:underline" href="{{ route('login') }}">Sign in</a></span>
            </div>

            <form class="mt-20" action="">
                <h6 class="font-semibold font-serif">Search and browse Books</h6>
                <input class="w-72 px-1 border-2 rounded" type="text" name="search" id="search" placeholder="Author/Title">
            </form>
        </div>
    </div>

    


</x-simplelayout>