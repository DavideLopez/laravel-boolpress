import Home from "../pages/Home.vue";
import ContactUs from "../pages/ContactUs.vue";
import PostsIndex from "../pages/Posts.index.vue";
import Blog from "../pages/Blog.vue";
import Page404 from "../pages/404.vue";


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
        path: '/post',
        name: 'commenti',
        component: PostsIndex,
    },
    {
        path: '/blog/:slug',
        name: 'blog',
        component: Blog,
        props: true
    },
    {
        path: "/*",
        name: "404",
        component: Page404,
    }
    
];

export default routes;