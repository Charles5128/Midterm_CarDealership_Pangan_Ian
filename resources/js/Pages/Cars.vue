<script setup>
import { ref, computed } from 'vue';
import Layout from '../Layouts/Layout.vue';

const props = defineProps({ cars: Array });

const search = ref("");

const filteredCars = computed(() =>
  search.value ? props.cars.filter(c => 
    c.make.toLowerCase().includes(search.value.toLowerCase()) || 
    c.model.toLowerCase().includes(search.value.toLowerCase())
  ) : props.cars
);
</script>

<template>
    <Layout>
      <div class="max-w-5xl mx-auto">
        <h1 class="text-3xl font-semibold text-gray-800 mb-6">Available Cars</h1>

        <input 
          v-model="search" 
          placeholder="Search cars..." 
          class="w-full p-3 border border-gray-300 rounded-lg focus:ring focus:ring-blue-400"
        />

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">
          <div 
            v-for="car in filteredCars" 
            :key="car.id" 
            class="bg-white shadow-lg rounded-lg overflow-hidden border border-gray-200"
          >
            <img 
              v-if="car.image" 
              :src="'/storage/' + car.image" 
              alt="Car Image" 
              class="w-full h-48 object-cover"
            >
            <div class="p-4">
              <h2 class="font-bold text-lg text-gray-700">{{ car.make }} {{ car.model }}</h2>
              <p class="text-gray-500">Year: {{ car.year }}</p>
              <p class="text-gray-500">Miles: {{ car.miles }}</p>
            </div>
          </div>
        </div>
      </div>
    </Layout>
</template>
