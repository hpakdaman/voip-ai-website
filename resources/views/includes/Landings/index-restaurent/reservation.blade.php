<div class="bg-white dark:bg-slate-900 shadow-md dark:shadow-gray-800 rounded-md lg:p-12 p-6 lg:ms-12">
    <div class="section-title mb-4">
        <span class="bg-indigo-600/5 text-indigo-600 text-xs font-bold px-2.5 py-0.5 rounded h-5">Reservation</span>
        <h4 class="text-4xl font-bold uppercase my-4">Book A Table</h4>
        <p class="text-slate-400 mx-auto para-desc">We make it a priority to offer flexible services to accomodate your needs</p>
    </div>

    <form>
        <div class="grid md:grid-cols-2 gap-4 mt-6">
            <div>
                <label class="font-semibold">Your Name</label>
                <input name="name" id="name" type="text" class="form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="First Name :">
            </div>

            <div>
                <label class="font-semibold">Your Email</label>
                <input name="email" id="email" type="email" class="form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Your email :">
            </div> 

            <div>
                <label class="font-semibold">Phone no.</label>
                <input name="number" type="number" id="phone-number" class="form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Phone no. :">
            </div> 

            <div>
                <label class="font-semibold">Person</label>
                <input type="number" min="0" autocomplete="off" id="adult" class="form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" required="" placeholder="Person :">
            </div> 

            <div>
                <label class="font-semibold">Date</label>
                <input name="date" type="text" class="form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0 start" placeholder="(ex: mm/ dd/ yy)">
            </div> 

            <div>
                <label class="font-semibold">Time</label>
                <input name="time" type="text" id="input-time" class="form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0 timepicker" placeholder="(ex: 8:00 p.m)">
            </div> 
        </div><!--end grid-->

        <div class="grid grid-cols-1 mt-4">
            <input type="submit" id="submit" name="send" class="py-2 px-5 inline-block tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md w-full" value="Book a table">
        </div><!--end grid-->
    </form><!--end form-->
</div>