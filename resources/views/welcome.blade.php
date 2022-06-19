{{-- @extends('layouts.user-layout')
@section('content')

<header class="header-2">
  <div class="page-header min-vh-75 relative" style="background-image: url('./assets/img/bg2.jpg')">
    <span class="mask bg-gradient-primary opacity-4"></span>
    <div class="container">
      <div class="row">
        <div class="col-lg-7 text-center mx-auto">
          <h1 class="text-white pt-3 mt-n5">Material Kit 2</h1>
          <p class="lead text-white mt-3">Free & Open Source Web UI Kit built over Bootstrap 5. <br/> Join over 1.6 million developers around the world. </p>
        </div>
      </div>
    </div>
  </div>
</header>

<div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">

<section class="pt-3 pb-4" id="count-stats">
  <div class="container">
    <div class="row">
      <div class="col-lg-9 mx-auto py-3">
        <div class="row">
          <div class="col-md-4 position-relative">
            <div class="p-3 text-center">
              <h1 class="text-gradient text-primary"><span id="state1" countTo="70">0</span>+</h1>
              <h5 class="mt-3">Coded Elements</h5>
              <p class="text-sm font-weight-normal">From buttons, to inputs, navbars, alerts or cards, you are covered</p>
            </div>
            <hr class="vertical dark">
          </div>
          <div class="col-md-4 position-relative">
            <div class="p-3 text-center">
              <h1 class="text-gradient text-primary"> <span id="state2" countTo="15">0</span>+</h1>
              <h5 class="mt-3">Design Blocks</h5>
              <p class="text-sm font-weight-normal">Mix the sections, change the colors and unleash your creativity</p>
            </div>
            <hr class="vertical dark">
          </div>
          <div class="col-md-4">
            <div class="p-3 text-center">
              <h1 class="text-gradient text-primary" id="state3" countTo="4">0</h1>
              <h5 class="mt-3">Pages</h5>
              <p class="text-sm font-weight-normal">Save 3-4 weeks of work when you use our pre-made pages for your website</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="my-5 py-5">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-4 ms-auto me-auto p-lg-4 mt-lg-0 mt-4">
        <div class="rotating-card-container">
          <div class="card card-rotate card-background card-background-mask-primary shadow-primary mt-md-0 mt-5">
            <div class="front front-background" style="background-image: url(https://images.unsplash.com/photo-1569683795645-b62e50fbf103?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=987&q=80); background-size: cover;">
              <div class="card-body py-7 text-center">
                <i class="material-icons text-white text-4xl my-3">touch_app</i>
                <h3 class="text-white">Feel the <br /> Material Kit</h3>
                <p class="text-white opacity-8">All the Bootstrap components that you need in a development have been re-design with the new look.</p>
              </div>
            </div>
            <div class="back back-background" style="background-image: url(https://images.unsplash.com/photo-1498889444388-e67ea62c464b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1365&q=80); background-size: cover;">
              <div class="card-body pt-7 text-center">
                <h3 class="text-white">Discover More</h3>
                <p class="text-white opacity-8"> You will save a lot of time going from prototyping to full-functional code because all elements are implemented.</p>
                <a href=".//sections/page-sections/hero-sections.html" target="_blank" class="btn btn-white btn-sm w-50 mx-auto mt-3">Start with Headers</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 ms-auto">
        <div class="row justify-content-start">
          <div class="col-md-6">
            <div class="info">
              <i class="material-icons text-gradient text-primary text-3xl">content_copy</i>
              <h5 class="font-weight-bolder mt-3">Full Documentation</h5>
              <p class="pe-5">Built by developers for developers. Check the foundation and you will find everything inside our documentation.</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="info">
              <i class="material-icons text-gradient text-primary text-3xl">flip_to_front</i>
              <h5 class="font-weight-bolder mt-3">Bootstrap 5 Ready</h5>
              <p class="pe-3">The world’s most popular front-end open source toolkit, featuring Sass variables and mixins.</p>
            </div>
          </div>
        </div>
        <div class="row justify-content-start mt-5">
          <div class="col-md-6 mt-3">
            <i class="material-icons text-gradient text-primary text-3xl">price_change</i>
            <h5 class="font-weight-bolder mt-3">Save Time & Money</h5>
            <p class="pe-5">Creating your design from scratch with dedicated designers can be very expensive. Start with our Design System.</p>
          </div>
          <div class="col-md-6 mt-3">
            <div class="info">
              <i class="material-icons text-gradient text-primary text-3xl">devices</i>
              <h5 class="font-weight-bolder mt-3">Fully Responsive</h5>
              <p class="pe-3">Regardless of the screen size, the website content will naturally fit the given resolution.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-4 ms-auto me-auto p-lg-4 mt-lg-0 mt-4">
        <div class="rotating-card-container">
          <div class="card card-rotate card-background card-background-mask-primary shadow-primary mt-md-0 mt-5">
            <div class="front front-background" style="background-image: url(https://images.unsplash.com/photo-1569683795645-b62e50fbf103?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=987&q=80); background-size: cover;">
              <div class="card-body py-7 text-center">
                <i class="material-icons text-white text-4xl my-3">touch_app</i>
                <h3 class="text-white">Feel the <br /> Material Kit</h3>
                <p class="text-white opacity-8">All the Bootstrap components that you need in a development have been re-design with the new look.</p>
              </div>
            </div>
            <div class="back back-background" style="background-image: url(https://images.unsplash.com/photo-1498889444388-e67ea62c464b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1365&q=80); background-size: cover;">
              <div class="card-body pt-7 text-center">
                <h3 class="text-white">Discover More</h3>
                <p class="text-white opacity-8"> You will save a lot of time going from prototyping to full-functional code because all elements are implemented.</p>
                <a href=".//sections/page-sections/hero-sections.html" target="_blank" class="btn btn-white btn-sm w-50 mx-auto mt-3">Start with Headers</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 ms-auto">
        <div class="row justify-content-start">
          <div class="col-md-6">
            <div class="info">
              <i class="material-icons text-gradient text-primary text-3xl">content_copy</i>
              <h5 class="font-weight-bolder mt-3">Full Documentation</h5>
              <p class="pe-5">Built by developers for developers. Check the foundation and you will find everything inside our documentation.</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="info">
              <i class="material-icons text-gradient text-primary text-3xl">flip_to_front</i>
              <h5 class="font-weight-bolder mt-3">Bootstrap 5 Ready</h5>
              <p class="pe-3">The world’s most popular front-end open source toolkit, featuring Sass variables and mixins.</p>
            </div>
          </div>
        </div>
        <div class="row justify-content-start mt-5">
          <div class="col-md-6 mt-3">
            <i class="material-icons text-gradient text-primary text-3xl">price_change</i>
            <h5 class="font-weight-bolder mt-3">Save Time & Money</h5>
            <p class="pe-5">Creating your design from scratch with dedicated designers can be very expensive. Start with our Design System.</p>
          </div>
          <div class="col-md-6 mt-3">
            <div class="info">
              <i class="material-icons text-gradient text-primary text-3xl">devices</i>
              <h5 class="font-weight-bolder mt-3">Fully Responsive</h5>
              <p class="pe-3">Regardless of the screen size, the website content will naturally fit the given resolution.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-4 ms-auto me-auto p-lg-4 mt-lg-0 mt-4">
        <div class="rotating-card-container">
          <div class="card card-rotate card-background card-background-mask-primary shadow-primary mt-md-0 mt-5">
            <div class="front front-background" style="background-image: url(https://images.unsplash.com/photo-1569683795645-b62e50fbf103?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=987&q=80); background-size: cover;">
              <div class="card-body py-7 text-center">
                <i class="material-icons text-white text-4xl my-3">touch_app</i>
                <h3 class="text-white">Feel the <br /> Material Kit</h3>
                <p class="text-white opacity-8">All the Bootstrap components that you need in a development have been re-design with the new look.</p>
              </div>
            </div>
            <div class="back back-background" style="background-image: url(https://images.unsplash.com/photo-1498889444388-e67ea62c464b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1365&q=80); background-size: cover;">
              <div class="card-body pt-7 text-center">
                <h3 class="text-white">Discover More</h3>
                <p class="text-white opacity-8"> You will save a lot of time going from prototyping to full-functional code because all elements are implemented.</p>
                <a href=".//sections/page-sections/hero-sections.html" target="_blank" class="btn btn-white btn-sm w-50 mx-auto mt-3">Start with Headers</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 ms-auto">
        <div class="row justify-content-start">
          <div class="col-md-6">
            <div class="info">
              <i class="material-icons text-gradient text-primary text-3xl">content_copy</i>
              <h5 class="font-weight-bolder mt-3">Full Documentation</h5>
              <p class="pe-5">Built by developers for developers. Check the foundation and you will find everything inside our documentation.</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="info">
              <i class="material-icons text-gradient text-primary text-3xl">flip_to_front</i>
              <h5 class="font-weight-bolder mt-3">Bootstrap 5 Ready</h5>
              <p class="pe-3">The world’s most popular front-end open source toolkit, featuring Sass variables and mixins.</p>
            </div>
          </div>
        </div>
        <div class="row justify-content-start mt-5">
          <div class="col-md-6 mt-3">
            <i class="material-icons text-gradient text-primary text-3xl">price_change</i>
            <h5 class="font-weight-bolder mt-3">Save Time & Money</h5>
            <p class="pe-5">Creating your design from scratch with dedicated designers can be very expensive. Start with our Design System.</p>
          </div>
          <div class="col-md-6 mt-3">
            <div class="info">
              <i class="material-icons text-gradient text-primary text-3xl">devices</i>
              <h5 class="font-weight-bolder mt-3">Fully Responsive</h5>
              <p class="pe-3">Regardless of the screen size, the website content will naturally fit the given resolution.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="py-5">
  <div class="container">
    <div class="row">
      <div class="row text-center my-sm-5 mt-5">
        <div class="col-lg-6 mx-auto">
          <span class="badge bg-primary mb-3">Boost creativity</span>
          <h2 class="">With our coded pages</h2>
          <p class="lead">The easiest way to get started is to use one of our <br /> pre-built example pages. </p>
        </div>
      </div>
    </div>
  </div>
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-8">
        <div class="row mt-4">
          <div class="col-md-6">
            <a href="./pages/about-us.html">
              <div class="card move-on-hover">
                <img class="w-100" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/assets/img/about-us.jpg" alt="aboutus">
              </div>
              <div class="mt-2 ms-2">
                <h6 class="mb-0">About Us Page</h6>
              </div>
            </a>
          </div>
          <div class="col-md-6 mt-md-0 mt-5">
            <a href="./pages/contact-us.html">
              <div class="card move-on-hover">
                <img class="w-100" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/assets/img/contact-us.jpg" alt="contacus">
              </div>
              <div class="mt-2 ms-2">
                <h6 class="mb-0">Contact Us Page</h6>
              </div>
            </a>
          </div>
          <div class="col-md-6 mt-md-3 mt-6">
            <a href="./pages/sign-in.html">
              <div class="card move-on-hover">
                <img class="w-100" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/assets/img/sign-in.jpg" alt="signin">
              </div>
              <div class="mt-2 ms-2">
                <h6 class="mb-0">Sign In Page</h6>
              </div>
            </a>
          </div>
          <div class="col-md-6 mt-md-3 mt-6">
            <a href="./pages/author.html">
              <div class="card move-on-hover">
                <img class="w-100" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/assets/img/author.jpg" alt="author">
              </div>
              <div class="mt-2 ms-2">
                <h6 class="mb-0">Author Page</h6>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="col-md-3 mx-auto mt-md-0 mt-5">
        <div class="position-sticky" style="top:100px !important">
          <h4 class="">Presentation Pages for Company, Sign In Page, Author and Contact</h4>
          <h6 class="text-secondary font-weight-normal">These is just a small selection of the multiple possibitilies you have. Focus on the business, not on the design.</h6>
        </div>
      </div>
    </div>
</section>


<!-- -------- START Content Presentation Docs ------- -->
<div class="container mt-sm-5">
  <div class="page-header py-6 py-md-5 my-sm-3 mb-3 border-radius-xl" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/desktop.jpg');" loading="lazy">
    <span class="mask bg-gradient-dark"></span>
    <div class="container">
      <div class="row">
        <div class="col-lg-6 ms-lg-5">
          <h4 class="text-white">Built by developers</h4>
          <h1 class="text-white">Complex Documentation</h1>
          <p class="lead text-white opacity-8">From colors, cards, typography to complex elements, you will find the full documentation. Play with the utility classes and you will create unlimited combinations for our components.</p>
          <a href="https://www.creative-tim.com/learning-lab/bootstrap/overview/material-kit" class="text-white icon-move-right">
            Read docs
            <i class="fas fa-arrow-right text-sm ms-1"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-lg-4">
      <div class="info-horizontal bg-gradient-primary border-radius-xl d-block d-md-flex p-4">
        <i class="material-icons text-white text-3xl">flag</i>
        <div class="ps-0 ps-md-3 mt-3 mt-md-0">
          <h5 class="text-white">Getting Started</h5>
          <p class="text-white">Check the possible ways of working with our product and the necessary files for building your own project.</p>
          <a href="https://www.creative-tim.com/learning-lab/bootstrap/overview/material-kit" class="text-white icon-move-right">
            Let's start
            <i class="fas fa-arrow-right text-sm ms-1"></i>
          </a>
        </div>
      </div>
    </div>
    <div class="col-lg-4 px-lg-1 mt-lg-0 mt-4">
      <div class="info-horizontal bg-gray-100 border-radius-xl d-block d-md-flex p-4 h-100">
        <i class="material-icons text-gradient text-primary text-3xl">precision_manufacturing</i>
        <div class="ps-0 ps-md-3 mt-3 mt-md-0">
          <h5>Plugins</h5>
          <p>Get inspiration and have an overview about the plugins that we used to create the Material Kit.</p>
          <a href="https://www.creative-tim.com/learning-lab/bootstrap/datepicker/material-kit" class="text-primary icon-move-right">
            Read more
            <i class="fas fa-arrow-right text-sm ms-1"></i>
          </a>
        </div>
      </div>
    </div>

    <div class="col-lg-4 mt-lg-0 mt-4">
      <div class="info-horizontal bg-gray-100 border-radius-xl d-block d-md-flex p-4">
        <i class="material-icons text-gradient text-primary text-3xl">receipt_long</i>
        <div class="ps-0 ps-md-3 mt-3 mt-md-0">
          <h5>Utility Classes</h5>
          <p>Material Kit is giving you a lot of pre-made elements. For those who want flexibility, we included many utility classes.</p>
          <a href="https://www.creative-tim.com/learning-lab/bootstrap/utilities/material-kit" class="text-primary icon-move-right">
            Read more
            <i class="fas fa-arrow-right text-sm ms-1"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- -------- END Content Presentation Docs ------- -->


<section class="py-7">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 mx-auto text-center">
        <h2 class="mb-0">Trusted by over</h2>
        <h2 class="text-gradient text-primary mb-3">1,679,477+ web developers</h2>
        <p class="lead">Many Fortune 500 companies, startups, universities and governmental institutions love Creative Tim's products. </p>
      </div>
    </div>
    <div class="row mt-6">
      <div class="col-lg-4 col-md-8">
        <div class="card card-plain">
          <div class="card-body">
            <div class="author">
              <div class="name">
                <h6 class="mb-0 font-weight-bolder">Nick Willever</h6>
                <div class="stats">
                  <i class="far fa-clock"></i> 1 day ago
                </div>
              </div>
            </div>
            <p class="mt-4">"This is an excellent product, the documentation is excellent and helped me get things done more efficiently."</p>
            <div class="rating mt-3">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-8 ms-md-auto">
        <div class="card bg-gradient-primary">
          <div class="card-body">
            <div class="author align-items-center">
              <div class="name">
                <h6 class="text-white mb-0 font-weight-bolder">Shailesh Kushwaha</h6>
                <div class="stats text-white">
                  <i class="far fa-clock"></i> 1 week ago
                </div>
              </div>
            </div>
            <p class="mt-4 text-white">"I found solution to all my design needs from Creative Tim. I use them as a freelancer in my hobby projects for fun! And its really affordable, very humble guys !!!"</p>
            <div class="rating mt-3">
              <i class="fas fa-star text-white"></i>
              <i class="fas fa-star text-white"></i>
              <i class="fas fa-star text-white"></i>
              <i class="fas fa-star text-white"></i>
              <i class="fas fa-star text-white"></i>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-8">
        <div class="card card-plain">
          <div class="card-body">
            <div class="author">
              <div class="name">
                <h6 class="mb-0 font-weight-bolder">Samuel Kamuli</h6>
                <div class="stats">
                  <i class="far fa-clock"></i> 3 weeks ago
                </div>
              </div>
            </div>
            <p class="mt-4">"Great product. Helped me cut the time to set up a site. I used the components within instead of starting from scratch. I highly recommend for developers who want to spend more time on the backend!."</p>
            <div class="rating mt-3">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
          </div>
        </div>
      </div>

    </div>
    <hr class="horizontal dark my-5">
    <div class="row">
      <div class="col-lg-2 col-md-4 col-6 ms-auto">
        <img class="w-100 opacity-6" src="./assets/img/logos/gray-logos/logo-apple.svg" alt="Logo">
      </div>
      <div class="col-lg-2 col-md-4 col-6">
        <img class="w-100 opacity-6" src="./assets/img/logos/gray-logos/logo-facebook.svg" alt="Logo">
      </div>
      <div class="col-lg-2 col-md-4 col-6">
        <img class="w-100 opacity-6" src="./assets/img/logos/gray-logos/logo-nasa.svg" alt="Logo">
      </div>
      <div class="col-lg-2 col-md-4 col-6 ms-lg-0 ms-md-auto">
        <img class="w-100 opacity-6" src="./assets/img/logos/gray-logos/logo-vodafone.svg" alt="Logo">
      </div>
      <div class="col-lg-2 col-md-4 col-6 me-md-auto mx-md-0 mx-auto">
        <img class="w-100 opacity-6" src="./assets/img/logos/gray-logos/logo-digitalocean.svg" alt="Logo">
      </div>
    </div>
  </div>
</section>


<section class="py-sm-7" id="download-soft-ui">
  <div class="bg-gradient-dark position-relative m-3 border-radius-xl overflow-hidden">
    <img src="./assets/img/shapes/waves-white.svg" alt="pattern-lines" class="position-absolute start-0 top-md-0 w-100 opacity-2">
    <div class="container py-7 postion-relative z-index-2 position-relative">
      <div class="row">
        <div class="col-md-7 mx-auto text-center">
          <h3 class="text-white mb-0">Do you love this awesome</h3>
          <h3 class="text-white">UI Kit for Bootstrap 5?</h3>
          <p class="text-white mb-5">Cause if you do, it can be yours for FREE. Hit the button below to navigate to Creative Tim where you can find the Design System in HTML. Start a new project or give an old Bootstrap project a new look!</p>
          <a href="https://www.creative-tim.com/product/material-kit" class="btn btn-primary btn-lg mb-3 mb-sm-0">Download HTML</a>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-6 mx-auto">
        <div class="text-center">
          <h3 class="mt-5 mb-4">Available on these technologies</h3>
          <div class="row justify-content-center">
            <div class="col-lg-2 col-4">
              <a href="https://www.creative-tim.com/product/soft-ui-design-system" target="_blank">
                <img src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/logos/bootstrap5.jpg" class="img-fluid" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Bootstrap 5 - Most popular front-end component library">
              </a>
            </div>
            <div class="col-lg-2 col-4">
              <a href="javascript:;">
                <img src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/logos/icon-tailwind.jpg" class="img-fluid opacity-6" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Comming soon">
              </a>
            </div>
            <div class="col-lg-2 col-4">
              <a href="javascript:;">
                <img src="https://s3.amazonaws.com/creativetim_bucket/tim_static_images/presentation-page/vue.jpg" class="img-fluid opacity-6" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Comming soon">
              </a>
            </div>
            <div class="col-lg-2 col-4">
              <a href="javascript:;">
                <img src="https://s3.amazonaws.com/creativetim_bucket/tim_static_images/presentation-page/angular.jpg" class="img-fluid opacity-6" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Comming soon">
              </a>
            </div>
            <div class="col-lg-2 col-4">
              <a href="javascript:;">
                <img src="https://s3.amazonaws.com/creativetim_bucket/tim_static_images/presentation-page/react.jpg" class="img-fluid opacity-6" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Comming soon">
              </a>
            </div>
            <div class="col-lg-2 col-4">
              <a href="javascript:;" target="_blank" >
                <img src="https://s3.amazonaws.com/creativetim_bucket/tim_static_images/presentation-page/sketch.jpg" class="img-fluid opacity-6" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Comming soon">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="my-5">
  <div class="container">
    <div class="row">
      <div class="col-md-7 col-12 my-auto">
        <h3 class="text-gradient text-primary mb-0">You liked it and</h3>
        <h3>Want more?</h3>
        <p class="pe-md-5 mb-4">
          Most complex and innovative Design System Made by <a href="https://creative-tim.com/" target="_blank">Creative Tim </a> . Check our latest Premium Bootstrap 5 UI Kit.

          Designed for those who like bold elements and beautiful websites. Made of hundred of elements, designed blocks and fully coded pages, Material Kit is ready to help you create stunning websites and webapps.
        </p>
        <div class="github-buttons">
          <a href="https://www.creative-tim.com/product/material-kit-pro?ref=index-mk2" target="_blank" class="btn bg-gradient-primary mb-5 mb-sm-0">Upgrade to Pro</a>
          <div class="github-button">
            <span></span>
          </div>
        </div>
      </div>
      <div class="col-md-5 col-12 my-auto">
        <a href="https://www.creative-tim.com/product/material-kit-pro?ref=index-mk2">
          <img class="w-100 border-radius-lg shadow-lg" src="https://s3.amazonaws.com/creativetim_bucket/products/46/original/material-kit-pro.jpg?1632843641" alt="Product Image">
        </a>
      </div>
    </div>
  </div>
</section>


<!-- -------   START PRE-FOOTER 2 - simple social line w/ title & 3 buttons    -------- -->
<div class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 ms-auto">
        <h4 class="mb-1">Thank you for your support!</h4>
        <p class="lead mb-0">We deliver the best web products</p>
      </div>
      <div class="col-lg-5 me-lg-auto my-lg-auto text-lg-end mt-5">
        <a href="https://twitter.com/intent/tweet?text=Check%20Material%20UI%20Kit%20made%20by%20%40CreativeTim%20%23webdesign%20%23designsystem%20%23bootstrap5&url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fmaterial-kit" class="btn btn-twitter mb-0 me-2" target="_blank">
          <i class="fab fa-twitter me-1"></i> Tweet
        </a>
        <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/material-kit" class="btn btn-facebook mb-0 me-2" target="_blank">
          <i class="fab fa-facebook-square me-1"></i> Share
        </a>
        <a href="https://www.pinterest.com/pin/create/button/?url=https://www.creative-tim.com/product/material-kit" class="btn btn-pinterest mb-0 me-2" target="_blank">
          <i class="fab fa-pinterest me-1"></i> Pin it
        </a>
      </div>
    </div>
  </div>
</div>
<!-- -------   END PRE-FOOTER 2 - simple social line w/ title & 3 buttons    -------- -->

</div>

@endsection --}}


@extends('layouts.loginRegis-layout')
@section('content-login')
<div class="page-header align-items-start min-vh-100" style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80');" loading="lazy">
    <span class="mask bg-gradient-dark opacity-6"></span>
    <div class="container my-auto">
      <div class="row">
        <div class="col-lg-4 col-md-8 col-12 mx-auto">
          <div class="card z-index-0 fadeIn3 fadeInBottom">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">ເຂົ້າສູ່ລະບົບ</h4>
                {{-- <div class="row mt-3">
                  <div class="col-2 text-center ms-auto">
                    <a class="btn btn-link px-3" href="#">
                        <i style="color:#0a4dd4;font-size:40px" class="fa-brands fa-facebook"></i>
                    </a>
                  </div>
                  <div class="col-2 text-center me-auto">
                    <a class="btn btn-link px-3" href="#">
                        <i style="color:#ff0000;font-size:40px" class="fa-brands fa-google-plus-g"></i>
                    </a>
                  </div>
                </div> --}}
              </div>
            </div>
            <div class="card-body">                    
              <form role="form" class="text-start"  method="POST" action="{{ route('login') }}">
                @csrf
                <div class="input-group input-group-outline my-3">
                  <label class="form-label">ອີເມວ</label>
                  <input  type="email" class="form-control" name="email" value="{{ old('email') }}" required  autofocus>
                </div>
                <div class="input-group input-group-outline mb-3">
                  <label class="form-label">ລະຫັດຜ່ານ</label>
                  <input type="password" class="form-control" name=" password" required>
                </div>
                <div class="form-check form-switch d-flex align-items-center mb-3">
                  <input class="form-check-input" type="checkbox" id="rememberMe">
                  <label class="form-check-label mb-0 ms-2" for="rememberMe">ຈົດຈຳ</label>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">ເຂົ້າສູ່ລະບົບ</button>
                </div>
                <p class="mt-4 text-sm text-center">
                  <a href="/register">ຍັງບໍ່ມີບັນຊີບໍ່?</a> 
                </p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </div>
@endsection
