<template>
    <div class="bg-gray-200 rounded-full">
        <img
            v-if="showImg"
            :src="src"
            :alt="alt"
            class="object-cover w-full h-full rounded-full"
            @error="showImg = false"
        />
    </div>
</template>
<script setup lang="ts">
import { ref } from 'vue'

defineProps<{
    src: string
    alt?: string
}>()

const showImg = ref(true)
</script>