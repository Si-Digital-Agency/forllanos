<script setup lang="ts">
import { useElementVisibility } from '@vueuse/core';
import AppLogo from '../AppLogo.vue';
import { useTemplateRef } from 'vue';

const line1 = useTemplateRef<HTMLElement>("line1")
const isLine1Visible = useElementVisibility(line1)
const line2 = useTemplateRef<HTMLElement>("line2")
const isLine2Visible = useElementVisibility(line2)
const line3 = useTemplateRef<HTMLElement>("line3")
const isLine3Visible = useElementVisibility(line3)


</script>

<template>
    <main>
        <section class="relative">
            <img src="/assets/img/about/about.jpg" alt="acerca-de-nosotros">
            <header class="absolute  z-10 top-0 left-10 w-1/3 h-full flex flex-col justify-center text-secondary">
                <h2 class="font-ultrabold text-5xl uppercase">Acerca de nosotros</h2>
                <p class="text-2xl font-light pt-4 pb-8">Forllano es una empresa familiar con presencia global, unida
                    por valores compartidos. Priorizamos el servicio a la comunidad, al mismo nivel que la satisfacción
                    de nuestros clientes. Generaciones han tejido sus recuerdos con nosotros, integrándonos en sus
                    sueños y aspiraciones. Por ello, nuestra evolución se centra en ofrecer servicios, experiencias y
                    software innovador, más allá de la simple fabricación de vehículos.</p>

            </header>
        </section>
        <div class="flex flex-col bg-primary items-center py-20 overflow-x-hidden">
            <AppLogo class=" left-10 w-1/3 " class-name="fill-white" />
            <h2 class="font-ultrabold text-5xl uppercase text-secondary py-20">¿Por qué elegirnos?</h2>
            <div :class="isLine1Visible ? 'translate-x-0 opacity-100' : '-translate-x-full opacity-0'"
                class="flex justify-between  w-full duration-500">
                <img src="/assets/img/about/mision.jpg" alt="mision-imagen" class="w-3/5">
                <header class="w-2/5 text-secondary flex flex-col justify-center">
                    <h2 class="text-5xl font-ultrabold">MISIÓN</h2>
                    <p class="w-10/12 text-2xl">«Ser la Compañía líder mundial en productos y servicios automotrices,
                        orientada hacia el consumidor»</p>
                </header>
            </div>
            <hr class="w-full border-primary" ref="line1">
            <div :class="isLine2Visible ? 'translate-x-0 opacity-100' : 'translate-x-full opacity-0'"
                class="flex flex-row-reverse justify-center w-full duration-500">
                <img src="/assets/img/about/vision.jpg" alt="mision-imagen" class="w-3/5">
                <header class="w-2/5 text-secondary flex flex-col justify-center items-center">
                    <h2 class="text-5xl font-ultrabold w-[87%]">VISIÓN</h2>
                    <p class="w-[87%] text-2xl">«Somos una familia global diversa, con una tradición de la cual estamos
                        orgullosos, comprometida con pasión a ofrecer productos y servicios excepcionales»</p>
                </header>
            </div>
            <hr class="w-full border-primary" ref="line2">

            <div :class="isLine3Visible ? 'translate-x-0 opacity-100' : '-translate-x-full opacity-0'"
                class="flex justify-center w-full duration-500">
                <img src="/assets/img/about/valores.jpg" alt="mision-imagen" class="w-3/5">
                <header class="w-2/5 text-secondary flex flex-col justify-center">
                    <h2 class="text-5xl font-ultrabold">VALORES</h2>
                    <p class="w-4/5 text-2xl text-justify">«El cliente es nuestra máxima prioridad, hacemos lo que sea
                        correcto para nuestros clientes, nuestra gente, nuestro ambiente y nuestra sociedad. Mejorando
                        todo lo que hacemos, proporcionamos retornos superiores a nuestros accionistas».</p>
                </header>
            </div>

            <hr class="w-full border-primary" ref="line3">


        </div>
        <section class="relative">
            <!-- <span class="absolute block top-0 w-full h-32 bg-linear-180 from-primary to-transparent"></span> -->
            <img src="/assets/img/about/ubicacion.jpg" alt="acerca-de-nosotros">
            <div class="absolute  z-10 top-2/3 w-full flex justify-center">

                <header class=" w-10/12 h-full flex flex-col justify-center text-secondary">
                    <h2 class="font-ultrabold text-5xl uppercase pb-10">ubicación y contacto</h2>
                    <div class="flex items-center justify-between">
                        <p class="text-2xl font-light pt-4 pb-8">
                            <span class="font-bold">FORLLANO, S.A.</span> <br>
                            Abierto hasta las 17:00 <br>
                            N.º 164 Calle Atarraya Sur <br>
                            Valle de La Pascua, Guárico
                        </p>
                        <img src="/assets/img/about/mapa.jpg" alt="mapa-locacion-forllano" class="w-1/3 rounded-3xl">

                    </div>

                </header>
            </div>
        </section>

        <div class="h-20 w-full bg-primary">
        
        </div>
        <div class="w-full bg-primary flex flex-col items-center">
            <div class="w-10/12 flex justify-between  space-y-2">

                <a href="" target="_blank" class=" flex w-fit items-center  group gap-2">
                    <div class="text-white bg-gray-500 w-10 h-10 rounded-full flex justify-center items-center border border-gray-500 group-hover:text-gray-500 group-hover:bg-white duration-200">
                        <font-awesome-icon :icon="['fas','phone']" class="text-2xl"/>
    
                    </div>
                    <p class="text-white text-2xl">+58 4242884716</p>
                </a>

                <a href="" target="_blank" class=" flex w-fit items-center  group gap-2">
                    <div class="text-white bg-gray-500 w-10 h-10 rounded-full flex justify-center items-center border border-gray-500 group-hover:text-gray-500 group-hover:bg-white duration-200">
                        <font-awesome-icon :icon="['fas','envelope']" class="text-2xl"/>
    
                    </div>
                    <p class="text-white text-2xl">ventas@forllano.com</p>
                </a>

                <a href="" target="_blank" class=" flex w-fit items-center  group gap-2">
                    <div class="text-white bg-gray-500 w-10 h-10 rounded-full flex justify-center items-center border border-gray-500 group-hover:text-gray-500 group-hover:bg-white duration-200">
                        <font-awesome-icon :icon="['fab','instagram']" class="text-2xl"/>
    
                    </div>
                    <p class="text-white text-2xl">@forllano</p>
                </a>

                <a href="" target="_blank" class=" flex w-fit items-center  group gap-2">
                    <div class="text-white bg-gray-500 w-10 h-10 rounded-full flex justify-center items-center border border-gray-500 group-hover:text-gray-500 group-hover:bg-white duration-200">
                        <font-awesome-icon :icon="['fab','whatsapp']" class="text-2xl"/>
    
                    </div>
                    <p class="text-white text-2xl">+58 4242884716</p>
                </a>
            </div>
            
        </div>
    </main>

</template>

<style scoped></style>
