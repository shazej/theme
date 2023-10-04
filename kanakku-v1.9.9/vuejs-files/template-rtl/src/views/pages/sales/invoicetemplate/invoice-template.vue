<template>
  <!-- Main Wrapper -->
  <div class="main-wrapper">
    <layout-header></layout-header>
    <layout-sidebar></layout-sidebar>
    <!-- Page Wrapper -->
    <div class="page-wrapper">
      <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
          <div class="content-page-header">
            <h5>Invoice Templates</h5>
          </div>
        </div>
        <!-- /Page Header -->
        <div class="card mb-0">
          <div class="card-body pb-0">
            <div class="invoice-card-title">
              <h6>General Invoice</h6>
            </div>
            <div class="row">
              <!-- Invoice List -->
              <div class="col-md-6 col-xl-3 col-sm-12 d-md-flex d-sm-block">
                <div
                  class="blog grid-blog flex-fill d-flex flex-wrap align-content-betweens"
                >
                  <div class="blog-image">
                    <router-link to="general-invoice-1"
                      ><img
                        class="img-fluid"
                        src="@/assets/img/general-invoice-1.svg"
                        alt="Post Image"
                      />
                    </router-link>
                  </div>
                  <div class="invoice-content-title">
                    <router-link to="general-invoice-1">General Invoice 1</router-link>
                  </div>
                </div>
              </div>
              <!-- /Invoice List -->
              <!-- Invoice List -->
              <div class="col-md-6 col-xl-3 col-sm-12 d-md-flex d-sm-block">
                <div
                  class="blog grid-blog flex-fill d-flex flex-wrap align-content-between"
                >
                  <div class="blog-image">
                    <router-link to="general-invoice-2"
                      ><img
                        class="img-fluid"
                        src="@/assets/img/general-invoice-2.svg"
                        alt="Post Image"
                      />
                    </router-link>
                  </div>
                  <div class="invoice-content-title">
                    <router-link to="general-invoice-2"> General Invoice 2 </router-link>
                  </div>
                </div>
              </div>
              <!-- /Invoice List -->
              <!-- Invoice List -->
              <div class="col-md-6 col-xl-3 col-sm-12 d-md-flex d-sm-block">
                <div
                  class="blog grid-blog flex-fill d-flex flex-wrap align-content-between"
                >
                  <div class="blog-image">
                    <router-link to="general-invoice-3"
                      ><img
                        class="img-fluid"
                        src="@/assets/img/general-invoice-3.svg"
                        alt="Post Image"
                      />
                    </router-link>
                  </div>
                  <div class="invoice-content-title">
                    <router-link to="general-invoice-3"> General Invoice 3 </router-link>
                  </div>
                </div>
              </div>
              <!-- /Invoice List -->
              <!-- Invoice List -->
              <div class="col-md-6 col-xl-3 col-sm-12 d-md-flex d-sm-block">
                <div
                  class="blog grid-blog flex-fill d-flex flex-wrap align-content-between"
                >
                  <div class="blog-image">
                    <router-link to="general-invoice-4"
                      ><img
                        class="img-fluid"
                        src="@/assets/img/general-invoice-4.svg"
                        alt="Post Image"
                      />
                    </router-link>
                  </div>
                  <div class="invoice-content-title">
                    <router-link to="general-invoice-4"> General Invoice 4 </router-link>
                  </div>
                </div>
              </div>
              <!-- Invoice List -->
              <div class="col-md-6 col-xl-3 col-sm-12 d-md-flex d-sm-block">
                <div
                  class="blog grid-blog flex-fill d-flex flex-wrap align-content-between"
                >
                  <div class="blog-image">
                    <router-link to="general-invoice-5"
                      ><img
                        class="img-fluid"
                        src="@/assets/img/general-invoice-5.svg"
                        alt="Post Image"
                      />
                    </router-link>
                  </div>
                  <div class="invoice-content-title">
                    <router-link to="general-invoice-5"> General Invoice 5 </router-link>
                  </div>
                </div>
              </div>
              <!-- /Invoice List -->
              <!-- /Invoice List -->
            </div>
            <div class="row">
              <div class="invoice-card-title">
                <h6>Category Based Invoice</h6>
              </div>
              <!-- Invoice List -->
              <div class="col-md-6 col-xl-3 col-sm-12 d-md-flex d-sm-block">
                <div
                  class="blog grid-blog flex-fill d-flex flex-wrap align-content-between"
                >
                  <div class="blog-image">
                    <router-link to="bus-ticket"
                      ><img
                        class="img-fluid"
                        src="@/assets/img/general-invoice-6.svg"
                        alt="Post Image"
                      />
                    </router-link>
                  </div>
                  <div class="invoice-content-title">
                    <router-link to="bus-ticket">
                      Bus Ticket Booking Invoice
                    </router-link>
                  </div>
                </div>
              </div>
              <!-- /Invoice List -->
              <!-- Invoice List -->
              <div class="col-md-6 col-xl-3 col-sm-12 d-md-flex d-sm-block">
                <div
                  class="blog grid-blog flex-fill d-flex flex-wrap align-content-between"
                >
                  <div class="blog-image">
                    <router-link to="car-booking-invoice"
                      ><img
                        class="img-fluid"
                        src="@/assets/img/general-invoice-7.svg"
                        alt="Post Image"
                      />
                    </router-link>
                  </div>
                  <div class="invoice-content-title">
                    <router-link to="car-booking-invoice">
                      Car Booking Invoice
                    </router-link>
                  </div>
                </div>
              </div>
              <!-- /Invoice List -->
              <!-- Invoice List -->
              <div class="col-md-6 col-xl-3 col-sm-12 d-md-flex d-sm-block">
                <div
                  class="blog grid-blog flex-fill d-flex flex-wrap align-content-between"
                >
                  <div class="blog-image">
                    <router-link to="coffee-shop"
                      ><img
                        class="img-fluid"
                        src="@/assets/img/general-invoice-8.svg"
                        alt="Post Image"
                      />
                    </router-link>
                  </div>
                  <div class="invoice-content-title">
                    <router-link to="coffee-shop"> Coffee Shop Invoice </router-link>
                  </div>
                </div>
              </div>
              <!-- /Invoice List -->
              <!-- Invoice List -->
              <div class="col-md-6 col-xl-3 col-sm-12 d-md-flex d-sm-block">
                <div
                  class="blog grid-blog flex-fill d-flex flex-wrap align-content-between"
                >
                  <div class="blog-image">
                    <router-link to="domain-hosting"
                      ><img
                        class="img-fluid"
                        src="@/assets/img/general-invoice-9.svg"
                        alt="Post Image"
                      />
                    </router-link>
                  </div>
                  <div class="invoice-content-title">
                    <router-link to="domain-hosting">
                      Domain & Hosting Invoice
                    </router-link>
                  </div>
                </div>
              </div>
              <!-- /Invoice List -->

              <!-- Invoice List -->
              <div class="col-md-6 col-xl-3 col-sm-12 d-md-flex d-sm-block">
                <div
                  class="blog grid-blog flex-fill d-flex flex-wrap align-content-between"
                >
                  <div class="blog-image">
                    <router-link to="ecommerce"
                      ><img
                        class="img-fluid"
                        src="@/assets/img/general-invoice-10.svg"
                        alt="Post Image"
                      />
                    </router-link>
                  </div>
                  <div class="invoice-content-title">
                    <router-link to="ecommerce"> Ecommerce Invoice </router-link>
                  </div>
                </div>
              </div>
              <!-- /Invoice List -->
              <!-- Invoice List -->
              <div class="col-md-6 col-xl-3 col-sm-12 d-md-flex d-sm-block">
                <div
                  class="blog grid-blog flex-fill d-flex flex-wrap align-content-between"
                >
                  <div class="blog-image">
                    <router-link to="fitness-center"
                      ><img
                        class="img-fluid"
                        src="@/assets/img/general-invoice-11.svg"
                        alt="Post Image"
                      />
                    </router-link>
                  </div>
                  <div class="invoice-content-title">
                    <router-link to="fitness-center">
                      Fitness Center Invoice
                    </router-link>
                  </div>
                </div>
              </div>
              <!-- /Invoice List -->
              <!-- Invoice List -->
              <div class="col-md-6 col-xl-3 col-sm-12 d-md-flex d-sm-block">
                <div
                  class="blog grid-blog flex-fill d-flex flex-wrap align-content-between"
                >
                  <div class="blog-image">
                    <router-link to="train-ticket-booking"
                      ><img
                        class="img-fluid"
                        src="@/assets/img/general-invoice-12.svg"
                        alt="Post Image"
                      />
                    </router-link>
                  </div>
                  <div class="invoice-content-title">
                    <router-link to="train-ticket-booking">
                      Train Ticket Booking Invoice
                    </router-link>
                  </div>
                </div>
              </div>
              <!-- /Invoice List -->
              <!-- Invoice List -->
              <div class="col-md-6 col-xl-3 col-sm-12 d-md-flex d-sm-block">
                <div
                  class="blog grid-blog flex-fill d-flex flex-wrap align-content-between"
                >
                  <div class="blog-image">
                    <router-link to="flight-booking-invoice"
                      ><img
                        class="img-fluid"
                        src="@/assets/img/general-invoice-13.svg"
                        alt="Post Image"
                      />
                    </router-link>
                  </div>
                  <div class="invoice-content-title">
                    <router-link to="flight-booking-invoice">
                      Flight Booking Invoice
                    </router-link>
                  </div>
                </div>
              </div>
              <!-- /Invoice List -->

              <!-- Invoice List -->
              <div class="col-md-6 col-xl-3 col-sm-12 d-md-flex d-sm-block">
                <div
                  class="blog grid-blog flex-fill d-flex flex-wrap align-content-between"
                >
                  <div class="blog-image">
                    <router-link to="hotel-booking"
                      ><img
                        class="img-fluid"
                        src="@/assets/img/general-invoice-14.svg"
                        alt="Post Image"
                      />
                    </router-link>
                  </div>
                  <div class="invoice-content-title">
                    <router-link to="hotel-booking"> Hotel Booking Invoice </router-link>
                  </div>
                </div>
              </div>
              <!-- /Invoice List -->
              <!-- Invoice List -->
              <div class="col-md-6 col-xl-3 col-sm-12 d-md-flex d-sm-block">
                <div
                  class="blog grid-blog flex-fill d-flex flex-wrap align-content-between"
                >
                  <div class="blog-image">
                    <router-link to="internet-billing"
                      ><img
                        class="img-fluid"
                        src="@/assets/img/general-invoice-15.svg"
                        alt="Post Image"
                      />
                    </router-link>
                  </div>
                  <div class="invoice-content-title">
                    <router-link to="internet-billing">
                      Internet Billing Invoice
                    </router-link>
                  </div>
                </div>
              </div>
              <!-- /Invoice List -->

              <!-- Invoice List -->
              <div class="col-md-6 col-xl-3 col-sm-12 d-md-flex d-sm-block">
                <div
                  class="blog grid-blog flex-fill d-flex flex-wrap align-content-between"
                >
                  <div class="blog-image">
                    <router-link to="medical"
                      ><img
                        class="img-fluid"
                        src="@/assets/img/general-invoice-16.svg"
                        alt="Post Image"
                      />
                    </router-link>
                  </div>
                  <div class="invoice-content-title">
                    <router-link to="medical"> Medical Invoice </router-link>
                  </div>
                </div>
              </div>
              <!-- /Invoice List -->

              <!-- Invoice List -->
              <div class="col-md-6 col-xl-3 col-sm-12 d-md-flex d-sm-block">
                <div
                  class="blog grid-blog flex-fill d-flex flex-wrap align-content-between"
                >
                  <div class="blog-image">
                    <router-link to="moneyexchange"
                      ><img
                        class="img-fluid"
                        src="@/assets/img/general-invoice-17.svg"
                        alt="Post Image"
                      />
                    </router-link>
                  </div>
                  <div class="invoice-content-title">
                    <router-link to="moneyexchange"> Money Exchange Invoice </router-link>
                  </div>
                </div>
              </div>
              <!-- /Invoice List -->
              <!-- Invoice List -->
              <div class="col-md-6 col-xl-3 col-sm-12 d-md-flex d-sm-block">
                <div
                  class="blog grid-blog flex-fill d-flex flex-wrap align-content-between"
                >
                  <div class="blog-image">
                    <router-link to="movie-ticket-booking"
                      ><img
                        class="img-fluid"
                        src="@/assets/img/general-invoice-18.svg"
                        alt="Post Image"
                      />
                    </router-link>
                  </div>
                  <div class="invoice-content-title">
                    <router-link to="movie-ticket-booking">
                      Movie Ticket Booking Invoice
                    </router-link>
                  </div>
                </div>
              </div>
              <!-- /Invoice List -->
              <!-- Invoice List -->
              <div class="col-md-6 col-xl-3 col-sm-12 d-md-flex d-sm-block">
                <div
                  class="blog grid-blog flex-fill d-flex flex-wrap align-content-between"
                >
                  <div class="blog-image">
                    <router-link to="restuarent-billing"
                      ><img
                        class="img-fluid"
                        src="@/assets/img/general-invoice-19.svg"
                        alt="Post Image"
                      />
                    </router-link>
                  </div>
                  <div class="invoice-content-title">
                    <router-link to="restuarent-billing">
                      Restaurant Invoice
                    </router-link>
                  </div>
                </div>
              </div>
              <!-- /Invoice List -->
              <!-- Invoice List -->
              <div class="col-md-6 col-xl-3 col-sm-12 d-md-flex d-sm-block">
                <div
                  class="blog grid-blog flex-fill d-flex flex-wrap align-content-between"
                >
                  <div class="blog-image">
                    <router-link to="student-billing"
                      ><img
                        class="img-fluid"
                        src="@/assets/img/general-invoice-20.svg"
                        alt="Post Image"
                      />
                    </router-link>
                  </div>
                  <div class="invoice-content-title">
                    <router-link to="student-billing">
                      Student Billing Invoice
                    </router-link>
                  </div>
                </div>
              </div>
              <!-- /Invoice List -->

              <div class="row">
                <div class="invoice-card-title">
                  <h6>Receipt Invoice</h6>
                </div>
                <!-- Invoice List -->
                <div class="col-md-6 col-xl-3 col-sm-12 d-md-flex d-sm-block">
                  <div
                    class="blog grid-blog flex-fill d-flex flex-wrap align-content-between"
                  >
                    <div class="blog-image">
                      <router-link to="cashreceipt-1"
                        ><img
                          class="img-fluid"
                          src="@/assets/img/cash-receipt-1.svg"
                          alt="Post Image"
                        />
                      </router-link>
                    </div>
                    <div class="invoice-content-title">
                      <router-link to="cashreceipt-1"> Cash Receipt 1 </router-link>
                    </div>
                  </div>
                </div>
                <!-- /Invoice List -->
                <!-- Invoice List -->
                <div class="col-md-6 col-xl-3 col-sm-12 d-md-flex d-sm-block">
                  <div
                    class="blog grid-blog flex-fill d-flex flex-wrap align-content-between"
                  >
                    <div class="blog-image">
                      <router-link to="cashreceipt-2"
                        ><img
                          class="img-fluid"
                          src="@/assets/img/cash-receipt-2.svg"
                          alt="Post Image"
                        />
                      </router-link>
                    </div>
                    <div class="invoice-content-title">
                      <router-link to="cashreceipt-2"> Cash Receipt 2 </router-link>
                    </div>
                  </div>
                </div>
                <!-- /Invoice List -->
                <!-- Invoice List -->
                <div class="col-md-6 col-xl-3 col-sm-12 d-md-flex d-sm-block">
                  <div
                    class="blog grid-blog flex-fill d-flex flex-wrap align-content-between"
                  >
                    <div class="blog-image">
                      <router-link to="cashreceipt-3"
                        ><img
                          class="img-fluid"
                          src="@/assets/img/cash-receipt-3.svg"
                          alt="Post Image"
                        />
                      </router-link>
                    </div>
                    <div class="invoice-content-title">
                      <router-link to="cashreceipt-3"> Cash Receipt 3 </router-link>
                    </div>
                  </div>
                </div>
                <!-- /Invoice List -->
                <!-- Invoice List -->
                <div class="col-md-6 col-xl-3 col-sm-12 d-md-flex d-sm-block">
                  <div
                    class="blog grid-blog flex-fill d-flex flex-wrap align-content-between"
                  >
                    <div class="blog-image">
                      <router-link to="cashreceipt-4"
                        ><img
                          class="img-fluid"
                          src="@/assets/img/cash-receipt-4.svg"
                          alt="Post Image"
                        />
                      </router-link>
                    </div>
                    <div class="invoice-content-title">
                      <router-link to="cashreceipt-4"> Cash Receipt 4 </router-link>
                    </div>
                  </div>
                </div>
                <!-- /Invoice List -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /Page Wrapper -->
  </div>
  <!-- /Main Wrapper -->
</template>
<script>
export default {
  data() {
    return {
      title: "Invoice Details",
    };
  },
};
</script>
