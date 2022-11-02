import Home from "../pages/Home.vue";
import ContactUs from "../pages/ContactUs.vue";
import PostsIndex from "../pages/Posts.index.vue";
import Blog from "../pages/Blog.vue";


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
    }
    
];

export default routes;