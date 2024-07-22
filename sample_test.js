
const { JSDOM } = require('jsdom');

describe('Product Details', () => {
  let document;

  beforeAll(() => {
    const dom = new JSDOM(`
      <div id="product-detail">
        <h1 id="product-name">Test Product</h1>
        <p id="product-description">This is a test product.</p>
        <span id="product-price">$99.99</span>
      </div>
    `);
    document = dom.window.document;
  });

  test('renders product name', () => {
    const productName = document.querySelector('#product-name');
    expect(productName.textContent).toBe('Test Product');
  });

  test('renders product description', () => {
    const productDescription = document.querySelector('#product-description');
    expect(productDescription.textContent).toBe('This is a test product.');
  });

  test('renders product price', () => {
    const productPrice = document.querySelector('#product-price');
    expect(productPrice.textContent).toBe('$99.99');
  });
});
