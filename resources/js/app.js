

import Alpine from 'alpinejs';
import { Select, Datetimepicker, Input, initTE,  } from "tw-elements";
import flatpickr from "flatpickr";
window.Alpine = Alpine;

Alpine.start();

flatpickr(".date-flatpickr");

initTE({Datetimepicker, Input, Select });
