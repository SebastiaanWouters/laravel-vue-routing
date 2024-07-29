import { createApp, defineAsyncComponent } from 'vue'
const app = createApp({})
app.component('VueCounter', defineAsyncComponent(async () => await import('./vue/Counter.vue')))
app.component('VueConfetti', defineAsyncComponent(async () => await import('./vue/Confetti.vue')))

const root = document.querySelector("#vue-app")

if (root) {
    app.mount(root)
} else {
    console.log("No vue-app found, nothing mounted")
}


