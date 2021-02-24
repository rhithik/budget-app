let btn = document.querySelectorAll('[data-toggle-modal]')

btn.forEach(function(btn_item) {
    btn_item.addEventListener('click', function (e) {
        let target_modal = e.target.getAttribute('data-toggle-modal');
        document.querySelector(target_modal).classList.toggle('modal-active');
    })
})