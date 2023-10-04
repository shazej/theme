import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { CustomerDetailsPaidRoutingModule } from './customer-details-paid-routing.module';
import { CustomerDetailsPaidComponent } from './customer-details-paid.component';
import { SharedModule } from 'src/app/shared/shared.module';


@NgModule({
  declarations: [
    CustomerDetailsPaidComponent
  ],
  imports: [
    CommonModule,
    CustomerDetailsPaidRoutingModule,
    SharedModule
  ]
})
export class CustomerDetailsPaidModule { }
