<template>
    <span class="iconify" :data-icon="icon" :style="style" :class="className"></span>
  </template>
  
  <script setup lang="ts">
  defineProps({
    icon: {
      type: String,
      required: true
    },
    className: {
      type: String,
      default: ''
    },
    style: {
      type: Object,
      default: () => ({})
    }
  });
  </script>
  
  <style scoped>
  .iconify {
    display: inline-block;
    font-size: inherit; /* Adjust size based on parent */
  }
  </style>
  