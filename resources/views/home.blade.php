@extends('layouts.main')

@section('container')
    <main>
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
                            <button class="border mb-2 sm:mb-0 py-2 px-3 bg-primary rounded-lg font-medium text-white hover:opacity-90 transition text-sm border-none focus:outline-none focus:ring-primary/[.5] focus:ring-2"><i class="fa-solid fa-door-open"></i> Join</button>
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

            <div class="border-2 shadow border-primary hidden lg:block p-4 lg:w-6/12 xl:w-5/12 bg-white rounded-xl">
                <div>
                    Trending Topic
                </div>
            </div>
        </div>
    </main>

    {{-- popup signin signup --}}
    <div id="popup" class="bg-black/[.6] w-full h-full absolute top-0 justify-center items-center p-6 hidden">
        <div class="bg-white p-10 md:p-20 rounded-xl relative">
            <div id="close" class="absolute right-4 top-5 rounded-full hover:bg-primary/[.5] transition duration-300 p-1 w-6 h-6 mt-0">
                <i class="fa-solid fa-xmark block text-center"></i>
            </div>
            <div class="signin flex justify-center items-center h-full flex-wrap">
                <div>
                    <div class="text-center font-semibold text-2xl mb-8">Sign In Chatosphere</div>
                    <form action="">
                        <label for="username" class="text-sm">Username</label>
                        <input type="text" class="border border-slate-400 w-full px-2 py-1 rounded mb-2 focus:outline-none focus:ring-primary/[.5] focus:ring-2 focus:border-primary" name="username" id="username"><br>
                        <label for="password" class="text-sm">Password</label>
                        <input type="password" class="border border-slate-400 w-full px-2 py-1 rounded mb-8 focus:outline-none focus:ring-primary/[.5] focus:ring-2 focus:border-primary" name="password" id="password"><br>
                        <button type="submit" class="text-lg bg-primary rounded font-semibold text-white w-full mb-2 p-1 hover:opacity-90 transition focus:outline-none focus:ring-primary/[.5] focus:ring-2">Sign In</button>
                        <div class="text-center text-sm">Doesnt have an account? <a href="#" id="signup" class="text-blue-600 hover:underline">Sign up</a></div>
                    </form>
                </div>
            </div>

            <div class="signup flex justify-center items-center h-full flex-wrap">
                <div>
                    <div class="text-center font-semibold text-2xl mb-8">Sign Up Chatosphere</div>
                    <form action="">
                        <label for="username" class="text-sm">Username</label>
                        <input type="text" class="border border-slate-400 w-full px-2 py-1 rounded mb-2 focus:outline-none focus:ring-primary/[.5] focus:ring-2 focus:border-primary" name="username" id="username"><br>
                        <label for="username" class="text-sm">Email</label>
                        <input type="text" class="border border-slate-400 w-full px-2 py-1 rounded mb-2 focus:outline-none focus:ring-primary/[.5] focus:ring-2 focus:border-primary" name="username" id="username"><br>
                        <label for="password" class="text-sm">Password</label>
                        <input type="password" class="border border-slate-400 w-full px-2 py-1 rounded mb-2 focus:outline-none focus:ring-primary/[.5] focus:ring-2 focus:border-primary" name="password" id="password"><br>
                        <label for="password" class="text-sm">Confirm Password</label>
                        <input type="password" class="border border-slate-400 w-full px-2 py-1 rounded mb-8 focus:outline-none focus:ring-primary/[.5] focus:ring-2 focus:border-primary" name="password" id="password"><br>
                        <button type="submit" class="text-lg bg-primary rounded font-semibold text-white w-full mb-2 p-1 hover:opacity-90 transition focus:outline-none focus:ring-primary/[.5] focus:ring-2">Sign In</button>
                        <div class="text-center text-sm">Already have an account? <a href="#" id="signin" class="text-blue-600 hover:underline">Sign in</a></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection