<div class="mx-auto w-full bg-black">
    <div class="px-4 pt-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
        <div class="grid gap-10 row-gap-6 mb-8 sm:grid-cols-2 lg:grid-cols-6">
            <div class="sm:col-span-2">
                <a href="/" aria-label="Go home" title="Company"
                    class="inline-flex items-center hover:text-deep-purple-accent-400 text-white transition-colors">
                    <svg width="24" height="24" viewBox="0 0 32 32" data-name="Layer 1" id="Layer_1"
                        xmlns="http://www.w3.org/2000/svg" fill="#ffffff" stroke="#ffffff">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC"
                            stroke-width="0.064"></g>
                        <g id="SVGRepo_iconCarrier">
                            <defs>
                                <style>
                                    .cls-1 {
                                        fill: #ffffff;
                                    }
                                </style>
                            </defs>
                            <title></title>
                            <path class="cls-1"
                                d="M28,8H21V6a2,2,0,0,0-2-2H13a2,2,0,0,0-2,2V8H4a2,2,0,0,0-2,2V26a2,2,0,0,0,2,2H28a2,2,0,0,0,2-2V10A2,2,0,0,0,28,8ZM13,6h6V8H13Zm15,4v9H4V10ZM4,26V21H28v5Z">
                            </path>
                            <path class="cls-1" d="M15,18h2a1,1,0,0,0,0-2H15a1,1,0,0,0,0,2Z"></path>
                        </g>
                    </svg>
                    <span class="ml-2 text-xl font-bold tracking-wide uppercase text-white">Job Portal</span>
                </a>
                <div class="mt-6 lg:max-w-sm">
                    <p class="text-sm text-white font-medium">
                        {{ __('message.call_now') }} : +1 (555) 123-4567
                    </p>
                    <p class="mt-4 text-sm text-white">
                        Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                        explicabo.
                    </p>
                </div>
            </div>
            <div class="space-y-2 text-sm">
                <p class="text-base font-bold tracking-wide text-white">{{ __('message.quick_link') }}</p>
                <a href="/about">
                    <p
                        class="mr-1 py-1  font-medium hover:text-white {{ Route::currentRouteNamed('about') ? 'text-white' : 'text-gray-400' }}">
                        {{ __('message.about') }}</p>
                </a>
                <a href="/contact">
                    <p
                        class="mr-1 py-1  font-medium hover:text-white {{ Route::currentRouteNamed('contact') ? 'text-white' : 'text-gray-400' }}">
                        {{ __('message.contact') }}</p>
                </a>
                <a href="/blog">
                    <p
                        class="mr-1 py-1  font-medium hover:text-white {{ Route::currentRouteNamed('blog') ? 'text-white' : 'text-gray-400' }}">
                        {{ __('message.blog') }}</p>
                </a>
            </div>

            <div class="space-y-2 text-sm">
                <p class="text-base font-bold tracking-wide text-white">{{ __('message.candidate') }}</p>
                <a href="/jobs">
                    <p
                        class="mr-1 py-1  font-medium hover:text-white {{ Route::currentRouteNamed('jobs') ? 'text-white' : 'text-gray-400' }}">
                        {{ __('message.browse_jobs') }}</p>
                </a>
                <a href="/employers">
                    <p
                        class="mr-1 py-1  font-medium hover:text-white {{ Route::currentRouteNamed('employers') ? 'text-white' : 'text-gray-400' }}">
                        {{ __('message.browse_employers') }}</p>
                </a>
                <a href="/candidate-dashboard">
                    <p
                        class="mr-1 py-1 font-medium hover:text-white {{ Route::currentRouteNamed('candidate-dashboard') ? 'text-white' : 'text-gray-400' }}">
                        {{ __('message.candidate_dashboard') }}</p>
                </a>
                <a href="/save-jobs">
                    <p
                        class="mr-1 py-1  font-medium hover:text-white {{ Route::currentRouteNamed('save-jobs') ? 'text-white' : 'text-gray-400' }}">
                        {{ __('message.save_jobs') }}</p>
                </a>
            </div>

            <div class="space-y-2 text-sm">
                <p class="text-base font-bold tracking-wide text-white">{{ __('message.employers') }}</p>
                <a href="/post-job">
                    <p
                        class="mr-1 py-1  font-medium hover:text-white {{ Route::currentRouteNamed('post-job') ? 'text-white' : 'text-gray-400' }}">
                        {{ __('message.post_jobs') }}</p>
                </a>
                <a href="/candidates">
                    <p
                        class="mr-1  py-1  font-medium hover:text-white {{ Route::currentRouteNamed('candidates') ? 'text-white' : 'text-gray-400' }}">
                        {{ __('message.browse_candidates') }}</p>
                </a>
                <a href="/employers-dashboard">
                    <p
                        class="mr-1  py-1  font-medium hover:text-white {{ Route::currentRouteNamed('employers-dashboard') ? 'text-white' : 'text-gray-400' }}">
                        {{ __('message.employers_dashboard') }}</p>
                </a>
                <a href="/applications">
                    <p
                        class="mr-1  py-1  font-medium hover:text-white {{ Route::currentRouteNamed('applications') ? 'text-white' : 'text-gray-400' }}">
                        {{ __('message.applications') }}</p>
                </a>
            </div>

            <div class="space-y-2 text-sm">
                <p class="text-base font-bold tracking-wide text-white">{{ __('message.support') }}</p>
                <a href="/faqs">
                    <p
                        class="mr-1 py-1  font-medium hover:text-white {{ Route::currentRouteNamed('faqs') ? 'text-white' : 'text-gray-400' }}">
                        {{ __('message.faqs') }}</p>
                </a>
                <a href="/privacy-policy">
                    <p
                        class="mr-1 py-1  font-medium hover:text-white {{ Route::currentRouteNamed('privacy-policy') ? 'text-white' : 'text-gray-400' }}">
                        {{ __('message.privacy_policy') }}</p>
                </a>
                <a href="/terms-conditions">
                    <p
                        class="mr-1 py-1  font-medium hover:text-white {{ Route::currentRouteNamed('terms-conditions') ? 'text-white' : 'text-gray-400' }}">
                        {{ __('message.terms_conditions') }}</p>
                </a>
            </div>

        </div>
        <div class="flex flex-col-reverse justify-between pt-5 pb-10 border-t lg:flex-row border-white">
            <p class="text-sm text-white font-medium">
                © Copyright 2020 Lorem Inc. All rights reserved.
            </p>

            <div class="flex items-center mt-1 space-x-3">
                <a href="/" class="text-white transition-colors duration-300 hover:text-deep-purple-accent-400">
                    <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
                        <path
                            d="M24,4.6c-0.9,0.4-1.8,0.7-2.8,0.8c1-0.6,1.8-1.6,2.2-2.7c-1,0.6-2,1-3.1,1.2c-0.9-1-2.2-1.6-3.6-1.6 c-2.7,0-4.9,2.2-4.9,4.9c0,0.4,0,0.8,0.1,1.1C7.7,8.1,4.1,6.1,1.7,3.1C1.2,3.9,1,4.7,1,5.6c0,1.7,0.9,3.2,2.2,4.1 C2.4,9.7,1.6,9.5,1,9.1c0,0,0,0,0,0.1c0,2.4,1.7,4.4,3.9,4.8c-0.4,0.1-0.8,0.2-1.3,0.2c-0.3,0-0.6,0-0.9-0.1c0.6,2,2.4,3.4,4.6,3.4 c-1.7,1.3-3.8,2.1-6.1,2.1c-0.4,0-0.8,0-1.2-0.1c2.2,1.4,4.8,2.2,7.5,2.2c9.1,0,14-7.5,14-14c0-0.2,0-0.4,0-0.6 C22.5,6.4,23.3,5.5,24,4.6z">
                        </path>
                    </svg>
                </a>
                <a href="/" class="text-white transition-colors duration-300 hover:text-deep-purple-accent-400">
                    <svg viewBox="0 0 30 30" fill="currentColor" class="h-6">
                        <circle cx="15" cy="15" r="4"></circle>
                        <path
                            d="M19.999,3h-10C6.14,3,3,6.141,3,10.001v10C3,23.86,6.141,27,10.001,27h10C23.86,27,27,23.859,27,19.999v-10   C27,6.14,23.859,3,19.999,3z M15,21c-3.309,0-6-2.691-6-6s2.691-6,6-6s6,2.691,6,6S18.309,21,15,21z M22,9c-0.552,0-1-0.448-1-1   c0-0.552,0.448-1,1-1s1,0.448,1,1C23,8.552,22.552,9,22,9z">
                        </path>
                    </svg>
                </a>
                <a href="/" class="text-white transition-colors duration-300 hover:text-deep-purple-accent-400">
                    <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
                        <path
                            d="M22,0H2C0.895,0,0,0.895,0,2v20c0,1.105,0.895,2,2,2h11v-9h-3v-4h3V8.413c0-3.1,1.893-4.788,4.659-4.788 c1.325,0,2.463,0.099,2.795,0.143v3.24l-1.918,0.001c-1.504,0-1.795,0.715-1.795,1.763V11h4.44l-1,4h-3.44v9H22c1.105,0,2-0.895,2-2 V2C24,0.895,23.105,0,22,0z">
                        </path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>
