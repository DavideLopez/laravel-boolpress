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
         props:['slug'],
         data(){
             return{
                 post: null
             }
         },
         methods:{
            //  fetchPost(){
            //      axios.get(/api/posts/${this.slug}).then(res=>{
            //          console.log(res.data)
            //          console.log('OK')
            //      }).catch(err=>{
            //          console.log(err)
            //          console.log('ERRORE')
            //      })
            //  }
         },
         beforeMount(){
             // console.log(this.$router)
            this.fetchPost()

         }

     }
 </script>