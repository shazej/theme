import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { CustomerdetailspageComponent } from './customerdetailspage.component';

const routes: Routes = [
  { path: '', component: CustomerdetailspageComponent,children:[
    {
      path: 'customer-details-paid',
      loadChildren: () =>
        import('./customer-details-paid/customer-details-paid.module').then(
          (m) => m.CustomerDetailsPaidModule
        ),
    },
    {
      path: 'customer-details-cancel',
      loadChildren: () =>
        import('./customer-details-cancel/customer-details-cancel.module').then(
          (m) => m.CustomerDetailsCancelModule
        ),
    },
    {
      path: 'customer-details',
      loadChildren: () =>
        import('./customer-details/customer-details.module').then(
          (m) => m.CustomerDetailsModule
        ),
    },

  ]
 },
 
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class CustomerdetailspageRoutingModule {}
