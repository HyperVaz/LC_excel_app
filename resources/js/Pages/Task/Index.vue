<template>
    <div>
        НЕМОЖЕЦА

        <div v-if="tasks">
            <div class="not-prose isolate">
                <figure
                    class="flex flex-col gap-1 rounded-xl bg-gray-950/5 p-1 inset-ring inset-ring-gray-950/5 dark:bg-white/10 dark:inset-ring-white/10">
                    <div
                        class="not-prose overflow-auto rounded-lg bg-white outline outline-white/5 dark:bg-gray-950/50">
                        <div class="my-8 overflow-hidden">
                            <table class="w-full table-auto border-collapse text-sm">
                                <thead>
                                <tr>
                                    <th class="border-b border-gray-200 p-4 pt-0 pb-3 pl-8 text-left font-medium text-gray-400 dark:border-gray-600 dark:text-gray-200">
                                        id
                                    </th>
                                    <th class="border-b border-gray-200 p-4 pt-0 pb-3 pl-8 text-left font-medium text-gray-400 dark:border-gray-600 dark:text-gray-200">
                                        User
                                    </th>
                                    <th class="border-b border-gray-200 p-4 pt-0 pb-3 text-left font-medium text-gray-400 dark:border-gray-600 dark:text-gray-200">
                                        File
                                    </th>
                                    <th class="border-b border-gray-200 p-4 pt-0 pr-8 pb-3 text-left font-medium text-gray-400 dark:border-gray-600 dark:text-gray-200">
                                        Status
                                    </th>

                                    <th class="border-b border-gray-200 p-4 pt-0 pr-8 pb-3 text-left font-medium text-gray-400 dark:border-gray-600 dark:text-gray-200">
                                        Failed Rows
                                    </th>
                                </tr>
                                </thead>
                                <tbody class="bg-white dark:bg-gray-800">
                                <tr v-for="task in tasks.data">
                                    <td class="border-b border-gray-100 p-4 pl-8 text-gray-500 dark:border-gray-700 dark:text-gray-400">
                                        {{task.id}}
                                    </td>
                                    <td class="border-b border-gray-100 p-4 pl-8 text-gray-500 dark:border-gray-700 dark:text-gray-400">
                                        {{task.user.name}}
                                    </td>
                                    <td
                                        class="border-b border-gray-100 p-4 text-gray-500 dark:border-gray-700 dark:text-gray-400"> honor
                                        {{task.file.path}}
                                    </td>
                                    <td class="border-b border-gray-100 p-4 pr-8 text-gray-500 dark:border-gray-700 dark:text-gray-400">
                                        {{task.status}}
                                    </td>

                                    <td class="border-b border-gray-100 p-4 pr-8 text-gray-500 dark:border-gray-700 dark:text-gray-400">
                                        <Link v-if="task.failed_rows_count > 0" :href="route('task.failed_list',
                                        task.id)">
                                            Failed Rows
                                        </Link>
                                    </td>

                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </figure>
            </div>
        </div>
        <div>
        <pagination :meta="tasks.meta"></pagination>
        </div>
    </div>
</template>

<script>
import MainLayout from "@/Layouts/MainLayout.vue";
import {Link} from "@inertiajs/vue3";
import Pagination from "@/Components/Pagination.vue";
export default {
    name: "Index",
    layout: MainLayout,
    components: {
        Link,
        Pagination
    },
    props: [
        'tasks'
    ]
}
</script>

<style scoped>

</style>
