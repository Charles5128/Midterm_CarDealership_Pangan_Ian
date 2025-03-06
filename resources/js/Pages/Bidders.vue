<script setup>
import { ref, computed } from 'vue';
import Layout from '../Layouts/Layout.vue';

const props = defineProps({ bidders: Array });

const search = ref("");

const filteredBidders = computed(() =>
  search.value ? props.bidders.filter(b => 
    (b.first_name + ' ' + b.last_name).toLowerCase().includes(search.value.toLowerCase())
  ) : props.bidders
);
</script>

<template>
    <Layout>
      <div class="max-w-4xl mx-auto">
        <h1 class="text-3xl font-semibold text-gray-800 mb-6">Bidders List</h1>

        <input 
          v-model="search" 
          placeholder="Search bidders..." 
          class="w-full p-3 border border-gray-300 rounded-lg focus:ring focus:ring-blue-400"
        />

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
          <div 
            v-for="bidder in filteredBidders" 
            :key="bidder.id" 
            class="bg-white shadow-lg p-6 rounded-lg border border-gray-200"
          >
            <h2 class="font-bold text-xl text-gray-700">{{ bidder.first_name }} {{ bidder.last_name }}</h2>
            <p class="text-gray-500">{{ bidder.address }}</p>
            <p class="text-gray-500">{{ bidder.email }}</p>
          </div>
        </div>
      </div>
    </Layout>
</template>
