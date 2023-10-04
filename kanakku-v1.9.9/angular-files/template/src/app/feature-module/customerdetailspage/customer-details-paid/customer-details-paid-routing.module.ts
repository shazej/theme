import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { CustomerDetailsPaidComponent } from './customer-details-paid.component';

const routes: Routes = [{ path: '', component: CustomerDetailsPaidComponent }];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class CustomerDetailsPaidRoutingModule { }
