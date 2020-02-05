<template>
    <div>
        <section class="nav-page hero is-fullheight" v-if="isOpen">
            <div class="nav-list columns is-desktop">
                <div class="column nav-item">
                    <a href="#">About Me</a>
                </div>
                <div class="column nav-item">
                    <a href="#">KeyShare</a>
                </div>
                <div class="column nav-item">
                    <a href="#">LunchRota</a>
                </div>
                <div class="column nav-item">
                    <a href="#">Components</a>
                </div>
                <div class="column nav-item">
                    <a href="#">Work Experience</a>
                </div>
                <div class="column nav-item">
                    <a href="#">Other Projects</a>
                </div>
                <div class="column nav-item">
                    <a href="#">Contact Me</a>
                </div>
            </div>
        </section>
    </div>
</template>
<script>
export default {
    data() {
        return {
            isOpen: false
        };
    }
};
</script>
