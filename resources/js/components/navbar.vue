<template>
    <div class="bg-green-600">
        <div class="flex container mx-auto ">
            <div v-for="link in links" :key="link.text" class="p-3 text-green-100 font-semibold">
                <a :href=link.url>{{  link.text  }}</a>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            links: [
                {
                    text: 'recipes',
                    url: '/recipe'
                },
                {
                    text: 'dashboard',
                    url: '/dashboard'
                }
            ]
        }
    },
}

</script>

<style lang="scss" scoped>

</style>
