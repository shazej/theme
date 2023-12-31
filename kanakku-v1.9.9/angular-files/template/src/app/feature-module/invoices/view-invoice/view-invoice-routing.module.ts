import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { ViewInvoiceComponent } from './view-invoice.component';

const routes: Routes = [
  {
    path: '',
    component: ViewInvoiceComponent,
  },
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class ViewInvoiceRoutingModule {}
