<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<template>
  <div class="min-h-screen bg-gray-100">
    <nav class="bg-gray-900 text-white px-8 py-4 shadow-lg flex justify-between items-center">
      <div class="text-xl font-bold">Car Bidding System</div>
      <div class="flex gap-6">
        <Link href="/" class="hover:text-gray-400 transition">Home</Link>
        <Link href="/bidders" class="hover:text-gray-400 transition">Bidders</Link>
        <Link href="/cars" class="hover:text-gray-400 transition">Cars</Link>
      </div>
    </nav>
    <div class="container mx-auto p-6">
      <slot />
    </div>
  </div>
</template>
