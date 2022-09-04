<nav>
    <div class="bg-gradient-to-br from-secondary to-primary shadow">
        <div class="flex flex-col lg:flex-row">
            <div class="flex justify-between items-center px-4 py-4 lg:py-0 border-b lg:border-0 border-purple-400">
                <div>
                    <a href="#" class="uppercase font-semibold text-white">
                        <img src="img/logo.jpg" alt="Chatosphere Logo" class="w-10 h-10">
                    </a>
                </div>
                <div>
                    <button class="focus:outline-none text-white block lg:hidden" onclick="collapse()">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="w-6 h-6">
                            <path strokeLinecap="round" strokeLinejoin="round" d="M3.75 5.25h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5" />
                            <path id="menu_x" class="hidden" stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>         
                </div>
            </div>

            <div id="collapse" class="hidden lg:flex flex-col lg:flex-row justify-between w-full py-4 lg:py-0">
                <div class="flex flex-col lg:flex-row">
                    <a href="#" class="block px-4 py-3 lg:py-5 text-white hover:text-slate-200 font-semibold focus:outline-none focus:text-slate-200">Chatosphere</a>
                </div>
                <div class="flex items-center">
                    <form action="" class="px-4 py-3 lg:py-2 relative w-full">
                        <i class="fa-solid fa-magnifying-glass absolute top-6 lg:top-5 left-[31px]"></i>
                        <input class="w-full rounded-full px-10 py-2 lg:w-64 border-none shadow focus:ring-2 focus:ring-blue-700 focus:outline-none" type="text" placeholder="Search" autocomplete="off">
                    </form>
                </div>
                <div class="flex flex-col lg:flex-row lg:items-center lg:px-4">
                    <a href="#" id="signin_button" class="block px-4 py-3 lg:py-2 text-white hover:text-slate-200 lg:border lg:rounded-full lg:mx-2 font-semibold focus:outline-none focus:text-slate-200">Sign in</a>
                    <a href="#" id="signup_button" class="block px-4 py-3 lg:py-2 text-white hover:text-slate-200 lg:border lg:rounded-full font-semibold focus:outline-none focus:text-slate-200">Sign up</a>
                </div>
            </div>
        </div>
    </div>
</nav>