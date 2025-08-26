@extends('layouts.main')

@section('title', 'Sawtic | Twitter - Follow Dubai\'s AI Call Center Innovation')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-blue-900 via-slate-900 to-cyan-900">
    <!-- Hero Section -->
    <section class="relative py-20 lg:py-32">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto text-center">
                <!-- Twitter Icon -->
                <div class="mb-8">
                    <div class="inline-flex items-center justify-center w-24 h-24 bg-cyan-500 rounded-xl">
                        <i class="uil uil-twitter text-4xl text-white"></i>
                    </div>
                </div>
                
                <h1 class="text-4xl lg:text-6xl font-bold text-white mb-6">
                    Follow <span class="text-cyan-400">@SawticAI</span> on Twitter
                </h1>
                
                <p class="text-xl lg:text-2xl text-slate-300 mb-8 leading-relaxed">
                    Stay updated with real-time AI innovations, industry news, and quick insights 
                    from Dubai's leading call center automation experts.
                </p>
                
                <!-- Twitter CTA -->
                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                    <a href="https://twitter.com/sawticai" target="_blank" 
                       class="inline-flex items-center px-8 py-4 bg-cyan-500 hover:bg-cyan-600 text-white rounded-lg text-lg font-semibold transition-all duration-300 transform hover:scale-105">
                        <i class="uil uil-twitter mr-3 text-xl"></i>
                        Follow @SawticAI
                    </a>
                    
                    <a href="{{ route('contact.show') }}" 
                       class="inline-flex items-center px-8 py-4 bg-transparent border-2 border-cyan-400 text-cyan-400 hover:bg-cyan-400 hover:text-white rounded-lg text-lg font-semibold transition-all duration-300">
                        <i class="uil uil-envelope mr-3 text-xl"></i>
                        Get in Touch
                    </a>
                </div>
            </div>
        </div>
    </section>
    
    <!-- What You'll Get Section -->
    <section class="py-16 bg-slate-800/50">
        <div class="container mx-auto px-6">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-3xl lg:text-4xl font-bold text-white text-center mb-12">
                    Why Follow @SawticAI on Twitter
                </h2>
                
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Real-time Updates -->
                    <div class="bg-slate-900/50 rounded-xl p-6 border border-slate-700 hover:border-cyan-500 transition-colors">
                        <div class="w-12 h-12 bg-cyan-500 rounded-lg flex items-center justify-center mb-4">
                            <i class="uil uil-clock text-xl text-white"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-white mb-3">Real-time Updates</h3>
                        <p class="text-slate-300">Get instant notifications about AI breakthroughs and industry developments.</p>
                    </div>
                    
                    <!-- Quick Tips -->
                    <div class="bg-slate-900/50 rounded-xl p-6 border border-slate-700 hover:border-cyan-500 transition-colors">
                        <div class="w-12 h-12 bg-cyan-500 rounded-lg flex items-center justify-center mb-4">
                            <i class="uil uil-lightbulb text-xl text-white"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-white mb-3">Quick AI Tips</h3>
                        <p class="text-slate-300">Bite-sized insights on implementing AI solutions in your business.</p>
                    </div>
                    
                    <!-- Behind the Scenes -->
                    <div class="bg-slate-900/50 rounded-xl p-6 border border-slate-700 hover:border-cyan-500 transition-colors">
                        <div class="w-12 h-12 bg-cyan-500 rounded-lg flex items-center justify-center mb-4">
                            <i class="uil uil-camera text-xl text-white"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-white mb-3">Behind the Scenes</h3>
                        <p class="text-slate-300">Exclusive glimpses into Sawtic's AI development process and team.</p>
                    </div>
                    
                    <!-- Industry News -->
                    <div class="bg-slate-900/50 rounded-xl p-6 border border-slate-700 hover:border-cyan-500 transition-colors">
                        <div class="w-12 h-12 bg-cyan-500 rounded-lg flex items-center justify-center mb-4">
                            <i class="uil uil-newspaper text-xl text-white"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-white mb-3">Industry News</h3>
                        <p class="text-slate-300">Curated AI and automation news relevant to UAE businesses.</p>
                    </div>
                    
                    <!-- Live Demos -->
                    <div class="bg-slate-900/50 rounded-xl p-6 border border-slate-700 hover:border-cyan-500 transition-colors">
                        <div class="w-12 h-12 bg-cyan-500 rounded-lg flex items-center justify-center mb-4">
                            <i class="uil uil-play-circle text-xl text-white"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-white mb-3">Live Demos</h3>
                        <p class="text-slate-300">Twitter Spaces and live demonstrations of our AI call center technology.</p>
                    </div>
                    
                    <!-- Community Engagement -->
                    <div class="bg-slate-900/50 rounded-xl p-6 border border-slate-700 hover:border-cyan-500 transition-colors">
                        <div class="w-12 h-12 bg-cyan-500 rounded-lg flex items-center justify-center mb-4">
                            <i class="uil uil-comments text-xl text-white"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-white mb-3">Direct Engagement</h3>
                        <p class="text-slate-300">Ask questions, get support, and engage directly with our AI experts.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Twitter Feed Preview -->
    <section class="py-16 bg-slate-900/30">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl lg:text-4xl font-bold text-white text-center mb-12">
                    Recent Tweets
                </h2>
                
                <div class="space-y-6">
                    <!-- Sample Tweet 1 -->
                    <div class="bg-slate-800 rounded-xl p-6 border border-slate-700">
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-cyan-500 rounded-full flex items-center justify-center">
                                <i class="uil uil-robot text-white text-xl"></i>
                            </div>
                            <div class="flex-1">
                                <div class="flex items-center space-x-2 mb-2">
                                    <span class="font-semibold text-white">SawticAI</span>
                                    <span class="text-cyan-400">@sawticai</span>
                                    <span class="text-slate-400">·</span>
                                    <span class="text-slate-400">2h</span>
                                </div>
                                <p class="text-slate-300 mb-3">
                                    🚀 Just deployed new AI voice recognition features for our Dubai clients! 
                                    95% accuracy in Arabic and English. The future of customer service is here. #AICallCenter #DubaiTech
                                </p>
                                <div class="flex space-x-6 text-slate-400">
                                    <span><i class="uil uil-comment mr-1"></i>12</span>
                                    <span><i class="uil uil-redo mr-1"></i>24</span>
                                    <span><i class="uil uil-heart mr-1"></i>48</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Sample Tweet 2 -->
                    <div class="bg-slate-800 rounded-xl p-6 border border-slate-700">
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-cyan-500 rounded-full flex items-center justify-center">
                                <i class="uil uil-robot text-white text-xl"></i>
                            </div>
                            <div class="flex-1">
                                <div class="flex items-center space-x-2 mb-2">
                                    <span class="font-semibold text-white">SawticAI</span>
                                    <span class="text-cyan-400">@sawticai</span>
                                    <span class="text-slate-400">·</span>
                                    <span class="text-slate-400">4h</span>
                                </div>
                                <p class="text-slate-300 mb-3">
                                    💡 Pro tip: AI call centers can handle 80% of customer inquiries automatically, 
                                    freeing your human agents for complex problem-solving. What questions do you have about AI implementation?
                                </p>
                                <div class="flex space-x-6 text-slate-400">
                                    <span><i class="uil uil-comment mr-1"></i>8</span>
                                    <span><i class="uil uil-redo mr-1"></i>16</span>
                                    <span><i class="uil uil-heart mr-1"></i>32</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Call to Action -->
    <section class="py-16">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl lg:text-4xl font-bold text-white mb-6">
                    Join the AI Revolution
                </h2>
                <p class="text-xl text-slate-300 mb-8">
                    Follow @SawticAI for daily insights, tips, and updates on AI call center technology.
                </p>
                
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="https://twitter.com/sawticai" target="_blank" 
                       class="inline-flex items-center px-8 py-4 bg-cyan-500 hover:bg-cyan-600 text-white rounded-lg text-lg font-semibold transition-all duration-300">
                        <i class="uil uil-twitter mr-3 text-xl"></i>
                        Follow @SawticAI
                    </a>
                    
                    <a href="{{ route('demo.booking') }}" 
                       class="inline-flex items-center px-8 py-4 bg-transparent border-2 border-cyan-400 text-cyan-400 hover:bg-cyan-400 hover:text-white rounded-lg text-lg font-semibold transition-all duration-300">
                        <i class="uil uil-play mr-3 text-xl"></i>
                        Book a Demo
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection