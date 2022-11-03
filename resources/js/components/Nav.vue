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

        <!-- <ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" href="#">Active</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#">Disabled</a>
  </li>
</ul> -->
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