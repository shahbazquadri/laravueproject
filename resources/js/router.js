import { createRouter, createWebHistory } from "vue-router";
import home from "./pages/Home.vue";
import about from "./pages/About.vue";
import contact from "./pages/Contact.vue";

export const routes = [
    {
        path: "/",
        name: "Home",
        component: home,
    },
    {
        path: "/about",
        name: "About",
        component: about,
    },
    {
        path: "/contact",
        name: "Contact",
        component: contact,
    },
];
const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
