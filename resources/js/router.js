import { ref } from "vue"

const component = ref('null')
if (window.vueComponent) {
    component.value = window.vueComponent
}

export function visit(path) {
    if (path === '1') {
        component.value = 'vue-counter';
        window.history.pushState('page1', 'Page 1', '/1');
    } else if(path === '2') {
        component.value = 'vue-confetti';
        window.history.pushState('page2', 'Page 2', '/2');
    }
}

export function useComponent() {
    return component;
}
