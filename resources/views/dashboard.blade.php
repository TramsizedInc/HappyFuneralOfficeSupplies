<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto  px-4 sm:px-6 lg:py-24 lg:px-8">
        <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">Our service statistics</h2>
        <div class="flex flex-wrap pb-3 mx-4 md:mx-24 lg:mx-0">
            <ul
                class="w-full sm:w-4/5 text-xs sm:text-sm justify-center lg:justify-end items-center flex flex-row space-x-1 mt-6 overflow-hidden mb-4">
                <li><button
                        class="px-4 py-2 bg-indigo-500 rounded-full text-sm text-gray-100 hover:bg-indigo-700 hover:text-gray-200">30
                        days</button></li>
                <li><button
                        class="px-4 py-2 bg-gray-200 rounded-full text-sm text-gray-700 hover:bg-indigo-700 hover:text-gray-200">90
                        days</button></li>
                <li><button
                        class="px-4 py-2 bg-gray-200 rounded-full text-sm text-gray-700 hover:bg-indigo-700 hover:text-gray-200">6
                        months</button></li>
                <li><button
                        class="px-4 py-2 bg-gray-200 rounded-full text-sm text-gray-700 hover:bg-indigo-700 hover:text-gray-200">12
                        months</button></li>
            </ul>
        </div>
        <div class="grid grid-cols-1 gap-5 sm:grid-cols-4 mt-4">
            <x-staticscard>
                <x-slot:name>
                    Nyomtatók
                </x-slot:name>
                <x-slot:value>21 db</x-slot:value>
            </x-staticscard>
            <x-staticscard>
                <x-slot:name>
                    Irodák
                </x-slot:name>
                <x-slot:value>20 db</x-slot:value>
            </x-staticscard>
            <x-staticscard>
                <x-slot:name>
                    Nyomtatók fogyása
                </x-slot:name>
                <x-slot:value>10%</x-slot:value>
            </x-staticscard>
        </div>
    </div>
</x-app-layout>
