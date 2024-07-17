<template>
    <nav v-if="auth" class="navbar navbar-vertical navbar-expand-lg">
        <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
            <div class="navbar-vertical-content">
                <ul class="navbar-nav flex-column" id="navbarVerticalNav">
                    <li v-if="role.name == 'admin'" class="nav-item">
                        <p class="navbar-vertical-label">Pages</p>
                        <hr class="navbar-vertical-line" />
                        <NavLink href="/dashboard" :iconComponent="ChartPieIcon">
                            Dashboard
                        </NavLink>
                    </li>
                    <li v-if="role.name == 'mda'" class="nav-item">
                        <p class="navbar-vertical-label">Pages</p>
                        <hr class="navbar-vertical-line" />
                        <NavLink href="/targets" :iconComponent="RectangleStackIcon">
                            Targets
                        </NavLink>
                    </li>
                </ul>
            </div>
        </div>
        <div class="navbar-vertical-footer">
            <button class="btn navbar-vertical-toggle border-0 fw-semibold w-100 white-space-nowrap d-flex align-items-center">
                <span class="uil uil-left-arrow-to-left fs-8"></span>
                <span class="uil uil-arrow-from-right fs-8"></span>
                <span class="navbar-vertical-footer-text ms-2">Collapsed View</span>
            </button>
        </div>
    </nav>
</template>

<script>
import NavLink from "./Components/NavLink.vue";
import { ChartPieIcon, RectangleStackIcon } from '@heroicons/vue/24/solid';

export default {
    components: {
        NavLink
    },
    data() {
        return {
            ChartPieIcon, RectangleStackIcon
        };
    },
    computed: {
        auth() {
            return this.$page.props.auth
        },
        role() {
            return this.$page.props.auth?.role ?? null
        }
    }
}
</script>
