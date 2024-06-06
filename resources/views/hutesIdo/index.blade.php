<x-app-layout>
    <div class="container mx-auto p-4 py-8">
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="p-6">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Funeral Details</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                    <div class="flex flex-col">
                        <label class="text-gray-600">Client Intake Date</label>
                        <input type="date" value="2023-12-08"
                            class="text-lg font-semibold border-b-2 border-gray-300 py-2 px-4 rounded-lg">
                    </div>
                    <div class="flex flex-col">
                        <label class="text-gray-600">Date of Death</label>
                        <input type="date" value="2023-12-02"
                            class="text-lg font-semibold border-b-2 border-gray-300 py-2 px-4 rounded-lg">
                    </div>
                    <div class="flex flex-col">
                        <label class="text-gray-600">Preparation Completion Date</label>
                        <input type="date" value="2023-12-11"
                            class="text-lg font-semibold border-b-2 border-gray-300 py-2 px-4 rounded-lg">
                    </div>
                    <div class="flex flex-col">
                        <label class="text-gray-600">Arrangement Status Date</label>
                        <input type="date" value="2023-12-12"
                            class="text-lg font-semibold border-b-2 border-gray-300 py-2 px-4 rounded-lg">
                    </div>

                    <div class="flex flex-col">
                        <label class="text-gray-600">Autopsy Conducted?</label>
                        <select class="text-lg font-semibold border-b-2 border-gray-300 py-2 px-4 rounded-lg">
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                    </div>

                    <div class="flex flex-col">
                        <label class="text-gray-600">Casket Selection</label>
                        <p class="text-lg font-semibold">KHMária</p>
                    </div>
                    <div class="flex flex-col">
                        <label class="text-gray-600">Crematorium Selection</label>
                        <p class="text-lg font-semibold">Adytum Budapest</p><!--select-->
                    </div>

                    <div class="flex flex-col">
                        <label class="text-gray-600">Procedure</label>
                        <p class="text-lg font-semibold">Normal</p>
                    </div>
                    <div class="flex flex-col">
                        <label class="text-gray-600">First Day of Cooling Billing</label>
                        <input type="date" value="2023-12-11"
                            class="text-lg font-semibold border-b-2 border-gray-300 py-2 px-4 rounded-lg">
                    </div>

                    <div class="flex flex-col">
                        <label class="text-gray-600">Deadline for Removal</label>
                        <input type="date" value="2023-12-15"
                            class="text-lg font-semibold border-b-2 border-gray-300 py-2 px-4 rounded-lg">
                    </div>

                    <div class="flex flex-col">
                        <label class="text-gray-600">Number of Cooled Days</label>
                        <p class="text-lg font-semibold">4</p>
                    </div>
                    <div class="flex flex-col">
                        <label class="text-gray-600">Flat Rate 1</label>
                        <p class="text-lg font-semibold">55000</p>
                    </div>
                    <div class="flex flex-col">
                        <label class="text-gray-600">Flat Rate 2</label>
                        <p class="text-lg font-semibold">-</p>
                    </div>
                    <div class="flex flex-col">
                        <label class="text-gray-600">Additional Cooling Billing</label>
                        <p class="text-lg font-semibold">-</p>
                    </div>
                    <div class="flex flex-col">
                        <label class="text-gray-600">Cooling Room Fee</label>
                        <p class="text-lg font-semibold">9000</p>
                    </div>

                    <div class="flex flex-col">
                        <label class="text-gray-600">Crematorium Flat Rate</label>
                        <p class="text-lg font-semibold">-</p>
                    </div>
                    <div class="flex flex-col">
                        <label class="text-gray-600">Cremation Date</label>
                        <input type="date" value=""
                            class="text-lg font-semibold border-b-2 border-gray-300 py-2 px-4 rounded-lg">
                    </div>
                    <div class="flex flex-col">
                        <label class="text-gray-600">Return Transport</label>
                        <p class="text-lg font-semibold">-</p>
                    </div>
                    <div class="flex flex-col">
                        <label class="text-gray-600">Holiday Presentation</label>
                        <p class="text-lg font-semibold">-</p>
                    </div>
                    <div class="flex flex-col">
                        <label class="text-gray-600">Handover</label>
                        <p class="text-lg font-semibold">-</p>
                    </div>
                    <div class="bg-gray-100 px-6 py-4 col-span-2">
                        <p class="text-xl font-bold">TOTAL COOLING COST: <span class="text-red-600">64 000 Ft</span></p>
                    </div>

                    <div class="flex justify-end col-span-2">
                        <button
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg">Tovább</button>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
