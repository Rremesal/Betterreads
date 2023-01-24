<nav class=" bg-yellow-100 flex justify-center p-3 overflow-y-hidden ">
    <div class="w-62 flex items-center h-7">
        <a class=" py-24 px-5 mx-2 text-amber-900 hover:text-yellow-100 hover:bg-amber-900" href="{{ route('home') }}">Home</a>
        <a class=" py-24 px-5 mx-2 text-amber-900 hover:text-yellow-100 hover:bg-amber-900" href="">My Books</a>
        <a class="py-24 px-5 mx-2 text-amber-900 hover:text-yellow-100 hover:bg-amber-900" href="">Browse</a>
        <form class="mx-2" action=""><input class="px-2" type="text" placeholder="Search.."></form>
        <a class="py-24 px-5 mx-2 text-amber-900 hover:text-yellow-100 hover:bg-amber-900" id="profile" onclick="toggleMenu()">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
              </svg>              
        </a>
    </div>
    
</nav>