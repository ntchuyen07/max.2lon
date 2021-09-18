const hostName = 'http://localhost/max.2lon/public/';
const tokenInput = document.querySelector('#form-token-id');

async function calculatePrice() {
    const url = `${hostName}api/carts`;
    const result = await fetch(url);
    const carts = await result.json();
    const totalPrice = carts.reduce((price, cart) => {
        $(`.total-item-price.${cart.id}`).text(formatCurrency(cart.number*cart.price));
        return price + cart.number * cart.price;
    }, 0);
    const totalPriceElement = document.querySelector('.total-prices .total');
    totalPriceElement.innerHTML = formatCurrency(totalPrice);
}

calculatePrice();

function formatCurrency(n) {
    return n.toFixed(0).replace(/./g, function (c, i, a) {
        return i > 0 && c !== "." && (a.length - i) % 3 === 0 ? "," + c : c;
    });
}

$('.cart-decrement-btn').on('click', async function () {
    const cartId = $(this).data('cartid');
    const input = $(`.input-qty.${cartId}`);
    const currentValue = Number(input.val());
    if (currentValue != 1) {
        const newValue = currentValue - 1;
        input.val(newValue)
        const postData = `_token=${tokenInput.value}&number=-1`
        const result = await $.ajax({
            type: "POST",
            url: `${hostName}cart/update/${cartId}`,
            data: postData,
        });
        if (result.success) {
            calculatePrice();
        }
    }
})

$('.cart-increment-btn').on('click', async function () {
    const cartId = $(this).data('cartid');
    const input = $(`.input-qty.${cartId}`);
    const currentValue = Number(input.val());
    const newValue = currentValue + 1;
    input.val(newValue)
    const postData = `_token=${tokenInput.value}&number=1`;
    const result = await $.ajax({
        type: "POST",
        url: `${hostName}cart/update/${cartId}`,
        data: postData,
    });
    if (result.success) {
        calculatePrice();
    }
})

async function setPriceInPageConfirm() {
    const url = `${hostName}api/carts`;
    const result = await fetch(url);
    const carts = await result.json();
    const totalPrice = carts.reduce((price, cart) => {
        $(`.total-item-price.${cart.id}`).text(formatCurrency(cart.number*cart.price));
        return price + cart.number * cart.price;
    }, 0);
    $('#order-all-item-price').text(formatCurrency(totalPrice) + 'đ');
    $('#order-total-price').text(formatCurrency(totalPrice + 20000) + 'đ');
    $('#final-price-order').html('<b>' + formatCurrency(totalPrice + 20000) + 'đ</b>');
}

setPriceInPageConfirm();

