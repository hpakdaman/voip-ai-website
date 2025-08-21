@extends('layouts.main')

@section('title', 'Sawtic | Demo Booking Confirmed - AI Call Center Consultation')

@section('content')
<div class="relative" style="background: var(--voip-dark-bg);">
    <!-- Background Elements -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -top-40 -right-40 w-80 h-80 rounded-full opacity-10" style="background: var(--voip-link);"></div>
        <div class="absolute -bottom-40 -left-40 w-96 h-96 rounded-full opacity-10" style="background: var(--voip-primary);"></div>
    </div>

    <div class="relative container mx-auto px-6 pt-24 pb-16">
        <!-- Success Header -->
        <div class="text-center mb-12">
            <div class="inline-flex items-center justify-center w-20 h-20 rounded-full mb-6" style="background: rgba(34, 197, 94, 0.2); border: 2px solid #22c55e;">
                <i class="uil uil-check text-4xl text-green-500"></i>
            </div>
            <h1 class="text-4xl md:text-6xl font-bold text-white mb-6">
                Your Demo is <span style="color: var(--voip-link);">Confirmed!</span>
            </h1>
            <p class="text-xl text-slate-300 max-w-3xl mx-auto">
                Thank you for booking a demo with Sawtic. We're excited to show you how AI can transform your business communications.
            </p>
        </div>

        <!-- Booking Details Card -->
        <div class="max-w-4xl mx-auto">
            <div class="bg-white rounded-3xl p-8 md:p-12 shadow-2xl mb-8">
                <h2 class="text-2xl font-bold mb-6" style="color: var(--voip-primary);">
                    <i class="uil uil-calendar-alt mr-3"></i>
                    Demo Appointment Details
                </h2>

                <div class="grid md:grid-cols-2 gap-8">
                    <!-- Left Column: Appointment Info -->
                    <div>
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <i class="uil uil-user text-xl mr-3" style="color: var(--voip-link);"></i>
                                <div>
                                    <h4 class="font-semibold text-gray-800">Attendee</h4>
                                    <p class="text-gray-600">{{ $booking->full_name }}</p>
                                    <p class="text-gray-600">{{ $booking->email }}</p>
                                    <p class="text-gray-600">{{ $booking->phone }}</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <i class="uil uil-building text-xl mr-3" style="color: var(--voip-link);"></i>
                                <div>
                                    <h4 class="font-semibold text-gray-800">Company</h4>
                                    <p class="text-gray-600">{{ $booking->company }}</p>
                                    @if($booking->industry)
                                        <p class="text-gray-500 text-sm">{{ ucfirst(str_replace('-', ' ', $booking->industry)) }}</p>
                                    @endif
                                </div>
                            </div>

                            <div class="flex items-start">
                                <i class="uil uil-clock text-xl mr-3" style="color: var(--voip-link);"></i>
                                <div>
                                    <h4 class="font-semibold text-gray-800">Scheduled Time</h4>
                                    <p class="text-gray-600 font-medium">{{ $booking->formatted_scheduled_at }}</p>
                                    <p class="text-gray-500 text-sm">30-minute session</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <i class="uil uil-info-circle text-xl mr-3" style="color: var(--voip-link);"></i>
                                <div>
                                    <h4 class="font-semibold text-gray-800">Status</h4>
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium"
                                          style="background: rgba(251, 191, 36, 0.2); color: #f59e0b;">
                                        <i class="uil uil-clock-three mr-1"></i>
                                        {{ ucfirst($booking->status) }}
                                    </span>
                                </div>
                            </div>

                            @if($booking->requirements)
                                <div class="flex items-start">
                                    <i class="uil uil-notes text-xl mr-3" style="color: var(--voip-link);"></i>
                                    <div>
                                        <h4 class="font-semibold text-gray-800">Your Requirements</h4>
                                        <p class="text-gray-600">{{ $booking->requirements }}</p>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>

                    <!-- Right Column: Next Steps -->
                    <div class="bg-gray-50 rounded-2xl p-6">
                        <h3 class="text-lg font-bold text-gray-800 mb-4">
                            <i class="uil uil-list-ul mr-2" style="color: var(--voip-primary);"></i>
                            What Happens Next?
                        </h3>
                        
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <div class="flex-shrink-0 w-6 h-6 rounded-full text-white text-xs flex items-center justify-center mr-3" style="background: var(--voip-primary);">1</div>
                                <div>
                                    <h4 class="font-medium text-gray-800">Confirmation Email</h4>
                                    <p class="text-gray-600 text-sm">You'll receive a detailed confirmation email with calendar invite and joining instructions.</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div class="flex-shrink-0 w-6 h-6 rounded-full text-white text-xs flex items-center justify-center mr-3" style="background: var(--voip-primary);">2</div>
                                <div>
                                    <h4 class="font-medium text-gray-800">Pre-Demo Preparation</h4>
                                    <p class="text-gray-600 text-sm">Our team will prepare a customized demo based on your industry and requirements.</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div class="flex-shrink-0 w-6 h-6 rounded-full text-white text-xs flex items-center justify-center mr-3" style="background: var(--voip-primary);">3</div>
                                <div>
                                    <h4 class="font-medium text-gray-800">Demo Session</h4>
                                    <p class="text-gray-600 text-sm">Join the video call to see live AI demonstrations and discuss your specific needs.</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div class="flex-shrink-0 w-6 h-6 rounded-full text-white text-xs flex items-center justify-center mr-3" style="background: var(--voip-primary);">4</div>
                                <div>
                                    <h4 class="font-medium text-gray-800">Follow-Up</h4>
                                    <p class="text-gray-600 text-sm">Receive a customized proposal and implementation timeline for your business.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Information for Changes -->
                <div class="mt-8 pt-8 border-t border-gray-200 text-center">
                    <p class="text-gray-600 mb-4">Need to make changes to your booking?</p>
                    <div class="flex flex-wrap gap-4 justify-center">
                        <a href="tel:+971486472245" 
                           class="px-6 py-3 rounded-xl text-white font-semibold hover:scale-105 transform transition-all duration-300"
                           style="background: var(--voip-primary);">
                            <i class="uil uil-phone mr-2"></i>
                            Call +971 4 864 7245
                        </a>
                        <a href="mailto:dubai@sawtic.com?subject=Demo Booking Changes - {{ $booking->formatted_scheduled_at }}" 
                           class="px-6 py-3 rounded-xl border-2 font-semibold hover:scale-105 transform transition-all duration-300"
                           style="border-color: var(--voip-primary); color: var(--voip-primary);">
                            <i class="uil uil-envelope mr-2"></i>
                            Email Us
                        </a>
                    </div>
                </div>
            </div>

            <!-- Contact Information -->
            <div class="bg-white rounded-3xl p-8 shadow-xl">
                <h3 class="text-xl font-bold text-center mb-6" style="color: var(--voip-primary);">
                    Need to Make Changes or Have Questions?
                </h3>
                
                <div class="grid md:grid-cols-3 gap-6 text-center">
                    <div>
                        <div class="inline-flex items-center justify-center w-12 h-12 rounded-full mb-3" style="background: rgba(30, 192, 141, 0.2);">
                            <i class="uil uil-phone text-xl" style="color: var(--voip-link);"></i>
                        </div>
                        <h4 class="font-semibold text-gray-800 mb-2">Call Us</h4>
                        <a href="tel:+971486472245" class="text-gray-600 hover:text-[var(--voip-link)] transition-colors">
                            +971 4 864 7245
                        </a>
                    </div>

                    <div>
                        <div class="inline-flex items-center justify-center w-12 h-12 rounded-full mb-3" style="background: rgba(30, 192, 141, 0.2);">
                            <i class="uil uil-envelope text-xl" style="color: var(--voip-link);"></i>
                        </div>
                        <h4 class="font-semibold text-gray-800 mb-2">Email Us</h4>
                        <a href="mailto:dubai@sawtic.com" class="text-gray-600 hover:text-[var(--voip-link)] transition-colors">
                            dubai@sawtic.com
                        </a>
                    </div>

                    <div>
                        <div class="inline-flex items-center justify-center w-12 h-12 rounded-full mb-3" style="background: rgba(30, 192, 141, 0.2);">
                            <i class="uil uil-chat text-xl" style="color: var(--voip-link);"></i>
                        </div>
                        <h4 class="font-semibold text-gray-800 mb-2">Live Chat</h4>
                        <button onclick="openLiveChat()" class="text-gray-600 hover:text-[var(--voip-link)] transition-colors">
                            Start Chat
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Related Links -->
        <div class="mt-16 text-center">
            <h3 class="text-xl font-semibold text-white mb-6">While You Wait, Explore More</h3>
            <div class="flex flex-wrap gap-4 justify-center">
                <a href="{{ route('features') }}" 
                   class="px-6 py-3 rounded-xl text-white border border-[var(--voip-link)] hover:bg-[var(--voip-link)] transition-all duration-300">
                    <i class="uil uil-rocket mr-2"></i>
                    View All Features
                </a>
                <a href="{{ route('pricing') }}" 
                   class="px-6 py-3 rounded-xl text-white border border-[var(--voip-link)] hover:bg-[var(--voip-link)] transition-all duration-300">
                    <i class="uil uil-dollar-sign mr-2"></i>
                    See Pricing Plans
                </a>
                <a href="{{ route('solutions.real-estate') }}" 
                   class="px-6 py-3 rounded-xl text-white border border-[var(--voip-link)] hover:bg-[var(--voip-link)] transition-all duration-300">
                    <i class="uil uil-building mr-2"></i>
                    Industry Solutions
                </a>
            </div>
        </div>
    </div>
</div>

<script>
function openLiveChat() {
    // Integrate with your preferred live chat solution
    // For now, we'll open the contact page
    window.open('{{ route('contact-us') }}', '_blank');
}

// Auto-refresh booking status (optional)
@if($booking->status === 'pending')
setTimeout(function() {
    location.reload();
}, 300000); // Refresh every 5 minutes for pending bookings
@endif
</script>
@endsection