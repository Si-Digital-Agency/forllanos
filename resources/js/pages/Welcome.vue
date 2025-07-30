<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
import CustomAppLayout from '../layouts/app/custom/CustomAppLayout.vue';
import AppLogo from '@/components/AppLogo.vue';
import Slider from '@/components/Custom/Slider.vue';
import About from '@/components/Custom/About.vue';
import {Car} from '../types/index';


defineProps<{ cars: Car[] }>();
</script>

<template>
    <Head title="Inicio">
        <link rel="preconnect" href="https://rsms.me/" />
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    </Head>
    <CustomAppLayout>
        <section class="relative">
            <img src="/assets/img/banners/main-banner.jpg" alt="camioneta-everest-banner">
             <AppLogo class="absolute z-10 top-28 left-10 w-1/3 " class-name="fill-white"/>
            <header class="absolute  z-10 top-2/5 left-10 w-1/3 h-fit text-secondary">
                <h2 class="font-ultrabold text-5xl">NUEVA <br>EVEREST</h2>
                <p class="text-2xl font-light pt-4 pb-8">La combinación perfecta de comodidad, tecnología y desempeño.</p>
                <Link href="#" class="px-24 py-2 mt-2 font-bold text-xl rounded bg-gradient-to-t from-[#1e61a4b0] to-[#5d9ad779] hover:from-white hover:to-white hover:text-primary ">
                    Más información
                </Link>
            </header>
        </section>

        <Slider :items="cars ?? []"/>

        <About/>
    </CustomAppLayout>
</template>
