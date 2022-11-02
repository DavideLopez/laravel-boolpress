import Home from "../pages/Home.vue";
import ContactUs from "../pages/ContactUs.vue";
import Blog from "../pages/Blog.vue";
import Posts from "../pages/Posts.index.vue";


const routes = [
    {
        path: '/',
        name: 'home',
        component: Home,
    },
    {
        path: '/contatti',
        name: 'contact-us',
        component: ContactUs,
    },
    {
        path: '/blog/:slug',
        name: 'blog',
        component: Blog,
    },
    {
        path: '/post',
        name: 'commenti',
        component: Posts.index,
    },
];

export default routes;