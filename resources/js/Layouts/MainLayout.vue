<template>
    <Link href="/">Index Page</Link>&nbsp;
    <Link href="/hello">Show Page</Link>
    <div v-if="flashSuccess" class="success">
        {{ flashSuccess }}
    </div>
    <slot />
</template>

<script setup>
import { computed } from 'vue';
import { Link, usePage } from '@inertiajs/vue3'

const page = usePage();
const flashSuccess = computed(() => page.props.flash.success);

</script>

<style scoped>
.success {
    background-color: green;
    color: white;
}
</style>
