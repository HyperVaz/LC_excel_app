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
                                        User
                                    </th>
                                    <th class="border-b border-gray-200 p-4 pt-0 pb-3 text-left font-medium text-gray-400 dark:border-gray-600 dark:text-gray-200">
                                        File
                                    </th>
                                    <th class="border-b border-gray-200 p-4 pt-0 pr-8 pb-3 text-left font-medium text-gray-400 dark:border-gray-600 dark:text-gray-200">
                                        Status
                                    </th>
                                </tr>
                                </thead>
                                <tbody class="bg-white dark:bg-gray-800">
                                <tr v-for="task in tasks.data">
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
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div>
                        <div
                            class="rounded-xl bg-gray-950 in-data-stack:mt-0 in-data-stack:rounded-none in-[figure]:-mx-1 in-[figure]:-mb-1 in-data-stack:[:first-child>&amp;]:rounded-t-xl in-data-stack:[:first-child>&amp;]:*:rounded-t-xl in-data-stack:[:last-child>&amp;]:rounded-b-xl in-data-stack:[:last-child>&amp;]:*:rounded-b-xl">
                            <div
                                class="rounded-xl p-1 text-sm scheme-dark in-data-stack:rounded-none dark:bg-white/5 dark:inset-ring dark:inset-ring-white/10 in-data-stack:dark:inset-ring-0 not-prose">
                                <div
                                    class="*:flex *:*:max-w-none *:*:shrink-0 *:*:grow *:overflow-auto *:rounded-lg *:bg-white/10! *:p-5 dark:*:bg-white/5! **:[.line]:isolate **:[.line]:not-last:min-h-[1lh] *:inset-ring *:inset-ring-white/10 dark:*:inset-ring-white/5">
                                    <pre class="shiki tailwindcss-theme"
                                         style="background-color:transparent;color:var(--color-slate-50)"
                                         tabindex="0"><code><div class="line"><span
                                        style="color:var(--color-slate-400)">&lt;</span><span
                                        style="color:var(--color-pink-400)">table</span><span
                                        style="color:var(--color-slate-300)"> class</span><span
                                        style="color:var(--color-slate-400)">=</span><span
                                        style="color:var(--color-sky-300)">"</span><span
                                        style="color:var(--color-sky-300)"
                                        class="highlighted-word relative before:absolute before:-inset-x-0.5 before:-inset-y-0.25 before:-z-10 before:block before:rounded-sm before:bg-[lab(19.93_-1.66_-9.7)] [.highlighted-word_+_&amp;]:before:rounded-l-none">table-auto</span><span
                                        style="color:var(--color-sky-300)">"</span><span
                                        style="color:var(--color-slate-400)">&gt;</span></div><div class="line"><span
                                        style="color:var(--color-slate-400)">  &lt;</span><span
                                        style="color:var(--color-pink-400)">thead</span><span
                                        style="color:var(--color-slate-400)">&gt;</span></div><div class="line"><span
                                        style="color:var(--color-slate-400)">    &lt;</span><span
                                        style="color:var(--color-pink-400)">tr</span><span
                                        style="color:var(--color-slate-400)">&gt;</span></div><div class="line"><span
                                        style="color:var(--color-slate-400)">      &lt;</span><span
                                        style="color:var(--color-pink-400)">th</span><span
                                        style="color:var(--color-slate-400)">&gt;</span><span
                                        style="color:var(--color-slate-50)">Song</span><span
                                        style="color:var(--color-slate-400)">&lt;/</span><span
                                        style="color:var(--color-pink-400)">th</span><span
                                        style="color:var(--color-slate-400)">&gt;</span></div><div class="line"><span
                                        style="color:var(--color-slate-400)">      &lt;</span><span
                                        style="color:var(--color-pink-400)">th</span><span
                                        style="color:var(--color-slate-400)">&gt;</span><span
                                        style="color:var(--color-slate-50)">Artist</span><span
                                        style="color:var(--color-slate-400)">&lt;/</span><span
                                        style="color:var(--color-pink-400)">th</span><span
                                        style="color:var(--color-slate-400)">&gt;</span></div><div class="line"><span
                                        style="color:var(--color-slate-400)">      &lt;</span><span
                                        style="color:var(--color-pink-400)">th</span><span
                                        style="color:var(--color-slate-400)">&gt;</span><span
                                        style="color:var(--color-slate-50)">Year</span><span
                                        style="color:var(--color-slate-400)">&lt;/</span><span
                                        style="color:var(--color-pink-400)">th</span><span
                                        style="color:var(--color-slate-400)">&gt;</span></div><div class="line"><span
                                        style="color:var(--color-slate-400)">    &lt;/</span><span
                                        style="color:var(--color-pink-400)">tr</span><span
                                        style="color:var(--color-slate-400)">&gt;</span></div><div class="line"><span
                                        style="color:var(--color-slate-400)">  &lt;/</span><span
                                        style="color:var(--color-pink-400)">thead</span><span
                                        style="color:var(--color-slate-400)">&gt;</span></div><div class="line"><span
                                        style="color:var(--color-slate-400)">  &lt;</span><span
                                        style="color:var(--color-pink-400)">tbody</span><span
                                        style="color:var(--color-slate-400)">&gt;</span></div><div class="line"><span
                                        style="color:var(--color-slate-400)">    &lt;</span><span
                                        style="color:var(--color-pink-400)">tr</span><span
                                        style="color:var(--color-slate-400)">&gt;</span></div><div class="line"><span
                                        style="color:var(--color-slate-400)">      &lt;</span><span
                                        style="color:var(--color-pink-400)">td</span><span
                                        style="color:var(--color-slate-400)">&gt;</span><span
                                        style="color:var(--color-slate-50)">The Sliding Mr. Bones (Next Stop, Pottersville)</span><span
                                        style="color:var(--color-slate-400)">&lt;/</span><span
                                        style="color:var(--color-pink-400)">td</span><span
                                        style="color:var(--color-slate-400)">&gt;</span></div><div class="line"><span
                                        style="color:var(--color-slate-400)">      &lt;</span><span
                                        style="color:var(--color-pink-400)">td</span><span
                                        style="color:var(--color-slate-400)">&gt;</span><span
                                        style="color:var(--color-slate-50)">Malcolm Lockyer</span><span
                                        style="color:var(--color-slate-400)">&lt;/</span><span
                                        style="color:var(--color-pink-400)">td</span><span
                                        style="color:var(--color-slate-400)">&gt;</span></div><div class="line"><span
                                        style="color:var(--color-slate-400)">      &lt;</span><span
                                        style="color:var(--color-pink-400)">td</span><span
                                        style="color:var(--color-slate-400)">&gt;</span><span
                                        style="color:var(--color-slate-50)">1961</span><span
                                        style="color:var(--color-slate-400)">&lt;/</span><span
                                        style="color:var(--color-pink-400)">td</span><span
                                        style="color:var(--color-slate-400)">&gt;</span></div><div class="line"><span
                                        style="color:var(--color-slate-400)">    &lt;/</span><span
                                        style="color:var(--color-pink-400)">tr</span><span
                                        style="color:var(--color-slate-400)">&gt;</span></div><div class="line"><span
                                        style="color:var(--color-slate-400)">    &lt;</span><span
                                        style="color:var(--color-pink-400)">tr</span><span
                                        style="color:var(--color-slate-400)">&gt;</span></div><div class="line"><span
                                        style="color:var(--color-slate-400)">      &lt;</span><span
                                        style="color:var(--color-pink-400)">td</span><span
                                        style="color:var(--color-slate-400)">&gt;</span><span
                                        style="color:var(--color-slate-50)">Witchy Woman</span><span
                                        style="color:var(--color-slate-400)">&lt;/</span><span
                                        style="color:var(--color-pink-400)">td</span><span
                                        style="color:var(--color-slate-400)">&gt;</span></div><div class="line"><span
                                        style="color:var(--color-slate-400)">      &lt;</span><span
                                        style="color:var(--color-pink-400)">td</span><span
                                        style="color:var(--color-slate-400)">&gt;</span><span
                                        style="color:var(--color-slate-50)">The Eagles</span><span
                                        style="color:var(--color-slate-400)">&lt;/</span><span
                                        style="color:var(--color-pink-400)">td</span><span
                                        style="color:var(--color-slate-400)">&gt;</span></div><div class="line"><span
                                        style="color:var(--color-slate-400)">      &lt;</span><span
                                        style="color:var(--color-pink-400)">td</span><span
                                        style="color:var(--color-slate-400)">&gt;</span><span
                                        style="color:var(--color-slate-50)">1972</span><span
                                        style="color:var(--color-slate-400)">&lt;/</span><span
                                        style="color:var(--color-pink-400)">td</span><span
                                        style="color:var(--color-slate-400)">&gt;</span></div><div class="line"><span
                                        style="color:var(--color-slate-400)">    &lt;/</span><span
                                        style="color:var(--color-pink-400)">tr</span><span
                                        style="color:var(--color-slate-400)">&gt;</span></div><div class="line"><span
                                        style="color:var(--color-slate-400)">    &lt;</span><span
                                        style="color:var(--color-pink-400)">tr</span><span
                                        style="color:var(--color-slate-400)">&gt;</span></div><div class="line"><span
                                        style="color:var(--color-slate-400)">      &lt;</span><span
                                        style="color:var(--color-pink-400)">td</span><span
                                        style="color:var(--color-slate-400)">&gt;</span><span
                                        style="color:var(--color-slate-50)">Shining Star</span><span
                                        style="color:var(--color-slate-400)">&lt;/</span><span
                                        style="color:var(--color-pink-400)">td</span><span
                                        style="color:var(--color-slate-400)">&gt;</span></div><div class="line"><span
                                        style="color:var(--color-slate-400)">      &lt;</span><span
                                        style="color:var(--color-pink-400)">td</span><span
                                        style="color:var(--color-slate-400)">&gt;</span><span
                                        style="color:var(--color-slate-50)">Earth, Wind, and Fire</span><span
                                        style="color:var(--color-slate-400)">&lt;/</span><span
                                        style="color:var(--color-pink-400)">td</span><span
                                        style="color:var(--color-slate-400)">&gt;</span></div><div class="line"><span
                                        style="color:var(--color-slate-400)">      &lt;</span><span
                                        style="color:var(--color-pink-400)">td</span><span
                                        style="color:var(--color-slate-400)">&gt;</span><span
                                        style="color:var(--color-slate-50)">1975</span><span
                                        style="color:var(--color-slate-400)">&lt;/</span><span
                                        style="color:var(--color-pink-400)">td</span><span
                                        style="color:var(--color-slate-400)">&gt;</span></div><div class="line"><span
                                        style="color:var(--color-slate-400)">    &lt;/</span><span
                                        style="color:var(--color-pink-400)">tr</span><span
                                        style="color:var(--color-slate-400)">&gt;</span></div><div class="line"><span
                                        style="color:var(--color-slate-400)">  &lt;/</span><span
                                        style="color:var(--color-pink-400)">tbody</span><span
                                        style="color:var(--color-slate-400)">&gt;</span></div><div class="line"><span
                                        style="color:var(--color-slate-400)">&lt;/</span><span
                                        style="color:var(--color-pink-400)">table</span><span
                                        style="color:var(--color-slate-400)">&gt;</span></div><div
                                        class="line"></div></code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </figure>
            </div>
        </div>
    </div>
</template>

<script>
import MainLayout from "@/Layouts/MainLayout.vue";

export default {
    name: "Index",
    layout: MainLayout,
    props: [
        'tasks'
    ]
}
</script>

<style scoped>

</style>
