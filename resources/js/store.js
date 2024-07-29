import { ref } from 'vue'

const globalCounter = ref(0)

export function useGlobalCounter() {
    return globalCounter;
}
