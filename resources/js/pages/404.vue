<template>
    <div class="h-screen flex items-center bg-amber-400">
      <div class="container">
        <h1 class="text-[64px]">404</h1>
        <p>Ops. la pagine che cercavi non esiste. vuoi <router-link :to="{ name: 'home'}" >tornare alla HOMMME?</router-link></p>
      </div>
    </div>
  </template>
  
  <script>
    export default {
      
    }
  </script>
  
  <style lang="scss" scoped>
  </style>