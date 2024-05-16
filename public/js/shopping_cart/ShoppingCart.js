import Reactive from "../helpers/Reactive.js";

class ShoppingCart
{
    #products

    constructor() {
        this.#products = JSON.parse(localStorage.getItem('products')) ?? []
        this.total = new Reactive(0)
        this.updateTotal()
    }

    getProducts()
    {
        return this.#products
    }

    addProduct({product})
    {
        this.#products.push(product)
        const productsUpdated = [...this.#products]
        localStorage.setItem('products', JSON.stringify(productsUpdated))
    }

    clearCart()
    {
        this.#products = []
        localStorage.removeItem('products')
    }

    findProductById({id})
    {
        return this.#products.find(product => product.id === id)
    }

    updateProductQuantity({product})
    {
        const productFound = this.findProductById({id: product.id})
        productFound.quantity+=1

        localStorage.setItem('products', JSON.stringify(this.#products))
    }

    getTotalOfProduct({product})
    {
        return Number(Number(product.price) * Number(product.quantity)).toFixed(2)
    }

    removeProduct({id})
    {
        const productFound = this.findProductById({id})

        if(productFound !== undefined) {
            this.#products = this.#products.filter(product => product.id !== productFound.id)
            localStorage.setItem('products', JSON.stringify(this.#products))
            this.updateTotal()
        }
    }

    increaseQuantity({quantity, id}){
        const productFound = this.findProductById({id})

        if (productFound !== undefined) {
            productFound.quantity+= quantity
            this.updateTotal()
        }

        localStorage.setItem('products', JSON.stringify(this.#products))
        this.#products = JSON.parse(localStorage.getItem('products')) ?? []
    }

    decreaseQuantity({quantity, id}) {
        const productFound = this.findProductById({id})

        if (productFound !== undefined && productFound.quantity > 0) {
            productFound.quantity-=quantity
            this.updateTotal()
        }

        localStorage.setItem('products', JSON.stringify(this.#products))
        this.#products = JSON.parse(localStorage.getItem('products')) ?? []
    }

    updateTotal()
    {
        this.total.value = this.#products.reduce((acc, current) => {
            const totalPerProduct = this.getTotalOfProduct({product: current})
            return Number(Number(acc) + Number(totalPerProduct)).toFixed(2)
        }, 0)
    }
}

export default Object.freeze(new ShoppingCart())
