@extends('layouts.app')
@section('title')
    Store Cart Page
@endsection
@section('content')
     <div class="page-content page-cart">
      <section
        class="store-breadcrumbs"
        data-aos="fade-down"
        data-aos-delay="100"
      >
        <div class="container">
          <div class="row">
            <div class="col-12">
              <nav>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="/index.html">Home</a>
                  </li>
                  <li class="breadcrumb-item active">Cart</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </section>
      <section class="store-cart">
        <div class="container">
          <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-12 table-responsive">
              <thead>
                <tr>
                  <td>Image</td>
                  <td>Name &amp; Seller</td>
                  <td>Price</td>
                  <td>Menu</td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <img
                      src="/images/product-details-1.jpg"
                      alt=""
                      class="cart-image"
                    />
                  </td>
                  <td>
                    <div class="product-title">Sofa Ternyaman</div>
                    <div class="product-subtitle">by Andi Sukka</div>
                  </td>
                  <td>
                    <div class="product-title">$29, 112</div>
                    <div class="product-subtitle">USD</div>
                  </td>
                  <td>
                    <a href="#" class="btn btn-remove-cart"> Remove </a>
                  </td>
                </tr>
                <tr class="foto">
                  <td>
                    <img
                      src="/images/product-details-2.jpg"
                      alt=""
                      class="cart-image"
                    />
                  </td>
                  <td>
                    <div class="product-title">Sneaker</div>
                    <div class="product-subtitle">by Angga</div>
                  </td>
                  <td>
                    <div class="product-title">$80,309</div>
                    <div class="product-subtitle">USD</div>
                  </td>
                  <td>
                    <a href="#" class="btn btn-remove-cart"> Remove </a>
                  </td>
                </tr>
                <tr class="foto">
                  <td>
                    <img
                      src="/images/product-details-3.jpg"
                      alt=""
                      class="cart-image"
                    />
                  </td>
                  <td>
                    <div class="product-title">Coffee holder</div>
                    <div class="product-subtitle">by Addicted</div>
                  </td>
                  <td>
                    <div class="product-title">$13,492</div>
                    <div class="product-subtitle">USD</div>
                  </td>
                  <td>
                    <a href="#" class="btn btn-remove-cart"> Remove </a>
                  </td>
                </tr>
              </tbody>
            </div>
          </div>
          <div class="row" data-aos="fade-up" data-aos-delay="150">
            <div class="col-12">
              <hr />
            </div>
          </div>
          <div class="row mb-2" data-aos="fade-up" data-aos-delay="200">
            <div class="col-md-6">
              <div class="form-group">
                <label for="addressOne">Address 1</label>
                <input
                  type="text"
                  class="form-control"
                  id="addressOne"
                  name="addressOne"
                  value="Setra Duta Cemara"
                />
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="addressTwo">Address 1</label>
                <input
                  type="text"
                  class="form-control"
                  id="addressTwo"
                  name="addressTwo"
                  value="Blok B2 No.34"
                />
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="province">province</label>
                <select name="province" id="province" class="form-control">
                  <option value="West Java">West Java</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="city">city</label>
                <select name="city" id="city" class="form-control">
                  <option value="Bandung">Bandung</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="postalCode">Postal Code</label>
                <input
                  type="text"
                  class="form-control"
                  id="postalCode"
                  name="postalCode"
                  value="40512"
                />
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="country">Country</label>
                <input
                  type="text"
                  class="form-control"
                  id="country"
                  name="country"
                  value="Indonesia"
                />
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="mobile">Mobile</label>
                <input
                  type="text"
                  class="form-control"
                  id="mobile"
                  name="mobile"
                  value="+628 2020 11111"
                />
              </div>
            </div>
          </div>
          <div class="row" data-aos="fade-up" data-aos-delay="150">
          <div class="col-12">
            <hr />
          </div>
          <div class="col-12">
            <h2 class="mb-1">Payment Information</h2>
          </div>
        </div>
        <div class="row mb-2" data-aos="fade-up" data-aos-delay="200">
          <div class="col-4 col-md-2">
            <div class="product-title">
              $10
            </div>
            <div class="product-subtitle">
              Country Tax
            </div>
          </div>
          <div class="col-4 col-md-3">
            <div class="product-title">
              $280
            </div>
            <div class="product-subtitle">
              Product insurance
            </div>
          </div>
          <div class="col-4 col-md-2">
            <div class="product-title">
              $580
            </div>
            <div class="product-subtitle">
              Ship to Jakarta
            </div>
          </div>
          <div class="col-4 col-md-2">
            <div class="product-title text-success">
              $392,498
            </div>
            <div class="product-subtitle">
              Total
            </div>
          </div>
          <div class="col-8 col-md-3">
            <a href="/success.html" class="btn btn-success mt-4 px-4 btn-block">Check out now</a>
          </div>
        </div>
      </section>
    </div>
@endsection
