<template>
    <div>
     <section>
         <div class="container">
         <h1>dettaglio articolo</h1>
         <p>{{slug}}</p>
         </div>
     </section>
    </div>
 </template>
 
 <script>
 
 
    export default {
        // props: ['slug'],
        data(){
            return{
                post: null
            }
        },
        methods:{
            fetchPost(){
                console.log(this.$route.params.slug)
                axios.get(`/api/posts/${this.$route.params.slug}`).then(res => {
                    console.log(res)
                    console.log('OK')
                }).catch(err=>{
                    console.log(err)
                    console.log('ERRORE')
                })
                
            } 
        },
        beforeMount(){
            // console.log(this.$router)
        this.fetchPost()

        }

    }
</script>