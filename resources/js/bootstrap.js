import axios from "axios";
window.axios = axios;

import Swiper from "swiper";
window.Swiper = Swiper;
import "swiper/css";

window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";
