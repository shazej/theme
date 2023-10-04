import React, { useState } from 'react'
import Header from '../layouts/Header';
import Sidebar from '../layouts/Sidebar';
import ReactStickyNotes from '@react-latest-ui/react-sticky-notes';
import { Link } from 'react-router-dom';


const Stickynote = () => {

    const [menu, setMenu] = useState(false);
    
    const toggleMobileMenu = () => {
        setMenu(!menu);
    };

  return (

    <div className={`main-wrapper ${menu ? "slide-nav" : ""}`}>
            <Header onMenuClick={(value) => toggleMobileMenu()} />

            <Sidebar />

            <div className="page-wrapper">
  <div className="content container-fluid">
    {/* Page Header */}
    <div className="page-header">
      <div className="content-page-header">
        <h5>Sticky Note</h5>
      </div>
    </div>
    {/* /Page Header */}
    <div className="row">
      {/* Sticky */}
      <div className="col-md-12">
        <div className="card">
          <div className="card-header">
            <h5 className="card-title">
              Sticky Note{" "}
              <Link
                className="btn btn-primary float-sm-end m-l-10 ms-2"
                id="add_new"
                to="#"
              >
                Add New Note
              </Link>
            </h5>
          </div>
          <div className="card-body">
          <ReactStickyNotes />

          </div>
        </div>
      </div>
      {/* /Sticky */}
    </div>
  </div>
</div>


    </div>
    


  )
}

export default Stickynote;