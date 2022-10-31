<template>

   <div>
    <section class="mb-12">
      <div class="container">
        <h1> {{ title }}</h1>
      </div>
    </section>
   
    <section class="my-12">
      <div class="container">
        <div class="grid grid-cols-3 gap-8">
         <PostCard v-for="post in posts" :key="post.id" :post="post" />
        </div>
      </div>
    

     <div class="contai">
        link pagine
     </div>
    </section>
  </div>
  
</template>

<script>
import PostCard from '../components/PostCard.vue';

  export default {
    components: {
      PostCard
    },
    data() {
        return {
            title: 'bentornato js (ma anche no)',
            posts: []
        }
    },
    methods: {
      fetchPosts() {
        Axios.get('/api/posts').then((res) => {
          // console.log(res.data)
          const { posts } = res.data
          this.posts = posts
        })
      }
    },
    beforeMount() {
      this.fetchPosts()
    }
  }
</script>

<style lang="scss" scoped>


</style>