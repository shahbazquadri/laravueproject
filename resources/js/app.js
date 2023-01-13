import "./bootstrap";
import "bootstrap/dist/css/bootstrap.min.css";
import "bootstrap";
import crypto from "crypto";

import { createApp } from "vue";
import router from "./router.js";
import App from "./layouts/App.vue";

const app = createApp(App);
app.use(router);
app.mount("#app");

const test = 123;
