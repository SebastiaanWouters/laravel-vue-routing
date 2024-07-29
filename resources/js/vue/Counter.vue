<script setup>
    import { ref } from "vue"
    import { useGlobalCounter } from "../store";

    const props = defineProps({
        message: { default: 'Hello Vue!' }
    })

    const counter = ref(0);
    const globalCounter = useGlobalCounter()
</script>

<template>
    <div style="font-weight: 800; margin-block: 1rem;">Vue Local Counter</div>
    <button @click="counter++">Increment</button>
    <button @click="counter--">Decrement</button>
    <p>{{counter}}</p>
    <div style="font-weight: 800; margin-block: 1rem;">Vue Global Counter</div>
    <button @click="globalCounter++">Increment</button>
    <button @click="globalCounter--">Decrement</button>
    <p>{{globalCounter}}</p>
    <p>{{props.message}}</p>
</template>
