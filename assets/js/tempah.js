const qtyInputs = document.querySelectorAll('.qty-input');
const totalEl = document.getElementById('total-price');
const form = document.getElementById('formTempah');

function kiraTotal() {

    let total = 0;

    qtyInputs.forEach(input => {

        let qty = parseInt(input.value) || 0;
        let price = parseFloat(input.dataset.price);

        total += qty * price;

    });

    totalEl.innerText = "RM " + total.toFixed(2);

}

qtyInputs.forEach(input => {

    input.addEventListener('input', kiraTotal);

});

form.addEventListener('submit', function (e) {

    let totalQty = 0;

    qtyInputs.forEach(input => {

        totalQty += parseInt(input.value) || 0;

    });

    if (totalQty === 0) {

        alert("Sila pilih sekurang-kurangnya satu biskut");
        e.preventDefault();

    }

});