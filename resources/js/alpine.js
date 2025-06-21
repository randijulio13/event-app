import Alpine from "alpinejs";
window.Alpine = Alpine;

import persist from "@alpinejs/persist";

import navbar from "./components/navbar";
import eventForm from "./components/event/form";

Alpine.plugin(persist);
Alpine.data("navbarScroll", navbar);
Alpine.data("eventForm", eventForm);

Alpine.start();
