import shoppingCart from "./ShoppingCart.js";

const orderItems = document.getElementById('order-items')

const products = shoppingCart.getProducts()

products.forEach(product => {
    const row = document.createElement('tr')
    row.innerHTML = `
        <td>${product.name} <strong class="mx-2">x</strong> ${product.quantity}</td>
        <td>Q.${shoppingCart.getTotalOfProduct({product})}</td>
    `
    orderItems.append(row)
})

const totalRow = document.createElement('tr')
totalRow.innerHTML = `
        <td class="text-black font-weight-bold"><strong>Order Total</strong></td>
        <td class="text-black font-weight-bold"><strong>Q.${shoppingCart.total.value}</strong></td>
    `
orderItems.append(totalRow)
