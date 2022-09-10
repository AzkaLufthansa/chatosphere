@extends('layouts.main')

@section('container')
    <div class="p-4 flex gap-3">
        <div>
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
                        <a href="/join" class="border mb-2 sm:mb-0 py-2 px-3 bg-primary rounded-lg font-medium text-white hover:opacity-90 transition text-sm border-none focus:outline-none focus:ring-primary/[.5] focus:ring-2"><i class="fa-solid fa-door-open"></i> Join</a>
                        <button class="border mb-2 sm:mb-0 py-2 px-3 bg-primary rounded-lg font-medium text-white hover:opacity-90 transition text-sm border-none focus:outline-none focus:ring-primary/[.5] focus:ring-2"><i class="fa-solid fa-comment"></i> Comment</button>
                        <button class="border mb-2 sm:mb-0 py-2 px-3 bg-primary rounded-lg font-medium text-white hover:opacity-90 transition text-sm border-none focus:outline-none focus:ring-primary/[.5] focus:ring-2"><i class="fa-solid fa-share"></i> Share</button>
                    </div>
                    <div>
                        <button class="border py-2 px-3 bg-primary rounded-lg font-medium text-white hover:opacity-90 transition text-sm border-none focus:outline-none focus:ring-primary/[.5] focus:ring-2"><i class="fa-solid fa-triangle-exclamation"></i> Report</button>
                    </div>
                </div>
            </div>

            <div class="border-2 shadow border-primary p-4 bg-white rounded-xl">
                <div class="flex justify-between items-center">
                    <div class="text-sm">
                        <a href="/profile">Anonymous</a>
                        <span class="text-slate-500">11-09-2022</span>
                    </div>
                    <div class="flex flex-col">
                        <i class="fa-solid fa-caret-up m-auto hover:text-primary transition"></i>
                        <span class="m-auto">69</span>
                        <i class="fa-solid fa-caret-down m-auto hover:text-primary transition"></i>
                    </div>
                </div>
                <div class="mt-4">
                    <h1 class="text-2xl font-bold">Kenapa Orde Baru sangat Buruk</h1>
                    <p class="mt-4 mb-6 text-sm">Kenapa Orde Baru Sangat Buruk ?. Dikarenakan Rezim Orde Baru sangat otoriter kepada rakyat indonesia, seperti contoh Penembak Misterius atau lebih dikenal Petrus</p>
                </div>
                <div class="flex flex-col mobile:flex-row justify-between">
                    <div>
                        <a href="/join" class="border mb-2 sm:mb-0 py-2 px-3 bg-primary rounded-lg font-medium text-white hover:opacity-90 transition text-sm border-none focus:outline-none focus:ring-primary/[.5] focus:ring-2"><i class="fa-solid fa-door-open"></i> Join</a>
                        <button class="border mb-2 sm:mb-0 py-2 px-3 bg-primary rounded-lg font-medium text-white hover:opacity-90 transition text-sm border-none focus:outline-none focus:ring-primary/[.5] focus:ring-2"><i class="fa-solid fa-comment"></i> Comment</button>
                        <button class="border mb-2 sm:mb-0 py-2 px-3 bg-primary rounded-lg font-medium text-white hover:opacity-90 transition text-sm border-none focus:outline-none focus:ring-primary/[.5] focus:ring-2"><i class="fa-solid fa-share"></i> Share</button>
                    </div>
                    <div>
                        <button class="border py-2 px-3 bg-primary rounded-lg font-medium text-white hover:opacity-90 transition text-sm border-none focus:outline-none focus:ring-primary/[.5] focus:ring-2"><i class="fa-solid fa-triangle-exclamation"></i> Report</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="border-2 shadow border-primary hidden lg:block p-4 lg:w-6/12 xl:w-5/12 bg-white rounded-xl">
            <div>
                Trending Topic
            </div>
        </div>
    </div>
@endsection