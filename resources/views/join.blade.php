@extends('layouts.main')

@section('container')
    <div class="p-4 flex flex-col md:flex-row md:gap-3">
        <div class="md:w-[60%] xl:w-[65%] md:shrink-0">
            <div class="border-2 shadow border-primary p-4 mb-4 bg-white rounded-xl">
                <div class="flex justify-between items-center">
                    <div class="text-sm">
                        <a href="/profile">Ilham</a>
                        <span class="text-slate-500">11-09-2022</span>
                    </div>
                    <div class="flex flex-col">
                        <i class="fa-solid fa-caret-up m-auto hover:text-primary transition"></i>
                        <span class="m-auto">1.3k</span>
                        <i class="fa-solid fa-caret-down m-auto hover:text-primary transition"></i>
                    </div>
                </div>
                <div class="mt-4">
                    <h1 class="text-2xl font-bold">Tailwind CSS Framework</h1>
                    <p class="mt-4 mb-6 text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius repellendus quia atque quidem nam quae quam saepe eligendi, cupiditate provident voluptatem, repellat minima excepturi. Eum.</p>
                </div>
                <div class="flex flex-col mobile:flex-row justify-between">
                    <div>
                        <button class="border mb-2 sm:mb-0 py-2 px-3 bg-primary rounded-lg font-medium text-white hover:opacity-90 transition text-sm border-none focus:outline-none focus:ring-primary/[.5] focus:ring-2"><i class="fa-solid fa-comment"></i> Comment</button>
                        <button class="border mb-2 sm:mb-0 py-2 px-3 bg-primary rounded-lg font-medium text-white hover:opacity-90 transition text-sm border-none focus:outline-none focus:ring-primary/[.5] focus:ring-2"><i class="fa-solid fa-share"></i> Share</button>
                    </div>
                    <div>
                        <button class="border py-2 px-3 bg-primary rounded-lg font-medium text-white hover:opacity-90 transition text-sm border-none focus:outline-none focus:ring-primary/[.5] focus:ring-2"><i class="fa-solid fa-triangle-exclamation"></i> Report</button>
                    </div>
                </div>
            </div>

            <div class="border-2 shadow border-primary p-4 mb-4 bg-white rounded-xl">
                <div class="flex items-center mb-3 gap-2">
                    <div class="w-10 h-10 rounded-full border shrink-0 border-primary"></div>
                    <div>Muhammad Azka Lufthansa</div>
                </div>
                <input type="text" placeholder="Post comment..." class="border w-full border-primary px-4 py-2 rounded-full focus:outline-0 focus:ring-2 focus:ring-primary/[.5]">
            </div>

            <div class="border-2 shadow border-primary p-4 mb-4 md:mb-0 bg-white rounded-xl">Comment</div>
        </div>

        <div class="border-2 shadow border-primary p-4 bg-white rounded-xl w-full">
            <div class="flex flex-col h-[60%] pb-4 gap-4 flex-1">
                <h1 class="font-semibold text-xl">Tailwind CSS Framework</h1>
                <div class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius repellendus quia atque quidem nam quae quam saepe eligendi, cupiditate provident voluptatem, repellat minima excepturi. Eum.</div>
                <div class="flex justify-between mt-auto">
                    <div>120 Followers</div>
                    <div class="text-green-500">Online</div>
                </div>  
            </div>
            <hr class="border-primary">
            <div class="flex flex-col h-[40%] pt-4 gap-4 flex-1">
                <div class="text-slate-500">11-09-22</div>
                <button class="border mb-2 sm:mb-0 py-2 px-3 bg-primary rounded-lg font-medium text-white hover:opacity-90 transition text-sm border-none focus:outline-none focus:ring-primary/[.5] focus:ring-2 mt-auto"><i class="fa-solid fa-door-open"></i> Join</button>
            </div>
        </div>
    </div>
@endsection