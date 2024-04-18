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

        <div class="success"><p>Vaše zpráva byla úspěšně doručena! Brzy Vám ozveme.</p></div>
        <div class="error"><p>Omlouváme se, ale něco se pokazilo. Zkuste nám napsat přímo na email <a href="mailto:info@hfpodlahy.cz">info@hfpodlahy.cz</a>.</p></div>
        <div class="error required">
            <p>Tato pole jsou povinná a Vámi nevyplněná:</p>
            <ul>
                <li>neco</li>
            </ul>
        </div>
    </form>
</template>

<script>
export default ({
    data() {
        return {}
    }
})
</script>
