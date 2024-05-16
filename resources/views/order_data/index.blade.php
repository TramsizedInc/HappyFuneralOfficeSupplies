<x-app-layout>


    <div class="text-start px-6 py-4 whitespace-nowrap text-sm font-medium">
    </div>
    <div class="flex flex-col">
        <div class="-m-1.5 overflow-x-auto">
            <div class="p-1.5 min-w-full inline-block align-middle">
                <div class="border rounded-lg divide-y divide-gray-200 bg-gray-50 dark:bg-gray-700 dark:border-gray-700 dark:divide-gray-700">
  
                    <div class="overflow-hidden"> 
                        <table data-order='[[ 1, "asc" ]]' data-page-length='25' id="listTable"  style="width:100%"class="display">
                            <thead class="bg-gray-50 dark:bg-gray-700">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Azonosító</th>
                                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Elhunyt neve</th>
                                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Megrendelő neve</th>
                                <th scope="col"  data-class-name="priority" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase" >Halálozás helye</th>

                            </tr>
                            </thead>
                            <tbody class="bg-gray-50 dark:bg-gray-700">
                                
                                @foreach ($orderdatas as $item)
                                <tr>
                                    <th  class="px-6 py-3 text-start text-xs font-medium text-gray-500">{{$item->id}}</th>
                                    <th class="px-6 py-3 text-start text-xs font-medium text-gray-500">{{\App\Models\Deceased_data::all()->find($item->deceased_data_id)->deceased_name}}</th>
                                    <th  class="px-6 py-3 text-start text-xs font-medium text-gray-500">{{\App\Models\CustomerData::all()->find($item->customer_data_id)->customer}}</th>
                                    <th    data-class-name="priority" class="px-6 py-3 text-start text-xs font-medium text-gray-500">{{\App\Models\BirthCertificate::all()->find($item->birth_certificate_id)->death_place}}</th>
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
                responsive: true,
                paginate: true,

            });
            let table = new DataTable('#listTable');
            table.on('click', 'tbody tr', function() {
                let inner_data = table.row(this).data();
                //data consists of the data in the row in order (l->r)
                let id = inner_data[0]; //data[0] shall be the id of order_data
                window.location.href = '/deceaseds/show/' + id;
            });
          
        });

             
    </script>
    </x-app-layout>
    