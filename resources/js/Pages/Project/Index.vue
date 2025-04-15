<template>
    <div>
        Project Index
        <Link class="text-sm" :href="route('task.index')">Back</Link>
        <div v-if="projects">
            <div class="not-prose isolate">
                <figure
                    class="flex flex-col gap-1 rounded-xl bg-gray-950/5 p-1 inset-ring inset-ring-gray-950/5 dark:bg-white/10 dark:inset-ring-white/10">
                    <div
                        class="not-prose overflow-auto rounded-lg bg-white outline outline-white/5 dark:bg-gray-950/50">
                        <div class="my-8 overflow-auto">
                            <table class="w-full table-auto border-collapse text-sm">
                                <thead>
                                <tr>
                                    <th class="border-b border-gray-200 p-4 pt-0 pb-3 pl-8 text-left font-medium text-gray-400 dark:border-gray-600 dark:text-gray-200">
                                        Id
                                    </th>
                                    <th class="border-b border-gray-200 p-4 pt-0 pb-3 pl-8 text-left font-medium text-gray-400 dark:border-gray-600 dark:text-gray-200">
                                        Type
                                    </th>
                                    <th class="border-b border-gray-200 p-4 pt-0 pb-3 text-left font-medium text-gray-400 dark:border-gray-600 dark:text-gray-200">
                                        Title
                                    </th>
                                    <th class="border-b border-gray-200 p-4 pt-0 pr-8 pb-3 text-left font-medium text-gray-400 dark:border-gray-600 dark:text-gray-200">
                                        Created at
                                    </th>

                                    <th class="border-b border-gray-200 p-4 pt-0 pr-8 pb-3 text-left font-medium text-gray-400 dark:border-gray-600 dark:text-gray-200">
                                        Contracted at
                                    </th>
                                    <th class="border-b border-gray-200 p-4 pt-0 pr-8 pb-3 text-left font-medium text-gray-400 dark:border-gray-600 dark:text-gray-200">
                                        Deadline
                                    </th>


                                    <th class="border-b border-gray-200 p-4 pt-0 pb-3 text-left font-medium text-gray-400 dark:border-gray-600 dark:text-gray-200">
                                        Is chain
                                    </th>
                                    <th class="border-b border-gray-200 p-4 pt-0 pr-8 pb-3 text-left font-medium text-gray-400 dark:border-gray-600 dark:text-gray-200">
                                        Is on time
                                    </th>

                                    <th class="border-b border-gray-200 p-4 pt-0 pr-8 pb-3 text-left font-medium text-gray-400 dark:border-gray-600 dark:text-gray-200">
                                        Has outsource
                                    </th>
                                    <th class="border-b border-gray-200 p-4 pt-0 pr-8 pb-3 text-left font-medium text-gray-400 dark:border-gray-600 dark:text-gray-200">
                                        Has investors
                                    </th>

                                    <th class="border-b border-gray-200 p-4 pt-0 pr-8 pb-3 text-left font-medium text-gray-400 dark:border-gray-600 dark:text-gray-200">
                                        Workers count
                                    </th>
                                    <th class="border-b border-gray-200 p-4 pt-0 pr-8 pb-3 text-left font-medium text-gray-400 dark:border-gray-600 dark:text-gray-200">
                                        Service count
                                    </th>
                                </tr>
                                </thead>
                                <tbody class="bg-white dark:bg-gray-800">
                                <tr v-for="project in projects.data">
                                    <td class="border-b border-gray-100 p-4 pl-8 text-gray-500 dark:border-gray-700 dark:text-gray-400">
                                        {{project.id}}
                                    </td>
                                    <td class="border-b border-gray-100 p-4 pr-8 text-gray-500 dark:border-gray-700 dark:text-gray-400">
                                        {{project.type.title}}
                                    </td>
                                    <td
                                        class="border-b border-gray-100 p-4 text-gray-500 dark:border-gray-700 dark:text-gray-400"> honor
                                        {{project.title}}
                                    </td>
                                    <td class="border-b border-gray-100 p-4 pr-8 text-gray-500 dark:border-gray-700 dark:text-gray-400">
                                        {{project.created_at_time}}
                                    </td>


                                    <td class="border-b border-gray-100 p-4 pr-8 text-gray-500 dark:border-gray-700 dark:text-gray-400">
                                        {{project.contracted_at}}
                                    </td>
                                    <td class="border-b border-gray-100 p-4 pr-8 text-gray-500 dark:border-gray-700 dark:text-gray-400">
                                        {{project.deadline}}
                                    </td>

                                    <td class="border-b border-gray-100 p-4 pr-8 text-gray-500 dark:border-gray-700 dark:text-gray-400">
                                        {{project.is_chain}}
                                    </td>
                                    <td class="border-b border-gray-100 p-4 pr-8 text-gray-500 dark:border-gray-700 dark:text-gray-400">
                                        {{project.is_on_time}}
                                    </td>
                                    <td class="border-b border-gray-100 p-4 pr-8 text-gray-500 dark:border-gray-700 dark:text-gray-400">
                                        {{project.has_outsource}}
                                    </td>
                                    <td class="border-b border-gray-100 p-4 pr-8 text-gray-500 dark:border-gray-700 dark:text-gray-400">
                                        {{project.has_investors}}
                                    </td>
                                    <td class="border-b border-gray-100 p-4 pr-8 text-gray-500 dark:border-gray-700 dark:text-gray-400">
                                        {{project.worker_count}}
                                    </td>
                                    <td class="border-b border-gray-100 p-4 pr-8 text-gray-500 dark:border-gray-700 dark:text-gray-400">
                                        {{project.service_count}}
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
            <pagination :meta="projects.meta"></pagination>
        </div>
    </div>
</template>

<script>
import MainLayout from "@/Layouts/MainLayout.vue";
import Pagination from "@/Components/Pagination.vue";

export default {
    name: "Index",
    layout: MainLayout,
    props:[
        'projects'
    ],
    components:{
        Pagination
    },
}
</script>

<style scoped>

</style>
