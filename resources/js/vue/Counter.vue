<script setup>
import { ref } from "vue"
    console.log('Hello from counter')
    const counter = ref(0);
</script>

<template>
    <div style="font-weight: 800; margin-block: 1rem;">Vue</div>
    <button @click="counter++">Increment</button>
    <button @click="counter--">Decrement</button>
    <p>{{counter}}</p>
</template>
