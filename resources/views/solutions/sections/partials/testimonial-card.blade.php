<div class="wow animate__animated animate__fadeInUp" data-wow-delay="{{ ($index * 0.15) + 0.1 }}s">
    <!-- Simple Testimonial Card with Fixed Height -->
    <div class="h-96 p-6 rounded-xl text-center flex flex-col overflow-hidden" style="background: rgba(30, 192, 141, 0.05); border: 1px solid rgba(30, 192, 141, 0.1);">
        
        <!-- 5-Star Rating -->
        <div class="flex items-center justify-center mb-4">
            @for($i = 1; $i <= 5; $i++)
            <i class="uil uil-star text-yellow-400 text-lg"></i>
            @endfor
        </div>
        
        <!-- Short Quote (Flexible Content) -->
        <blockquote class="text-white text-lg leading-relaxed mb-6 flex-1 overflow-hidden">
            "{{ $testimonial['testimonial'] }}"
        </blockquote>
        
        <!-- Client Info (Stuck to Bottom) -->
        <div class="mt-auto pt-3 border-t border-white/10">
            <div class="flex items-center space-x-3">
                <!-- Client Photo -->
                <div class="w-10 h-10 rounded-full overflow-hidden border-2 flex-shrink-0" style="border-color: var(--voip-link);">
                    @if(isset($testimonial['image']) && !empty($testimonial['image']))
                    <img src="{{ asset($testimonial['image']) }}" alt="{{ $testimonial['name'] }}" class="w-full h-full object-cover" 
                         onerror="this.src='{{ asset('assets/images/no-image.svg') }}';">
                    @else
                    <div class="w-full h-full bg-gradient-to-br from-gray-400 to-gray-600 flex items-center justify-center">
                        <i class="uil uil-user text-white text-xs"></i>
                    </div>
                    @endif
                </div>
                
                <!-- Client Name & Company -->
                <div class="text-left min-w-0">
                    <div class="text-white font-bold text-sm truncate">{{ $testimonial['name'] }}</div>
                    <div class="text-slate-400 text-xs truncate">{{ $testimonial['company'] }}</div>
                </div>
            </div>
        </div>
    </div>
</div>