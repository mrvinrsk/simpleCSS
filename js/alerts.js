$(function() {
    document.querySelectorAll('[data-alert-closable]').forEach((el) => {
        const close = document.createElement('img');

        close.src = "../img/cross.svg";
        close.classList.add('alert-close');
        close.onclick = function() {
            close.closest('[data-alert-closable]').remove();
        }

        el.append(close);
    });

    document.querySelectorAll('[data-alert-autoclose]').forEach((el) => {
        setTimeout(() => {
            el.remove();
        }, el.dataset.alertAutoclose);
    });
});