<x-app-layout>


<div class="text-start px-6 py-4 whitespace-nowrap text-sm font-medium">
</div>
<div class="flex flex-col">
    <div class="-m-1.5 overflow-x-auto">
        <div class="p-1.5 min-w-full inline-block align-middle">
            <div class="border rounded-lg dark:border-gray-700 bg-gray-50 dark:bg-gray-700 ">

                <div class="overflow-hidden">
                    <table id="listTable" class="table-auto min-w-full divide-y">
                        <thead class="bg-gray-50 dark:bg-gray-700">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Temetés száma</th>
                            <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Megrendelő neve</th>
                            <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Megrendelő szem.ig. száma</th>
                            <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Elhunyt neve</th>
                            <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Urna típusa</th>
                            <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Halál helye</th>
                            <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Felvétel ideje</th>
                        </tr>
                        </thead>
                        <tbody class="bg-gray-50 dark:bg-gray-700 divide-y divide-gray-200 dark:divide-gray-700">
                            @foreach ($orderdatas as $item)
                            <tr>
                                <td class="px-6 py-3 text-start text-xs font-medium text-gray-500">{{$item->id}}</td>
                                <td class="px-6 py-3 text-start text-xs font-medium text-gray-500">{{\App\Models\CustomerData::all()->find($item->customer_data_id)->customer}}</td>
                                <td class="px-6 py-3 text-start text-xs font-medium text-gray-500">{{\App\Models\CustomerData::all()->find($item->customer_data_id)->id_card_number}}</td>
                                <td class="px-6 py-3 text-start text-xs font-medium text-gray-500">{{\App\Models\Deceased_data::all()->find($item->deceased_data_id)->deceased_name}}</td>
                                <td class="px-6 py-3 text-start text-xs font-medium text-gray-500">{{\App\Models\Urn_k_i_a_data::all()->find($item->_urn_k_i_a_datas_id)->urn_inside_form}}</td>
                                <td class="px-6 py-3 text-start text-xs font-medium text-gray-500">{{\App\Models\BirthCertificate::all()->find($item->birth_certificate_id)->death_place}}</td>
                                <td class="px-6 py-3 text-start text-xs font-medium text-gray-500">{{$item->created_at}}</td>

                            </tr>
                            @endforeach
                   
                        </tbody>
                    </table>
                </div>
                
            </div>
        </div>
    </div>
</div>
<script>
     $(document).ready(function() {
            $('#listTable').DataTable({
                "language": {
                    url: 'https://cdn.datatables.net/plug-ins/2.0.5/i18n/hu.json',
                },
                retrieve: true,
                responsive: true,
                paging: false
            });
            let table = new DataTable('#listTable');

            $('#listTable tbody').on('click', 'tr', function() {
                let inner_data = table.row(this).data(); //data consists of the data in the row in order (l->r)
                let id = inner_data[0]; //data[0] shall be the id of order_data
                window.location.href = '/deceaseds/show/' + id;
            });
        });


</script>
</x-app-layout>
