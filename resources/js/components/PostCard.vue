<template>
    <article class="relative rounded-lg overflow-hidden">
        <img v-if="post.cover" src="`/images/${posts.cover}`" alt="">

        <div class="p-4 mt-2">
            <h3 class="text-xl">{{ post.title }}</h3>
            <p v-if="post.category" class="text-amber-600 text-sm my-1">{{ post.category.name }}</p>
            <ul class="flex gap-4 py-3">
                <li class="rounded-full hover:bg-amber-400 bg-gray-200 px-2 py-2 text-xs" v-for="tag in post.tags" :key="tag.id"></li>
            </ul>
            <p class="text-sm">{{ post.created_at }}</p>
        </div>

    </article>
</template>

<script>
export default {
    props: {
        post: {
            type: Object,
            required: true
        }
    }
}
</script>

<style lang="scss" scoped>

</style>