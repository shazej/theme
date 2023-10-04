import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { CustomerDetailsCancelComponent } from './customer-details-cancel.component';

const routes: Routes = [{ path: '', component: CustomerDetailsCancelComponent }];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class CustomerDetailsCancelRoutingModule { }
