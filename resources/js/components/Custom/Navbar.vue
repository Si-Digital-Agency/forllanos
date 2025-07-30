<script setup lang="ts">
import { Link } from '@inertiajs/vue3';


</script>

<template>
  <nav class="w-full flex justify-center absolute top-10 z-50">
    <div class="w-1/2 flex justify-between">
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
  </nav>
</template>