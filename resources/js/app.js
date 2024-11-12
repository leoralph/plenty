import "./bootstrap";

import { Livewire, Alpine } from "../../vendor/livewire/livewire/dist/livewire.esm";

window.Alpine = Alpine;

import { chart } from "./chart";
Alpine.data("chart", chart);

Livewire.start();
