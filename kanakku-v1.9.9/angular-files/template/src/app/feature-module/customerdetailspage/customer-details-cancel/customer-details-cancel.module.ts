import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { CustomerDetailsCancelRoutingModule } from './customer-details-cancel-routing.module';
import { CustomerDetailsCancelComponent } from './customer-details-cancel.component';
import { SharedModule } from 'src/app/shared/shared.module';


@NgModule({
  declarations: [
    CustomerDetailsCancelComponent
  ],
  imports: [
    CommonModule,
    CustomerDetailsCancelRoutingModule,
    SharedModule
  ]
})
export class CustomerDetailsCancelModule { }
