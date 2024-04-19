<template>
    <form>
        <div class="name col">
            <label for="name">Jméno a příjmení:</label>
            <input v-model="name" type="text" name="name" id="" required>
        </div>
        <div class="tel-email">
            <div class="col">
                <label for="email">E-mail:</label>
                <input v-model="email" type="email" name="email" id="" required>
            </div>

            <div class="col">
                <label for="tel">Telefonní číslo:</label>
                <input v-model="phone" type="text" name="tel" id="" required>
            </div>
        </div>

        <div class="msg col">
            <label for="textarea">Dotaz / poptávka:</label>
            <textarea v-model="message" name="textarea" id="" cols="30" rows="10" required></textarea>
        </div>

        <button @click="submit" type="button" id="submit">
            <span id="span">Odeslat</span>
        </button>

        <div class="success" id="success-alert"><p>Vaše zpráva byla úspěšně doručena! Brzy Vám ozveme.</p></div>
        <div class="error required" id="error-alert"></div>
    </form>
</template>

<script>
import axios from 'axios';

export default ({
    data() {
        return {
            name: null,
            message: null,
            phone: null,
            email: null
        }
    },

    methods: {
        submit() { 
            let submitBtnSpan = document.getElementById('span')
            let successAlert = document.getElementById('success-alert')
            let errorAlert = document.getElementById('error-alert')

            submitBtnSpan.innerHTML = 'ODESÍLÁME...';
            successAlert.style.display = 'none';
            errorAlert.style.display = 'none';

            axios
            .post('/form', {
              name: this.name,
              message: this.message,
              email: this.email,
              phone: this.phone
            })
            .then(response => {
              submitBtnSpan.innerHTML = 'ODESLAT';
              successAlert.style.display = 'block';
              this.message = null;
              this.name = null;
              this.phone = null;
              this.email = null;
            })
            .catch(function (error) {
              // handle error
              submitBtnSpan.innerHTML = 'ODESLAT';
              var arr = error.response.data;
              var err = '';
              for (let el in arr) {
                if (arr.hasOwnProperty(el)) {
                  err = err + '<li>' + arr[el] + '</li>';
                }
              }
              errorAlert.innerHTML = err;
              errorAlert.style.display = 'block';
            })
        }
    }
})
</script>
