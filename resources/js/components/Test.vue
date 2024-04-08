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
import axios from 'axios';

export default ({
    data() {
        return {
            message: 'Vue funguje',
            info: null
        }
    },

    mounted () {
        axios
        .get('https://api.coindesk.com/v1/bpi/currentprice.json')
        .then(response => (this.info = response))
    }
})
</script>
