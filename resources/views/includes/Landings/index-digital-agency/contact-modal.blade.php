<!-- Start Modal -->
<dialog id="contactModal" class="rounded-md shadow-sm dark:shadow-gray-800 bg-white dark:bg-slate-900 text-slate-900 dark:text-white m-auto">
    <div class="relative h-auto md:w-[480px] w-300px">
        <div class="flex justify-between items-center px-6 py-4 border-b border-gray-100 dark:border-gray-800">
            <h3 class="font-bold text-lg">Contact Form</h3>
            <form method="dialog">
                <button class="size-6 flex justify-center items-center shadow-sm dark:shadow-gray-800 rounded-md btn-ghost"><i data-feather="x" class="size-4"></i></button>
            </form>
        </div>
        <div class="p-6 text-center">
            <form method="post" name="myForm" id="myForm" onsubmit="return validateForm()">
                <p class="mb-0" id="error-msg"></p>
                <div id="simple-msg"></div>
                <div class="grid lg:grid-cols-12 lg:gap-6">
                    <div class="lg:col-span-6 mb-5">
                        <div class="text-start">
                            <label for="name" class="font-semibold">Your Name:</label>
                            <div class="form-icon relative mt-2">
                                <i data-feather="user" class="size-4 absolute top-3 start-4"></i>
                                <input name="name" id="name" type="text" class="form-input ps-11 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Name :">
                            </div>
                        </div>
                    </div>

                    <div class="lg:col-span-6 mb-5">
                        <div class="text-start">
                            <label for="email" class="font-semibold">Your Email:</label>
                            <div class="form-icon relative mt-2">
                                <i data-feather="mail" class="size-4 absolute top-3 start-4"></i>
                                <input name="email" id="email" type="email" class="form-input ps-11 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Email :">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1">
                    <div class="mb-5">
                        <div class="text-start">
                            <label for="subject" class="font-semibold">Your Question:</label>
                            <div class="form-icon relative mt-2">
                                <i data-feather="book" class="size-4 absolute top-3 start-4"></i>
                                <input name="subject" id="subject" class="form-input ps-11 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Subject :">
                            </div>
                        </div>
                    </div>

                    <div class="mb-5">
                        <div class="text-start">
                            <label for="comments" class="font-semibold">Your Comment:</label>
                            <div class="form-icon relative mt-2">
                                <i data-feather="message-circle" class="size-4 absolute top-3 start-4"></i>
                                <textarea name="comments" id="comments" class="form-input ps-11 w-full py-2 px-3 h-28 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Message :"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" id="submit" name="send" class="py-2 px-5 font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md justify-center flex items-center">Send Message</button>
            </form>
        </div>
    </div>
</dialog>
<!-- End Modal -->