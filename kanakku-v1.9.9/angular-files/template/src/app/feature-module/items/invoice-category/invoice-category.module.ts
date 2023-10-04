import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { InvoiceCategoryRoutingModule } from './invoice-category-routing.module';
import { InvoiceCategoryComponent } from './invoice-category.component';
import { SharedModule } from 'src/app/shared/shared.module';

@NgModule({
  declarations: [InvoiceCategoryComponent],
  imports: [CommonModule, InvoiceCategoryRoutingModule, SharedModule],
})
export class InvoiceCategoryModule {}
