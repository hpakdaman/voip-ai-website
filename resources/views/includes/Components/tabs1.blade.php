<div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
    <div class="lg:col-span-4 md:col-span-5">
        <ul class="flex-column text-center space-y-2" id="myTab2" data-tabs-toggle="#myTabContent" role="tablist">
            <li role="presentation">
                <button class="px-4 py-1 text-sm font-semibold rounded-md w-full hover:text-indigo-600 duration-500" id="tab-three-tab" data-tabs-target="#tab-three" type="button" role="tab" aria-controls="tab-three" aria-selected="true">Tab One</button>
            </li>
            <li role="presentation">
                <button class="px-4 py-1 text-sm font-semibold rounded-md w-full duration-500" id="tab-four-tab" data-tabs-target="#tab-four" type="button" role="tab" aria-controls="tab-four" aria-selected="false">Tab Two</button>
            </li>
        </ul>
    </div>

    <div class="lg:col-span-8 md:col-span-7">
        <div id="myTabContent">
            <div class="" id="tab-three" role="tabpanel" aria-labelledby="tab-three-tab">
                <p class="text-slate-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore cum vero quae officiis earum odio, consequatur perferendis sapiente quo illum ipsam illo harum maiores minima dolor adipisci recusandae labore? Harum.</p>
            </div>
            
            <div class="hidden" id="tab-four" role="tabpanel" aria-labelledby="tab-four-tab">
                <p class="text-slate-400">1  Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore cum vero quae officiis earum odio, consequatur perferendis sapiente quo illum ipsam illo harum maiores minima dolor adipisci recusandae labore? Harum.</p>
            </div>
        </div>
    </div>
</div>