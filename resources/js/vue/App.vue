<script setup>
import { defineAsyncComponent, onUnmounted } from 'vue';
import { useComponent, visit } from '../router';
import app from '../app';
app.component('VueCounter', defineAsyncComponent(async () => await import('./Counter.vue')))
app.component('VueConfetti', defineAsyncComponent(async () => await import('./Confetti.vue')))
const component = useComponent();

</script>

<template>
    <button @click="visit('1')">Visit 1</button>
    <button @click="visit('2')">Visit 2</button>
    <component :is="component"></component>
</template>
