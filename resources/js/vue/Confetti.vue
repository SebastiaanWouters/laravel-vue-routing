<script setup>
  import ConfettiExplosion from "vue-confetti-explosion";
  import { useGlobalCounter } from "../store";

  const props = defineProps({
        message: { default: 'Hello Vue!' }
    })

  const globalCounter = useGlobalCounter();
</script>

<template>
    <div style="display: flex; justify-content: center;">
        <ConfettiExplosion />
    </div>
     <div style="font-weight: 800; margin-block: 1rem;">Vue Global Counter</div>
    <p>{{globalCounter}}</p>
    <p>{{props.message}}</p>
</template>
