import {SendMail}  from "./modules/mailer.js";

(() => {

    const aboutSubBtn = document.querySelector("#aboutSubNav"),
          aboutSubcontent = document.querySelector(".aboutSubShow");

    aboutSubBtn.addEventListener("click", () => {
        aboutSubcontent.classList.toggle("open");
    });

    function goBack() {
        window.history.back();
      }

const { createApp } = Vue;


createApp({
    data() {
        return {
            message: 'Hello Vue!',

            successMessage: false
        }
    },

    methods: {
        processMailFailure(result) {

            let error = document.querySelector('.msg-error');
            error.classList.add("display");
            let success = document.querySelector('.msg-success');
            success.classList.remove("display");

        },

        processMailSuccess(result) {

            let success = document.querySelector('.msg-success');
            success.classList.add("display");
            let error = document.querySelector('.msg-error');
            error.classList.remove("display");
        },

        processMail(event) {        
            // use the SendMail component to process mail
            SendMail(this.$el.parentNode)
                .then(data => this.processMailSuccess(data))
                .catch(err => this.processMailFailure(err));
        }

    }
}).mount('#mail-form')


})();
