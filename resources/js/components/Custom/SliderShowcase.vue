<script setup lang="ts">
import { ref } from 'vue';
import { Car } from '../../types/index';
import { Link } from '@inertiajs/vue3';

const props = defineProps<{ item: Car }>();
const checker = ref<number>(0)
const threeSixty = ref<number>(1)
const threeSixtyQuantity = 35


function getColor(code: string): string {
    return `background: linear-gradient(${code});`
}
function formatPrice(price: number) {
    const formatterUSD = new Intl.NumberFormat('en-US', {
        style: 'currency',
        currency: 'USD'
    });
    return formatterUSD.format(price)
}


function moveThreeSixty(dir: string) {
    if (dir == 'r') {
        console.log(dir);
        if (threeSixty.value == threeSixtyQuantity) {
            threeSixty.value = 0
        } else {

            threeSixty.value = threeSixty.value + 1
        }
    } else {
        if (threeSixty.value == 1) {
            threeSixty.value = threeSixtyQuantity
        } else {
            threeSixty.value = threeSixty.value - 1
        }
    }
}

</script>

<template>
    <section class="w-full">
        <section class="h-[600px] w-full  relative">
            <div v-for="(image, key) in props.item.colors" :key="image.id" class="h-full absolute flex">
                <img v-if="checker == key" :src="`/assets/img/colors/${props.item.code}-${image.code}.jpeg`" :alt="`${props.item.code}-${image.code}-picker`"
                    class="">

            </div>

        </section>
        <div class="flex items-center justify-center gap-4 ">
            <h2 class="text-primary text-xl">Elegir color :</h2>
            <div class="flex items-center gap-2 ">
                <button @click="checker = key" v-for="(colors, key) in props.item.colors" :key="colors.id"
                    class="w-6 h-6 rounded-full block border-2  hover:border-primary cursor-pointer"
                    :style="getColor(String(colors.hex))"
                    :class="checker == key ? 'border-primary' : 'border-transparent'"></button>

            </div>
        </div>
        <h2 class="font-monumental text-2xl text-primary text-center">{{ props.item.colors[checker].name }}</h2>
        <div class="flex items-center flex-col pt-10 gap-10 ">
            <header class="font-ultrabold uppercase w-[95%]">
                <h2 class="text-5xl text-primary">Nueva generacíon</h2>
                <h2 class="text-6xl text-primary">{{ props.item.name }}</h2>
                <h2 class="text-4xl text-accent">{{ formatPrice(props.item.price) }}</h2>
            </header>
            <div class="flex w-[95%]     justify-between ">
                <header class="text-primary">
                    <h2 class="">Motor</h2>
                    <p class="w-2/3 font-bold">{{ props.item.specifications.engine }}</p>
                </header>
                <header class="text-primary">
                    <h2 class="">Tracción</h2>
                    <p class="w-2/3 font-bold">{{ props.item.specifications.drive }}</p>
                </header>
                <header class="text-primary">
                    <h2 class="">Transmisión</h2>
                    <p class="w-2/3 font-bold">{{ props.item.specifications.transmission }}</p>
                </header>
                <header class="text-primary">
                    <h2 class="">Fuerza</h2>
                    <p class="w-2/3 font-bold">{{ props.item.specifications.power }}</p>
                </header>

            </div>
        </div>

        <section v-if="props.item.code.includes('territory')" class="relative">
            <button @click="moveThreeSixty('l')" class="group cursor-pointer rotate-180 absolute top-1/2 left-10">

                <svg class="w-8" id="Capa_2" data-name="Capa 2" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 51.71 138.67">
                    <g id="Capa_1-2" data-name="Capa 1" class="fill-primary group-hover:fill-accent">
                        <path
                            d="m20.79,43.43c-4.01,3.28-7.53,6.15-11.85,9.67C5.91,35.12,3.04,18.09,0,0c17.06,6.33,33.32,12.37,50.6,18.79-3.56,2.94-6.33,5.51-9.39,7.69-2.65,1.89-2.92,3.44-1.16,6.36,20.42,33.74,13.44,76.88-16.31,102.68-3.25,2.82-6.87,3.35-10.69,3.1-3.48-.23-6.25-2.43-7.25-5.67-1.24-4.03-1.96-8.36,1.56-11.9,2.11-2.11,4.37-4.07,6.43-6.23,17.11-17.94,21.01-45.25,9.62-67.18-.67-1.29-1.54-2.48-2.62-4.21Z" />
                    </g>
                </svg>
            </button>
            <div class="h-[560px] w-full b">
                <div v-for="image in threeSixtyQuantity" :key="image">

                    <img v-if="image == threeSixty" :src="`/assets/img/360/${image}.jpg`" :alt="`territory-360-imagen-${image}`" class=" w-full">
                </div>

            </div>


            <button @click="moveThreeSixty('r')" class="group cursor-pointer absolute top-1/2 right-10">

                <svg class="w-8" id="Capa_2" data-name="Capa 2" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 51.71 138.67">
                    <g id="Capa_1-2" data-name="Capa 1" class="fill-primary group-hover:fill-accent">
                        <path
                            d="m20.79,43.43c-4.01,3.28-7.53,6.15-11.85,9.67C5.91,35.12,3.04,18.09,0,0c17.06,6.33,33.32,12.37,50.6,18.79-3.56,2.94-6.33,5.51-9.39,7.69-2.65,1.89-2.92,3.44-1.16,6.36,20.42,33.74,13.44,76.88-16.31,102.68-3.25,2.82-6.87,3.35-10.69,3.1-3.48-.23-6.25-2.43-7.25-5.67-1.24-4.03-1.96-8.36,1.56-11.9,2.11-2.11,4.37-4.07,6.43-6.23,17.11-17.94,21.01-45.25,9.62-67.18-.67-1.29-1.54-2.48-2.62-4.21Z" />
                    </g>
                </svg>
            </button>
            <!-- 360 VIEW  -->
        </section>


        <div class="w-full h-32 relative ">
            <Link href="#"
                class="w-1/4 absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 py-2 border border-white text-center text-xl rounded bg-gradient-to-t from-[#0a2a4a] to-[#5d9ad779] hover:from-white hover:to-white hover:text-primary hover:border-primary ">
            Más detalles
            </Link>

        </div>

        
    </section>


</template>

<style scoped></style>
