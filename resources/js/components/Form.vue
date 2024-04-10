<template>
    <div>
        <h1>{{message}}</h1>

        <p>API reponse:</p>
        <p>
            {{info}}
        </p>
    </div>
</template>

<script>
export default ({
    data() {
        return {
            message: 'Vue funguje',
            info: null
        }
    }
})
</script>
