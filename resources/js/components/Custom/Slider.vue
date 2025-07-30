<script setup lang="ts">
import { computed, ref, useTemplateRef, watch } from 'vue';
import Banner from './Banner.vue';
import SliderShowcase from './SliderShowcase.vue';
import type { Car } from '../../types/index.d.ts';
import { useWindowScroll } from '@vueuse/core';

const el = useTemplateRef<HTMLElement>('el')
const content = useTemplateRef<HTMLElement>('content')
const { y } = useWindowScroll()
const props = defineProps<{ items: Car[] }>();
const counter = ref<number>(0)
const itemsLength: number = props.items.length - 1
const activateModal = ref<boolean>(false)

const moveFactor: number = parseFloat((100 / props.items.length).toFixed(2))

const sliderMoveStyle = computed(() => {
    return `transform:translateX(-${counter.value * moveFactor}%)`
})

const activeCar = computed(() => {
    return props.items[counter.value]
})

function moveSlider(dir: string) {
    if (dir == 'r') {
        if (counter.value == itemsLength) {
            counter.value = 0
        } else {

            counter.value = counter.value + 1
        }
    } else {
        if (counter.value == 0) {
            counter.value = itemsLength
        } else {
            counter.value = counter.value - 1
        }
    }
    activateModal.value = false
}

function scrollTo() {
    el.value?.scrollIntoView({ behavior: 'smooth' })
    activateModal.value = false
}


watch(activateModal, () => {
    if (activateModal.value == false) {
        scrollTo()
    }
})
</script>

<template>

    <main ref="el">

        <section class="w-full  relative">
            <button class="absolute z-10 top-1/2 left-10 text-6xl   group cursor-pointer" @click="moveSlider('l')">
                <font-awesome-icon :icon="['fas', 'chevron-circle-left']"
                    class=" text-gray-800/60 group-hover:text-primary rounded-full absolute z-20 duration-200" />
                <font-awesome-icon :icon="['fas', 'chevron-circle-left']"
                    class="text-secondary/60 rounded-full absolute z-10" />
            </button>
            <div class="overflow-hidden w-full  ">
                <div class="flex w-fit duration-500" :style="sliderMoveStyle">
                    <Banner v-model="activateModal" v-for="car in props.items" :key="car.id" :car="car" />
                </div>
            </div>
            <button class="absolute z-10 top-1/2 right-10 text-6xl   group cursor-pointer" @click="moveSlider('r')">
                <font-awesome-icon :icon="['fas', 'chevron-circle-right']"
                    class=" text-gray-800/60 group-hover:text-primary rounded-full absolute z-20 duration-200 right-0" />
                <font-awesome-icon :icon="['fas', 'chevron-circle-right']"
                    class="text-secondary/60 rounded-full absolute z-10 right-0" />
            </button>
        </section>

        <div ref="content">

                <SliderShowcase v-if="activateModal" :item="activeCar" />
        </div>

        <div v-if="activateModal" class="w-full flex justify-center">
            <button @click="scrollTo()" class=" text-3xl group cursor-pointer relative top-0 ">
                <font-awesome-icon :icon="['fas', 'chevron-circle-up']"
                    class=" text-gray-800/60 group-hover:text-primary rounded-full relative z-20 duration-200" />
                <font-awesome-icon :icon="['fas', 'chevron-circle-up']"
                    class="text-secondary/60 rounded-full absolute z-00" />
            </button>
        </div>



    </main>

</template>

<style scoped>



</style>