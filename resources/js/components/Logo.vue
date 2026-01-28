<template>
    
        <img src="/logo.png" alt="Logo" class="logo-image" />
   
</template>

<script>
export default {
    name: 'Logo',
    data() {
        return {
            logoSrc: '/logo.png',
            logoAlt: 'Logo'
        }
    }
}
</script>

<style scoped>
.logo {
    display: flex;
    align-items: center;
    justify-content: center;
}

.logo-image {
    height: 60px;
    width: auto;
}
</style>
<style scoped>
.logo {
    @apply flex items-center justify-center;
}

.logo-image {
    @apply h-15 w-auto;
}
</style>