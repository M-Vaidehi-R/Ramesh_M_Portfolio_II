import {SendMail}  from "./modules/mailer.js";

(() => {

let currentPage = document.getElementById("app");
const { createApp } = Vue;

function loadPage(page) {
    console.log('entered function');
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            currentPage.innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "view/" +page, true);
    xhttp.send();
}


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
