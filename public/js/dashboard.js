// function getScreenSizeCategory(width) {
//     if (width < 576) {
//         return 'xs';
//     } else if (width >= 576 && width < 768) {
//         return 'sm';
//     } else if (width >= 768 && width < 992) {
//         return 'md';
//     } else if (width >= 992 && width < 1200) {
//         return 'lg';
//     } else if (width >= 1200 && width < 1400) {
//         return 'xl';
//     } else {
//         return 'xxl';
//     }
// }


// function updateTextSizeClasses(category) {
//     const textElements = document.querySelectorAll('body *');
//     textElements.forEach(element => {
//         // Remove existing text size classes
//         element.classList.remove('text-sm', 'text-md', 'text-lg', 'text-xl', 'text-xxl');

//         // Add the appropriate text size class based on the category
//         switch (category) {
//             case 'sm':
//                 element.classList.add('text-sm');
//                 break;
//             case 'md':
//                 element.classList.add('text-md');
//                 break;
//             case 'lg':
//                 element.classList.add('text-lg');
//                 break;
//             case 'xl':
//                 element.classList.add('text-xl');
//                 break;
//             case 'xxl':
//                 element.classList.add('text-xxl');
//                 break;
//             default:
//                 // For 'xs' category or any unexpected value, do nothing (or handle as needed)
//                 break;
//         }
//     });
// }

// function updateScreenSizeCategory() {
//     const width = window.innerWidth;
//     const category = getScreenSizeCategory(width);

//     // Update text size classes for all text elements in the body
//     updateTextSizeClasses(category);

//     // Update the text content of #screen-size-category to reflect the current size category
//     const screenSizeCategoryDiv = document.getElementById('screen-size-category');
//     screenSizeCategoryDiv.textContent = `Size: ${category}`;
// }

// // Initial call to display the size category when the page loads
// updateScreenSizeCategory();

// // Update the size category and text size whenever the window is resized
// window.addEventListener('resize', updateScreenSizeCategory);
// $(document).ready(function() {




//     let calendar = document.querySelector('.calendar')
//     isLeapYear = (year) => {
//         return (year % 4 === 0 && year % 100 !== 0 && year % 400 !== 0) || (year % 100 === 0 && year %
//             400 === 0)
//     }

//     getFebDays = (year) => {
//         return isLeapYear(year) ? 29 : 28
//     }
//     const month_names = ['Január',
//         'Február',
//         'Március',
//         'Április',
//         'Május',
//         'Június',
//         'Július',
//         'Augusztus',
//         'Szeptember',
//         'Október',
//         'November',
//         'December'
//     ]



//     let month_picker = calendar.querySelector('#month-picker')

//     month_picker.onclick = () => {
//         month_list.classList.add('show')
//     }

//     generateCalendar = (month, year) => {
//         console.log("initial month: " + month)
//         let calendar_days = calendar.querySelector('.calendar-days')
//         let calendar_header_year = calendar.querySelector('#year')

//         let days_of_month = [31, getFebDays(year), 31, 30, 31, 30, 31, 31, 30, 31, 30, 31]

//         calendar_days.innerHTML = ''

//         let currDate = new Date()

//         if (month != 0 && !month) month = currDate.getMonth()
//         if (!year) year = currDate.getFullYear()

//         console.log("selected month: " + month)


//         let curr_month = `${month_names[month]}`
//         month_picker.innerHTML = curr_month
//         calendar_header_year.innerHTML = year

//         // get first day of month

//         let first_day = new Date(year, month, 1)
//         console.log(first_day)

//         for (let i = 0; i <= days_of_month[month] + first_day.getDay() - 2; i++) {
//             let day = document.createElement('div')
//             if (i >= first_day.getDay() - 1) {
//                 day.classList.add('calendar-day-hover')
//                 day.innerHTML = i - first_day.getDay() + 2
//                 day.innerHTML += `<span></span>
//                   <span></span>
//                   <span></span>
//                   <span></span>`
//                 if (i - first_day.getDay() + 2 === currDate.getDate() && year === currDate
//                     .getFullYear() &&
//                     month === currDate.getMonth()) {
//                     day.classList.add('curr-date')
//                 }
//             }
//             calendar_days.appendChild(day)
//         }
//     }

//     let month_list = calendar.querySelector('.month-list')

//     month_names.forEach((e, index) => {
//         let month = document.createElement('div')
//         month.innerHTML = `<div data-month="${index}">${e}</div>`
//         month.querySelector('div').onclick = () => {
//             month_list.classList.remove('show')
//             curr_month.value = index
//             generateCalendar(index, curr_year.value)
//             console.log(index)
//         }
//         month_list.appendChild(month)
//     })


//     let currDate = new Date()

//     let curr_month = {
//         value: currDate.getMonth()
//     }
//     let curr_year = {
//         value: currDate.getFullYear()
//     }

//     generateCalendar(curr_month.value, curr_year.value)

//     document.querySelector('#prev-year').onclick = () => {
//         --curr_year.value
//         generateCalendar(curr_month.value, curr_year.value)
//     }

//     document.querySelector('#next-year').onclick = () => {
//         ++curr_year.value
//         generateCalendar(curr_month.value, curr_year.value)
//     }
// });


// const apiKey = 'cc8bb073d2543cd3861de08c19976eac';
//         const locButton = document.querySelector('.loc-button');
//         const todayInfo = document.querySelector('.today-info');
//         const todayWeatherIcon = document.querySelector('.today-weather i');
//         const todayTemp = document.querySelector('.weather-temp');
//         const daysList = document.querySelector('.days-list');

//         // Mapping of weather condition codes to icon class names (Depending on Openweather Api Response)
//         const weatherIconMap = {
//             '01d': 'sun',
//             '01n': 'moon',
//             '02d': 'sun',
//             '02n': 'moon',
//             '03d': 'cloud',
//             '03n': 'cloud',
//             '04d': 'cloud',
//             '04n': 'cloud',
//             '09d': 'cloud-rain',
//             '09n': 'cloud-rain',
//             '10d': 'cloud-rain',
//             '10n': 'cloud-rain',
//             '11d': 'cloud-lightning',
//             '11n': 'cloud-lightning',
//             '13d': 'cloud-snow',
//             '13n': 'cloud-snow',
//             '50d': 'water',
//             '50n': 'water'
//         };

//         function fetchWeatherData(location) {
//             // Construct the API url with the location and api key
//             const apiUrl = `https://api.openweathermap.org/data/2.5/forecast?q=${location}&appid=${apiKey}&units=metric`;

//             // Fetch weather data from api
//             fetch(apiUrl).then(response => response.json()).then(data => {
//                 // Update todays info
//                 const todayWeather = data.list[0].weather[0].description;
//                 const todayTemperature = `${Math.round(data.list[0].main.temp)}°C`;
//                 const todayWeatherIconCode = data.list[0].weather[0].icon;

//                 todayInfo.querySelector('h2').textContent = new Date().toLocaleDateString('hu', {
//                     weekday: 'long'
//                 });
//                 todayInfo.querySelector('span').textContent = new Date().toLocaleDateString('hu', {
//                     day: 'numeric',
//                     month: 'long',
//                     year: 'numeric'
//                 });
//                 todayWeatherIcon.className = `bx bx-${weatherIconMap[todayWeatherIconCode]}`;
//                 todayTemp.textContent = todayTemperature;

//                 // Update location and weather description in the "left-info" section
//                 const locationElement = document.querySelector('.today-info > div > span');
//                 locationElement.textContent = `${data.city.name}, ${data.city.country}`;

//                 const weatherDescriptionElement = document.querySelector('.today-weather > h3');
//                 weatherDescriptionElement.textContent = todayWeather;

//                 // Update todays info in the "day-info" section
//                 const todayPrecipitation = `${data.list[0].pop}%`;
//                 const todayHumidity = `${data.list[0].main.humidity}%`;
//                 const todayWindSpeed = `${data.list[0].wind.speed} km/h`;

//                 const dayInfoContainer = document.querySelector('.day-info');
//                 dayInfoContainer.innerHTML = `

//               <div>
//                   <span class="title text-uppercase">Csapadék</span>
//                   <span class="value">${todayPrecipitation}</span>
//               </div>
//               <div>
//                   <span class="title text-uppercase">Páratartalom</span>
//                   <span class="value">${todayHumidity}</span>
//               </div>
//               <div>
//                   <span class="title  text-uppercase">Szél sebesség</span>
//                   <span class="value">${todayWindSpeed}</span>
//               </div>

//           `;

//                 // Update next 4 days weather
//                 const today = new Date();
//                 const nextDaysData = data.list.slice(1);

//                 const uniqueDays = new Set();
//                 let count = 0;
//                 daysList.innerHTML = '';
//                 for (const dayData of nextDaysData) {
//                     const forecastDate = new Date(dayData.dt_txt);
//                     const dayAbbreviation = forecastDate.toLocaleDateString('hu', {
//                         weekday: 'short'
//                     });
//                     const dayTemp = `${Math.round(dayData.main.temp)}°C`;
//                     const iconCode = dayData.weather[0].icon;

//                     // Ensure the day isn't duplicate and today
//                     if (!uniqueDays.has(dayAbbreviation) && forecastDate.getDate() !== today.getDate()) {
//                         uniqueDays.add(dayAbbreviation);
//                         daysList.innerHTML += `

//                       <li>
//                           <i class='bx bx-${weatherIconMap[iconCode]}'></i>
//                           <span>${dayAbbreviation}</span>
//                           <span class="day-temp">${dayTemp}</span>
//                       </li>

//                   `;
//                         count++;
//                     }

//                     // Stop after getting 4 distinct days
//                     if (count === 4) break;
//                 }
//             }).catch(error => {
//                 alert(`Error fetching weather data: ${error} (Api Error)`);
//             });
//         }

//         // Fetch weather data on document load for default location (Germany)
//         document.addEventListener('DOMContentLoaded', () => {
//             const defaultLocation = 'Hungary';
//             fetchWeatherData(defaultLocation);
//         });

//         locButton.addEventListener('click', () => {
//             const location = prompt('Add meg a helyzeted :');
//             if (!location) return;

//             fetchWeatherData(location);
//         });