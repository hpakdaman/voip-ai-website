<div class="grid lg:grid-cols-12 md:grid-cols-2 grid-cols-1 items-center mt-10 gap-[30px]">
    <div class="lg:col-span-5 md:order-2 order-1">
        <div class="lg:ms-10 relative">
            <div class="bg-white dark:bg-slate-900 rounded-md shadow-sm dark:shadow-gray-800 p-6">
                <h3 class="mb-6 text-2xl leading-normal font-medium">Free Consultation</h3>

                <form>
                    <div class="grid grid-cols-1 gap-4">
                        <div class="text-start">
                            <label for="name" class="font-semibold">Your Name:</label>
                            <div class="form-icon relative mt-2">
                                <i data-feather="user" class="size-4 absolute top-3 start-4"></i>
                                <input name="name" id="name" type="text" class="form-input ps-11 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Name :">
                            </div>
                        </div>

                        <div class="text-start">
                            <label for="email" class="font-semibold">Your Email:</label>
                            <div class="form-icon relative mt-2">
                                <i data-feather="mail" class="size-4 absolute top-3 start-4"></i>
                                <input name="email" id="email" type="email" class="form-input ps-11 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Email :">
                            </div>
                        </div>
                    
                        <div class="text-start">
                            <label for="subject" class="font-semibold">Your Question:</label>
                            <div class="form-icon relative mt-2">
                                <i data-feather="book" class="size-4 absolute top-3 start-4"></i>
                                <input name="subject" id="subject" class="form-input ps-11 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Subject :">
                            </div>
                        </div>

                        <div class="text-start">
                            <label for="comments" class="font-semibold">Your Comment:</label>
                            <div class="form-icon relative mt-2">
                                <i data-feather="message-circle" class="size-4 absolute top-3 start-4"></i>
                                <textarea name="comments" id="comments" class="form-input ps-11 w-full py-2 px-3 h-28 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Message :"></textarea>
                            </div>
                        </div>
                    </div>

                    <button type="submit" id="submit" name="send" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md justify-center items-center mt-3">Send Message</button>
                </form>
            </div>
            <div class="overflow-hidden absolute lg:size-[400px] size-[320px] bg-indigo-600/5 bottom-0 end-0 rotate-45 -z-1 rounded-3xl"></div>
        </div>
    </div>

    <div class="lg:col-span-7 md:order-1 order-2">
        <h4 class="mb-4 text-2xl leading-normal font-medium">We Are Ready To Help <br> You To Get a Solution.</h4>
        <p class="text-slate-400">Due to its widespread use as filler text for layouts, non-readability is of great importance: human perception is tuned to recognize certain patterns and repetitions in texts. If the distribution of letters visual impact.</p>
        <ul class="list-none text-slate-400 mt-4">
            <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl me-2"></i> Digital Marketing Solutions for Tomorrow</li>
            <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl me-2"></i> Our Talented & Experienced Marketing Agency</li>
            <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl me-2"></i> Create your own skin to match your brand</li>
        </ul>

        <div class="mt-4">
            <a href="{{ url('/page-aboutus') }}" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Find Out More <i class="uil uil-angle-right-b align-middle"></i></a>
        </div>
    </div>
</div>