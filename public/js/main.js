import {SendMail}  from "./modules/mailer.js";

(() => {

    const aboutSubBtn = document.querySelector("#aboutSubNav-phone"),
          aboutSubcontent = document.querySelector(".aboutSubShow-phone"),
          aboutSubBtnPhone = document.querySelector("#aboutSubNav"),
          aboutSubcontentPhone = document.querySelector(".aboutSubShow"),
          nav = document.querySelector('#nav'),
          menu = document.querySelector('#menu'),
          menuToggle = document.querySelector('.nav__toggle');
          let isMenuOpen = false;

    aboutSubBtn.addEventListener("click", () => {
        aboutSubcontent.classList.toggle("open");
    });

    
    aboutSubBtnPhone.addEventListener("click", () => {
      aboutSubcontentPhone.classList.toggle("open");
  });

    function goBack() {
        window.history.back();
      }



// TOGGLE MENU ACTIVE STATE
menuToggle.addEventListener('click', e => {
  e.preventDefault();
  isMenuOpen = !isMenuOpen;
  
  // toggle a11y attributes and active class
  menuToggle.setAttribute('aria-expanded', String(isMenuOpen));
  menu.hidden = !isMenuOpen;
  nav.classList.toggle('nav--open');
});


// TRAP TAB INSIDE NAV WHEN OPEN
nav.addEventListener('keydown', e => {
  // abort if menu isn't open or modifier keys are pressed
  if (!isMenuOpen || e.ctrlKey || e.metaKey || e.altKey) {
    return;
  }
  
  // listen for tab press and move focus
  // if we're on either end of the navigation
  const menuLinks = menu.querySelectorAll('.nav__link');
  if (e.keyCode === 9) {
    if (e.shiftKey) {
      if (document.activeElement === menuLinks[0]) {
        menuToggle.focus();
        e.preventDefault();
      }
    } else if (document.activeElement === menuToggle) {
      menuLinks[0].focus();
      e.preventDefault();
    }
  }
});

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
