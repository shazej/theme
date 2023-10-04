import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { ItemsComponent } from './items.component';

const routes: Routes = [
  {
    path: '',
    component: ItemsComponent,
    children: [
      {
        path: 'invoice-items',
        loadChildren: () =>
          import('./invoice-items/invoice-items.module').then(
            (m) => m.InvoiceItemsModule
          ),
      },
      {
        path: 'invoice-category',
        loadChildren: () =>
          import('./invoice-category/invoice-category.module').then(
            (m) => m.InvoiceCategoryModule
          ),
      },
    ],
  },
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class ItemsRoutingModule {}
