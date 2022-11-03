<template>
    <div v-if="post">
     <section>
         <div class="container">
         <h1>dettaglio articolo</h1>
         <p>{{slug}}</p>
         <h3>Titolo del post : {{ post.title }}</h3>
         <p>Creato il {{ post.date }}</p>
         <h4 v-if="post.category">Categoria = {{ post.category?.name }}</h4>
         <Tags :tags="post.tags"/>
            Contenuto : <div v-html="post.content"> </div>
         </div>
     </section>
    </div>
 </template>
 
 <script>
import Tags from '../components/Tags.vue'
 
 
    export default {
  components: { Tags },
        props:['slug'],
        data(){
            return{
                post: null
            }
        },
        methods:{
            fetchPost(){
                // console.log(this.$route.params.slug)
                // const slug = this.$route.params.slug;
                axios.get(`/api/posts/${this.slug}`).then(res => {
                    console.log(res)
                    console.log('OK')
                    console.log(this.slug)
                    const {post} = res.data
                    this.post = post
                }).catch(err=>{
                    console.log(err)
                    console.log('ERRORE')
                    const { status } = err.response;
                //redirect page 404
                if (status === 404) {
                    this.$router.replace({ name: "404" });
                }
                })
                
            } 
        },
        beforeMount(){
            // console.log(this.$router)
        this.fetchPost()

        }

    }
</script>