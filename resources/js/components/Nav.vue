<template>
    <header class="bg-gradient-to-r from-orange-400 to-red-500 py-3 text-black-700">
      <nav class="container">
        <div class="flex justify-between items-center">
          <div>
            <img  width="80px" src="https://cdn3.emoji.gg/emojis/1226_Baby_Yoda.png" alt="">
          </div>
          <ul class="flex items-center">
            <li class="px-2 py-1 hover:bg-amber-200" v-for="(link,i) in navLinks" :key="i">
              <router-link :to="{ name: link.name }">{{ link.text }}</router-link>
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