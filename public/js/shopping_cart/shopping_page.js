import shoppingCart from "./ShoppingCart.js";
import Computed from "../helpers/Computed.js";

const productsTable = document.querySelector('.shopping-table')
const totalProducts = document.getElementById('total-products')

// computed property to calculate total of shopping cart
const totalProductsValue = new Computed(() => shoppingCart.total.value,
    [shoppingCart.total])
totalProducts.innerText = `Q.${shoppingCart.total.value}`
totalProductsValue.subscribe(newValue => {
    totalProducts.innerText = `Q.${newValue}`
})

shoppingCart.getProducts().forEach(product => {
    const row = document.createElement('tr')
    console.log(product);
    const removeButton = document.createElement('button')
    removeButton.innerText = 'X'
    removeButton.classList.add('btn')
    removeButton.addEventListener('click',(e) => {
        const parent = removeButton.parentNode.parentNode
        removeProductEvent({id: product.id, parent})

    })

    const columnRemoveButton = document.createElement('td')
    columnRemoveButton.appendChild(removeButton)

    const quantityIncreaseButton = document.createElement('button')
    quantityIncreaseButton.classList.add('btn')
    quantityIncreaseButton.onclick = () => {
        shoppingCart.increaseQuantity({quantity: 1, id: product.id})

        const productUpdated = shoppingCart.findProductById({id: product.id})
        const quantityInput = document.getElementById(`${product.id}`)
        quantityInput.value = productUpdated.quantity
    }
    quantityIncreaseButton.innerText = '+'

    const quantityDecreaseButton = document.createElement('button')
    quantityIncreaseButton.classList.add('btn')
    quantityDecreaseButton.onclick = () => {
        shoppingCart.decreaseQuantity({quantity: 1, id: product.id})
        const productUpdated = shoppingCart.findProductById({id: product.id})
        const quantityInput = document.getElementById(`${product.id}`)
        quantityInput.value = productUpdated.quantity
    }
    quantityDecreaseButton.innerText = '-'

    row.innerHTML = `
        <td class="product-thumbnail">
            <img src="${product.image}" alt="Image" class="img-fluid">
        </td>
        <td class="product-name">
            <h2 class="h5 text-black">${product.name}</h2>
        </td>
        <td>Q.${product.price}</td>
        <td>
            <div class="input-group mb-3 d-flex align-items-center quantity-container" style="max-width: 120px;">
                <div class="input-group-prepend">
                </div>
                    <input id="${product.id}" type="text" class="form-control text-center quantity-amount" value="${product.quantity}" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1" readonly>
                <div class="input-group-append">
                </div>
            </div>

        </td>
        <td>Q.${shoppingCart.getTotalOfProduct({product})}</td>
`

    const quantityIncreaseRow = row.children[3].children[0].children[2]
    quantityIncreaseRow.appendChild(quantityIncreaseButton)

    const quantityDecreaseRow = row.children[3].children[0].children[0]
    quantityDecreaseRow.appendChild(quantityDecreaseButton)
    row.appendChild(columnRemoveButton)
    productsTable.append(row)
})


const removeProductEvent = ({id, parent}) => {
    shoppingCart.removeProduct({id})
    productsTable.removeChild(parent)
}
