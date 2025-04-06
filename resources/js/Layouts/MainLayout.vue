<template>
    <div class="w-96 mx-auto">
        <Navigation />
        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">

        </div>
        <slot></slot>
    </div>
</template>

<script>
import {Link} from '@inertiajs/vue3';
import Navigation from "@/Components/Navigation.vue";
export default {
    name: "MainLayout",
    components:{
        Link,
        Navigation
    }
}
</script>

<style scoped>

</style>
