$(function () {
    document.querySelectorAll('input').forEach((input) => {
        input.addEventListener('input', () => {
            document.querySelectorAll('[data-input-remove]').forEach((rem) => {
                if(rem.dataset.inputRemove.includes(input.name)) {
                    rem.remove();
                }
            });
        });
    });
});