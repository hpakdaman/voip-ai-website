<div class="grid md:grid-cols-2 grid-cols-1 items-center gap-[30px]">
    <div class="relative">
        <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold"><span class="text-indigo-600">Sign up now</span> and get the <br> best insurance on <br> the market</h3>
        <p class="text-slate-400 max-w-xl">Explore and learn more about everything from machine learning and global payments to scaling your team.</p>

        <div class="flex items-center mt-6">
            <img src="{{ asset('assets/images/client/01.jpg') }}" class="size-14 rounded-full shadow-md dark:shadow-gray-800 me-3" alt="">
            <div class="flex-1">
                <h6 class="text-lg font-semibold">Advin</h6>
                <p class="text-slate-400">Owner &amp; CEO</p>
            </div>
        </div>
    </div>

    <div class="p-6 lg:ms-16 bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-800">
        <h3 class="mb-3 text-2xl leading-normal font-semibold">Sign up for your insurance</h3>
        <p class="text-slate-400">Mobile insurance packages, forget <br> about worrying and live your life.</p>
        <form action="{{ url('/auth-signup-success') }}" class="text-start mt-6">
            <div class="grid grid-cols-1">
                <div class="mb-4">
                    <label class="font-semibold" for="RegisterName">Your Name:</label>
                    <input id="RegisterName" type="text" class="form-input mt-3 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Harry" required>
                </div>

                <div class="mb-4">
                    <label class="font-semibold" for="LoginEmail">Email Address:</label>
                    <input id="LoginEmail" type="email" class="form-input mt-3 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="name@example.com" required>
                </div>

                <div class="mb-4">
                    <label class="font-semibold" for="LoginPassword">Password:</label>
                    <input id="LoginPassword" type="password" class="form-input mt-3 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Password:" required>
                </div>

                <div class="mb-4">
                    <div class="flex items-center w-full mb-0">
                        <input class="form-checkbox size-4 appearance-none rounded border border-gray-200 dark:border-gray-800 accent-indigo-600 checked:appearance-auto dark:accent-indigo-600 focus:border-indigo-300 focus:ring-0 focus:ring-offset-0 focus:ring-indigo-200 focus:ring-opacity-50 me-2" type="checkbox" value="" id="AcceptT&C">
                        <label class="form-check-label text-slate-400" for="AcceptT&C">I Accept <a href="" class="text-indigo-600">Terms And Condition</a></label>
                    </div>
                </div>

                <div class="mb-4">
                    <input type="submit" class="py-2 px-5 inline-block tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md w-full" value="Register">
                </div>
            </div>
        </form>
    </div>
</div>