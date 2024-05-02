<nav class="fixed top-0 z-50 w-full  bg-slate-600 border-b-2  border-gray-400">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
        <div class="flex items-center justify-between">
            <div class="flex items-center justify-start rtl:justify-end">
                <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar"
                    type="button"
                    class="inline-flex items-center p-2 text-sm text-white rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                    <span class="sr-only">Open sidebar</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path clip-rule="evenodd" fill-rule="evenodd"
                            d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                        </path>
                    </svg>
                </button>
                <a href="/" class="flex ms-2 md:me-24">
                    <img src="{{ asset('photos/urSchoolLogo.png') }}" class="h-10 me-3" alt="Logo" />
                    <span
                        class="self-center text-white text-xl font-mono font-semibold sm:text-xl whitespace-nowrap dark:text-white">AcademiaPulse</span>
                </a>
            </div>
            <div class="flex items-center">
                <div class="flex items-center ms-3">
                    <div>
                        <button type="button"
                            class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-[#fb5607] dark:focus:ring-gray-600"
                            aria-expanded="false" data-dropdown-toggle="dropdown-user">
                            <span class="sr-only">Open user menu</span>
                            <img class="w-8 h-8 rounded-full" src="{{ asset('users/' . Auth::user()->picture) }}"
                                alt="user photo">

                        </button>
                    </div>
                    <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600"
                        id="dropdown-user">
                        <div class="px-4 py-3" role="none">

                            <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                                {{ Auth::user()->name }}
                            </p>
                        </div>
                        <ul class="py-1" role="none">
                            <li>
                                <a href="{{ route('parentDashboard') }}"
                                    class="w-full text-center block px-4 py-2 text-sm font-mono font-bold text-black hover:bg-[#fb5607] hover:text-white "
                                    role="menuitem">Dashboard</a>
                            </li>


                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <button type="submit"
                                        class=" w-full block px-4 py-2 text-sm font-mono font-bold text-black hover:bg-red-800 hover:text-white ">Sign
                                        out</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

<aside id="logo-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full  bg-[#03045e] border-r-4 border-[#fb5607] sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
    aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-[#03045e] dark:bg-gray-800">
        <ul class="space-y-2 font-medium">
            <li>
                <a href="{{ route('parentDashboard') }}"
                    class="flex items-center p-2 text-white rounded-lg dark:text-white hover:bg-[#fb5607] dark:hover:bg-gray-700 group">
                    <svg fill="#ffffff" width="30px" height="30px" viewBox="0 0 32 32" id="icon" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <defs> <style> .cls-1 { fill: none; } </style> </defs> <polygon points="4 20 4 22 8.586 22 2 28.586 3.414 30 10 23.414 10 28 12 28 12 20 4 20"></polygon> <rect x="24.0001" y="21" width="2" height="5"></rect> <rect x="20.0001" y="16" width="2" height="10"></rect> <rect x="16" y="18" width="2" height="8"></rect> <path d="M28,2H4A2.002,2.002,0,0,0,2,4V16H4V13H28.001l.001,15H16v2H28a2.0027,2.0027,0,0,0,2-2V4A2.0023,2.0023,0,0,0,28,2ZM12,11H4V4h8Zm2,0V4H28l.0007,7Z"></path> <rect id="_Transparent_Rectangle_" data-name="<Transparent Rectangle>" class="cls-1" width="32" height="32"></rect> </g></svg>

                    <span class="ms-3">Dashboard</span>
                </a>
            </li>


            <li>
                <a href="{{ route('myChildren') }}"
                    class="flex items-center p-2 text-white rounded-lg dark:text-white hover:bg-[#fb5607] dark:hover:bg-gray-700 group">
                    <img src="{{ asset('photos/enfants.png') }}" class="h-6 " alt="">

                    <span class="flex-1 ms-3 whitespace-nowrap">My children </span>
                </a>
            </li>


            <li>
                <a href="{{ route('administrationParent') }}"
                    class="flex items-center p-2 text-white rounded-lg dark:text-white hover:bg-[#fb5607] dark:hover:bg-gray-700 group">
                    <img src="{{ asset('photos/administration.png') }}" class="h-6 " alt="">

                    <span class="flex-1 ms-3 whitespace-nowrap">Administration</span>
                </a>
            </li>


            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                        class="w-full flex items-center text-left p-2 text-white rounded-lg dark:text-white hover:bg-red-600 dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-white transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Sign Out</span>
                    </button>
                </form>
            </li>

        </ul>
    </div>
</aside>
