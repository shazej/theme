import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { InvoiceItemsRoutingModule } from './invoice-items-routing.module';
import { InvoiceItemsComponent } from './invoice-items.component';
import { SharedModule } from 'src/app/shared/shared.module';

@NgModule({
  declarations: [InvoiceItemsComponent],
  imports: [CommonModule, InvoiceItemsRoutingModule, SharedModule],
})
export class InvoiceItemsModule {}
