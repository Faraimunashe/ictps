<template>
    <Head title="Delete User" />
    <div class="content">
        <nav class="mb-2" aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                <li class="breadcrumb-item"><a href="/users">Users</a></li>
                <li class="breadcrumb-item active">Delete User</li>
            </ol>
        </nav>

        <div class="row g-6">
            <div class="col-12 col-xl-4">
              <div class="card mb-5">
                <div class="card-header hover-actions-trigger position-relative mb-6" style="min-height: 130px; ">
                  <div class="bg-holder rounded-top" style="background-image: linear-gradient(0deg, #000000 -3%, rgba(0, 0, 0, 0) 83%), url(../../../../images/logo.png)">
                    <input class="d-none" id="upload-settings-cover-image" type="file">
                    <label class="cover-image-file-input" for="upload-settings-cover-image"></label>
                    <div class="hover-actions end-0 bottom-0 pe-1 pb-2 text-white dark__text-gray-1100"><svg class="svg-inline--fa fa-camera me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="camera" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M194.6 32H317.4C338.1 32 356.4 45.22 362.9 64.82L373.3 96H448C483.3 96 512 124.7 512 160V416C512 451.3 483.3 480 448 480H64C28.65 480 0 451.3 0 416V160C0 124.7 28.65 96 64 96H138.7L149.1 64.82C155.6 45.22 173.9 32 194.6 32H194.6zM256 384C309 384 352 341 352 288C352 234.1 309 192 256 192C202.1 192 160 234.1 160 288C160 341 202.1 384 256 384z"></path></svg><!-- <span class="fa-solid fa-camera me-2"></span> Font Awesome fontawesome.com --></div>
                  </div>
                  <input class="d-none" id="upload-settings-porfile-picture" type="file">
                  <label class="avatar avatar-4xl feed-avatar-profile cursor-pointer" for="upload-settings-porfile-picture">
                    <img class="rounded-circle img-thumbnail shadow-sm border-0" src="../../../../images/usericon.jpg" width="200" alt="">
                </label>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-12">
                      <div class="d-flex flex-wrap mb-2 align-items-center">
                        <h3 class="me-2">{{ user.name }}</h3>
                        <span class="fw-normal fs-8">{{ user.email }}</span>
                      </div>
                      <div class="d-flex d-xl-block d-xxl-flex align-items-center">
                        <div class="d-flex mb-xl-2 mb-xxl-0">
                            <ClockIcon class="fs-10 me-2 me-lg-1 me-xl-2" style="width:14px; height:14px" />
                            <h6 class="d-inline-block mb-0">
                                Joined:
                                <span class="fw-semibold ms-1 me-4">{{ formatRelativeTime(user.created_at) }}</span>
                            </h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-xl-8">
              <div class="border-bottom mb-4">
                <div class="mb-2">
                  <h3 class="mb-2">Administrative Settings</h3>
                </div>
              </div>
              <div class="row gy-5">
                <div class="col-12 col-md-6">
                  <h4 class="text-body-emphasis">Edit Account</h4>
                  <p class="text-body-tertiary">Update account information or transfer account role to another role or permission. Ensure all details are correct before making changes.</p>
                  <button class="btn btn-phoenix-primary">Update Account</button>
                </div>
                <div class="col-12 col-md-6">
                    <h4 class="text-body-emphasis">Account Deletion</h4>
                    <p class="text-body-tertiary">Permanently remove this account from the system. Ensure you have transferred all necessary data to another individual or company repository before proceeding.</p>
                    <button class="btn btn-phoenix-danger">Delete Account</button>
                </div>
              </div>
            </div>
        </div>
    </div>
</template>

<script>
import Layout from "../../../Shared/Layout.vue";
import { ClockIcon } from '@heroicons/vue/24/solid';
import { formatDistanceToNow } from 'date-fns';

export default {
    layout: Layout,
    props: {
        user: Object
    },
    components: {
        ClockIcon
    },
    methods: {
        formatRelativeTime(dateString) {
            const date = new Date(dateString)
            return formatDistanceToNow(date, { addSuffix: true })
        }
    }
}
</script>
