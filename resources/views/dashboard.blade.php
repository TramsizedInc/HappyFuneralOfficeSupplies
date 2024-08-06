@extends('layouts.app')

@section('content')
    {{-- <style>
        .left-info {
            width: 260px;
            height: 100%;
            float: left;
            display: flex;
            border-radius: 25px;
            justify-content: center;
            background-image: url("{{ asset('storage/login_card.jpg') }}");
            background-position: center;
            background-size: cover;
            transform: scale(1.03) perspective(200px);
            cursor: pointer;
            box-shadow: 0 0 20px -10px rrgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
        }
    </style> --}}
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="fs-1 fw-bolder">Welcome, {{ Auth::user()->name }}</h1>
        </div>
    </div>
    <div class="row m-3">
        <div class="col-6 border rounded border-warning">
            <div class="col-4 mt-2">
                <h1 class="ps-5 mb-3">Céges infók:</h1>
            </div>
            <div class="d-flex flex-wrap">
                @foreach (\App\Models\Companies::all() as $index => $company)
                    <div class="col-md-4">
                        <div class="accordion accordion-flush" id="accordionFlushExample{{ $index }}">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-heading{{ $index }}">
                                    <button class="accordion-button text-dark b-none collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#flush-collapse{{ $index }}"
                                        aria-expanded="false" aria-controls="flush-collapse{{ $index }}">
                                        {{ $company['name'] }} ({{ $company['office'] }})
                                    </button>
                                </h2>
                                <div id="flush-collapse{{ $index }}" class="accordion-collapse collapse"
                                    aria-labelledby="flush-heading{{ $index }}"
                                    data-bs-parent="#accordionFlushExample{{ $index }}">
                                    <div class="accordion-body">
                                        Adószám: {{ $company['tax_number'] }}<br>
                                        Cím: {{ $company['address'] }}<br>
                                        Email: <a href="mailto:{{ $company['email'] }}">{{ $company['email'] }}</a><br>
                                        Voip: {{ $company['phone'] }}<br>
                                        Mobilszám: {{ $company['mobile'] }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>

        <div class="col-md-3 dark">

            <div class="calendar">
                <div class="calendar-header">
                    <span class="month-picker" id="month-picker">
                        @php
                            $currentYear = \Carbon\Carbon::now()->format('Y');
                            $currentMonthName = \Carbon\Carbon::now()->formatLocalized('%B');
                            $monthNames = [
                                'January' => 'Január',
                                'February' => 'Február',
                                'March' => 'Március',
                                'April' => 'Április',
                                'May' => 'Május',
                                'June' => 'Június',
                                'July' => 'Július',
                                'August' => 'Augusztus',
                                'September' => 'Szeptember',
                                'October' => 'Október',
                                'November' => 'November',
                                'December' => 'December',
                            ];
                            $currentMonthNameHungarian = isset($monthNames[$currentMonthName])
                                ? $monthNames[$currentMonthName]
                                : '';
                        @endphp
                        {{ $currentMonthNameHungarian }}
                    </span>
                    <div class="year-picker">
                        <span class="year-change" id="prev-year">
                            <pre><</pre>
                        </span>
                        <span id="year">{{ $currentYear }}</span>
                        <span class="year-change" id=next-year>
                            <pre>></pre>
                        </span>
                    </div>
                </div>
                <div class="calendar-body">
                    <div class="calendar-week-day">
                        <div>Hétfő</div>
                        <div>Kedd</div>
                        <div>Szerda</div>
                        <div>Csütörtök</div>
                        <div>Péntek</div>
                        <div>Szombat</div>
                        <div>Vasárnap</div>
                    </div>
                    <div class="calendar-days"></div>
                </div>

                <div class="month-list"></div>
            </div>
        </div>


        <div class="col-md-3">
            <div class="weather-widget">
                <div class="left-info">
                    <div class="pic-gradient"></div>
                    <div class="today-info">
                        <h2></h2>
                        <span></span>
                        <div>
                            <i class='bx bx-current-location'></i>
                            <span></span>
                        </div>
                    </div>
                    <div class="today-weather">
                        <i class='bx bx-sun'></i>
                        <h1 class="weather-temp">

                        </h1>
                        <h3></h3>
                    </div>
                </div>

                <div class="right-info">
                    <div class="day-info">
                        <div>
                            <span class="title">PRECIPITATION</span>
                            <span class="value"></span>
                        </div>
                        <div>
                            <span class="title">HUMIDITY</span>
                            <span class="value"></span>
                        </div>
                        <div>
                            <span class="title">WIND SPEED</span>
                            <span class="value"></span>
                        </div>
                    </div>

                    <ul class="days-list">
                        <li>
                            <i class='bx bx-cloud'></i>
                            <span></span>
                            <span class="day-temp"></span>
                        </li>
                        <li>
                            <i class='bx bx-sun'></i>
                            <span></span>
                            <span class="day-temp"></span>
                        </li>
                        <li>
                            <i class='bx bx-cloud-rain'></i>
                            <span></span>
                            <span class="day-temp"></span>
                        </li>
                        <li>
                            <i class='bx bx-cloud-drizzle'></i>
                            <span></span>
                            <span class="day-temp"></span>
                        </li>
                    </ul>

                    <div class="btn-container">
                        <button class="loc-button">Search Location</button>
                    </div>
                </div>

            </div>
        </div>

        <script>
            $(document).ready(function() {
                $('.loc-button').click(function() {
                    const locationInput = $(
                        '#location-input'); // Assuming there's an input with id="location-input"
                    const location = locationInput.val();

                    if (!location) {
                        alert("Please enter a location.");
                        return;
                    }

                    const apiKey =
                    '418b0deb282ab7edb575084d43a375d0'; // Replace YOUR_API_KEY with your actual API key
                    const url = `https://api.weatherapi.com/v1/current.json?key=${apiKey}&q=${location}`;

                    $.getJSON(url, function(data) {
                        console.log(data); // For debugging purposes
                        updateUI(data);
                    }).fail(function(jqXHR, textStatus, errorThrown) {
                        console.error('Error:', textStatus, errorThrown);
                    });
                });

                function updateUI(data) {
                    const currentLocation = data.location.name;
                    const currentTemp = data.current.temp_c; // Assuming Celsius
                    const currentCondition = data.current.condition.text;
                    console.log(currentLocation)
                    // Update today's info
                    $('.today-info span:nth-child(2)').text(`${data.location.localtime.split(' ')[0]}`);
                    $('.today-info div span').text(`${currentLocation}, ${data.location.country}`);
                    $('.today-weather .weather-temp').text(`${currentTemp}°C`);
                    $('.today-weather h3').text(currentCondition);

                    // Clear existing forecast items
                    $('.days-list li').remove();

                    // Update day forecast
                    const forecastDays = ['Sat', 'Sun', 'Mon', 'Tue'];
                    data.forecast.forEach((day, index) => {
                        const iconClass = day.day.condition.icon;
                        const temp = day.day.maxtemp_c; // Assuming Celsius
                        const condition = day.day.condition.text;

                        $('<li>').append(
                            `<i class="${iconClass}"></i><span>${forecastDays[index]}</span><span class="day-temp">${temp}°C</span>`
                        ).appendTo('.days-list');
                    });
                }
            });



            let calendar = document.querySelector('.calendar')
            isLeapYear = (year) => {
                return (year % 4 === 0 && year % 100 !== 0 && year % 400 !== 0) || (year % 100 === 0 && year % 400 === 0)
            }

            getFebDays = (year) => {
                return isLeapYear(year) ? 29 : 28
            }
            const month_names = ['Január',
                'Február',
                'Március',
                'Április',
                'Május',
                'Június',
                'Július',
                'Augusztus',
                'Szeptember',
                'Október',
                'November',
                'December'
            ]



            let month_picker = calendar.querySelector('#month-picker')

            month_picker.onclick = () => {
                month_list.classList.add('show')
            }

            generateCalendar = (month, year) => {
                console.log("initial month: " + month)
                let calendar_days = calendar.querySelector('.calendar-days')
                let calendar_header_year = calendar.querySelector('#year')

                let days_of_month = [31, getFebDays(year), 31, 30, 31, 30, 31, 31, 30, 31, 30, 31]

                calendar_days.innerHTML = ''

                let currDate = new Date()

                if (month != 0 && !month) month = currDate.getMonth()
                if (!year) year = currDate.getFullYear()

                console.log("selected month: " + month)


                let curr_month = `${month_names[month]}`
                month_picker.innerHTML = curr_month
                calendar_header_year.innerHTML = year

                // get first day of month

                let first_day = new Date(year, month, 1)
                console.log(first_day)

                for (let i = 0; i <= days_of_month[month] + first_day.getDay() - 2; i++) {
                    let day = document.createElement('div')
                    if (i >= first_day.getDay() - 1) {
                        day.classList.add('calendar-day-hover')
                        day.innerHTML = i - first_day.getDay() + 2
                        day.innerHTML += `<span></span>
                        <span></span>
                        <span></span>
                        <span></span>`
                        if (i - first_day.getDay() + 2 === currDate.getDate() && year === currDate.getFullYear() &&
                            month === currDate.getMonth()) {
                            day.classList.add('curr-date')
                        }
                    }
                    calendar_days.appendChild(day)
                }
            }

            let month_list = calendar.querySelector('.month-list')

            month_names.forEach((e, index) => {
                let month = document.createElement('div')
                month.innerHTML = `<div data-month="${index}">${e}</div>`
                month.querySelector('div').onclick = () => {
                    month_list.classList.remove('show')
                    curr_month.value = index
                    generateCalendar(index, curr_year.value)
                    console.log(index)
                }
                month_list.appendChild(month)
            })


            let currDate = new Date()

            let curr_month = {
                value: currDate.getMonth()
            }
            let curr_year = {
                value: currDate.getFullYear()
            }

            generateCalendar(curr_month.value, curr_year.value)

            document.querySelector('#prev-year').onclick = () => {
                --curr_year.value
                generateCalendar(curr_month.value, curr_year.value)
            }

            document.querySelector('#next-year').onclick = () => {
                ++curr_year.value
                generateCalendar(curr_month.value, curr_year.value)
            }
        </script>
        <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
    @endsection
