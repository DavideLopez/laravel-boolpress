<template>
    <header>
        <nav class="container">
            <div class="flex">
                <div>Logo</div>
                <ul class="flex">
                    <li v-for="(link,i) in navLinks" :key="i">
                        <router-link :to="{name: link.name}">{{link.text}}</router-link>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
</template>

<script>
    export default {
     data(){
        return{
            navLinks:[
                {
                    text:'Home',
                    path:'/',
                    name:'home'
                },
                {
                    text:'Chi Siamo',
                    path:'/contatti',
                    name:'contact-us'
                },
                {
                    text:'Blog',
                    path:'/post',
                    name:'commenti'
                }
            ]
        }
     }
    }
</script>



<style lang="scss" scoped>
</style>