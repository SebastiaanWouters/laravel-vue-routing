<script setup>
import { defineAsyncComponent, onUnmounted } from 'vue';
import { useComponent, visit, useProps } from '../router';
import app from '../app';
app.component('VueCounter', defineAsyncComponent(async () => await import('./Counter.vue')))
app.component('VueConfetti', defineAsyncComponent(async () => await import('./Confetti.vue')))
const component = useComponent();
const props = useProps();

</script>

<template>
    <button @click="visit('1')">Visit 1</button>
    <button @click="visit('2')">Visit 2</button>
    <component v-bind="props" :is="component"></component>
</template>
