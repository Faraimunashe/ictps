<template>
    <div class="nav-item-wrapper">
        <Link class="nav-link label-1" :href="href" role="button" data-bs-toggle="" aria-expanded="false">
            <div class="d-flex align-items-center">
                <span class="nav-link-icon">
                    <component :is="iconComponent" v-if="iconComponent" />
                </span>
                <span class="nav-link-text-wrapper">
                    <span class="nav-link-text">
                        <slot></slot>
                    </span>
                </span>
            </div>
        </Link>
    </div>
</template>

<script>
    export default {
        props: {
            href: {
                type: String,
                default: '',
            },
            iconComponent: {
                type: String,
                default: '',
            },
        },
    };
</script>
