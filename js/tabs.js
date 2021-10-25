/* Tabs */
function makeid(length) {
    var result = '';
    var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
    var charactersLength = characters.length;
    for (var i = 0; i < length; i++) {
        result += characters.charAt(Math.floor(Math.random() *
            charactersLength));
    }
    return result;
}

document.querySelectorAll('.tabs .tab').forEach(tab => {
    if (tab.dataset.tabToggle) {
        const toggle = tab.dataset.tabToggle;

        tab.addEventListener('click', function () {
            const ID = makeid(25);
            tab.parentElement.parentElement.dataset.tabTempId = ID;

            /* Reset tabs */
            document.querySelectorAll('.tab').forEach(t => {
                if (tab.parentElement === t.parentElement) {
                    delete t.dataset.tabActive;
                }
            });

            /* Reset tabcontent */
            document.querySelectorAll(".tab-panel").forEach(content => {
                if (tab.parentElement.parentElement === content.parentElement) {
                    if (content.dataset.tabListen) {
                        delete content.dataset.tabActive;
                    }
                }
            });

            /* Open selected tabcontent */
            document.querySelectorAll(".tab-panel").forEach(content => {
                if (tab.parentElement.parentElement === content.parentElement) {
                    if (content.dataset.tabListen) {
                        if (content.dataset.tabListen === toggle) {
                            tab.dataset.tabActive = true;
                            content.dataset.tabActive = true;
                        }
                    }
                }
            });

            delete tab.parentElement.parentElement.dataset.tabTempId;
        });
    }
});