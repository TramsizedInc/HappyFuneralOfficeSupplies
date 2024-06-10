<x-app-layout>
    <div class="container-fluid w-full px-2  text-sm">
        <div class="bg-white shadow-lg rounded-l px-2 pt-8 mb-2">
            <div class="p-6 ">
                <h2 class="text-2xl font-semibold text-gray-800 mb-8">Hűtés díj kalkulátor</h2>
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">

                    <div class="flex flex-col col-span-1">
                        <label class="text-gray-600">Ügyfélfelvételének napja</label>
                        <input type="date" value="2023-12-08"
                            class="text-lg font-semibold border-gray-300 py-2 px-4 rounded-lg">
                        <span class="text-gray-600">péntek</span>
                    </div>

                    <div class="flex flex-col col-span-1">
                        <label class="text-gray-600">Halálozás dátuma</label>
                        <input type="date" value="2023-12-02"
                            class="text-lg font-semibold border-gray-300 py-2 px-4 rounded-lg">
                        <span class="text-gray-600">szombat</span>
                    </div>

                    <div class="flex flex-col col-span-1">
                        <label class="text-gray-600">HvKÉSZ állapot dátuma</label>
                        <input type="date" value="2023-12-11"
                            class="text-lg font-semibold border-gray-300 py-2 px-4 rounded-lg">
                        <span class="text-gray-600">hétfő</span>
                    </div>

                    <div class="flex flex-col col-span-1">
                        <label class="text-gray-600">HvVAN állapot dátuma</label>
                        <input type="date" value="2023-12-12"
                            class="text-lg font-semibold border-gray-300 py-2 px-4 rounded-lg">
                        <span class="text-gray-600">kedd</span>
                    </div>

                    <div class="flex flex-col col-span-1">
                        <label class="text-gray-600">Boncolás történt-e</label>
                        <select class="text-lg font-semibold border-gray-300 py-2 px-4 rounded-lg">
                            <option value="yes">Igen</option>
                        </select>
                    </div>

                    <div class="flex flex-col col-span-1">
                        <label class="text-gray-600">KH választás</label>
                        <select class="text-lg font-semibold border-gray-300 py-2 px-4 rounded-lg">
                            <option>KHMária</option>
                        </select>
                    </div>
                    <div class="flex flex-col col-span-1">
                        <label class="text-gray-600">Hv Kiállítás időpontja</label>
                        <input type="date" value="2023-12-12"
                            class="text-lg font-semibold border-gray-300 py-2 px-4 rounded-lg">
                    </div>

                    <div class="flex flex-col col-span-1">
                        <label class="text-gray-600">KREMAválasztás</label>
                        <select class="text-lg font-semibold border-gray-300 py-2 px-4 rounded-lg">
                            <option>Adytum Budapest</option>
                        </select>
                    </div>

                    <div class="flex flex-col col-span-1">
                        <label class="text-gray-600">Eljárás</label>
                        <select class="text-lg font-semibold border-gray-300 py-2 px-4 rounded-lg">
                            <option>Normál</option>
                        </select>
                    </div>
                    <div class="col-span-4">
                        <label class="text-gray-600">Költségek</label>
                        <table class="min-w-full border-4 border-black">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2 border-b border-r border-black  ">KH Átalány 1</th>
                                    <th class="px-4 py-2 border-b border-black border-r">KH Átalány 2</th>
                                    <th class="px-4 py-2 border-b">PótHűtés</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>

                                    <td class="px-4 py-2 border-b border-r text-center border-black">5</td>
                                    <td class="px-4 py-2 border-b border-r text-center border-black">5</td>
                                    <td class="px-4 py-2  text-center ">1</td>
                                </tr>
                                <tr>

                                    <td class="px-4 py-2 border-b border-r text-center border-black">55 000 Ft</td>
                                    <td class="px-4 py-2 border-b border-r text-center border-black">15 000 Ft</td>
                                    <td class="px-4 py-2  text-center ">5 000 Ft</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>



                    <div class="flex flex-col col-span-1">
                        <label class="text-gray-600">Hűtésdíj számolásának első napja</label>
                        <input type="date" value="2023-12-11"
                            class="text-lg font-semibold border-gray-300 py-2 px-4 rounded-lg">
                    </div>

                    <div class="flex flex-col col-span-1">
                        <label class="text-gray-600">Elszállítási határnap</label>
                        <p class="text-lg font-semibold">számolás</p>
                    </div>

                    <div class="flex flex-col col-span-1">
                        <label class="text-gray-600">Elszállítás határnap</label>
                        <input type="date" value="2023-12-15"
                            class="text-lg font-semibold border-gray-300 py-2 px-4 rounded-lg">
                        <span class="text-gray-600">péntek</span>
                    </div>

                    <div class="flex flex-col col-span-1">
                        <label class="text-gray-600">KH Hűtött napok száma</label>
                        <p class="text-lg font-semibold">4</p>
                    </div>

                    <div class="flex flex-col col-span-1">
                        <label class="text-gray-600">KH Átalány 1</label>
                        <p class="text-lg font-semibold">55 000 Ft</p>
                    </div>

                    <div class="flex flex-col col-span-1">
                        <label class="text-gray-600">KH Átalány 2</label>
                        <p class="text-lg font-semibold">számolás</p>
                    </div>

                    <div class="flex flex-col col-span-1">
                        <label class="text-gray-600">KH PótHD</label>
                        <p class="text-lg font-semibold">számolás</p>
                    </div>

                    <div class="flex flex-col col-span-1">
                        <label class="text-gray-600">HH Shk</label>
                        <p class="text-lg font-semibold">- Ft</p>
                    </div>

                    <div class="flex flex-col col-span-1">
                        <label class="text-gray-600">Krema Átalány</label>
                        <p class="text-lg font-semibold">9 000 Ft</p>
                    </div>

                    <div class="flex flex-col col-span-1">
                        <label class="text-gray-600">Krema nap</label>
                        <p class="text-lg font-semibold">5 nap</p>
                    </div>

                    <div class="flex flex-col col-span-1">
                        <label class="text-gray-600">Visszaszállítás</label>
                        <p class="text-lg font-semibold">2 nap</p>
                    </div>

                    <div class="flex flex-col col-span-1">
                        <label class="text-gray-600">Kellékezés</label>
                        <p class="text-lg font-semibold">2 nap</p>
                    </div>
                    <div class="flex flex-col col-span-1">
                        <label class="text-gray-600">Urna Kiszállítás</label>
                        <p class="text-lg font-semibold">2 nap</p>
                    </div>

                    <div class="flex flex-col col-span-1">
                        <label class="text-gray-600">Átadás</label>
                        <p class="text-lg font-semibold">2 nap</p>
                    </div>
                    <div class="flex flex-col col-span-1">
                        <label class="font-bold text-lg text-gray-600">Hűtésdíjból rendezve</label>
                        <input type="number" class="w-min text-right font-semibold" value="0"
                            class="text-lg font-semibold border-gray-300 py-2 px-4 rounded-lg""></input>
                    </div>

                    <div class="bg-gray-100 px-6 py-4 col-span-4">
                        <p class="text-xl font-bold ">TELJES HŰTÉSDÍJ: <span class="text-red-600">64 000
                                Ft</span>

                            <button
                                class="bg-blue-500 ml-5 text-right hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg">Tovább</button>
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
