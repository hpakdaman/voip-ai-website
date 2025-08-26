@extends('layouts.main')

@section('title', 'Sawtic | LinkedIn - Connect with Dubai\'s Leading AI Call Center Provider')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-blue-900 via-slate-900 to-indigo-900">
    <!-- Hero Section -->
    <section class="relative py-20 lg:py-32">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto text-center">
                <!-- LinkedIn Icon -->
                <div class="mb-8">
                    <div class="inline-flex items-center justify-center w-24 h-24 bg-blue-600 rounded-xl">
                        <i class="uil uil-linkedin-alt text-4xl text-white"></i>
                    </div>
                </div>
                
                <h1 class="text-4xl lg:text-6xl font-bold text-white mb-6">
                    Connect with <span class="text-blue-400">Sawtic</span> on LinkedIn
                </h1>
                
                <p class="text-xl lg:text-2xl text-slate-300 mb-8 leading-relaxed">
                    Follow our journey as Dubai's premier AI call center solution provider. 
                    Get industry insights, company updates, and connect with our professional network.
                </p>
                
                <!-- LinkedIn CTA -->
                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                    <a href="https://linkedin.com/company/sawtic" target="_blank" 
                       class="inline-flex items-center px-8 py-4 bg-blue-600 hover:bg-blue-700 text-white rounded-lg text-lg font-semibold transition-all duration-300 transform hover:scale-105">
                        <i class="uil uil-linkedin-alt mr-3 text-xl"></i>
                        Follow Sawtic on LinkedIn
                    </a>
                    
                    <a href="{{ route('contact.show') }}" 
                       class="inline-flex items-center px-8 py-4 bg-transparent border-2 border-blue-400 text-blue-400 hover:bg-blue-400 hover:text-white rounded-lg text-lg font-semibold transition-all duration-300">
                        <i class="uil uil-envelope mr-3 text-xl"></i>
                        Contact Us Directly
                    </a>
                </div>
            </div>
        </div>
    </section>
    
    <!-- What You'll Find Section -->
    <section class="py-16 bg-slate-800/50">
        <div class="container mx-auto px-6">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-3xl lg:text-4xl font-bold text-white text-center mb-12">
                    What You'll Find on Our LinkedIn
                </h2>
                
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Industry Insights -->
                    <div class="bg-slate-900/50 rounded-xl p-6 border border-slate-700 hover:border-blue-500 transition-colors">
                        <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center mb-4">
                            <i class="uil uil-brain text-xl text-white"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-white mb-3">AI Industry Insights</h3>
                        <p class="text-slate-300">Latest trends in AI call center technology and business automation solutions.</p>
                    </div>
                    
                    <!-- Company Updates -->
                    <div class="bg-slate-900/50 rounded-xl p-6 border border-slate-700 hover:border-blue-500 transition-colors">
                        <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center mb-4">
                            <i class="uil uil-building text-xl text-white"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-white mb-3">Company News</h3>
                        <p class="text-slate-300">Updates on Sawtic's growth, partnerships, and new AI solution launches.</p>
                    </div>
                    
                    <!-- Success Stories -->
                    <div class="bg-slate-900/50 rounded-xl p-6 border border-slate-700 hover:border-blue-500 transition-colors">
                        <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center mb-4">
                            <i class="uil uil-trophy text-xl text-white"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-white mb-3">Success Stories</h3>
                        <p class="text-slate-300">Real client transformations and AI implementation case studies.</p>
                    </div>
                    
                    <!-- Team Insights -->
                    <div class="bg-slate-900/50 rounded-xl p-6 border border-slate-700 hover:border-blue-500 transition-colors">
                        <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center mb-4">
                            <i class="uil uil-users-alt text-xl text-white"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-white mb-3">Team Insights</h3>
                        <p class="text-slate-300">Behind-the-scenes look at our AI development team and company culture.</p>
                    </div>
                    
                    <!-- Thought Leadership -->
                    <div class="bg-slate-900/50 rounded-xl p-6 border border-slate-700 hover:border-blue-500 transition-colors">
                        <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center mb-4">
                            <i class="uil uil-lightbulb-alt text-xl text-white"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-white mb-3">Thought Leadership</h3>
                        <p class="text-slate-300">Expert opinions on AI, automation, and the future of customer service.</p>
                    </div>
                    
                    <!-- Networking -->
                    <div class="bg-slate-900/50 rounded-xl p-6 border border-slate-700 hover:border-blue-500 transition-colors">
                        <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center mb-4">
                            <i class="uil uil-network text-xl text-white"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-white mb-3">Professional Network</h3>
                        <p class="text-slate-300">Connect with AI professionals, business leaders, and industry experts.</p>
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
                    Ready to Transform Your Business?
                </h2>
                <p class="text-xl text-slate-300 mb-8">
                    Follow us on LinkedIn and discover how AI can revolutionize your customer service operations.
                </p>
                
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="https://linkedin.com/company/sawtic" target="_blank" 
                       class="inline-flex items-center px-8 py-4 bg-blue-600 hover:bg-blue-700 text-white rounded-lg text-lg font-semibold transition-all duration-300">
                        <i class="uil uil-linkedin-alt mr-3 text-xl"></i>
                        Follow on LinkedIn
                    </a>
                    
                    <a href="{{ route('demo.booking') }}" 
                       class="inline-flex items-center px-8 py-4 bg-transparent border-2 border-indigo-400 text-indigo-400 hover:bg-indigo-400 hover:text-white rounded-lg text-lg font-semibold transition-all duration-300">
                        <i class="uil uil-play mr-3 text-xl"></i>
                        Book a Demo
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection