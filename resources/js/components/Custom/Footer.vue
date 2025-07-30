<script setup lang="ts">
import { Link } from '@inertiajs/vue3';


</script>

<template>
  <footer class="w-full flex flex-col justify-center items-center bg-primary h-20 gap-5  py-24">
    <div class="w-10/12 flex justify-evenly border-y py-4">
      <Link href="#" class="relative group">
      <p class="text-secondary"> Vehículos</p>
      <div class="absolute bottom-0 left-0 bg-accent h-[1px] w-0 transition-all duration-200 group-hover:w-full" />
      </Link>
      <Link href="#" class="relative group">
      <p class="text-secondary"> Acerca de Forllano</p>
      <div class="absolute bottom-0 left-0 bg-accent h-[1px] w-0 transition-all duration-200 group-hover:w-full" />
      </Link>
      <Link href="#" class="relative group">
      <p class="text-secondary"> Contacto</p>
      <div class="absolute bottom-0 left-0 bg-accent h-[1px] w-0 transition-all duration-200 group-hover:w-full" />
      </Link>
      
    </div>
    <p class=" text-xl uppercase text-secondary/80  text-center">2025 forllano - todos los derechos reservados</p>
</footer>
</template>