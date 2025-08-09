<div class="p-5 border-t border-gray-100 dark:border-slate-800">
    <a href="javascript:void(0)" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md" onclick="ContactUs.showModal()">
        Modal
    </a>

    <!-- Start Modal -->
    <dialog id="ContactUs" class="rounded-md shadow-sm dark:shadow-gray-800 bg-white dark:bg-slate-900 text-slate-900 dark:text-white m-auto">
        <div class="relative h-auto min-w-[480px]">
            <div class="flex justify-between items-center px-6 py-4 border-b border-gray-100 dark:border-gray-800">
                <h3 class="font-bold text-lg">Add Payment Method</h3>
                <form method="dialog">
                    <button class="size-6 flex justify-center items-center shadow-sm dark:shadow-gray-800 rounded-md btn-ghost"><i data-feather="x" class="size-4"></i></button>
                </form>
            </div>
            <div class="p-6 text-center">
                <div class="relative overflow-hidden text-transparent -m-3">
                    <i data-feather="hexagon" class="size-32 fill-red-600/5 mx-auto"></i>
                    <div class="absolute top-2/4 -translate-y-2/4 start-0 end-0 mx-auto text-red-600 rounded-xl duration-500 text-4xl flex align-middle justify-center items-center">
                        <i class="uil uil-heart-break"></i>
                    </div>
                </div>
        
                <h4 class="text-xl font-semibold mt-6">Your wishlist is empty.</h4>
                <p class="text-slate-400 my-3">Create your first wishlist request...</p>

                <a href="" class="py-[5px] px-4 inline-block font-semibold tracking-wide align-middle duration-500 text-sm text-center bg-transparent hover:bg-indigo-600 border border-indigo-600 text-indigo-600 hover:text-white rounded-md mt-2">Create a new wishlist</a>
            </div>
        </div>
    </dialog>
    <!-- End Modal -->
</div>