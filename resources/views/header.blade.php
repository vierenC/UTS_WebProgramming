<div class="!HEADER max-w-[414px] fixed top-0 bg-[#f3f3f2] w-full drop-shadow-lg border-b min-h-[5rem] p-4 flex flex-col items-center z-[5]">
    <div class="text-left w-full font-bold">
        Stellar Brews
    </div>

    <div class="!TOP flex justify-between items-center w-full">
        <div class="">
            <div class="">
                {{$greet}}
            </div>
            <div class="">
                {{$user_name}}
            </div>
        </div>

        <div class="bold {{$loyalty == "Gold" ? "text-[#C6A961]" : "text-[#006F42]"}}">
            {{$loyalty}} Level
        </div>
    </div>
    <div class="!NAVS flex justify-between items-center w-[60%] pt-4 pb-1 ">
        <div class="profile flex gap-2 hover:bg-gray-300 p-1">
            <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                </svg>
            </div>
            <a href="{{route("home")}}" class="">Profile</a>
        </div>
        <div class="transaction flex gap-2 hover:bg-gray-300 p-1">
            <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                </svg>
            </div>
            <a href="{{route("transaction")}}" class="">Transaction</a>
        </div>
    </div>
</div>

