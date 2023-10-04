import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { GoogleMapsRoutingModule } from './google-maps-routing.module';
import { GoogleMapsComponent } from './google-maps.component';
import { GMapModule } from 'primeng/gmap';

@NgModule({
  declarations: [GoogleMapsComponent],
  imports: [CommonModule, GoogleMapsRoutingModule, GMapModule],
})
export class GoogleMapsModule {}
