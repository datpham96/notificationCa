<template>
    <div class="container">
        <button>Send</button>
    </div>
</template>

<script>
    export default {
        mounted() {
            window.Echo.private('App.User.1')
                .notification((notification) => {
                    console.log(notification.type);
                });
        }
    }
</script>
