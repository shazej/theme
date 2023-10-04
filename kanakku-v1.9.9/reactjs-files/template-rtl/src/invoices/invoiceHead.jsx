import React from "react";
import { Link } from "react-router-dom";
import FeatherIcon from "feather-icons-react";
import {
  Recepit,
  TransactionMinus,
  ArchiveBook,
  Clipboard,
  MessageEdit,
  Rotate,
} from "../_components/imagepath";

const InvoiceHead = ({show,setShow}) => {
  
  return (
    <>
      <div className="page-header">
        <div className="content-page-header">
          <h5>Invoices</h5>
          <div className="list-btn">
            <ul className="filter-list">
              <li>
                <Link className="btn btn-filters w-auto popup-toggle"
                onClick={() => setShow(!show)}
                >
                  <span className="me-2">
                    {/* <i className="fe fe-filter" /> */}
                    <FeatherIcon icon="filter" />
                  </span>
                  Filter
                </Link>
              </li>
              <li>
                <Link className="btn-filters" to="#">
                  <span>
                    {/* <i className="fe fe-settings" /> */}
                    <FeatherIcon icon="settings" />
                  </span>{" "}
                </Link>
              </li>
              <li>
                <Link className="btn-filters" to="#">
                  <span>
                    {/* <i className="fe fe-grid" /> */}
                    <FeatherIcon icon="grid" />
                  </span>{" "}
                </Link>
              </li>
              <li>
                <Link className="active btn-filters" to="#">
                  <span>
                    {/* <i className="fe fe-list" /> */}
                    <FeatherIcon icon="list" />
                  </span>{" "}
                </Link>
              </li>
              <li>
                <Link className="btn btn-primary" to="/add-invoice">
                  <i className="fa fa-plus-circle ms-2" aria-hidden="true" />
                  New Invoice
                </Link>
              </li>
            </ul>
          </div>
        </div>
      </div>
      {/* /Page Header */}
      {/* Search Filter */}
      <div id="filter_inputs" className="card filter-card">
        <div className="card-body pb-0">
          <div className="row">
            <div className="col-sm-6 col-md-3">
              <div className="form-group">
                <label>Name</label>
                <input type="text" className="form-control" />
              </div>
            </div>
            <div className="col-sm-6 col-md-3">
              <div className="form-group">
                <label>Email</label>
                <input type="text" className="form-control" />
              </div>
            </div>
            <div className="col-sm-6 col-md-3">
              <div className="form-group">
                <label>Phone</label>
                <input type="text" className="form-control" />
              </div>
            </div>
          </div>
        </div>
      </div>
      {/* /Search Filter */}
      {/* Inovices card */}
      <div className="row">
        <div className="col-xl-2 col-lg-4 col-sm-6 col-12 d-flex">
          <div className="card inovices-card w-100">
            <div className="card-body">
              <div className="dash-widget-header">
                <span className="inovices-widget-icon bg-info-light">
                  <img src={Recepit} alt="" />
                </span>
                <div className="dash-count">
                  <div className="dash-title">Total Invoice</div>
                  <div className="dash-counts">
                    <p>$298</p>
                  </div>
                </div>
              </div>
              <div className="d-flex justify-content-between align-items-center">
                <p className="inovices-all">
                  No of Invoice{" "}
                  <span className="rounded-circle bg-light-gray">02</span>
                </p>
                <p className="inovice-trending text-success-light">
                  02{" "}
                  <span className="me-2">
                    <FeatherIcon icon="trending-up" />
                  </span>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div className="col-xl-2 col-lg-4 col-sm-6 col-12 d-flex">
          <div className="card inovices-card w-100">
            <div className="card-body">
              <div className="dash-widget-header">
                <span className="inovices-widget-icon bg-primary-light">
                  <img src={TransactionMinus} alt="" />
                </span>
                <div className="dash-count">
                  <div className="dash-title">Total Outstanding</div>
                  <div className="dash-counts">
                    <p>$325,215</p>
                  </div>
                </div>
              </div>
              <div className="d-flex justify-content-between align-items-center">
                <p className="inovices-all">
                  No of Invoice{" "}
                  <span className="rounded-circle bg-light-gray">03</span>
                </p>
                <p className="inovice-trending text-success-light">
                  04{" "}
                  <span className="me-2">
                    <FeatherIcon icon="trending-up" />
                  </span>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div className="col-xl-2 col-lg-4 col-sm-6 col-12 d-flex">
          <div className="card inovices-card w-100">
            <div className="card-body">
              <div className="dash-widget-header">
                <span className="inovices-widget-icon bg-warning-light">
                  <img src={ArchiveBook} alt="" />
                </span>
                <div className="dash-count">
                  <div className="dash-title">Total Overdue</div>
                  <div className="dash-counts">
                    <p>$7825</p>
                  </div>
                </div>
              </div>
              <div className="d-flex justify-content-between align-items-center">
                <p className="inovices-all">
                  No of Invoice{" "}
                  <span className="rounded-circle bg-light-gray">01</span>
                </p>
                <p className="inovice-trending text-danger-light">
                  03{" "}
                  <span className="me-2">
                    <FeatherIcon icon="trending-down" />
                  </span>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div className="col-xl-2 col-lg-4 col-sm-6 col-12 d-flex">
          <div className="card inovices-card w-100">
            <div className="card-body">
              <div className="dash-widget-header">
                <span className="inovices-widget-icon bg-primary-light">
                  <img src={Clipboard} alt="" />
                </span>
                <div className="dash-count">
                  <div className="dash-title">Cancelled</div>
                  <div className="dash-counts">
                    <p>100</p>
                  </div>
                </div>
              </div>
              <div className="d-flex justify-content-between align-items-center">
                <p className="inovices-all">
                  No of Invoice{" "}
                  <span className="rounded-circle bg-light-gray">04</span>
                </p>
                <p className="inovice-trending text-danger-light">
                  05{" "}
                  <span className="me-2">
                    <FeatherIcon icon="trending-down" />
                  </span>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div className="col-xl-2 col-lg-4 col-sm-6 col-12 d-flex">
          <div className="card inovices-card w-100">
            <div className="card-body">
              <div className="dash-widget-header">
                <span className="inovices-widget-icon bg-green-light">
                  <img src={MessageEdit} alt="" />
                </span>
                <div className="dash-count">
                  <div className="dash-title">Draft</div>
                  <div className="dash-counts">
                    <p>$125,586</p>
                  </div>
                </div>
              </div>
              <div className="d-flex justify-content-between align-items-center">
                <p className="inovices-all">
                  No of Invoice{" "}
                  <span className="rounded-circle bg-light-gray">06</span>
                </p>
                <p className="inovice-trending text-danger-light">
                  02{" "}
                  <span className="me-2">
                    <FeatherIcon icon="trending-down" />
                  </span>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div className="col-xl-2 col-lg-4 col-sm-6 col-12 d-flex">
          <div className="card inovices-card w-100">
            <div className="card-body">
              <div className="dash-widget-header">
                <span className="inovices-widget-icon bg-danger-light">
                  <img src={Rotate} alt="" />
                </span>
                <div className="dash-count">
                  <div className="dash-title">Recurring</div>
                  <div className="dash-counts">
                    <p>$86,892</p>
                  </div>
                </div>
              </div>
              <div className="d-flex justify-content-between align-items-center">
                <p className="inovices-all">
                  No of Invoice{" "}
                  <span className="rounded-circle bg-light-gray">03</span>
                </p>
                <p className="inovice-trending text-success-light">
                  02{" "}
                  <span className="me-2">
                    <FeatherIcon icon="trending-up" />
                  </span>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      {/* /Inovices card */}
      {/* All Invoice */}
    </>
  );
};

export default InvoiceHead;
