
<nav class="p-5 bg-gray-200 flex justify-between items-center relative">
    <!-- Logo or Home Button -->
    <div class="flex items-center">
        <a href="#" class="text-xl font-bold text-gray-800">Job Portal</a>
    </div>

    <!-- Navigation Menu (Hidden on small screens) -->
    <ul class="hidden md:flex flex-wrap justify-center md:justify-start items-center space-x-4">
        <a href="/" class=" hover:text-black font-medium {{ Route::currentRouteNamed('home') ? 'text-blue-400' : 'text-gray-500' }}">
            <li>Home</li>
        </a>
        <a href="/find-job" class="font-medium  {{ Route::currentRouteNamed('find-job') ? 'text-blue-400' : 'text-gray-500' }} hover:text-black">
            <li>Find Job</li>
        </a>
        <a href="/employers" class="font-medium  {{ Route::currentRouteNamed('employers') ? 'text-blue-400' : 'text-gray-500' }} hover:text-black">
            <li>Employers</li>
        </a>
        <a href="/candidate" class="font-medium  {{ Route::currentRouteNamed('candidate') ? 'text-blue-400' : 'text-gray-500' }} hover:text-black">
            <li>Candidate</li>
        </a>
        <a href="/customer-support" class="font-medium {{ Route::currentRouteNamed('customer-support') ? 'text-blue-400' : 'text-gray-500' }} hover:text-black">
            <li>Customer Support</li>
        </a>

        <!-- Language Dropdown (Click to Open) -->
        <div class="relative">
            <button id="web-lang-button" class="px-2 text-gray-500 hover:text-black flex items-center font-medium ">
                🌐 Language
            </button>
            <div id="web-lang-menu" class="hidden absolute right-2 bg-white shadow-md rounded-md w-32 mt-2">
                <a href="#" class="  px-4 py-2 text-gray-500 hover:bg-gray-200 flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"
                        class="px-1">
                        <rect x="1" y="4" width="30" height="24" rx="4" ry="4" fill="#fff">
                        </rect>
                        <path
                            d="M1.638,5.846H30.362c-.711-1.108-1.947-1.846-3.362-1.846H5c-1.414,0-2.65,.738-3.362,1.846Z"
                            fill="#a62842"></path>
                        <path
                            d="M2.03,7.692c-.008,.103-.03,.202-.03,.308v1.539H31v-1.539c0-.105-.022-.204-.03-.308H2.03Z"
                            fill="#a62842"></path>
                        <path fill="#a62842" d="M2 11.385H31V13.231H2z"></path>
                        <path fill="#a62842" d="M2 15.077H31V16.923000000000002H2z"></path>
                        <path fill="#a62842" d="M1 18.769H31V20.615H1z"></path>
                        <path d="M1,24c0,.105,.023,.204,.031,.308H30.969c.008-.103,.031-.202,.031-.308v-1.539H1v1.539Z"
                            fill="#a62842"></path>
                        <path
                            d="M30.362,26.154H1.638c.711,1.108,1.947,1.846,3.362,1.846H27c1.414,0,2.65-.738,3.362-1.846Z"
                            fill="#a62842"></path>
                        <path d="M5,4h11v12.923H1V8c0-2.208,1.792-4,4-4Z" fill="#102d5e"></path>
                        <path
                            d="M27,4H5c-2.209,0-4,1.791-4,4V24c0,2.209,1.791,4,4,4H27c2.209,0,4-1.791,4-4V8c0-2.209-1.791-4-4-4Zm3,20c0,1.654-1.346,3-3,3H5c-1.654,0-3-1.346-3-3V8c0-1.654,1.346-3,3-3H27c1.654,0,3,1.346,3,3V24Z"
                            opacity=".15"></path>
                        <path
                            d="M27,5H5c-1.657,0-3,1.343-3,3v1c0-1.657,1.343-3,3-3H27c1.657,0,3,1.343,3,3v-1c0-1.657-1.343-3-3-3Z"
                            fill="#fff" opacity=".2"></path>
                        <path fill="#fff"
                            d="M4.601 7.463L5.193 7.033 4.462 7.033 4.236 6.338 4.01 7.033 3.279 7.033 3.87 7.463 3.644 8.158 4.236 7.729 4.827 8.158 4.601 7.463z">
                        </path>
                        <path fill="#fff"
                            d="M7.58 7.463L8.172 7.033 7.441 7.033 7.215 6.338 6.989 7.033 6.258 7.033 6.849 7.463 6.623 8.158 7.215 7.729 7.806 8.158 7.58 7.463z">
                        </path>
                        <path fill="#fff"
                            d="M10.56 7.463L11.151 7.033 10.42 7.033 10.194 6.338 9.968 7.033 9.237 7.033 9.828 7.463 9.603 8.158 10.194 7.729 10.785 8.158 10.56 7.463z">
                        </path>
                        <path fill="#fff"
                            d="M6.066 9.283L6.658 8.854 5.927 8.854 5.701 8.158 5.475 8.854 4.744 8.854 5.335 9.283 5.109 9.979 5.701 9.549 6.292 9.979 6.066 9.283z">
                        </path>
                        <path fill="#fff"
                            d="M9.046 9.283L9.637 8.854 8.906 8.854 8.68 8.158 8.454 8.854 7.723 8.854 8.314 9.283 8.089 9.979 8.68 9.549 9.271 9.979 9.046 9.283z">
                        </path>
                        <path fill="#fff"
                            d="M12.025 9.283L12.616 8.854 11.885 8.854 11.659 8.158 11.433 8.854 10.702 8.854 11.294 9.283 11.068 9.979 11.659 9.549 12.251 9.979 12.025 9.283z">
                        </path>
                        <path fill="#fff"
                            d="M6.066 12.924L6.658 12.494 5.927 12.494 5.701 11.799 5.475 12.494 4.744 12.494 5.335 12.924 5.109 13.619 5.701 13.19 6.292 13.619 6.066 12.924z">
                        </path>
                        <path fill="#fff"
                            d="M9.046 12.924L9.637 12.494 8.906 12.494 8.68 11.799 8.454 12.494 7.723 12.494 8.314 12.924 8.089 13.619 8.68 13.19 9.271 13.619 9.046 12.924z">
                        </path>
                        <path fill="#fff"
                            d="M12.025 12.924L12.616 12.494 11.885 12.494 11.659 11.799 11.433 12.494 10.702 12.494 11.294 12.924 11.068 13.619 11.659 13.19 12.251 13.619 12.025 12.924z">
                        </path>
                        <path fill="#fff"
                            d="M13.539 7.463L14.13 7.033 13.399 7.033 13.173 6.338 12.947 7.033 12.216 7.033 12.808 7.463 12.582 8.158 13.173 7.729 13.765 8.158 13.539 7.463z">
                        </path>
                        <path fill="#fff"
                            d="M4.601 11.104L5.193 10.674 4.462 10.674 4.236 9.979 4.01 10.674 3.279 10.674 3.87 11.104 3.644 11.799 4.236 11.369 4.827 11.799 4.601 11.104z">
                        </path>
                        <path fill="#fff"
                            d="M7.58 11.104L8.172 10.674 7.441 10.674 7.215 9.979 6.989 10.674 6.258 10.674 6.849 11.104 6.623 11.799 7.215 11.369 7.806 11.799 7.58 11.104z">
                        </path>
                        <path fill="#fff"
                            d="M10.56 11.104L11.151 10.674 10.42 10.674 10.194 9.979 9.968 10.674 9.237 10.674 9.828 11.104 9.603 11.799 10.194 11.369 10.785 11.799 10.56 11.104z">
                        </path>
                        <path fill="#fff"
                            d="M13.539 11.104L14.13 10.674 13.399 10.674 13.173 9.979 12.947 10.674 12.216 10.674 12.808 11.104 12.582 11.799 13.173 11.369 13.765 11.799 13.539 11.104z">
                        </path>
                        <path fill="#fff"
                            d="M4.601 14.744L5.193 14.315 4.462 14.315 4.236 13.619 4.01 14.315 3.279 14.315 3.87 14.744 3.644 15.44 4.236 15.01 4.827 15.44 4.601 14.744z">
                        </path>
                        <path fill="#fff"
                            d="M7.58 14.744L8.172 14.315 7.441 14.315 7.215 13.619 6.989 14.315 6.258 14.315 6.849 14.744 6.623 15.44 7.215 15.01 7.806 15.44 7.58 14.744z">
                        </path>
                        <path fill="#fff"
                            d="M10.56 14.744L11.151 14.315 10.42 14.315 10.194 13.619 9.968 14.315 9.237 14.315 9.828 14.744 9.603 15.44 10.194 15.01 10.785 15.44 10.56 14.744z">
                        </path>
                        <path fill="#fff"
                            d="M13.539 14.744L14.13 14.315 13.399 14.315 13.173 13.619 12.947 14.315 12.216 14.315 12.808 14.744 12.582 15.44 13.173 15.01 13.765 15.44 13.539 14.744z">
                        </path>
                    </svg>
                    English
                </a>
                <a href="#" class="  px-4 py-2 text-gray-500 hover:bg-gray-200 flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"
                        class="px-1">
                        <path fill="#ce2c2d" d="M1 8H31V24H1z"></path>
                        <path d="M5,4H27c2.208,0,4,1.792,4,4v2H1v-2c0-2.208,1.792-4,4-4Z" fill="#0f299c"></path>
                        <path d="M5,22H27c2.208,0,4,1.792,4,4v2H1v-2c0-2.208,1.792-4,4-4Z" transform="rotate(180 16 25)"
                            fill="#0f299c"></path>
                        <path
                            d="M27,4H5c-2.209,0-4,1.791-4,4V24c0,2.209,1.791,4,4,4H27c2.209,0,4-1.791,4-4V8c0-2.209-1.791-4-4-4Zm3,20c0,1.654-1.346,3-3,3H5c-1.654,0-3-1.346-3-3V8c0-1.654,1.346-3,3-3H27c1.654,0,3,1.346,3,3V24Z"
                            opacity=".15"></path>
                        <path
                            d="M23,19.56h-.349v-.676h-.349v-.577h-.347v-.435h-.207v-.337c-1.181,.12-.041-2.08-.268-2.706-.088-.009-.162,.047-.201,.106,.061-.16-.094-.609-.184-.242h-.181v-.487c-.454,.425-.108,.088-.26-.33-.01,.067-.09,.196-.123,.185,.068-.165,.156-.285,.036-.509-.147,.466,.042-.047-.102-.253-.007,.054-.06,.209-.069,.197,.05-.796-.769-.795-.718,0-.009,.012-.062-.143-.069-.197-.143,.206,.045,.719-.102,.253-.121,.225-.033,.344,.036,.509-.033,.011-.113-.117-.123-.184-.152,.418,.194,.755-.26,.33v.852h-.219c.024-.097-.19-.093-.159,.002h-1.3l.002-.783c-.201,.078-.192,.183-.189,.307-.227,.098-.265-.318-.043-.304v-.323c-.041,.009-.158,.007-.262,.165v-.082c-.137-.012-.138,.117-.141,.367h-.036c-.098-.348,.306-.505,.096-.845-.337,.542,.262-.405-.03-.57-.267,.722,.085-.266-.144-.401-.175,.661,.045-.217-.104-.27-.232,.429,.065-.11-.094-.215-.166,.279-.063-.112-.049-.184h-.062l.022-.171h-.079l.019-.142h-.137l.013-.144h-.125c.031-.286-.322-.285-.292,0h-.125l.013,.144h-.137l.019,.142h-.079l.022,.171h-.061c.01,.067,.107,.463-.049,.184-.157,.11,.136,.646-.096,.208-.149,.101,.081,.885-.102,.277-.229,.134,.123,1.124-.144,.401-.292,.164,.307,1.112-.03,.57-.21,.341,.195,.498,.096,.845h-.017c-.001-.267,0-.377-.149-.367v.081c-.104-.156-.22-.154-.261-.164v.323c.218-.019,.188,.401-.034,.304,.006-.127,.003-.227-.197-.306v.783h-1.297c.031-.095-.183-.099-.159-.002h-.218v-.852c-.454,.425-.108,.088-.26-.33-.01,.067-.09,.196-.123,.184,.068-.165,.156-.285,.036-.509-.146,.466,.042-.047-.102-.253-.007,.054-.06,.209-.069,.197,.05-.796-.769-.795-.718,0-.009,.012-.062-.143-.069-.197-.143,.206,.045,.719-.102,.253-.121,.225-.032,.344,.036,.509-.033,.011-.113-.117-.123-.185-.152,.419,.194,.755-.26,.33v.487h-.181c-.09-.368-.245,.083-.184,.242-.039-.058-.114-.115-.201-.106-.227,.626,.914,2.824-.269,2.706v.337h-.207v.438l-.347-.003v.578h-.349v.676s-.349,0-.349,0v.724h2.493c.235,0,.683,0,.918,0h0s3.131,0,3.131,0h0c.235,0,.683,0,.918,0h0s3.125,0,3.125,0h0c.235,0,.683,0,.918,0h0s2.499,0,2.499,0v-.724Z"
                            fill="#fff"></path>
                        <path
                            d="M27,5H5c-1.657,0-3,1.343-3,3v1c0-1.657,1.343-3,3-3H27c1.657,0,3,1.343,3,3v-1c0-1.657-1.343-3-3-3Z"
                            fill="#fff" opacity=".2"></path>
                    </svg>
                    Khmer
                </a>
            </div>
        </div>
    </ul>

    <!-- Hamburger Menu Button (Visible on small screens) -->
    <button id="menu-button" class="block md:hidden text-gray-800 focus:outline-none animate-menu-button">
        <svg id="menu-icon" class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
        </svg>
        <svg id="cancel-icon" class="w-8 h-8 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
    </button>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden absolute top-16 left-0 w-full bg-white shadow-md">
        <ul class="flex flex-col items-center p-5 space-y-2">
            <a href="/" class=" hover:text-black font-medium {{ Route::currentRouteNamed('home') ? 'text-blue-400' : 'text-gray-500' }}">
                <li>Home</li>
            </a>
            <a href="/find-job" class="font-medium  {{ Route::currentRouteNamed('find-job') ? 'text-blue-400' : 'text-gray-500' }} hover:text-black">
                <li>Find Job</li>
            </a>
            <a href="/employers" class="font-medium  {{ Route::currentRouteNamed('employers') ? 'text-blue-400' : 'text-gray-500' }} hover:text-black">
                <li>Employers</li>
            </a>
            <a href="/candidate" class="font-medium {{ Route::currentRouteNamed('candidate') ? 'text-blue-400' : 'text-gray-500' }} hover:text-black">
                <li>Candidate</li>
            </a>
            <a href="/customer-support" class="font-medium {{ Route::currentRouteNamed('customer-support') ? 'text-blue-400' : 'text-gray-500' }} hover:text-black">
                <li>Customer Support</li>
            </a>

            <!-- Mobile Language Dropdown -->
            <div class="text-center relative">
                <button id="mobile-lang-button" class="px-2 text-gray-500 hover:text-black flex justify-center font-medium ">
                    🌐 Language
                </button>
                <div id="mobile-lang-menu" class="hidden bg-white shadow-md rounded-md w-32 mx-auto mt-2 animate-dropdown">
                    <a href="#" class="  px-4 py-2 text-gray-500 hover:bg-gray-200 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"
                            class="px-1">
                            <rect x="1" y="4" width="30" height="24" rx="4" ry="4"
                                fill="#fff"></rect>
                            <path
                                d="M1.638,5.846H30.362c-.711-1.108-1.947-1.846-3.362-1.846H5c-1.414,0-2.65,.738-3.362,1.846Z"
                                fill="#a62842"></path>
                            <path
                                d="M2.03,7.692c-.008,.103-.03,.202-.03,.308v1.539H31v-1.539c0-.105-.022-.204-.03-.308H2.03Z"
                                fill="#a62842"></path>
                            <path fill="#a62842" d="M2 11.385H31V13.231H2z"></path>
                            <path fill="#a62842" d="M2 15.077H31V16.923000000000002H2z"></path>
                            <path fill="#a62842" d="M1 18.769H31V20.615H1z"></path>
                            <path
                                d="M1,24c0,.105,.023,.204,.031,.308H30.969c.008-.103,.031-.202,.031-.308v-1.539H1v1.539Z"
                                fill="#a62842"></path>
                            <path
                                d="M30.362,26.154H1.638c.711,1.108,1.947,1.846,3.362,1.846H27c1.414,0,2.65-.738,3.362-1.846Z"
                                fill="#a62842"></path>
                            <path d="M5,4h11v12.923H1V8c0-2.208,1.792-4,4-4Z" fill="#102d5e"></path>
                            <path
                                d="M27,4H5c-2.209,0-4,1.791-4,4V24c0,2.209,1.791,4,4,4H27c2.209,0,4-1.791,4-4V8c0-2.209-1.791-4-4-4Zm3,20c0,1.654-1.346,3-3,3H5c-1.654,0-3-1.346-3-3V8c0-1.654,1.346-3,3-3H27c1.654,0,3,1.346,3,3V24Z"
                                opacity=".15"></path>
                            <path
                                d="M27,5H5c-1.657,0-3,1.343-3,3v1c0-1.657,1.343-3,3-3H27c1.657,0,3,1.343,3,3v-1c0-1.657-1.343-3-3-3Z"
                                fill="#fff" opacity=".2"></path>
                            <path fill="#fff"
                                d="M4.601 7.463L5.193 7.033 4.462 7.033 4.236 6.338 4.01 7.033 3.279 7.033 3.87 7.463 3.644 8.158 4.236 7.729 4.827 8.158 4.601 7.463z">
                            </path>
                            <path fill="#fff"
                                d="M7.58 7.463L8.172 7.033 7.441 7.033 7.215 6.338 6.989 7.033 6.258 7.033 6.849 7.463 6.623 8.158 7.215 7.729 7.806 8.158 7.58 7.463z">
                            </path>
                            <path fill="#fff"
                                d="M10.56 7.463L11.151 7.033 10.42 7.033 10.194 6.338 9.968 7.033 9.237 7.033 9.828 7.463 9.603 8.158 10.194 7.729 10.785 8.158 10.56 7.463z">
                            </path>
                            <path fill="#fff"
                                d="M6.066 9.283L6.658 8.854 5.927 8.854 5.701 8.158 5.475 8.854 4.744 8.854 5.335 9.283 5.109 9.979 5.701 9.549 6.292 9.979 6.066 9.283z">
                            </path>
                            <path fill="#fff"
                                d="M9.046 9.283L9.637 8.854 8.906 8.854 8.68 8.158 8.454 8.854 7.723 8.854 8.314 9.283 8.089 9.979 8.68 9.549 9.271 9.979 9.046 9.283z">
                            </path>
                            <path fill="#fff"
                                d="M12.025 9.283L12.616 8.854 11.885 8.854 11.659 8.158 11.433 8.854 10.702 8.854 11.294 9.283 11.068 9.979 11.659 9.549 12.251 9.979 12.025 9.283z">
                            </path>
                            <path fill="#fff"
                                d="M6.066 12.924L6.658 12.494 5.927 12.494 5.701 11.799 5.475 12.494 4.744 12.494 5.335 12.924 5.109 13.619 5.701 13.19 6.292 13.619 6.066 12.924z">
                            </path>
                            <path fill="#fff"
                                d="M9.046 12.924L9.637 12.494 8.906 12.494 8.68 11.799 8.454 12.494 7.723 12.494 8.314 12.924 8.089 13.619 8.68 13.19 9.271 13.619 9.046 12.924z">
                            </path>
                            <path fill="#fff"
                                d="M12.025 12.924L12.616 12.494 11.885 12.494 11.659 11.799 11.433 12.494 10.702 12.494 11.294 12.924 11.068 13.619 11.659 13.19 12.251 13.619 12.025 12.924z">
                            </path>
                            <path fill="#fff"
                                d="M13.539 7.463L14.13 7.033 13.399 7.033 13.173 6.338 12.947 7.033 12.216 7.033 12.808 7.463 12.582 8.158 13.173 7.729 13.765 8.158 13.539 7.463z">
                            </path>
                            <path fill="#fff"
                                d="M4.601 11.104L5.193 10.674 4.462 10.674 4.236 9.979 4.01 10.674 3.279 10.674 3.87 11.104 3.644 11.799 4.236 11.369 4.827 11.799 4.601 11.104z">
                            </path>
                            <path fill="#fff"
                                d="M7.58 11.104L8.172 10.674 7.441 10.674 7.215 9.979 6.989 10.674 6.258 10.674 6.849 11.104 6.623 11.799 7.215 11.369 7.806 11.799 7.58 11.104z">
                            </path>
                            <path fill="#fff"
                                d="M10.56 11.104L11.151 10.674 10.42 10.674 10.194 9.979 9.968 10.674 9.237 10.674 9.828 11.104 9.603 11.799 10.194 11.369 10.785 11.799 10.56 11.104z">
                            </path>
                            <path fill="#fff"
                                d="M13.539 11.104L14.13 10.674 13.399 10.674 13.173 9.979 12.947 10.674 12.216 10.674 12.808 11.104 12.582 11.799 13.173 11.369 13.765 11.799 13.539 11.104z">
                            </path>
                            <path fill="#fff"
                                d="M4.601 14.744L5.193 14.315 4.462 14.315 4.236 13.619 4.01 14.315 3.279 14.315 3.87 14.744 3.644 15.44 4.236 15.01 4.827 15.44 4.601 14.744z">
                            </path>
                            <path fill="#fff"
                                d="M7.58 14.744L8.172 14.315 7.441 14.315 7.215 13.619 6.989 14.315 6.258 14.315 6.849 14.744 6.623 15.44 7.215 15.01 7.806 15.44 7.58 14.744z">
                            </path>
                            <path fill="#fff"
                                d="M10.56 14.744L11.151 14.315 10.42 14.315 10.194 13.619 9.968 14.315 9.237 14.315 9.828 14.744 9.603 15.44 10.194 15.01 10.785 15.44 10.56 14.744z">
                            </path>
                            <path fill="#fff"
                                d="M13.539 14.744L14.13 14.315 13.399 14.315 13.173 13.619 12.947 14.315 12.216 14.315 12.808 14.744 12.582 15.44 13.173 15.01 13.765 15.44 13.539 14.744z">
                            </path>
                        </svg>
                        English
                    </a>
                    <a href="#" class="  px-4 py-2 text-gray-500 hover:bg-gray-200 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"
                            class="px-1">
                            <path fill="#ce2c2d" d="M1 8H31V24H1z"></path>
                            <path d="M5,4H27c2.208,0,4,1.792,4,4v2H1v-2c0-2.208,1.792-4,4-4Z" fill="#0f299c"></path>
                            <path d="M5,22H27c2.208,0,4,1.792,4,4v2H1v-2c0-2.208,1.792-4,4-4Z"
                                transform="rotate(180 16 25)" fill="#0f299c"></path>
                            <path
                                d="M27,4H5c-2.209,0-4,1.791-4,4V24c0,2.209,1.791,4,4,4H27c2.209,0,4-1.791,4-4V8c0-2.209-1.791-4-4-4Zm3,20c0,1.654-1.346,3-3,3H5c-1.654,0-3-1.346-3-3V8c0-1.654,1.346-3,3-3H27c1.654,0,3,1.346,3,3V24Z"
                                opacity=".15"></path>
                            <path
                                d="M23,19.56h-.349v-.676h-.349v-.577h-.347v-.435h-.207v-.337c-1.181,.12-.041-2.08-.268-2.706-.088-.009-.162,.047-.201,.106,.061-.16-.094-.609-.184-.242h-.181v-.487c-.454,.425-.108,.088-.26-.33-.01,.067-.09,.196-.123,.185,.068-.165,.156-.285,.036-.509-.147,.466,.042-.047-.102-.253-.007,.054-.06,.209-.069,.197,.05-.796-.769-.795-.718,0-.009,.012-.062-.143-.069-.197-.143,.206,.045,.719-.102,.253-.121,.225-.033,.344,.036,.509-.033,.011-.113-.117-.123-.184-.152,.418,.194,.755-.26,.33v.852h-.219c.024-.097-.19-.093-.159,.002h-1.3l.002-.783c-.201,.078-.192,.183-.189,.307-.227,.098-.265-.318-.043-.304v-.323c-.041,.009-.158,.007-.262,.165v-.082c-.137-.012-.138,.117-.141,.367h-.036c-.098-.348,.306-.505,.096-.845-.337,.542,.262-.405-.03-.57-.267,.722,.085-.266-.144-.401-.175,.661,.045-.217-.104-.27-.232,.429,.065-.11-.094-.215-.166,.279-.063-.112-.049-.184h-.062l.022-.171h-.079l.019-.142h-.137l.013-.144h-.125c.031-.286-.322-.285-.292,0h-.125l.013,.144h-.137l.019,.142h-.079l.022,.171h-.061c.01,.067,.107,.463-.049,.184-.157,.11,.136,.646-.096,.208-.149,.101,.081,.885-.102,.277-.229,.134,.123,1.124-.144,.401-.292,.164,.307,1.112-.03,.57-.21,.341,.195,.498,.096,.845h-.017c-.001-.267,0-.377-.149-.367v.081c-.104-.156-.22-.154-.261-.164v.323c.218-.019,.188,.401-.034,.304,.006-.127,.003-.227-.197-.306v.783h-1.297c.031-.095-.183-.099-.159-.002h-.218v-.852c-.454,.425-.108,.088-.26-.33-.01,.067-.09,.196-.123,.184,.068-.165,.156-.285,.036-.509-.146,.466,.042-.047-.102-.253-.007,.054-.06,.209-.069,.197,.05-.796-.769-.795-.718,0-.009,.012-.062-.143-.069-.197-.143,.206,.045,.719-.102,.253-.121,.225-.032,.344,.036,.509-.033,.011-.113-.117-.123-.185-.152,.419,.194,.755-.26,.33v.487h-.181c-.09-.368-.245,.083-.184,.242-.039-.058-.114-.115-.201-.106-.227,.626,.914,2.824-.269,2.706v.337h-.207v.438l-.347-.003v.578h-.349v.676s-.349,0-.349,0v.724h2.493c.235,0,.683,0,.918,0h0s3.131,0,3.131,0h0c.235,0,.683,0,.918,0h0s3.125,0,3.125,0h0c.235,0,.683,0,.918,0h0s2.499,0,2.499,0v-.724Z"
                                fill="#fff"></path>
                            <path
                                d="M27,5H5c-1.657,0-3,1.343-3,3v1c0-1.657,1.343-3,3-3H27c1.657,0,3,1.343,3,3v-1c0-1.657-1.343-3-3-3Z"
                                fill="#fff" opacity=".2"></path>
                        </svg>
                        Khmer
                    </a>
                </div>
            </div>
        </ul>


    </div>
</nav>

<!-- JavaScript for Toggle -->
<script>
    // Toggle Mobile Menu
    document.getElementById('menu-button').addEventListener('click', function() {
        let menu = document.getElementById('mobile-menu');
        menu.classList.toggle('hidden');
        this.classList.toggle('open'); // add this line

        // Toggle menu icon and cancel icon with animation
        document.getElementById('menu-icon').classList.toggle('hidden');
        document.getElementById('cancel-icon').classList.toggle('hidden');

        // Add animation to menu icon and cancel icon
        document.getElementById('menu-icon').classList.toggle('animate-out');
        document.getElementById('cancel-icon').classList.toggle('animate-in');
    });

    // Toggle Mobile Language Menu
    document.getElementById('mobile-lang-button').addEventListener('click', function(event) {
        let langMenu = document.getElementById('mobile-lang-menu');
        langMenu.classList.toggle('hidden');
        event.stopPropagation(); // Prevent menu from closing immediately
    });

    // Toggle Web Language Menu
    document.getElementById('web-lang-button').addEventListener('click', function(event) {
        let langMenu = document.getElementById('web-lang-menu');
        langMenu.classList.toggle('hidden');
        event.stopPropagation(); // Prevent menu from closing immediately
    });

    // Close menus when clicking outside
    document.addEventListener('click', function(event) {
        let webLangMenu = document.getElementById('web-lang-menu');
        let mobileLangMenu = document.getElementById('mobile-lang-menu');
        let mobileMenu = document.getElementById('mobile-menu');

        if (!event.target.closest('#web-lang-button')) {
            webLangMenu.classList.add('hidden');
        }
        if (!event.target.closest('#mobile-lang-button')) {
            mobileLangMenu.classList.add('hidden');
        }
        if (!event.target.closest('#menu-button')) {
            mobileMenu.classList.add('hidden');
        }
    });
</script>
