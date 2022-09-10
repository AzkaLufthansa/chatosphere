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