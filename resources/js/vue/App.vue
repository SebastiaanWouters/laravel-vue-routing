<script setup>
import { defineAsyncComponent, onUnmounted } from 'vue';
import { useComponent, visit, useProps } from '../router';
import app from '../app';
app.component('VueCounter', defineAsyncComponent(async () => await import('./Counter.vue')))
app.component('VueConfetti', defineAsyncComponent(async () => await import('./Confetti.vue')))
app.component('Link', defineAsyncComponent(async () => await import('./Link.vue')))
const component = useComponent();
const props = useProps();

</script>

<template>
    <Link href="/1">Visit 1</Link>
    <Link href="/2">Visit 2</Link>
    <component v-bind="props" :is="component"></component>
</template>
