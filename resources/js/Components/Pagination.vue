<template>
    <div v-if="meta.links.length > 0">
        <div class="flex items-center justify-between border-t border-gray-200 bg-white px-4 py-3 sm:px-6">
            <div class="hidden sm:flex sm:flex-1 sm:items-center sm:justify-between">
                <div>
                    <nav class="isolate inline-flex -space-x-px rounded-md shadow-xs" aria-label="Pagination">

                        <template v-for="link in meta.links">
                            <Link v-if="link.url"  :href="link.url"
                                  :class="
                                  ['relative inline-flex items-center border px-4 py-2 text-sm font-medium focus:z-20',
                                  link.active ? 'z-10 border-indigo-500 bg-indigo-50 text-indigo-600' :
                                  'order-gray-300 bg-white text-gray-500 hover:bg-gray-50']"
                                  v-html="link.label"></Link>
                        </template>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import {Link} from '@inertiajs/vue3'

export default {
    name: "Pagination",
    components: {
        Link
    },
    props: [
        'meta'
    ]
}
</script>

<style scoped>

</style>
