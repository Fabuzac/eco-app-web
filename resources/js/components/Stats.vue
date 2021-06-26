<template>
    <keep-alive>
        <div class="container">
            <h3>STATS VueJs here</h3>
            <h4>the {{ data }}</h4>
        </div>
    </keep-alive>
</template>

<script>
    export default {
        async mounted() {
            console.log('Component mounted, taratata')
        },
        props: {
            data: {
                type: String,
                default: 'data and test',
            }
        }
    };
</script>