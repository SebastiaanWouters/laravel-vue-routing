import { createApp } from 'vue'
import Counter from './vue/Counter.vue'
const app = createApp({})
app.component('VueCounter', Counter)
console.log(Counter)

app.mount('#vue-app')
