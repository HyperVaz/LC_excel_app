<template>
    <div>
        <p class="text-center text-xl">Ошибки</p>
        <Link class="text-sm text-blue-800 underline" :href="route('task.index')">Back</Link>
        <div v-if="failedList">
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
                                        Id
                                    </th>
                                    <th class="border-b border-gray-200 p-4 pt-0 pb-3 pl-8 text-left font-medium text-gray-400 dark:border-gray-600 dark:text-gray-200">
                                        Row
                                    </th>
                                    <th class="border-b border-gray-200 p-4 pt-0 pb-3 text-left font-medium text-gray-400 dark:border-gray-600 dark:text-gray-200">
                                        Key
                                    </th>
                                    <th class="border-b border-gray-200 p-4 pt-0 pr-8 pb-3 text-left font-medium text-gray-400 dark:border-gray-600 dark:text-gray-200">
                                        task_id
                                    </th>

                                    <th class="border-b border-gray-200 p-4 pt-0 pr-8 pb-3 text-left font-medium text-gray-400 dark:border-gray-600 dark:text-gray-200">
                                        Created at
                                    </th>
                                </tr>
                                </thead>
                                <tbody class="bg-white dark:bg-gray-800">
                                <tr v-for="failedRow in failedList.data">
                                    <td class="border-b border-gray-100 p-4 pl-8 text-gray-500 dark:border-gray-700 dark:text-gray-400">
                                        {{failedRow.id}}
                                    </td>
                                    <td class="border-b border-gray-100 p-4 pr-8 text-gray-500 dark:border-gray-700 dark:text-gray-400">
                                        {{failedRow.row}}
                                    </td>
                                    <td
                                        class="border-b border-gray-100 p-4 text-gray-500 dark:border-gray-700 dark:text-gray-400"> honor
                                        {{failedRow.key}}
                                    </td>
                                    <td class="border-b border-gray-100 p-4 pr-8 text-gray-500 dark:border-gray-700 dark:text-gray-400">
                                        {{failedRow.message}}
                                    </td>


                                    <td class="border-b border-gray-100 p-4 pr-8 text-gray-500 dark:border-gray-700 dark:text-gray-400">
                                        {{failedRow.task_id}}
                                    </td>
                                    <td class="border-b border-gray-100 p-4 pr-8 text-gray-500 dark:border-gray-700 dark:text-gray-400">
                                        {{failedRow.created_at}}
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
            <pagination :meta="failedList.meta"></pagination>
        </div>
    </div>
</template>

<script>
import MainLayout from "@/Layouts/MainLayout.vue";
import {Link} from "@inertiajs/vue3";
import Pagination from "@/Components/Pagination.vue";
export default {
    name: "Index",
    components:{
        Link,
        Pagination
    },
    layout: MainLayout,
    props: [
        'failedList'
    ]
}
</script>

<style scoped>

</style>
