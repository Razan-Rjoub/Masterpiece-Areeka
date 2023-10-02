
const products = [
    { imgSrc: '../images/Bedroom-category/Ghurfaty-product.jpg', title: 'Master Bedroom', price: '1000JD' },
    { imgSrc: '../images/Bedroom-category/BoyBedroom.jpg', title: 'Boy Bedroom', price: '2500JD' },
    { imgSrc: '../images/Bedroom-category/GirlsBedroom.jpg', title: 'Girls Bedroom', price: '3000JD' },
    { imgSrc: '../images/Bedroom-category/GirlsBedroom2.jpg', title: 'Girls Bedroom', price: '1000JD' },
    { imgSrc: '../images/Bedroom-category/BoyBedroom2.jpg', title: 'Boy Bedroom', price: '3000JD' },
    { imgSrc: '../images/Bedroom-category/MasterBedroom1.jpg', title: 'Master Bedroom', price: '2000JD' },
    { imgSrc: '../images/Bedroom-category/GirlsBedroom4.jpg', title: 'Girls Bedroom', price: '2500JD' },
    { imgSrc: '../images/Bedroom-category/GirlsBedroom3.jpg', title: 'Girls Bedroom', price: '3000JD' },
    { imgSrc: '../images/Bedroom-category/MasterBedroom2.jpg', title: 'Master Bedroom', price: '2700JD' },
];
function createProductItem(product) {
    const itemDiv = document.createElement('div');
    itemDiv.classList.add('col-lg-4', 'col-sm-6');
    itemDiv.innerHTML = `
    <div class="single_product_item">
    <a href="../single-product/single.html"><img src="${product.imgSrc}" alt="" ></a>
    <div class="single_product_text">
        <h4>${product.title}</h4>
        <h3>${product.price}</h3>
        <a href="#" class="add_cart">+ add to cart<i class="bi bi-heart"></i></a>
    </div>
</div>
    `;
    return itemDiv;
}

function displayProductsInGrid() {
    const container = document.getElementById('product-container');
    container.innerHTML = ''; 

    for (let i = 0; i < products.length; i++) {
        const productItem = createProductItem(products[i]);
        container.appendChild(productItem);
    }
}
displayProductsInGrid();

function updateCategory(category) {
    const select = document.getElementsByClassName("category-select")[0];
    select.innerHTML = category;
}

function cartquantity() {
    var count = 0;
    console.log(count++);

}