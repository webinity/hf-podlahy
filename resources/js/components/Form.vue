<template>
    <form action="POST">
        <div class="name col">
            <label for="name">Jméno a příjmení:</label>
            <input type="text" name="name" id="" required>
        </div>
        <div class="tel-email">
            <div class="col">
                <label for="email">E-mail:</label>
                <input type="email" name="email" id="">
            </div>

            <div class="col">
                <label for="tel">Telefonní číslo:</label>
                <input type="text" name="tel" id="" required>
            </div>
        </div>

        <div class="msg col">
            <label for="textarea">Dotaz / poptávka:</label>
            <textarea name="textarea" id="" cols="30" rows="10" required></textarea>
        </div>

        <button type="submit">
            <span>Odeslat</span>
        </button>
    </form>
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
