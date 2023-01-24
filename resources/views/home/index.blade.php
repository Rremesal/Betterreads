<x-layout>

    <div class="flex flex-col w-52 items-center border-2 shadow-lg">
        <span class="font-semibold">{{ Auth::user()->first_name." ".Auth::user()->last_name }}</span>
        <a class="text-blue-400 hover:underline w-full" href="">Profile</a>
        <a class="text-blue-400 hover:underline w-full" href="">Comments</a>
        <a class="text-blue-400 hover:underline w-full" href="">Account settings</a>
        <a class="text-blue-400 hover:underline border-t-2 w-full" href="">Log out</a>
    </div>

</x-layout>