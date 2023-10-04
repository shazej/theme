import React, { useState, useEffect } from 'react';
import { Link } from 'react-router-dom';
import Header from '../layouts/Header'
import Sidebar from '../layouts/Sidebar'

const BlankPage = () => {

	const [menu, setMenu] = useState(false)

	const toggleMobileMenu = () => {
		setMenu(!menu)
	}
	return (
		<div className={`main-wrapper ${menu ? 'slide-nav' : ''}`}>

			<Header onMenuClick={(value) => toggleMobileMenu()} />
			<Sidebar />


			<div class="page-wrapper">
				<div class="content container-fluid">

					<div class="page-header">
						<div class="content-page-header">
							<h5>Blank Page</h5>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-12">
							Contents here
						</div>
					</div>

				</div>
			</div>
		</div>



	);

}
export default BlankPage;