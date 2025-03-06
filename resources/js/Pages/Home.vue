<script setup>
import Layout from '../Layouts/Layout.vue';
</script>

<template>
  <Layout>
    <div class="max-w-lg mx-auto mt-10 bg-white shadow-lg rounded-lg p-6 text-center border border-gray-200">

      <img 
        src="/home/charlesianpangan/midterm/Midterm_InertiaVue/public/storage/cars/ian.jpg" 
        alt="Profile Picture" 
        class="w-32 h-32 mx-auto rounded-full object-cover shadow-md transition-transform transform hover:scale-110 hover:shadow-xl"
      >

      <h1 class="text-2xl font-bold text-gray-700 mt-4">Welcome</h1>
      <p class="text-gray-500 mt-2">Charles Ian Pangan</p>
      <p class="text-gray-500">Bachelor of Science in Information Technology</p>
      <p class="text-gray-500">3rd Year</p>

      <div class="mt-6">
        <a href="https://www.facebook.com/vari.aries.9/" target="_blank">
          <img 
            src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg" 
            alt="Facebook Logo" 
            class="w-8 h-8 mx-auto transition-transform transform hover:scale-125 hover:rotate-12 cursor-pointer"
          >
        </a>
      </div>
    </div>
  </Layout>
</template>

<style scoped>
img {
  transition: all 0.3s ease;
}
</style>
