<div class="md:fixed md:flex flex-col md:flex-row md:min-h-screen">
    <div :class="sidebarOpen ? 'w-64' : 'w-24'"
        class="flex flex-col w-full text-gray-700 bg-white dark-mode:text-gray-200 dark-mode:bg-gray-800 flex-shrink-0 transition-width duration-300">
        <div class="flex-shrink-0 px-8 py-4 flex flex-row justify-center">
            <button @click="sidebarOpen = !sidebarOpen" class="rounded-lg focus:outline-none focus:shadow-outline">
                <svg x-show="!sidebarOpen" fill="currentColor" viewBox="0 0 20 20" class="w-6 text-center h-6">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
                <svg x-show="sidebarOpen" fill="currentColor" viewBox="0 0 20 20" class="w-6 text-center h-6">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <nav class="flex-grow bg-white md:block px-4 pb-4 md:pb-0 md:overflow-y-auto">
            <a href="{{ route('dashboard') }}"
                class="text-lg font-semibold tracking-widest text-gray-900 uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline">
                Dashboard
            </a>
            <x-basicdropdown>
                <x-slot:text>
                    Temetés felvételezés
                </x-slot:text>
                <x-slot:content>
                    <x-dropdown-link
                        class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-white rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                        href="{{ route('deceaseds.create') }}">Temetés felvétel</x-dropdown-link>
                </x-slot:content>
            </x-basicdropdown>
            <x-basicdropdown>
                <x-slot:text>
                    Iroda kellékek
                </x-slot:text>
                <x-slot:content>

                    <x-dropdown-link
                        class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                        :href="route('printers.index')">
                        {{ __('Nyomtatók') }}
                    </x-dropdown-link>
                </x-slot:content>
            </x-basicdropdown>
            <x-basicdropdown>
                <x-slot:text>
                    Statisztikák
                </x-slot:text>
                <x-slot:content>

                    <x-dropdown-link
                        class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                        :href="route('getPrinterData')">
                        {{ __('Nyomtatók') }}
                    </x-dropdown-link>

                </x-slot:content>
            </x-basicdropdown>
            <x-basicdropdown>
                <x-slot:text>
                    Egyéb funkciók
                </x-slot:text>
                <x-slot:content>

                    <x-dropdown-link
                        class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                        :href="route('brands.index')">
                        {{ __('Brandek') }}
                    </x-dropdown-link>
                    <x-dropdown-link
                        class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                        :href="route('printerTypes.index')">
                        {{ __('Nyomtató fajták') }}
                    </x-dropdown-link>
                    <x-dropdown-link
                        class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                        :href="route('checkTypes.index')">
                        {{ __('Csekk fajták') }}
                    </x-dropdown-link>
                    <x-dropdown-link
                        class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                        :href="route('offices.index')">
                        {{ __('Irodák') }}
                    </x-dropdown-link>
                </x-slot:content>
            </x-basicdropdown>
            <x-basicdropdown>
                <x-slot:text>
                    Számlák
                </x-slot:text>
                <x-slot:content>

                    <x-dropdown-link
                        class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                        :href="route('checkModels.index')">
                        {{ __('Összes') }}
                    </x-dropdown-link>

                </x-slot:content>
            </x-basicdropdown>

            <x-basicdropdown>
                <x-slot:text>
                    Felhasználó
                </x-slot:text>
                <x-slot:content>


                    <a disabled
                        class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                        href="">
                        {{ Auth::user()->name }}
                    </a>


                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf


                        <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent
                                rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600
                                dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white
                                dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900
                                hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                            :href="route('logout')"
                            onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </a>
                    </form>

                </x-slot:content>
            </x-basicdropdown>
        </nav>
    </div>
</div>


<div class="flex-grow p-6">

</div>




