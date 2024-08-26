<script setup>
import ConfettiExplosion from "vue-confetti-explosion";
import {ref} from "vue";

const counter = ref(0);
</script>

<template>
  <div style="display: flex; justify-content: center;">
    <ConfettiExplosion :stageHeight="620"/>
  </div>
  <div style="font-weight: 800; margin-block: 1rem;">Vue</div>
  <button @click="counter++">Increment</button>
  <button @click="counter--">Decrement</button>
  <p>{{ counter }}</p>
</template>
