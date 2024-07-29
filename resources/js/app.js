import { createApp, defineAsyncComponent } from 'vue'
const app = createApp({ template: "<App />" })
app.component('App', defineAsyncComponent(async () => await import('./vue/App.vue')))

const root = document.querySelector("#vue-app")

if (root) {
    app.mount(root)
} else {
    console.log("No vue-app found, nothing mounted")
}

export default app

