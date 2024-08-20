<template>
    <main class="main">
      <SideNav/>
      <TopNav :username="username" />
      <slot />
    </main>
</template>

<script>
import SideNav from './SideNav.vue';
import TopNav from './TopNav.vue';

export default {
    components: {
        SideNav, TopNav
    },
    computed: {
        username() {
            return this.$page.props.auth.user.name
        }
    }
}
</script>
