<template>
    <a style="margin-right: 0.4rem; cursor: pointer" @click="visit(props.href)">
        <slot></slot>
    </a>
</template>

<script setup lang="ts">
import { visit } from "./../router.js"
const props = defineProps(["href"]);
</script>

<style scoped>

</style>
