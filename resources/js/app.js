import "./bootstrap";
import "../css/app.css";

import.meta.glob(["../images/**"]);

import AOS from "aos";
import "aos/dist/aos.css";
AOS.init();

import Alpine from "alpinejs";
window.Alpine = Alpine;
Alpine.start();
