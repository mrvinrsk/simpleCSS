$(function () {
    getWrapper();
});

let wrapper = null;

function getWrapper() {
    const wrapperEle = document.createElement('div');
    wrapperEle.classList.add('toast_wrapper');

    if (document.querySelector('.toast_wrapper') !== null) {
        wrapper = document.querySelector('.toast_wrapper');
    } else {
        document.body.appendChild(wrapperEle);
        wrapper = wrapperEle;
    }
}

function toast(title, description, stay) {
    const toast = document.createElement('div');
    toast.classList.add('toast');

    const titleEl = document.createElement('h4');
    titleEl.textContent = title;
    titleEl.classList.add('toast_title');

    const descriptionEl = document.createElement('p');
    descriptionEl.textContent = description;
    descriptionEl.classList.add('toast_description');


    toast.appendChild(titleEl);
    toast.appendChild(descriptionEl);

    wrapper.appendChild(toast);

    setTimeout(() => {
        $(toast).animate({
            opacity: 0,
            right: '-100%'
        }, 500, function () {
            wrapper.removeChild(toast);
        });
    }, stay);
}