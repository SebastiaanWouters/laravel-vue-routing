import { ref } from "vue"

const component = ref('null')
const props = ref(null)
if (window.vueComponent) {
    component.value = window.vueComponent
}
export async function visit(path) {
    if (path === '1' || path === '/1') {
        const res = await fetch('/1', {
            method: 'GET',
            headers: {
                'Content-Type': 'application/json',
                'boosted': true
            },
        });
        const data = await res.json();
        component.value = data.name;
        props.value = data.props;
        window.history.pushState('page1', 'Page 1', '/1');
    } else if (path === '2' || path === '/2') {
        const res = await fetch('/2', {
            method: 'GET',
            headers: {
                'Content-Type': 'application/json',
                'boosted': true
            },
        });
        const data = await res.json();
        component.value = data.name;
        props.value = data.props;
        window.history.pushState('page2', 'Page 2', '/2');
    }
}

export function useComponent() {
    return component;
}
export function useProps() {
    return props;
}
