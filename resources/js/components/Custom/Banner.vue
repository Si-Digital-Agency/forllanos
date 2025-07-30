<script setup lang="ts">
import { useElementVisibility } from '@vueuse/core';
import { ref, useTemplateRef } from 'vue';

interface Car {
    id: number,
    name: string,
    code: string,
    header: string,
    title: string,
    description: string,
    price: number,
    active_position: number
}

const props = defineProps<{ car: Car }>()
const model = defineModel<boolean>()
const viewCheck = useTemplateRef('check')
const targetIsVisible = useElementVisibility(viewCheck)

const classActive = ref<string>("")

function addLinebreak(title: string): string {
    return title.replace(" ", '<br>')
}

</script>

<template>
    <div class="relative w-[99vw]">
        <img :src="`/assets/img/banners/${props.car.code}-banner.jpg`" :alt="`${props.car.code}-banner`">

        <header class="absolute  z-10 top-28 left-10 w-1/3 h-fit text-primary">
            <h2 :class="targetIsVisible ? 'opacity-100 -translate-y-6' : 'opacity-0 translate-y-0'"
                class="font-ultrabold text-5xl uppercase duration-200 " v-html="addLinebreak(props.car.name)" />
            <p :class="targetIsVisible ? 'opacity-100 -translate-y-6' : 'opacity-0 translate-y-0'"
                class="text-3xl pt-4 pb-8 w-4/5 duration-200 delay-300">{{ props.car.header }}</p>
        </header>
        <div :class="classActive"
            class="group absolute z-10 bottom-0  w-full h-56 flex justify-center items-center group gradient" />
        <div 
            class="group absolute z-10 bottom-0  w-full h-20 flex justify-center items-center group gradient gradient-active" />



        <div class=" absolute z-10 bottom-0  w-full h-44 flex justify-center items-center">

            <button @click="model = true" :class="targetIsVisible ? 'opacity-100 -translate-y-6' : 'opacity-0 translate-y-0'"
                @mouseenter="classActive = 'gradient-active'" @mouseleave="classActive = ''"
                class="px-24 h-fit py-2  text-xl text-secondary rounded bg-gradient-to-t from-[#1e61a4b0] to-[#5d9ad779] cursor-pointer duration-200 delay-500">
                Explora la {{ props.car.name }}
            </button>
        </div>

        <div ref="check" class="h-1/2 w-[1px] bottom-0 right-0 absolute z-10">

        </div>
    </div>
</template>

<style scoped>
.gradient {
    opacity: 0;
    background: linear-gradient(0deg, white, transparent);
    transition: 200ms;
}

.gradient-active {
    opacity: 1 !important;
}

.slide-fade-enter-active {
    transition: all 0.3s ease-out;
}

.slide-fade-leave-active {
    transition: all 0.8s cubic-bezier(1, 0.5, 0.8, 1);
}

.slide-fade-enter-from,
.slide-fade-leave-to {
    transform: translateY(40px);
    opacity: 0;
}
</style>
