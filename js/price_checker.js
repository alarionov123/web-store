const priceInput = document.getElementById('price');

priceInput.addEventListener('input', function(event) {
    const value = event.target.value;
    const newValue = value.replace(/\D/g, '');

    if (newValue !== value) {
        event.target.value = newValue;
    }
});