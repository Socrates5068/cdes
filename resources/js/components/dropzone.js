document.addEventListener('DOMContentLoaded', () => {

    Dropzone.autoDiscover = false;

    const dropzone = new Dropzone('div#dropzone', {
        url: '/denuncias'
    });

})