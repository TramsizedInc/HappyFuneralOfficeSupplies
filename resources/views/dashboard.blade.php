<x-app-layout>
    <style>
        /* Custom styles for the carousel simulation */
        .carousel-container {
            display: flex;
            overflow-x: auto;
            scroll-snap-type: x mandatory;
            -webkit-overflow-scrolling: touch;
        }

        .carousel-item {
            flex: 0 0 auto;
            min-width: 300px;
            /* Adjust based on your needs */
            max-width: 300px;
            /* Adjust based on your needs */
            margin-right: 20px;
            /* Space between items */
            padding: 20px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, .1);
            scroll-snap-align: start;
        }

        .carousel-item.active {
            transform: translateX(calc(-25% * var(--scroll-index)));
        }

        #calendar {
            height: 400px;
            /* Adjusted height for better visibility */
            width: 100%;
        }

        .fc-header-title {
            font-weight: bold;
        }

        .fc-prev-button,
        .fc-next-button {
            background-color: transparent;
            border: none;
            font-size: 16px;
            /* Larger for better touch targets */
        }

        .fc-day-top {
            font-weight: bold;
        }

        .fc-weekend {
            background-color: rgba(255, 255, 255, 0.1);
            /* Lighter shade for weekends */
        }

        .fc-today {
            background-color: #e9ecef;
            /* Lighter shade for today */
        }

        .fc-event {
            font-size: 14px;
            /* Slightly larger for readability */
            padding: 6px;
            /* More padding for better touch targets */
            border-radius: 8px;
            /* Softer corners */
        }

        .fc-event:hover {
            background-color: #0056b3;
            /* Darker blue for contrast */
            color: white;
        }

        /* Enhanced styles for better readability and accessibility */
        .card-body {
            font-size: 1rem;
            /* Standard base font size */
            line-height: 1.5;
            /* Improved spacing between lines */
        }

        .card-text {
            margin-bottom: 0.5rem;
            /* Space between text elements */
        }

        .card-title {
            font-weight: bold;
            /* Emphasize the company names */
        }

        /* Optional: Add hover effects for interactive elements */
        .card-title a:hover,
        .card-text a:hover {
            text-decoration: underline;
        }
    </style>
    @php
        $companies = [
            [
                'name' => 'Aevum Internet Temetkezés Kft.',
                'tax_number' => '23414985-2-43',
                'office' => 'Dembinszky',
                'address' => '1071 Budapest, Dembinszky utca 44.',
                'email' => 'dembinszky@aevum.hu',
                'phone' => '+36 1 919 0130',
                'mobile' => '+36 30 229 5279',
            ],
            [
                'name' => 'Aevum Internet Temetkezés Kft.',
                'tax_number' => '23414985-2-43',
                'office' => 'Pap Károly',
                'address' => '1139 Budapest, Pap Károly utca 12.',
                'email' => 'papkarolyutca@aevum.hu',
                'phone' => '+36 1 919 0132',
                'mobile' => '+36 30 253 5258',
            ],
            [
                'name' => 'Aevum Internet Temetkezés Kft.',
                'tax_number' => '23414985-2-43',
                'office' => 'Bécsi út',
                'address' => '1034 Budapest, Bécsi út 141-143.',
                'email' => 'becsiut@aevum.hu',
                'phone' => '+36 1 919 0133',
                'mobile' => '+36 30 576 7216',
            ],
            [
                'name' => 'Aevum Internet Temetkezés Kft.',
                'tax_number' => '23414985-2-43',
                'office' => 'Árpád út',
                'address' => '1042 Budapest, Árpád út 88.',
                'email' => 'arpadut@aevum.hu',
                'phone' => '+36 1 919 0131',
                'mobile' => '+36 30 664 5758',
            ],
            [
                'name' => 'Szomorúfűz Temetkezési Hálózat Kft.',
                'tax_number' => '26704450-2-42',
                'office' => 'Izabella',
                'address' => '1064 Budapest, Izabella u. 65.',
                'email' => 'budapest@temetkezes.hu',
                'phone' => '+36 1 919 0170',
                'mobile' => '+36 30 847 1915',
            ],
            [
                'name' => 'Szomorúfűz Temetkezési Hálózat Kft.',
                'tax_number' => '26704450-2-42',
                'office' => 'Pesti út',
                'address' => '1173 Budapest, Pesti út 41/A.',
                'email' => 'pesti@temetkezes.hu',
                'phone' => '+36 1 919 0171',
                'mobile' => '+36 30 313 7920',
            ],
            [
                'name' => 'Szomorúfűz Temetkezési Hálózat Kft.',
                'tax_number' => '26704450-2-42',
                'office' => 'Nagyenyed',
                'address' => '1123 Budapest, Nagyenyed utca 1.',
                'email' => 'nagyenyed@temetkezes.hu',
                'phone' => '+36 1 919 0886',
                'mobile' => '+36 30 203 2300',
            ],
            [
                'name' => 'Szomorúfűz Temetkezési Hálózat Kft.',
                'tax_number' => '26704450-2-42',
                'office' => 'Thököly',
                'address' => '1146 Budapest, Thököly út 167.',
                'email' => 'thokoly@temetkezes.hu',
                'phone' => '+36 1 919 0172',
                'mobile' => '+36 30 965 1783',
            ],
            [
                'name' => 'Szomorúfűz Temetkezési Hálózat Kft.',
                'tax_number' => '26704450-2-42',
                'office' => 'Szivacs',
                'address' => '1204 Budapest, Szivacs utca 5.',
                'email' => 'szivacs@temetkezes.hu',
                'phone' => '',
                'mobile' => '+36 30 576 7206',
            ],
            [
                'name' => 'Gyászhuszár Kegyeleti Kft.',
                'tax_number' => '24280237-2-43',
                'office' => 'Lenhossék',
                'address' => '1096 Budapest, Lenhossék utca 33.',
                'email' => 'lenhossek@gyaszhuszar.hu',
                'phone' => '+36 1 919 0021',
                'mobile' => '+36 30 633 5677',
            ],
            [
                'name' => 'Gyászhuszár Kegyeleti Kft.',
                'tax_number' => '24280237-2-43',
                'office' => 'Villányi',
                'address' => '1114 Budapest, Villányi út 6.',
                'email' => 'villanyi@gyaszhuszar.hu',
                'phone' => '+36 1 919 0020',
                'mobile' => '+36 30 879 8970',
            ],
            [
                'name' => 'Lélekhajó Szolgáltató Kft.',
                'tax_number' => '23434464-2-43',
                'office' => 'Lélekhajó',
                'address' => '1096 Budapest, Ernő utca 30-34. fszt. 1.',
                'email' => 'info@lelekhajotemetkezes.hu',
                'phone' => '+36 1 919 0165',
                'mobile' => '+36 20 586 8800',
            ],
            [
                'name' => 'Menefrisz Kegyeleti Szolgáltató Kft.',
                'tax_number' => '26132790-2-42',
                'office' => 'Menefrisz',
                'address' => '1156 Budapest, Kontyfa utca 8.',
                'email' => 'info@menefrisztemetkezes.hu',
                'phone' => '',
                'mobile' => '+36 30 780 4804',
            ],
        ];
    @endphp;

    <div class="container py-4">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>Welcome, {{ Auth::user()->name }}</h1>
            </div>
        </div>
        <div class="row">

            <div class="col-6">
                <h3 class="mb-3">Céges infók</h3>
            </div>
            <!-- Insert the navigation buttons here -->
            <div class="col-6 text-right">
                <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                    <i class="fa fa-arrow-left"></i>
                </a>
                <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
                    <i class="fa fa-arrow-right"></i>
                </a>
            </div>
            <div class="col-12">
                <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        @php
                            $counter = 0; // Initialize a counter outside the loop
                        @endphp
                        @foreach ($companies as $index => $company)
                            @if ($index <= 3)
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="card-title">{{ $company['name'] }}</h4>
                                                    <p class="card-text">Adószám: {{ $company['tax_number'] }}</p>
                                                    <p class="card-text">Iróda: {{ $company['office'] }}</p>
                                                    <p class="card-text">Cím: {{ $company['address'] }}</p>
                                                    <p class="card-text">Email: <a
                                                            href="mailto:{{ $company['email'] }}">{{ $company['email'] }}</a>
                                                    </p>
                                                    <p class="card-text">Voip: {{ $company['phone'] }}</p>
                                                    <p class="card-text">Mobilszám: {{ $company['mobile'] }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5>{{ $company['name'] }}</h5>
                                                        <p>Adószám: {{ $company['tax_number'] }}</p>
                                                        <p>Iróda: {{ $company['office'] }}</p>
                                                        <p>Cím: {{ $company['address'] }}</p>
                                                        <p>Email: <a
                                                                href="mailto:{{ $company['email'] }}">{{ $company['email'] }}</a>
                                                        </p>
                                                        <p>Voip: {{ $company['phone'] }}</p>
                                                        <p>Mobilszám: {{ $company['mobile'] }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            @endif
                            @php
                                $counter++; // Increment the counter at the end of each loop iteration
                            @endphp
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
