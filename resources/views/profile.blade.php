@extends('layouts.main')

@section('container')
    <div class="flex flex-col p-4 md:flex-row gap-0 md:gap-3">
        <div class="border-2 w-full md:w-80 lg:w-2/5 p-4 bg-white border-primary rounded-xl mb-4 md:mb-0 shrink-0 shadow">
            <div class="">
                <div class="w-24 h-24 rounded-full border mx-auto border-black mb-2"></div>
                <div class="text-center font-semibold text-lg">
                    Muhammad Azka Lufthansa
                </div>
            </div>
            <hr class="my-6 border-black">
            <div>
                <ul class="flex flex-col gap-2 text-center md:text-left">
                    <span class="text-slate-700 font-semibold text-xs -mb-2">Email</span>
                    <li>azkalufthansa3@gmail.com</li>
                    <span class="text-slate-700 font-semibold text-xs -mb-2">Number</span>
                    <li>082120205224</li>
                    <span class="text-slate-700 font-semibold text-xs -mb-2">About</span>
                    <li>Sedang ngoding</li>
                    <span class="text-slate-700 font-semibold text-xs -mb-2">Birthday</span>
                    <li>1-01-2001</li>
                    <span class="text-slate-700 font-semibold text-xs -mb-2 uppperca">Topic Created</span>
                    <li>40</li>
                    <span class="text-slate-700 font-semibold text-xs -mb-2 uppperca">Comment Posted</span>
                    <li>99</li>
                </ul>
            </div>
        </div>
        <div class="border-2 p-4 w-full bg-white border-primary rounded-xl shadow">
            <div class="font-semibold">Profile's Topic</div>
            <hr class="border-black my-2">
            <div>
                <div>
                    <div class="flex justify-between items-center">
                        <div class="text-sm">
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
                            <button class="border mb-2 sm:mb-0 py-2 px-3 bg-primary rounded-lg font-medium text-white hover:opacity-90 transition text-sm border-none focus:outline-none focus:ring-primary/[.5] focus:ring-2"><i class="fa-solid fa-door-open"></i> Join</button>
                            <button class="border mb-2 sm:mb-0 py-2 px-3 bg-primary rounded-lg font-medium text-white hover:opacity-90 transition text-sm border-none focus:outline-none focus:ring-primary/[.5] focus:ring-2"><i class="fa-solid fa-comment"></i> Comment</button>
                            <button class="border mb-2 sm:mb-0 py-2 px-3 bg-primary rounded-lg font-medium text-white hover:opacity-90 transition text-sm border-none focus:outline-none focus:ring-primary/[.5] focus:ring-2"><i class="fa-solid fa-share"></i> Share</button>
                        </div>
                        <div>
                            <button class="border py-2 px-3 bg-primary rounded-lg font-medium text-white hover:opacity-90 transition text-sm border-none focus:outline-none focus:ring-primary/[.5] focus:ring-2"><i class="fa-solid fa-triangle-exclamation"></i> Report</button>
                        </div>
                    </div>
                </div>
                <hr class="my-4 border-black">
                <div>
                    <div class="flex justify-between items-center">
                        <div class="text-sm">
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
                            <button class="border mb-2 sm:mb-0 py-2 px-3 bg-primary rounded-lg font-medium text-white hover:opacity-90 transition text-sm border-none focus:outline-none focus:ring-primary/[.5] focus:ring-2"><i class="fa-solid fa-door-open"></i> Join</button>
                            <button class="border mb-2 sm:mb-0 py-2 px-3 bg-primary rounded-lg font-medium text-white hover:opacity-90 transition text-sm border-none focus:outline-none focus:ring-primary/[.5] focus:ring-2"><i class="fa-solid fa-comment"></i> Comment</button>
                            <button class="border mb-2 sm:mb-0 py-2 px-3 bg-primary rounded-lg font-medium text-white hover:opacity-90 transition text-sm border-none focus:outline-none focus:ring-primary/[.5] focus:ring-2"><i class="fa-solid fa-share"></i> Share</button>
                        </div>
                        <div>
                            <button class="border py-2 px-3 bg-primary rounded-lg font-medium text-white hover:opacity-90 transition text-sm border-none focus:outline-none focus:ring-primary/[.5] focus:ring-2"><i class="fa-solid fa-triangle-exclamation"></i> Report</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection