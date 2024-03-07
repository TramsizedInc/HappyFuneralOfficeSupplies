import Alpine from 'alpinejs';
import parsley from 'parsleyjs';
import { Select, Datetimepicker, Input, initTE,  } from "tw-elements";
import flatpickr from "flatpickr";
window.Alpine = Alpine;

Alpine.start();

flatpickr(".date-flatpickr");
parsley.parsley();

initTE({Datetimepicker, Input, Select });
