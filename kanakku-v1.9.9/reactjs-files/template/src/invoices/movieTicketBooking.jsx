import React from "react";
import { InvoiceLogo1 } from "../_components/imagepath";
import FeatherIcon from "feather-icons-react";

const MovieTicketBooking = () => {
  return (
    <>
      <div className="main-wrapper movie-booking">
        <div className="container">
          <div className="invoice-wrapper download_section">
            <div className="inv-content">
              <div className="invoice-header">
                <div className="inv-header-left">
                  <div className="invoice-title tax-invoice">TAX INVOICE</div>
                  <div className="cineplux-title">CINEPLUX</div>
                  <div className="company-details">
                    <span className="company-name invoice-title">
                      Dreamguys Cineplux
                    </span>
                    <div className="gst-details">
                      Address:{" "}
                      <span>
                        15 Hodges Mews, High Wycombe HP12 3JL, United Kingdom.
                      </span>
                    </div>
                  </div>
                </div>
                <div className="inv-header-right">
                  <a href="#">
                    <img src={InvoiceLogo1} alt="Logo" />
                  </a>
                  <div className="inv-details">
                    <div className="inv-date">
                      Date: <span>5/12/2022</span>
                    </div>
                    <div className="inv-date mb-0">
                      Invoice No: <span>INV 00001</span>
                    </div>
                  </div>
                </div>
              </div>
              <div className="invoice-address">
                <div className="invoice-to">
                  <span>Purchase Info:</span>
                  <div className="inv-to-address">
                    Walter Roberson
                    <br />
                    299 Star Trek Drive, Panama City, Florida, 32405, USA
                  </div>
                </div>
              </div>
              <div className="invoice-table">
                <div className="table-responsive">
                  <table>
                    <thead>
                      <tr className="movie-ticket-table">
                        <th className="table_width_1">#</th>
                        <th className="table_width_2">Item</th>
                        <th className="text-center">Rate/Item</th>
                        <th className="text-center">Qty</th>
                        <th className="text-end">Amount</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td className="table-description">
                          {" "}
                          Top Gun: Maverick
                          <span>22 July 2022 at 2.30pm - General Seat</span>
                        </td>
                        <td className="text-center">$200</td>
                        <td className="text-center">1</td>
                        <td className="text-end">$200</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td className="table-description ">
                          {" "}
                          The Gray Man
                          <span>22 July 2022 at 2.30pm - General Seat</span>
                        </td>
                        <td className="text-center">$200</td>
                        <td className="text-center">1</td>
                        <td className="text-end">$200</td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td className="table-description ">
                          {" "}
                          Bullet Train
                          <span>22 July 2022 at 2.30pm - General Seat</span>
                        </td>
                        <td className="text-center">$200</td>
                        <td className="text-center">1</td>
                        <td className="text-end">$200</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div className="invoice-table-footer border border-0 pt-0">
                <div className="table-footer-left notes"></div>
                <div className="text-end table-footer-right">
                  <table>
                    <tbody>
                      <tr>
                        <td>Taxable Amount</td>
                        <td>₹600.00</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div className="invoice-table-footer pt-0">
                <div className="table-footer-left notes">
                  <span />
                </div>
                <div className="text-end table-footer-right">
                  <table>
                    <tbody>
                      <tr>
                        <td>IGST 18.0%</td>
                        <td>₹6.00</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div className="invoice-table-footer">
                <div className="table-footer-left">
                  <span className="total-item">
                    Total Items / Qty : 3 / 3.00
                  </span>
                </div>
                <div className="text-end table-footer-right">
                  <table>
                    <tbody>
                      <tr>
                        <td className="invoice-title">Total</td>
                        <td className="invoice-title">₹606.00</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div className="total-amountdetails">
                <p>
                  Total amount ( in words):{" "}
                  <span> Six Hundred Six Dollers Only.</span>
                </p>
              </div>
              <div className="bank-details">
                <div className="payment-info">
                  <span className="payment-title">Payment Info:</span>
                  <div>
                    <span>Debit Card :</span> 465 *************645
                  </div>
                  <div className="mb-0">
                    <span>Amount :</span> $1,815
                  </div>
                </div>
                <div className="terms-condition">
                  <span>Terms &amp; Conditions:</span>
                  <ol>
                    <li> Goods Once sold cannot be taken back or exchanged</li>
                    <li>
                      {" "}
                      We are not the manufactures, company will stand for
                      warrenty as per their terms and conditions.
                    </li>
                  </ol>
                </div>
              </div>
              <div className="thanks-msg text-center">
                Thanks for your Business
              </div>
            </div>
          </div>
          <div className="file-link">
            <button className="download_btn download-link">
            <FeatherIcon icon="download-cloud" className="me-1"/>{" "}
              <span>Download</span>
            </button>
            <a href="javascript:window.print()" className="print-link">
            <FeatherIcon icon="printer" className="me-1"/><span className="">Print</span>
            </a>
          </div>
        </div>
      </div>
    </>
  );
};

export default MovieTicketBooking;
