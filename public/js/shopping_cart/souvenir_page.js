import shoppingCart from "./ShoppingCart.js";
import {removePriceSymbol} from "./helpers.js";

const SHOPPING_CART_URL = '/Carito'

const productsCard = document.querySelectorAll('.product-item')

productsCard.forEach(product => {
    const addProductButton = product.children[4]
    const id = product.attributes.key.value
    const nameProduct = product.children[1].innerText
    const descriptionProduct = product.children[2].innerText
    const priceProduct = product.children[3].innerText
    const productImage = product.children[0].src

    addProductButton.addEventListener('click', (e) => {
        addProductToCart(e,{
        id,
        name: nameProduct,
        description: descriptionProduct,
        price: priceProduct,
        image: productImage,})
    })
})

const addProductToCart = (e, {id, name, description, price, image}) => {
    e.preventDefault()

    const cleanPrice = removePriceSymbol({price})
    let productFound = shoppingCart.findProductById({id})

    if (productFound == undefined) {
        const product = {
            id,
            name,
            description,
            price: cleanPrice,
            quantity: 1,
            image,
        }
        console.log('el producto es ', product)

        shoppingCart.addProduct({product})
    } else {
        shoppingCart.updateProductQuantity({product: {...productFound}})
    }

    window.location.assign(SHOPPING_CART_URL)
}
