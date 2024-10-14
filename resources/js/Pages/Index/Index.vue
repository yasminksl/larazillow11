<template>
        <div>
            Index
        </div>
        <div>
            The message is {{ message }}
        </div>
</template>

<script setup>
const props = defineProps({
    message: String,
})
</script>
