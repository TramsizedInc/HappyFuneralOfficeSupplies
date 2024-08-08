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
        <div class="col-md-6 col-sm-12 col-xs-6 border rounded border-warning">
            <div class="col-4 mt-2">
                <h1 class="ps-5 mb-3">Céges infók:</h1>
            </div>
            <div class="d-flex flex-wrap">
                @foreach (\App\Models\Companies::all() as $index => $company)
                    <div class="col-md-3">
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

        <div class="col-md-3 col-sm-12 col-xs-6 dark">

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


        <div class="col-md-3 col-sm-12 col-xs-6">
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
                            <span class="title">Szél sebesség</span>
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




                let calendar = document.querySelector('.calendar')
                isLeapYear = (year) => {
                    return (year % 4 === 0 && year % 100 !== 0 && year % 400 !== 0) || (year % 100 === 0 && year %
                        400 === 0)
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
                            if (i - first_day.getDay() + 2 === currDate.getDate() && year === currDate
                                .getFullYear() &&
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
            });
        </script>
        <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">

        <script>
            const apiKey = 'cc8bb073d2543cd3861de08c19976eac';
            const locButton = document.querySelector('.loc-button');
            const todayInfo = document.querySelector('.today-info');
            const todayWeatherIcon = document.querySelector('.today-weather i');
            const todayTemp = document.querySelector('.weather-temp');
            const daysList = document.querySelector('.days-list');

            // Mapping of weather condition codes to icon class names (Depending on Openweather Api Response)
            const weatherIconMap = {
                '01d': 'sun',
                '01n': 'moon',
                '02d': 'sun',
                '02n': 'moon',
                '03d': 'cloud',
                '03n': 'cloud',
                '04d': 'cloud',
                '04n': 'cloud',
                '09d': 'cloud-rain',
                '09n': 'cloud-rain',
                '10d': 'cloud-rain',
                '10n': 'cloud-rain',
                '11d': 'cloud-lightning',
                '11n': 'cloud-lightning',
                '13d': 'cloud-snow',
                '13n': 'cloud-snow',
                '50d': 'water',
                '50n': 'water'
            };

            function fetchWeatherData(location) {
                // Construct the API url with the location and api key
                const apiUrl = `https://api.openweathermap.org/data/2.5/forecast?q=${location}&appid=${apiKey}&units=metric`;

                // Fetch weather data from api
                fetch(apiUrl).then(response => response.json()).then(data => {
                    // Update todays info
                    const todayWeather = data.list[0].weather[0].description;
                    const todayTemperature = `${Math.round(data.list[0].main.temp)}°C`;
                    const todayWeatherIconCode = data.list[0].weather[0].icon;

                    todayInfo.querySelector('h2').textContent = new Date().toLocaleDateString('hu', {
                        weekday: 'long'
                    });
                    todayInfo.querySelector('span').textContent = new Date().toLocaleDateString('hu', {
                        day: 'numeric',
                        month: 'long',
                        year: 'numeric'
                    });
                    todayWeatherIcon.className = `bx bx-${weatherIconMap[todayWeatherIconCode]}`;
                    todayTemp.textContent = todayTemperature;

                    // Update location and weather description in the "left-info" section
                    const locationElement = document.querySelector('.today-info > div > span');
                    locationElement.textContent = `${data.city.name}, ${data.city.country}`;

                    const weatherDescriptionElement = document.querySelector('.today-weather > h3');
                    weatherDescriptionElement.textContent = todayWeather;

                    // Update todays info in the "day-info" section
                    const todayPrecipitation = `${data.list[0].pop}%`;
                    const todayHumidity = `${data.list[0].main.humidity}%`;
                    const todayWindSpeed = `${data.list[0].wind.speed} km/h`;

                    const dayInfoContainer = document.querySelector('.day-info');
                    dayInfoContainer.innerHTML = `

            <div>
                <span class="title text-uppercase">Csapadék</span>
                <span class="value">${todayPrecipitation}</span>
            </div>
            <div>
                <span class="title text-uppercase">Páratartalom</span>
                <span class="value">${todayHumidity}</span>
            </div>
            <div>
                <span class="title  text-uppercase">Szél sebesség</span>
                <span class="value">${todayWindSpeed}</span>
            </div>

        `;

                    // Update next 4 days weather
                    const today = new Date();
                    const nextDaysData = data.list.slice(1);

                    const uniqueDays = new Set();
                    let count = 0;
                    daysList.innerHTML = '';
                    for (const dayData of nextDaysData) {
                        const forecastDate = new Date(dayData.dt_txt);
                        const dayAbbreviation = forecastDate.toLocaleDateString('hu', {
                            weekday: 'short'
                        });
                        const dayTemp = `${Math.round(dayData.main.temp)}°C`;
                        const iconCode = dayData.weather[0].icon;

                        // Ensure the day isn't duplicate and today
                        if (!uniqueDays.has(dayAbbreviation) && forecastDate.getDate() !== today.getDate()) {
                            uniqueDays.add(dayAbbreviation);
                            daysList.innerHTML += `
                
                    <li>
                        <i class='bx bx-${weatherIconMap[iconCode]}'></i>
                        <span>${dayAbbreviation}</span>
                        <span class="day-temp">${dayTemp}</span>
                    </li>

                `;
                            count++;
                        }

                        // Stop after getting 4 distinct days
                        if (count === 4) break;
                    }
                }).catch(error => {
                    alert(`Error fetching weather data: ${error} (Api Error)`);
                });
            }

            // Fetch weather data on document load for default location (Germany)
            document.addEventListener('DOMContentLoaded', () => {
                const defaultLocation = 'Hungary';
                fetchWeatherData(defaultLocation);
            });

            locButton.addEventListener('click', () => {
                const location = prompt('Add meg a helyzeted :');
                if (!location) return;

                fetchWeatherData(location);
            });
        </script>
    @endsection
