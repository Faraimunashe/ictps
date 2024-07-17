<template>
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <!-- <Component
                :is="link.url? 'Link':'span'"
                v-for="link in links"
                :href="link.url"
                v-html="link.label"
            /> -->
            <li class="page-item" :class="{'disabled': !link.url, 'active': link.active}" v-for="link in links">
                <Component
                    :is="link.url? 'Link':'Link'"
                    class="page-link"
                    v-if="link.url"
                    :href="link.url"
                    v-html="link.label"
                />
            </li>
        </ul>
    </nav>
</template>

<script>
export default {
    props: {
        links: Array
    }
}
</script>
